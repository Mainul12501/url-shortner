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
                        <div>
                            <form action="" method="post">
                                <div class="input-group mx-auto" style="width: 70%">
                                    <input type="text" class="form-control" name="input_short_url" />
                                    <button type="button" class="btn btn-success">Check URL</button>
                                </div>
                            </form>
                        </div>
                        @if(isset($shortUrl))
                            <h2><a href="{{ url('/').'/u/'.$shortUrl->short_url }}">{{ url('/').'/'.$shortUrl->short_url }}</a></h2>
                        @endif
                        <p>
                            Total CLicks: <span style="font-size: 23px">{{ $shortUrl->hit_count ?? 0 }}</span>
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
