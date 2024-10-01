@extends('pages.master')

@section('title', 'shorten Url')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center py-4">Your shortened URL</h3>
                        <p class="px-3">Copy the short link and share it in messages, texts, posts, websites and other locations.</p>
                        <div class="row">
{{--                            <div class="col-md-2"></div>--}}
                            <div class="col-md-11 mx-auto">
                                <div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" id="inputVal" value="{{ isset($shortUrl->short_url) ? url('/').'/u/'.$shortUrl->short_url : '' }}" class="form-control py-2" placeholder="short link here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <button type="button" class="input-group-text btn btn-primary" id="basic-addon2">Copy URL</button>
                                        </div>
                                        <p id="message"></p>
                                        <p>Full Link: <a href="{!! $shortUrl->full_url ?? '#' !!}" class="text-primary" style="text-decoration: none;">{!! $shortUrl->full_url ?? 'full url' !!}</a></p>
                                    </form>
                                </div>
                                @if(auth()->check())
                                <div class="py-2">
                                    <a href="{{ route('total-clicks', ['sl' => $shortUrl->short_url]) }}" class="btn btn-outline-primary">Total clicks of your Short Url</a>
                                </div>
                                @endif
{{--                                <a href="{{ route('home') }}" class="btn btn-outline-primary">Shorten Another URL</a>--}}
                            </div>
{{--                            <div class="col-md-2"></div>--}}
                        </div>
                    </div>


                    <div class="py-3">
                        <p class="fw-bolder text-capitalize">share it on social media</p>
                        <div>
                            <ul class="nav">
                                <li><a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'facebook', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-primary mx-1">Facebook</a></li>
                                <li><a href="#" onclick="window.open('https://twitter.com/share?url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'Twitter', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-dark mx-1">X</a></li>
                                <li><a href="#" onclick="window.open('https://pinterest.com/pin/create/link/?url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'Pinterest', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-danger mx-1">Pinterest</a></li>
                                <li><a href="#" onclick="window.open('whatsapp://send?text={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'WhatsApp', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-success mx-1">WhatsApp</a></li>
                                <li><a href="#" onclick="window.open('https://telegram.me/share/url?url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'telegram', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-primary mx-1">Telegram</a></li>
                                <li><a href="#" onclick="window.open('https://www.reddit.com/submit?url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'reddit', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-warning mx-1">Reddit</a></li>
                                <li><a href="#" onclick="window.open('https://www.tumblr.com/share/link?url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'tumblr', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-dark mx-1">Tumblr</a></li>
                                <li><a href="#" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url={{ parse_url(url('/'))['host'] }}/u/{{ $shortUrl->short_url }}', 'linkedin', 'width=800, height=600, resizable, scrollbars=yes, status=1'); return false;" class="btn btn-sm btn-primary mx-1">Linkedin</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('script')
    <script>
        $(document).on('click', '#basic-addon2', function () {
            $("#inputVal").select();
            document.execCommand("copy");
            $("#message").text("Copied link");
        })
    </script>
@endpush
