<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $product->name }} — {{ $settings['site_name'] ?? 'Alam Herbal Nusantaraports' }}</title>

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

    <!-- HEADER (Same as welcome) -->
    <header x-data="{ scrolled: true, mobileMenu: false }"
        :class="{ 'bg-white/90 backdrop-blur-md py-4 shadow-soft': scrolled, 'bg-transparent py-6': !scrolled }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container-px mx-auto max-w-7xl">
            <nav class="flex items-center justify-between">
                <a href="{{ route('welcome') }}" class="flex items-center gap-3 group">
                    <span
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary shadow-soft group-hover:scale-110 transition-transform duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-white">
                            <path
                                d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                        </svg>
                    </span>
                    <span
                        class="font-display text-xl font-bold tracking-tight text-primary">{{ $settings['site_name'] ?? 'Verdania' }}</span>
                </a>

                <div class="hidden md:flex items-center gap-10">
                    <a href="{{ route('welcome') }}#about"
                        class="text-sm font-medium hover:text-gold transition-colors">Tentang Kami</a>
                    <a href="{{ route('welcome') }}#products"
                        class="text-sm font-medium hover:text-gold transition-colors text-gold">Produk</a>
                    <a href="{{ route('welcome') }}#gallery"
                        class="text-sm font-medium hover:text-gold transition-colors">Galeri</a>
                    <a href="{{ route('welcome') }}#contact"
                        class="px-6 py-2.5 rounded-full bg-primary text-white text-sm font-bold hover:bg-primary/90 transition-all shadow-soft">Hubungi
                        Kami</a>
                </div>

                <button @click="mobileMenu = !mobileMenu" class="md:hidden text-primary">
                    <svg x-show="!mobileMenu" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="4" x2="20" y1="12" y2="12" />
                        <line x1="4" x2="20" y1="6" y2="6" />
                        <line x1="4" x2="20" y1="18" y2="18" />
                    </svg>
                    <svg x-show="mobileMenu" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenu" x-transition class="md:hidden bg-white border-b border-border p-6 space-y-4">
            <a href="{{ route('welcome') }}#about" @click="mobileMenu = false" class="block font-medium">Tentang
                Kami</a>
            <a href="{{ route('welcome') }}#products" @click="mobileMenu = false"
                class="block font-medium text-gold">Produk</a>
            <a href="{{ route('welcome') }}#gallery" @click="mobileMenu = false" class="block font-medium">Galeri</a>
            <a href="{{ route('welcome') }}#contact" @click="mobileMenu = false"
                class="block font-bold text-primary border-t pt-4">Hubungi Kami</a>
        </div>
    </header>

    <main class="pt-32 pb-24 min-h-screen">
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
                        <a href="{{ route('welcome') }}#contact"
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
    <footer class="bg-primary text-primary-foreground pt-24 pb-12 overflow-hidden">
        <div class="container-px mx-auto max-w-7xl">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8 pb-16 border-b border-primary-foreground/10">
                <div class="lg:col-span-1">
                    <a href="{{ route('welcome') }}" class="flex items-center gap-3">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gold shadow-soft">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-primary">
                                <path
                                    d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12" />
                            </svg>
                        </span>
                        <span
                            class="font-display text-xl font-bold tracking-tight text-primary-foreground">{{ $settings['site_name'] ?? 'Verdania' }}</span>
                    </a>
                    <p class="mt-6 text-primary-foreground/60 leading-relaxed max-w-xs">
                        {{ $settings['site_description'] ?? 'Eksportir hasil bumi terbaik dari Nusantara.' }}
                    </p>
                </div>

                <div>
                    <h4 class="font-display font-bold text-lg mb-6">Tautan Cepat</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('welcome') }}#about"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Tentang Kami</a>
                        </li>
                        <li><a href="{{ route('welcome') }}#products"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Produk</a></li>
                        <li><a href="{{ route('welcome') }}#gallery"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Galeri</a></li>
                        <li><a href="{{ route('welcome') }}#contact"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Hubungi Kami</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-display font-bold text-lg mb-6">Komoditas</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('welcome') }}#products"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Hasil Bumi</a></li>
                        <li><a href="{{ route('welcome') }}#products"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Rempah-rempah</a>
                        </li>
                        <li><a href="{{ route('welcome') }}#products"
                                class="text-primary-foreground/60 hover:text-gold transition-colors">Biji Kopi</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-display font-bold text-lg mb-6">Kontak</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3 text-primary-foreground/60">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-gold">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            {{ $settings['contact_email'] ?? 'trade@verdania.co.id' }}
                        </li>
                        <li class="flex items-center gap-3 text-primary-foreground/60">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="text-gold">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            {{ $settings['contact_phone'] ?? '+62 857-1493-2577' }}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-12 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-primary-foreground/40 text-sm">
                    {{ $settings['footer_copy'] ?? '© 2024 Alam Herbal Nusantaraports. Seluruh hak cipta dilindungi.' }}
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-primary-foreground/40 hover:text-gold transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg></a>
                    <a href="#" class="text-primary-foreground/40 hover:text-gold transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg></a>
                    <a href="#" class="text-primary-foreground/40 hover:text-gold transition-colors"><svg
                            xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>