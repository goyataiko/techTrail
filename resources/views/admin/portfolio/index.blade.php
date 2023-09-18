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
                                            <th width="20px">Status</th>
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
                                            <th>Status</th>
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
                                        @foreach ($table as $ta)
                                            <tr>
                                                <td>{{ $ta->id }}</td>
                                                <td>
                                                    @if ($ta->status === 1)
                                                        <div class="badge badge-info">Draft</div>
                                                    @else
                                                        <div class="badge badge-secondary">Published</div>
                                                    @endif
                                                </td>                                                
                                                <td><a href="{{ route('admin.portfolio.edit', [$ta->id]) }}">{{ $ta->category->name }}</a></td>
                                                <td class="text-center">
                                                    @if ($ta->images->first()->image_path)                                                        
                                                    <a href="{{ route('admin.portfolio.edit', [$ta->id]) }}">
                                                        <img width="70px" src="{{ Storage::url( $ta->images->first()->image_path) }}">
                                                    </a>
                                                    @endif
                                                </td>
                                                <td><a href="{{ route('admin.portfolio.edit', [$ta->id]) }}">{{ $ta->title }}</a></td>
                                                <td><a href="{{ route('admin.portfolio.edit', [$ta->id]) }}">{{ $ta->created_at->format('Y.M.d') }}</a></td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="btn border m-1"><i class='fas fa-folder-open'></i>
                                                        </div>
                                                        <div class="btn border m-1"><i class='fas fa-trash'></i></div>
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
