@extends('backend.template.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                    <div class="card-header">
                        <div class="btn btn-danger">All Users</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>location</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bbanks as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->location }}</td>
                                    <td>{{ $user->no }}</td>
                                    <td>
                                        <a href="" class="btn btn-success">edit</a>
                                        <a href="" class="btn btn-primary">show</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection