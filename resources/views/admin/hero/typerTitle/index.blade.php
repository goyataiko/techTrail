@extends('admin.layouts.layout')

@section('content')
    <section class="section col-md-10 mx-2">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Typer Title</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Title</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.typerTitle.create') }}" class="btn btn-primary">Create More  <i
                                        class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th width="10%" class="text-center">id</th>
                                            <th width="90%">Title</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Create a mobile app</td>
                                            <td class="action"><a href="#" class="btn btn-success">Edit</a></td>
                                            <td class="action"><a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Create a mobile app</td>
                                            <td class="action"><a href="#" class="btn btn-success">Edit</a></td>
                                            <td class="action"><a href="#" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <style>
        td.action {
            text-align: center !important;
            padding: 0 !important;
        }
    </style>
@endsection
