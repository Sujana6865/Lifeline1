@extends('backend.template.app')
@section('title')
    Users
@endsection
@section('subtitle')
    Users
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                <div class="card-header">
                    <div class="btn btn-danger">User List</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Blood group</th>
                                <th>location</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            @if ($user->is_admin == 0)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->blood }}</td>
                                    <td>{{ $user->location }}</td>
                                    <td>{{ $user->mobile }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="" class="btn btn-success">edit</a>
                                        <a href="" class="btn btn-primary">show</a>
                                    </td>
                                </tr>
                                
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection