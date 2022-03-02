<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        return view("frontend.index");
    }

    function aboutUs()
    {
        return view("frontend.about-us");
    }

    function contactUs()
    {
        return view("frontend.contact-us");
    }

    function faqs()
    {
        return view("frontend.faq");
    }

    function termAndConditions()
    {
        return view("frontend.terms-of-use");
    }

    function privacy_policy()
    {
        return view("frontend.privacy");
    }
}
