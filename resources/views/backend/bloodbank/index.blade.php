@extends('backend.template.app')
@section('title')
    Blood Bank
@endsection
@section('subtitle')
    Blood Bank
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!--tips: add .text-center,.text-right to the .card to change card text alignment-->
                    <div class="card-header">
                        <div class="btn btn-danger"><i class="nav-icon fas fa-tint"></i> Blood Bank List</div>
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
                                @foreach ($bbanks as $bbank)
                                <tr>
                                    <td>{{ $bbank->id }}</td>
                                    <td>{{ $bbank->name }}</td>
                                    <td>{{ $bbank->location }}</td>
                                    <td>{{ $bbank->no }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-2">
                                                <a href="/bbank/{{ $bbank->id }}/edit" class="btn btn-success">edit</a>
                                            </div>
                                            <div class="col-2">
                                                <a href="/bbank/{{ $bbank->id }}" class="btn btn-primary">show</a>
                                            </div>
                                            <div class="col-2">
                                                <form action="/bbank/{{ $bbank->id }}" method="post">
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