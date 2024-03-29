@extends('website.master')

@section('title')
    Best Online Triniang System in Bangladesh
@endsection


@section('body')
    <div class="carousel slide" id="slider" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-inner ">
            @foreach($offer_courses as $key => $offer_course)
            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                <img src="{{asset($offer_course->offer_image)}}" alt="" class="w-100" height="550"/>
                <div class="carousel-caption my-caption">
                    <h3>{{$offer_course->title}}</h3>
                    <h5>Offer Date: {{$offer_course->offer_date}}</h5>
                    <a href="{{route('training.detail', ['id' => $offer_course->id])}}" class="btn btn-danger px-5">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0 bg-dark">
                        <h3 class="text-white">Recent Published Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($recent_courses as $recent_course)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 my-caption">
                        <img src="{{asset($recent_course->image)}}" alt="" class="" height="250"/>
                        <div class="card-body d-flex flex-column">
                            <div style="height: 90px;">
                                <h4><a class="text-decoration-none text-white" href="{{route('training.detail', ['id' => $recent_course->id])}}" >{{$recent_course->title}}</a> </h4>
                            </div><hr class="shadow mt-1 py-0 bt-1"/>
                            <p class="mb-0 text-white">TK. {{$recent_course->fee}}/=</p>
                            <p class="text-white">Starting Date: {{$recent_course->starting_date}}</p>
                            <hr/>
                            <a href="{{route('training.detail', ['id' => $recent_course->id])}}" class="btn btn-success mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center bg-dark border-0">
                        <h3 class="text-white">Popular Courses</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($popular_courses as $popular_course)
                <div class="col-md-4 mb-3">
                    <div class="card my-caption text-white border-0">
                        <img src="{{asset($popular_course->image)}}" alt="" class="" height="250"/>
                        <div class="card-body d-flex flex-column">
                            <div style="height: 90px;">
                                <h4><a class="text-decoration-none text-white" href="{{route('training.detail', ['id' => $popular_course->id])}}" >{{$popular_course->title}}</a> </h4>
                            </div>
                            <p class="mb-0">TK. {{$popular_course->fee}}/=</p>
                            <p class="">Starting {{$popular_course->starting_date}}</p>
                            <hr/>
                            <a href="{{route('training.detail', ['id' => $popular_course->id])}}" class="btn btn-success mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
