@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Post</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="/admin/portfolio">Posts</a></div>
                <div class="breadcrumb-item">Create New Post</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your Post</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Title</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Images</label>
                                <div class="col-sm-12 col-md-9 d-flex">
                                    <input type="file" name="images" class="real-upload" accept="image/*" required
                                        multiple>
                                    <div class="upload image-preview">
                                        <label>Choose File</label>
                                    </div>
                                    <div class="preview-box">
                                        <ul class="image-preview-t"></ul>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Category</label>
                                <div class="col-sm-12 col-md-9">
                                    <select name="category_id" class="form-control selectric">
                                        @foreach ($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Tool</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="tool" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Work Detail</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="work_detail" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Site Link</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="site_link" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Plan Link</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="plan_link" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Content</label>
                                <div class="col-sm-12 col-md-9">
                                    <textarea name="description" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Created Time</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" name="created_at" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Status</label>
                                <div class="col-sm-12 col-md-9">
                                    <select name="status" class="form-control selectric">
                                        <option value="1">Draft</option>
                                        <option value="2">Publish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2"></label>
                                <div class="col-sm-12 col-md-9">
                                    <button class="btn btn-primary">Create Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script></script>
@endsection
