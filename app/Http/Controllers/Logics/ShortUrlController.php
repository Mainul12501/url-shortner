<?php

namespace App\Http\Controllers\Logics;

use App\Http\Controllers\Controller;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'full_url' => 'required|url:http,https'
//        ]);
        $request->validate(['full_url' => 'required|url:http,https']);

        $shortUrl = ShortUrl::storeShortUrl($request);
        if (str()->contains(url()->current(), '/api/'))
        {
            if (!empty($shortUrl))
            {
                return response()->json(['status' => 'success', 'short_url' => $shortUrl]);
            } else {
                return response()->json(['status' => 'fail', 'msg' => 'Something went wrong. Please try again.']);
            }
        }
        return redirect('/shorten-url/'.$shortUrl->short_url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $url)
    {
        return view('pages.short-url.index', ['shortUrl' => ShortUrl::where('short_url', $url)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShortUrl $shortUrl)
    {
        $shortUrl->delete();
        return redirect()->back();
    }
    public function redirectPage(string $parm)
    {
        $shortUrl = ShortUrl::where('short_url', $parm)->first();
        if (!empty($shortUrl)) {
            $shortUrl->hit_count += 1;
            $shortUrl->save();
            return redirect($shortUrl->full_url);
        } else {
            return 'Page not found';
        }
    }
    public function totalClick(string $parm)
    {
        return view('pages.short-url.total-click', ['shortUrl' => ShortUrl::where('short_url', $parm)->first()] );

    }
}
