<div 
    x-data="{
        isScrolled: false,
        showScrollTop: false,
        activeSection: 'beranda',
        mobileOpen: false,
        sections: ['beranda', 'tentang-kami', 'solusi', 'kemitraan', 'kontak', 'berita'],
        init() {
            this.handleScroll();
            window.addEventListener('scroll', () => this.handleScroll(), { passive: true });
            this.setupScrollSpy();
        },
        handleScroll() {
            const y = window.scrollY;
            this.isScrolled = y > 20;
            this.showScrollTop = y > 300;
        },
        setupScrollSpy() {
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -60% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.activeSection = entry.target.id;
                    }
                });
            }, observerOptions);

            this.sections.forEach(id => {
                const el = document.getElementById(id);
                if (el) observer.observe(el);
            });
        },
        scrollTo(id) {
            this.mobileOpen = false;
            const el = document.getElementById(id);
            if (el) {
                const navHeight = 75;
                const elementPosition = el.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navHeight;
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                this.activeSection = id;
            }
        },
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
            this.activeSection = 'beranda';
        }
    }"
>
    <!-- Standard Full-Width Navbar -->
    <header 
        class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md transition-all duration-300"
        :class="isScrolled ? 'shadow-sm border-b border-slate-200/80 py-3.5' : 'border-b border-slate-100 py-4.5'"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <!-- Left: Logo -->
                <div class="flex items-center">
                    <a href="#beranda" @click.prevent="scrollTo('beranda')" class="flex items-center group">
                        <img 
                            src="{{ asset('images/logo.png') }}" 
                            alt="Banyumax" 
                            class="h-8 sm:h-9 w-auto object-contain transition-transform duration-200 group-hover:opacity-90"
                        >
                    </a>
                </div>

                <!-- Center: Standard Navbar Menu Links -->
                <nav class="hidden md:flex items-center space-x-7 lg:space-x-9">
                    @foreach($menus as $menu)
                        <a 
                            href="{{ $menu['href'] }}"
                            @click.prevent="scrollTo('{{ $menu['id'] }}')"
                            class="relative text-sm font-medium transition-colors duration-200 py-1"
                            :class="activeSection === '{{ $menu['id'] }}' 
                                ? 'text-banyumax-500 font-semibold' 
                                : 'text-slate-700 hover:text-banyumax-500'"
                        >
                            <span>{{ $menu['name'] }}</span>
                            <!-- Clean active underline line -->
                            <span 
                                x-show="activeSection === '{{ $menu['id'] }}'"
                                x-transition
                                class="absolute bottom-0 left-0 w-full h-0.5 bg-banyumax-500 rounded-full"
                            ></span>
                        </a>
                    @endforeach
                </nav>

                <!-- Right: Login & Get Started Button -->
                <div class="hidden md:flex items-center space-x-6">
                    <a 
                        href="#" 
                        class="text-sm font-semibold text-slate-800 hover:text-banyumax-500 transition-colors"
                    >
                        Log in
                    </a>
                    <a 
                        href="#solusi" 
                        @click.prevent="scrollTo('solusi')"
                        class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white bg-banyumax-500 hover:bg-banyumax-600 rounded-lg shadow-sm hover:shadow transition-all duration-200 active:scale-95"
                    >
                        Get Started
                    </a>
                </div>

                <!-- Mobile Hamburger Button -->
                <div class="flex items-center md:hidden">
                    <button 
                        @click="mobileOpen = !mobileOpen" 
                        type="button" 
                        class="p-2 rounded-lg text-slate-700 hover:text-banyumax-500 hover:bg-slate-100 transition-colors"
                        aria-label="Toggle Navigation"
                    >
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path 
                                x-show="!mobileOpen" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                            <path 
                                x-show="mobileOpen" 
                                x-cloak
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                stroke-width="2" 
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div 
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            x-cloak
            class="md:hidden border-t border-slate-100 bg-white px-5 py-4 space-y-3 shadow-lg"
        >
            <div class="space-y-1">
                @foreach($menus as $menu)
                    <a 
                        href="{{ $menu['href'] }}"
                        @click.prevent="scrollTo('{{ $menu['id'] }}')"
                        class="flex items-center justify-between px-3 py-2.5 rounded-lg text-sm font-medium transition-colors"
                        :class="activeSection === '{{ $menu['id'] }}' 
                            ? 'text-banyumax-500 font-semibold bg-cyan-50/70' 
                            : 'text-slate-700 hover:text-banyumax-500 hover:bg-slate-50'"
                    >
                        <span>{{ $menu['name'] }}</span>
                        <span 
                            x-show="activeSection === '{{ $menu['id'] }}'" 
                            class="w-1.5 h-1.5 rounded-full bg-banyumax-500"
                        ></span>
                    </a>
                @endforeach
            </div>

            <div class="pt-3 border-t border-slate-100 flex flex-col space-y-2">
                <a 
                    href="#" 
                    class="w-full text-center py-2.5 text-sm font-semibold text-slate-800 hover:text-banyumax-500 transition"
                >
                    Log in
                </a>
                <a 
                    href="#solusi" 
                    @click.prevent="scrollTo('solusi')"
                    class="w-full text-center py-2.5 text-sm font-semibold text-white bg-banyumax-500 hover:bg-banyumax-600 rounded-lg shadow-sm transition"
                >
                    Get Started
                </a>
            </div>
        </div>
    </header>

    <!-- Floating Shortcut Button: Scroll To Top -->
    <button 
        x-show="showScrollTop"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-6 scale-75"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-6 scale-75"
        @click="scrollToTop()"
        type="button"
        class="fixed bottom-6 right-6 z-50 p-3.5 rounded-full bg-banyumax-500 hover:bg-banyumax-600 text-white shadow-xl shadow-banyumax-500/35 hover:shadow-2xl hover:shadow-banyumax-500/50 hover:-translate-y-1 active:translate-y-0 transition-all duration-300 focus:outline-none group flex items-center justify-center"
        aria-label="Kembali ke atas"
        title="Kembali ke atas"
    >
        <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-y-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>
</div>
