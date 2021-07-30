@extends('frontend.template.app')

@section('content')
    <div class="m-sm-5">
        <h3>Edit User</h3>
        <p>
            Register and be life savier
        </p>
        <div>
            <form action="/user/{{ $user->id }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="blood">Blood Type</label>
                    <select id="blood" class="form-control" name="blood" value="{{ $user->blood }}">
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
                    <select id="location" class="form-control" name="location" value="{{ $user->location }}">
                        <option value="Dharan">Dharan</option>
                        <option value="Itahari">Itahari</option>
                        <option value="Biratnagar">Biratnagar</option>
                    </select>
                </div>
                <div class="form-group ">
                    <label for="mobile">Phone Number</label>
                    <input id="mobile" class="form-control" type="tel" name="mobile" value="{{ $user->mobile }}">
                </div>
                <div class="form-group ">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input id="password" class="form-control" type="password" name="password">
                </div>
                <input type="hidden" name="is admin" value="0">
                <button type="submit" class="newbutton">Save</button>
            </form>
        </div>
    </div>
    
   
</div>
@endsection
