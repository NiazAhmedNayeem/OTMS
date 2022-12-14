@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Enroll Status Update Form</h4>
                    <p class="card-title-desc">{{Session::get('message')}}</p>

                    <form action="{{route('admin.update-enroll-status', ['id' => $enroll->id])}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <label class="col-md-3">Course Title</label>
                            <div class="col-md-9">
                                <input type="text" readonly value="{{$enroll->course->title}}" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3">Enroll Status</label>
                            <div class="col-md-9">
                                <select class="form-control" required name="enroll_status">
                                    <option value="" disabled selected> -- Enroll Status -- </option>
                                    <option value="pending" {{$enroll->enroll_status == 'Pending' ? 'Selected' : ''}}>Pending</option>
                                    <option value="processing" {{$enroll->enroll_status == 'Processing' ? 'Selected' : ''}}>Processing</option>
                                    <option value="complete" {{$enroll->enroll_status == 'Complete' ? 'Selected' : ''}}>Complete</option>
                                    <option value="cancel" {{$enroll->enroll_status == 'Cancel' ? 'Selected' : ''}}>Cancel</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" value="Update Enroll Status" class="btn btn-success"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

