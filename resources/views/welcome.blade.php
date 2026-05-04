<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verdania Exports — Ekspor Rempah & Hasil Pertanian Premium</title>
    <meta name="description"
        content="Eksportir tepercaya rempah dan hasil pertanian Indonesia: kopi, kakao, cengkeh, lada, dan pala ke pasar global dengan standar kualitas internasional.">

    <!-- Open Graph -->
    <meta property="og:title" content="Verdania Exports — Ekspor Premium dari Nusantara">
    <meta property="og:description" content="Mitra dagang internasional untuk rempah & hasil pertanian Indonesia.">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/hero-plantation.jpg') }}">

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
                        Verdania <span class="text-gold">Exports</span>
                    </span>
                </a>

                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="text-sm font-medium text-primary font-semibold transition-smooth">Beranda</a>
                    <a href="#"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Tentang</a>
                    <a href="#"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Produk</a>
                    <a href="#"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Layanan</a>
                    <a href="#"
                        class="text-sm font-medium text-muted-foreground hover:text-primary transition-smooth">Kontak</a>
                </nav>

                <div class="hidden md:block">
                    <a href="#" class="btn btn-hero btn-default-size">Minta Penawaran</a>
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
                        class="px-3 py-3 rounded-md text-base font-medium bg-accent text-primary font-semibold">Beranda</a>
                    <a href="#"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Tentang</a>
                    <a href="#"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Produk</a>
                    <a href="#"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Layanan</a>
                    <a href="#"
                        class="px-3 py-3 rounded-md text-base font-medium text-foreground hover:bg-accent transition-smooth">Kontak</a>
                    <a href="#" class="btn btn-hero btn-lg mt-2">Minta Penawaran</a>
                </div>
            </nav>
        </header>

        <main class="flex-1">
            <!-- HERO -->
            <section class="relative overflow-hidden">
                <div class="absolute inset-0">
                    <img src="{{ asset('images/hero-plantation.jpg') }}" alt="Perkebunan rempah Indonesia di pagi hari"
                        class="h-full w-full object-cover" width="1920" height="1280">
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
                        From Nusantara to The World
                    </span>
                    <h1 class="mt-6 font-display text-5xl md:text-7xl lg:text-8xl font-semibold leading-[1] max-w-4xl">
                        Premium Indonesian <span class="italic text-gold">Coffee & Herbal Products</span> for the Global
                        Market.
                    </h1>
                    <p class="mt-8 max-w-xl text-lg md:text-xl text-white/85 leading-relaxed">
                        PT Alam Herbal Nusantara delivers high-quality green coffee beans and natural herbal products
                        sourced directly from Indonesia’s finest regions. From farm to export, we ensure consistency,
                        authenticity, and excellence in every product we supply.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="#" class="btn btn-gold btn-xl">
                            Minta Penawaran
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-xl">Lihat Produk</a>
                    </div>
                </div>
            </section>

            <!-- STATS -->
            <section class="border-b border-border bg-background">
                <div class="container-px mx-auto max-w-7xl py-12 grid grid-cols-2 md:grid-cols-4 gap-8">
                    <div class="text-center md:text-left">
                        <div class="font-display text-4xl md:text-5xl font-semibold text-primary">30+</div>
                        <div class="mt-1 text-xs uppercase tracking-wider text-muted-foreground">Negara Tujuan Ekspor
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <div class="font-display text-4xl md:text-5xl font-semibold text-primary">1.200</div>
                        <div class="mt-1 text-xs uppercase tracking-wider text-muted-foreground">Petani Mitra</div>
                    </div>
                    <div class="text-center md:text-left">
                        <div class="font-display text-4xl md:text-5xl font-semibold text-primary">15thn</div>
                        <div class="mt-1 text-xs uppercase tracking-wider text-muted-foreground">Pengalaman Industri
                        </div>
                    </div>
                    <div class="text-center md:text-left">
                        <div class="font-display text-4xl md:text-5xl font-semibold text-primary">8</div>
                        <div class="mt-1 text-xs uppercase tracking-wider text-muted-foreground">Sertifikasi Global
                        </div>
                    </div>
                </div>
            </section>

            <!-- INTRO -->
            <section class="container-px mx-auto max-w-7xl py-24 grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">About Us</span>
                    <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary leading-tight">
                        Premium Indonesian Coffee & Herbal Products for Global Markets.
                    </h2>
                    <p class="mt-6 text-muted-foreground leading-relaxed">
                        PT Alam Herbal Nusantara is a trusted Indonesian supplier of premium green coffee beans and
                        natural herbal products. We are driven by a commitment to quality, consistency, and long-term
                        partnerships.

                        Working directly with local farmers across West Java, Central Java, East Java, and other
                        regions, we carefully control every stage of production—from planting and harvesting to
                        processing and distribution. This ensures that every product meets international standards and
                        delivers authentic Indonesian flavor.

                        With a strong understanding of the global market, we aim to bring the best of Indonesia’s coffee
                        and herbal heritage to customers worldwide.
                    </p>
                    <a href="#" class="btn btn-default btn-lg mt-8">
                        Contact Us
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>
                <div class="relative">
                    <img src="{{ asset('images/farmers.jpg') }}" alt="Petani kopi Indonesia memegang biji kopi segar"
                        loading="lazy" width="1600" height="1100"
                        class="rounded-2xl shadow-elegant w-full h-[480px] object-cover">
                    <div
                        class="absolute -bottom-6 -left-6 hidden md:block bg-cream rounded-xl p-6 shadow-elegant max-w-[220px]">
                        <div class="font-display text-3xl font-semibold text-primary">100%</div>
                        <div class="text-xs text-muted-foreground mt-1">Direct trade — no intermediaries</div>
                    </div>
                </div>
            </section>

            <!-- FEATURES -->
            <section class="bg-cream">
                <div class="container-px mx-auto max-w-7xl py-24">
                    <div class="text-center max-w-2xl mx-auto">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Mengapa Verdania</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            Keunggulan yang dipercaya importir dunia
                        </h2>
                    </div>
                    <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Feature 1 -->
                        <div
                            class="bg-background rounded-2xl p-7 shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                            <span
                                class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-emerald text-primary-foreground shadow-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                    <path d="m9 12 2 2 4-4" />
                                </svg>
                            </span>
                            <h3 class="mt-5 font-display text-xl font-semibold text-primary">Tersertifikasi</h3>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">ISO 22000, HACCP, Organic EU &
                                USDA untuk jaminan keamanan pangan.</p>
                        </div>
                        <!-- Feature 2 -->
                        <div
                            class="bg-background rounded-2xl p-7 shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                            <span
                                class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-emerald text-primary-foreground shadow-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M7 20h10" />
                                    <path
                                        d="M10 20c5.5-2.5 8-6.4 8-11.7V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v4.3C6 13.6 8.5 17.5 14 20" />
                                    <path d="M12 20V9" />
                                </svg>
                            </span>
                            <h3 class="mt-5 font-display text-xl font-semibold text-primary">Sumber Berkelanjutan</h3>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Bermitra langsung dengan
                                koperasi petani—rantai pasok transparan dan adil.</p>
                        </div>
                        <!-- Feature 3 -->
                        <div
                            class="bg-background rounded-2xl p-7 shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                            <span
                                class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-emerald text-primary-foreground shadow-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M21.54 15H17a2 2 0 0 0-2 2v4.54" />
                                    <path
                                        d="M7 3.34V5a3 3 0 0 0 3 3v0a2 2 0 0 1 2 2v4c0 1.1.9 2 2 2v0a2 2 0 0 0 2-2v0c0-1.1.9-2 2-2h3.17" />
                                    <path d="M11 21.95V18a2 2 0 0 0-2-2v0a2 2 0 0 1-2-2v-1a2 2 0 0 0-2-2H2.05" />
                                    <circle cx="12" cy="12" r="10" />
                                </svg>
                            </span>
                            <h3 class="mt-5 font-display text-xl font-semibold text-primary">Logistik Global</h3>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">FOB, CIF, hingga DDP.
                                Jangkauan ekspor ke Eropa, Amerika, Asia & Timur Tengah.</p>
                        </div>
                        <!-- Feature 4 -->
                        <div
                            class="bg-background rounded-2xl p-7 shadow-soft hover:shadow-elegant transition-smooth border border-border/50">
                            <span
                                class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-emerald text-primary-foreground shadow-soft">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6" />
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11" />
                                </svg>
                            </span>
                            <h3 class="mt-5 font-display text-xl font-semibold text-primary">Quality Control</h3>
                            <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Cupping, sortasi, dan
                                laboratorium internal memastikan konsistensi setiap batch.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- GALLERY -->
            <section id="gallery" class="py-24 bg-background overflow-hidden">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                        <div class="max-w-2xl">
                            <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Galeri
                                Verdania</span>
                            <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                                Dedikasi di setiap langkah perjalanan.
                            </h2>
                        </div>
                        <p class="text-muted-foreground max-w-sm">
                            Dari perkebunan hingga pengiriman global, kami memastikan standar tertinggi di setiap
                            proses.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-soft hover:shadow-elegant transition-smooth">
                            <img src="{{ asset('images/gallery-1.png') }}" alt="Pemanenan kopi"
                                class="h-full w-full object-cover group-hover:scale-110 transition-smooth duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-smooth flex flex-col justify-end p-6">
                                <h4 class="text-white font-semibold text-lg">Pemanenan Selektif</h4>
                                <p class="text-white/80 text-sm">Hanya biji terbaik yang dipilih.</p>
                            </div>
                        </div>
                        <div
                            class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-soft hover:shadow-elegant transition-smooth">
                            <img src="{{ asset('images/gallery-2.png') }}" alt="Quality control"
                                class="h-full w-full object-cover group-hover:scale-110 transition-smooth duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-smooth flex flex-col justify-end p-6">
                                <h4 class="text-white font-semibold text-lg">Quality Control</h4>
                                <p class="text-white/80 text-sm">Inspeksi laboratorium ketat.</p>
                            </div>
                        </div>
                        <div
                            class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-soft hover:shadow-elegant transition-smooth">
                            <img src="{{ asset('images/gallery-3.png') }}" alt="Gudang penyimpanan"
                                class="h-full w-full object-cover group-hover:scale-110 transition-smooth duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-smooth flex flex-col justify-end p-6">
                                <h4 class="text-white font-semibold text-lg">Penyimpanan Terpadu</h4>
                                <p class="text-white/80 text-sm">Menjaga kesegaran komoditas.</p>
                            </div>
                        </div>
                        <div
                            class="group relative overflow-hidden rounded-2xl aspect-[4/5] shadow-soft hover:shadow-elegant transition-smooth">
                            <img src="{{ asset('images/gallery-4.png') }}" alt="Pengiriman internasional"
                                class="h-full w-full object-cover group-hover:scale-110 transition-smooth duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-smooth flex flex-col justify-end p-6">
                                <h4 class="text-white font-semibold text-lg">Ekspor Global</h4>
                                <p class="text-white/80 text-sm">Siap kirim ke seluruh benua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TESTIMONIALS -->
            <section id="testimonials" class="py-24 bg-cream border-y border-border">
                <div class="container-px mx-auto max-w-7xl">
                    <div class="text-center max-w-3xl mx-auto mb-16">
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Testimoni</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            Kemitraan yang tumbuh bersama.
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <!-- Testimonial 1 -->
                        <div class="bg-background p-8 rounded-2xl shadow-soft border border-border/50 relative">
                            <div class="absolute -top-4 left-8 text-gold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="currentColor" class="opacity-20">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Zm-14 0v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Z" />
                                </svg>
                            </div>
                            <p class="text-muted-foreground italic leading-relaxed relative z-10">
                                "Kualitas biji kopi dari Verdania sangat konsisten. Mereka memahami spesifikasi teknis
                                yang kami butuhkan untuk pasar Eropa. Komunikasi mereka sangat profesional dan
                                transparan."
                            </p>
                            <div class="mt-8 flex items-center gap-4">
                                <div
                                    class="h-12 w-12 rounded-full bg-emerald-soft flex items-center justify-center font-bold text-primary">
                                    MW</div>
                                <div>
                                    <h4 class="font-semibold text-primary">Marcus Weber</h4>
                                    <p class="text-xs text-muted-foreground">Green Coffee Buyer — Hamburg, Germany</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="bg-background p-8 rounded-2xl shadow-soft border border-border/50 relative">
                            <div class="absolute -top-4 left-8 text-gold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="currentColor" class="opacity-20">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Zm-14 0v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Z" />
                                </svg>
                            </div>
                            <p class="text-muted-foreground italic leading-relaxed relative z-10">
                                "Verdania bukan sekadar supplier, tapi partner strategis. Produk rempah mereka memiliki
                                profil aroma yang kuat dan murni. Sangat direkomendasikan untuk industri manufaktur
                                pangan."
                            </p>
                            <div class="mt-8 flex items-center gap-4">
                                <div
                                    class="h-12 w-12 rounded-full bg-emerald-soft flex items-center justify-center font-bold text-primary">
                                    LC</div>
                                <div>
                                    <h4 class="font-semibold text-primary">Li Chen</h4>
                                    <p class="text-xs text-muted-foreground">Sourcing Director — Shanghai, China</p>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="bg-background p-8 rounded-2xl shadow-soft border border-border/50 relative">
                            <div class="absolute -top-4 left-8 text-gold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"
                                    fill="currentColor" class="opacity-20">
                                    <path
                                        d="M14.017 21v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Zm-14 0v-7.391c0-5.704 3.748-9.762 9-10.109V5.62c-3.13.31-5.026 2.14-5.32 4.41h5.32v10.97h-9Z" />
                                </svg>
                            </div>
                            <p class="text-muted-foreground italic leading-relaxed relative z-10">
                                "Logistik adalah bagian tersulit dalam impor, tapi tim Verdania menangani dokumentasi
                                dengan sempurna. Barang sampai di pelabuhan kami tepat waktu dan dalam kondisi prima."
                            </p>
                            <div class="mt-8 flex items-center gap-4">
                                <div
                                    class="h-12 w-12 rounded-full bg-emerald-soft flex items-center justify-center font-bold text-primary">
                                    AH</div>
                                <div>
                                    <h4 class="font-semibold text-primary">Ahmed Hassan</h4>
                                    <p class="text-xs text-muted-foreground">Import Manager — Dubai, UAE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- PRODUCTS -->
            <section class="container-px mx-auto max-w-7xl py-24">
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
                    <div>
                        <span class="text-xs font-semibold uppercase tracking-[0.2em] text-gold">Komoditas
                            Unggulan</span>
                        <h2 class="mt-3 font-display text-4xl md:text-5xl font-semibold text-primary">
                            Hasil bumi, dipilih dengan cermat.
                        </h2>
                    </div>
                    <a href="#" class="btn btn-outline btn-lg">
                        Semua Produk
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14" />
                            <path d="m12 5 7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Product 1 -->
                    <a href="#"
                        class="group block rounded-2xl overflow-hidden bg-background border border-border hover:shadow-elegant transition-smooth">
                        <div class="aspect-square overflow-hidden bg-cream">
                            <img src="{{ asset('images/product-coffee.jpg') }}" alt="Kopi Arabika" loading="lazy"
                                class="h-full w-full object-cover group-hover:scale-105 transition-smooth">
                        </div>
                        <div class="p-5">
                            <h3 class="font-display text-lg font-semibold text-primary">Kopi Arabika</h3>
                            <p class="text-sm text-muted-foreground mt-1">Specialty single-origin</p>
                        </div>
                    </a>
                    <!-- Product 2 -->
                    <a href="#"
                        class="group block rounded-2xl overflow-hidden bg-background border border-border hover:shadow-elegant transition-smooth">
                        <div class="aspect-square overflow-hidden bg-cream">
                            <img src="{{ asset('images/product-cocoa.jpg') }}" alt="Kakao Fermentasi" loading="lazy"
                                class="h-full w-full object-cover group-hover:scale-105 transition-smooth">
                        </div>
                        <div class="p-5">
                            <h3 class="font-display text-lg font-semibold text-primary">Kakao Fermentasi</h3>
                            <p class="text-sm text-muted-foreground mt-1">Premium fine flavor</p>
                        </div>
                    </a>
                    <!-- Product 3 -->
                    <a href="#"
                        class="group block rounded-2xl overflow-hidden bg-background border border-border hover:shadow-elegant transition-smooth">
                        <div class="aspect-square overflow-hidden bg-cream">
                            <img src="{{ asset('images/product-cloves.jpg') }}" alt="Cengkeh Utuh" loading="lazy"
                                class="h-full w-full object-cover group-hover:scale-105 transition-smooth">
                        </div>
                        <div class="p-5">
                            <h3 class="font-display text-lg font-semibold text-primary">Cengkeh Utuh</h3>
                            <p class="text-sm text-muted-foreground mt-1">Hand-picked Maluku</p>
                        </div>
                    </a>
                    <!-- Product 4 -->
                    <a href="#"
                        class="group block rounded-2xl overflow-hidden bg-background border border-border hover:shadow-elegant transition-smooth">
                        <div class="aspect-square overflow-hidden bg-cream">
                            <img src="{{ asset('images/product-pepper.jpg') }}" alt="Lada Hitam" loading="lazy"
                                class="h-full w-full object-cover group-hover:scale-105 transition-smooth">
                        </div>
                        <div class="p-5">
                            <h3 class="font-display text-lg font-semibold text-primary">Lada Hitam</h3>
                            <p class="text-sm text-muted-foreground mt-1">Lampung grade A</p>
                        </div>
                    </a>
                </div>
            </section>

            <!-- SPICES BANNER -->
            <section class="container-px mx-auto max-w-7xl pb-24">
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
                                Siap mengirim ke pelabuhan Anda.
                            </h2>
                            <p class="mt-5 text-primary-foreground/80 leading-relaxed max-w-md">
                                Tim ekspor kami menangani dokumentasi, fumigasi, dan pengapalan—FOB hingga DDP.
                                Sampaikan kebutuhan Anda, kami siapkan penawaran dalam 24 jam.
                            </p>
                            <a href="#" class="btn btn-gold btn-lg mt-8">
                                Mulai Berdagang
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                        <div class="relative h-72 md:h-full min-h-[400px]">
                            <img src="{{ asset('images/logistics.jpg') }}" alt="Kapal kontainer ekspor" loading="lazy"
                                class="absolute inset-0 h-full w-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <!-- PALETTE BANNER -->

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
                            Verdania <span class="text-gold">Exports</span>
                        </span>
                    </a>
                    <p class="mt-4 max-w-md text-sm text-primary-foreground/70 leading-relaxed">
                        Mitra terpercaya untuk ekspor hasil pertanian dan rempah-rempah premium dari kepulauan Nusantara
                        ke pasar global.
                    </p>
                </div>

                <div>
                    <h4 class="font-display text-base font-semibold text-gold mb-4">Navigasi</h4>
                    <ul class="space-y-2 text-sm text-primary-foreground/80">
                        <li><a href="#" class="hover:text-gold transition-smooth">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-gold transition-smooth">Produk</a></li>
                        <li><a href="#" class="hover:text-gold transition-smooth">Layanan</a></li>
                        <li><a href="#" class="hover:text-gold transition-smooth">Kontak</a></li>
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
                            Jakarta Selatan, Indonesia
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="shrink-0">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            trade@verdania.co.id
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="shrink-0">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            +62 857-1493-2577
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10">
                <div
                    class="container-px mx-auto max-w-7xl py-6 text-xs text-primary-foreground/60 flex flex-col md:flex-row justify-between gap-2">
                    <p>© {{ date('Y') }} Verdania Exports. Seluruh hak dilindungi.</p>
                    <p>Bersertifikat ISO 22000 · HACCP · Organic EU</p>
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