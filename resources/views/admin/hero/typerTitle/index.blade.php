@extends('admin.layouts.layout')

@section('content')
    <section class="col-md-10 mx-2">

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>

                            <h4>All Title</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.typerTitle.create') }}" class="btn btn-primary">Create More <i
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
                                        @foreach ($titles as $title)
                                            <tr>
                                                <td class="text-center">{{ $title->id }}</td>
                                                <td>{{ $title->title }}</td>
                                                <td class="action"><a
                                                        href="{{ route('admin.typerTitle.edit', [$title->id]) }}"
                                                        class="btn btn-success">Edit</a>
                                                <td class="action">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#delete{{ $title->id }}">
                                                        Delete
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="delete{{ $title->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete
                                                                        Confimation</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body text-left">
                                                                    TyperTitle <span class="badge badge-primary">ID: {{ $title->id }} </span> will be deleted.<br>
                                                                    Are you sure you want to proceed?
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.typerTitle.destroy', [$title->id]) }}"
                                                                    method="post">@csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Yes, Delete it.</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal -->
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
        </div>
    </section>


    <style>
        td.action {
            text-align: center !important;
            padding: 0 !important;
        }

        .action .badge  {
          padding: 0 !important;
          border-radius: 0;
        }
    </style>
@endsection
