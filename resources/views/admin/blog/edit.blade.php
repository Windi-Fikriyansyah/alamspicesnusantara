@extends('template.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Blog /</span> Edit Post</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Edit Post Details</h5>
                <div class="card-body">
                    <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="excerpt">Excerpt (Short Summary)</label>
                                    <textarea class="form-control" id="excerpt" name="excerpt" rows="2">{{ $blog->excerpt }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="10">{{ $blog->content }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="image">Featured Image</label>
                                    @if($blog->image)
                                    <div class="mb-2">
                                        <img src="{{ asset($blog->image) }}" alt="current" class="rounded w-100 mb-2 shadow-sm">
                                    </div>
                                    @endif
                                    <input type="file" class="form-control" id="image" name="image">
                                    <div class="form-text">Leave empty to keep current image.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mt-4">
                                        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1" {{ $blog->is_published ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_published">Published</label>
                                    </div>
                                    @if($blog->published_at)
                                    <div class="text-muted small mt-1">First published on: {{ date('d M Y H:i', strtotime($blog->published_at)) }}</div>
                                    @endif
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-4">
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
