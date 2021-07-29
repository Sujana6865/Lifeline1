@extends('frontend.template.app')

@section('content')
    <div>
        <h3>User Information</h3>
        <address>
            Name:{{ $user->name }} <br>
            Location:{{ $user->location }} <br>
            Blood Group: {{ $user->blood }} <br>
            Phone No.:{{ $user->mobile }}
        </address>
    </div>
@endsection