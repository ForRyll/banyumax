@extends('layouts.app')

@section('content')
    {{-- Section 1: Beranda --}}
    @livewire('sections.beranda')

    {{-- Section 2: Tentang Kami --}}
    @livewire('sections.tentang-kami')

    {{-- Section 3: Solusi --}}
    @livewire('sections.solusi')

    {{-- Section 4: Kemitraan --}}
    @livewire('sections.kemitraan')

    {{-- Section 5: Kontak / FAQ --}}
    @livewire('sections.kontak')

    {{-- Section 6: Berita --}}
    @livewire('sections.berita')

    {{-- Pre-Footer CTA Section (matching media_1790755539152.png) --}}
    <section class="relative py-28 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden text-center flex items-center justify-center">
        <!-- Background Mockup Graphic Layer -->
        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20 -z-10">
            <div class="w-[850px] h-[550px] bg-slate-50 border-2 border-slate-200 rounded-3xl shadow-xl p-8 transform -rotate-1 scale-90 sm:scale-100 flex flex-col justify-between">
                <div class="flex items-center justify-between border-b border-slate-200 pb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Banyumax" class="h-6 w-auto opacity-70">
                    <span class="text-xs text-slate-400">Dashboard Information</span>
                </div>
                <div class="grid grid-cols-4 gap-4 my-6">
                    <div class="h-20 bg-cyan-100 rounded-xl"></div>
                    <div class="h-20 bg-blue-100 rounded-xl"></div>
                    <div class="h-20 bg-teal-100 rounded-xl"></div>
                    <div class="h-20 bg-sky-100 rounded-xl"></div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Banyumax" class="h-10 w-auto opacity-50">
                </div>
            </div>
        </div>

        <div class="max-w-3xl mx-auto space-y-6 relative z-10">
            <!-- Center Banyumax watermark -->
            <div class="flex justify-center mb-2">
                <img src="{{ asset('images/logo.png') }}" alt="Banyumax" class="h-10 sm:h-12 w-auto opacity-95">
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                Ready to Manage Your Business More Efficiently?
            </h2>

            <p class="text-base sm:text-lg text-slate-600 max-w-xl mx-auto leading-relaxed">
                Manage leads, optimize CS performance, and maximize sales opportunities with Banyumax all in one platform.
            </p>

            <div class="pt-4">
                <a 
                    href="#solusi" 
                    class="inline-flex items-center justify-center px-9 py-4 text-base font-semibold text-white bg-banyumax-500 hover:bg-banyumax-600 rounded-2xl shadow-xl shadow-banyumax-500/30 hover:shadow-2xl hover:shadow-banyumax-500/40 transition-all duration-300 transform hover:-translate-y-0.5 active:translate-y-0"
                >
                    Get Started
                </a>
            </div>
        </div>
    </section>

    {{-- Official Footer (Exact Match with media_1790755554532.png) --}}
    <footer class="bg-banyumax-500 text-white py-16 sm:py-20 px-4 sm:px-6 lg:px-8 border-t border-cyan-400">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-10 lg:gap-12 items-start">
            <!-- Column 1: Brand & Tagline -->
            <div class="md:col-span-4 space-y-4">
                <div class="flex items-center">
                    <!-- Inverted White Logo for Cyan Background -->
                    <img 
                        src="{{ asset('images/logo.png') }}" 
                        alt="Banyumax" 
                        class="h-9 w-auto brightness-0 invert"
                    >
                </div>
                <p class="text-sm text-cyan-50 leading-relaxed max-w-xs font-normal">
                    Make the right data-driven decisions that move your bussiness.
                </p>
            </div>

            <!-- Column 2: Navigation Links -->
            <div class="md:col-span-3 space-y-3">
                <ul class="space-y-2.5 text-sm font-medium">
                    <li><a href="#beranda" class="text-white hover:text-cyan-100 transition-colors">Home</a></li>
                    <li><a href="#tentang-kami" class="text-white hover:text-cyan-100 transition-colors">About Us</a></li>
                    <li><a href="#solusi" class="text-white hover:text-cyan-100 transition-colors">Solution</a></li>
                    <li><a href="#kemitraan" class="text-white hover:text-cyan-100 transition-colors">Kemitraan</a></li>
                    <li><a href="#kontak" class="text-white hover:text-cyan-100 transition-colors">Contact</a></li>
                    <li><a href="#berita" class="text-white hover:text-cyan-100 transition-colors">News</a></li>
                </ul>
            </div>

            <!-- Column 3: Legal & Policies -->
            <div class="md:col-span-3 space-y-3">
                <ul class="space-y-2.5 text-sm font-medium">
                    <li><a href="#" class="text-white hover:text-cyan-100 transition-colors">Terms and Conditions</a></li>
                    <li><a href="#" class="text-white hover:text-cyan-100 transition-colors">Privacy Policy</a></li>
                    <li><a href="#" class="text-white hover:text-cyan-100 transition-colors">Cookie Policy</a></li>
                </ul>
            </div>

            <!-- Column 4: Contact & Socials -->
            <div class="md:col-span-2 space-y-4">
                <h4 class="text-base font-bold text-white">Let's chat!</h4>
                <p class="text-sm text-cyan-50 font-medium">
                    <a href="mailto:info@banyumax.id" class="hover:underline">info@banyumax.id</a>
                </p>

                <!-- Social Media Icons (Instagram, Facebook, GitHub, Telegram) -->
                <div class="flex items-center space-x-4 pt-1">
                    <!-- Instagram -->
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/15 hover:bg-white/30 flex items-center justify-center text-white transition-colors" aria-label="Instagram">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/15 hover:bg-white/30 flex items-center justify-center text-white transition-colors" aria-label="Facebook">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"/>
                        </svg>
                    </a>

                    <!-- GitHub -->
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/15 hover:bg-white/30 flex items-center justify-center text-white transition-colors" aria-label="GitHub">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>

                    <!-- Telegram -->
                    <a href="#" class="w-8 h-8 rounded-lg bg-white/15 hover:bg-white/30 flex items-center justify-center text-white transition-colors" aria-label="Telegram">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.458c.538-.196 1.006.128.832.941z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
@endsection
