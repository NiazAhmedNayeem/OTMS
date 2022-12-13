@extends('website.master')

@section('title')
    ABOUT US
@endsection


@section('body')
<section class="py-5 my-bg-color">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body border-0 bg-dark text-white shadow">
                    <h3>Our Mission</h3>
                    <hr/>
                    <p class="" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis culpa cumque debitis deleniti exercitationem ipsam iusto laboriosam, nobis, odit omnis placeat, quae. Corporis culpa cumque debitis deleniti exercitationem ipsam iusto laboriosam, nobis, odit omnis placeat, quae. Corporis culpa cumque debitis deleniti exercitationem ipsam iusto laboriosam, nobis, odit omnis placeat, quae. Ab autem nemo quas qui velit vero, voluptatem!</p>
                    <p class="" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam,magni molestias quibusdam rem repellat sunt suscipit, veniam, vitae. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p class="" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet autem blanditiis commodi enim, expedita fugiat impedit itaque molestiae nulla. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 my-bg-color">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body border-0 bg-dark text-white shadow">
                    <h3>Our Vision</h3>
                    <hr/>
                    <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam dolorum illo ipsum iusto laboriosam, magni molestias quibusdam rem repellat sunt suscipit, A aliquam dolorum illo ipsum iusto laboriosam, magni molestias quibusdam rem repellat sunt suscipit, A aliquam dolorum illo ipsum iusto laboriosam, magni molestias quibusdam rem repellat sunt suscipit, veniam, vitae. Blanditiis delectus dignissimos provident sed sequi.</p>
                    <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet autem blanditiis commodi enim, expedita fugiat impedit itaque molestiae nulla. Aspernatur at aut, consectetur cupiditate earum est eum rerum voluptatem!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 my-bg-color">
    <div class="container">
        <div class="row bg-danger">
            <div class="col">
                <div class="card card-body border-0 bg-dark text-center">
                    <h1 class="text-white">Our Instructor</h1>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card border-0 my-caption text-white mb-3">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card  border-0 my-caption text-white mb-3">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 my-caption text-white mb-3">
                    <img src="{{asset('/')}}website/img/team-3.jpg" alt="" class=""/>
                    <div class="card-body">
                        <h4>Instructor Name</h4>
                        <p>Instructor Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
