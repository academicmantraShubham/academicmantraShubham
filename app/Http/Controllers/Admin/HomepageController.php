<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\Menu;
use App\Models\Voucher;
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
        $homepages = Homepage::whereParentId(0)->whereStatus(1)->withCount('subHomepages')->orderBy('section_position')->get();
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
        $find =  Homepage::find($id);
        if($find){
            $find->delete();
            return  redirect()->back()->with('message', 'Home Page Data Deleted');
        }
        return  redirect()->back()->with('message', 'Error: Item Not Found');
    }

    public function updatePosition(Request $request)
    {
        foreach ($request->order as $order) {
            Homepage::whereId($order['id'])->update(['section_position' => $order['section_position']]);
        }
        
        return response()->json(['data' => $request->order, 'message' => 'updated position', 'status' => 'success'], 200);
    }

    public function subIndex($id)
    {
        $Homepage = Homepage::whereId($id)->first();
        $homepages = Homepage::whereParentId($id)->wherePage(null)->get();
        return view('dashboard.admin.homepage.subindex', compact('Homepage', 'homepages'));
    }

    public function writers()
    {
        $writers = Homepage::wherePage('writers')->with('Menu')->paginate(10);
        $menus = Menu::whereIn('id', [3,9,181])->withCount('subMenus')->get();
        return view('dashboard.admin.writers.index', compact('writers', 'menus'));
    }

    public function faqs()
    {
        $faqs = Homepage::wherePage('faqs')->with('Menu')->paginate(10);
        $menus = Menu::whereIn('id', [3,9,181])->withCount('subMenus')->get();
        return view('dashboard.admin.faqs.index', compact('faqs', 'menus'));
    }
    
    //reviews
    public function reviews()
    {
        $faqs = Homepage::wherePage('reviews')->with('Menu')->paginate(10);
        $menus = Menu::whereIn('id', [3,9,181])->withCount('subMenus')->get();
        return view('dashboard.admin.faqs.index', compact('faqs', 'menus'));
    }
    
    //why choose us
    public function whyChooseUs()
    {
        $whyChooseUs = Homepage::wherePage('why-choose-us')->paginate(10);
        $menus = Menu::whereIn('id', [3,9,181])->withCount('subMenus')->get();
        return view('dashboard.admin.why-choose-us.index', compact('whyChooseUs'));
    }
    
    public function samples()
    {
        $samples = Homepage::wherePage('samples')->with('Menu')->paginate(10);
        $menus = Menu::whereIn('id', [3,9,181])->withCount('subMenus')->get();
        return view('dashboard.admin.samples.index', compact('samples', 'menus'));
    }

    /**
     * view voucher list
     */
    public function vouchers()
    {
        $vouchers = Voucher::get();
        return view('dashboard.admin.vouchers.index', compact('vouchers'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addVoucher(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'code' => 'required',
            'type' => 'required',
            'img' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/voucher/');
            $image->move($path, $img);
            $request->merge(['image' => '/images/voucher/'.$img]);
        }
        
        Voucher::create($request->all());
        return redirect()->back()->with('message', 'Voucher Added');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function updateVoucher(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'code' => 'required',
            'type' => 'required',
        ]);

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('images/voucher/');
            $image->move($path, $img);
            $request->merge(['image' => '/images/voucher/'.$img]);
        }
        
        $homepage = Voucher::whereId($request->id)->update($request->except(['_token', 'img', '_method', 'last_url']));

        return redirect()->back()->with('message', 'Voucher Data Updated');
    }


    /**
     * Remove the specified resource from storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function deleteVoucher(Request $request)
    {
        $find =  Voucher::find($request->id);
        if($find){
            $find->delete();
            return  redirect()->back()->with('message', 'Voucher Data Deleted');
        }
        return  redirect()->back()->with('message', 'Error: Item Not Found');
    }
}
