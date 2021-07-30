@extends('frontend.template.app')

@section('content')
<div >
    <img src="{{ asset('images/medical.png') }}" alt="" class="img-fluid">    
    <div class="row mt-3">
        <div class="col-md-8 col-10">
            <div class="row bg-white rounded shadow">
                <div class="col-md-5 col-5">
                    <img src="https://cdn.pixabay.com/photo/2015/01/28/23/24/woman-615421_960_720.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-7 col-7 text-center my-auto">
                    <h3 class="fst-italic">Asst. Prof. Ganesh Tamang</h3>  
                    <h5 class="text-uppercase">(Head)</h5>   
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection