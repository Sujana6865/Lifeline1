@extends('frontend.template.app')

@section('content')
    <a href="" class="float-right"><p>Back</p></a>
    <div class=" p-md-5">
        <h2>Register Now</h2>
        <p>
            Register and be life savier
        </p>
        <div>
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="blood">Blood Type</label>
                    <select id="blood" class="form-control" name="blood">
                        <option value="1">A+</option>
                        <option value="1">A-</option>
                        <option value="1">B+</option>
                        <option value="1">B-</option>
                        <option value="1">AB+</option>
                        <option value="1">AB-</option>
                        <option value="1">O+</option>
                        <option value="1">O-</option>
                    </select>
                </div>
               
                <div class="form-group ">
                    <label for="loc">Location</label>
                    <input id="loc" class="form-control" type="text" name="loc">
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
                    <input id="password" class="form-control" type="text" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Register Now</button>
            </form>
        </div>
        <div  class="mt-md-2">
            <p>Already Registered ? | <a href="">Log In</a></p>
        </div>
    </div>
    
   
</div>
@endsection
