<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        $data = Page::where('slug','home')->first();
        return view('pages.home')
                    ->withData($data);
    }

    // About Page
    public function about()
    {
        return view('pages.about')
        ->withData(Page::where('slug','about')->first())
        ->withAdmins(User::where('is_admin',1)->get())
        ->withUsers(User::where('is_admin',0)->get());
    }


    public function contact()
    {
        return view('pages.contact')
        ->withData(Page::where('slug','contact')->first());
    }
}
