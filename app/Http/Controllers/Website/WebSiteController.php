<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Homepage;
use App\Models\ContentPage;
use App\Models\BlogPage;
use Cache;

class WebSiteController extends Controller
{
    public $website = [];

    public function __construct(){
        $this->website['menus'] = Cache::remember('menus', 60, function() {
            return Menu::withCount('subMenus')->get(['id', 'title', 'slug']); 
        });   

        $this->website['subscribeus'] = Cache::remember('subscribeus', 60, function() {
            return Homepage::wherePage('subscribe us')->first();
        });     
    }

    private function common()
    {
        $data['team'] = Homepage::wherePage('team')->with('subHomepages')->get();
        $data['menus'] =  $this->website['menus'];
        $data['subscribeus'] =  $this->website['subscribeus'];
        $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->get();
        $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->get();
        $data['logo'] = Homepage::wherePage('logo')->first();
        $data['footerdata'] = Homepage::wherePage('footer data')->first();
        return $data;
    }

    public function index()
    {
        $data = $this->common();
        $data['metadata'] = Homepage::wherePage('meta data')->first();
        $data['thesisNdissertation'] = Homepage::wherePage('thesis n dissertation')->first();
        $data['bestthesis'] = Homepage::wherePage('best thesis')->first();
        $data['expectus'] = Homepage::wherePage('expect from us')->with('subHomepages')->get();
        $data['whatYouneed'] = Homepage::wherePage('whatYouneed')->with('subHomepages')->get();
        $data['clientsSays'] = Homepage::wherePage('clientsSays')->with('subHomepages')->get();
        $data['sendyourquery'] = Homepage::wherePage('sendyourquery')->with('subHomepages')->get();
        $data['explorePossibilities'] = Homepage::wherePage('explorePossibilities')->with('subHomepages')->get();

        $data['hireus'] = Homepage::wherePage('hire us')->with('subHomepages')->get();
        $data['callus'] = Homepage::wherePage('call us')->first();
        $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->get();
        $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->get();
        $data['fillrequirements'] = Homepage::wherePage('fill requirements')->first();
        return view('website.index', $data);
    }

    public function about(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('about')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            return view('website.pages.about', $data);
        }
        abort(404, "page not found");
    }

    public function contact(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('contact')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['sendyourquery'] = Homepage::wherePage('sendyourquery')->with('subHomepages')->get();
            return view('website.pages.contact', $data);
        }
        abort(404, "page not found");
    }

    public function price(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('price')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->get();
            return view('website.pages.price', $data);
        }
        abort(404, "page not found");
    }
    public function blog(Request $request)
    {        
        $blogs = BlogPage::all();
        // dd($blogs);
        return view('website.pages.blog',compact('blogs'));
    }

    public function privacyPolicy(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('privacy-policy')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
        }
        return view('website.pages.privacy-policy', $data);
        abort(404, "page not found");
    }

    public function post(Request $request, $slug)
    {
        $data = $this->common();
        $data['countries'] = Menu::whereParentId(9)->get();
        $menu = Menu::whereSlug($slug)->first();
        if ($menu->content == 1) {
            $data['states'] = Menu::whereParentId($menu->parent_id)->get();
            $data['post'] = ContentPage::whereMenuId($menu->id)->withCount(['writers', 'faqs'])->first();
            return view('website.pages.post', $data);
        }
        abort(404, "page not found");
    }
}
