@extends('frontend.template.app')
@section('content')
<h3>Ambulance</h3>
    @foreach ($ambulances as $ambulance)
        {{ $ambulance->name }} <br>
    @endforeach
<h3>BBank</h3>
@foreach ($bbanks as $bbank)
    {{ $bbank->name }} <br>
@endforeach
@endsection