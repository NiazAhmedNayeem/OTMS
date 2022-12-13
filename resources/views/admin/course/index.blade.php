@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Information</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Title</th>
                            <th>Fee</th>
                            <th>Stating Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Offer Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr class="{{$course->status == 1 ? '' : 'bg-warning'}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td><img src="{{asset($course->image)}}" alt="{{$course->title}}" height="50" width="70"/></td>
                                <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>{{$course->offer_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('admin.course-detail', ['id' => $course->id])}}" class="btn btn-outline-success">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.update-course-status', ['id' => $course->id])}}" class="btn btn-outline-info">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                    <a href="{{route('admin.update-course-offer-status', ['id' => $course->id])}}" class="btn btn-outline-primary">
                                        <i class="fa fa-book-dead"></i>
                                    </a>
                                    <a href="{{route('admin.course-delete', ['id' => $course->id])}}" class="btn btn-outline-danger" >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection


