@extends('website.master')

@section('title')
    Complete Enroll Page
@endsection

@section('body')
    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body border-dark text-center text-uppercase bg-dark shadow">
                        <h3 class="text-white">Complete Enroll Page</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-md-8 mx-auto">
                    <div class="card shadow border-0 my-caption">
                        <div class="card-header text-center"><h3 class="text-white">Course Enroll Status</h3></div>
                        <div class="card-body text-white">
                            <h5 class="text-success text-center">Congratulation! your registration is complete. Please check your mail for your login credential. Thank you... </h5><br>
                            <h4>Registration Current Status</h4>
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr class="text-center">
                                        <th>Course Enroll</th>
                                        <th>Enroll Status</th>
                                        <th>Payment Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$enroll->course->title}}</td>
                                        <td class="text-center">{{$enroll->enroll_status}}</td>
                                        <td class="text-center">{{$enroll->payment_status}}</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
