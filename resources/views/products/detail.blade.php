<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} — {{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}</title>
    <meta name="description"
        content="{{ $product->description ?? 'Jual ' . $product->name . ' kualitas premium dari Indonesia.' }}">
    <meta name="keywords"
        content="{{ $product->name }}, {{ $product->category }}, supplier {{ $product->name }}, ekspor rempah">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="product">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $product->name }} — {{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}">
    <meta property="og:description" content="{{ $product->description ?? '' }}">
    <meta property="og:image" content="{{ asset($product->image) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title"
        content="{{ $product->name }} — {{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}">
    <meta property="twitter:description" content="{{ $product->description ?? '' }}">
    <meta property="twitter:image" content="{{ asset($product->image) }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "Organization",
      "name": "{{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('images/logo.png') }}",
      "contactPoint": {
        "@@type": "ContactPoint",
        "telephone": "{{ $settings['contact_phone'] ?? '+62 857-1493-2577' }}",
        "contactType": "customer service"
      }
    }
    </script>

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@500;600;700&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0F2C24',
                        gold: '#C5A059',
                        cream: '#FDFCF7',
                        background: '#FFFFFF',
                        border: '#E5E7EB',
                        'primary-foreground': '#FDFCF7',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    boxShadow: {
                        soft: '0 4px 20px rgba(0,0,0,0.05)',
                        elegant: '0 20px 40px rgba(15, 44, 36, 0.08)',
                    }
                }
            }
        }
    </script>
    <style>
        .container-px {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        @media (min-width: 768px) {
            .container-px {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }
    </style>
</head>

<body class="bg-background text-primary antialiased font-sans">

    <!-- HEADER -->
    <header class="sticky top-0 z-50 w-full border-b border-border/60 bg-background/80 backdrop-blur-lg">
        <div class="container-px mx-auto flex h-16 max-w-7xl items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <img src="{{ asset('images/logo.png') }}"
                    alt="Logo {{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}" class="h-16 md:h-24 w-auto mt-2">
                <span class="font-display text-xl font-semibold text-primary">
                    Alam Herbal <span class="text-gold">Nusantara</span>
                </span>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="{{ route('welcome') }}"
                    class="text-sm font-medium text-primary font-semibold transition-smooth">Home</a>
                <a href="{{ route('welcome') }}#about"
                    class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">About</a>
                <a href="{{ route('welcome') }}#products"
                    class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Product</a>
                <a href="{{ route('welcome') }}#gallery"
                    class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Gallery</a>
                <a href="{{ route('welcome') }}#blog"
                    class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Blog</a>
                <a href="{{ route('welcome') }}#contact"
                    class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Contact</a>
            </nav>

            <div class="hidden md:block">
                <a href="https://wa.me/6285714932577" target="_blank" rel="noopener noreferrer"
                    class="btn btn-hero btn-default-size">{{ $hero->primary_button_text ?? 'Hubungi Kami' }}</a>
            </div>

            <button id="menu-toggle" aria-label="Toggle menu" class="md:hidden p-2 text-primary">
                <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" x2="20" y1="12" y2="12" />
                    <line x1="4" x2="20" y1="6" y2="6" />
                    <line x1="4" x2="20" y1="18" y2="18" />
                </svg>
                <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="hidden">
                    <path d="M18 6 6 18" />
                    <path d="m6 6 12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <nav id="mobile-menu" class="hidden md:hidden border-t border-border bg-background">
            <div class="container-px mx-auto py-4 flex flex-col gap-1">
                <a href="{{ route('welcome') }}"
                    class="px-3 py-3 rounded-md text-base font-medium bg-accent text-primary font-semibold">Home</a>
                <a href="{{ route('welcome') }}#about"
                    class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">About</a>
                <a href="{{ route('welcome') }}#products"
                    class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Product</a>
                <a href="{{ route('welcome') }}#gallery"
                    class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Gallery</a>
                <a href="{{ route('welcome') }}#blog"
                    class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Blog</a>
                <a href="{{ route('welcome') }}#contact"
                    class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Contact</a>
                <a href="https://wa.me/6285714932577" target="_blank" rel="noopener noreferrer"
                    class="btn btn-hero btn-lg mt-2">{{ $hero->primary_button_text ?? 'Contact Us' }}</a>
            </div>
        </nav>
    </header>

    <main class="pt-12 pb-24 min-h-screen">
        <div class="container-px mx-auto max-w-7xl">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-sm text-muted-foreground mb-8">
                <a href="{{ route('welcome') }}" class="hover:text-gold">Home</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                <a href="{{ route('welcome') }}#products" class="hover:text-gold">Produk</a>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
                <span class="text-primary font-medium">{{ $product->name }}</span>
            </nav>

            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Product Image -->
                <div class="relative group">
                    <div
                        class="absolute inset-0 bg-gold/5 rounded-[2rem] translate-x-4 translate-y-4 -z-10 transition-transform group-hover:translate-x-6 group-hover:translate-y-6">
                    </div>
                    <div
                        class="aspect-square rounded-[2rem] overflow-hidden bg-cream border border-border shadow-soft relative">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}"
                            class="h-full w-full object-cover">
                    </div>
                </div>

                <!-- Product Content -->
                <div class="flex flex-col">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-cream text-gold text-xs font-bold uppercase tracking-widest mb-6 w-fit border border-gold/10">
                        {{ $product->category }}
                    </span>
                    <h1 class="font-display text-4xl md:text-5xl font-bold mb-6 text-primary leading-tight">
                        {{ $product->name }}
                    </h1>

                    <div class="prose prose-primary max-w-none">
                        <p class="text-lg text-muted-foreground leading-relaxed mb-10">
                            {{ $product->description ?? 'Kami menghadirkan kualitas terbaik untuk kebutuhan komoditas Anda. Diproses dengan standar internasional untuk menjaga keaslian dan mutu produk.' }}
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-10">
                        <div
                            class="bg-cream p-5 rounded-2xl border border-border hover:border-gold/30 transition-colors">
                            <span
                                class="text-xs uppercase tracking-wider text-muted-foreground block mb-1 font-semibold">Origin</span>
                            <span
                                class="font-display text-lg font-bold text-primary">{{ $product->origin ?? 'Indonesia' }}</span>
                        </div>
                        <div
                            class="bg-cream p-5 rounded-2xl border border-border hover:border-gold/30 transition-colors">
                            <span
                                class="text-xs uppercase tracking-wider text-muted-foreground block mb-1 font-semibold">Packaging</span>
                            <span
                                class="font-display text-lg font-bold text-primary">{{ $product->packaging ?? 'Custom' }}</span>
                        </div>
                    </div>

                    @if($product->specifications)
                        <div class="mb-10">
                            <h3 class="font-display text-xl font-bold mb-4 flex items-center gap-2">
                                <span class="h-1 w-6 bg-gold rounded-full"></span>
                                Specifications
                            </h3>
                            <div
                                class="bg-white rounded-2xl border border-border p-6 whitespace-pre-line text-muted-foreground leading-relaxed shadow-sm">
                                {{ $product->specifications }}
                            </div>
                        </div>
                    @endif

                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <a href="https://wa.me/6285714932577"
                            class="flex-1 inline-flex items-center justify-center gap-3 px-8 py-4 rounded-full bg-primary text-white font-bold hover:bg-primary/90 transition-all shadow-elegant group">
                            Inquiry Now
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="group-hover:translate-x-1 transition-transform duration-300">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER (Same as welcome) -->
    <footer class="bg-primary text-primary-foreground mt-20">
        <div class="container-px mx-auto max-w-7xl py-16 grid gap-12 md:grid-cols-4">
            <div class="md:col-span-2">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 md:h-24 w-auto">
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
                    <li><a href="{{ route('welcome') }}#about" class="hover:text-gold transition-smooth">About Us</a></li>
                    <li><a href="{{ route('welcome') }}#products" class="hover:text-gold transition-smooth">Product</a></li>
                    <li><a href="{{ route('welcome') }}#gallery" class="hover:text-gold transition-smooth">Gallery</a></li>
                    <li><a href="{{ route('welcome') }}#blog" class="hover:text-gold transition-smooth">Blog</a></li>
                    <li><a href="{{ route('welcome') }}#contact" class="hover:text-gold transition-smooth">Contact</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-display text-base font-semibold text-gold mb-4">Hubungi</h4>
                <ul class="space-y-3 text-sm text-primary-foreground/80">
                    <li class="flex items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="mt-0.5 shrink-0">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        {{ $settings['contact_address'] ?? '' }}
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="shrink-0">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        {{ $settings['contact_email'] ?? '' }}
                    </li>
                    <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="shrink-0">
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

</body>

</html>