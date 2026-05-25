<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CourseHub® — Platform Belajar Radikal Tanpa Teori Basi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-[#F4F4F5] text-black font-sans antialiased overflow-x-hidden">

    <div
        class="bg-black text-white text-center py-3 px-4 font-black text-xs uppercase tracking-widest border-b-4 border-black flex items-center justify-center gap-2">
        <span class="bg-red-500 text-black px-1.5 py-0.5 animate-pulse border border-white">HOT RELEASE</span>
        <span>BATCH MEI 2026 KEMBALI DIBUKA. SISA 14 SLOT KELAS BACKEND!</span>
    </div>

    <nav x-data="{ mobileMenuOpen: false }"
        class="sticky top-0 z-50 bg-white border-b-4 border-black text-black shadow-[0_4px_0_0_rgba(0,0,0,1)]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">

                <div class="flex-shrink-0">
                    <a href="/"
                        class="bg-lime-400 text-black font-black text-2xl uppercase tracking-tighter px-4 py-1.5 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-[2px] hover:translate-y-[2px] hover:shadow-none transition-all inline-block">
                        COURSE<span class="bg-black text-lime-400 px-1 ml-1">HUB®</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8 font-black uppercase text-xs tracking-wider">
                    <a href="#features"
                        class="hover:bg-yellow-300 px-2 py-1 border border-transparent hover:border-black transition-all">//
                        FEATURES</a>
                    <a href="#kurikulum"
                        class="hover:bg-cyan-300 px-2 py-1 border border-transparent hover:border-black transition-all">//
                        KELAS</a>
                    <a href="#bukti"
                        class="hover:bg-red-300 px-2 py-1 border border-transparent hover:border-black transition-all">//
                        ALUMNI</a>
                    <a href="#pricing"
                        class="hover:bg-lime-300 px-2 py-1 border border-transparent hover:border-black transition-all">//
                        INVESTASI</a>
                </div>

                <div class="hidden md:flex items-center space-x-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ route('dashboard') }}"
                                class="font-black uppercase text-xs border-3 border-black bg-yellow-300 px-4 py-2 shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-200 transition-all">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="font-bold uppercase text-xs tracking-wide hover:underline">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="bg-black text-white font-black uppercase text-xs px-5 py-3 border-2 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-400 hover:text-black hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] transition-all">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>

                <div class="flex md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button"
                        class="inline-flex items-center justify-center p-2.5 border-3 border-black bg-white text-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-gray-100 focus:outline-none transition-all">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': mobileMenuOpen, 'inline-flex': !mobileMenuOpen }"
                                class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !mobileMenuOpen, 'inline-flex': mobileMenuOpen }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobileMenuOpen" x-transition class="md:hidden border-t-4 border-black bg-white">
            <div class="px-4 pt-4 pb-6 space-y-3 font-black uppercase text-sm tracking-wide">
                <a href="#features" @click="mobileMenuOpen = false"
                    class="block p-3 border-3 border-black bg-gray-50 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">Features</a>
                <a href="#kurikulum" @click="mobileMenuOpen = false"
                    class="block p-3 border-3 border-black bg-gray-50 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">Kelas
                    Blueprint</a>
                <a href="#bukti" @click="mobileMenuOpen = false"
                    class="block p-3 border-3 border-black bg-gray-50 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">Alumni
                    Sukses</a>
                <a href="#pricing" @click="mobileMenuOpen = false"
                    class="block p-3 border-3 border-black bg-gray-50 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">Investasi</a>

                <div class="border-t-2 border-dashed border-black my-4 pt-4 space-y-2">
                    <a href="{{ route('login') }}"
                        class="block text-center p-3 border-2 border-black font-bold text-xs">MASUK KE PANEL</a>
                    <a href="{{ route('register') }}"
                        class="block text-center p-3 border-2 border-black bg-lime-400 font-black text-xs shadow-[3px_3px_0px_0px_rgba(0,0,0,1)]">DAFTAR
                        REVOLUSI</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-7 space-y-6 text-left">
                <span
                    class="inline-block bg-cyan-300 text-black font-black text-xs uppercase tracking-widest px-3 py-1.5 border-3 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)]">
                    ⚡ STOP MAKSIMALKAN TEORI, SAATNYA EKSEKUSI
                </span>
                <h1
                    class="text-4xl sm:text-6xl lg:text-7xl font-black uppercase tracking-tighter leading-[0.9] text-black">
                    KULIAH MAHAL SUDAH BASI,<br>
                    <span
                        class="bg-yellow-300 border-4 border-black px-4 my-3 inline-block shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] transform -rotate-1">KODING
                        AWAM DI-ELIMINASI.</span><br>
                    SAATNYA BERTARUNG!
                </h1>
                <p
                    class="text-base sm:text-lg font-bold leading-relaxed text-gray-900 max-w-xl border-l-8 border-black bg-white p-5 border-4 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)]">
                    Industri teknologi global tidak peduli kertas gelar formalitas Anda. Kami memotong semua sampah
                    silabus akademis untuk melatih <span class="bg-lime-300 px-1">Raw Production Skill</span> Anda.
                    Bangun portofolio tangguh, kuasai rantai pasok software modern.
                </p>
                <div class="pt-2">
                    <a href="#kurikulum" class="group relative inline-block w-full sm:w-auto">
                        <span
                            class="absolute top-1.5 left-1.5 w-full h-full bg-black border-3 border-black transition-transform group-hover:translate-x-0 group-hover:translate-y-0"></span>
                        <span
                            class="relative block text-center bg-lime-400 text-black font-black uppercase text-sm md:text-base tracking-wider px-8 py-4 border-3 border-black transform translate-x-[-4px] translate-y-[-4px] transition-all group-hover:translate-x-0 group-hover:translate-y-0">
                            AMBIL ALIH KENDALI KARIRMU ⚡
                        </span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 w-full relative">
                <div
                    class="relative w-full aspect-[4/5] border-4 border-black bg-white shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=1000"
                        alt="Production Devs Working"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500">
                    <div
                        class="absolute bottom-4 left-4 right-4 bg-black text-white p-4 font-bold border-2 border-white text-xs uppercase tracking-wide text-center">
                        [ SYSTEM LOG ] LARAVEL 13 // TAILWIND 4 // DOCKER
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="border-t-4 border-b-4 border-black bg-white py-12 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-xs font-black uppercase tracking-widest mb-6 text-gray-500">// EKOSISTEM AGRA ALUMNI BERKARIR
            </p>
            <div
                class="grid grid-cols-2 md:grid-cols-4 gap-6 items-center justify-center font-black text-lg sm:text-xl tracking-widest uppercase text-gray-700">
                <div class="px-4 py-3 border-2 border-dashed border-black bg-gray-50 text-center">GOJEK_TECH</div>
                <div class="px-4 py-3 border-2 border-dashed border-black bg-gray-50 text-center">TOKOPEDIA</div>
                <div class="px-4 py-3 border-2 border-dashed border-black bg-gray-50 text-center">SHOPEE_SG</div>
                <div class="px-4 py-3 border-2 border-dashed border-black bg-gray-50 text-center">VERCEL_VND</div>
            </div>
        </div>
    </section>

    <section id="features" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <span class="text-xs font-black uppercase text-gray-400 tracking-wider">// ARSITEKTUR INFRASTRUKTUR
                BELAJAR</span>
            <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tighter">METODOLOGI KELAS BRUTAL KAMI</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="border-4 border-black bg-white p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:scale-[1.02] transition-all duration-300 space-y-4">
                <div
                    class="w-12 h-12 bg-lime-400 border-3 border-black flex items-center justify-center font-black text-base shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    01</div>
                <h3 class="text-xl font-black uppercase tracking-tight">Silabus Tanpa Basi</h3>
                <p class="text-sm font-bold text-gray-700 leading-relaxed">Hapus semua materi pengantar bertele-tele.
                    Kami langsung melompat ke implementasi arsitektur nyata standar korporat dunia.</p>
            </div>
            <div
                class="border-4 border-black bg-white p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:scale-[1.02] transition-all duration-300 space-y-4">
                <div
                    class="w-12 h-12 bg-cyan-300 border-3 border-black flex items-center justify-center font-black text-base shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    02</div>
                <h3 class="text-xl font-black uppercase tracking-tight">Code-Review Militan</h3>
                <p class="text-sm font-bold text-gray-700 leading-relaxed">Setiap baris kode Anda akan diinspeksi kasar
                    oleh praktisi industri senior untuk memastikan optimasi query maksimal.</p>
            </div>
            <div
                class="border-4 border-black bg-white p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] hover:scale-[1.02] transition-all duration-300 space-y-4">
                <div
                    class="w-12 h-12 bg-yellow-300 border-3 border-black flex items-center justify-center font-black text-base shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">
                    03</div>
                <h3 class="text-xl font-black uppercase tracking-tight">Engine Portfolio Aktif</h3>
                <p class="text-sm font-bold text-gray-700 leading-relaxed">Keluar dari ekosistem kami dengan minimal 4
                    aplikasi berskala besar yang siap diuji beban performanya di depan HRD.</p>
            </div>
        </div>
    </section>

    <section id="benefits" class="bg-white border-t-4 border-b-4 border-black py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-20">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                <div class="lg:col-span-5 order-last lg:order-first">
                    <div
                        class="border-4 border-black bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] aspect-video overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1541462608141-d15960ad436c?q=80&w=600"
                            alt="Benefit Graphic 1" class="w-full h-full object-cover grayscale">
                    </div>
                </div>
                <div class="lg:col-span-7 space-y-4">
                    <span
                        class="bg-yellow-300 text-black font-black text-xs uppercase px-2 py-1 border-2 border-black inline-block shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">MANIFESTO
                        BENEFIT // 01</span>
                    <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight">Dunia Menunggu Hasil Eksekusi
                        Portofoliomu</h2>
                    <p class="text-sm sm:text-base font-bold text-gray-700 leading-relaxed">
                        Sertifikat pelatihan biasa tidak akan menyelamatkan Anda dari tes koding penyaringan kerja yang
                        ketat. Kami membangun insting penyelesaian masalah secara radikal agar Anda tidak panik saat
                        sistem skala jutaan user mengalami kegagalan transmisi data.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <section id="kurikulum" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div
            class="flex flex-col sm:flex-row justify-between items-start sm:items-end mb-16 border-b-4 border-black pb-6 gap-4">
            <div>
                <span class="text-xs font-black uppercase text-gray-500 tracking-wider">// ETALASE BLUEPRINT
                    OPERASIONAL KELAS</span>
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tighter">BLUEPRINT SIAP DI-AKUISISI</h2>
            </div>
            <div
                class="bg-black text-lime-400 px-4 py-2 font-black text-xs uppercase tracking-widest border-2 border-black">
                TOTAL 3 MANIFES AKTIF
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div
                class="border-4 border-black bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div>
                    <div class="aspect-video w-full border-b-4 border-black bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?q=80&w=600"
                            alt="UIUX Design Course" class="w-full h-full object-cover grayscale">
                        <span
                            class="absolute top-3 left-3 bg-cyan-300 text-black font-black px-3 py-1 border-2 border-black text-xs uppercase shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">INTERFACE
                            ARC</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between items-center text-xs font-black">
                            <span class="text-lime-700 bg-lime-100 border border-black px-2 py-0.5">OPEN BATCH</span>
                            <span>⭐ 4.9 / 5.0</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase tracking-tight leading-none">Brutalist UI/UX:
                            Mengacak-acak Estetika Digital</h3>
                        <p class="text-xs sm:text-sm font-bold text-gray-700 leading-relaxed">Hancurkan pola tata letak
                            kaku korporat yang monoton. Pelajari teknik komposisi asimetris, penataan tipografi taktis
                            ekstrem, dan interaksi web fungsional.</p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t-2 border-dashed border-black mt-4">
                    <div class="font-black text-lg bg-yellow-200 px-2 border border-black">IDR 499K</div>
                    <a href="{{ route('register') }}"
                        class="bg-black text-white font-black text-xs uppercase px-4 py-2.5 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-400 hover:text-black transition-all">GABUNG
                        KELAS →</a>
                </div>
            </div>

            <div
                class="border-4 border-black bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div>
                    <div class="aspect-video w-full border-b-4 border-black bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=600"
                            alt="Backend Dev Course" class="w-full h-full object-cover grayscale">
                        <span
                            class="absolute top-3 left-3 bg-yellow-300 text-black font-black px-3 py-1 border-2 border-black text-xs uppercase shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">BACKEND
                            CORES</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between items-center text-xs font-black">
                            <span class="text-red-700 bg-red-100 border border-black px-2 py-0.5">SISA 3 SLOT</span>
                            <span>⭐ 5.0 / 5.0</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase tracking-tight leading-none">Laravel & Docker:
                            No-Bullshit Architecture</h3>
                        <p class="text-xs sm:text-sm font-bold text-gray-700 leading-relaxed">Kuasai penanganan
                            konkurensi database berjuta-juta baris, optimasi query berkecepatan tinggi, serta sistem
                            kontainerisasi otomatis untuk keandalan server.</p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t-2 border-dashed border-black mt-4">
                    <div class="font-black text-lg bg-yellow-200 px-2 border border-black">IDR 799K</div>
                    <a href="{{ route('register') }}"
                        class="bg-black text-white font-black text-xs uppercase px-4 py-2.5 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-400 hover:text-black transition-all">GABUNG
                        KELAS →</a>
                </div>
            </div>

            <div
                class="border-4 border-black bg-white shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div>
                    <div class="aspect-video w-full border-b-4 border-black bg-gray-200 overflow-hidden relative">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?q=80&w=600"
                            alt="Cyber Security Course" class="w-full h-full object-cover grayscale">
                        <span
                            class="absolute top-3 left-3 bg-red-400 text-white font-black px-3 py-1 border-2 border-black text-xs uppercase shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">CYBER
                            SYSTEM</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="flex justify-between items-center text-xs font-black">
                            <span class="text-blue-700 bg-blue-100 border border-black px-2 py-0.5">BARU RILIS</span>
                            <span>⭐ 4.8 / 5.0</span>
                        </div>
                        <h3 class="text-2xl font-black uppercase tracking-tight leading-none">Defensive Hacking:
                            Benteng Lapisan Kode</h3>
                        <p class="text-xs sm:text-sm font-bold text-gray-700 leading-relaxed">Berpikir layaknya
                            penyerang siber. Deteksi, audit, dan hancurkan celah kerentanan keamanan SQL-injection dan
                            XSS di aplikasi internal Anda sendiri.</p>
                    </div>
                </div>
                <div class="p-6 pt-0 flex items-center justify-between border-t-2 border-dashed border-black mt-4">
                    <div class="font-black text-lg bg-yellow-200 px-2 border border-black">IDR 649K</div>
                    <a href="{{ route('register') }}"
                        class="bg-black text-white font-black text-xs uppercase px-4 py-2.5 border-2 border-black shadow-[3px_3px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-400 hover:text-black transition-all">GABUNG
                        KELAS →</a>
                </div>
            </div>

        </div>
    </section>

    <section class="bg-black text-white py-16 border-t-4 border-b-4 border-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center font-black uppercase">
                <div class="border-b-4 md:border-b-0 md:border-r-4 border-dashed border-gray-800 pb-6 md:pb-0 md:pr-4">
                    <div class="text-5xl text-lime-400 tracking-tighter">1,280+</div>
                    <div class="text-xs text-gray-400 mt-2">ENGINEER BERHASIL DI-DEPLOY</div>
                </div>
                <div class="border-b-4 md:border-b-0 md:border-r-4 border-dashed border-gray-800 pb-6 md:pb-0 md:pr-4">
                    <div class="text-5xl text-cyan-300 tracking-tighter">94.2%</div>
                    <div class="text-xs text-gray-400 mt-2">TEMBUS AGUTASI REMOTE GLOBAL</div>
                </div>
                <div>
                    <div class="text-5xl text-yellow-300 tracking-tighter">14.6 Miliar</div>
                    <div class="text-xs text-gray-400 mt-2">AKUMULASI INCOME AGREGAT ALUMNI</div>
                </div>
            </div>
        </div>
    </section>

    <section id="bukti" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <span class="text-xs font-black uppercase text-gray-400 tracking-wider">// LAPORAN LANGSUNG DARI GARIS
                DEPAN</span>
            <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tighter">ALUMNI KITA YANG BERHASIL MENANG
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div
                class="border-4 border-black bg-white p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div class="space-y-4">
                    <div class="text-4xl font-serif text-lime-500 font-black">“</div>
                    <p class="font-bold text-sm sm:text-base italic text-gray-900 leading-relaxed">
                        "Ikut bootcamp konvensional sana-sini cuma diajarkan slide PPT tebal membosankan. Di CourseHub
                        gila, minggu pertama langsung dipaksa selesaikan server crash. Sekarang saya tembus remote kerja
                        di agensi US!"
                    </p>
                </div>
                <div class="flex items-center gap-4 mt-8 border-t-2 border-black pt-4">
                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150&h=150&fit=crop"
                        alt="Alumni 1" class="w-12 h-12 rounded-full border-2 border-black object-cover grayscale">
                    <div>
                        <div class="font-black text-xs uppercase tracking-tight">Rayhan Siregar</div>
                        <div
                            class="text-[10px] bg-cyan-200 text-black border border-black px-1.5 font-bold uppercase inline-block">
                            Backend Dev @ Vercel Contractor</div>
                    </div>
                </div>
            </div>

            <div
                class="border-4 border-black bg-lime-300 p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div class="space-y-4">
                    <div class="text-4xl font-serif text-black font-black">“</div>
                    <p class="font-black text-sm sm:text-base text-black leading-relaxed">
                        "Portfolio asimetris dari kelas UI/UX sempat dicibir kuno sama dosen kampus, tapi malah langsung
                        dilirik startup Singapura waktu iseng dipajang di LinkedIn. Ijazah resmi kalah telak sama isi
                        repo github."
                    </p>
                </div>
                <div class="flex items-center gap-4 mt-8 border-t-2 border-black pt-4">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=150&h=150&fit=crop"
                        alt="Alumni 2" class="w-12 h-12 rounded-full border-2 border-black object-cover grayscale">
                    <div>
                        <div class="font-black text-xs uppercase tracking-tight">Amanda Putri</div>
                        <div
                            class="text-[10px] bg-black text-white border border-black px-1.5 font-bold uppercase inline-block">
                            Lead Interaction @ Decacorn SG</div>
                    </div>
                </div>
            </div>

            <div
                class="border-4 border-black bg-white p-6 sm:p-8 shadow-[6px_6px_0px_0px_rgba(0,0,0,1)] flex flex-col justify-between hover:scale-[1.02] transition-all duration-300">
                <div class="space-y-4">
                    <div class="text-4xl font-serif text-lime-500 font-black">“</div>
                    <p class="font-bold text-sm sm:text-base italic text-gray-900 leading-relaxed">
                        "Modul optimasi indexing database di kelas advance-nya gila banget tanpa sensor. Teori DB Lock
                        yang diajarkan langsung memecahkan bottleneck operasional aplikasi internal perusahaan tempat
                        saya bekerja."
                    </p>
                </div>
                <div class="flex items-center gap-4 mt-8 border-t-2 border-black pt-4">
                    <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?q=80&w=150&h=150&fit=crop"
                        alt="Alumni 3" class="w-12 h-12 rounded-full border-2 border-black object-cover grayscale">
                    <div>
                        <div class="font-black text-xs uppercase tracking-tight">Budi Santoso</div>
                        <div
                            class="text-[10px] bg-yellow-200 text-black border border-black px-1.5 font-bold uppercase inline-block">
                            Sr. Database Engineer @ Dana Corp</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="pricing" class="bg-white border-t-4 border-b-4 border-black py-16 md:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
                <span class="text-xs font-black uppercase text-gray-400 tracking-wider">// TRANSPARANSI PENUH AMALAN
                    INVESTASI</span>
                <h2 class="text-3xl sm:text-5xl font-black uppercase tracking-tighter">ONE-TIME PAYMENT PASS</h2>
            </div>

            <div
                class="max-w-md mx-auto border-4 border-black bg-[#FAFAFA] p-6 sm:p-10 shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] space-y-6">
                <div class="text-center space-y-2 border-b-4 border-dashed border-black pb-6">
                    <span class="bg-black text-lime-400 font-black text-xs uppercase px-3 py-1 tracking-widest">FULL
                        BLUEPRINT PASS</span>
                    <div class="text-5xl font-black uppercase tracking-tight text-black pt-3">IDR 999K</div>
                    <p class="text-[11px] font-bold text-gray-500 uppercase">Bayar Sekali Akses Selamanya Tanpa
                        Berlangganan</p>
                </div>

                <ul class="space-y-3 font-bold text-xs sm:text-sm uppercase text-gray-800">
                    <li class="flex items-center gap-2">➔ <span class="bg-lime-200 px-1">Semua Akses</span> Blueprint
                        Kelas Utama</li>
                    <li class="flex items-center gap-2">➔ Sesi Review Source Code Mingguan</li>
                    <li class="flex items-center gap-2">➔ Server Ekosistem Discord Eksklusif</li>
                    <li class="flex items-center gap-2">➔ Update Modul Major Gratis Selamanya</li>
                </ul>

                <div class="pt-4">
                    <a href="{{ route('register') }}"
                        class="block text-center bg-lime-400 text-black font-black uppercase tracking-wider py-4 border-3 border-black shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-lime-300 active:translate-x-[2px] active:translate-y-[2px] transition-all text-xs tracking-widest">
                        AKUISISI SLOT SEKARANG MUMPUNG DISKON →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="faq" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24" x-data="{ active: null }">
        <h2 class="text-3xl sm:text-5xl font-black uppercase text-center mb-12 tracking-tighter">
            INTEGASI PERTANYAAN <span
                class="bg-red-400 px-2 border-2 border-black inline-block transform rotate-1">FAQ</span>
        </h2>

        <div class="space-y-4">
            <div class="border-4 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                <button
                    class="w-full text-left p-5 font-black uppercase text-xs sm:text-sm flex justify-between items-center bg-gray-50"
                    :class="active === 1 ? 'bg-yellow-200 border-b-2 border-black' : ''"
                    @click="active = active === 1 ? null : 1">
                    <span>Apakah saya dapat sertifikat penyelesaian kurikulum?</span>
                    <span class="text-xl" x-text="active === 1 ? '✕' : '＋'">＋</span>
                </button>
                <div class="p-5 font-bold text-xs sm:text-sm text-gray-800 bg-white" x-show="active === 1"
                    x-transition>
                    Dapat, namun kami tekankan lagi: sertifikat fisik tidak bernilai mistis jika portfolio Anda kosong
                    melompong. Fokus mutlak kami adalah membuat hasil karya nyata Anda lolos verifikasi HRD korporasi
                    internasional.
                </div>
            </div>

            <div class="border-4 border-black bg-white shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                <button
                    class="w-full text-left p-5 font-black uppercase text-xs sm:text-sm flex justify-between items-center bg-gray-50"
                    :class="active === 2 ? 'bg-yellow-200 border-b-2 border-black' : ''"
                    @click="active = active === 2 ? null : 2">
                    <span>Saya tidak punya background IT sama sekali, apakah aman?</span>
                    <span class="text-xl" x-text="active === 2 ? '✕' : '＋'">＋</span>
                </button>
                <div class="p-5 font-bold text-xs sm:text-sm text-gray-800 bg-white" x-show="active === 2"
                    x-transition>
                    Sangat aman. Setiap kelas menyediakan fondasi awal yang dirancang runut. Kami hanya membutuhkan
                    komitmen waktu Anda untuk membaca dokumentasi teknis resmi tanpa malas.
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16 md:pb-24">
        <div
            class="border-4 border-black bg-lime-400 p-8 sm:p-16 text-center shadow-[12px_12px_0px_0px_rgba(0,0,0,1)] relative overflow-hidden">
            <div class="relative z-10 space-y-6">
                <h2 class="text-3xl sm:text-6xl font-black uppercase tracking-tight leading-none">
                    TERTINGGAL ALGORITMA BURSA KERJA ATAU MEMIMPIN SEKARANG?
                </h2>
                <p class="max-w-xl mx-auto font-bold text-sm sm:text-base text-black">
                    Penawaran ini akan ditutup secara otomatis saat alokasi infrastruktur server batch penuh. Pimpin
                    peradaban digital Anda.
                </p>
                <div class="pt-4">
                    <a href="{{ route('register') }}"
                        class="inline-block w-full sm:w-auto bg-black text-white font-black text-base uppercase tracking-wider px-10 py-5 border-3 border-black shadow-[6px_6px_0px_0px_rgba(255,255,255,1)] hover:bg-white hover:text-black transition-all">
                        AMBIL SLOT AMALAN SEKARANG →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white border-t-4 border-black text-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div
                class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8 text-left border-b-4 border-black pb-8 font-bold text-xs sm:text-sm uppercase">
                <div class="space-y-2">
                    <div class="font-black tracking-wider text-black">// MARKAS OPERASIONAL</div>
                    <p class="text-gray-600 leading-relaxed">Jl. Brutalisme Raya No. 404, Blok-B, Kota Medan, Sumatera
                        Utara, Indonesia.</p>
                </div>
                <div class="space-y-2">
                    <div class="font-black tracking-wider text-black">// INTEL SECURE INTERACTION</div>
                    <p class="text-gray-600 leading-relaxed">Email: support@coursehub.test<br>Telegram:
                        @coursehub_radical</p>
                </div>
                <div class="space-y-2">
                    <div class="font-black tracking-wider text-black">// AMALAN LEGALITAS</div>
                    <p class="text-gray-600 leading-relaxed">Sistem Operasi CourseHub dilindungi hak cipta independen.
                        Kami berhak menolak pendaftar yang malas membaca.</p>
                </div>
            </div>

            <div
                class="flex flex-col sm:flex-row items-center justify-between font-black uppercase text-[10px] sm:text-xs tracking-wider gap-4 text-center sm:text-left">
                <p>&copy; 2026 COURSEHUB® INC. ALL RIGHTS RESERVED.</p>
                <span
                    class="bg-red-400 text-black px-2 py-0.5 border border-black shadow-[2px_2px_0px_0px_rgba(0,0,0,1)]">NEO-SYSTEM
                    PRODUCTION v5.1</span>
            </div>
        </div>
    </footer>

</body>

</html>
