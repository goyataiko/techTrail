@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="/admin/portfolio" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Edit The Post</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/admin/portfolio">Portfolio</a></div>
                <div class="breadcrumb-item">Edit Portfolio</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Your Portfolio</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.portfolio.update', [$table->id]) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Title</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $table->title }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Images</label>
                                    <div class="col-sm-12 col-md-9 d-flex">
                                        <input type="file" name="images[]" class="real-upload" accept="image/*" multiple>
                                        <div class="upload image-preview">
                                            <label>Choose File</label>
                                        </div>
                                        <div>
                                            <ul class="image-preview-t">
                                                @foreach ($table->images as $image)
                                                    <li>
                                                        <img src="{{ Storage::url($image->image_path) }}" alt="">
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Category</label>
                                    <div class="col-sm-12 col-md-9">
                                        <select name="category_id" class="form-control selectric">
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}"
                                                    {{ $table->category_id === $cat->id ? 'selected' : '' }}
                                                    >{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Tool</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="tool" class="form-control"
                                            value="{{ $table->tool }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Work Detail</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="work_detail" class="form-control"
                                            value="{{ $table->work_detail }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Site Link</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="site_link" class="form-control"
                                            value="{{ $table->site_link }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Plan Link</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="plan_link" class="form-control"
                                            value="{{ $table->plan_link }}">
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Github</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="github" class="form-control" value="{{ $table->github }}">
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Content</label>
                                    <div class="col-sm-12 col-md-9">
                                        <textarea name="description" class="summernote">{{ $table->description }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Created
                                        Time</label>
                                    <div class="col-sm-12 col-md-9">
                                        <input type="text" name="created_at" class="form-control datepicker"
                                            value="{{ $table->created_at->format('Y-m-d') }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Status</label>
                                    <div class="col-sm-12 col-md-9">
                                        <select name="status" class="form-control selectric">
                                            <option value="1" {{ $table->status === 1 ? 'selected' : '' }}>
                                                Draft
                                            </option>
                                            <option value="2" {{ $table->status === 2 ? 'selected' : '' }}>
                                                Publish
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2"></label>
                                    <div class="col-sm-12 col-md-9">
                                        <button type="submit" class="btn btn-primary">Edit Post</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script></script>
@endsection
