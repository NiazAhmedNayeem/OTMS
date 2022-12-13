@extends('website.master')

@section('title')
    My Courses
@endsection


@section('body')


    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card card-body my-caption">
                        <ul class="list-group fw-bold">
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">My Profile</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="{{route('student.all-course')}}" class="text-decoration-none">My Courses</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">Change Password</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">My Dashboard</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 mb-3">
                    <div class="card card-body my-caption text-white">
                        <h1 class="text-center">My Courses</h1>
                        <table class="table table-bordered text-white mt-3">
                            <thead>
                                <tr class="text-center">
                                    <th>SL NO</th>
                                    <th>Course Title</th>
                                    <th>Starting Date</th>
                                    <th>Enroll Status</th>
                                    <th>Payment Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($enrolls as $enroll)
                                <tr>
                                    <td class="text-center">{{$loop->iteration}}</td>
                                    <td><a href="{{route('training.detail', ['id' => $enroll->course_id])}}" target="_blank" class="text-decoration-none">{{$enroll->course->title}}</a> </td>
                                    <td class="text-center">{{$enroll->course->starting_date}}</td>
                                    <td class="text-center">{{$enroll->enroll_status}}</td>
                                    <td class="text-center">{{$enroll->payment_status}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
