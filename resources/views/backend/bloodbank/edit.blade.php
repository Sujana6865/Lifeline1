@extends('backend.template.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <a href="/bbank" class="btn btn-danger btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/bbank/{{ $bbank->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $bbank->name }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Location</label>
                                <input id="location" class="form-control" type="text" name="location" value="{{ $bbank->location }}">
                            </div>
                            <div class="form-group">
                                <label for="no">Phone No.</label>
                                <input id="no" class="form-control" type="text" name="no" value="{{ $bbank->no }}">
                            </div>
                            <button type="submit" class="btn btn-danger">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection