@extends('backend.template.app')
@section('title')
    Ambulance
@endsection
@section('subtitle')
    Ambulance
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <div class="btn btn-danger"><i class="fas fa-plus-circle"></i> Add New</div>
                    </div>
                    <div class="card-body">
                        <form action="/ambulance" method="post">
                            @csrf
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