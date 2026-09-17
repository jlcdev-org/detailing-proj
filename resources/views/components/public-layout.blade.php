@props(['title' => null, 'metaDescription' => null])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? 'ServiceFlow — Precision automotive care, ceramic protection, and master-grade detailing.' }}">

    <title>{{ $title ? $title . ' — ServiceFlow' : 'ServiceFlow — Precision Auto Care' }}</title>

    {{-- Material Symbols --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-surface text-on-surface font-sans antialiased">

    {{-- Sticky Header / Navigation --}}
    <header
        x-data="{ mobileOpen: false, scrolled: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
        :class="scrolled ? 'shadow-md bg-surface-container-lowest/95 backdrop-blur-2xl' : 'bg-surface-container-lowest/80 backdrop-blur-xl'"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-outline-variant/20"
    >
        <div class="max-w-7xl mx-auto px-4 md:px-8">
            <div class="flex items-center justify-between h-16 lg:h-[72px]">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                    <div class="w-10 h-10 rounded-xl bg-inverse-surface flex items-center justify-center">
                        <svg viewBox="0 0 44 44" fill="none" class="w-7 h-7">
                            <path d="M6 24 C6 14, 14 8, 24 8 C30 8, 32 11, 32 11 C32 11, 29 14, 25 14 C18 14, 13 18, 12 24 Z" fill="url(#sf_g)"/>
                            <path d="M10 28 C14 28, 21 27, 29 22 C32 20, 34 17, 34 17 C34 17, 31 21, 26 24 C20 27, 14 28, 10 28 Z" fill="#60A5FA"/>
                            <circle cx="24" cy="16" r="3" fill="#FFFFFF"/>
                            <path d="M18 24 L22 30 L30 22" stroke="#38BDF8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <defs><linearGradient id="sf_g" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#3B82F6"/><stop offset="100%" stop-color="#1D4ED8"/></linearGradient></defs>
                        </svg>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-lg font-extrabold tracking-tight text-on-surface leading-tight">Service<span class="text-primary-container">Flow</span></span>
                        <span class="text-[9px] font-semibold tracking-[1.5px] text-outline uppercase leading-none hidden sm:block">Precision Auto Care</span>
                    </div>
                </a>

                {{-- Desktop Navigation --}}
                <nav class="hidden lg:flex items-center gap-1">
                    @php
                        $navItems = [
                            ['route' => 'home', 'label' => 'Home', 'icon' => 'home'],
                            ['route' => 'services', 'label' => 'Services', 'icon' => 'local_car_wash'],
                            ['route' => 'packages', 'label' => 'Packages', 'icon' => 'stars'],
                            ['route' => 'about', 'label' => 'About', 'icon' => 'info'],
                            ['route' => 'contact', 'label' => 'Contact', 'icon' => 'mail'],
                        ];
                    @endphp
                    @foreach($navItems as $item)
                        <a
                            href="{{ route($item['route']) }}"
                            class="flex items-center gap-1.5 px-4 py-2 rounded-xl text-sm font-semibold transition-all
                                {{ request()->routeIs($item['route']) ? 'bg-surface-container-high text-primary' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}"
                        >
                            <span class="material-symbols-outlined text-[18px]">{{ $item['icon'] }}</span>
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </nav>

                {{-- Desktop CTA --}}
                <div class="hidden lg:flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="px-4 py-2 rounded-xl text-sm font-semibold text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-all">
                        Inquiry
                    </a>
                    <a href="{{ route('contact') }}#booking" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary-container text-on-primary text-sm font-bold shadow-[0_8px_20px_-4px_rgba(37,99,235,0.4)] hover:bg-primary transition-all">
                        <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        Book a Service
                    </a>
                </div>

                {{-- Mobile Menu Button --}}
                <button
                    @click="mobileOpen = !mobileOpen"
                    class="lg:hidden flex items-center justify-center w-10 h-10 rounded-xl hover:bg-surface-container-low transition-colors"
                    :aria-label="mobileOpen ? 'Close menu' : 'Open menu'"
                >
                    <span class="material-symbols-outlined text-[24px]" x-text="mobileOpen ? 'close' : 'menu'"></span>
                </button>
            </div>
        </div>

        {{-- Mobile Navigation --}}
        <div
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-2"
            x-cloak
            class="lg:hidden border-t border-outline-variant/20 bg-surface-container-lowest/98 backdrop-blur-2xl"
        >
            <nav class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1">
                @foreach($navItems as $item)
                    <a
                        href="{{ route($item['route']) }}"
                        @click="mobileOpen = false"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-semibold transition-all
                            {{ request()->routeIs($item['route']) ? 'bg-surface-container-high text-primary' : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low' }}"
                    >
                        <span class="material-symbols-outlined text-[20px]">{{ $item['icon'] }}</span>
                        {{ $item['label'] }}
                    </a>
                @endforeach
                <div class="border-t border-outline-variant/20 mt-2 pt-3">
                    <a href="{{ route('contact') }}#booking" class="flex items-center justify-center gap-2 px-5 py-3 rounded-xl bg-primary-container text-on-primary text-sm font-bold shadow-[0_8px_20px_-4px_rgba(37,99,235,0.4)]">
                        <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                        Book a Service
                    </a>
                </div>
            </nav>
        </div>
    </header>

    {{-- Page Content --}}
    <main class="pt-16 lg:pt-[72px]">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="w-full bg-surface-container-lowest shadow-[0_-1px_8px_rgba(0,0,0,0.03)]">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                {{-- Brand Column --}}
                <div class="flex flex-col gap-4">
                    <a href="{{ route('home') }}" class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-inverse-surface flex items-center justify-center">
                            <svg viewBox="0 0 44 44" fill="none" class="w-5 h-5">
                                <path d="M6 24 C6 14, 14 8, 24 8 C30 8, 32 11, 32 11 C32 11, 29 14, 25 14 C18 14, 13 18, 12 24 Z" fill="url(#sf_g2)"/>
                                <path d="M10 28 C14 28, 21 27, 29 22 C32 20, 34 17, 34 17 C34 17, 31 21, 26 24 C20 27, 14 28, 10 28 Z" fill="#60A5FA"/>
                                <circle cx="24" cy="16" r="3" fill="#FFFFFF"/>
                                <path d="M18 24 L22 30 L30 22" stroke="#38BDF8" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <defs><linearGradient id="sf_g2" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="#3B82F6"/><stop offset="100%" stop-color="#1D4ED8"/></linearGradient></defs>
                            </svg>
                        </div>
                        <span class="text-base font-extrabold tracking-tight text-on-surface">Service<span class="text-primary-container">Flow</span></span>
                    </a>
                    <p class="text-sm text-on-surface-variant leading-relaxed">
                        Precision auto care, ceramic protection, and master-grade detailing engineered for luxury vehicles and discerning collectors.
                    </p>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed w-fit">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        <span class="text-xs uppercase tracking-wider font-semibold">100% Satisfaction Guarantee</span>
                    </div>
                </div>

                {{-- Services Column --}}
                <div class="flex flex-col gap-3">
                    <h4 class="text-sm font-bold text-on-surface uppercase tracking-wider mb-1">Services & Tiers</h4>
                    <ul class="flex flex-col gap-2 text-sm text-on-surface-variant">
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Motor Wash</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Basic Car Wash</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Interior Detailing</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Exterior Detailing</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Full Detail Suite</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Engine Wash</a></li>
                    </ul>
                </div>

                {{-- Company Column --}}
                <div class="flex flex-col gap-3">
                    <h4 class="text-sm font-bold text-on-surface uppercase tracking-wider mb-1">Company</h4>
                    <ul class="flex flex-col gap-2 text-sm text-on-surface-variant">
                        <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">Our Team</a></li>
                        <li><a href="{{ route('packages') }}" class="hover:text-primary transition-colors">Packages & Offers</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact & Inquiry</a></li>
                    </ul>
                </div>

                {{-- Contact Column --}}
                <div class="flex flex-col gap-3">
                    <h4 class="text-sm font-bold text-on-surface uppercase tracking-wider mb-1">Visit Us</h4>
                    <div class="flex flex-col gap-3 text-sm text-on-surface-variant">
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">location_on</span>
                            <span>742 Motorsport Blvd, Suite 100, Metro District</span>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">schedule</span>
                            <div>
                                <div>Mon – Sat: 7:30 AM – 7:00 PM</div>
                                <div>Sun: 9:00 AM – 5:00 PM</div>
                            </div>
                        </div>
                        <div class="flex items-start gap-2">
                            <span class="material-symbols-outlined text-primary text-[18px] mt-0.5">call</span>
                            <span>(800) 555-SERV (7378)</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom Bar --}}
            <div class="mt-10 pt-6 border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p class="text-xs text-on-surface-variant">&copy; {{ date('Y') }} ServiceFlow Precision Auto Care. All rights reserved.</p>
                <div class="flex items-center gap-4 text-xs text-on-surface-variant">
                    <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-primary transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
