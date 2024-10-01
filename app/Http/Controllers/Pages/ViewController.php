<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\ShortUrl;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }
    public function dashboard()
    {
        return view('pages.home.index');
    }
    public function termsOfService()
    {
        return view('pages.common-pages.terms-of-service');
    }
    public function privacyPolicy()
    {
        return view('pages.common-pages.privacy-policy');
    }
    public function showLinkList()
    {
        return view('pages.short-url.link-list', [
            'shortUrls' => ShortUrl::where('user_id', auth()->id())->get()
        ]);
    }
}
