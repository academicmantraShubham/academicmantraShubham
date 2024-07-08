<?php

namespace App\Http\Controllers\Website;

use Arr;
use Storage;
use App\Models\Menu;
use App\Models\BlogPage;
use App\Models\Homepage;
use App\Models\Calculator;
use App\Models\ContentPage;
use Illuminate\Http\Request;
use App\Models\ContentCategory;
use App\Notifications\OrderPlaced;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;

class WebSiteController extends Controller
{
    public $website = [];

    public function __construct()
    {
        $this->website['menus'] = Cache::remember('menus', 60, function () {
            return Menu::with('subMenus.subMenus.subMenus')->orderBy('position', 'ASC')->whereParentId(0)->whereIsPage(0)->whereStatus(1)->get(['id', 'title', 'slug', 'content']);
        });
        // $this->website['menus'] =  Menu::with('subMenus.subMenus')->whereParentId(0)->get(['id', 'title', 'slug']);  

        $this->website['subscribeus'] = Cache::remember('subscribeus', 60, function () {
            return Homepage::wherePage('subscribe us')->first();
        });
    }

    private function common()
    {
        $data['calculators'] = Calculator::whereNotNull('place')->get();
        $data['team'] = Homepage::wherePage('team')->with('subHomepages')->get();
        $data['menus'] =  $this->website['menus'];
        $data['subscribeus'] =  $this->website['subscribeus'];
        $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->get();
        $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->get();
        $data['logo'] = Homepage::select(['image', 'alt'])->wherePage('logo')->first();
        $data['footerdata'] = Homepage::wherePage('footer data')->first();
        $data['pages'] = Cache::remember('pages', 60, function () {
            return Menu::orderBy('position', 'ASC')->whereParentId(0)->whereIsPage(1)->get(['id', 'title', 'slug', 'content']);
        });
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
        $data['writers'] = Homepage::wherePage('writers')->with('Menu')->inRandomOrder()->limit(6)->get();
        // dd( $data['writers'] );
        $data['clientsSays'] = Homepage::wherePage('clientsSays')->with('subHomepages')->first();
        $data['callus'] = Homepage::wherePage('call us')->with('subHomepages')->first();
        $data['explorePossibilities'] = Homepage::wherePage('explorePossibilities')->first();
        $data['calculators'] = Calculator::whereNotNull('place')->get();
        $data['faqs'] = Homepage::wherePage('asked questions')->with('subHomepages')->first();
        $data['askedquestions'] = Homepage::wherePage('asked questions')->with('subHomepages')->first();
        $data['bestoffers'] = Homepage::wherePage('best offers')->with('subHomepages')->first();
        $data['usps'] = Homepage::wherePage('usp')->with('subHomepages')->first();
        $data['hblog'] = Homepage::wherePage('blog')->first();
        $data['looking_prof'] = Homepage::wherePage('looking_prof')->first();
        $data['customessay'] = Homepage::wherePage('customessay')->first();
        $data['blogs'] = ContentPage::whereType('blog')->latest()->take(3)->get();
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

    public function blogs(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('blogs')->first();
        if ($menu) {
            $data['blogs'] = ContentPage::whereType('blog')->latest()->paginate(7);
            $data['categories'] = ContentCategory::all();
            return view('website.pages.blog', $data);
        }
        abort(404, "page not found");
    }

    public function blog($slug)
    {
        $data = $this->common();
        $data['bolgDetails'] = ContentPage::whereSlug($slug)->first();
        return view('website.pages.detail', $data);
    }

    public function category(Request $request, $slug)
    {
        $data = $this->common();
        // $menu = Menu::whereSlug('blogs')->first();
        $data['category'] = ContentCategory::whereSlug($slug)->with('contents')->first();
        if ($data['category']) {
            $data['categories'] = ContentCategory::all();
            return view('website.pages.category', $data);
        }
        abort(404, "page not found");
    }

    // public function privacyPolicy(Request $request)
    // {
    //     $data = $this->common();
    //     $menu = Menu::whereSlug('privacy-policy')->first();
    //     if ($menu) {
    //         $data['post'] = ContentPage::whereMenuId($menu->id)->first();
    //         return view('website.pages.pages', $data);
    //     }
    //     abort(404, "page not found");
    // }

    // public function terms(Request $request)
    // {
    //     $data = $this->common();    
    //     $menu = Menu::whereSlug('terms-and-condition')->first();
    //     if ($menu) {
    //         $data['post'] = ContentPage::whereMenuId($menu->id)->first();
    //         return view('website.pages.pages', $data);
    //     }
    //     abort(404, "page not found");
    // }

    public function post(Request $request, $slug)
    {
        $data = $this->common();
        $data['countries'] = Menu::whereParentId(9)->get();
        $menu = Menu::whereSlug($slug)->first();

        if($menu && $menu->is_page == 1){
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            return view('website.pages.pages', $data);
        }

        if ($menu && $menu->content == 1) {
            $data['cities'] = Menu::whereParentId($menu->parent_id)->with('post')->get();
            $data['post'] = ContentPage::whereMenuId($menu->id)->with(['writers.Menu', 'faqs'])->first();
            $files = Storage::allFiles('public/banners');
            $rand = Arr::random($files, 1);
            $data['banner'] =  str_replace("public", "storage", $rand[0]);
            $data['writers'] = Homepage::wherePage('writers')->inRandomOrder()->with(['Menu'])->limit(6)->get();
            $data['whyChooseUs'] = Homepage::wherePage('why-choose-us')->inRandomOrder()->limit(4)->get();
            return view('website.pages.post', $data);
        }
        abort(404, "page not found");
    }

    public function order()
    {
        $data = $this->common();
        $data['whyChooseUs'] = Homepage::wherePage('why-choose-us')->inRandomOrder()->limit(4)->get();
        $data['services'] = Menu::whereIn('id', [3, 181])->withCount('subMenus')->get();
        return view('website.pages.order-now', $data);
    }

    public function experts(Request $request)
    {
        $data = $this->common();
        $menu = Menu::whereSlug('experts')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['writers'] = Homepage::wherePage('writers')->paginate(10);
            $data['services'] = Menu::whereIn('id', [3, 9])->withCount('subMenus')->get();
            $data['whyChooseUs'] = Homepage::wherePage('why-choose-us')->inRandomOrder()->limit(4)->get();
            return view('website.pages.experts', $data);
        }
        abort(404, "page not found");
    }

