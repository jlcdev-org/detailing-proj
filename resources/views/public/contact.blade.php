<x-public-layout :title="'Contact & Inquiry'">
    <div x-data="{ submitted: false, failed: false, preferredContact: 'Email' }" class="bg-surface">
        {{-- Priority alert --}}
        <div class="bg-primary text-on-primary">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-3 flex flex-col sm:flex-row items-center justify-center gap-2 sm:gap-4 text-center text-sm">
                <span class="inline-flex items-center gap-2 font-bold">
                    <span class="relative flex size-2.5">
                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-surface opacity-75"></span>
                        <span class="relative inline-flex size-2.5 rounded-full bg-surface"></span>
                    </span>
                    Priority Express Alert
                </span>
                <span class="text-on-primary/85">Need urgent bay time? Live dispatch is currently assigning priority lanes.</span>
                <a href="tel:+18005557378" class="inline-flex items-center gap-1 font-bold underline underline-offset-4 hover:no-underline">
                    Call Live Bay Dispatch
                    <span class="material-symbols-outlined text-[18px]">call</span>
                </a>
            </div>
        </div>

        {{-- Hero --}}
        <section class="relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(59,130,246,0.14),transparent_58%)] pointer-events-none"></div>
            <div class="relative max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24 flex flex-col gap-12">
                <div class="max-w-3xl flex flex-col gap-6">
                    <span class="inline-flex items-center gap-2 w-fit px-3 py-1.5 rounded-full bg-surface-container text-primary text-xs font-label font-semibold">
                        <span class="material-symbols-outlined text-[16px]">support_agent</span>
                        Studio Client Concierge
                    </span>
                    <h1 class="text-4xl lg:text-6xl font-extrabold tracking-tight leading-[1.08] text-on-surface">Get in Touch with <span class="text-primary">Studio Concierge.</span></h1>
                    <p class="max-w-2xl text-lg leading-relaxed text-on-surface-variant">Connect with a detailing specialist for scheduling, estimates, or service guidance. Every inquiry receives a guaranteed response within 60 minutes during studio hours.</p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden divide-x divide-y lg:divide-y-0 divide-outline-variant/30">
                    <div class="p-5 md:p-6 flex flex-col gap-1"><span class="text-xs uppercase tracking-wider text-on-surface-variant">Average Queue Time</span><strong class="text-xl text-primary">&lt; 14 Mins</strong></div>
                    <div class="p-5 md:p-6 flex flex-col gap-1"><span class="text-xs uppercase tracking-wider text-on-surface-variant">Bay Availability</span><strong class="text-xl text-tertiary">Lanes Open</strong></div>
                    <div class="p-5 md:p-6 flex flex-col gap-1"><span class="text-xs uppercase tracking-wider text-on-surface-variant">Certified Technicians</span><strong class="text-xl text-on-surface">Master IDA</strong></div>
                    <div class="p-5 md:p-6 flex flex-col gap-1"><span class="text-xs uppercase tracking-wider text-on-surface-variant">Coverage</span><strong class="text-xl text-on-surface">100% Insured</strong></div>
                </div>
            </div>
        </section>

        {{-- Contact channels --}}
        <section class="bg-surface-container-low">
            <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-20 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <article class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-5">
                    <span class="size-11 rounded-xl bg-surface-container flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">phone_in_talk</span></span>
                    <div class="flex flex-col gap-2 flex-1"><h2 class="text-lg font-bold text-on-surface">Direct Bay Dispatch</h2><a href="tel:+18005557378" class="text-primary font-bold">(800) 555-SERV</a><p class="text-sm text-on-surface-variant">Immediate scheduling and priority lane assistance.</p></div>
                    <a href="tel:+18005557378" class="inline-flex justify-center items-center gap-2 h-11 rounded-xl bg-primary-container text-on-primary text-sm font-bold">Tap to Call Bay</a>
                </article>
                <article class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-5">
                    <span class="size-11 rounded-xl bg-surface-container flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">location_on</span></span>
                    <div class="flex flex-col gap-2 flex-1"><h2 class="text-lg font-bold text-on-surface">Studio Facility</h2><address class="not-italic text-sm leading-relaxed text-on-surface-variant">1840 Precision Drive<br>Riverton, CA 90210</address></div>
                    <a href="#facility-guide" class="inline-flex justify-center items-center gap-2 h-11 rounded-xl bg-surface-container text-primary text-sm font-bold">View Arrival Map</a>
                </article>
                <article class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-5">
                    <span class="size-11 rounded-xl bg-surface-container flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">alternate_email</span></span>
                    <div class="flex flex-col gap-2 flex-1"><h2 class="text-lg font-bold text-on-surface">Email Concierge</h2><a href="mailto:concierge@serviceflow.com" class="text-primary text-sm font-bold break-all">concierge@serviceflow.com</a><p class="text-sm text-on-surface-variant">Quotes, vehicle details, and care plans.</p></div>
                    <a href="#inquiry-form-section" class="inline-flex justify-center items-center gap-2 h-11 rounded-xl bg-surface-container text-primary text-sm font-bold">Open Quote Form</a>
                </article>
                <article class="bg-surface-container-lowest rounded-2xl shadow-sm p-6 flex flex-col gap-5">
                    <span class="size-11 rounded-xl bg-surface-container flex items-center justify-center text-primary"><span class="material-symbols-outlined text-[20px]">schedule</span></span>
                    <div class="flex flex-col gap-2 flex-1"><h2 class="text-lg font-bold text-on-surface">Service Hours</h2><p class="text-sm text-on-surface-variant"><strong class="text-on-surface">Mon–Sat</strong> 7:30AM–7PM<br><strong class="text-on-surface">Sun</strong> 9AM–5PM</p></div>
                    <span class="inline-flex items-center justify-center gap-2 h-11 rounded-xl bg-tertiary text-on-tertiary text-sm font-bold"><span class="size-2 rounded-full bg-current"></span>Lanes Open</span>
                </article>
            </div>
        </section>

        {{-- Inquiry form --}}
        <section id="inquiry-form-section" class="scroll-mt-24 max-w-7xl mx-auto px-4 md:px-8 py-16 lg:py-24 flex flex-col gap-6">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 px-5 py-4 rounded-2xl bg-surface-container">
                <div class="flex items-center gap-3"><span class="material-symbols-outlined text-primary text-[20px]">sync</span><div><p class="font-bold text-on-surface">Synchronized Lead Dispatch Queue</p><p class="text-sm text-on-surface-variant">Your inquiry is routed to the next available concierge.</p></div></div>
                <span class="inline-flex items-center gap-2 text-xs font-semibold text-on-surface-variant"><span class="material-symbols-outlined text-tertiary text-[20px]">lock</span>SSL encrypted submission</span>
            </div>

            <div x-show="submitted" x-cloak x-transition class="bg-tertiary text-on-tertiary rounded-2xl p-5 flex items-start gap-3" role="status">
                <span class="material-symbols-outlined text-[20px]">task_alt</span><div><p class="font-bold">Inquiry Received &amp; Queued!</p><p class="text-sm opacity-90">A studio concierge will contact you within 60 minutes.</p></div>
            </div>
            <div x-show="failed" x-cloak x-transition class="bg-error-container text-on-error-container rounded-2xl p-5 flex items-start gap-3" role="alert">
                <span class="material-symbols-outlined text-[20px]">error</span><div><p class="font-bold">We couldn't deliver your inquiry.</p><p class="text-sm">Please call Live Bay Dispatch at (800) 555-SERV for immediate help.</p></div>
            </div>

            <form @submit.prevent="failed = false; submitted = true; $nextTick(() => $el.closest('section').scrollIntoView({ behavior: 'smooth' }))" class="bg-surface-container-lowest rounded-3xl shadow-sm p-6 md:p-10 flex flex-col gap-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14">
                    <fieldset class="flex flex-col gap-6">
                        <legend class="text-xl font-bold text-on-surface mb-6">Client &amp; Vehicle Details</legend>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Full Name <span class="text-error">*</span></span><input required type="text" name="name" autocomplete="name" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0" placeholder="Your full name"></label>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Email Address <span class="text-error">*</span></span><input required type="email" name="email" autocomplete="email" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0" placeholder="you@example.com"><span class="text-xs text-on-surface-variant">We'll send your queue confirmation here.</span></label>
                        <div class="flex flex-col gap-3"><label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Phone Number</span><input type="tel" name="phone" autocomplete="tel" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0" placeholder="(555) 000-0000"></label><label class="inline-flex items-center gap-2 text-xs text-on-surface-variant"><input type="checkbox" name="sms_opt_in" class="size-4 rounded text-primary">I agree to receive scheduling updates by SMS.</label></div>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Inquiry Category</span><select name="category" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0"><option>Paint Correction &amp; Ceramic</option><option>Standard Wash</option><option>Membership</option><option>Fleet Care</option><option>General Inquiry</option></select></label>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Existing Booking Reference <span class="font-normal text-on-surface-variant">(optional)</span></span><input type="text" name="booking_reference" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0" placeholder="SF-000000"></label>
                    </fieldset>

                    <fieldset class="flex flex-col gap-6">
                        <legend class="text-xl font-bold text-on-surface mb-6">Scope &amp; Details</legend>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Vehicle Year/Make/Model</span><input type="text" name="vehicle" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0" placeholder="2024 BMW M4"></label>
                        <div class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Preferred Contact Method</span><div class="grid grid-cols-3 gap-2" role="radiogroup"><template x-for="method in ['Email', 'Phone', 'SMS']" :key="method"><button type="button" @click="preferredContact = method" :class="preferredContact === method ? 'bg-primary-container text-on-primary' : 'bg-surface text-on-surface-variant'" :aria-checked="preferredContact === method" class="h-11 rounded-xl text-sm font-bold transition-all" role="radio" x-text="method"></button></template><input type="hidden" name="preferred_contact" :value="preferredContact"></div></div>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Inquiry Description <span class="text-error">*</span></span><textarea required name="description" rows="6" class="p-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0 resize-y" placeholder="Tell us about your vehicle, concerns, and desired result..."></textarea></label>
                        <label class="flex flex-col gap-2"><span class="text-sm font-semibold text-on-surface">Urgency Level</span><select name="urgency" class="h-12 px-4 rounded-xl bg-surface text-on-surface focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#2563eb] transition-all border-0"><option>Standard</option><option>Priority Express</option></select></label>
                        <label class="min-h-28 rounded-2xl border-2 border-dashed border-outline-variant flex flex-col items-center justify-center gap-2 p-5 text-center cursor-pointer hover:bg-surface-container-low transition-colors"><input type="file" name="attachments[]" multiple class="sr-only"><span class="material-symbols-outlined text-primary text-[28px]">cloud_upload</span><span class="text-sm font-bold text-on-surface">Upload vehicle photos or documents</span><span class="text-xs text-on-surface-variant">Tap to select files</span></label>
                    </fieldset>
                </div>
                <button type="submit" class="w-full min-h-14 px-6 rounded-xl bg-primary text-on-primary font-bold inline-flex items-center justify-center gap-2 shadow-[0_8px_20px_-4px_rgba(37,99,235,0.4)] hover:bg-primary-container transition-all"><span>Submit Inquiry to Studio Concierge</span><span class="material-symbols-outlined text-[20px]">send</span></button>
            </form>
            <p class="text-center text-xs leading-relaxed text-on-surface-variant"><span class="material-symbols-outlined text-[16px] align-text-bottom">shield</span> Your information is used only to coordinate ServiceFlow care. We never sell or share client details.</p>
        </section>

        {{-- Facility guide --}}
        <section id="facility-guide" class="scroll-mt-24 bg-surface-container-low py-16 lg:py-24">
            <div class="max-w-7xl mx-auto px-4 md:px-8">
                <div class="bg-surface-container-lowest rounded-3xl shadow-sm overflow-hidden grid grid-cols-1 lg:grid-cols-5">
                    <div class="lg:col-span-3 min-h-80 bg-surface-container relative overflow-hidden" aria-label="Stylized map showing the ServiceFlow studio location">
                        <svg viewBox="0 0 800 430" class="absolute inset-0 w-full h-full" role="img" aria-labelledby="map-title map-description">
                            <title id="map-title">ServiceFlow facility map</title><desc id="map-description">Map illustration showing nearby streets and the ServiceFlow studio.</desc>
                            <rect width="800" height="430" fill="#e9eef6"/><path d="M0 100H800M0 330H800M175 0V430M640 0V430" stroke="#fff" stroke-width="34"/><path d="M0 100H800M0 330H800M175 0V430M640 0V430" stroke="#b8c5d8" stroke-width="2" stroke-dasharray="12 10"/>
                            <rect x="230" y="145" width="150" height="100" rx="12" fill="#cbd5e1"/><rect x="425" y="135" width="150" height="115" rx="12" fill="#bfdbfe"/><rect x="230" y="365" width="180" height="45" rx="10" fill="#d1fae5"/><circle cx="505" cy="292" r="37" fill="#2563eb" opacity=".18"/><circle cx="505" cy="292" r="19" fill="#2563eb"/><circle cx="505" cy="292" r="7" fill="#fff"/><text x="535" y="298" fill="#172033" font-size="18" font-weight="700">ServiceFlow Studio</text>
                        </svg>
                    </div>
                    <div class="lg:col-span-2 p-8 lg:p-12 flex flex-col justify-center gap-6">
                        <span class="inline-flex items-center gap-2 text-sm font-semibold uppercase tracking-wider text-tertiary"><span class="material-symbols-outlined text-[20px]">near_me</span>Facility Guide</span>
                        <div class="flex flex-col gap-3"><h2 class="text-3xl font-extrabold tracking-tight text-on-surface">Arrive with confidence.</h2><p class="text-on-surface-variant leading-relaxed">Enter from Precision Drive and follow the blue ServiceFlow signs to the concierge lane. Covered client parking is available beside reception.</p></div>
                        <address class="not-italic flex items-start gap-3 text-on-surface"><span class="material-symbols-outlined text-primary text-[20px]">location_on</span><span><strong>ServiceFlow Studio</strong><br><span class="text-on-surface-variant">1840 Precision Drive<br>Riverton, CA 90210</span></span></address>
                        <a href="https://www.google.com/maps/search/?api=1&query=1840+Precision+Drive+Riverton+CA+90210" target="_blank" rel="noopener noreferrer" class="inline-flex w-fit items-center gap-2 px-5 py-3 rounded-xl bg-primary-container text-on-primary text-sm font-bold">Get Directions<span class="material-symbols-outlined text-[20px]">open_in_new</span></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-public-layout>
