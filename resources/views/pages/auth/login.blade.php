@extends('pages.master')

@section('title', 'Login')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header py-3 text-center">
                            <h3 class="fw-bolder">SEMI LINK</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                                <ul class="nav">
                                    @foreach($errors->all() as $error)
                                        <li class="list"><span class="text-danger">{{ $error }}</span></li>
                                    @endforeach
                                </ul>
                            @endif
                            <div>
                                <form action="{{ route('login') }}" method="post">
                                    @csrf
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3">Email</label>
                                        <div class="col-md-7">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
{{--                                            @error('email') <span class="text-danger">{{ $errors->first('email') ?? '' }}</span> @enderror--}}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3">Password</label>
                                        <div class="col-md-7">
                                            <input type="password" name="password" class="form-control" min="8" placeholder="Type Your Password" />
{{--                                            @error('password') <span class="text-danger">{{ $errors->first('password') ?? '' }}</span> @enderror--}}
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3"></label>
                                        <div class="col-md-7 text-end">
                                            <input type="submit" class="btn btn-primary" value="Login" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
