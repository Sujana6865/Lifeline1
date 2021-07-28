@extends('frontend.template.app')

@section('content')
    <a href="/userregister">
        <button type="button" class="float-right btn btn-light">Register Now</button>
    </a>
    <div class=" p-md-5">
        <h2>FIND DONOR</h2>
        <p>
            Find blood donor quickly and easily right from the palm of your hand.
        </p>
        <div>
            <form action="" method="post">
            @csrf
           <!--
            <div class="form-group">
                <label for="name">Patient's Name</label>
                <input id="name" class="form-control" type="text" name="name">
            </div>
            -->
            <div class="form-group">
                <label for="blood">Blood Required</label>
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
                <select id="location" class="form-control" name="location">
                    <option value="Dharan">Dharan</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Biratnagar">Biratnagar</option>
                </select>
            </div>
            <!--<div class="form-group ">
                <label for="hospital">Hospital</label>
                <input id="hospital" class="form-control" type="text" name="hospital">
            </div>
            -->
            <div class="row">
                <div class="col-md-3">
                    <a href="/donorlist">
                        <button type="submit" class="newbutton  px-md-4">Search</button>
                    </a>
                </div>
                <div class="col-md-9">
                    <a href="/">
                        <button type="submit" class="newbutton px-md-4">Cancel</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
    
</div>


@endsection