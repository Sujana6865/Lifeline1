@extends('backend.template.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="bloodbank" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="no">Phone No.</label>
                        <input id="no" class="form-control" type="text" name="no">
                    </div>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection