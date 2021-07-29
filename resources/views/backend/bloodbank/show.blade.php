@extends('backend.template.app')
@section('content')
    <div class="container">
        <address>
            {{ $bbank->name }} <br>
            {{ $bbank->location }} <br>
            {{ $bbank->no }}
        </address>
    </div>
@endsection