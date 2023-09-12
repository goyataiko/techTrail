@extends('admin.layouts.layout')

@section('content')
{{-- Blog Category --}}
    <section class="col-md-10 mx-2">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>

                            <h4>Blog Category</h4>
                            <div class="card-header-action">
                                <!-- Button trigger modal -->
                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#create">Create
                                    More
                                    <i class="fas fa-plus"></i></a>
                            </div>
                        </div>



                        <!-- Modal -->
                        <div class="modal fade" id="create" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('admin.blog-category.store') }}" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            Category Name
                                            <input type="text" name="name" class="form-control" value="" />
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                aria-label="Close">Close</button>

                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->




                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th width="10%" class="text-center">id</th>
                                            <th width="90%">Category Name</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $id = 0;
                                        @endphp
                                        @foreach ($model as $mo)
                                            @php
                                                $id++;
                                            @endphp
                                            <tr>
                                                <td class="text-center"> {{ $id }} </td>
                                                <td>{{ $mo->name }}</td>
                                                <td class="action"><a href="#" data-toggle="modal"
                                                        data-target="#edit{{ $mo->id }}"
                                                        class="btn btn-success"><i class='fas fa-edit'></i></a>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="edit{{ $mo->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-lg"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <form
                                                                    action="{{ route('admin.blog-category.update', [$mo->id]) }}"
                                                                    method="POST">
                                                                    @method('PUT')
                                                                    @csrf
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                                            Edit Category</h5>
                                                                        <button type="button" class="close"
                                                                            data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body text-left">
                                                                     Category Name
                                                                        <input type="text" name="name"
                                                                            class="form-control"
                                                                            value="{{ $mo->name }}" />
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">Close</button>

                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Modal -->

                                                </td>
                                                <td class="action">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#delete{{ $mo->id }}">
                                                        <i class='fas fa-trash'></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="delete{{ $mo->id }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
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
                                                                    Category <span class="badge badge-primary">ID:
                                                                        {{ $id }} </span> will be deleted.<br>
                                                                    Are you sure you want to proceed?
                                                                </div>
                                                                <form
                                                                    action="{{ route('admin.blog-category.destroy', [$mo->id]) }}"
                                                                    method="post">@csrf
                                                                    @method('DELETE')
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal"
                                                                            aria-label="Close">Close</button>

                                                                        <button type="submit"
                                                                            class="btn btn-primary">Yes,
                                                                            Delete
                                                                            it.</button>
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

        .action .badge {
            padding: 0 !important;
            border-radius: 0;
        }
    </style>
@endsection
