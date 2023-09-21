@extends('frontend.layouts.layout')
@section('content')
    <div class="imageHeader">
        <img class="scaleImage" src="{{ Storage::url($table->image) }}" alt="header">
        <div class="overlay"></div>
        <div class="text">
            <h1>{{ $table->title }}</h1>
        </div>
    </div>

    <nav class="breadcrumbs">
        <div class="container col-md-9">
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li>Blog Detail</li>
            </ol>
        </div>
    </nav>

    <section class="col-md-6">
        <!-- Blog-Area-Start -->
        <div class="container blog-post">
            <div class="row mt-5">
                <div class="description">
                    {!! $table->description !!}
                </div>
            </div>
        </div>
        <!-- Blog-Area-End -->

        <!-- Quote-Area-Start -->
        <div class="quote-area col-md-8 mx-auto text-center">
            <h5><a href="#">{{ $table->category->name }}</a> カテゴリーの他の文</h5>
            <ul>
                @foreach (\App\Models\Blog::where('id', '!=', $table->id)->where('category_id', $table->category_id)->orderBy('created_at', 'desc')->take(3)->get() as $blog)
                    <li><a href="{{ route('blog.detail', [$blog->id]) }}">{{ $blog->title }}</a></li>
                @endforeach
            </ul>
            {{-- <div class="tags" style="margin-left: -3px">
                <a href="#" class="btn border">tag 1</a>
                <a href="#" class="btn border">tag 2</a>
                <a href="#" class="btn border">tag 3</a>
            </div> --}}
        </div>
        <!-- Quote-Area-End -->

        <div class="col-sm-12 mb-5">
            <h5 class="text-center pb-2">他のカテゴリー</h5>
            <ul class="ca-menu">
                <li> <a href="{{ route('blog', ['id' => 0]) }}">All Posts </a> </li>
                @foreach ($category as $ca)
                    <span>|</span>
                    <li> <a href="{{ route('blog', ['id' => $ca->id]) }}"> {{ $ca->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
