<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\Menu;
use Validator;
use Illuminate\Support\Str;


class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homepages = Homepage::whereParentId(0)->whereStatus(1)->withCount('subHomepages')->get();
        $metadata = Homepage::wherePage('meta data')->withCount('subHomepages')->first();
        $footerdata = Homepage::wherePage('footer data')->withCount('subHomepages')->first();
        $logo = Homepage::wherePage('logo')->withCount('subHomepages')->first();
        return view('dashboard.admin.homepage.index', compact('homepages', 'metadata', 'footerdata', 'logo'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/homepage/');
            $image->move($path, $img);
            $request->merge(['image' => '/images/homepage/'.$img]);
        }
        
        if ( $request->hasFile('bg_img')) {
            $image = $request->file('bg_img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/homepage/');
            $image->move($path, $img);
            $request->merge(['bg_image' => '/images/homepage/'.$img]);
        }

        $homepage = Homepage::create($request->all());

        if ($request->last_url) {
            return  redirect()->to($request->last_url)->with('message', 'Home Page Data Added');
        }
        return redirect()->route('admin.homepage.index')->with('message', 'Home Page Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/homepage/');
            $image->move($path, $img);
            $request->merge(['image' => '/images/homepage/'.$img]);
        }
        
        if ( $request->hasFile('bg_img')) {
            $image = $request->file('bg_img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/homepage/');
            $image->move($path, $img);
            $request->merge(['bg_image' => '/images/homepage/'.$img]);
        }

        $homepage = Homepage::whereId($id)->update($request->except(['_token', 'img', '_method', 'last_url', 'bg_img']));

        if ($request->last_url) {
            return  redirect()->to($request->last_url)->with('message', 'Home Page Data Updated');
        }
        return redirect()->route('admin.homepage.index')->with('message', 'Home Page Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function subIndex($id)
    {
        $Homepage = Homepage::whereId($id)->first();
        $homepages = Homepage::whereParentId($id)->get();

        return view('dashboard.admin.homepage.subindex', compact('Homepage', 'homepages'));
    }

    public function writers()
    {
        $writers = Homepage::wherePage('writers')->with('Menu')->get();
        $menus = Menu::whereIn('id', [3,9])->withCount('subMenus')->get();
        return view('dashboard.admin.writers.index', compact('writers', 'menus'));
    }

    public function faqs()
    {
        $faqs = Homepage::wherePage('faqs')->with('Menu')->get();
        $menus = Menu::whereIn('id', [3,9])->withCount('subMenus')->get();
        return view('dashboard.admin.faqs.index', compact('faqs', 'menus'));
    }
}
