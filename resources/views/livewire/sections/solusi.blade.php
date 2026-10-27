<section 
    id="solusi" 
    x-data="{
        openItems: {},
        toggle(key) {
            this.openItems[key] = !this.openItems[key];
        },
        isOpen(key) {
            return !!this.openItems[key];
        },
        init() {
            // Set default open item for preview (or all can start closed with +)
            this.openItems['sales-2'] = true;
            this.openItems['mkt-2'] = true;
            this.openItems['biz-2'] = true;
            this.openItems['ops-2'] = true;
            this.openItems['why-2'] = true;
        }
    }"
    class="relative w-full bg-white overflow-hidden pt-16 sm:pt-24"
>
    <!-- Section Header (Centered) -->
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 mb-16 sm:mb-20">
        <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-cyan-100 text-banyumax-700 text-xs font-semibold mb-4">
            Solusi Unggulan
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
            Ekosistem Fitur Terpadu Banyumax
        </h2>
        <p class="mt-4 text-base sm:text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
            Solusi modular dan komprehensif untuk mengoptimalkan setiap lini bisnis Anda dari hulu ke hilir.
        </p>
    </div>

    <!-- ============================================================== -->
    <!-- 4 FULL-WIDTH EDGE-TO-EDGE STACKED MENUS (Skiper-UI skiper16)   -->
    <!-- ============================================================== -->
    <div class="relative w-full">
        <!-- ---------------------------------------------------------- -->
        <!-- MENU 1: Sales & Customer Services (Full Width Cyan)       -->
        <!-- ---------------------------------------------------------- -->
        <div class="sticky top-16 w-full min-h-[85vh] bg-banyumax-500 text-white flex items-center shadow-2xl py-14 sm:py-20 z-10">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <!-- Left: Title & Accordions with + / - toggle -->
                    <div class="lg:col-span-7 space-y-6">
                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                            Sales & Customer Services
                        </h3>

                        <div class="space-y-3.5 pt-2">
                            <!-- Item 1 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('sales-1')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Relevant features with an easy-to-use dashboard.</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('sales-1') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('sales-1')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Akses seluruh metrik penjualan harian, waktu respon CS, dan antrean leads dari satu tampilan dashboard intuitif tanpa perlu konfigurasi rumit.
                                </div>
                            </div>

                            <!-- Item 2 (Default open) -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('sales-2')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Relevant features with an easy-to-use dashboard.</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('sales-2') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('sales-2')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Automatically distribute leads to available team members for faster and more efficient handling.
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('sales-3')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Performance Based</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('sales-3') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('sales-3')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Penilaian kinerja agen Customer Service berdasarkan tingkat konversi (closing rate), durasi respon awal, serta kepuasan pelanggan secara transparan.
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('sales-4')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>CRM</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('sales-4') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('sales-4')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Kelola database kontak pelanggan, tagging kategori prospek, riwayat pesanan, serta integrasi follow up berkala untuk menjaga retensi pembeli.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image Mockup -->
                    <div class="lg:col-span-5 flex items-center justify-center">
                        <div class="relative w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-2xl bg-cyan-700 border-2 border-white/20">
                            <img 
                                src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1000&q=80" 
                                alt="Sales & Customer Services Collaboration" 
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-cyan-950/60 via-transparent to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->
        <!-- MENU 2: Marketing (Full Width Light Cyan)                  -->
        <!-- ---------------------------------------------------------- -->
        <div class="sticky top-16 w-full min-h-[85vh] bg-[#E8F8FA] text-slate-900 flex items-center shadow-2xl py-14 sm:py-20 z-20">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <!-- Left: Title & Accordions with + / - toggle -->
                    <div class="lg:col-span-7 space-y-6">
                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                            Marketing
                        </h3>

                        <div class="space-y-3.5 pt-2">
                            <!-- Item 1 -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('mkt-1')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Manajemen Campaign/ Campaign Management</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('mkt-1') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('mkt-1')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Pusatkan seluruh saluran periklanan (Meta Ads, TikTok Ads, Google Ads) ke satu sistem pelacakan biaya dan performa secara menyeluruh.
                                </div>
                            </div>

                            <!-- Item 2 (Default open) -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('mkt-2')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Surveys</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('mkt-2') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('mkt-2')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Listen to customers, gain insights, improve your service.
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('mkt-3')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Multi-Platform Pixel Tracking</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('mkt-3') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('mkt-3')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Integrasi pixel Facebook, TikTok, dan Google Analytics secara akurat untuk tracking event pembelian dan formulir tanpa data bocor.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image Mockup -->
                    <div class="lg:col-span-5 flex items-center justify-center">
                        <div class="relative w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-2xl bg-cyan-200 border-2 border-white">
                            <img 
                                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1000&q=80" 
                                alt="Marketing Campaign Dashboard" 
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->
        <!-- MENU 3: Business Management (Full Width Cyan)             -->
        <!-- ---------------------------------------------------------- -->
        <div class="sticky top-16 w-full min-h-[85vh] bg-banyumax-500 text-white flex items-center shadow-2xl py-14 sm:py-20 z-30">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <!-- Left: Title & Accordions with + / - toggle -->
                    <div class="lg:col-span-7 space-y-6">
                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight">
                            Business Management
                        </h3>

                        <div class="space-y-3.5 pt-2">
                            <!-- Item 1 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('biz-1')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Financial Management</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('biz-1') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('biz-1')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Pencatatan arus kas otomatis dari setiap transaksi masuk, rekonsiliasi pembayaran, dan perhitungan laba kotor harian.
                                </div>
                            </div>

                            <!-- Item 2 (Default open) -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('biz-2')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Reporting</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('biz-2') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('biz-2')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Monitor business performance and activities through informative and easy-to-understand reports.
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('biz-3')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Staff Management</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('biz-3') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('biz-3')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Pengaturan pembagian shift kerja CS, hak akses admin vs staf operasional, serta monitoring kehadiran tim secara digital.
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="bg-white text-slate-900 rounded-2xl overflow-hidden shadow-sm transition-all duration-300">
                                <button 
                                    @click="toggle('biz-4')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4"
                                >
                                    <span>Financing</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('biz-4') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('biz-4')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Pencatatan permodalan, analisis margin per SKU produk, serta kesiapan integrasi fasilitas financing untuk ekspansi bisnis.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image Mockup -->
                    <div class="lg:col-span-5 flex items-center justify-center">
                        <div class="relative w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-2xl bg-cyan-700 border-2 border-white/20">
                            <img 
                                src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1000&q=80" 
                                alt="Business Management Dashboard" 
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-cyan-950/60 via-transparent to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------------------------- -->
        <!-- MENU 4: Operation (Full Width Light Cyan)                  -->
        <!-- ---------------------------------------------------------- -->
        <div class="sticky top-16 w-full min-h-[85vh] bg-[#E8F8FA] text-slate-900 flex items-center shadow-2xl py-14 sm:py-20 z-40">
            <div class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                    <!-- Left: Title & Accordions with + / - toggle -->
                    <div class="lg:col-span-7 space-y-6">
                        <h3 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-slate-900">
                            Operation
                        </h3>

                        <div class="space-y-3.5 pt-2">
                            <!-- Item 1 -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('ops-1')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Logistics Management</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('ops-1') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('ops-1')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Integrasi langsung dengan puluhan kurir ternama (J&T, SiCepat, JNE, Anteraja) untuk pembuatan label resi instan dan pelacakan status paket otomatis.
                                </div>
                            </div>

                            <!-- Item 2 (Default open) -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('ops-2')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Fulfillment</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('ops-2') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('ops-2')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Process and deliver customer orders faster, accurately, and seamlessly.
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-200/80 transition-all duration-300">
                                <button 
                                    @click="toggle('ops-3')" 
                                    type="button"
                                    class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-900"
                                >
                                    <span>Lead Data Export</span>
                                    <span 
                                        class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                        x-text="isOpen('ops-3') ? '−' : '+'"
                                    ></span>
                                </button>
                                <div 
                                    x-show="isOpen('ops-3')" 
                                    x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    class="px-5 sm:px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                                >
                                    Download data kontak prospek, data pelanggan, dan histori pesanan lengkap dalam format Excel atau CSV kapan pun Anda butuhkan.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image Mockup -->
                    <div class="lg:col-span-5 flex items-center justify-center">
                        <div class="relative w-full h-80 sm:h-96 rounded-3xl overflow-hidden shadow-2xl bg-cyan-200 border-2 border-white">
                            <img 
                                src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&fit=crop&w=1000&q=80" 
                                alt="Operation Logistics & Warehousing" 
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 via-transparent to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- WHY CHOOSE BANYUMAX SECTION (With Bullet Points in Desc)       -->
    <!-- ============================================================== -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center">
            <!-- Left: Accordions with Bullet Points -->
            <div class="lg:col-span-6 space-y-6">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-banyumax-500 text-white text-xs font-semibold shadow-sm">
                    Why Choose Banyumax
                </div>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Elevating Your Strategy With Measurable Impact
                </h3>

                <div class="space-y-3.5 pt-2">
                    <!-- Why Item 1 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-300">
                        <button 
                            @click="toggle('why-1')" 
                            type="button"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-800"
                        >
                            <span>Relevant features with an easy-to-use dashboard.</span>
                            <span 
                                class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                x-text="isOpen('why-1') ? '−' : '+'"
                            ></span>
                        </button>
                        <div 
                            x-show="isOpen('why-1')" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="px-5 sm:px-6 pb-5 pt-2 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        >
                            <ul class="space-y-2 list-none">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Desain antarmuka modern yang bersih, rapi, dan sangat mudah dipahami.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Onboarding cepat bagi agen CS baru tanpa memerlukan pelatihan teknis rumit.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Navigasi instan untuk mengecek seluruh data performa penjualan harian.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Why Item 2 (Default Open with Bullet Points) -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-300">
                        <button 
                            @click="toggle('why-2')" 
                            type="button"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-800"
                        >
                            <span>Your data is securely protected</span>
                            <span 
                                class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                x-text="isOpen('why-2') ? '−' : '+'"
                            ></span>
                        </button>
                        <div 
                            x-show="isOpen('why-2')" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="px-5 sm:px-6 pb-5 pt-2 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        >
                            <p class="font-medium text-slate-700 mb-2">Keep your business data safe with a reliable security system:</p>
                            <ul class="space-y-2 list-none">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Enkripsi data tingkat tinggi untuk menjaga privasi kontak dan omset bisnis.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Pencadangan (backup) otomatis berkala pada infrastruktur cloud berstandar ISO.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Manajemen hak akses bertingkat untuk mencegah kebocoran data pelanggan.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Why Item 3 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-300">
                        <button 
                            @click="toggle('why-3')" 
                            type="button"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-800"
                        >
                            <span>Reliable after-sales service.</span>
                            <span 
                                class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                x-text="isOpen('why-3') ? '−' : '+'"
                            ></span>
                        </button>
                        <div 
                            x-show="isOpen('why-3')" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="px-5 sm:px-6 pb-5 pt-2 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        >
                            <ul class="space-y-2 list-none">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Dukungan tim technical support yang siap membantu setiap hari kerja.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Sesi konsultasi operasional dan review fitur secara rutin untuk kelancaran bisnis.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Pusat panduan dokumentasi video dan artikel tutorial yang selalu diperbarui.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Why Item 4 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-300">
                        <button 
                            @click="toggle('why-4')" 
                            type="button"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-800"
                        >
                            <span>Integrated with warehouses and aggregators.</span>
                            <span 
                                class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                x-text="isOpen('why-4') ? '−' : '+'"
                            ></span>
                        </button>
                        <div 
                            x-show="isOpen('why-4')" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="px-5 sm:px-6 pb-5 pt-2 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        >
                            <ul class="space-y-2 list-none">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Sinkronisasi otomatis stok produk antara platform penjualan dan sistem gudang.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Terhubung langsung dengan aggregator ekspedisi untuk tarif pengiriman termurah.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Otomasi pick-up paket dan cetak thermal label resi massal dalam satu klik.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Why Item 5 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden transition-all duration-300">
                        <button 
                            @click="toggle('why-5')" 
                            type="button"
                            class="w-full px-5 sm:px-6 py-4 sm:py-5 text-left font-bold text-sm sm:text-base flex items-center justify-between gap-4 text-slate-800"
                        >
                            <span>Integrated with mobile apps.</span>
                            <span 
                                class="w-7 h-7 flex-shrink-0 flex items-center justify-center rounded-full bg-slate-100 text-slate-700 font-bold text-lg select-none"
                                x-text="isOpen('why-5') ? '−' : '+'"
                            ></span>
                        </button>
                        <div 
                            x-show="isOpen('why-5')" 
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            class="px-5 sm:px-6 pb-5 pt-2 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        >
                            <ul class="space-y-2 list-none">
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Pantau perkembangan omset dan penugasan CS langsung dari smartphone Anda.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Notifikasi instan setiap kali ada lead potensial atau closing pesanan baru.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="text-banyumax-500 font-bold text-base leading-none">•</span>
                                    <span>Tersedia untuk sistem operasi Android dan iOS dengan sinkronisasi waktu nyata.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: High Quality Aesthetic Image -->
            <div class="lg:col-span-6 flex items-center justify-center">
                <div class="w-full h-[480px] sm:h-[550px] rounded-3xl overflow-hidden shadow-2xl bg-slate-100 border border-slate-200">
                    <img 
                        src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1200&q=80" 
                        alt="Why Choose Banyumax Workspace" 
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- HOW IT WORKS SECTION (4 Cards Grid)                           -->
        <!-- ============================================================== -->
        <div class="space-y-12 pt-16">
            <div class="text-center max-w-2xl mx-auto">
                <h3 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                    How It Works
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                <!-- Card 1 -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200/80 shadow-glass-nav hover:shadow-xl hover:border-banyumax-300 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-100/80 text-banyumax-600 flex items-center justify-center mb-6 group-hover:bg-banyumax-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">Connect Your Business</h4>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Integrate your business needs and communication channels with Banyumax. Manage your data and business activities from one place.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200/80 shadow-glass-nav hover:shadow-xl hover:border-banyumax-300 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-100/80 text-banyumax-600 flex items-center justify-center mb-6 group-hover:bg-banyumax-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">Manage & Distribute Leads</h4>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Manage incoming leads and automatically distribute them to available Customer Service agents for faster, more organized, and balanced handling.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200/80 shadow-glass-nav hover:shadow-xl hover:border-banyumax-300 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-100/80 text-banyumax-600 flex items-center justify-center mb-6 group-hover:bg-banyumax-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">Monitor Activities & Performance</h4>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Track Customer Service activities, lead progress, campaigns, sales, and reports through an integrated dashboard.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="p-8 sm:p-10 rounded-3xl bg-white border border-slate-200/80 shadow-glass-nav hover:shadow-xl hover:border-banyumax-300 transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-100/80 text-banyumax-600 flex items-center justify-center mb-6 group-hover:bg-banyumax-500 group-hover:text-white transition-colors duration-300">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h4 class="text-xl sm:text-2xl font-bold text-slate-900 mb-3">Optimize & Grow</h4>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Use available data and insights to evaluate performance, improve customer service, and optimize your business strategies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
