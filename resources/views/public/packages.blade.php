<x-public-layout :title="'Packages & Offers'">
    {{-- Hero --}}
    <section class="relative overflow-hidden bg-surface-container-low">
        <div class="absolute -right-24 -top-24 h-80 w-80 rounded-full bg-primary-fixed/60 blur-3xl"></div>
        <div class="absolute -bottom-32 -left-20 h-72 w-72 rounded-full bg-tertiary-fixed/30 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-4 py-20 md:px-8 md:py-28">
            <div class="mx-auto flex max-w-4xl flex-col items-center gap-6 text-center">
                <span class="inline-flex items-center gap-2 rounded-full bg-surface-container-lowest px-4 py-2 text-xs font-bold uppercase tracking-[0.14em] text-primary shadow-sm">
                    <span class="material-symbols-outlined text-[20px]">stars</span>
                    2025 Tier Passes &amp; Seasonal Programs
                </span>
                <h1 class="text-4xl font-extrabold tracking-tight text-on-surface sm:text-5xl lg:text-6xl">
                    Service Packages, <span class="text-primary">Memberships &amp; Rewards</span>
                </h1>
                <p class="max-w-2xl text-base leading-8 text-on-surface-variant md:text-lg">
                    Keep your vehicle protected year-round with thoughtfully bundled care. Save up to 35% on seasonal services, monthly memberships, and specialist detailing.
                </p>
                <div class="inline-flex items-center gap-3 rounded-2xl bg-surface-container-lowest px-5 py-3 shadow-md">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary-fixed text-primary">
                        <span class="material-symbols-outlined text-[20px]">lock_open</span>
                    </span>
                    <div class="text-left">
                        <p class="text-sm font-extrabold text-on-surface">Zero Lock-In Contracts</p>
                        <p class="text-xs text-on-surface-variant">Flexible care, built around your schedule.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Seasonal Promotions --}}
    <section class="bg-surface py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="flex flex-col gap-3">
                <span class="text-sm font-bold uppercase tracking-[0.16em] text-primary">Seasonal Promotions</span>
                <div class="flex flex-col justify-between gap-4 md:flex-row md:items-end">
                    <h2 class="max-w-2xl text-3xl font-extrabold tracking-tight text-on-surface md:text-4xl">Limited-run care for every kind of driver</h2>
                    <p class="max-w-md text-sm leading-6 text-on-surface-variant">Secure this season's most requested treatments while appointments are available.</p>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-6 lg:grid-cols-2">
                {{-- Spring Special --}}
                <article class="overflow-hidden bg-surface-container-lowest rounded-3xl shadow-md">
                    <div class="relative h-52 overflow-hidden bg-gradient-to-br from-primary-fixed via-surface-container to-tertiary-fixed-dim/60">
                        <div class="absolute inset-0 opacity-50" style="background-image: radial-gradient(circle at 20% 20%, white 0, transparent 28%), radial-gradient(circle at 80% 75%, #2563eb 0, transparent 30%);"></div>
                        <div class="absolute left-6 top-6 inline-flex items-center gap-2 rounded-full bg-error-container px-3 py-2 text-xs font-bold text-on-error-container">
                            <span class="material-symbols-outlined text-[20px]">timer</span>
                            Limited Time: Ends in 6d 14h 22m
                        </div>
                        <span class="absolute bottom-5 right-5 rounded-full bg-tertiary-fixed px-4 py-2 text-sm font-extrabold text-on-tertiary-fixed">Save $55</span>
                    </div>
                    <div class="flex flex-col gap-6 p-6 md:p-8">
                        <div class="flex flex-col gap-3">
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-tertiary">Active promo</p>
                            <h3 class="text-2xl font-extrabold text-on-surface">Spring Decontamination Special</h3>
                            <p class="text-sm leading-6 text-on-surface-variant">Reset your finish after winter with a complete exterior cleanse and a durable layer of seasonal protection.</p>
                        </div>
                        <ul class="grid gap-3 text-sm font-semibold text-on-surface-variant sm:grid-cols-2">
                            @foreach (['Iron and fallout removal', 'Clay-bar paint treatment', 'Three-month sealant protection'] as $feature)
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="flex flex-col gap-4 border-t border-outline-variant/40 pt-6 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-sm text-on-surface-variant">Was <span class="line-through">$235</span></p>
                                <p class="text-3xl font-extrabold text-on-surface">$180 <span class="text-sm font-medium text-on-surface-variant">one-time</span></p>
                            </div>
                            <a href="{{ route('contact') }}#booking" class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary-container px-5 py-3 text-sm font-bold text-on-primary shadow-md transition hover:bg-primary">
                                Claim Spring Pass
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Pre-Sale Bundle --}}
                <article class="flex flex-col bg-surface-container-lowest rounded-3xl shadow-md">
                    <div class="flex flex-wrap items-center justify-between gap-3 rounded-t-3xl bg-inverse-surface px-6 py-5 text-inverse-on-surface">
                        <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.12em]">
                            <span class="material-symbols-outlined text-[20px] text-tertiary-fixed">trending_up</span>
                            Valuation Booster Package
                        </span>
                        <span class="rounded-full bg-tertiary-fixed px-4 py-2 text-sm font-extrabold text-on-tertiary-fixed">Save $80</span>
                    </div>
                    <div class="flex grow flex-col gap-6 p-6 md:p-8">
                        <div class="flex flex-col gap-3">
                            <p class="text-xs font-bold uppercase tracking-[0.14em] text-tertiary">Active bundle</p>
                            <h3 class="text-2xl font-extrabold text-on-surface">Showroom Pre-Sale Prep</h3>
                            <p class="text-sm leading-6 text-on-surface-variant">Present your vehicle at its best with a sale-ready transformation designed to build buyer confidence.</p>
                        </div>
                        <ul class="grid gap-3 text-sm font-semibold text-on-surface-variant sm:grid-cols-2">
                            @foreach (['Single-stage paint enhancement', 'Deep interior restoration', 'Listing-ready photo finish'] as $feature)
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <div class="mt-auto flex flex-col gap-4 border-t border-outline-variant/40 pt-6 sm:flex-row sm:items-end sm:justify-between">
                            <div>
                                <p class="text-sm text-on-surface-variant">Was <span class="line-through">$430</span></p>
                                <p class="text-3xl font-extrabold text-on-surface">$350 <span class="text-sm font-medium text-on-surface-variant">one-time</span></p>
                            </div>
                            <a href="{{ route('contact') }}#booking" class="inline-flex items-center justify-center gap-2 rounded-xl bg-inverse-surface px-5 py-3 text-sm font-bold text-inverse-on-surface transition hover:opacity-90">
                                Book Pre-Sale Prep
                                <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </article>

                {{-- Summer Pass --}}
                <article class="flex flex-col rounded-3xl border-2 border-dashed border-primary/35 bg-surface-container-low p-6 md:p-8">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <span class="inline-flex items-center gap-2 rounded-full bg-primary-fixed px-4 py-2 text-xs font-bold text-on-primary-fixed">
                            <span class="material-symbols-outlined text-[20px]">event</span>
                            Coming Soon - Opens May 15
                        </span>
                        <span class="text-sm font-bold text-tertiary">Save $50</span>
                    </div>
                    <div class="mt-8 flex grow flex-col gap-5">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-surface-container-lowest text-primary shadow-sm">
                            <span class="material-symbols-outlined text-[28px]">water_drop</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-extrabold text-on-surface">Summer Hydrophobic Pass</h3>
                            <p class="mt-3 text-sm leading-6 text-on-surface-variant">Beat water spots, road film, and UV exposure with a gloss-focused wash and hydrophobic protection program.</p>
                        </div>
                        <div>
                            <span class="text-sm text-on-surface-variant line-through">$210</span>
                            <p class="text-3xl font-extrabold text-on-surface">$160</p>
                        </div>
                        <form class="mt-auto flex flex-col gap-3 sm:flex-row" action="{{ route('contact') }}" method="get">
                            <label class="sr-only" for="summer-email">Email address</label>
                            <input id="summer-email" name="email" type="email" required placeholder="you@example.com" class="min-w-0 grow rounded-xl border border-outline-variant bg-surface-container-lowest px-4 py-3 text-sm text-on-surface outline-none transition placeholder:text-outline focus:border-primary focus:ring-2 focus:ring-primary/20">
                            <button type="submit" class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary-container px-5 py-3 text-sm font-bold text-on-primary transition hover:bg-primary">
                                <span class="material-symbols-outlined text-[20px]">notifications</span>
                                Notify Me
                            </button>
                        </form>
                    </div>
                </article>

                {{-- Trackday Pass --}}
                <article class="flex flex-col rounded-3xl bg-surface-container p-6 md:p-8">
                    <div class="flex flex-wrap items-center justify-between gap-3">
                        <span class="inline-flex items-center gap-2 rounded-full bg-error-container px-4 py-2 text-xs font-bold text-on-error-container">
                            <span class="material-symbols-outlined text-[20px]">block</span>
                            Sold Out for April
                        </span>
                        <span class="rounded-full bg-surface-container-lowest px-4 py-2 text-xs font-bold text-on-surface-variant">Weekend intensive</span>
                    </div>
                    <div class="mt-8 flex grow flex-col gap-5">
                        <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-inverse-surface text-inverse-on-surface">
                            <span class="material-symbols-outlined text-[28px]">sports_score</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-extrabold text-on-surface">Trackday Weekend Pass</h3>
                            <p class="mt-3 text-sm leading-6 text-on-surface-variant">Pre-event prep and post-track recovery for drivers who expect peak presentation without compromising performance.</p>
                        </div>
                        <p class="text-3xl font-extrabold text-on-surface">$295</p>
                        <div class="rounded-2xl bg-surface-container-lowest p-4">
                            <div class="flex items-center justify-between gap-4 text-sm font-bold text-on-surface">
                                <span>24/24 Bay Slots Booked</span>
                                <span class="text-on-error-container">100%</span>
                            </div>
                            <div class="mt-3 h-2 overflow-hidden rounded-full bg-error-container">
                                <div class="h-full w-full rounded-full bg-error"></div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="mt-auto inline-flex items-center justify-center gap-2 rounded-xl bg-inverse-surface px-5 py-3 text-sm font-bold text-inverse-on-surface transition hover:opacity-90">
                            Join Bay Waitlist
                            <span class="material-symbols-outlined text-[20px]">schedule</span>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    {{-- Membership Tiers --}}
    <section class="bg-surface-container-low py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <span class="text-sm font-bold uppercase tracking-[0.16em] text-primary">Membership Tiers</span>
                <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-on-surface md:text-4xl">Consistent care, better value</h2>
                <p class="mt-4 text-sm leading-6 text-on-surface-variant">Choose your ideal level of service and change or cancel whenever your routine does.</p>
            </div>

            <div class="mt-12 grid grid-cols-1 items-stretch gap-6 lg:grid-cols-3">
                @php
                    $memberships = [
                        [
                            'name' => 'Essential Tier',
                            'price' => '49',
                            'description' => 'Reliable maintenance for the everyday driver.',
                            'features' => ['2 basic washes/month', 'Priority booking', '10% off add-ons', 'Seasonal member badge'],
                            'button' => 'Start Essential',
                            'buttonClasses' => 'border-2 border-primary text-primary hover:bg-primary-fixed',
                            'icon' => 'verified',
                        ],
                        [
                            'name' => 'Premium Tier',
                            'price' => '99',
                            'description' => 'Our best balance of frequency, depth, and rewards.',
                            'features' => ['4 premium washes/month', '1 interior detail', 'Priority queue', '20% off add-ons', 'Loyalty points on every visit'],
                            'button' => 'Start Premium',
                            'buttonClasses' => 'bg-primary-container text-on-primary shadow-md hover:bg-primary',
                            'icon' => 'workspace_premium',
                            'popular' => true,
                        ],
                        [
                            'name' => 'Elite Tier',
                            'price' => '179',
                            'description' => 'White-glove automotive care without compromise.',
                            'features' => ['Unlimited washes', 'Monthly full detail', 'VIP concierge', '30% off add-ons', 'Exclusive member events'],
                            'button' => 'Start Elite',
                            'buttonClasses' => 'bg-inverse-surface text-inverse-on-surface hover:opacity-90',
                            'icon' => 'diamond',
                        ],
                    ];
                @endphp

                @foreach ($memberships as $membership)
                    <article class="relative flex flex-col bg-surface-container-lowest p-7 rounded-3xl shadow-md {{ isset($membership['popular']) ? 'ring-2 ring-primary lg:-translate-y-3' : '' }}">
                        @if (isset($membership['popular']))
                            <span class="absolute -top-4 left-1/2 -translate-x-1/2 rounded-full bg-primary-container px-5 py-2 text-xs font-extrabold uppercase tracking-[0.12em] text-on-primary shadow-md">Most Popular</span>
                        @endif
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl {{ isset($membership['popular']) ? 'bg-primary-container text-on-primary' : 'bg-surface-container text-primary' }}">
                            <span class="material-symbols-outlined text-[28px]">{{ $membership['icon'] }}</span>
                        </div>
                        <h3 class="mt-6 text-xl font-extrabold text-on-surface">{{ $membership['name'] }}</h3>
                        <p class="mt-2 min-h-12 text-sm leading-6 text-on-surface-variant">{{ $membership['description'] }}</p>
                        <div class="mt-6 flex items-end gap-1">
                            <span class="text-lg font-bold text-on-surface">$</span>
                            <span class="text-5xl font-extrabold tracking-tight text-on-surface">{{ $membership['price'] }}</span>
                            <span class="pb-1 text-sm text-on-surface-variant">/month</span>
                        </div>
                        <div class="my-7 h-px bg-outline-variant/40"></div>
                        <ul class="flex grow flex-col gap-4">
                            @foreach ($membership['features'] as $feature)
                                <li class="flex items-start gap-3 text-sm font-semibold text-on-surface-variant">
                                    <span class="material-symbols-outlined text-[20px] text-tertiary">check_circle</span>
                                    {{ $feature }}
                                </li>
                            @endforeach
                        </ul>
                        <a href="{{ route('contact') }}#booking" class="mt-8 inline-flex items-center justify-center rounded-xl px-5 py-3 text-sm font-bold transition {{ $membership['buttonClasses'] }}">
                            {{ $membership['button'] }}
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Loyalty Rewards --}}
    <section class="bg-surface py-20 md:py-24">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="overflow-hidden rounded-3xl bg-inverse-surface text-inverse-on-surface shadow-md">
                <div class="grid gap-10 p-7 md:p-10 lg:grid-cols-[0.8fr_1.2fr] lg:p-14">
                    <div class="flex flex-col justify-center gap-5">
                        <span class="inline-flex w-fit items-center gap-2 rounded-full bg-tertiary-fixed px-4 py-2 text-xs font-extrabold uppercase tracking-[0.12em] text-on-tertiary-fixed">
                            <span class="material-symbols-outlined text-[20px]">redeem</span>
                            Loyalty Rewards
                        </span>
                        <h2 class="text-3xl font-extrabold tracking-tight md:text-4xl">Earn points on every visit</h2>
                        <p class="text-sm leading-7 text-inverse-on-surface/75">Every dollar spent moves you closer to service credits, complimentary upgrades, and member-only experiences. No extra enrollment required.</p>
                        <a href="{{ route('contact') }}" class="inline-flex w-fit items-center gap-2 text-sm font-bold text-tertiary-fixed">
                            Ask about rewards
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-3">
                        @foreach ([
                            ['name' => 'Bronze', 'range' => '0–500', 'icon' => 'shield', 'bar' => 'w-1/3'],
                            ['name' => 'Silver', 'range' => '501–1500', 'icon' => 'verified_user', 'bar' => 'w-2/3'],
                            ['name' => 'Gold', 'range' => '1501+', 'icon' => 'trophy', 'bar' => 'w-full'],
                        ] as $tier)
                            <div class="rounded-2xl bg-surface-container-lowest/10 p-5 ring-1 ring-white/10">
                                <span class="material-symbols-outlined text-[28px] text-tertiary-fixed">{{ $tier['icon'] }}</span>
                                <h3 class="mt-5 text-lg font-extrabold">{{ $tier['name'] }}</h3>
                                <p class="mt-1 text-xs text-inverse-on-surface/65">{{ $tier['range'] }} points</p>
                                <div class="mt-5 h-1.5 overflow-hidden rounded-full bg-white/15">
                                    <div class="h-full {{ $tier['bar'] }} rounded-full bg-tertiary-fixed"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bottom CTA --}}
    <section class="bg-surface-container py-16 md:py-20">
        <div class="mx-auto max-w-5xl px-4 text-center md:px-8">
            <div class="flex flex-col items-center gap-5 rounded-3xl bg-surface-container-lowest px-6 py-12 shadow-md md:px-12">
                <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-fixed text-primary">
                    <span class="material-symbols-outlined text-[24px]">support_agent</span>
                </span>
                <h2 class="text-3xl font-extrabold tracking-tight text-on-surface md:text-4xl">Not sure which package?</h2>
                <p class="max-w-xl text-sm leading-7 text-on-surface-variant">Tell our care team about your vehicle, driving habits, and goals. We’ll create a custom quote with only the services you need.</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary-container px-6 py-3 text-sm font-bold text-on-primary shadow-md transition hover:bg-primary">
                    Get a Custom Quote
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>
</x-public-layout>
