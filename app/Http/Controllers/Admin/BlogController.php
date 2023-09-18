<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = BlogCategory::get();
        return view('admin.blog.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 블로그 글 저장
        $blog = Blog::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            // 다른 필드들 추가
        ]);

        // 이미지 업로드 및 관계 설정
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images'); // 이미지를 저장할 경로 설정
                $blog->images()->create(['image_path' => $path]);
            }
        }

        // 블로그 글 작성 완료 후 리다이렉트 또는 메시지 반환
        return redirect()->route('blogs.index')->with('success', '블로그 글이 작성되었습니다.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Blog::find($id);
        return view('frontend.blog-detail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
