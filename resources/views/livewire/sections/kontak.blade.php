<section 
    id="kontak" 
    x-data="{
        openFaq: 0,
        faqs: [
            {
                q: 'What is Humanusia?',
                a: `HUMANUSIA is an indispensable personnel information system that plays a vital role in ensuring the smooth operation of a company. By integrating personnel, management, and administrative data, HUMANUSIA is designed to facilitate efficient management and easy access to employee information.<br><br>With HUMANUSIA, companies can organize employee information quickly and easily. From managing personal data to employment history, this app streamlines the search for the information needed for smarter decision-making.<br><br>Increase your HR team's productivity and effectiveness with HUMANUSIA. Get instant access to powerful features, including automated attendance management and faster processing of leave, business travel, and overtime application forms.`
            },
            {
                q: 'Who should see Humanusia?',
                a: 'HUMANUSIA dirancang untuk para direktur, manajer HRD, staf operasional personalia, dan seluruh tim perusahaan yang membutuhkan sistem informasi terpusat untuk efisiensi pengelolaan data karyawan.'
            },
            {
                q: 'How does Humanusia\'s presence help the company\'s development?',
                a: 'Dengan otomatisasi manajemen personalia, absensi digital, dan rekapitulasi data administratif secara real-time, Humanusia membantu perusahaan mengurangi beban kerja manual hingga 70% dan meningkatkan produktivitas organisasi.'
            },
            {
                q: 'What if my company wants to subscribe to Humanusia?',
                a: 'Perusahaan Anda dapat langsung memilih paket fleksibel yang tersedia atau menghubungi tim kami melalui email info@banyumax.id untuk mendapatkan demo gratis serta konsultasi kebutuhan spesifik perusahaan.'
            },
            {
                q: 'What if my company wants to subscribe to Humanusia?',
                a: 'Kami menyediakan skema berlangganan bulanan maupun tahunan dengan dukungan tim teknis khusus untuk proses implementasi dan integrasi data perusahaan.'
            },
            {
                q: 'What are the best feature recommendations from Humanusia?',
                a: 'Fitur rekomendasi unggulan mencakup Employee Database Management, Automated Attendance Tracking, Online Leave & Business Travel Approval, serta HR Analytics Dashboard.'
            }
        ],
        toggle(index) {
            this.openFaq = this.openFaq === index ? null : index;
        }
    }"
    class="min-h-screen relative py-20 sm:py-28 px-4 sm:px-6 lg:px-8 bg-[#EBF7F9] overflow-hidden"
>
    <div class="max-w-4xl mx-auto space-y-12 sm:space-y-16">
        <!-- Header -->
        <div class="text-center max-w-2xl mx-auto">
            <h2 class="text-4xl sm:text-5xl font-extrabold text-slate-900 tracking-tight">
                FAQ
            </h2>
        </div>

        <!-- FAQ Dropdown List matching Figma exact design -->
        <div class="space-y-4">
            <template x-for="(faq, index) in faqs" :key="index">
                <div class="bg-white rounded-3xl border border-slate-200/70 shadow-sm overflow-hidden transition-all duration-300">
                    <button 
                        @click="toggle(index)" 
                        type="button"
                        class="w-full px-6 sm:px-8 py-5 sm:py-6 text-left flex items-center justify-between gap-4 font-bold text-base sm:text-lg text-slate-900 focus:outline-none"
                    >
                        <span x-text="faq.q"></span>
                        <span 
                            class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0 text-2xl font-normal text-slate-600 select-none"
                            x-text="openFaq === index ? '−' : '+'"
                        ></span>
                    </button>

                    <!-- Expanded Content -->
                    <div 
                        x-show="openFaq === index" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="px-6 sm:px-8 pb-6 sm:pb-8 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100"
                        x-html="faq.a"
                    ></div>
                </div>
            </template>
        </div>
    </div>
</section>
