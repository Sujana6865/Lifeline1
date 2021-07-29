@extends('frontend.template.app')
@section('content')
    <form action="/msg" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <button type="submit">Send</button>
    </form>
@endsection