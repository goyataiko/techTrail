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
                                <a href="{{ route('admin.typerTitle.create') }}" class="btn btn-primary">View More <i class="fas fa-plus"></i></a>
                            </div>
                        </div>

                        <div class="card-body">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
