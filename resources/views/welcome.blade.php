<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }} — {{ $settings['site_tagline'] ?? 'Ekspor Rempah' }}
    </title>
    <meta name="description" content="{{ $settings['site_description'] ?? '' }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $settings['site_name'] ?? '' }} — Ekspor Premium">
    <meta property="og:description" content="{{ $settings['site_description'] ?? '' }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset($hero->image ?? 'images/hero-plantation.jpg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div id="app" class="min-h-screen flex flex-col bg-background">

        <!-- HEADER -->
        <header class="sticky top-0 z-50 w-full border-b border-border/60 bg-background/80 backdrop-blur-lg">
            <div class="container-px mx-auto flex h-16 max-w-7xl items-center justify-between">
                <a href="/" class="flex items-center gap-2 group">
                    <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-emerald shadow-soft">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-primary-foreground">
                            <path
                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                        </svg>
                    </span>
                    <span class="font-display text-xl font-semibold text-primary">
                        Alam Herbal <span class="text-gold">Nusantara</span>
                    </span>
                </a>

                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="text-sm font-medium text-primary font-semibold transition-smooth">Home</a>
                    <a href="#about"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">About</a>
                    <a href="#products"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Product</a>
                    <a href="#gallery"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Gallery</a>
                    <a href="#blog"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Blog</a>
                    <a href="#contact"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Contact</a>
                </nav>

                <div class="hidden md:block">
                    <a href="#"
                        class="btn btn-hero btn-default-size">{{ $hero->primary_button_text ?? 'Hubungi Kami' }}</a>
                </div>

                <button id="menu-toggle" aria-label="Toggle menu" class="md:hidden p-2 text-primary">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12" />
                        <line x1="4" x2="20" y1="6" y2="6" />
                        <line x1="4" x2="20" y1="18" y2="18" />
                    </svg>
                    <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="hidden">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <nav id="mobile-menu" class="hidden md:hidden border-t border-border bg-background">
                <div class="container-px mx-auto py-4 flex flex-col gap-1">
                    <a href="#"
                        class="px-3 py-3 rounded-md text-base font-medium bg-accent text-primary font-semibold">Home</a>
                    <a href="#about"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">About</a>
                    <a href="#products"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Product</a>
                    <a href="#gallery"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Gallery</a>
                    <a href="#blog"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Blog</a>
                    <a href="#contact"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Contact</a>
                    <a href="#" class="btn btn-hero btn-lg mt-2">{{ $hero->primary_button_text ?? 'Contact Us' }}</a>
                </div>
            </nav>
        </header>

        <main class="flex-1">
            <!-- HERO -->
            <section class="relative overflow-hidden">
                <div class="absolute inset-0">
                    <img src="{{ asset($hero->image ?? 'images/hero-plantation.jpg') }}"
                        alt="{{ $hero->title ?? 'Hero' }}" class="h-full w-full object-cover" width="1920"
                        height="1280">
                    <div class="absolute inset-0 bg-gradient-hero"></div>
                </div>

                <div
                    class="relative container-px mx-auto max-w-7xl py-28 md:py-40 text-primary-foreground animate-fade-up">
                    <span
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-xs font-semibold uppercase tracking-[0.2em] text-gold">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                        </svg>
                        {{ $hero->badge_text ?? 'Premium Exports' }}
                    </span>
                    <h1 class="mt-6 font-display text-5xl md:text-7xl lg:text-8xl font-semibold leading-[1] max-w-4xl">
                        {{ $hero->title ?? '' }} <span
                            class="italic text-gold">{{ $hero->title_highlight ?? '' }}</span>
                    </h1>
                    <p class="mt-8 max-w-xl text-lg md:text-xl text-white/85 leading-relaxed">
                        {{ $hero->description ?? '' }}
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="#" class="btn btn-gold btn-xl">
                            {{ $hero->primary_button_text ?? 'Hubungi Kami' }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#products"
                            class="btn btn-outline-light btn-xl">{{ $hero->secondary_button_text ?? 'Produk' }}</a>
                    </div>
                </div>
            </section>

            <!-- STATS -->
            <section class="border-b border-border bg-background">
                <div class="container-px mx-auto max-w-7xl py-12 grid grid-cols-2 md:grid-cols-4 gap-8">
                    @foreach($stats as $stat)
                        <div class="text-center md:text-left">
                            <div class="font-display text-4xl md:text-5xl font-semibold text-primary">{{ $stat->value }}
                            </div>
                            <div class="mt-1 text-xs uppercase tracking-wider text-muted-foreground">{{ $stat->label }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- ABOUT -->
            <section id="about" class="container-px mx-auto max-w-7xl py-24 grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <span
                        class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $about->badge_text ?? 'About Us' }}</span>
                    <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary leading-tight">
                        {{ $about->title ?? '' }}
                    </h2>
                    <div class="mt-6 text-muted-foreground leading-relaxed space-y-4">
                        {!! nl2br(e($about->content ?? '')) !!}
                    </div>
                    <a href="#contact" class="btn btn-default btn-lg mt-8">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <img src="{{ asset($about->image ?? 'images/farmers.jpg') }}" alt="Petani kopi Indonesia"
                        loading="lazy" width="1600" height="1100"
                        class="rounded-2xl shadow-elegant w-full h-[480px] object-cover">
                    @if($about->experience_value)
                        <div
                            class="absolute -bottom-6 -left-6 hidden md:block bg-cream rounded-xl p-6 shadow-elegant max-w-[220px]">
                            <div class="font-display text-3xl font-semibold text-primary">{{ $about->experience_value }}
                            </div>
                            <div class="text-xs text-muted-foreground mt-1">{{ $about->experience_label }}</div>
                        </div>
                    @endif
                </div>
            </section>

            <!-- FEATURES -->
            <section class="bg-cream">
                <div class="container-px mx-auto max-w-7xl py-24">
                    <div class="text-center max-w-2xl mx-auto">
                        <span
                            class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['features_badge'] ?? 'Mengapa Alam Herbal Nusantara' }}</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            {{ $settings['features_title'] ?? 'Keunggulan yang dipercaya importir dunia' }}
                        </h2>
                    </div>
                    <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($features as $index => $feature)
                            <div
                                class="bg-background rounded-2xl p-7 shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                                <span
                                    class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-emerald text-primary-foreground shadow-soft">
                                    @if($index == 0)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                            <path d="m9 12 2 2 4-4" />
                                        </svg>
                                    @elseif($index == 1)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M7 20h10" />
                                            <path
                                                d="M10 20c5.5-2.5 8-6.4 8-11.7V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v4.3C6 13.6 8.5 17.5 14 20" />
                                            <path d="M12 20V9" />
                                        </svg>
                                    @elseif($index == 2)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                            <path
                                                d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v4c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17" />
                                            <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                            <circle cx="12" cy="12" r="10" />
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="12" cy="8" r="6" />
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                        </svg>
                                    @endif
                                </span>
                                <h3 class="mt-5 font-display text-xl font-semibold text-primary">{{ $feature->title }}</h3>
                                <p class="mt-2 text-sm text-muted-foreground leading-relaxed">{{ $feature->description }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- GALLERY -->
            <section id="gallery" class="py-24 bg-background overflow-hidden">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                        <div class="max-w-2xl">
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['gallery_badge'] ?? 'Galeri Alam Herbal' }}</span>
                            <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                                {{ $settings['gallery_title'] ?? 'Dedikasi di setiap langkah perjalanan.' }}
                            </h2>
                        </div>
                        <p class="text-muted-foreground max-w-sm">
                            {{ $settings['gallery_description'] ?? 'Dari perkebunan hingga pengiriman global, kami memastikan standar tertinggi di setiap proses.' }}
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach($galleries as $item)
                            <div
                                class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-soft hover:shadow-elegant transition-smooth">
                                <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                    class="h-full w-full object-cover group-hover:scale-110 transition-smooth duration-700">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-smooth flex flex-col justify-end p-6">
                                    <h4 class="text-white font-semibold text-lg">{{ $item->title }}</h4>
                                    <p class="text-white/80 text-sm">{{ $item->subtitle }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- TESTIMONIALS -->
            <section id="testimonials" class="py-24 bg-cream border-y border-border">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['testimonials_badge'] ?? 'Testimoni' }}</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            {{ $settings['testimonials_title'] ?? 'Kemitraan yang tumbuh bersama.' }}
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach($testimonials as $testimonial)
                            <div class="bg-background p-8 rounded-2xl shadow-soft border border-border/50 relative">
                                <div class="absolute -top-4 left-8 text-gold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                        fill="currentColor" class="opacity-20">
                                        <path
                                            d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Zm-14 0v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Z" />
                                    </svg>
                                </div>
                                <p class="text-muted-foreground italic leading-relaxed relative z-10">
                                    "{{ $testimonial->content }}"
                                </p>
                                <div class="mt-8 flex items-center gap-4">
                                    <div
                                        class="h-12 w-12 rounded-full bg-emerald-soft flex items-center justify-center font-bold text-primary">
                                        {{ $testimonial->author_initials }}
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-primary">{{ $testimonial->author_name }}</h4>
                                        <p class="text-xs text-muted-foreground">{{ $testimonial->author_role }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- PRODUCTS -->
            <section id="products" class="container-px mx-auto max-w-7xl py-24">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                    <div>
                        <span
                            class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['products_badge'] ?? 'Komoditas Unggulan' }}</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            {{ $settings['products_title'] ?? 'Hasil bumi, dipilih dengan cermat.' }}
                        </h2>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                        <div
                            class="group block rounded-2xl overflow-hidden bg-background border border-border hover:shadow-elegant transition-smooth">
                            <div class="aspect-square overflow-hidden bg-cream">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" loading="lazy"
                                    class="h-full w-full object-cover group-hover:scale-105 transition-smooth">
                            </div>
                            <div class="p-5">
                                <h3 class="font-display text-lg font-semibold text-primary">{{ $product->name }}</h3>
                                <div class="flex items-center justify-between mt-1">
                                    <p class="text-sm text-muted-foreground">{{ $product->category }}</p>
                                    <a href="{{ route('product.detail', $product->slug) }}"
                                        class="text-sm font-semibold text-gold hover:underline">See Detail →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- LOGISTICS/BANNER -->
            <section id="logistics" class="container-px mx-auto max-w-7xl pb-24">
                <div class="relative overflow-hidden rounded-3xl bg-primary">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="p-10 md:p-16 text-primary-foreground">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-gold mb-6">
                                <path
                                    d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1" />
                                <path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.2.5 4.1 1.62 6" />
                                <path d="M12 10V2" />
                                <path d="M12 4h5" />
                                <path d="M12 7h3" />
                            </svg>
                            <h2 class="font-display text-3xl md:text-5xl font-semibold leading-tight">
                                {{ $settings['logistics_title'] ?? 'Siap mengirim ke pelabuhan Anda.' }}
                            </h2>
                            <p class="mt-5 text-primary-foreground/80 leading-relaxed max-w-md">
                                {{ $settings['logistics_description'] ?? 'Tim ekspor kami menangani dokumentasi, fumigasi, dan pengapalan—FOB hingga DDP. Sampaikan kebutuhan Anda, kami siapkan penawaran dalam 24 jam.' }}
                            </p>
                            <a href="#" class="btn btn-gold btn-lg mt-8">
                                {{ $settings['logistics_button_text'] ?? 'Mulai Berdagang' }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="relative h-72 md:h-full min-h-[400px]">
                            <img src="{{ asset($settings['logistics_image'] ?? 'images/logistics.jpg') }}"
                                alt="Kapal kontainer ekspor" loading="lazy"
                                class="absolute inset-0 h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </section>
            <!-- BLOG -->
            <section id="blog" class="py-24 bg-cream border-y border-border">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                        <div class="max-w-2xl">
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['blog_badge'] ?? 'Update Terbaru' }}</span>
                            <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                                {{ $settings['blog_title'] ?? 'Wawasan dari Industri Rempah.' }}
                            </h2>
                        </div>
                        <p class="text-muted-foreground max-w-sm">
                            {{ $settings['blog_description'] ?? 'Berita terbaru, tips pemilihan komoditas, dan cerita dari balik layar perjalanan ekspor kami.' }}
                        </p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        @foreach($blogs as $blog)
                            <div
                                class="group bg-background rounded-2xl overflow-hidden shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                                <div class="aspect-[16/10] overflow-hidden">
                                    <img src="{{ asset($blog->image ?? 'images/blog-placeholder.jpg') }}"
                                        alt="{{ $blog->title }}"
                                        class="h-full w-full object-cover group-hover:scale-105 transition-smooth duration-500">
                                </div>
                                <div class="p-8">
                                    <div class="flex items-center gap-3 mb-4">
                                        <span
                                            class="text-[10px] font-bold uppercase tracking-widest text-gold bg-gold/10 px-2 py-1 rounded">Blog</span>
                                        <span
                                            class="text-xs text-muted-foreground">{{ date('d M Y', strtotime($blog->published_at)) }}</span>
                                    </div>
                                    <h3 class="font-display text-xl font-semibold text-primary mb-3 line-clamp-2">
                                        {{ $blog->title }}
                                    </h3>
                                    <p class="text-sm text-muted-foreground line-clamp-3 mb-6">
                                        {{ $blog->excerpt }}
                                    </p>
                                    <a href="{{ route('blog.detail', $blog->slug) }}"
                                        class="text-sm font-bold text-primary hover:text-gold transition-smooth flex items-center gap-2">
                                        Read More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M5 12h14" />
                                            <path d="m12 5 7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- CONTACT -->
            <section id="contact" class="bg-background py-24 overflow-hidden">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="grid lg:grid-cols-2 gap-16 items-center">
                        <div>
                            <span
                                class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">{{ $settings['contact_badge'] ?? 'Hubungi Kami' }}</span>
                            <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                                {{ $settings['contact_title'] ?? 'Mari diskusikan kemitraan strategis Anda.' }}
                            </h2>
                            <p class="mt-6 text-muted-foreground leading-relaxed">
                                {{ $settings['contact_description'] ?? 'Apakah Anda mencari supplier jangka panjang atau membutuhkan penawaran harga untuk pengiriman tunggal? Tim kami siap memberikan solusi terbaik untuk kebutuhan komoditas Anda.' }}
                            </p>

                            <div class="mt-12 space-y-8">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-cream text-gold shadow-soft">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-primary uppercase tracking-wider">Telepon
                                        </div>
                                        <div class="mt-1 text-muted-foreground">{{ $settings['contact_phone'] ?? '' }}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-cream text-gold shadow-soft">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="20" height="16" x="2" y="4" rx="2" />
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-primary uppercase tracking-wider">Email
                                        </div>
                                        <div class="mt-1 text-muted-foreground">{{ $settings['contact_email'] ?? '' }}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-cream text-gold shadow-soft">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="text-sm font-semibold text-primary uppercase tracking-wider">Office
                                        </div>
                                        <div class="mt-1 text-muted-foreground">{{ $settings['contact_address'] ?? '' }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="bg-cream rounded-3xl p-8 md:p-10 shadow-elegant border border-border/50">
                            <form action="#" method="POST" class="grid gap-6">
                                <div class="grid md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="name" class="text-sm font-semibold text-primary">Name</label>
                                        <input type="text" id="name" name="name" placeholder="John Doe"
                                            class="w-full px-4 py-3 rounded-xl border border-border bg-background focus:ring-2 focus:ring-gold focus:border-gold transition-smooth outline-none">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="email" class="text-sm font-semibold text-primary">Email
                                        </label>
                                        <input type="email" id="email" name="email" placeholder="john@company.com"
                                            class="w-full px-4 py-3 rounded-xl border border-border bg-background focus:ring-2 focus:ring-gold focus:border-gold transition-smooth outline-none">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label for="subject" class="text-sm font-semibold text-primary">Message
                                        Subject</label>
                                    <input type="text" id="subject" name="subject"
                                        placeholder="FOB Price Quotation Request"
                                        class="w-full px-4 py-3 rounded-xl border border-border bg-background focus:ring-2 focus:ring-gold focus:border-gold transition-smooth outline-none">
                                </div>
                                <div class="space-y-2">
                                    <label for="message" class="text-sm font-semibold text-primary">Message</label>
                                    <textarea id="message" name="message" rows="4"
                                        placeholder="Please specify your required volume and shipment destination..."
                                        class="w-full px-4 py-3 rounded-xl border border-border bg-background focus:ring-2 focus:ring-gold focus:border-gold transition-smooth outline-none resize-none"></textarea>
                                </div>
                                <button type="submit" class="btn btn-gold btn-xl w-full justify-center">
                                    Send Message
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m22 2-7 20-4-9-9-4Z" />
                                        <path d="M22 2 11 13" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!-- FOOTER -->
        <footer class="bg-primary text-primary-foreground mt-20">
            <div class="container-px mx-auto max-w-7xl py-16 grid gap-12 md:grid-cols-4">
                <div class="md:col-span-2">
                    <a href="/" class="flex items-center gap-2">
                        <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-white/10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                            </svg>
                        </span>
                        <span class="font-display text-xl font-semibold">
                            Alam Herbal <span class="text-gold">Nusantara</span>
                        </span>
                    </a>
                    <p class="mt-4 max-w-md text-sm text-primary-foreground/70 leading-relaxed">
                        {{ $settings['site_description'] ?? '' }}
                    </p>
                </div>

                <div>
                    <h4 class="font-display text-base font-semibold text-gold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-primary-foreground/80">
                        <li><a href="#about" class="hover:text-gold transition-smooth">About Us</a></li>
                        <li><a href="#products" class="hover:text-gold transition-smooth">Product</a></li>
                        <li><a href="#gallery" class="hover:text-gold transition-smooth">Gallery</a></li>
                        <li><a href="#blog" class="hover:text-gold transition-smooth">Blog</a></li>
                        <li><a href="#contact" class="hover:text-gold transition-smooth">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-display text-base font-semibold text-gold mb-4">Hubungi</h4>
                    <ul class="space-y-3 text-sm text-primary-foreground/80">
                        <li class="flex items-start gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mt-0.5 shrink-0">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                <circle cx="12" cy="10" r="3" />
                            </svg>
                            {{ $settings['contact_address'] ?? '' }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="shrink-0">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            {{ $settings['contact_email'] ?? '' }}
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="shrink-0">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            {{ $settings['contact_phone'] ?? '' }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10">
                <div
                    class="container-px mx-auto max-w-7xl py-6 text-xs text-primary-foreground/60 flex flex-col md:flex-row justify-between gap-2">
                    <p>{{ $settings['footer_copy'] ?? '' }}</p>
                    <p>{{ $settings['footer_cert'] ?? '' }}</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const menuIcon = document.getElementById('menu-icon');
            const closeIcon = document.getElementById('close-icon');

            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>

</html>