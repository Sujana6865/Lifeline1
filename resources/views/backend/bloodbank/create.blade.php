@extends('backend.template.app')
@section('title')
    Blood Bank
@endsection
@section('subtitle')
    Blood Bank
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="btn btn-danger"><i class="nav-icon fas fa-tint"></i> Add New</div>
                    </div>
                    <div class="card-body">
                        <form action="/bbank" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input id="location" class="form-control" type="text" name="location">
                            </div>
                            <div class="form-group">
                                <label for="no">Phone No.</label>
                                <input id="no" class="form-control" type="text" name="no">
                            </div>
                            <button type="submit" class="btn btn-danger">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection