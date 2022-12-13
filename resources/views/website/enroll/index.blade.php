@extends('website.master')

@section('title')
    Enroll Page
@endsection

@section('body')
    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase bg-dark shadow">
                        <h3 class="text-white">Course Enroll Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-md-8 mx-auto">
                    <div class="card shadow border-0">
                        <div class="card-header text-center bg-dark"><h3 class="text-white">Course Enroll Form</h3></div>
                        <div class="card-body bg-dark text-white">

                            <form action="{{route('training.new-enroll', ['id' => $id])}}" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Full Name</label>
                                    <div class="col-md-9">
                                        <input type="text" @if(Session::get('student_id')) value="{{$student->name}}" readonly @endif class="form-control" name="name" placeholder="Your full name"/>
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input type="email" @if(Session::get('student_id')) value="{{$student->email}}" readonly @endif class="form-control" name="email" placeholder="Your email"/>
                                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="number" @if(Session::get('student_id')) value="{{$student->mobile}}" readonly @endif class="form-control" name="mobile" placeholder="Your mobile"/>
                                        <span class="text-danger">{{$errors->has('mobile') ? $errors->first('mobile') : ''}}</span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3">Payment Type</label>
                                    <div class="col-md-9">
                                        <label><input type="radio" class="m-2" name="payment_type" value="1" checked/> Cash on delivery</label>
                                        <label><input type="radio" class="m-2" name="payment_type" value="2"/> Online</label>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success btn-sm w-100" value="Enroll"/>
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
