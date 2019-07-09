@extends('admin.home')

@section('title')
    <title>Articles</title>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Post Edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="box box-info">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <form action="/p/{{ $post->id }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="post_title" class="col-md-4 col-form-label">Title</label>

                        <div>
                            <input id="post_title" type="text"
                                class="form-control @error('post_title') is-invalid @enderror" name="post_title"
                                value="{{ old('post_title') ?? $post->post_title }}" required autocomplete="post_title" autofocus>

                            @error('post_title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $post_title }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="post_summary" class="col-md-4 col-form-label">Summary</label>

                        <div>
                            <input id="post_summary" type="text"
                                class="form-control @error('post_summary') is-invalid @enderror" name="post_summary"
                                value="{{ old('post_summary') ?? $post->post_summary }}" required autocomplete="post_summary" autofocus>

                            @error('post_summary')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $post_summary }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="post_image" class="col-md-4 col-form-label">Image</label>

                        <div>
                            <input id="post_image" type="file"
                                class="form-control-file @error('post_image') is-invalid @enderror" name="post_image"
                                value="{{ old('post_image') }}">

                            {{-- @error('post_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $post_image }}</strong>
                            </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="post_content" class="col-md-4 col-form-label">Text</label>

                        <div>
                            <textarea id="post_content" class="form-control @error('post_content') is-invalid @enderror"
                                name="post_content" value="{{ old('post_content') }}"
                                style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ old('post_content') ?? $post->post_content }}</textarea>

                            @error('post_content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $post_content }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-primary">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</section>

@endsection
