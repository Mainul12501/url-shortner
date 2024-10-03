@extends('pages.master')

@section('title', 'Register')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header py-3 text-center">
                            <h1 class="fw-bolder">SEMI LINK - Register</h1>
                        </div>
                        <div class="card-body">
                            <div>
                                <form action="{{ route('register') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <label for="name" class="col-md-3">Name</label>
                                        <div class="col-md-7">
                                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
                                            @error('name') <span class="text-danger">{{ $errors->first('name') ?? '' }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3">Email</label>
                                        <div class="col-md-7">
                                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
                                            @error('email') <span class="text-danger">{{ $errors->first('email') ?? '' }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3">Password</label>
                                        <div class="col-md-7">
                                            <input type="password" name="password" class="form-control" min="8" placeholder="Type Your Password" />
                                            @error('password') <span class="text-danger">{{ $errors->first('password') ?? '' }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3">Confirm Password</label>
                                        <div class="col-md-7">
                                            <input type="password" name="password_confirmation" class="form-control" min="8" placeholder="Retype Your Password" />
                                            @error('password_confirmation') <span class="text-danger">{{ $errors->first('password_confirmation') ?? '' }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <label for="name" class="col-md-3"></label>
                                        <div class="col-md-7 text-end">
                                            <input type="submit" class="btn btn-primary" value="Create Account" />
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
