<x-public-layout :title="'About Us'">
    {{-- Hero --}}
    <section class="relative isolate overflow-hidden bg-inverse-surface text-white">
        <div class="absolute inset-0 bg-[radial-gradient(#2563eb_1px,transparent_1px)] [background-size:24px_24px] opacity-20"></div>
        <div class="absolute -right-32 top-8 h-80 w-80 rounded-full bg-primary-container/20 blur-3xl"></div>
        <div class="absolute -left-32 bottom-0 h-72 w-72 rounded-full bg-tertiary-container/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-4 py-20 md:px-8 md:py-28 lg:py-32">
            <div class="max-w-4xl">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-4 py-2 font-label text-xs font-bold uppercase tracking-[0.18em] text-primary-fixed-dim backdrop-blur-sm">
                    <span class="h-2 w-2 rounded-full bg-tertiary-fixed"></span>
                    The ServiceFlow Heritage - Est. 2017
                </span>
                <h1 class="mt-7 max-w-4xl text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-5xl lg:text-7xl">
                    Obsessed with Perfection. <span class="text-primary-fixed-dim">Driven by Craft.</span>
                </h1>
                <p class="mt-6 max-w-2xl text-base leading-8 text-white/70 sm:text-lg">
                    ServiceFlow was founded on a simple conviction: every vehicle deserves care without compromise. Since 2017, we have united advanced surface science, master craftsmanship, and genuine hospitality to create an automotive care experience unlike any other.
                </p>
                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}#booking" class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary-container px-6 py-3.5 text-sm font-bold text-on-primary shadow-[0_12px_30px_-8px_rgba(37,99,235,0.7)] transition hover:bg-primary">
                        <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                        Book Now
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/20 bg-white/10 px-6 py-3.5 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/20">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        Contact Us
                    </a>
                </div>
            </div>

            <div class="mt-16 grid grid-cols-2 overflow-hidden rounded-2xl border border-white/10 bg-white/5 backdrop-blur-sm lg:grid-cols-4">
                <div class="border-b border-r border-white/10 p-5 sm:p-7 lg:border-b-0">
                    <p class="text-2xl font-extrabold text-primary-fixed-dim sm:text-3xl">8+</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">Years</p>
                </div>
                <div class="border-b border-white/10 p-5 sm:p-7 lg:border-b-0 lg:border-r">
                    <p class="text-2xl font-extrabold text-primary-fixed-dim sm:text-3xl">48,000+</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">Vehicles</p>
                </div>
                <div class="border-r border-white/10 p-5 sm:p-7">
                    <p class="text-2xl font-extrabold text-primary-fixed-dim sm:text-3xl">IDA</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">Certified</p>
                </div>
                <div class="p-5 sm:p-7">
                    <p class="text-2xl font-extrabold text-primary-fixed-dim sm:text-3xl">4.9</p>
                    <p class="mt-1 text-xs font-semibold uppercase tracking-wider text-white/60">Rating · 2,400+ Reviews</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="bg-surface py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="max-w-2xl">
                <p class="font-label text-xs font-bold uppercase tracking-[0.2em] text-primary">The standard we live by</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-on-surface sm:text-4xl">Craft is more than technique. It is character.</h2>
                <p class="mt-4 leading-7 text-on-surface-variant">Four principles guide every decision, every interaction, and every finish that leaves our studio.</p>
            </div>

            @php
                $values = [
                    ['icon' => 'science', 'title' => 'Obsessive Chemistry', 'description' => 'Every product and process is selected through rigorous testing, ensuring safe chemistry and measurable, lasting performance.', 'tone' => 'bg-primary-fixed text-primary'],
                    ['icon' => 'shield_with_heart', 'title' => 'Zero-Swirl Guarantee', 'description' => 'Our contact-safe methods and meticulous inspection process protect your finish from the defects traditional washes leave behind.', 'tone' => 'bg-tertiary-fixed text-tertiary'],
                    ['icon' => 'videocam', 'title' => 'Transparent Hospitality', 'description' => 'Clear recommendations, honest pricing, and visual progress updates keep you informed from handoff through delivery.', 'tone' => 'bg-secondary-fixed text-on-secondary-fixed'],
                    ['icon' => 'local_cafe', 'title' => 'Client-First Comfort', 'description' => 'Thoughtful scheduling, effortless communication, and a refined lounge make exceptional care feel completely effortless.', 'tone' => 'bg-surface-container text-primary'],
                ];
            @endphp

            <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($values as $value)
                    <article class="group flex min-h-72 flex-col rounded-2xl bg-surface-container-lowest p-6 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-md">
                        <div class="flex items-start justify-between gap-4">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl {{ $value['tone'] }}">
                                <span class="material-symbols-outlined text-[24px]">{{ $value['icon'] }}</span>
                            </span>
                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-tertiary-fixed text-on-tertiary-fixed">
                                <span class="material-symbols-outlined text-[18px]">check</span>
                            </span>
                        </div>
                        <h3 class="mt-6 text-lg font-extrabold text-on-surface">{{ $value['title'] }}</h3>
                        <p class="mt-3 text-sm leading-6 text-on-surface-variant">{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Facility Highlights --}}
    <section class="bg-surface-container-low py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
                <div class="max-w-2xl">
                    <p class="font-label text-xs font-bold uppercase tracking-[0.2em] text-tertiary">Purpose-built spaces</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-on-surface sm:text-4xl">A facility engineered for flawless results.</h2>
                </div>
                <p class="max-w-md text-sm leading-6 text-on-surface-variant">Every environment is controlled, monitored, and designed around the exacting needs of modern vehicle surfaces.</p>
            </div>

            @php
                $facilities = [
                    ['title' => 'Reverse Osmosis Wash Bay', 'badge' => 'Mineral-Free', 'description' => 'A climate-controlled wash environment using multi-stage purified water for a spotless, residue-free foundation.', 'stats' => [['0 ppm', 'Water purity'], ['72°F', 'Controlled temp']], 'gradient' => 'from-primary-fixed to-surface-container-high'],
                    ['title' => 'Ceramic & PPF Cleanroom', 'badge' => 'HEPA Filtered', 'description' => 'Positive-pressure filtration and calibrated lighting create ideal conditions for precision coating and film installation.', 'stats' => [['99.97%', 'Particle filtration'], ['5,000K', 'Color accuracy']], 'gradient' => 'from-tertiary-fixed/70 to-surface-container'],
                    ['title' => 'Executive Observation Lounge', 'badge' => 'Client Comfort', 'description' => 'A quiet, connected retreat with direct studio views, premium refreshments, and dedicated workspaces.', 'stats' => [['Gigabit', 'Wi-Fi'], ['Direct', 'Studio view']], 'gradient' => 'from-secondary-fixed to-primary-fixed'],
                ];
            @endphp

            <div class="mt-12 grid gap-6 lg:grid-cols-3">
                @foreach ($facilities as $facility)
                    <article class="overflow-hidden rounded-2xl bg-surface-container-lowest shadow-sm">
                        <div class="relative h-64 bg-gradient-to-br {{ $facility['gradient'] }}">
                            <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:18px_18px] opacity-30"></div>
                            <span class="absolute left-5 top-5 inline-flex items-center gap-1.5 rounded-full bg-inverse-surface/90 px-3 py-1.5 text-xs font-bold text-white backdrop-blur-sm">
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                {{ $facility['badge'] }}
                            </span>
                            <span class="material-symbols-outlined absolute bottom-5 right-5 text-[56px] text-on-surface/10">garage_home</span>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-extrabold text-on-surface">{{ $facility['title'] }}</h3>
                            <p class="mt-3 text-sm leading-6 text-on-surface-variant">{{ $facility['description'] }}</p>
                            <div class="mt-6 grid grid-cols-2 border-t border-outline-variant/40 pt-5">
                                @foreach ($facility['stats'] as $stat)
                                    <div @class(['border-r border-outline-variant/40 pr-4' => $loop->first, 'pl-4' => $loop->last])>
                                        <p class="font-extrabold text-primary">{{ $stat[0] }}</p>
                                        <p class="mt-1 text-xs text-on-surface-variant">{{ $stat[1] }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team --}}
    <section class="bg-surface py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="relative overflow-hidden rounded-3xl bg-inverse-surface px-6 py-12 text-white sm:px-10 lg:px-14">
                <div class="absolute inset-0 bg-gradient-to-r from-primary-container/35 via-transparent to-tertiary-container/20"></div>
                <div class="absolute inset-0 bg-[radial-gradient(#b4c5ff_1px,transparent_1px)] [background-size:22px_22px] opacity-10"></div>
                <div class="relative max-w-2xl">
                    <p class="font-label text-xs font-bold uppercase tracking-[0.2em] text-primary-fixed-dim">The hands behind the finish</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Masters of the details others overlook.</h2>
                    <p class="mt-4 leading-7 text-white/70">Our specialists bring deep expertise, disciplined technique, and a shared respect for every vehicle entrusted to us.</p>
                </div>
            </div>

            @php
                $team = [
                    ['initials' => 'MV', 'name' => 'Marcus V.', 'role' => 'Master Craftsman, Founder', 'description' => 'Sets the technical standard for paint correction and leads the studio with an uncompromising eye for finish quality.', 'experience' => '15 years exp'],
                    ['initials' => 'ER', 'name' => 'Elena R.', 'role' => 'Lead Interior Architect', 'description' => 'Restores complex interiors through material-specific care, from fine leather and Alcantara to modern technical fabrics.', 'experience' => '8 years exp'],
                    ['initials' => 'JT', 'name' => 'Jordan T.', 'role' => 'Ceramic Systems Specialist', 'description' => 'Engineers durable coating systems and precision PPF installations tailored to each vehicle and ownership pattern.', 'experience' => '6 years exp'],
                    ['initials' => 'AK', 'name' => 'Aisha K.', 'role' => 'Client Experience Director', 'description' => 'Orchestrates every visit with clear communication, thoughtful details, and a concierge-level standard of care.', 'experience' => '10 years exp'],
                ];
            @endphp

            <div class="relative -mt-6 grid gap-5 px-3 sm:grid-cols-2 lg:grid-cols-4 lg:px-6">
                @foreach ($team as $member)
                    <article class="rounded-2xl bg-surface-container-lowest p-6 text-center shadow-sm">
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-primary-container text-xl font-extrabold text-on-primary ring-8 ring-surface-container-lowest">{{ $member['initials'] }}</div>
                        <h3 class="mt-5 text-lg font-extrabold text-on-surface">{{ $member['name'] }}</h3>
                        <p class="mt-1 text-xs font-bold uppercase tracking-wide text-primary">{{ $member['role'] }}</p>
                        <p class="mt-4 text-sm leading-6 text-on-surface-variant">{{ $member['description'] }}</p>
                        <span class="mt-5 inline-flex items-center gap-1.5 rounded-full bg-tertiary-fixed px-3 py-1.5 text-xs font-bold text-on-tertiary-fixed">
                            <span class="material-symbols-outlined text-[16px]">workspace_premium</span>
                            {{ $member['experience'] }}
                        </span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="bg-surface-container-low py-20 sm:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="text-center">
                <p class="font-label text-xs font-bold uppercase tracking-[0.2em] text-primary">Precision in every frame</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-on-surface sm:text-4xl">Our Work in Focus</h2>
                <p class="mx-auto mt-4 max-w-2xl leading-7 text-on-surface-variant">A closer look at the clarity, depth, and protection created inside the ServiceFlow studio.</p>
            </div>

            <div class="mt-12 grid auto-rows-[140px] grid-cols-2 gap-4 md:auto-rows-[180px] md:grid-cols-4">
                <div class="group relative row-span-2 overflow-hidden rounded-2xl bg-gradient-to-br from-primary-container to-inverse-surface md:col-span-2">
                    <span class="material-symbols-outlined absolute bottom-5 right-5 text-[52px] text-white/20 transition group-hover:scale-110">directions_car</span>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-tertiary-fixed to-tertiary-container">
                    <span class="material-symbols-outlined absolute bottom-4 right-4 text-[40px] text-on-tertiary-fixed/30 transition group-hover:scale-110">auto_awesome</span>
                </div>
                <div class="group relative row-span-2 overflow-hidden rounded-2xl bg-gradient-to-br from-secondary-fixed to-primary-fixed-dim">
                    <span class="material-symbols-outlined absolute bottom-5 right-5 text-[48px] text-on-primary-fixed/20 transition group-hover:scale-110">shield</span>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-surface-container-highest to-primary-fixed">
                    <span class="material-symbols-outlined absolute bottom-4 right-4 text-[40px] text-primary/20 transition group-hover:scale-110">water_drop</span>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-inverse-surface to-primary md:col-span-2">
                    <span class="material-symbols-outlined absolute bottom-4 right-4 text-[44px] text-white/20 transition group-hover:scale-110">flare</span>
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br from-primary-fixed to-surface-container md:col-span-2">
                    <span class="material-symbols-outlined absolute bottom-4 right-4 text-[44px] text-primary/20 transition group-hover:scale-110">texture</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Certifications --}}
    <section class="bg-surface py-14">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <p class="text-center font-label text-xs font-bold uppercase tracking-[0.2em] text-on-surface-variant">Certified standards. Proven trust.</p>
            @php
                $certifications = [
                    ['icon' => 'workspace_premium', 'label' => 'IDA Certified'],
                    ['icon' => 'verified', 'label' => 'ISO 9001'],
                    ['icon' => 'eco', 'label' => 'Eco-Friendly'],
                    ['icon' => 'health_and_safety', 'label' => 'Insured'],
                    ['icon' => 'star', 'label' => '5-Star Rated'],
                ];
            @endphp
            <div class="mt-7 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-5">
                @foreach ($certifications as $certification)
                    <div class="flex items-center justify-center gap-2 rounded-xl border border-outline-variant/40 bg-surface-container-lowest px-4 py-4 text-sm font-bold text-on-surface shadow-sm last:col-span-2 sm:last:col-span-1">
                        <span class="material-symbols-outlined text-[20px] text-tertiary">{{ $certification['icon'] }}</span>
                        {{ $certification['label'] }}
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Bottom CTA --}}
    <section class="bg-surface px-4 pb-20 md:px-8 sm:pb-24">
        <div class="relative mx-auto max-w-7xl overflow-hidden rounded-3xl bg-primary-container px-6 py-14 text-center text-on-primary sm:px-10 sm:py-16">
            <div class="absolute inset-0 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px] opacity-10"></div>
            <div class="relative mx-auto max-w-3xl">
                <p class="font-label text-xs font-bold uppercase tracking-[0.2em] text-primary-fixed">Your vehicle deserves the difference</p>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Ready to experience the ServiceFlow difference?</h2>
                <p class="mx-auto mt-4 max-w-xl leading-7 text-white/80">Tell us about your vehicle and we will create a care plan tailored to its finish, use, and future.</p>
                <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}#booking" class="inline-flex items-center justify-center gap-2 rounded-xl bg-inverse-surface px-6 py-3.5 text-sm font-bold text-white shadow-lg transition hover:bg-on-surface">
                        <span class="material-symbols-outlined text-[20px]">calendar_month</span>
                        Book Now
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 rounded-xl border border-white/30 bg-white/10 px-6 py-3.5 text-sm font-bold text-white backdrop-blur-sm transition hover:bg-white/20">
                        <span class="material-symbols-outlined text-[20px]">mail</span>
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
