<x-public-layout :title="'Services'">

    {{-- ═══════════════════════════════════════════════════════════════════════
         Section 1 — Breadcrumb & Status Banner
    ═══════════════════════════════════════════════════════════════════════ --}}
    <section class="bg-surface-container-low border-b border-outline-variant/20">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-3 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
            {{-- Breadcrumb --}}
            <nav class="flex items-center gap-1.5 text-sm text-on-surface-variant">
                <a href="{{ route('services') }}" class="hover:text-primary transition-colors font-medium">Catalog</a>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                <span class="text-on-surface font-semibold">All Treatments & Packages</span>
            </nav>

            {{-- Status & Trust Badges --}}
            <div class="flex items-center gap-4 flex-wrap">
                {{-- Availability Badge --}}
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container-lowest text-sm font-semibold text-on-surface shadow-sm">
                    <span class="relative flex h-2.5 w-2.5">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-tertiary"></span>
                    </span>
                    Next Bay Available: <span class="text-tertiary">Today 2:30 PM</span>
                </div>

                {{-- Trust Badge --}}
                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-xs font-semibold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[14px]">verified</span>
                    100% Deionized Lab Water
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
         Section 2 — Page Hero
    ═══════════════════════════════════════════════════════════════════════ --}}
    <section class="bg-surface">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 lg:py-16">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed text-xs font-bold uppercase tracking-widest mb-4">
                    <span class="material-symbols-outlined text-[14px]">auto_awesome</span>
                    Master Technician Care Directory
                </span>

                <h1 class="text-4xl lg:text-5xl font-extrabold tracking-tight text-on-surface leading-tight mb-4">
                    Service Catalog & Custom Care
                </h1>

                <p class="text-lg text-on-surface-variant leading-relaxed max-w-2xl">
                    Explore our full service menu — from express motor washes to multi-stage paint correction and ceramic coatings. Every treatment is engineered with lab-grade precision and performed by certified master technicians.
                </p>
            </div>

            {{-- Stats Strip --}}
            <div class="mt-8 flex flex-wrap items-center gap-6 lg:gap-10">
                <div class="flex items-center gap-2.5">
                    <div class="w-10 h-10 rounded-xl bg-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px] text-on-primary">local_car_wash</span>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-on-surface leading-none">18</p>
                        <p class="text-xs text-on-surface-variant font-medium">Services</p>
                    </div>
                </div>

                <div class="w-px h-8 bg-outline-variant/30 hidden sm:block"></div>

                <div class="flex items-center gap-2.5">
                    <div class="w-10 h-10 rounded-xl bg-tertiary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px] text-on-tertiary">star</span>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-on-surface leading-none">4.96</p>
                        <p class="text-xs text-on-surface-variant font-medium">Avg. Rating</p>
                    </div>
                </div>

                <div class="w-px h-8 bg-outline-variant/30 hidden sm:block"></div>

                <div class="flex items-center gap-2.5">
                    <div class="w-10 h-10 rounded-xl bg-secondary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-[20px] text-on-secondary">event_available</span>
                    </div>
                    <div>
                        <p class="text-2xl font-extrabold text-on-surface leading-none">2</p>
                        <p class="text-xs text-on-surface-variant font-medium">Bay Openings Today</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
         Section 3 — Search & Filter Bar
    ═══════════════════════════════════════════════════════════════════════ --}}
    <section
        class="bg-surface-container-lowest sticky top-16 lg:top-[72px] z-40 border-b border-outline-variant/20 shadow-sm"
        x-data="{
            search: '',
            activeCategory: 'all',
            activeVehicle: 'all',
            categories: [
                { key: 'all', label: 'All Services', icon: 'apps' },
                { key: 'quick', label: 'Quick Wash', icon: 'speed' },
                { key: 'detailing', label: 'Detailing', icon: 'auto_awesome' },
                { key: 'specialty', label: 'Specialty Care', icon: 'workspace_premium' },
                { key: 'addons', label: 'Add-ons', icon: 'add_circle' },
                { key: 'bundles', label: 'Bundles', icon: 'inventory_2' }
            ],
            vehicles: [
                { key: 'all', label: 'All Sizes' },
                { key: 'sedan', label: 'Sedan/Coupe' },
                { key: 'suv', label: 'SUV/Crossover' },
                { key: 'truck', label: 'Truck/Van' },
                { key: 'exotic', label: 'Exotic/Sports' }
            ]
        }"
    >
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-4 space-y-3">
            {{-- Top Row: Search + Vehicle Filters + Dropdowns --}}
            <div class="flex flex-col lg:flex-row lg:items-center gap-3">
                {{-- Search Input --}}
                <div class="relative flex-1 max-w-md">
                    <span class="material-symbols-outlined text-[20px] text-on-surface-variant absolute left-3 top-1/2 -translate-y-1/2 pointer-events-none">search</span>
                    <input
                        type="text"
                        x-model="search"
                        placeholder="Search services..."
                        class="w-full pl-10 pr-9 py-2.5 rounded-xl bg-surface-container-low border border-outline-variant/30 text-sm text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all"
                    >
                    <button
                        x-show="search.length > 0"
                        x-transition
                        @click="search = ''"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface transition-colors"
                    >
                        <span class="material-symbols-outlined text-[18px]">close</span>
                    </button>
                </div>

                {{-- Vehicle Class Filter Pills --}}
                <div class="flex items-center gap-1.5 flex-wrap">
                    <template x-for="v in vehicles" :key="v.key">
                        <button
                            @click="activeVehicle = v.key"
                            :class="activeVehicle === v.key
                                ? 'bg-primary text-on-primary shadow-sm'
                                : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface'"
                            class="px-3.5 py-1.5 rounded-full text-xs font-semibold transition-all whitespace-nowrap"
                            x-text="v.label"
                        ></button>
                    </template>
                </div>

                {{-- Dropdown Filters --}}
                <div class="flex items-center gap-2 ml-auto">
                    <select class="px-3 py-2 rounded-xl bg-surface-container-low border border-outline-variant/30 text-sm text-on-surface-variant font-medium focus:outline-none focus:ring-2 focus:ring-primary/30 cursor-pointer">
                        <option>Price Range</option>
                        <option>Under $50</option>
                        <option>$50 – $150</option>
                        <option>$150 – $300</option>
                        <option>$300+</option>
                    </select>
                    <select class="px-3 py-2 rounded-xl bg-surface-container-low border border-outline-variant/30 text-sm text-on-surface-variant font-medium focus:outline-none focus:ring-2 focus:ring-primary/30 cursor-pointer">
                        <option>Duration</option>
                        <option>Under 1 hr</option>
                        <option>1 – 3 hrs</option>
                        <option>3 – 5 hrs</option>
                        <option>Full Day</option>
                    </select>
                    <select class="px-3 py-2 rounded-xl bg-surface-container-low border border-outline-variant/30 text-sm text-on-surface-variant font-medium focus:outline-none focus:ring-2 focus:ring-primary/30 cursor-pointer">
                        <option>Sort By</option>
                        <option>Most Popular</option>
                        <option>Price: Low → High</option>
                        <option>Price: High → Low</option>
                        <option>Top Rated</option>
                    </select>
                </div>
            </div>

            {{-- Bottom Row: Category Scroll Pills --}}
            <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-hide -mx-1 px-1">
                <template x-for="cat in categories" :key="cat.key">
                    <button
                        @click="activeCategory = cat.key"
                        :class="activeCategory === cat.key
                            ? 'bg-primary text-on-primary shadow-sm'
                            : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container hover:text-on-surface'"
                        class="inline-flex items-center gap-1.5 px-4 py-2 rounded-full text-sm font-semibold transition-all whitespace-nowrap shrink-0"
                    >
                        <span class="material-symbols-outlined text-[18px]" x-text="cat.icon"></span>
                        <span x-text="cat.label"></span>
                    </button>
                </template>
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
         Section 4 — Services Grid
    ═══════════════════════════════════════════════════════════════════════ --}}
    <section class="bg-surface">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-10 lg:py-14">
            @php
                $services = [
                    [
                        'name' => 'Signature Ceramic Wash',
                        'price' => '$65',
                        'duration' => '45 mins',
                        'category' => 'Quick Wash',
                        'rating' => '4.9',
                        'reviews' => 142,
                        'description' => 'Hand wash with SiO2 ceramic soap, iron decontamination rinse, and air-dried finish for lasting hydrophobic protection.',
                        'features' => ['SiO2 Ceramic Soap', 'Iron Decontamination', 'Air-Dry Finish'],
                        'color' => 'bg-primary/10',
                        'icon' => 'local_car_wash',
                        'badge' => null,
                        'available' => true,
                    ],
                    [
                        'name' => 'Multi-Stage Paint Correction',
                        'price' => '$320',
                        'duration' => '5 hours',
                        'category' => 'Detailing',
                        'rating' => '5.0',
                        'reviews' => 87,
                        'description' => 'Three-stage machine polish to eliminate swirl marks, scratches, and oxidation. Restores factory-level gloss and clarity.',
                        'features' => ['3-Stage Polish', 'Swirl Removal', 'Gloss Restoration'],
                        'color' => 'bg-secondary/10',
                        'icon' => 'auto_fix_high',
                        'badge' => null,
                        'available' => true,
                    ],
                    [
                        'name' => 'Interior Deep Steam',
                        'price' => '$129',
                        'duration' => '2 hours',
                        'category' => 'Detailing',
                        'rating' => '4.8',
                        'reviews' => 203,
                        'description' => 'High-pressure steam extraction across all upholstery, carpets, and dashboard surfaces. Kills 99.9% of bacteria.',
                        'features' => ['Steam Extraction', 'Antibacterial Clean', 'UV Protectant'],
                        'color' => 'bg-tertiary/10',
                        'icon' => 'air',
                        'badge' => null,
                        'available' => true,
                    ],
                    [
                        'name' => 'Exterior Polish & Clay Seal',
                        'price' => '$169',
                        'duration' => '3 hours',
                        'category' => 'Specialty',
                        'rating' => '4.9',
                        'reviews' => 118,
                        'description' => 'Clay bar decontamination followed by single-stage machine polish and polymer sealant for up to 6 months of protection.',
                        'features' => ['Clay Bar Treatment', 'Machine Polish', 'Polymer Sealant'],
                        'color' => 'bg-primary/10',
                        'icon' => 'flare',
                        'badge' => null,
                        'available' => true,
                    ],
                    [
                        'name' => 'Full Detail Suite',
                        'price' => '$249',
                        'duration' => '4 hours',
                        'category' => 'Detailing',
                        'rating' => '5.0',
                        'reviews' => 316,
                        'description' => 'Our signature interior-and-exterior package — includes steam clean, clay bar, single-stage polish, and full dressing.',
                        'features' => ['Full Interior + Exterior', 'Clay & Polish', 'Complete Dressing'],
                        'color' => 'bg-tertiary/10',
                        'icon' => 'stars',
                        'badge' => 'Most Popular',
                        'available' => true,
                    ],
                    [
                        'name' => 'Express Motor Wash',
                        'price' => '$29',
                        'duration' => '20 mins',
                        'category' => 'Quick Wash',
                        'rating' => '4.7',
                        'reviews' => 489,
                        'description' => 'Quick contactless rinse, foam cannon application, and spot-free dry. Perfect for weekly maintenance washes.',
                        'features' => ['Contactless Rinse', 'Foam Cannon', 'Spot-Free Dry'],
                        'color' => 'bg-secondary/10',
                        'icon' => 'speed',
                        'badge' => null,
                        'available' => true,
                    ],
                    [
                        'name' => 'Engine Bay Steam Clean',
                        'price' => '$65',
                        'duration' => '45 mins',
                        'category' => 'Specialty',
                        'rating' => '4.8',
                        'reviews' => 94,
                        'description' => 'Precision steam cleaning of the full engine bay — degreases, sanitizes, and restores a showroom-worthy engine compartment.',
                        'features' => ['Full Degrease', 'Precision Steam', 'Component Safe'],
                        'color' => 'bg-primary/10',
                        'icon' => 'build',
                        'badge' => null,
                        'available' => false,
                    ],
                    [
                        'name' => 'Ceramic Pro Matrix Coating',
                        'price' => '$450',
                        'duration' => 'Full Day',
                        'category' => 'Premium',
                        'rating' => '5.0',
                        'reviews' => 64,
                        'description' => 'Professional-grade 9H ceramic nano-coating with lifetime hydrophobic protection. Includes multi-stage paint correction prep.',
                        'features' => ['9H Ceramic Nano', 'Lifetime Protection', 'Paint Correction Prep'],
                        'color' => 'bg-tertiary/10',
                        'icon' => 'shield',
                        'badge' => 'Premium',
                        'available' => true,
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach ($services as $service)
                    <div class="group bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden">
                        {{-- Image Placeholder --}}
                        <div class="relative h-44 {{ $service['color'] }} flex items-center justify-center overflow-hidden">
                            <span class="material-symbols-outlined text-[48px] text-on-surface-variant/30 group-hover:scale-110 transition-transform duration-300">{{ $service['icon'] }}</span>

                            {{-- Category Badge --}}
                            <span class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm text-xs font-bold text-on-surface-variant uppercase tracking-wide">
                                {{ $service['category'] }}
                            </span>

                            {{-- Rating Badge --}}
                            <span class="absolute top-3 right-3 inline-flex items-center gap-1 px-2 py-1 rounded-lg bg-surface-container-lowest/90 backdrop-blur-sm text-xs font-bold text-on-surface">
                                <span class="material-symbols-outlined text-[14px] text-primary">star</span>
                                {{ $service['rating'] }}
                            </span>

                            {{-- Special Badge (Most Popular / Premium) --}}
                            @if ($service['badge'])
                                <span class="absolute bottom-3 left-3 px-2.5 py-1 rounded-lg bg-primary text-on-primary text-xs font-bold uppercase tracking-wide shadow-md">
                                    {{ $service['badge'] }}
                                </span>
                            @endif
                        </div>

                        {{-- Card Body --}}
                        <div class="flex flex-col flex-1 p-4 gap-3">
                            {{-- Title & Price --}}
                            <div class="flex items-start justify-between gap-2">
                                <h3 class="text-base font-bold text-on-surface leading-snug">{{ $service['name'] }}</h3>
                                <span class="text-lg font-extrabold text-primary whitespace-nowrap">{{ $service['price'] }}</span>
                            </div>

                            {{-- Description --}}
                            <p class="text-sm text-on-surface-variant leading-relaxed line-clamp-2">{{ $service['description'] }}</p>

                            {{-- Duration & Availability --}}
                            <div class="flex items-center gap-3 text-xs text-on-surface-variant">
                                <span class="inline-flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">schedule</span>
                                    {{ $service['duration'] }}
                                </span>
                                <span class="inline-flex items-center gap-1">
                                    @if ($service['available'])
                                        <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        <span class="text-tertiary font-semibold">Available</span>
                                    @else
                                        <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        <span class="text-error font-semibold">Booked Today</span>
                                    @endif
                                </span>
                                <span class="inline-flex items-center gap-1 ml-auto">
                                    <span class="material-symbols-outlined text-[14px]">group</span>
                                    {{ $service['reviews'] }}
                                </span>
                            </div>

                            {{-- Feature Checkmarks --}}
                            <ul class="flex flex-col gap-1 mt-auto pt-2 border-t border-outline-variant/20">
                                @foreach ($service['features'] as $feature)
                                    <li class="flex items-center gap-1.5 text-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[14px] text-tertiary">check_circle</span>
                                        {{ $feature }}
                                    </li>
                                @endforeach
                            </ul>

                            {{-- Action Buttons --}}
                            <div class="flex items-center gap-2 mt-2">
                                <a
                                    href="{{ route('services') }}"
                                    class="flex-1 flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-xl border border-outline-variant/30 text-sm font-semibold text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface transition-all"
                                >
                                    <span class="material-symbols-outlined text-[16px]">info</span>
                                    Details
                                </a>
                                <a
                                    href="{{ route('contact') }}#booking"
                                    class="flex-1 flex items-center justify-center gap-1.5 px-4 py-2.5 rounded-xl bg-primary-container text-on-primary text-sm font-bold shadow-[0_4px_12px_-2px_rgba(37,99,235,0.3)] hover:bg-primary transition-all"
                                >
                                    <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ═══════════════════════════════════════════════════════════════════════
         Section 5 — Bottom CTA
    ═══════════════════════════════════════════════════════════════════════ --}}
    <section class="bg-surface-container">
        <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-20 text-center">
            <div class="max-w-2xl mx-auto">
                <span class="material-symbols-outlined text-[48px] text-primary mb-4">support_agent</span>

                <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-on-surface mb-4">
                    Can't decide?
                </h2>

                <p class="text-lg text-on-surface-variant leading-relaxed mb-8">
                    Book a free consultation with one of our master technicians. We'll inspect your vehicle, recommend the perfect treatment plan, and build a custom care package — no obligation, no pressure.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center gap-2 px-8 py-3.5 rounded-xl bg-primary-container text-on-primary text-base font-bold shadow-[0_8px_24px_-4px_rgba(37,99,235,0.4)] hover:bg-primary transition-all"
                >
                    <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                    Schedule Free Consultation
                </a>

                <p class="mt-4 text-sm text-on-surface-variant">
                    Or call us directly at <span class="font-semibold text-on-surface">(800) 555-SERV</span>
                </p>
            </div>
        </div>
    </section>

</x-public-layout>
