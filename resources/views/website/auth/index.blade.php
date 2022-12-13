@extends('website.master')

@section('title')
    Login / Registration
@endsection


@section('body')
    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-white bg-dark text-center border-0">
                        <h3 class="">Login - Registration </h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="card border-0 bg-dark text-white">
                        <div class="card-header text-center"><h3>Login Form</h3></div>
                        <div class="card-body">
                            <form action="{{route('student.login')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Your email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Your password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" value="Login"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-white bg-dark">
                        <div class="card-header text-center"><h3>Registration Form</h3></div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row mb-3">
                                    <label class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Your full name"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Your email"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Your password"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success w-100" value="Registration"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
