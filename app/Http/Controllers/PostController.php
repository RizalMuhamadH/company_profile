<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Post;
use DataTables;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = post::all()->toArray();
        // return view('admin.post.list', compact('posts'));
        // dd(post::all()->toArray());
        // return Post::all()->toArray();

        return view('admin.post.list');
    }
    public function getPosts()
    {

        // return json_encode(array('draw' => 0,'recordsTotal' => 5,'recordsFiltered' => 5,'data'=>Post::get()));
        // return Response(array('draw' => 0,'recordsTotal' => 5,'recordsFiltered' => 5,'data'=>Post::get()));
        // return post::get();
        return Datatables::of(Post::get())->make(true);
    }

    public function allPost()
    {
        // return Response(Post::join('users', 'posts.user_id', '=', 'users.id')->get());
        return Response(Post::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'post_title' => 'required',
            'post_summary' => 'required',
            'post_content' => 'required',
            'post_image' => 'required|image'
        ]);

        $imagePath = request('post_image')->store('upload', 'public');
        $imageThumbPath = Image::make(request()->file('post_image')->getRealPath())->resize(320, 240)->save(public_path('storage/thumb/' . date('YmdHis') . "." . request('post_image')->getClientOriginalExtension()));

        auth()->user()->post()->create([
            'post_title' => $data['post_title'],
            'post_summary' => $data['post_summary'],
            'post_content' => $data['post_content'],
            'post_image' => $imagePath,
            'post_image_thumb' => 'thumb/' . date('YmdHis') . "." . request('post_image')->getClientOriginalExtension(),
        ]);
        return redirect("/post");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'post_title' => 'required',
            'post_summary' => 'required',
            'post_content' => 'required',
            'post_image' => '',
        ]);


        $post = Post::findOrFail($id);

        $imagePath = $post->post_image;
        $imageThumbPath = $post->post_image_thumb;
        if (request('post_image')) {
            $imagePath = request('post_image')->store('upload', 'public');
            Image::make(request()->file('post_image')->getRealPath())->resize(320, 240)->save(public_path('storage/thumb/' . date('YmdHis') . "." . request('post_image')->getClientOriginalExtension()));
            $imageThumbPath = 'thumb/' . date('YmdHis') . "." . request('post_image')->getClientOriginalExtension();
        }

        // auth()->user()->post()->update(array_merge(
        //     $data,
        //     ['post_image' => $imagePath, 'post_image_thumb' => $imageThumbPath]
        // ));

        auth()->user()->post()->where('id', $id)->update(array_merge(
            $data,
            ['post_image' => $imagePath, 'post_image_thumb' => $imageThumbPath]
        ));

        return redirect("/post");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Post::findOrFail($id)->delete();
        return json_encode(array('status' => 200));
    }
}
