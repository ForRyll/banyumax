<section 
    id="beranda" 
    x-data="{
        visible: false,
        init() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.visible = true;
                    }
                });
            }, { threshold: 0.1 });
            observer.observe(this.$el);
        }
    }"
    class="min-h-screen relative flex items-center justify-center pt-28 pb-20 px-4 sm:px-6 lg:px-8 overflow-hidden bg-gradient-to-br from-cyan-50/70 via-sky-50/40 to-white"
>
    <!-- Background Ambient Glow -->
    <div class="absolute -top-24 -left-24 w-[500px] h-[500px] bg-banyumax-200/40 rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-1/2 right-0 w-[600px] h-[600px] bg-blue-100/30 rounded-full blur-3xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
        <!-- Left Content -->
        <div 
            class="lg:col-span-6 transform transition-all duration-700 ease-out"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                Manage Smarter<br>
                Sell Better<br>
                <span class="text-banyumax-500">Grow Faster</span>
            </h1>

            <p class="mt-6 text-base sm:text-lg text-slate-600 max-w-lg leading-relaxed font-normal">
                Simplify Customer Service, Drive More Sales. One platform to manage your CS, leads, campaigns, and business operations.
            </p>

            <div class="mt-8 flex items-center gap-4">
                <a 
                    href="#solusi" 
                    class="inline-flex items-center justify-center px-7 py-3.5 text-base font-semibold text-white bg-banyumax-500 hover:bg-banyumax-600 rounded-xl shadow-lg shadow-banyumax-500/25 hover:shadow-xl hover:shadow-banyumax-500/35 transition-all duration-300 transform hover:-translate-y-0.5"
                >
                    Get Started
                </a>
            </div>
        </div>

        <!-- Right: 3D Floating Dashboard Mockup Cards -->
        <div 
            class="lg:col-span-6 relative transform transition-all duration-1000 ease-out delay-200 flex items-center justify-center"
            :class="visible ? 'opacity-100 scale-100 translate-y-0' : 'opacity-0 scale-95 translate-y-12'"
        >
            <div class="relative w-full max-w-lg lg:max-w-none perspective-1000">
                <!-- Back Card (Subtle background layer) -->
                <div class="absolute -top-6 -right-4 w-[92%] h-[340px] bg-white/70 rounded-2xl border border-slate-200/60 shadow-xl backdrop-blur-sm -rotate-2 transform scale-95 pointer-events-none hidden sm:block"></div>

                <!-- Main Top Dashboard Window Mockup -->
                <div class="relative bg-white rounded-2xl shadow-2xl border border-slate-100 p-5 sm:p-6 transition-transform duration-500 hover:scale-[1.01] overflow-hidden">
                    <!-- Top Bar inside Mockup -->
                    <div class="flex items-center justify-between border-b border-slate-100 pb-4 mb-5">
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('images/logo.png') }}" alt="Banyumax" class="h-6 w-auto">
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="text-right hidden sm:block">
                                <p class="text-xs font-bold text-slate-800">Hi Admin Banyumax</p>
                                <p class="text-[10px] text-slate-400">Selamat Bekerja!</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-banyumax-100 flex items-center justify-center text-banyumax-600 font-bold text-xs">
                                AB
                            </div>
                        </div>
                    </div>

                    <!-- Dashboard Stats Grid -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mb-5">
                        <div class="bg-gradient-to-br from-banyumax-500 to-cyan-600 rounded-xl p-3 text-white shadow-sm">
                            <p class="text-[10px] text-cyan-100 font-medium">Omset Penjualan Hari Ini</p>
                            <p class="text-sm sm:text-base font-bold mt-1">Rp 10.050.000</p>
                        </div>
                        <div class="bg-gradient-to-br from-blue-600 to-indigo-600 rounded-xl p-3 text-white shadow-sm">
                            <p class="text-[10px] text-blue-100 font-medium">Total Leads</p>
                            <p class="text-sm sm:text-base font-bold mt-1">406</p>
                        </div>
                        <div class="bg-gradient-to-br from-cyan-400 to-teal-500 rounded-xl p-3 text-white shadow-sm">
                            <p class="text-[10px] text-teal-100 font-medium">Lead Closing</p>
                            <p class="text-sm sm:text-base font-bold mt-1">209</p>
                        </div>
                        <div class="bg-gradient-to-br from-sky-500 to-blue-500 rounded-xl p-3 text-white shadow-sm">
                            <p class="text-[10px] text-sky-100 font-medium">Conversion Rate</p>
                            <p class="text-sm sm:text-base font-bold mt-1">50%</p>
                        </div>
                    </div>

                    <!-- Mini Orders & Analytics Preview -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center justify-between text-xs font-semibold text-slate-700 mb-2">
                                <span>Recent Orders</span>
                                <span class="text-banyumax-600 text-[10px]">Lihat Semua</span>
                            </div>
                            <div class="space-y-1.5 text-[11px]">
                                <div class="flex justify-between items-center bg-white p-2 rounded-lg shadow-2xs border border-slate-100">
                                    <span class="text-slate-700 font-medium">#ORD-9842</span>
                                    <span class="text-emerald-600 font-semibold bg-emerald-50 px-1.5 py-0.5 rounded">Sukses</span>
                                </div>
                                <div class="flex justify-between items-center bg-white p-2 rounded-lg shadow-2xs border border-slate-100">
                                    <span class="text-slate-700 font-medium">#ORD-9841</span>
                                    <span class="text-cyan-600 font-semibold bg-cyan-50 px-1.5 py-0.5 rounded">Diproses</span>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center justify-between text-xs font-semibold text-slate-700 mb-2">
                                <span>Live CS Performance</span>
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
                            </div>
                            <div class="space-y-2 mt-2">
                                <div>
                                    <div class="flex justify-between text-[10px] text-slate-500 mb-1">
                                        <span>CS Response Time</span>
                                        <span class="font-bold text-slate-700">~ 1.2 min</span>
                                    </div>
                                    <div class="w-full bg-slate-200 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-banyumax-500 h-1.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="flex justify-between text-[10px] text-slate-500 mb-1">
                                        <span>Satisfaction Score</span>
                                        <span class="font-bold text-slate-700">98.4%</span>
                                    </div>
                                    <div class="w-full bg-slate-200 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-blue-600 h-1.5 rounded-full" style="width: 95%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge -->
                <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 bg-white/95 backdrop-blur-md p-3.5 rounded-2xl shadow-xl border border-slate-100 flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-banyumax-500 to-cyan-400 text-white flex items-center justify-center shadow-md">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-[10px] text-slate-400 font-medium">Sales Growth</p>
                        <p class="text-sm font-bold text-slate-800">+240% Lebih Cepat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
