@extends('website.master')

@section('title')
    Training Category
@endsection


@section('body')
    <section class="py-5 my-bg-color">
        <div class="container">
            <div class="row bg-danger">
                <div class="col">
                    <div class="card card-body text-center border-0 bg-dark">
                        <h3 class="text-white">{{isset($courses[0]->category) ? $courses[0]->category->name. '' : 'No Available'}} Training Course</h3>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($courses as $course)
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-0 my-caption">
                            <img src="{{asset($course->image)}}" alt="" class="" height="250"/>
                            <div class="card-body d-flex flex-column">
                                <div style="height: 90px;">
                                    <h4><a class="text-decoration-none text-white" href="{{route('training.detail', ['id' => $course->id])}}" >{{$course->title}}</a> </h4>
                                </div>
                                <p class="mb-0 text-white">TK. {{$course->fee}}/=</p>
                                <p class="text-white">Starting Date: {{$course->starting_date}}</p>
                                <hr/>
                                <a href="{{route('training.detail', ['id' => $course->id])}}" class="btn btn-success mt-auto">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
