<!DOCTYPE html>
<html lang="uz" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ICTE - International Conference</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;700;900&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        .font-heading {
            font-family: 'Outfit', sans-serif;
        }

        /* Glassmorphism navbar uchun */
        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* About kartochkalari uchun yumshoq shisha effekti */
        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(241, 245, 249, 0.5);
        }

        /* Hero qismidagi qorong'u gradient qatlami */
        .hero-overlay-gradient {
            background: linear-gradient(to bottom, rgba(15, 23, 42, 0.8) 0%, rgba(30, 58, 138, 0.9) 100%);
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden" x-data="{ scrolled: false, mobileMenu: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)">

    <nav :class="scrolled ? 'glass-nav shadow-sm py-2' : 'bg-transparent py-4'"
        class="fixed top-0 w-full z-50 transition-all duration-500 ease-in-out">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex-shrink-0 flex items-center gap-2" data-aos="fade-down" data-aos-duration="800">
                    <a href="#" class="flex items-center gap-2">
                        <img src="/logo2026.png" alt="ICTE Logo" class="h-10 w-auto"
                            onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                        <span class="text-2xl font-black tracking-tighter text-white hidden"
                            :class="scrolled ? 'text-blue-900' : 'text-white'">ICTE 2026</span>
                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8" data-aos="fade-down" data-aos-duration="800"
                    data-aos-delay="100">
                    <a href="#home" class="text-[15px] font-medium hover:text-blue-400 transition"
                        :class="scrolled ? 'text-slate-700' : 'text-white/90'">{{ __('main2026.main_page') }}</a>
                    <a href="#about" class="text-[15px] font-medium hover:text-blue-400 transition"
                        :class="scrolled ? 'text-slate-700' : 'text-white/90'">{{ __('main2026.about_conference') }}</a>
                    <a href="#goals" class="text-[15px] font-medium hover:text-blue-400 transition"
                        :class="scrolled ? 'text-slate-700' : 'text-white/90'">{{ __('main2026.goals') }}</a>
                    <a href="#maps" class="text-[15px] font-medium hover:text-blue-400 transition"
                        :class="scrolled ? 'text-slate-700' : 'text-white/90'">{{ __('main2026.location') }}</a>

                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false"
                            class="flex items-center space-x-1 text-[15px] font-medium transition hover:text-blue-400"
                            :class="scrolled ? 'text-slate-700' : 'text-white/90'">
                            <span>{{ __('main2026.language') }}</span>
                            <svg class="w-4 h-4 transition-transform" :class="{ 'rotate-180': open }" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            class="absolute right-0 mt-2 w-40 bg-white rounded-xl shadow-xl py-2 z-50 ring-1 ring-black ring-opacity-5 overflow-hidden"
                            style="display: none;">
                            <a href="{{ route('lang.switch', 'uz') }}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"><span
                                    class="mr-2">🇺🇿</span> O‘zbekcha</a>
                            <a href="{{ route('lang.switch', 'ru') }}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"><span
                                    class="mr-2">🇷🇺</span> Русский</a>
                            <a href="{{ route('lang.switch', 'en') }}"
                                class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 transition"><span
                                    class="mr-2">🇬🇧</span> English</a>
                        </div>
                    </div>

                    <a href="/conferences/2025" class="text-[15px] font-medium hover:text-blue-400 transition"
                        :class="scrolled ? 'text-slate-700' : 'text-white/90'">ICTE - 2025</a>


                    {{-- <a href="/files/program.docx" download
                        class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-semibold text-sm transition-all shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50 hover:-translate-y-0.5">
                        {{ __('main2026.program') }}
                    </a> --}}
                </div>

                <div class="md:hidden flex items-center">
                    <button @click="mobileMenu = !mobileMenu"
                        class="transition p-2 rounded-md focus:outline-none hover:bg-white/10">
                        <svg class="w-8 h-8" :class="scrolled ? 'text-slate-800' : 'text-white'" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="mobileMenu" x-transition
            class="md:hidden bg-white shadow-xl absolute w-full top-full left-0 z-40 overflow-hidden rounded-b-2xl"
            style="display: none;">
            <div class="px-4 py-6 space-y-4">
                <a href="#home" @click="mobileMenu = false"
                    class="block text-lg font-medium text-gray-800 hover:text-blue-600">{{ __('main2026.main_page') }}</a>
                <a href="#about" @click="mobileMenu = false"
                    class="block text-lg font-medium text-gray-800 hover:text-blue-600">{{ __('main2026.about_conference') }}</a>
                <a href="#goals" @click="mobileMenu = false"
                    class="block text-lg font-medium text-gray-800 hover:text-blue-600">{{ __('main2026.goals') }}</a>
                <a href="/files/program.docx" download class="block text-lg font-medium text-blue-600">
                    {{ __('main2026.program') }}
                </a>
                <div class="border-t border-gray-100 pt-4">
                    <p class="text-sm text-gray-400 mb-3 uppercase font-semibold">{{ __('main2026.language') }}</p>
                    <div class="flex space-x-6">
                        <a href="{{ route('lang.switch', 'uz') }}"
                            class="text-base font-bold text-slate-700 hover:text-blue-600">UZ 🇺🇿</a>
                        <a href="{{ route('lang.switch', 'ru') }}"
                            class="text-base font-bold text-slate-700 hover:text-blue-600">RU 🇷🇺</a>
                        <a href="{{ route('lang.switch', 'en') }}"
                            class="text-base font-bold text-slate-700 hover:text-blue-600">EN 🇬🇧</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden"
        x-data="{ activeSlide: 0, slides: ['/img/registan1.jpg', '/img/registan2.jpg', '/img/registan3.jpg'] }" x-init="setInterval(() => { activeSlide = activeSlide === slides.length - 1 ? 0 : activeSlide + 1 }, 4000)">

        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="activeSlide === index" x-transition:enter="transition ease-in-out duration-1000"
                x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-1000 absolute"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-105"
                class="absolute inset-0 w-full h-full bg-cover bg-center z-0"
                :style="`background-image: url('${slide}');`">
            </div>
        </template>

        <div class="absolute inset-0 hero-overlay-gradient z-10 opacity-90"></div>

        <div class="absolute inset-0 overflow-hidden z-20 pointer-events-none opacity-40 mix-blend-soft-light">
            <div
                class="absolute top-[-10%] left-[-10%] w-[40rem] h-[40rem] bg-blue-600 rounded-full filter blur-[100px] animate-blob">
            </div>
            <div
                class="absolute bottom-[-10%] right-[-10%] w-[35rem] h-[35rem] bg-purple-600 rounded-full filter blur-[100px] animate-blob animation-delay-2000">
            </div>
            <div
                class="absolute top-[40%] left-[60%] w-[30rem] h-[30rem] bg-cyan-500 rounded-full filter blur-[100px] animate-blob animation-delay-4000">
            </div>
        </div>

        <div class="relative z-30 text-center px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto mt-16">
            <h2 data-aos="fade-down" data-aos-delay="200"
                class="inline-block px-4 py-1.5 mb-6 rounded-full bg-blue-500/20 border border-blue-400/30 text-blue-200 font-semibold tracking-wider uppercase text-sm sm:text-[15px]">
                {{ __('main2026.header_section.subname') }}
            </h2>

            <h1 data-aos="fade-up" data-aos-delay="400"
                class="text-3xl sm:text-4xl md:text-5xl llg:text-[3rem] font-extrabold text-white tracking-tight leading-[1.1] mb-8 drop-shadow-sm">
                {{ __('main2026.header_section.name') }}
            </h1>

            <div data-aos="fade-up" data-aos-delay="600"
                class="flex flex-col sm:flex-row items-center justify-center gap-5 mt-10">
                <div
                    class="flex items-center gap-2 px-6 py-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-full text-white font-medium">
                    <svg class="w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    {{ __('main2026.header_section.city') }}
                </div>
                <a href="#about"
                    class="w-full sm:w-auto px-8 py-3.5 bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white rounded-full font-bold shadow-lg shadow-blue-600/40 transition-all transform hover:-translate-y-1 hover:shadow-xl">
                    Batafsil ma'lumot
                </a>

            </div>
        </div>

        <a href="#about"
            class="absolute bottom-10 left-1/2 transform -translate-x-1/2 z-30 animate-bounce cursor-pointer p-2 hover:bg-white/10 rounded-full transition">
            <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </a>
    </section>
    <div class="border-b border-gray-100 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6" x-data="countdown()"
                x-init="startTimer()">

                <div class="text-center md:text-left flex items-center gap-4">
                    <div
                        class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-blue-50 text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-slate-800">Konferensiya boshlanishiga qoldi:</h3>
                    </div>
                </div>

                <div class="flex items-center gap-4 sm:gap-8">

                    <div class="text-center">
                        <span class="block text-3xl font-bold text-slate-900 tracking-tight" x-text="days">00</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Kun</span>
                    </div>

                    <div class="hidden sm:block w-px h-8 bg-gray-200"></div>

                    <div class="text-center">
                        <span class="block text-3xl font-bold text-slate-900 tracking-tight" x-text="hours">00</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Soat</span>
                    </div>

                    <div class="hidden sm:block w-px h-8 bg-gray-200"></div>

                    <div class="text-center">
                        <span class="block text-3xl font-bold text-slate-900 tracking-tight"
                            x-text="minutes">00</span>
                        <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Daqiqa</span>
                    </div>

                    <div class="hidden sm:block w-px h-8 bg-gray-200"></div>

                    <div class="text-center">
                        <span class="block text-3xl font-bold text-blue-600 tracking-tight" x-text="seconds">00</span>
                        <span class="text-xs text-blue-400 font-medium uppercase tracking-wider">Soniya</span>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        function countdown() {
            return {
                targetDate: new Date('2026-06-03T09:00:00').getTime(),
                days: '00',
                hours: '00',
                minutes: '00',
                seconds: '00',
                startTimer() {
                    const update = () => {
                        const now = new Date().getTime();
                        const distance = this.targetDate - now;
                        if (distance < 0) return;
                        this.days = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, '0');
                        this.hours = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(
                            2, '0');
                        this.minutes = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, '0');
                        this.seconds = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, '0');
                    };
                    update();
                    setInterval(update, 1000);
                }
            }
        }
    </script>

    <section class="py-20 relative bg-white overflow-hidden">
        <div
            class="absolute top-0 left-0 w-64 h-64 bg-blue-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-64 h-64 bg-indigo-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-start gap-12">

                <div class="w-full lg:w-5/12 relative" data-aos="fade-right">
                    <div class="relative rounded-[2.5rem] overflow-hidden  border-4 border-white">
                        <img src="/img/rector.jpg" alt="Rustam Ibragimovich Xalmuradov"
                            class="w-full h-auto object-cover transform hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-900/60 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8 text-white">
                            <h3 class="text-2xl font-bold font-heading leading-tight">
                                {{ __('main2026.rector_section.name') }}</h3>
                            <p class="text-blue-200 text-sm font-medium mt-1 uppercase tracking-wider">
                                {{ __('main2026.rector_section.position') }}</p>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-2xl text-center">
                            <span class="block text-2xl font-bold text-blue-600">200+</span>
                            <span
                                class="text-xs text-slate-500 font-medium uppercase">{{ __('main2026.rector_section.stats_publications') }}</span>
                        </div>
                        <div class="bg-indigo-50 p-4 rounded-2xl text-center">
                            <span class="block text-2xl font-bold text-indigo-600">Top 1000</span>
                            <span
                                class="text-xs text-slate-500 font-medium uppercase">{{ __('main2026.rector_section.stats_rating') }}</span>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-7/12" data-aos="fade-left">
                    <span
                        class="text-blue-600 font-bold tracking-wider uppercase text-sm mb-2 block">{{ __('main2026.rector_section.welcome_title') }}</span>
                    <h2 class="text-3xl font-extrabold text-slate-900 mb-6 font-heading">
                        {{ __('main2026.rector_section.headline') }}
                    </h2>

                    <div
                        class="bg-slate-50 border-l-4 border-blue-500 p-6 rounded-r-xl mb-8 italic text-slate-700 leading-relaxed shadow-sm">
                        <svg class="w-8 h-8 text-blue-300 mb-2" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.017 21L14.017 18C14.017 16.0547 15.392 14.6309 16.9043 14.1562C16.9043 12.0645 15.353 10.9668 12.8242 10.9668L12.8242 8C16.7383 8 20.25 10.2734 20.25 15.543V21L14.017 21ZM5.01758 21L5.01758 18C5.01758 16.0547 6.39258 14.6309 7.9043 14.1562C7.9043 12.0645 6.35352 10.9668 3.82422 10.9668L3.82422 8C7.73828 8 11.25 10.2734 11.25 15.543V21L5.01758 21Z" />
                        </svg>
                        <p class="mb-2">
                            "{{ __('main2026.rector_section.quote') }}"
                        </p>
                        <p class="font-bold text-slate-900 mt-2">— {{ __('main2026.rector_section.wishes') }}</p>
                    </div>

                    <div class="prose prose-blue text-slate-600 mb-6">
                        <p>{{ __('main2026.rector_section.bio') }}</p>
                        <p>{{ __('main2026.rector_section.achievements') }}</p>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-24 relative overflow-hidden bg-slate-50/50">
        <div class="absolute inset-0 pointer-events-none -z-10 overflow-hidden">
            <div
                class="absolute top-0 right-0 w-[40rem] h-[40rem] bg-blue-100/40 rounded-full filter blur-[120px] opacity-70">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[40rem] h-[40rem] bg-indigo-100/40 rounded-full filter blur-[120px] opacity-70">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <span
                    class="text-blue-600 font-bold tracking-wider uppercase text-sm pl-2 border-l-4 border-blue-500">{{ __('main2026.about_conference') }}</span>
                <h2 class="mt-4 text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight">
                    {{ __('main2026.about_section.suggestion') }}</h2>
                <div class="mt-6 text-lg text-slate-600 leading-relaxed">
                    {!! __('main2026.about_section.sections') !!}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10">
                <div class="group glass-card rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(59,130,246,0.1)] transition-all duration-500 hover:-translate-y-3 relative border-t-4 border-blue-500/50"
                    data-aos="fade-up" data-aos-delay="100">
                    <div
                        class="w-16 h-16 mb-8 rounded-2xl flex items-center justify-center bg-gradient-to-br from-blue-50 to-blue-100/50 text-blue-600 transition-all duration-500 group-hover:from-blue-600 group-hover:to-indigo-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-blue-500/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-blue-700 transition">
                        {{ __('main2026.about_section.samsu') }}</h3>
                    <div
                        class="inline-block px-3 py-1 bg-blue-50 text-blue-700 rounded-full text-sm font-semibold mb-5">
                        {{ __('main2026.about_section.date1') }}
                    </div>
                    <div class="text-slate-600 text-[15px] leading-relaxed">
                        {!! __('main2026.about_section.sections') !!}
                    </div>
                </div>

                <div class="group glass-card rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(59,130,246,0.1)] transition-all duration-500 hover:-translate-y-3 relative border-t-4 border-indigo-500/50"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="w-16 h-16 mb-8 rounded-2xl flex items-center justify-center bg-gradient-to-br from-indigo-50 to-indigo-100/50 text-indigo-600 transition-all duration-500 group-hover:from-indigo-600 group-hover:to-purple-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-indigo-500/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-indigo-700 transition">
                        {{ __('main2026.about_section.inyaz') }}</h3>
                    <div
                        class="inline-block px-3 py-1 bg-indigo-50 text-indigo-700 rounded-full text-sm font-semibold mb-5">
                        {{ __('main2026.about_section.date2') }}
                    </div>
                    <div class="text-slate-600 text-[15px] leading-relaxed">
                        {!! __('main2026.about_section.section2') !!}
                    </div>
                </div>

                <div class="group glass-card rounded-[2rem] p-8 shadow-[0_8px_30px_rgb(0,0,0,0.04)] hover:shadow-[0_20px_40px_rgba(59,130,246,0.1)] transition-all duration-500 hover:-translate-y-3 relative border-t-4 border-purple-500/50"
                    data-aos="fade-up" data-aos-delay="300">
                    <div
                        class="w-16 h-16 mb-8 rounded-2xl flex items-center justify-center bg-gradient-to-br from-purple-50 to-purple-100/50 text-purple-600 transition-all duration-500 group-hover:from-purple-600 group-hover:to-pink-600 group-hover:text-white group-hover:shadow-lg group-hover:shadow-purple-500/30">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-3 group-hover:text-purple-700 transition">
                        {{ __('main2026.about_section.ShahrisabzSPI') }}</h3>
                    <div
                        class="inline-block px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-semibold mb-5">
                        {{ __('main2026.about_section.date3') }}
                    </div>
                    <div class="text-slate-600 text-[15px] leading-relaxed">
                        {!! __('main2026.about_section.section3') !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="goals" class="py-20 bg-white relative">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-10" data-aos="fade-up">
                {{ __('main2026.goals_section.name') }}</h2>
            <div class="prose prose-lg prose-blue mx-auto text-slate-600 leading-relaxed bg-slate-50 p-10 rounded-[2rem] border border-slate-100 shadow-sm relative z-10"
                data-aos="fade-up" data-aos-delay="100">
                {!! __('main2026.goals_section.goals') !!}
            </div>
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-6xl h-[500px] bg-gradient-to-r from-blue-50/50 to-indigo-50/50 rounded-full filter blur-[100px] opacity-50 pointer-events-none z-0">
        </div>
    </section>

    <section id="maps" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('/img/map-pattern.svg')] opacity-5"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="text-3xl sm:text-4xl font-bold text-center mb-16" data-aos="fade-up">
                {{ __('main2026.location') }}
            </h2>

            <div class="space-y-20">
                <div class="flex flex-col lg:flex-row gap-10 items-center" data-aos="fade-right">
                    <div class="lg:w-1/2 lg:pr-10">
                        <h3 class="text-3xl font-bold text-blue-400 mb-4">
                            {{ __('main2026.locations_section.only_date1') }}</h3>
                        <div class="w-20 h-1 bg-blue-500 mb-6"></div>
                        <p class="text-slate-300 text-lg leading-relaxed mb-8">
                            {{ __('main2026.locations_section.text1') }}</p>
                        <a href="#"
                            class="inline-flex items-center text-blue-400 hover:text-blue-300 transition font-medium">
                            Google Xaritada ochish <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="lg:w-1/2 w-full h-[400px] bg-slate-800 rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 ring-1 ring-white/10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.146513556798!2d66.9676363157087!3d39.64867797946069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18ba547650ad%3A0x235049018241610!2sSamarkand%20State%20University!5e0!3m2!1sen!2suz!4v1677654321000!5m2!1sen!2suz"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row-reverse gap-10 items-center" data-aos="fade-left">
                    <div class="lg:w-1/2 lg:pl-10">
                        <h3 class="text-3xl font-bold text-indigo-400 mb-4">
                            {{ __('main2026.locations_section.only_date2') }}</h3>
                        <div class="w-20 h-1 bg-indigo-500 mb-6"></div>
                        <p class="text-slate-300 text-lg leading-relaxed mb-8">
                            {{ __('main2026.locations_section.text2') }}</p>
                        <a href="#"
                            class="inline-flex items-center text-indigo-400 hover:text-indigo-300 transition font-medium">
                            Google Xaritada ochish <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    <div
                        class="lg:w-1/2 w-full h-[400px] bg-slate-800 rounded-3xl overflow-hidden shadow-2xl border border-slate-700/50 ring-1 ring-white/10">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3071.679257521757!2d66.95591571570903!3d39.65921437946147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4d18b14011c8dd%3A0x6c8867711566027!2sSamarkand%20State%20Institute%20of%20Foreign%20Languages!5e0!3m2!1sen!2suz!4v1677654400000!5m2!1sen!2suz"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="bg-white border-t border-gray-200 pt-20 pb-10 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="text-2xl font-bold text-center text-slate-900 mb-16" data-aos="fade-up">
                {{ __('main2026.contac_us_section.name') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16" data-aos="fade-up" data-aos-delay="100">
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100">
                    <h5 class="font-bold text-lg text-slate-900 mb-6 flex items-center">
                        <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
                        {{ __('main2026.about_section.samsu') }}
                    </h5>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>Axmedova Shahzoda <br> <strong>+998909098657</strong></span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <a href="mailto:shahzodaaxmedova@gmail.com"
                                class="text-blue-600 hover:underline transition">shahzodaaxmedova@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100">
                    <h5 class="font-bold text-lg text-slate-900 mb-6 flex items-center">
                        <span class="w-3 h-3 bg-indigo-500 rounded-full mr-3"></span>
                        {{ __('main2026.about_section.inyaz') }}
                    </h5>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-indigo-500 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>
                                Julmatova Saodat: <strong>+998975786875</strong><br>
                                Narzikulova Feruza: <strong>+998915569869</strong>
                            </span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-indigo-500 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <a href="mailto:sjulmatova@gmail.com"
                                class="text-blue-600 hover:underline transition">sjulmatova@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100">
                    <h5 class="font-bold text-lg text-slate-900 mb-6 flex items-center">
                        <span class="w-3 h-3 bg-purple-500 rounded-full mr-3"></span>
                        {{ __('main2026.about_section.ShahrisabzSPI') }}
                    </h5>
                    <ul class="space-y-4 text-sm text-slate-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-500 mr-3 mt-0.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.948V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span>Sardor Ximmatov <br> <strong>+99895 335 23 99</strong></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-slate-500 text-sm mb-4 md:mb-0">© 2026 ICTE International Conference. Barcha huquqlar
                    himoyalangan.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-slate-400 hover:text-blue-600 transition transform hover:scale-110">
                        <span class="sr-only">Telegram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                        </svg>
                    </a>
                    <a href="#" class="text-slate-400 hover:text-pink-600 transition transform hover:scale-110">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.85C2.492 3.85 4.016 2.31 7.267 2.163c1.265-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <a href="#home"
        class="fixed bottom-8 right-8 bg-blue-600/90 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 transition transform hover:-translate-y-1 z-40 backdrop-blur-sm"
        x-show="scrolled" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-10">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
            </path>
        </svg>
    </a>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Animatsiyalarni ishga tushirish
        AOS.init({
            duration: 800, // Animatsiya davomiyligi (ms)
            once: true, // Faqat bir marta ishlashi uchun
            offset: 100, // Trigger nuqtasi
            easing: 'ease-in-out-quad'
        });
    </script>

    <style>
        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            33% {
                transform: translate(50px, -50px) scale(1.2);
            }

            66% {
                transform: translate(-30px, 30px) scale(0.8);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }

        .animate-blob {
            animation: blob 10s infinite;
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }

        .animation-delay-4000 {
            animation-delay: 4s;
        }
    </style>
</body>

</html>
