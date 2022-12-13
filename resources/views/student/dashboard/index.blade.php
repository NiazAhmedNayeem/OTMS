@extends('website.master')

@section('title')
    Student Dashboard
@endsection


@section('body')


    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card card-body my-caption">
                        <ul class="list-group fw-bold">
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">My Profile</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">My Course</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">Change Password</a> </li><hr class="mt-1 py-0 mb-0"/>
                            <li class="list-group-item my-caption"><a href="" class="text-decoration-none">My Dashboard</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 mb-3">
                    <div class="card card-body my-caption text-white">
                        <h1 class="text-center">My Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
