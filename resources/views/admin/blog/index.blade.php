@extends('template.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center py-3 mb-4">
        <h4 class="fw-bold m-0"><span class="text-muted fw-light">Admin /</span> Blog Management</h4>
        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
            <i class="bx bx-plus me-1"></i> Add New Post
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- Blog Section Settings -->
    <div class="card mb-4">
        <h5 class="card-header">Landing Page Blog Section Header</h5>
        <div class="card-body">
            <form action="{{ route('admin.blog.settings.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label" for="blog_badge">Badge/Label</label>
                        <input type="text" class="form-control" id="blog_badge" name="blog_badge" value="{{ $settings['blog_badge'] ?? 'Update Terbaru' }}">
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label" for="blog_title">Title</label>
                        <input type="text" class="form-control" id="blog_title" name="blog_title" value="{{ $settings['blog_title'] ?? 'Wawasan dari Industri Rempah.' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="form-label" for="blog_description">Description</label>
                        <textarea class="form-control" id="blog_description" name="blog_description" rows="2">{{ $settings['blog_description'] ?? 'Berita terbaru, tips pemilihan komoditas, dan cerita dari balik layar perjalanan ekspor kami.' }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update Blog Header</button>
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">All Blog Posts</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Published At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($blogs as $blog)
                    <tr>
                        <td>
                            @if($blog->image)
                                <img src="{{ asset($blog->image) }}" alt="image" class="rounded" width="50">
                            @else
                                <div class="bg-light rounded d-flex align-items-center justify-center" style="width: 50px; height: 50px;">
                                    <i class="bx bx-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td><strong>{{ $blog->title }}</strong></td>
                        <td>
                            @if($blog->is_published)
                                <span class="badge bg-label-success me-1">Published</span>
                            @else
                                <span class="badge bg-label-warning me-1">Draft</span>
                            @endif
                        </td>
                        <td>{{ $blog->published_at ? date('d M Y', strtotime($blog->published_at)) : '-' }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-menu-item px-3 py-1 d-block text-primary" href="{{ route('admin.blog.edit', $blog->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('admin.blog.delete', $blog->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-menu-item px-3 py-1 d-block text-danger border-0 bg-transparent w-100 text-start" onclick="return confirm('Are you sure you want to delete this post?')">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @if(count($blogs) == 0)
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">No blog posts found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