    public function services()
    {
        $data = $this->common();
        $menu = Menu::whereSlug('essay-writing-services')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['services'] = Menu::whereIn('id', [3])->withCount('subMenus')->get();
            $data['writers'] = Homepage::wherePage('writers')->inRandomOrder()->with(['Menu'])->limit(6)->get();
            return view('website.pages.services', $data);
        }
        abort(404, "page not found");
    }

    public function locations()
    {
        $data = $this->common();
        $menu = Menu::whereSlug('where-we-serve')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['cities'] = Menu::whereParentId(10)->with('post')->get();
            $data['writers'] = Homepage::wherePage('writers')->inRandomOrder()->with(['Menu'])->limit(6)->get();
            return view('website.pages.locations', $data);
        }
        abort(404, "page not found");
    }

    public function reviews()
    {
        $data = $this->common();
        $menu = Menu::whereSlug('reviews')->first();
        if ($menu) {
            $data['post'] = ContentPage::whereMenuId($menu->id)->first();
            $data['reviews'] = Homepage::whereParentId('38')->get();
            $data['services'] = Menu::whereIn('id', [3, 9])->withCount('subMenus')->get();
            $data['whyChooseUs'] = Homepage::wherePage('why-choose-us')->inRandomOrder()->limit(4)->get();
            return view('website.pages.reviews', $data);
        }
        abort(404, "page not found");
    }

    public function placeOrder(Request $request)
    {
        $this->validate($request, [
            'name'      =>   'required',
            'service'   =>   'required',
            'email'     =>   'required|email',
            'deadline'  =>   'required',
            'topic'     =>   'required',
            'word_count' =>  'required',
            'file.*'    =>   'max:20000',
        ]);

        Notification::route('mail', $request->email)->notify(new OrderPlaced($request));
        return redirect()->back()->withSuccess('Thank You !! we will get back to you.');
    }
}
