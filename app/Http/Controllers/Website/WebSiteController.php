<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Homepage;
use App\Models\ContentPage;
use App\Models\BlogPage;
use App\Models\Calculator;
use Cache;

class WebSiteController extends Controller
{
    public $website = [];

    public function __construct(){
        $this->website['menus'] = Cache::remember('menus', 60, function() {
            return Menu::with('subMenus.subMenus')->whereParentId(0)->get(['id', 'title', 'slug']);  
        });   
        // $this->website['menus'] =  Menu::with('subMenus.subMenus')->whereParentId(0)->get(['id', 'title', 'slug']);  

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
        $data['logo'] = Homepage::select(['image', 'alt'])->wherePage('logo')->first();
        $data['footerdata'] = Homepage::wherePage('footer data')->first();
        return $data;
    }

    public function index()
    {
        $data = $this->common();
        // $data['homepage'] = Homepage::with('subHomepages')->get();
        $data['metadata'] = Homepage::wherePage('meta data')->first();
        $data['thesisNdissertation'] = Homepage::wherePage('thesisNdissertation')->first();
        $data['bestthesis'] = Homepage::wherePage('best thesis')->first();
        $data['expectus'] = Homepage::wherePage('expect from us')->with('subHomepages')->first();
        $data['whatYouneed'] = Homepage::wherePage('whatYouneed')->with('subHomepages')->first();
        $data['clientsSays'] = Homepage::wherePage('clientsSays')->with('subHomepages')->first();
        $data['callus'] = Homepage::wherePage('call us')->with('subHomepages')->first();
        $data['explorePossibilities'] = Homepage::wherePage('explorePossibilities')->first();
        $data['calculators'] = Calculator::whereNotNull('place')->get();
        $data['faqs'] = Homepage::wherePage('asked questions')->with('subHomepages')->first();
        $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->first();
        $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->first();
        $data['usps'] = Homepage::wherePage('usp')->with('subHomepages')->first();
        $data['hblog'] = Homepage::wherePage('blog')->first();
        $data['customessay'] = Homepage::wherePage('customessay')->first();
        $data['blogs'] = ContentPage::whereType('blog')->take(4)->get();
        $data['freeServices'] = Homepage::wherePage('freeServices')->withCount('subHomepages')->first();
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
            view('website.pages.contact', $data);
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
        $data = $this->common();
        $menu = Menu::whereSlug('blogs')->first();
        if ($menu) {
            $data['blogs'] = ContentPage::whereType('blog')->paginate(6);
            return view('website.pages.blog', $data);
        }
        abort(404, "page not found");
    } 

    public function privacyPolicy(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('privacy-policy')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            return view('website.pages.privacy-policy', $data);
        }
        abort(404, "page not found");
    }

    public function detail($id)
    {   
        $data = $this->common();
        $data['bolgDetails'] = ContentPage::whereId($id)->first();
        return view('website.pages.detail', $data);
    }

    public function post(Request $request, $slug)
    {
        $data = $this->common();
        $data['countries'] = Menu::whereParentId(9)->get();
        $menu = Menu::whereSlug($slug)->first();
        if ($menu->content == 1) {
            // $data['states'] = Menu::whereParentId($menu->parent_id)->get();
            $data['post'] = ContentPage::whereMenuId($menu->id)->withCount(['writers', 'faqs'])->first();
            // dd($data);
            return view('website.pages.post', $data);
        }
        abort(404, "page not found");
    }
    
    public function order(){
        $data = $this->common();
        return view('website.pages.order-now', $data);
    }
    
    public function experts(){
        $data = $this->common();
        $menu = Menu::whereSlug('experts')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['writers'] = Homepage::wherePage('writers')->paginate(10);
            return view('website.pages.experts', $data);
        }
         abort(404, "page not found");
    }
    
    public function samples(){
        $data = $this->common();
        $menu = Menu::whereSlug('samples')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['samples'] = Homepage::wherePage('samples')->paginate(10);
            return view('website.pages.samples', $data);
        }
        return view('website.pages.samples', $data);
    }
}
