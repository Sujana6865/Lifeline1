@extends('frontend.template.app')

@section('content')
    <div class="mt-sm-5 p-sm-5">
        <h3>FIND DONOR</h3>
        <p>
            Find blood donor quickly and easily right from the palm of your hand.
        </p>
        <div>
            <form action="user/search">
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
                   <button type="submit" class="newbutton  px-md-4">Search</button>
                </div>
                <div class="col-md-9">
                    <a href="/" class="newbutton px-sm-5" style="text-decoration: none;">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</div>


@endsection