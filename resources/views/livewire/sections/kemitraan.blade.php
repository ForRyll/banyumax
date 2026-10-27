<section 
    id="kemitraan" 
    x-data="{
        visible: false,
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.visible = true;
                    }
                });
            }, { threshold: 0.05 });
            observer.observe(this.$el);
        }
    }"
    class="min-h-screen relative py-20 sm:py-28 bg-white overflow-hidden"
>
    <!-- Ambient Background Lighting -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[700px] h-[700px] bg-cyan-50/70 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="space-y-28">
        <!-- ============================================================== -->
        <!-- 1. CLIENT TESTIMONIALS (Seamless 2-Row Infinite Marquee)       -->
        <!-- ============================================================== -->
        <div class="space-y-12">
            <div class="text-center max-w-3xl mx-auto px-4">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Client Testimonials
                </h2>
            </div>

            <!-- Two-row Continuous Scrolling Marquee -->
            <div class="space-y-6 overflow-hidden marquee-container py-4">
                <!-- Row 1: Smooth Left Scrolling -->
                <div class="animate-marquee-left space-x-6">
                    <!-- Set 1 -->
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "After using Banyumax, our work is more organized, and the team can focus more on following up with leads."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Zahra" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Zahra</h4>
                                    <p class="text-xs text-slate-500">HR & People Operations Filasio</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "Sistem rotasi leads Banyumax sangat adil dan cepat. Konversi penjualan kami naik drastis dalam 2 bulan."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Rian" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Rian</h4>
                                    <p class="text-xs text-slate-500">Head of Operations</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                    <!-- Duplicated Set for Infinite Seamless Loop -->
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "After using Banyumax, our work is more organized, and the team can focus more on following up with leads."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Zahra" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Zahra</h4>
                                    <p class="text-xs text-slate-500">HR & People Operations Filasio</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "Sistem rotasi leads Banyumax sangat adil dan cepat. Konversi penjualan kami naik drastis dalam 2 bulan."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Rian" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Rian</h4>
                                    <p class="text-xs text-slate-500">Head of Operations</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Row 2: Smooth Right Scrolling -->
                <div class="animate-marquee-right space-x-6">
                    <!-- Set 1 -->
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "Integrasi logistik dan laporan keuangannya sangat membantu operasional harian kami jadi tanpa ribet."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Dewi" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Dewi</h4>
                                    <p class="text-xs text-slate-500">Director E-Retail</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "After using Banyumax, our work is more organized, and the team can focus more on following up with leads."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Budi" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Budi</h4>
                                    <p class="text-xs text-slate-500">Founder & CEO</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                    <!-- Duplicated Set for Infinite Seamless Loop -->
                    @for($i = 0; $i < 4; $i++)
                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "Integrasi logistik dan laporan keuangannya sangat membantu operasional harian kami jadi tanpa ribet."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Dewi" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Dewi</h4>
                                    <p class="text-xs text-slate-500">Director E-Retail</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-[340px] sm:w-[380px] flex-shrink-0 bg-white rounded-3xl p-6 sm:p-8 border border-slate-100 shadow-glass-nav hover:shadow-xl hover:border-banyumax-200 transition-all duration-300 relative flex flex-col justify-between">
                            <div class="absolute top-5 right-6 text-banyumax-400 font-serif text-5xl leading-none select-none opacity-80">
                                “
                            </div>
                            <p class="text-slate-700 text-sm sm:text-base leading-relaxed mb-6 font-normal">
                                "After using Banyumax, our work is more organized, and the team can focus more on following up with leads."
                            </p>
                            <div class="flex items-center space-x-3.5 pt-4 border-t border-slate-100">
                                <img 
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&h=120&q=80" 
                                    alt="Budi" 
                                    class="w-10 h-10 rounded-full object-cover ring-2 ring-banyumax-200"
                                >
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">Budi</h4>
                                    <p class="text-xs text-slate-500">Founder & CEO</p>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- 2. PARTNER / CLIENT LOGOS MARQUEE SLIDER                      -->
        <!-- ============================================================== -->
        <div class="overflow-hidden marquee-container py-8 border-y border-slate-100 bg-slate-50/50">
            <div class="animate-marquee-logos items-center space-x-14 sm:space-x-20 opacity-80 hover:opacity-100 transition-opacity">
                @for($repeat = 0; $repeat < 3; $repeat++)
                    <div class="flex items-center space-x-2 font-black text-xl sm:text-2xl text-indigo-900 tracking-wider">
                        <span class="px-2.5 py-1 bg-indigo-900 text-white rounded-lg text-sm font-bold">ViN</span>
                        <span>PROTOCOL</span>
                    </div>

                    <div class="flex items-center space-x-2 font-bold text-xl sm:text-2xl text-blue-600 tracking-tight">
                        <div class="w-8 h-8 rounded-lg bg-blue-600 text-white flex items-center justify-center font-bold text-sm">S</div>
                        <span>SURVEIN</span>
                    </div>

                    <div class="flex items-center space-x-1.5 font-bold text-xl sm:text-2xl text-slate-800">
                        <span class="text-banyumax-500">Ayo</span><span>start</span>
                    </div>

                    <div class="border-2 border-slate-900 px-3 py-1 font-black text-lg sm:text-xl tracking-widest text-slate-900">
                        JARIS & K
                    </div>

                    <div class="flex items-center space-x-2 font-black text-xl text-teal-600 tracking-wider">
                        <span class="px-2 py-0.5 bg-teal-600 text-white rounded">PD</span>
                        <span>POSITIVE GYM</span>
                    </div>

                    <div class="flex items-center space-x-2 font-bold text-lg text-amber-800">
                        <span class="w-7 h-7 rounded-full bg-amber-600 text-white flex items-center justify-center text-xs">⚡</span>
                        <span>FITNESS PLATE</span>
                    </div>
                @endfor
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- 3. PLAN & PRICING (Exact 3 Cards from Figma)                   -->
        <!-- ============================================================== -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="text-center max-w-3xl mx-auto">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                    Plan & Pricing
                </h3>
                <p class="mt-4 text-base sm:text-lg text-slate-600">
                    Select your plan and manage it according to company requirement
                </p>
            </div>

            <!-- 3 Pricing Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch pt-4">
                <!-- Card 1: 139K -->
                <div class="relative bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-glass-nav hover:shadow-2xl hover:border-banyumax-400 transition-all duration-300 flex flex-col justify-between group transform hover:-translate-y-2">
                    <div class="absolute top-6 right-6">
                        <span class="inline-block px-3.5 py-1 text-[11px] font-bold text-white bg-banyumax-500 rounded-full shadow-sm">
                            Most Popular
                        </span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-4">Flexible Plan</h4>
                        
                        <div class="flex items-baseline gap-1 mb-8">
                            <span class="text-sm font-semibold text-slate-500">Rp</span>
                            <span class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight">139K</span>
                            <span class="text-xs font-medium text-slate-400">/monthly</span>
                        </div>

                        <ul class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-6">
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Akses Penuh:</strong> Coba seluruh fitur end-to-end (Rotator, Pixel, Statistik, Logistik, dll).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Kapasitas:</strong> Maksimal 25 pengguna (CS).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Fleksibel:</strong> Bebas upgrade paket kapan saja.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-8">
                        <a 
                            href="#kontak" 
                            class="w-full inline-flex items-center justify-center py-3 px-6 rounded-xl border border-slate-200 text-slate-700 font-semibold text-sm hover:bg-slate-50 hover:border-banyumax-300 transition-all duration-200 shadow-2xs"
                        >
                            Get started
                        </a>
                    </div>
                </div>

                <!-- Card 2: 199K (Featured Cyan Button) -->
                <div class="relative bg-white rounded-3xl p-8 sm:p-10 border-2 border-banyumax-500 shadow-2xl shadow-banyumax-500/15 flex flex-col justify-between group transform hover:-translate-y-2 transition-all duration-300">
                    <div class="absolute top-6 right-6">
                        <span class="inline-block px-3.5 py-1 text-[11px] font-bold text-white bg-banyumax-500 rounded-full shadow-md shadow-banyumax-500/30">
                            Most Popular
                        </span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-4">Flexible Plan</h4>
                        
                        <div class="flex items-baseline gap-1 mb-8">
                            <span class="text-sm font-semibold text-slate-500">Rp</span>
                            <span class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight">199K</span>
                            <span class="text-xs font-medium text-slate-400">/monthly</span>
                        </div>

                        <ul class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-6">
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Akses Penuh:</strong> Coba seluruh fitur end-to-end (Rotator, Pixel, Statistik, Logistik, dll).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Kapasitas:</strong> Maksimal 25 pengguna (CS).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Fleksibel:</strong> Bebas upgrade paket kapan saja.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-8">
                        <a 
                            href="#kontak" 
                            class="w-full inline-flex items-center justify-center py-3.5 px-6 rounded-xl bg-banyumax-500 hover:bg-banyumax-600 text-white font-semibold text-sm shadow-lg shadow-banyumax-500/30 hover:shadow-xl hover:shadow-banyumax-500/40 transition-all duration-200"
                        >
                            Get started
                        </a>
                    </div>
                </div>

                <!-- Card 3: 399K -->
                <div class="relative bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/90 shadow-glass-nav hover:shadow-2xl hover:border-banyumax-400 transition-all duration-300 flex flex-col justify-between group transform hover:-translate-y-2">
                    <div class="absolute top-6 right-6">
                        <span class="inline-block px-3.5 py-1 text-[11px] font-bold text-white bg-banyumax-500 rounded-full shadow-sm">
                            Most Popular
                        </span>
                    </div>

                    <div>
                        <h4 class="text-xl font-bold text-slate-900 mb-4">Flexible Plan</h4>
                        
                        <div class="flex items-baseline gap-1 mb-8">
                            <span class="text-sm font-semibold text-slate-500">Rp</span>
                            <span class="text-4xl sm:text-5xl font-black text-slate-900 tracking-tight">399K</span>
                            <span class="text-xs font-medium text-slate-400">/monthly</span>
                        </div>

                        <ul class="space-y-4 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 pt-6">
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Akses Penuh:</strong> Coba seluruh fitur end-to-end (Rotator, Pixel, Statistik, Logistik, dll).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Kapasitas:</strong> Maksimal 25 pengguna (CS).</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-5 h-5 rounded-full bg-cyan-50 text-banyumax-500 flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span><strong class="text-slate-800">Fleksibel:</strong> Bebas upgrade paket kapan saja.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="pt-8">
                        <a 
                            href="#kontak" 
                            class="w-full inline-flex items-center justify-center py-3 px-6 rounded-xl border border-slate-200 text-slate-700 font-semibold text-sm hover:bg-slate-50 hover:border-banyumax-300 transition-all duration-200 shadow-2xs"
                        >
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
