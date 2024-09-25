@extends('pages.master')

@section('title', 'Home Page')
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="card card-body">
                        <h3 class="text-center py-4">Short Your URL</h3>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="text-danger">
                                    @if($errors->any())
                                        <ul class="nav">
                                            @foreach($errors->all() as $error)
                                                <li class="">* {{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </div>
                                <div>
                                    <form action="{{ route('short-url') }}" method="post">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <input type="text" name="full_url" required class="form-control" placeholder="Enter the full link here" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                            <button type="submit" class="input-group-text" id="basic-addon2">Shorten Url</button>
                                        </div>
                                    </form>
                                </div>
                                @if(!auth()->check())
                                    <div class="py-2">
                                        <p class="text-danger">Please <a href="{{ route('login') }}" class="" style="text-decoration: none;">Login</a> or <a href="{{ route('register') }}" class="" style="text-decoration: none;">Register</a> to manage your links. Else your links will be deleted after 3 days.</p>
                                    </div>
                                @endif
                                <div class="py-2">
                                    <p>This is a free tool to shorten URLs and generate short links
                                        URL shortener allows to create a shortened link making it easy to share</p>
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
