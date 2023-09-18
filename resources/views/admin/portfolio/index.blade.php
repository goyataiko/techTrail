@extends('admin.layouts.layout')

@section('content')
    {{-- Portfolio Posting --}}
    <section class="section col-md-10 mx-2">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Portfolio</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('dashboard') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>

                            <h4>All Portfolio</h4>
                            <div class="card-header-action">
                                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Create More
                                    <i class="fas fa-plus"></i></a>
                            </div>
                        </div>


                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered display" id="myDataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="20px">id</th>
                                            <th width="40px">Category</th>
                                            <th width="80px">Image</th>
                                            <th>Title</th>
                                            <th width="75px">Created At</th>
                                            <th width="50px">
                                                <div class="text-center">
                                                    Action
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <tr>
                                            <th>id</th>
                                            <th>Category</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Created At</th>
                                            <th>
                                                <div class="text-center">
                                                    Action
                                                </div>
                                            </th>
                                        </tr>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#">Develope</a></td>
                                            <td class="text-center"><a href="#">
                                                    <img width="70px"
                                                        src="{{ asset('frontend/assets/images/about-image.png') }}"></a>
                                            </td>
                                            <td><a href="#">Junior Technical Author</a></td>
                                            <td><a href="#">2023/07/25</a></td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    {{-- <div class="btn btn-success m-1"><i class='fas fa-edit'></i></div> --}}
                                                    <div class="btn border m-1"><i class='fas fa-folder-open'></i>
                                                    </div>
                                                    <div class="btn border m-1"><i class='fas fa-trash'></i></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="#">Desgin</a></td>
                                            <td class="text-center"><a href="#">
                                                    <img width="70px"
                                                        src="{{ asset('frontend/assets/images/about-image.png') }}"></a>
                                            </td>
                                            <td><a href="#">Technical Author</a></td>
                                            <td><a href="#">2023/06/25</a></td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    {{-- <div class="btn btn-success m-1"><i class='fas fa-edit'></i></div> --}}
                                                    <div class="btn border m-1"><i class='fas fa-folder-open'></i>
                                                    </div>
                                                    <div class="btn border m-1"><i class='fas fa-trash'></i></div>
                                                </div>
                                            </td>
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

        .action .badge {
            padding: 0 !important;
            border-radius: 0;
        }
    </style>
@endsection
