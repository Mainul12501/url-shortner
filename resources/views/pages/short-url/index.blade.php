@extends('pages.master')

@section('title', 'shorten Url')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center py-4">Your shortened URL</h3>
                        <p>Copy the short link and share it in messages, texts, posts, websites and other locations.</p>
                        <div class="row">
{{--                            <div class="col-md-2"></div>--}}
                            <div class="col-md-11 mx-auto">
                                <div>
                                    <form action="" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" id="inputVal" value="{{ isset($shortUrl->short_url) ? url('/').'/u/'.$shortUrl->short_url : '' }}" class="form-control" placeholder="short link here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <button type="button" class="input-group-text" id="basic-addon2">Copy Url</button>
                                        </div>
                                        <p id="message"></p>
                                        <div>
                                            <p>Full Link is: {{ $shortUrl->full_url ?? 'full url' }}</p>
                                        </div>
                                    </form>
                                </div>
                                @if(auth()->check())
                                <div class="py-2">
                                    <a href="{{ route('total-clicks', ['shortUrl' => $shortUrl->short_url]) }}" class="btn btn-success">Total clicks of your Short Url</a>
                                </div>
                                @endif
                            </div>
{{--                            <div class="col-md-2"></div>--}}
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
