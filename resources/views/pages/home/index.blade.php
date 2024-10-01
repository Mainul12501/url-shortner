@extends('pages.master')

@section('title', 'Home Page')
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="card card-body">
                        <div>
                            <form action="{{ route('short-url') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="UrlInputField" class="mb-2 ms-1"><span><img src="{{ asset('/assets/images/icons/favicon-16.png') }}" alt=""></span> Shorten a long URL</label>
                                    <input type="text" name="full_url" required class="form-control p-3" placeholder="Enter the full link here" id="UrlInputField" />
                                    @error('full_url') <span class="text-danger">{{ $errors->first('full_url') }}</span> @enderror
                                </div>
                                <div class="">
                                    <button type="submit" class="input-group-text btn btn-success w-100 py-2">Shorten URL</button>
                                </div>
                            </form>
                        </div>

                        <div class="py-2">
                            <p>This is a <strong>free tool</strong> to shorten URLs and generate short links <br>
                                &nbsp;&nbsp;&nbsp;<strong>Semi Link</strong> allows to create a shortened link making it easy to share</p>
                        </div>


                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card card-body bg-transparent text-white border-0">
                        <h3 class="text-capitalize">The Original URL Shortener for free</h3>
                        <p>Create shorter URLs with <span class="text-uppercase">semi link</span></p>
                        <p>Want more out of your link shortener? Track link analytics, use branded domains for fully custom links, and manage your links for free.</p>
                        <p class=" text-center">
                            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light text-capitalize">create free account</a>
                        </p>
                        <p><strong class="text-uppercase">semi link</strong> includes:</p>
                        <div class="row">
                            <div class="col-6">
                                <p>
                                    <span class="fa-solid fa-fw fa-chart-line me-3"></span> Detailed Link Analytics
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="fa-solid fa-fw fa-link me-3"></span> Bulk Short URLs
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="fa-solid fa-fw fa-globe me-3"></span> Fully Branded Domains
                                </p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <span class="fa-solid fa-fw fa-share-nodes me-3"></span> Detailed Link Analytics
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-light">
                    <div class="card card-body bg-transparent border-0 home-short-info-div">
                        <h2>Simple and fast URL shortener!</h2>
                        <p><strong>SEMI LINK</strong> allows to shorten long links from <a href="https://www.instagram.com/" target="_blank">Instagram</a>, <a href="https://www.facebook.com/" target="_blank">Facebook</a>, <a href="https://www.youtube.com/" target="_blank">YouTube</a>, <a href="https://x.com/" target="_blank">X</a>, <a href="https://www.linkedin.com/" target="_blank">Linked In</a>, <a href="https://www.whatsapp.com/" target="_blank">WhatsApp</a>, <a href="https://www.tiktok.com/" target="_blank">TikTok</a>, <span class="" style="color: orange">blogs and Other sites</span>. Just paste the long URL and click the Shorten URL button. On the next page, copy the shortened URL and share it on sites, chat and emails. After shortening the URL, check <a href="{{ route('total-clicks') }}">how many clicks it received</a>.</p>
                        <h2>Shorten, share and track</h2>
                        <p>Your shortened URLs can be used in publications, documents, advertisements, blogs, forums, instant messages, and other locations. Track statistics for your business and projects by monitoring the number of hits from your URL with our click counter.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" bg-light-subtle py-5">
        <div class="container">
            <div class="row px-5">
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center"><img src="{{ asset('/assets/images/icons/icon-like.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Easy</p>
                        <p><b>Semi Link</b> is easy and fast, enter the long link to get your shortened link</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center"><img src="{{ asset('/assets/images/icons/icon-url.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Shortened</p>
                        <p>Use any link, no matter what size, ShortURL always shortens</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center"><img src="{{ asset('/assets/images/icons/icon-secure.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Secure</p>
                        <p>It is fast and secure, our service has HTTPS protocol and data encryption</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center"><img src="{{ asset('/assets/images/icons/icon-statistics.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Statistics</p>
                        <p>Check the number of clicks that your shortened URL received</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center"><img src="{{ asset('/assets/images/icons/icon-unique.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Reliable</p>
                        <p>All links that try to disseminate spam, viruses and malware are deleted</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body bg-transparent border-0 text-center">
                        <p class="text-center bg-white"><img src="{{ asset('/assets/images/icons/icon-responsive.png') }}" alt="" class="" style="height: 75px; width: 75px" ></p>
                        <p class="fw-bolder f-s-20">Devices</p>
                        <p>Compatible with smartphones, tablets and desktop</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
