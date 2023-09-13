@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Post</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Posts</a></div>
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
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Images</label>
                                <div class="col-sm-12 col-md-9 d-flex">
                                    <div id="image-preview" class="image-preview mr-3">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" name="image" id="image-upload" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Category</label>
                                <div class="col-sm-12 col-md-9">
                                    <select class="form-control selectric">
                                        @foreach ($category as $cat)
                                            <option>{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Tags</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Work Detail</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Site Link</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" class="form-control inputtags">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Content</label>
                                <div class="col-sm-12 col-md-9">
                                    <textarea class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Created Time</label>
                                <div class="col-sm-12 col-md-9">
                                    <input type="text" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-2 col-lg-2">Status</label>
                                <div class="col-sm-12 col-md-9">
                                    <select class="form-control selectric">
                                        <option value="1">Publish</option>
                                        <option value="2">Draft</option>                                        
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#image-preview').css({
                'background-image': 'url("")',
                'background-size': 'cover',
                'background-position': 'center center'
            })

        });
    </script>
@endpush
