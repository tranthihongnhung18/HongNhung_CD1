<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where("post.status", "!=", 0)
            ->leftJoin('topic', 'post.topic_id', '=', 'topic.id')
            // Nếu bạn thực sự cần tham gia với bảng 'products', bỏ ghi chú dòng sau và đảm bảo rằng các tên bảng và cột là chính xác
            // ->leftJoin('products', 'posts.product_id', '=', 'products.id')
            ->orderBy("post.created_at", "DESC")
            ->select("post.id", "post.title", "post.image", "post.type", "topic.name as topicname")
            ->paginate(10); // Sử dụng phân trang

        return view("backend.post.index", compact("list"));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
