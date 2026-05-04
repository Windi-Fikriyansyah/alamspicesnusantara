@extends('template.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin /</span> CMS Landing Page</h4>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-xl-12">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs scrollable-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-settings">
                            <i class="bx bx-cog me-1"></i> Situs
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-hero">
                            <i class="bx bx-image me-1"></i> Hero
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-about">
                            <i class="bx bx-info-circle me-1"></i> About
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-stats">
                            <i class="bx bx-stats me-1"></i> Stats
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-features">
                            <i class="bx bx-check-shield me-1"></i> Fitur
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-products">
                            <i class="bx bx-package me-1"></i> Produk
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-galleries">
                            <i class="bx bx-images me-1"></i> Galeri
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-testimonials">
                            <i class="bx bx-message-dots me-1"></i> Testimoni
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Settings Tab -->
                    <div class="tab-pane fade show active" id="navs-settings" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST">
                            @csrf
                            <div class="row">
                                @foreach($settings as $setting)
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">{{ ucwords(str_replace('_', ' ', $setting->key)) }}</label>
                                    @if($setting->key == 'site_description' || $setting->key == 'contact_address')
                                    <textarea name="settings[{{ $setting->key }}]" class="form-control" rows="3">{{ $setting->value }}</textarea>
                                    @else
                                    <input type="text" name="settings[{{ $setting->key }}]" class="form-control" value="{{ $setting->value }}">
                                    @endif
                                </div>
                                @endforeach
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>

                    <!-- Hero Tab -->
                    <div class="tab-pane fade" id="navs-hero" role="tabpanel">
                        <form action="{{ route('admin.hero.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3"><label class="form-label">Badge Text</label><input type="text" name="badge_text" class="form-control" value="{{ $hero->badge_text }}"></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $hero->title }}"></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Title Highlight</label><input type="text" name="title_highlight" class="form-control" value="{{ $hero->title_highlight }}"></div>
                                <div class="col-md-12 mb-3"><label class="form-label">Description</label><textarea name="description" class="form-control" rows="3">{{ $hero->description }}</textarea></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Primary Button</label><input type="text" name="primary_button_text" class="form-control" value="{{ $hero->primary_button_text }}"></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Secondary Button</label><input type="text" name="secondary_button_text" class="form-control" value="{{ $hero->secondary_button_text }}"></div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Hero Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset($hero->image) }}" width="200" class="rounded mt-2">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>

                    <!-- About Tab -->
                    <div class="tab-pane fade" id="navs-about" role="tabpanel">
                        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3"><label class="form-label">Badge Text</label><input type="text" name="badge_text" class="form-control" value="{{ $about->badge_text }}"></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Title</label><input type="text" name="title" class="form-control" value="{{ $about->title }}"></div>
                                <div class="col-md-12 mb-3"><label class="form-label">Content</label><textarea name="content" class="form-control" rows="6">{{ $about->content }}</textarea></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Exp Label</label><input type="text" name="experience_label" class="form-control" value="{{ $about->experience_label }}"></div>
                                <div class="col-md-6 mb-3"><label class="form-label">Exp Value</label><input type="text" name="experience_value" class="form-control" value="{{ $about->experience_value }}"></div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control">
                                    <img src="{{ asset($about->image) }}" width="200" class="rounded mt-2">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>

                    <!-- Stats Tab -->
                    <div class="tab-pane fade" id="navs-stats" role="tabpanel">
                        <div class="d-flex justify-content-between mb-3">
                            <h5>Stats List</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addStatModal">+ Add Stat</button>
                        </div>
                        <table class="table table-hover">
                            <thead><tr><th>Value</th><th>Label</th><th>Order</th><th>Actions</th></tr></thead>
                            <tbody>
                                @foreach($stats as $stat)
                                <tr>
                                    <td>{{ $stat->value }}</td>
                                    <td>{{ $stat->label }}</td>
                                    <td>{{ $stat->order }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editStat{{ $stat->id }}"><i class="bx bx-edit"></i></button>
                                        <form action="{{ route('admin.stats.delete', $stat->id) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')"><i class="bx bx-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Features Tab -->
                    <div class="tab-pane fade" id="navs-features" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" class="mb-5 border-bottom pb-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Badge Section (Mengapa Verdania)</label>
                                    <input type="text" name="settings[features_badge]" class="form-control" value="{{ $settings->where('key', 'features_badge')->first()->value ?? 'Mengapa Verdania' }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Title Section</label>
                                    <input type="text" name="settings[features_title]" class="form-control" value="{{ $settings->where('key', 'features_title')->first()->value ?? 'Keunggulan yang dipercaya importir dunia' }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update Header</button>
                        </form>

                        <div class="d-flex justify-content-between mb-3">
                            <h5>Features List</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addFeatureModal">+ Add Feature</button>
                        </div>
                        <table class="table table-hover">
                            <thead><tr><th>Title</th><th>Order</th><th>Actions</th></tr></thead>
                            <tbody>
                                @foreach($features as $f)
                                <tr>
                                    <td>{{ $f->title }}</td>
                                    <td>{{ $f->order }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editFeature{{ $f->id }}"><i class="bx bx-edit"></i></button>
                                        <form action="{{ route('admin.features.delete', $f->id) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')"><i class="bx bx-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Products Tab -->
                    <div class="tab-pane fade" id="navs-products" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" class="mb-5 border-bottom pb-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Badge Section (Komoditas Unggulan)</label>
                                    <input type="text" name="settings[products_badge]" class="form-control" value="{{ $settings->where('key', 'products_badge')->first()->value ?? 'Komoditas Unggulan' }}">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Title Section</label>
                                    <input type="text" name="settings[products_title]" class="form-control" value="{{ $settings->where('key', 'products_title')->first()->value ?? 'Hasil bumi, dipilih dengan cermat.' }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update Header</button>
                        </form>

                        <div class="d-flex justify-content-between mb-3">
                            <h5>Products List</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addProductModal">+ Add Product</button>
                        </div>
                        <table class="table table-hover">
                            <thead><tr><th>Img</th><th>Name</th><th>Cat</th><th>Actions</th></tr></thead>
                            <tbody>
                                @foreach($products as $p)
                                <tr>
                                    <td><img src="{{ asset($p->image) }}" width="40" class="rounded"></td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->category }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editProduct{{ $p->id }}"><i class="bx bx-edit"></i></button>
                                        <form action="{{ route('admin.products.delete', $p->id) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')"><i class="bx bx-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Galleries Tab -->
                    <div class="tab-pane fade" id="navs-galleries" role="tabpanel">
                        <form action="{{ route('admin.settings.update') }}" method="POST" class="mb-5 border-bottom pb-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Badge Section (Galeri Verdania)</label>
                                    <input type="text" name="settings[gallery_badge]" class="form-control" value="{{ $settings->where('key', 'gallery_badge')->first()->value ?? 'Galeri Verdania' }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Title Section</label>
                                    <input type="text" name="settings[gallery_title]" class="form-control" value="{{ $settings->where('key', 'gallery_title')->first()->value ?? 'Dedikasi di setiap langkah perjalanan.' }}">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Description Section</label>
                                    <textarea name="settings[gallery_description]" class="form-control" rows="1">{{ $settings->where('key', 'gallery_description')->first()->value ?? 'Dari perkebunan hingga pengiriman global, kami memastikan standar tertinggi di setiap proses.' }}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update Header</button>
                        </form>

                        <div class="d-flex justify-content-between mb-3">
                            <h5>Gallery List</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addGalleryModal">+ Add Gallery</button>
                        </div>
                        <table class="table table-hover">
                            <thead><tr><th>Img</th><th>Title</th><th>Order</th><th>Actions</th></tr></thead>
                            <tbody>
                                @foreach($galleries as $g)
                                <tr>
                                    <td><img src="{{ asset($g->image) }}" width="40" class="rounded"></td>
                                    <td>{{ $g->title }}</td>
                                    <td>{{ $g->order }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editGallery{{ $g->id }}"><i class="bx bx-edit"></i></button>
                                        <form action="{{ route('admin.galleries.delete', $g->id) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')"><i class="bx bx-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Testimonials Tab -->
                    <div class="tab-pane fade" id="navs-testimonials" role="tabpanel">
                        <div class="d-flex justify-content-between mb-3">
                            <h5>Testimonials List</h5>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTestimonialModal">+ Add Testimonial</button>
                        </div>
                        <table class="table table-hover">
                            <thead><tr><th>Author</th><th>Role</th><th>Actions</th></tr></thead>
                            <tbody>
                                @foreach($testimonials as $t)
                                <tr>
                                    <td>{{ $t->author_name }}</td>
                                    <td>{{ $t->author_role }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#editTestimonial{{ $t->id }}"><i class="bx bx-edit"></i></button>
                                        <form action="{{ route('admin.testimonials.delete', $t->id) }}" method="POST" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete?')"><i class="bx bx-trash"></i></button></form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ALL MODALS AT THE END TO PREVENT Z-INDEX ISSUES -->

<!-- Add Modals -->
<div class="modal fade" id="addStatModal" tabindex="-1"><div class="modal-dialog"><form class="modal-content" action="{{ route('admin.stats.store') }}" method="POST">@csrf<div class="modal-header"><h5>Add Stat</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><input type="text" name="value" class="form-control mb-2" placeholder="Value (e.g. 50+)" required><input type="text" name="label" class="form-control mb-2" placeholder="Label" required><input type="number" name="order" class="form-control" value="1" required></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Add</button></div></form></div></div>

<div class="modal fade" id="addFeatureModal" tabindex="-1"><div class="modal-dialog"><form class="modal-content" action="{{ route('admin.features.store') }}" method="POST">@csrf<div class="modal-header"><h5>Add Feature</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><input type="text" name="title" class="form-control mb-2" placeholder="Title" required><textarea name="description" class="form-control mb-2" placeholder="Description" required></textarea><input type="number" name="order" class="form-control" value="1" required></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Add</button></div></form></div></div>

<div class="modal fade" id="addProductModal" tabindex="-1"><div class="modal-dialog"><form class="modal-content" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">@csrf<div class="modal-header"><h5>Add Product</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><input type="text" name="name" class="form-control mb-2" placeholder="Name" required><input type="text" name="category" class="form-control mb-2" placeholder="Category" required><input type="number" name="order" class="form-control mb-2" value="1" required><input type="file" name="image" class="form-control" required></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Add</button></div></form></div></div>

<div class="modal fade" id="addGalleryModal" tabindex="-1"><div class="modal-dialog"><form class="modal-content" action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">@csrf<div class="modal-header"><h5>Add Gallery</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><input type="text" name="title" class="form-control mb-2" placeholder="Title" required><input type="text" name="subtitle" class="form-control mb-2" placeholder="Subtitle"><input type="number" name="order" class="form-control mb-2" value="1" required><input type="file" name="image" class="form-control" required></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Add</button></div></form></div></div>

<div class="modal fade" id="addTestimonialModal" tabindex="-1"><div class="modal-dialog"><form class="modal-content" action="{{ route('admin.testimonials.store') }}" method="POST">@csrf<div class="modal-header"><h5>Add Testimonial</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div><div class="modal-body"><input type="text" name="author_name" class="form-control mb-2" placeholder="Author Name" required><input type="text" name="author_role" class="form-control mb-2" placeholder="Author Role" required><input type="text" name="author_initials" class="form-control mb-2" placeholder="Initials (e.g. JD)" maxlength="2" required><textarea name="content" class="form-control mb-2" placeholder="Content" required></textarea><input type="number" name="order" class="form-control" value="1" required></div><div class="modal-footer"><button type="submit" class="btn btn-primary">Add</button></div></form></div></div>

<!-- Edit Modals (Looping again at the end) -->
@foreach($stats as $stat)
<div class="modal fade" id="editStat{{ $stat->id }}" tabindex="-1">
    <div class="modal-dialog"><form class="modal-content" action="{{ route('admin.stats.update', $stat->id) }}" method="POST">@csrf
        <div class="modal-header"><h5>Edit Stat</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
            <input type="text" name="value" class="form-control mb-2" value="{{ $stat->value }}" required>
            <input type="text" name="label" class="form-control mb-2" value="{{ $stat->label }}" required>
            <input type="number" name="order" class="form-control" value="{{ $stat->order }}" required>
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Save Changes</button></div>
    </form></div>
</div>
@endforeach

@foreach($features as $f)
<div class="modal fade" id="editFeature{{ $f->id }}" tabindex="-1">
    <div class="modal-dialog"><form class="modal-content" action="{{ route('admin.features.update', $f->id) }}" method="POST">@csrf
        <div class="modal-header"><h5>Edit Feature</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
            <input type="text" name="title" class="form-control mb-2" value="{{ $f->title }}" required>
            <textarea name="description" class="form-control mb-2" required>{{ $f->description }}</textarea>
            <input type="number" name="order" class="form-control" value="{{ $f->order }}" required>
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Save Changes</button></div>
    </form></div>
</div>
@endforeach

@foreach($products as $p)
<div class="modal fade" id="editProduct{{ $p->id }}" tabindex="-1">
    <div class="modal-dialog"><form class="modal-content" action="{{ route('admin.products.update', $p->id) }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="modal-header"><h5>Edit Product</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
            <input type="text" name="name" class="form-control mb-2" value="{{ $p->name }}" required>
            <input type="text" name="category" class="form-control mb-2" value="{{ $p->category }}" required>
            <input type="number" name="order" class="form-control mb-2" value="{{ $p->order }}" required>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Save Changes</button></div>
    </form></div>
</div>
@endforeach

@foreach($galleries as $g)
<div class="modal fade" id="editGallery{{ $g->id }}" tabindex="-1">
    <div class="modal-dialog"><form class="modal-content" action="{{ route('admin.galleries.update', $g->id) }}" method="POST" enctype="multipart/form-data">@csrf
        <div class="modal-header"><h5>Edit Gallery</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
            <input type="text" name="title" class="form-control mb-2" value="{{ $g->title }}" required>
            <input type="text" name="subtitle" class="form-control mb-2" value="{{ $g->subtitle }}">
            <input type="number" name="order" class="form-control mb-2" value="{{ $g->order }}" required>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Save Changes</button></div>
    </form></div>
</div>
@endforeach

@foreach($testimonials as $t)
<div class="modal fade" id="editTestimonial{{ $t->id }}" tabindex="-1">
    <div class="modal-dialog"><form class="modal-content" action="{{ route('admin.testimonials.update', $t->id) }}" method="POST">@csrf
        <div class="modal-header"><h5>Edit Testimonial</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
        <div class="modal-body">
            <input type="text" name="author_name" class="form-control mb-2" value="{{ $t->author_name }}" required>
            <input type="text" name="author_role" class="form-control mb-2" value="{{ $t->author_role }}" required>
            <input type="text" name="author_initials" class="form-control mb-2" value="{{ $t->author_initials }}" maxlength="2" required>
            <textarea name="content" class="form-control mb-2" required>{{ $t->content }}</textarea>
            <input type="number" name="order" class="form-control" value="{{ $t->order }}" required>
        </div>
        <div class="modal-footer"><button type="submit" class="btn btn-primary">Save Changes</button></div>
    </form></div>
</div>
@endforeach

<style>
    .scrollable-tabs {
        flex-wrap: nowrap;
        overflow-x: auto;
        overflow-y: hidden;
    }
    .scrollable-tabs .nav-item {
        white-space: nowrap;
    }
</style>
@endsection