@extends('backend.template.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <a href="/ambulance" class="btn btn-danger btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/ambulance/{{ $ambulance->id }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="no">Phone No.</label>
                                <input id="no" class="form-control" type="text" name="no" value="{{ $ambulance->no }}">
                            </div>
                            <button type="submit" class="btn btn-danger">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection