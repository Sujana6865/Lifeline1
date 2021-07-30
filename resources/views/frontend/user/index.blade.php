@extends('frontend.template.app')

@section('content')
<div class=" p-md-5">
    <h2>DONOR LIST</h2>
    <p>
        Here are the list of nearby donors
    </p>

    @foreach ($users as $user)
    <div class="row mt-sm-5 border">
         <div class="col-10 float-left">
             <h5>{{ $user->name }}</h5>
             <h5>{{ $user->blood }}</h5>
         </div>
         <div class="col-sm-2 mt-sm-3 float-right">
             <a href="/user/{{ $user->id }}" style="text-decoration: none;" >View Details</a>
             
         </div>
    </div> 
    @endforeach

    

</div>
@endsection