@extends('backend.template.app')
@section('title')
    Ambulance
@endsection
@section('subtitle')
    Ambulance
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                    <div class="card-header">
                        <div class="btn btn-danger"><i class="fas fa-plus-circle"></i> Ambulance List</div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Hospital</th>
                                    <th>Location</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ambulances as $ambulance)
                                <tr>
                                    <td>{{ $ambulance->id }}</td>
                                    <td>{{ $ambulance->name }}</td>
                                    <td>{{ $ambulance->location }}</td>
                                    <td>{{ $ambulance->no }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <a href="/ambulance/{{ $ambulance->id }}/edit" class="btn btn-outline-secondary">edit</a>
                                            </div>
                                            <div class="col-2">
                                                <form action="/ambulance/{{ $ambulance->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
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