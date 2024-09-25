@extends('pages.master')

@section('title', 'shorten Url')

@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center py-4">Total URL Clicks</h3>
                        <p>The number of clicks from the shortened URL that redirected the user to the destination page.</p>

                        <h2><a href="{{ url('/').'/u/'.$shortUrl->short_url }}">{{ url('/').'/'.$shortUrl->short_url }}</a></h2>
                        <p>
                            Total CLicks: <span style="font-size: 23px">{{ $shortUrl->hit_count }}</span>
                        </p>
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
