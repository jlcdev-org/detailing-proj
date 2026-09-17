<x-public-layout :title="'Home'">
    <div class="flex flex-col gap-16 lg:gap-20">

        {{-- Hero Section --}}
        <section class="relative overflow-hidden bg-surface">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(59,130,246,0.12),transparent_60%)] pointer-events-none"></div>
            <div class="relative max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-8 max-w-3xl">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-surface-container text-primary text-xs font-label font-semibold w-fit">
                        <span class="material-symbols-outlined text-[16px]">auto_fix_high</span>
                        Studio-Grade Automotive Detailing
                    </div>
                    <h1 class="text-4xl lg:text-6xl font-extrabold text-on-surface tracking-tight leading-[1.1]">
                        Professional care for <span class="text-primary">every ride.</span>
                    </h1>
                    <p class="text-lg text-on-surface-variant leading-relaxed max-w-2xl">
                        Premium detailing, ceramic protection, and precision washes engineered for luxury vehicles and daily drivers alike.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('contact') }}#booking" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary-container text-on-primary text-sm font-bold shadow-[0_8px_20px_-4px_rgba(37,99,235,0.4)] hover:shadow-lg transition-all">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                            Book a Service
                        </a>
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl border border-outline text-on-surface text-sm font-semibold hover:bg-surface-container transition-all">
                            <span class="material-symbols-outlined text-[18px]">format_list_bulleted</span>
                            View Services
                        </a>
                    </div>
                    <div class="flex flex-wrap items-center gap-6">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="text-sm font-semibold text-on-surface">4.9 Rating</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">reviews</span>
                            <span class="text-sm font-semibold text-on-surface">2400+ Reviews</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">schedule</span>
                            <span class="text-sm font-semibold text-on-surface">8+ Years</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[20px]">verified</span>
                            <span class="text-sm font-semibold text-on-surface">IDA Certified</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Featured Services Grid --}}
        @php
            $services = [
                ['name' => 'Motor Wash', 'price' => 29, 'category' => 'Express', 'duration' => '25 min', 'icon' => 'two_wheeler', 'features' => ['Rim & tire deep clean', 'Hand-wash safe foam', 'UV protectant finish']],
                ['name' => 'Basic Car Wash', 'price' => 45, 'category' => 'Wash', 'duration' => '45 min', 'icon' => 'local_car_wash', 'features' => ['Exterior hand wash', 'Wheel & glass clean', 'Air dry with towel']],
                ['name' => 'Interior Detailing', 'price' => 129, 'category' => 'Detailing', 'duration' => '2 hrs', 'icon' => 'chair', 'features' => ['Vacuum & shampoo', 'Leather conditioning', 'Ozone treatment']],
                ['name' => 'Exterior Detailing', 'price' => 169, 'category' => 'Detailing', 'duration' => '2.5 hrs', 'icon' => 'auto_awesome', 'features' => ['Clay bar paint decon', 'Polish & wax finish', 'Trim restoration']],
                ['name' => 'Full Detail Suite', 'price' => 249, 'category' => 'Suite', 'duration' => '4 hrs', 'icon' => 'stars', 'popular' => true, 'features' => ['Interior + exterior', 'Ceramic spray sealant', 'Engine bay detail']],
                ['name' => 'Engine Wash', 'price' => 65, 'category' => 'Specialty', 'duration' => '1 hr', 'icon' => 'oil_barrel', 'features' => ['Steam degreasing', 'Plastic dressing', 'Sensory inspection']],
            ];
        @endphp
        <section class="bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 max-w-2xl">
                        <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">What we offer</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight">Featured Services</h2>
                        <p class="text-on-surface-variant leading-relaxed">Choose a studio-grade treatment tailored to your vehicle. Every service is performed by certified detailers with precision tools and premium products.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($services as $service)
                            <div class="group bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md hover:-translate-y-1 transition-all flex flex-col overflow-hidden">
                                <div class="h-44 bg-surface-container flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[48px] text-primary/40">{{ $service['icon'] }}</span>
                                </div>
                                <div class="p-6 flex flex-col gap-4">
                                    <div class="flex items-center justify-between">
                                        <span class="px-2.5 py-1 rounded-lg bg-surface-container text-on-surface-variant text-[10px] font-label font-semibold uppercase tracking-wider">{{ $service['category'] }}</span>
                                        @if($service['popular'] ?? false)
                                            <span class="px-2.5 py-1 rounded-lg bg-tertiary-fixed text-on-tertiary-fixed text-[10px] font-label font-bold uppercase tracking-wider">Most Popular</span>
                                        @endif
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <h3 class="text-lg font-bold text-on-surface">{{ $service['name'] }}</h3>
                                        <p class="text-sm text-on-surface-variant leading-relaxed">Restore your vehicle's finish with our signature {{ $service['name'] }} treatment.</p>
                                    </div>
                                    <div class="flex items-center gap-3 text-sm text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[18px] text-primary">schedule</span>
                                        {{ $service['duration'] }}
                                        <span class="w-1 h-1 rounded-full bg-outline"></span>
                                        <span class="text-lg font-bold text-on-surface">${{ $service['price'] }}</span>
                                    </div>
                                    <ul class="flex flex-col gap-2 text-sm text-on-surface-variant flex-1">
                                        @foreach($service['features'] as $feature)
                                            <li class="flex items-start gap-2">
                                                <span class="material-symbols-outlined text-[18px] text-tertiary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                                {{ $feature }}
                                            </li>
                                        @endforeach
                                    </ul>
                                    <div class="flex items-center gap-3 pt-2">
                                        <a href="{{ route('services') }}" class="flex-1 text-center px-4 py-2.5 rounded-xl border border-outline text-on-surface text-sm font-semibold hover:bg-surface-container transition-all">Details</a>
                                        <a href="{{ route('contact') }}#booking" class="flex-1 text-center px-4 py-2.5 rounded-xl bg-primary-container text-on-primary text-sm font-bold hover:bg-primary transition-all">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- How It Works --}}
        @php
            $steps = [
                ['number' => '01', 'icon' => 'event_available', 'title' => 'Book Online', 'description' => 'Choose a service and schedule your preferred bay and time in under 60 seconds.'],
                ['number' => '02', 'icon' => 'fact_check', 'title' => 'Vehicle Assessment', 'description' => 'Our specialists inspect your vehicle to tailor the treatment to its exact condition.'],
                ['number' => '03', 'icon' => 'construction', 'title' => 'Expert Service', 'description' => 'Certified detailers execute every step with studio-grade tools and premium products.'],
                ['number' => '04', 'icon' => 'done_all', 'title' => 'Quality Delivery', 'description' => 'We walk you through the results and ensure your ride leaves looking its absolute best.'],
            ];
        @endphp
        <section class="bg-surface">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 max-w-2xl">
                        <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">Simple & Seamless</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight">How It Works</h2>
                        <p class="text-on-surface-variant leading-relaxed">From booking to delivery, every step is designed for convenience, transparency, and exceptional results.</p>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach($steps as $step)
                            <div class="flex flex-col gap-4 p-6 rounded-2xl bg-surface-container-lowest shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-3xl font-extrabold text-outline/30">{{ $step['number'] }}</span>
                                    <span class="material-symbols-outlined text-[24px] text-primary">{{ $step['icon'] }}</span>
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h3 class="text-lg font-bold text-on-surface">{{ $step['title'] }}</h3>
                                    <p class="text-sm text-on-surface-variant leading-relaxed">{{ $step['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Before / After Showcase --}}
        <section class="bg-inverse-surface text-white">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 max-w-2xl">
                        <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">Quality Transformation</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight">Before & After Showcase</h2>
                        <p class="text-white/70 leading-relaxed">See the difference studio-grade care makes. Every detail is restored to its original brilliance.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-4">
                            <div class="h-72 rounded-2xl bg-surface flex items-center justify-center">
                                <span class="material-symbols-outlined text-[64px] text-on-surface/30">blur_on</span>
                            </div>
                            <span class="text-sm font-label font-semibold uppercase tracking-wider text-white/60">Before</span>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="h-72 rounded-2xl bg-tertiary-fixed flex items-center justify-center">
                                <span class="material-symbols-outlined text-[64px] text-on-tertiary-fixed">auto_awesome</span>
                            </div>
                            <span class="text-sm font-label font-semibold uppercase tracking-wider text-white/60">After</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <div class="flex flex-col gap-1">
                            <span class="text-3xl font-extrabold text-white">48,000+</span>
                            <span class="text-sm text-white/70">Vehicles Perfected</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-3xl font-extrabold text-white">4.9</span>
                            <span class="text-sm text-white/70">Average Rating</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-3xl font-extrabold text-white">8+</span>
                            <span class="text-sm text-white/70">Years of Experience</span>
                        </div>
                        <div class="flex flex-col gap-1">
                            <span class="text-3xl font-extrabold text-white">12</span>
                            <span class="text-sm text-white/70">Certified Bays</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Testimonials --}}
        @php
            $testimonials = [
                ['name' => 'Sarah M.', 'vehicle' => 'BMW M4', 'quote' => 'ServiceFlow made my M4 look better than the day I drove it off the lot. The attention to detail is unmatched.', 'initial' => 'SM'],
                ['name' => 'David C.', 'vehicle' => 'Tesla Model S', 'quote' => 'Professional, punctual, and the ceramic finish leaves my Tesla gleaming for weeks. Highly recommended.', 'initial' => 'DC'],
                ['name' => 'James R.', 'vehicle' => 'Porsche 911', 'quote' => 'They treat every car like a collector piece. The full suite is worth every penny for a 911 owner.', 'initial' => 'JR'],
            ];
        @endphp
        <section class="bg-surface">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 max-w-2xl">
                        <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">Customer Love</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight">What Drivers Say</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($testimonials as $testimonial)
                            <div class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-4">
                                <div class="flex gap-1">
                                    @for($i = 0; $i < 5; $i++)
                                        <span class="material-symbols-outlined text-tertiary text-[20px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    @endfor
                                </div>
                                <p class="text-on-surface leading-relaxed flex-1">{{ $testimonial['quote'] }}</p>
                                <div class="flex items-center gap-3 pt-2">
                                    <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-sm font-bold text-on-surface">{{ $testimonial['initial'] }}</div>
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-sm font-bold text-on-surface">{{ $testimonial['name'] }}</span>
                                        <span class="text-xs text-on-surface-variant">{{ $testimonial['vehicle'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Accordion --}}
        @php
            $faqs = [
                ['question' => 'What detailing methods do you use?', 'answer' => 'We combine hand-wash techniques, steam cleaning, clay bar decontamination, and pH-neutral products to protect your paint, trim, and interior surfaces.'],
                ['question' => 'Is ceramic coating included in any package?', 'answer' => 'Yes, our Full Detail Suite includes a ceramic spray sealant. Dedicated ceramic coating services are available by inquiry for longer-term paint protection.'],
                ['question' => 'Can I reschedule or cancel my appointment?', 'answer' => 'Absolutely. You can reschedule or cancel up to 24 hours before your booking through the confirmation link or by calling our team.'],
                ['question' => 'How long does a full detail take?', 'answer' => 'A Full Detail Suite typically takes around 4 hours. We will confirm an exact bay time when you book based on your vehicle size and condition.'],
            ];
        @endphp
        <section class="bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="flex flex-col gap-12">
                    <div class="flex flex-col gap-4 max-w-2xl">
                        <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">Got Questions?</span>
                        <h2 class="text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight">FAQ</h2>
                    </div>
                    <div class="max-w-3xl flex flex-col gap-4" x-data="{ open: 1 }">
                        @foreach($faqs as $index => $faq)
                            <div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden">
                                <button @click="open = open === {{ $index + 1 }} ? null : {{ $index + 1 }}" class="w-full flex items-center justify-between p-6 text-left">
                                    <span class="font-semibold text-on-surface">{{ $faq['question'] }}</span>
                                    <span class="material-symbols-outlined text-[20px] text-on-surface-variant transition-transform" :class="open === {{ $index + 1 }} ? 'rotate-180' : ''">expand_more</span>
                                </button>
                                <div x-show="open === {{ $index + 1 }}" class="px-6 pb-6">
                                    <p class="text-sm text-on-surface-variant leading-relaxed">{{ $faq['answer'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Location & Express Booking CTA --}}
        <section class="bg-surface">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="flex flex-col gap-8">
                        <div class="flex flex-col gap-4">
                            <span class="text-sm font-label font-semibold uppercase tracking-wider text-tertiary">Visit the Studio</span>
                            <h2 class="text-3xl lg:text-4xl font-extrabold text-on-surface tracking-tight">Location & Hours</h2>
                        </div>
                        <div class="flex flex-col gap-6">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-[20px] text-primary">location_on</span>
                                <div class="flex flex-col gap-1">
                                    <span class="font-semibold text-on-surface">ServiceFlow Studio</span>
                                    <span class="text-sm text-on-surface-variant">742 Motorsport Blvd, Suite 100, Metro District</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-[20px] text-primary">schedule</span>
                                <div class="flex flex-col gap-1">
                                    <span class="font-semibold text-on-surface">Working Hours</span>
                                    <span class="text-sm text-on-surface-variant">Mon – Sat: 7:30 AM – 7:00 PM</span>
                                    <span class="text-sm text-on-surface-variant">Sun: 9:00 AM – 5:00 PM</span>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-[20px] text-primary">call</span>
                                <div class="flex flex-col gap-1">
                                    <span class="font-semibold text-on-surface">Phone</span>
                                    <span class="text-sm text-on-surface-variant">(800) 555-SERV (7378)</span>
                                </div>
                            </div>
                        </div>
                        <div class="h-64 rounded-2xl bg-surface-container flex items-center justify-center">
                            <span class="material-symbols-outlined text-[48px] text-on-surface/30">map</span>
                        </div>
                    </div>
                    <div class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 lg:p-8 flex flex-col gap-6">
                        <div class="flex flex-col gap-2">
                            <h3 class="text-2xl font-extrabold text-on-surface tracking-tight">Express Booking</h3>
                            <p class="text-sm text-on-surface-variant leading-relaxed">Skip the line and reserve your bay in seconds. We'll confirm your appointment shortly.</p>
                        </div>
                        <form class="flex flex-col gap-4" onsubmit="event.preventDefault();">
                            <div class="flex flex-col gap-2">
                                <label for="service" class="text-xs font-label font-semibold uppercase tracking-wider text-on-surface-variant">Service</label>
                                <select id="service" class="w-full px-4 py-3 rounded-xl bg-surface-container text-on-surface text-sm border border-outline focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Motor Wash</option>
                                    <option>Basic Car Wash</option>
                                    <option>Interior Detailing</option>
                                    <option>Exterior Detailing</option>
                                    <option>Full Detail Suite</option>
                                    <option>Engine Wash</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="vehicle" class="text-xs font-label font-semibold uppercase tracking-wider text-on-surface-variant">Vehicle Type</label>
                                <select id="vehicle" class="w-full px-4 py-3 rounded-xl bg-surface-container text-on-surface text-sm border border-outline focus:outline-none focus:ring-2 focus:ring-primary">
                                    <option>Sedan</option>
                                    <option>SUV / Truck</option>
                                    <option>Coupe / Sports</option>
                                    <option>Motorcycle</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="time" class="text-xs font-label font-semibold uppercase tracking-wider text-on-surface-variant">Preferred Time</label>
                                <input type="datetime-local" id="time" class="w-full px-4 py-3 rounded-xl bg-surface-container text-on-surface text-sm border border-outline focus:outline-none focus:ring-2 focus:ring-primary">
                            </div>
                            <div class="flex flex-col gap-2">
                                <label for="contact" class="text-xs font-label font-semibold uppercase tracking-wider text-on-surface-variant">Contact</label>
                                <input type="text" id="contact" placeholder="Name, phone or email" class="w-full px-4 py-3 rounded-xl bg-surface-container text-on-surface text-sm border border-outline focus:outline-none focus:ring-2 focus:ring-primary placeholder:text-on-surface-variant/50">
                            </div>
                            <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary-container text-on-primary text-sm font-bold shadow-[0_8px_20px_-4px_rgba(37,99,235,0.4)] hover:shadow-lg transition-all">
                                <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                Confirm Bay Appointment
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-public-layout>
