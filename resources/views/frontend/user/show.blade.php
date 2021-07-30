@extends('frontend.template.app')

@section('content')
    <div class="m-sm-5 pt-sm-5">
        <h3 class="text-danger">User Information</h3>
        <address>
            Name:{{ $user->name }} <br>
            Location:{{ $user->location }} <br>
            Blood Group: {{ $user->blood }} <br>
            Phone No.:{{ $user->mobile }} <br>
        </address>
    </div>
@endsection