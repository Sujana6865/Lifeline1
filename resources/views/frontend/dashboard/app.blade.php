@extends('frontend.template.app')

@section('content')
    
        <div class="row mt-sm-5 pt-sm-5">
            <div class="col-sm-5">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/ambulance.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-danger">Ambulance</h4>
                        <p>
                            <strong class="text-secondary">Location:</strong> Dharan
                        </p>
                        <p>
                            <strong class="text-secondary">Hospital Name:</strong> B.P.
                        </p> 
                        <p>
                            <strong class="text-secondary">Phone no.:</strong> 9836347322
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-5 ml-sm-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('images/ambulance.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="text-danger">Ambulance</h4>
                        <p>
                            <strong class="text-secondary">Location:</strong> Dharan
                        </p>
                        <p>
                            <strong class="text-secondary">Hospital Name:</strong> B.P.
                        </p> 
                        <p>
                            <strong class="text-secondary">Phone no.:</strong> 9836347322
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
      
   
    
@endsection