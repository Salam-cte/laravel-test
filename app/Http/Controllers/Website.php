<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaticContent;
use App\Branch;
use App\Testimonial;
use App\Slider;
use Artesaos\SEOTools\Facades\SEOTools;

class Website extends Controller
{
    //
    public function seo_tools($page){
        if(!empty($page->seo_title)){
            SEOTools::setTitle($page->seo_title);
        }else{
            SEOTools::setTitle($page->title);
        }

        SEOTools::setDescription($page->meta_keywords);
        SEOTools::setDescription($page->meta_description);
            

        return true;
    }
    function index() 
    {
        $page=\DB::table('pages')->find(1);
        $this->seo_tools($page);
        $testimonials =Testimonial::orderBy('order','ASC')->get();
        $branches =Branch::orderBy('order','ASC')->get();
        $sliders =Slider::orderBy('order','ASC')->get();

        $content[1]=StaticContent::find(6);
        $content[2]=StaticContent::find(1);
        $content[3]=StaticContent::find(2);
        $content[4]=StaticContent::find(3);
        $content[5]=StaticContent::find(4);
        $content[6]=StaticContent::find(5);

        $content[7]=StaticContent::find(7);


        return view('content/index')
            ->with('page',$page)
            ->with('content',$content)
            ->with('testimonials',$testimonials)
            ->with('branches',$branches)
            ->with('sliders',$sliders);
}

}
