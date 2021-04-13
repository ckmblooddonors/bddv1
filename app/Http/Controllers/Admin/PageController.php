<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // pages
    protected  $pages = ['home','about','contact','blog','faq'];

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        // Check predefine pages
        if (!in_array($slug, $this->pages)) {
            return back()->with('error','Sorry! Page not found.');
        }
        // find Static pages
        $data = Page::where('slug',$slug)->first();
        
        switch ($slug) {
            case 'home':
                
                // dd($data->parts);
                return view('admin.page.home')->withData($data);
                break;
                
            case 'about':
                return view('admin.page.about')->withData($data);
                break;

            case 'contact':
                return view('admin.page.contact')->withData($data);
                break;

            default:
                dd('Error! Coming Soon.');
                break;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // dd($request->all());
        //updateOrCreate
        if (!in_array($slug, $this->pages)) {
            return back()->with('error','Sorry! Page not found.');
        }
        // dd($slug,$this->createParts($slug));
        $data = Page::firstOrNew(['slug'=>$slug]);
        // dd($data,$slug);
        $data->title = ucfirst($slug);
        // dd(request()->all());
        $data->parts = $this->createParts($slug);
        $data->seo = $this->createSEO();
        $data->save();
        return back()->with('info','Updated.');
    }



    protected function createParts($slug)
            {
                $carosoulValidateField = 
                [
                    "slide1_url" => "nullable|url",
                    "slide1_title" => "nullable|string",
                    "slide1_subtitle" => "nullable|string",
                    "slide2_url" => "nullable|url",
                    "slide2_title" => "nullable|string",
                    "slide2_subtitle" => "nullable|string",
                    "slide3_url" => "nullable|url",
                    "slide3_title" => "nullable|string",
                    "slide3_subtitle" => "nullable|string"
                ];
            switch ($slug) {
                // For Home page.
                case 'home':
                    $validateRules = $carosoulValidateField;
                    $validateRules+=[
                      "details" => "nullable|string",
                      "who_are_we_img" => "nullable|url",
                      "who_are_we" => "nullable",
                    ];
                    return request()->validate($validateRules);
                    break;
                    // For about page
                case 'about':
                    $validateRules = $carosoulValidateField;
                    $validateRules +=[
                        'about_us_img'=>'nullable|url',
                        'about_us_description'=>'nullable|string'
                    ];
                    return request()->validate($validateRules);
                    break;

                    // for contact page
                case 'contact':
                    $validateRules = $carosoulValidateField;
                    $validateRules +=[
                        'contact_us_description'=>'nullable|string'
                    ];
                    return request()->validate($validateRules);
                    break;
                    // error for default value.
                default:
                    dd('error! can not validate!');
                    break;
            }
    }
    // return validate array of seo.
    protected function createSEO()
    {
        return request()->validate([
            "description" => 'nullable|string',
              "keywords" => 'nullable|string',
              "author" => 'nullable|string',
              "copyright" => 'nullable|string',
              "application_name" => 'nullable|string',
              "og_title" => 'nullable|string',
              "og_type" => 'nullable|string',
              "og_image" => 'nullable|string',
              "og_url" => 'nullable|url',
              "og_description" => 'nullable|string',
              "fb_app_id" => 'nullable|string',
              "og_locale" => 'nullable|string',
              "twitter_card" => 'nullable|string',
              "twitter_title" => 'nullable|string',
              "twitter_description" => 'nullable|string',
              "twitter_image" => 'nullable|string',
        ]);

    }
}
