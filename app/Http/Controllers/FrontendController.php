<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function mainServices()
    {
        $main_categories = MainCategory::all();
        return view('frontend.service-categories',['main_categories' => $main_categories]);
    }


    public function index()
    {
        return view("frontend.index");
    }

    public function aboutUs()
    {
        return view("frontend.about-us");
    }

    public function contactUs()
    {
        return view("frontend.contact-us");
    }

    public function faqs()
    {
        return view("frontend.faq");
    }

    public function termAndConditions()
    {
        return view("frontend.terms-of-use");
    }

    public function privacy_policy()
    {
        return view("frontend.privacy");
    }
}
