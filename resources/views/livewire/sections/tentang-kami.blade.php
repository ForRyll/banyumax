<section 
    id="tentang-kami" 
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
    class="min-h-screen relative py-24 sm:py-32 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden"
>
    <div class="max-w-7xl mx-auto space-y-24 sm:space-y-32">
        <!-- Row 1: About Banyumax -->
        <div 
            class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center transform transition-all duration-700 ease-out"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <div class="lg:col-span-5 flex items-center justify-center p-8 sm:p-12 bg-slate-50/70 rounded-3xl border border-slate-100 shadow-sm">
                <img src="{{ asset('images/logo.png') }}" alt="Banyumax Logo" class="h-16 sm:h-20 w-auto object-contain">
            </div>

            <div class="lg:col-span-7">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-banyumax-500 text-white text-xs font-semibold mb-5 shadow-sm">
                    About Banyumax
                </div>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Integrated Customer Service Software for Faster and Maximized Business Growth
                </h2>
                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-relaxed">
                    Banyumax helps maximize your business's sales lead conversions. With Banyumax, your CS team can respond faster, more easily, and more accurately, while working more efficiently to turn every lead into a valuable business opportunity.
                </p>
            </div>
        </div>

        <!-- Row 2: Problem -->
        <div 
            class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center transform transition-all duration-700 ease-out delay-150"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <div class="lg:col-span-6 order-2 lg:order-1">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-banyumax-500 text-white text-xs font-semibold mb-5 shadow-sm">
                    Problem
                </div>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Complex Business Management
                </h3>
                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-relaxed">
                    The high volume of leads and business activities makes the management process increasingly complex. Manual lead distribution, slow customer service responses, and fragmented data can hinder productivity and lead to missed business opportunities.
                </p>
            </div>

            <div class="lg:col-span-6 order-1 lg:order-2">
                <div class="w-full h-72 sm:h-80 bg-gradient-to-br from-slate-100 via-cyan-50/50 to-slate-100 rounded-3xl border border-slate-200/80 shadow-inner flex items-center justify-center p-8 relative overflow-hidden group">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-banyumax-200/40 rounded-full blur-2xl"></div>
                    <div class="text-center p-6 bg-white/80 backdrop-blur-md rounded-2xl border border-white/80 shadow-md max-w-sm">
                        <div class="w-12 h-12 mx-auto rounded-xl bg-red-50 text-red-500 flex items-center justify-center mb-3">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <h4 class="text-sm font-bold text-slate-800">Tantangan Operasional</h4>
                        <p class="text-xs text-slate-500 mt-1">Lead menumpuk, respon lambat, dan data tersebar di berbagai tempat.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Solution -->
        <div 
            class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-center transform transition-all duration-700 ease-out delay-300"
            :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'"
        >
            <div class="lg:col-span-6">
                <div class="w-full h-72 sm:h-80 bg-gradient-to-br from-cyan-50 via-banyumax-100/40 to-blue-50 rounded-3xl border border-banyumax-200/70 shadow-inner flex items-center justify-center p-8 relative overflow-hidden group">
                    <div class="absolute -left-10 -top-10 w-40 h-40 bg-banyumax-300/30 rounded-full blur-2xl"></div>
                    <div class="text-center p-6 bg-white/90 backdrop-blur-md rounded-2xl border border-white/90 shadow-md max-w-sm">
                        <div class="w-12 h-12 mx-auto rounded-xl bg-banyumax-100 text-banyumax-600 flex items-center justify-center mb-3">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h4 class="text-sm font-bold text-slate-800">Solusi Terpadu Banyumax</h4>
                        <p class="text-xs text-slate-500 mt-1">Otomasi alur CS, distribusi leads instan, dan pelaporan terpadu real-time.</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-6">
                <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-banyumax-500 text-white text-xs font-semibold mb-5 shadow-sm">
                    Solution
                </div>
                <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Integrated Solution in One Platform
                </h3>
                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-relaxed">
                    Banyumax helps businesses work more efficiently by managing Customer Service, leads, campaigns, reports, financing, logistics, and customer loyalty in one integrated platform.
                </p>
            </div>
        </div>
    </div>
</section>
