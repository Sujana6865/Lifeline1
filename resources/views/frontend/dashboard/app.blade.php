@extends('frontend.template.app')

@section('content')
    <div class="m-sm-5 pt-sm-5">
        <h2>Ambulance</h2>
        @foreach ($ambulances as $ambulance)
        <div class="row mt-sm-4">
            <div class="col-md-8 col-10">
                <div class="row bg-white rounded shadow">
                    <div class="col-md-5 col-5">
                        <img src="{{ asset('images/ambulance1.jpg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7 col-7 my-auto">
                       <h6><strong>Hospital Name: {{ $ambulance->name }}</strong></h6> 
                       <h6><strong>Location: {{ $ambulance->locarion }}</strong></h6> 
                       <h6><strong>Location: {{ $ambulance->no }}</strong></h6>
                    </div>
                </div>
            </div>
        </div>   
        @endforeach
    </div>
    
    
@endsection