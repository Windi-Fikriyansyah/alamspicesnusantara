@extends('template.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin / Blog /</span> Create Post</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">New Post Details</h5>
                <div class="card-body">
                    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-4 p-3 bg-label-primary rounded">
                                    <label class="form-label text-primary fw-bold" for="ai_topic">Generate with AI</label>
                                    <div class="input-group">
                                        <input type="text" id="ai_topic" class="form-control" placeholder="Enter topic (e.g. Benefits of Cloves)">
                                        <button type="button" id="btn-generate-ai" class="btn btn-primary">
                                            <i class="bx bx-bot me-1"></i> Generate
                                        </button>
                                    </div>
                                    <div id="ai-loading" class="mt-2 small text-primary d-none">
                                        <div class="spinner-border spinner-border-sm" role="status"></div> Generating content, please wait...
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label" for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="excerpt">Excerpt (Short Summary)</label>
                                    <textarea class="form-control" id="excerpt" name="excerpt" rows="2" placeholder="Brief summary for list view"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" rows="10" placeholder="Full post content (HTML supported)"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="image">Featured Image</label>
                                    <div id="ai-image-preview" class="mb-2 d-none">
                                        <img src="" alt="AI Preview" class="rounded w-100 mb-2 shadow-sm" style="max-height: 250px; object-fit: cover;">
                                        <div class="text-xs text-success mb-2"><i class="bx bx-check-circle"></i> AI Image Generated</div>
                                    </div>
                                    <input type="hidden" name="ai_image_path" id="ai_image_path">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <div class="form-text">Recommended size: 1200x800px. If AI image is generated, this will be overridden unless you select a new file.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check form-switch mt-4">
                                        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" value="1">
                                        <label class="form-check-label" for="is_published">Publish immediately</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between mt-4">
                                    <a href="{{ route('admin.blog.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Post</button>
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
let editor;

ClassicEditor
    .create(document.querySelector('#content'))
    .then(newEditor => {
        editor = newEditor;
    })
    .catch(error => {
        console.error(error);
    });

document.getElementById('btn-generate-ai').addEventListener('click', async function() {
    const topic = document.getElementById('ai_topic').value;
    if (!topic) {
        alert('Please enter a topic first');
        return;
    }

    const btn = this;
    const loading = document.getElementById('ai-loading');
    
    btn.disabled = true;
    loading.classList.remove('d-none');

    try {
        const response = await fetch('{{ route("admin.blog.generate-ai") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ topic: topic })
        });

        const data = await response.json();

        if (response.ok) {
            document.getElementById('title').value = data.title;
            document.getElementById('excerpt').value = data.excerpt;
            
            if (editor) {
                editor.setData(data.content);
            } else {
                document.getElementById('content').value = data.content;
            }

            // Handle AI Image
            if (data.image_path) {
                document.getElementById('ai_image_path').value = data.image_path;
                const previewContainer = document.getElementById('ai-image-preview');
                previewContainer.querySelector('img').src = '{{ asset("") }}' + data.image_path;
                previewContainer.classList.remove('d-none');
            }
            
            alert('AI content and image generated successfully!');
        } else {
            alert('Error: ' + (data.error || 'Failed to generate content'));
        }
    } catch (error) {
        console.error(error);
        alert('Something went wrong. Please check console.');
    } finally {
        btn.disabled = false;
        loading.classList.add('d-none');
    }
});
</script>
@endsection
