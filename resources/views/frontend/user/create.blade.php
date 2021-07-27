@extends('frontend.template.app')

@section('content')
    <a href="" class="float-right pt-5"><p>Back</p></a>
    <div class="mt-5">
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
                    <label for="phone">Phone Number</label>
                    <input id="phone" class="form-control" type="text" name="phone">
                </div>
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
                <div class="form-group ">
                    <label for="email">Password</label>
                    <input id="email" class="form-control" type="text" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Register Now</button>
            </form>
        </div>
    </div>
    
    <div class="mt-2">
        <p>Already Registered ? | <a href="">Log In</a></p>
    </div>
</div>
@endsection
