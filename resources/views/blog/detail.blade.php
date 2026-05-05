<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $blog->title }} — {{ $settings['site_name'] ?? 'Alam Herbal Nusantara' }}</title>
    <meta name="description" content="{{ $blog->excerpt }}">

    <!-- Open Graph -->
    <meta property="og:title" content="{{ $blog->title }} — {{ $settings['site_name'] ?? '' }}">
    <meta property="og:description" content="{{ $blog->excerpt }}">
    <meta property="og:type" content="article">
    <meta property="og:image" content="{{ asset($blog->image) }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .prose h3 {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #1a202c;
            font-size: 1.5rem;
        }

        .prose p {
            margin-bottom: 1.25rem;
            line-height: 1.75;
            color: #4a5568;
        }

        .prose ul {
            list-style-type: disc;
            padding-left: 1.5rem;
            margin-bottom: 1.25rem;
        }

        .prose li {
            margin-bottom: 0.5rem;
        }

        .prose strong {
            color: #1a202c;
            font-weight: 700;
        }
    </style>
</head>

<body class="antialiased bg-background text-foreground">
    <div id="app" class="min-h-screen flex flex-col">

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
                        Verdania <span class="text-gold">Exports</span>
                    </span>
                </a>

                <nav class="hidden md:flex items-center gap-8">
                    <a href="{{ route('welcome') }}"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Home</a>
                    <a href="{{ route('welcome') }}#about"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">About</a>
                    <a href="{{ route('welcome') }}#products"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Product</a>
                    <a href="{{ route('welcome') }}#blog"
                        class="text-sm font-medium text-primary font-semibold transition-smooth underline decoration-gold decoration-2 underline-offset-8">Blog</a>
                    <a href="{{ route('welcome') }}#contact"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Contact</a>
                </nav>

                <div class="hidden md:block">
                    <a href="{{ route('welcome') }}#contact" class="btn btn-hero btn-default-size">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
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
                    <a href="{{ route('welcome') }}"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Home</a>
                    <a href="{{ route('welcome') }}#about"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">About</a>
                    <a href="{{ route('welcome') }}#products"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Product</a>
                    <a href="{{ route('welcome') }}#blog"
                        class="px-3 py-3 rounded-md text-base font-medium bg-accent text-primary font-semibold">Blog</a>
                    <a href="{{ route('welcome') }}#contact"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Contact</a>
                    <a href="{{ route('welcome') }}#contact" class="btn btn-hero btn-lg mt-2">Contact Us</a>
                </div>
            </nav>
        </header>

        <main class="flex-1">
            <article class="py-12 md:py-20 animate-fade-up">
                <div class="container-px mx-auto max-w-3xl">
                    <!-- Breadcrumbs -->
                    <nav
                        class="flex items-center gap-2 text-[10px] md:text-xs font-semibold uppercase tracking-widest text-gold mb-6 md:mb-8">
                        <a href="{{ route('welcome') }}" class="hover:underline">Home</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <a href="{{ route('welcome') }}#blog" class="hover:underline">Blog</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                        <span class="text-muted-foreground truncate">Detail</span>
                    </nav>

                    <h1 class="font-display text-3xl md:text-5xl font-semibold text-primary leading-tight mb-6">
                        {{ $blog->title }}
                    </h1>

                    <div
                        class="flex flex-wrap items-center gap-4 md:gap-6 mb-8 md:mb-12 py-6 border-y border-border/50">
                        <div class="flex items-center gap-3">
                            <div
                                class="h-10 w-10 rounded-full bg-emerald-soft flex items-center justify-center font-bold text-primary text-sm shadow-sm">
                                VE
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-primary">PT Alam Herbal Nusantara</div>
                                <div class="text-[10px] md:text-xs text-muted-foreground">Official Blog</div>
                            </div>
                        </div>
                        <div class="hidden sm:block h-8 w-px bg-border/50"></div>
                        <div
                            class="text-[10px] md:text-xs font-medium text-muted-foreground uppercase tracking-widest flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                            {{ date('d M Y', strtotime($blog->published_at ?? $blog->created_at)) }}
                        </div>
                    </div>

                    @if($blog->image)
                        <div class="mb-8 md:mb-12 rounded-2xl md:rounded-3xl overflow-hidden shadow-elegant">
                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}"
                                class="w-full h-auto object-cover max-h-[300px] md:max-h-[500px]">
                        </div>
                    @endif

                    <div
                        class="prose prose-slate md:prose-lg max-w-none prose-headings:font-display prose-headings:text-primary prose-a:text-gold hover:prose-a:underline">
                        {!! $blog->content !!}
                    </div>

                    <div
                        class="mt-12 md:mt-20 pt-10 border-t border-border flex flex-col sm:flex-row justify-between items-center gap-6">
                        <a href="{{ route('welcome') }}#blog"
                            class="w-full sm:w-auto btn btn-outline btn-lg flex items-center justify-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                            Back to Blog
                        </a>
                        <div class="flex items-center gap-4">
                            <span
                                class="text-[10px] md:text-xs font-semibold text-muted-foreground uppercase tracking-widest">Share:</span>
                            <div class="flex gap-2">
                                <button
                                    class="h-10 w-10 rounded-full border border-border flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-smooth"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg></button>
                                <button
                                    class="h-10 w-10 rounded-full border border-border flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-smooth"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg></button>
                                <button
                                    class="h-10 w-10 rounded-full border border-border flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-smooth"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </main>

        <!-- FOOTER -->
        <footer class="bg-primary text-primary-foreground">
            <div class="container-px mx-auto max-w-7xl py-12 md:py-16 grid gap-10 md:grid-cols-4">
                <div class="md:col-span-2">
                    <a href="/" class="flex items-center gap-2">
                        <span class="font-display text-xl font-semibold">
                            Verdania <span class="text-gold">Exports</span>
                        </span>
                    </a>
                    <p class="mt-4 max-w-md text-sm text-primary-foreground/70 leading-relaxed">
                        {{ $settings['site_description'] ?? '' }}
                    </p>
                </div>
                <div>
                    <h4 class="font-display text-base font-semibold text-gold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-primary-foreground/80">
                        <li><a href="{{ route('welcome') }}#about" class="hover:text-gold transition-smooth">About
                                Us</a></li>
                        <li><a href="{{ route('welcome') }}#products"
                                class="hover:text-gold transition-smooth">Product</a></li>
                        <li><a href="{{ route('welcome') }}#blog" class="hover:text-gold transition-smooth">Blog</a>
                        </li>
                        <li><a href="{{ route('welcome') }}#contact"
                                class="hover:text-gold transition-smooth">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-display text-base font-semibold text-gold mb-4">Hubungi</h4>
                    <p class="text-sm text-primary-foreground/80 leading-relaxed">
                        {{ $settings['contact_address'] ?? '' }}<br>
                        {{ $settings['contact_email'] ?? '' }}<br>
                        {{ $settings['contact_phone'] ?? '' }}
                    </p>
                </div>
            </div>
            <div class="border-t border-white/10">
                <div
                    class="container-px mx-auto max-w-7xl py-6 text-center md:text-left text-[10px] md:text-xs text-primary-foreground/60">
                    <p>{{ $settings['footer_copy'] ?? '' }}</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    </script>
</body>

</html>