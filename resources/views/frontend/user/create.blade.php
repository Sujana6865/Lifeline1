@extends('frontend.template.app')

@section('content')
    <a href="" class="float-right"><p>Back</p></a>
    <div class=" p-md-5">
        <h2>Register Now</h2>
        <p>
            Register and be life savier
        </p>
        <div>
            <form action="user" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="blood">Blood Type</label>
                    <select id="blood" class="form-control" name="blood">
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
               
                <div class="form-group ">
                    <label for="location">Location</label>
                    <input id="location" class="form-control" type="text" name="location">
                </div>
                <div class="form-group ">
                    <label for="mobile">Phone Number</label>
                    <input id="mobile" class="form-control" type="text" name="mobile">
                </div>
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                <input type="hidden" name="is admin" value="0">
                <button type="submit" class="newbutton">Register Now</button>
            </form>
        </div>
        <div  class="mt-md-2">
            <p>Already Registered ? | <a href="/login">Log In</a></p>
        </div>
    </div>
    
   
</div>
@endsection
