@extends('frontend.template.app')

@section('content')
    <a href="" class="float-right"><p>Register Now</p></a>
    <div class=" p-md-5">
        <h2>FIND DONOR</h2>
        <p>
            Find blood donor quickly and easily right from the palm of your hand.
        </p>
        <div>
            <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Patient's Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            <div class="form-group">
                <label for="blood">Blood Required</label>
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
                <label for="hospital">Hospital</label>
                <input id="hospital" class="form-control" type="text" name="hospital">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary px-md-4">Search</button>
                </div>
                <div class="col-md-9">
                    <button type="submit" class="btn btn-primary px-md-4">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    
</div>


@endsection