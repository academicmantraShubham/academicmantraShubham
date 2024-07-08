<?php

namespace App\Http\Controllers\Admin;

use Gate;
use App\Models\Menu;
use App\Models\ContentTag;
use App\Models\ContentPage;
use Illuminate\Http\Request;
use App\Models\ContentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContentPageRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdateContentPageRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContentPageRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ContentPageController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('content_page_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPages = ContentPage::where('type', 'blog')->with(['categories', 'tags', 'media'])->latest()->get();

        return view('dashboard.admin.contentPages.index', compact('contentPages'));
    }

    public function create()
    {
        abort_if(Gate::denies('content_page_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = ContentCategory::pluck('name', 'id');
        $menus = Menu::where('content', 0)->get();
        $tags = ContentTag::pluck('name', 'id');

        return view('dashboard.admin.contentPages.create', compact('categories', 'tags', 'menus'));
    }

    public function store(StoreContentPageRequest $request)
    {
        $request->merge(['user_id' => auth()->user()->id]);
        $contentPage = ContentPage::create($request->all());
        $contentPage->categories()->sync($request->input('categories', []));
        $contentPage->tags()->sync($request->input('tags', []));
        Menu::whereId($request->menu_id)->update(['content' => 1]);
        if ($request->input('featured_image', false)) {
            $contentPage->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contentPage->id]);
        }

        return redirect()->route('admin.content-pages.index');
    }

    public function edit(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Menu::where('content', 0)->get();
        $menu =  Menu::whereId($contentPage->menu_id)->get();
        $menus = $menus->merge($menu);

        $categories = ContentCategory::pluck('name', 'id');

        $tags = ContentTag::pluck('name', 'id');

        $contentPage->load('categories', 'tags');

        return view('dashboard.admin.contentPages.edit', compact('categories', 'tags', 'contentPage', 'menus'));
    }

    public function update(UpdateContentPageRequest $request, ContentPage $contentPage)
    {
        $contentPage->update($request->all());
        $contentPage->categories()->sync($request->input('categories', []));
        $contentPage->tags()->sync($request->input('tags', []));
        if ($request->input('featured_image', false)) {
            if (!$contentPage->featured_image || $request->input('featured_image') !== $contentPage->featured_image->file_name) {
                if ($contentPage->featured_image) {
                    $contentPage->featured_image->delete();
                }
                $contentPage->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($contentPage->featured_image) {
            $contentPage->featured_image->delete();
        }

        return redirect()->route('admin.content-pages.index');
    }

    public function show(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contentPage->load('categories', 'tags');

        return view('dashboard.admin.contentPages.show', compact('contentPage'));
    }

    public function destroy(ContentPage $contentPage)
    {
        abort_if(Gate::denies('content_page_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        Menu::whereId($contentPage->menu_id)->update(['content' =>  0]);
        $contentPage->delete();
        return back();
    }

    public function massDestroy(MassDestroyContentPageRequest $request)
    {
        ContentPage::whereIn('id', request('ids'))->delete();
        //Set Observer to change menu content 0
        // Menu::whereIn('id', request('ids'))->update(['content' =>  0]);
        return response(null, Response::HTTP_NO_CONTENT);
    }

    //add blogs 
    public function blogsStore(Request $request)
    {

        $request->merge(['user_id' => auth()->user()->id, 'menu_id' => 114]);
        $contentPage = ContentPage::create($request->all());
        $contentPage->categories()->sync($request->input('categories', []));
        $contentPage->tags()->sync($request->input('tags', []));

        if ($request->input('featured_image', false)) {
            $contentPage->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contentPage->id]);
        }

        return redirect()->route('admin.content-pages.index');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('content_page_create') && Gate::denies('content_page_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $request->validate([
            'upload' => 'image',
        ]);

        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->move(public_path('images'), $fileName);
            $url = asset('images/' . $fileName);
            return response()->json(['id' => 1, 'url' =>  $url], Response::HTTP_CREATED);
        }
    }
}
