<?php

namespace App\Http\Controllers\Admin;

use Validator;
use App\Models\Menu;
use App\Models\ContentPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContentSection;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
class MenuController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('menu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menus = Menu::whereParentId(0)->withCount('subMenus')->get();

        return view('dashboard.admin.menu.index', compact('menus'));
    }

    public function create()
    {
        abort_if(Gate::denies('menu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $parentId = 0;
        return view('dashboard.admin.menu.create', compact('parentId'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|unique:menus',
            'title' => 'required'
        ]);

        // dd($request->all());
        $menu = Menu::create($request->all());

        if ($request->has('content') && $request->content == 1 && $menu) {
            $request->merge(['title' => $request->ctitle]);
            $request->merge(['menu_id' => $menu->id, 'user_id' => auth()->user()->id]);
            $contentPage = ContentPage::create($request->all());
            if ($request->input('featured_image', false)) {
                $contentPage->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
    
            if ($media = $request->input('ck-media', false)) {
                Media::whereIn('id', $media)->update(['model_id' => $contentPage->id]);
            }
        }

        if ($request->last_url) {
            return  redirect()->to($request->last_url)->with('message','Menu Item Created');
        }
        return redirect()->route('admin.menu.index')->with('message', 'Menu Item Created');
    }

    public function edit(Menu $menu)
    {
        abort_if(Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('dashboard.admin.menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'slug' => 'required|unique:menus,slug,'.$menu->id,
            'title' => 'required'
        ]);
            
        $menu->update($request->all());

        if ($request->has('content') && $request->content == 1 && $menu) {
            // dd($request->all());
            $request->merge(['title' => $request->ctitle]);
            $contentPage =  ContentPage::whereMenuId($menu->id)->first();

            if ($contentPage) {
                ContentPage::whereMenuId($menu->id)->update($request->except(['_method', '_token', 'featured_image', 'last_url', 'slug', 'content', 'ctitle', 'ck-media']));
            }else{
                $request->merge(['menu_id' => $menu->id, 'user_id' => auth()->user()->id]);
                $contentPage = ContentPage::create($request->all());
            }

            if ($request->input('featured_image', false)) {
                if (!$contentPage->featured_image || $request->input('featured_image') !== $contentPage->featured_image->file_name) {
                    if ($contentPage->featured_image) {
                        $contentPage->featured_image->delete();
                    }
                    $contentPage->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
                }
            // } elseif ($contentPage->featured_image) {
            //     $contentPage->featured_image->delete();
            }
        }
        if ($request->last_url) {
            return  redirect()->to($request->last_url)->with('message','Menu Item Updated');
        }
        return redirect()->route('admin.menu.index')->with('message', 'Menu Updated');
    }

    public function show(Menu $menu)
    {
        abort_if(Gate::denies('menu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('dashboard.admin.menu.show', compact('menu'));
    }

    public function destroy(Menu $menu)
    {
        abort_if(Gate::denies('menu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menu->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        Menu::whereIn('id', $request->ids)->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function subIndex($id)
    {
        abort_if(Gate::denies('menu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        $menus = Menu::whereParentId($id)->withCount('subMenus')->get();

        return view('dashboard.admin.menu.sub.index', compact('menus', 'menu'));
    }

    public function subCreate($id)
    {
        abort_if(Gate::denies('menu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.sub.create', compact('menu'));
    }

    public function subEdit($id)
    {
        abort_if(Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.sub.edit', compact('menu'));
    }

    public function childIndex($id)
    {
        abort_if(Gate::denies('menu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        $menus = Menu::whereParentId($id)->withCount('subMenus')->get();
        return view('dashboard.admin.menu.child.index', compact('menus', 'menu'));
    }

    public function childCreate($id)
    {
        abort_if(Gate::denies('menu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.child.create', compact('menu'));
    }

    public function childEdit($id)
    {
        abort_if(Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.child.edit', compact('menu'));
    }


    public function childSubIndex($id)
    {
        abort_if(Gate::denies('menu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        $menus = Menu::whereParentId($id)->withCount('subMenus')->get();
        return view('dashboard.admin.menu.child-sub.index', compact('menus', 'menu'));
    }

    public function childSubCreate($id)
    {
        abort_if(Gate::denies('menu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.child-sub.create', compact('menu'));
    }

    public function childSubEdit($id)
    {
        abort_if(Gate::denies('menu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $menu = Menu::whereId($id)->first();
        return view('dashboard.admin.menu.child-sub.edit', compact('menu'));
    }

    public function addContent(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'title' => 'required',
            'menu_id' => 'required',
        ]);

        $contentSection = ContentSection::create($request->all());

        if ($contentSection) {

            if ($request->input('img', false)) {
                $contentSection->addMedia(storage_path('tmp/uploads/' . basename($request->input('img'))))->toMediaCollection('featured_image');
            }
        }

        if ($request->last_url) {
            return  redirect()->to($request->last_url)->with('message','Menu Content Created');
        }

        return redirect()->route('admin.menu.index')->with('message', 'Menu Content Created');
    }
}
