<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="THE GENT'S CRAFT — premium barbering in Accra, Ghana.">

        <title>THE GENT'S CRAFT | Sharp cuts. Clean finish.</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#11110f] text-stone-100 antialiased">
        <header class="absolute inset-x-0 top-0 z-10">
            <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-6 lg:px-8" aria-label="Main navigation">
                <a href="#home" class="font-serif text-xl font-bold tracking-[0.18em] text-white">
                    THE GENT'S <span class="text-[#d6a354]">CRAFT</span>
                </a>

                <div class="hidden items-center gap-8 text-sm font-medium text-stone-300 md:flex">
                    <a href="#home" class="transition hover:text-[#d6a354]">Home</a>
                    <a href="#services" class="transition hover:text-[#d6a354]">Services</a>
                    <a href="#about" class="transition hover:text-[#d6a354]">About</a>
                    <a href="#gallery" class="transition hover:text-[#d6a354]">Gallery</a>
                    <a href="#reviews" class="transition hover:text-[#d6a354]">Reviews</a>
                    <a href="#contact" class="transition hover:text-[#d6a354]">Contact</a>
                </div>

                <a href="#booking" class="hidden rounded-full bg-[#d6a354] px-5 py-3 text-sm font-bold text-[#191713] transition hover:bg-[#e4bb76] md:inline-flex">
                    Book a chair
                </a>

                <button type="button" class="rounded-lg border border-white/20 p-2 text-stone-200 md:hidden" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </nav>
            <div id="mobile-menu" class="mx-6 hidden rounded-2xl border border-white/10 bg-[#191713]/95 p-4 shadow-2xl backdrop-blur md:hidden">
                <div class="flex flex-col gap-1 text-sm font-medium text-stone-300">
                    <a href="#home" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">Home</a>
                    <a href="#services" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">Services</a>
                    <a href="#about" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">About</a>
                    <a href="#gallery" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">Gallery</a>
                    <a href="#reviews" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">Reviews</a>
                    <a href="#contact" class="rounded-xl px-4 py-3 transition hover:bg-white/5 hover:text-[#d6a354]">Contact</a>
                    <a href="#booking" class="mt-2 rounded-xl bg-[#d6a354] px-4 py-3 text-center font-bold text-[#191713]">Book a chair</a>
                </div>
            </div>
        </header>

        <main>
            <section id="home" class="relative isolate min-h-screen overflow-hidden">
                <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_70%_35%,rgba(130,91,42,0.32),transparent_32%),linear-gradient(110deg,#11110f_20%,#211c16_100%)]"></div>
                <div class="absolute inset-y-0 right-0 -z-10 w-full bg-[linear-gradient(90deg,rgba(17,17,15,1)_0%,rgba(17,17,15,0.62)_48%,rgba(17,17,15,0.08)_100%)] lg:w-3/4"></div>

                <div class="mx-auto grid min-h-screen max-w-7xl items-center gap-12 px-6 pb-16 pt-32 lg:grid-cols-[1.05fr_0.95fr] lg:px-8 lg:pt-24">
                    <div class="max-w-2xl">
                        <p class="mb-6 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#d6a354]">
                            <span class="h-px w-10 bg-[#d6a354]"></span>
                            Premium barbering · Accra, Ghana
                        </p>
                        <h1 class="font-serif text-5xl font-bold leading-[1.05] text-white sm:text-6xl lg:text-8xl">
                            Sharp cuts.<br>
                            <span class="text-[#d6a354]">Clean finish.</span>
                        </h1>
                        <p class="mt-7 max-w-lg text-lg leading-8 text-stone-300">
                            A considered grooming experience for the modern gentleman. Walk in feeling good, walk out looking your best.
                        </p>
                        <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                            <a href="#booking" class="inline-flex items-center justify-center rounded-full bg-[#d6a354] px-7 py-4 font-bold text-[#191713] transition hover:-translate-y-0.5 hover:bg-[#e4bb76]">
                                Book your chair
                                <span class="ml-3 text-lg">↗</span>
                            </a>
                            <a href="#services" class="inline-flex items-center justify-center rounded-full border border-stone-500 px-7 py-4 font-bold text-white transition hover:border-[#d6a354] hover:text-[#d6a354]">
                                Explore services
                            </a>
                        </div>
                        <div class="mt-14 flex items-center gap-4 text-sm text-stone-400">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full border border-[#d6a354]/40 text-[#d6a354]">✦</span>
                            <span>Precision grooming, <strong class="text-stone-200">every time.</strong></span>
                        </div>
                    </div>

                    <div class="relative hidden h-[560px] lg:block">
                        <div class="absolute inset-8 rounded-[14rem_14rem_1.5rem_1.5rem] border border-[#d6a354]/30 bg-[linear-gradient(145deg,rgba(214,163,84,0.18),rgba(28,25,20,0.1))]"></div>
                        <div class="absolute inset-0 flex items-end justify-center overflow-hidden rounded-[14rem_14rem_1.5rem_1.5rem] bg-stone-800/30">
                            <div class="mb-14 text-center">
                                <p class="font-serif text-8xl font-bold text-white/10">GC</p>
                                <p class="mt-3 text-xs uppercase tracking-[0.45em] text-[#d6a354]/70">Crafted with intent</p>
                            </div>
                        </div>
                        <div class="absolute bottom-8 left-0 rounded-xl border border-white/10 bg-[#191713]/80 px-5 py-4 backdrop-blur">
                            <p class="text-xs uppercase tracking-widest text-stone-500">The standard</p>
                            <p class="mt-1 font-serif text-xl text-white">Sharp cuts. Clean finish.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="services" class="bg-[#f3eee6] py-24 text-[#191713] sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                        <div>
                            <p class="mb-5 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#9a6d2f]">
                                <span class="h-px w-10 bg-[#9a6d2f]"></span>
                                Our services
                            </p>
                            <h2 class="max-w-md font-serif text-4xl font-bold leading-tight sm:text-5xl">
                                The right cut for your <span class="text-[#a87935]">everyday.</span>
                            </h2>
                        </div>
                        <p class="max-w-xl text-lg leading-8 text-stone-600 lg:justify-self-end">
                            No rushed appointments. No shortcuts. Just thoughtful grooming, quality products, and a finish that holds up long after you leave the chair.
                        </p>
                    </div>

                    <div class="mt-16 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        <article class="group rounded-2xl border border-stone-300 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354] hover:shadow-xl">
                            <div class="flex items-start justify-between">
                                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#f3eee6] font-serif text-lg text-[#a87935]">01</span>
                                <span class="font-serif text-2xl font-bold text-[#a87935]">GH₵50</span>
                            </div>
                            <h3 class="mt-10 font-serif text-2xl font-bold">Classic Haircut</h3>
                            <p class="mt-3 leading-7 text-stone-600">A timeless cut, shaped to suit your style and finished with care.</p>
                        </article>

                        <article class="group rounded-2xl border border-stone-300 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354] hover:shadow-xl">
                            <div class="flex items-start justify-between">
                                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#f3eee6] font-serif text-lg text-[#a87935]">02</span>
                                <span class="font-serif text-2xl font-bold text-[#a87935]">GH₵70</span>
                            </div>
                            <h3 class="mt-10 font-serif text-2xl font-bold">Skin Fade</h3>
                            <p class="mt-3 leading-7 text-stone-600">Clean, seamless transitions with sharp detailing around every edge.</p>
                        </article>

                        <article class="group rounded-2xl border border-stone-300 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354] hover:shadow-xl">
                            <div class="flex items-start justify-between">
                                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#f3eee6] font-serif text-lg text-[#a87935]">03</span>
                                <span class="font-serif text-2xl font-bold text-[#a87935]">GH₵90</span>
                            </div>
                            <h3 class="mt-10 font-serif text-2xl font-bold">Haircut + Beard</h3>
                            <p class="mt-3 leading-7 text-stone-600">The complete reset: a tailored haircut paired with a refined beard shape.</p>
                        </article>

                        <article class="group rounded-2xl border border-stone-300 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354] hover:shadow-xl">
                            <div class="flex items-start justify-between">
                                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#f3eee6] font-serif text-lg text-[#a87935]">04</span>
                                <span class="font-serif text-2xl font-bold text-[#a87935]">GH₵40</span>
                            </div>
                            <h3 class="mt-10 font-serif text-2xl font-bold">Beard Trim</h3>
                            <p class="mt-3 leading-7 text-stone-600">Precise lines, balanced shape, and a clean finish for your signature look.</p>
                        </article>

                        <article class="group rounded-2xl border border-stone-300 bg-white p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354] hover:shadow-xl sm:col-span-2 lg:col-span-1">
                            <div class="flex items-start justify-between">
                                <span class="flex h-11 w-11 items-center justify-center rounded-full bg-[#f3eee6] font-serif text-lg text-[#a87935]">05</span>
                                <span class="font-serif text-2xl font-bold text-[#a87935]">GH₵40</span>
                            </div>
                            <h3 class="mt-10 font-serif text-2xl font-bold">Kids Haircut</h3>
                            <p class="mt-3 leading-7 text-stone-600">Patient, polished grooming for the younger gentlemen in your family.</p>
                        </article>
                    </div>

                    <div class="mt-12 flex flex-col items-start justify-between gap-5 border-t border-stone-300 pt-7 sm:flex-row sm:items-center">
                        <p class="text-sm text-stone-500">All services include a consultation and finishing touch.</p>
                        <a href="#booking" class="font-bold text-[#8c6129] transition hover:text-[#191713]">Book a chair <span class="ml-2">↗</span></a>
                    </div>
                </div>
            </section>

            <section id="about" class="bg-[#191713] py-24 sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-16 px-6 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-8">
                    <div class="relative min-h-[480px] overflow-hidden rounded-[2rem] border border-[#d6a354]/20 bg-[radial-gradient(circle_at_50%_35%,rgba(214,163,84,0.3),transparent_28%),linear-gradient(145deg,#3a2c1c,#171614_68%)]">
                        <div class="absolute inset-8 rounded-[1.5rem] border border-[#d6a354]/20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <p class="font-serif text-[10rem] font-bold leading-none text-white/10">GC</p>
                                <p class="mt-5 text-xs font-bold uppercase tracking-[0.4em] text-[#d6a354]">Established for the craft</p>
                            </div>
                        </div>
                        <div class="absolute bottom-7 left-7 right-7 flex items-center justify-between border-t border-white/10 pt-5 text-xs uppercase tracking-[0.2em] text-stone-400">
                            <span>Accra, Ghana</span>
                            <span>Since 2024</span>
                        </div>
                    </div>

                    <div>
                        <p class="mb-5 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#d6a354]">
                            <span class="h-px w-10 bg-[#d6a354]"></span>
                            More than a haircut
                        </p>
                        <h2 class="max-w-xl font-serif text-4xl font-bold leading-tight text-white sm:text-5xl">
                            A better standard of <span class="text-[#d6a354]">grooming.</span>
                        </h2>
                        <div class="mt-7 max-w-xl space-y-5 text-lg leading-8 text-stone-400">
                            <p>
                                THE GENT'S CRAFT is a modern barbershop built around one simple idea: every gentleman deserves to leave the chair feeling like the best version of himself.
                            </p>
                            <p>
                                From the first consultation to the final clean-up, we take our time to understand your style and deliver a finish that feels personal, precise, and unmistakably yours.
                            </p>
                        </div>

                        <div class="mt-10 grid max-w-xl gap-6 border-t border-white/10 pt-8 sm:grid-cols-3">
                            <div>
                                <p class="font-serif text-3xl font-bold text-[#d6a354]">01</p>
                                <p class="mt-2 text-sm leading-6 text-stone-300">Attention to detail</p>
                            </div>
                            <div>
                                <p class="font-serif text-3xl font-bold text-[#d6a354]">02</p>
                                <p class="mt-2 text-sm leading-6 text-stone-300">Professional service</p>
                            </div>
                            <div>
                                <p class="font-serif text-3xl font-bold text-[#d6a354]">03</p>
                                <p class="mt-2 text-sm leading-6 text-stone-300">A finish that lasts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="gallery" class="bg-[#f3eee6] py-24 text-[#191713] sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                        <div>
                            <p class="mb-5 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#9a6d2f]">
                                <span class="h-px w-10 bg-[#9a6d2f]"></span>
                                From the chair
                            </p>
                            <h2 class="font-serif text-4xl font-bold leading-tight sm:text-5xl">
                                The craft in <span class="text-[#a87935]">focus.</span>
                            </h2>
                        </div>
                        <p class="max-w-md text-lg leading-8 text-stone-600 sm:text-right">
                            A glimpse of the details, textures, and quiet confidence behind every appointment.
                        </p>
                    </div>

                    <div class="mt-14 grid gap-4 sm:grid-cols-2 lg:grid-cols-4 lg:grid-rows-2">
                        <a href="#booking" class="group relative min-h-[360px] overflow-hidden rounded-2xl bg-stone-300 sm:col-span-2 lg:row-span-2" aria-label="Book an appointment after viewing the gallery">
                            <img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&fit=crop&w=1200&q=85" alt="Barber styling a client's hair" class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/10 to-transparent"></div>
                            <div class="absolute bottom-7 left-7 right-7 flex items-end justify-between text-white">
                                <div>
                                    <p class="text-xs font-bold uppercase tracking-[0.24em] text-[#e4bb76]">01 · Precision</p>
                                    <p class="mt-2 font-serif text-2xl font-bold">The finishing touch</p>
                                </div>
                                <span class="flex h-11 w-11 items-center justify-center rounded-full border border-white/40 text-xl transition group-hover:border-[#e4bb76] group-hover:text-[#e4bb76]">↗</span>
                            </div>
                        </a>

                        <div class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-stone-300">
                            <img src="https://images.pexels.com/photos/1805600/pexels-photo-1805600.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Black client receiving a detailed haircut" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <p class="absolute bottom-5 left-5 text-xs font-bold uppercase tracking-[0.2em] text-white">02 · Detail</p>
                        </div>

                        <div class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-stone-300">
                            <img src="https://images.pexels.com/photos/1570807/pexels-photo-1570807.jpeg?auto=compress&cs=tinysrgb&w=900" alt="African barber shop interior and grooming station" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <p class="absolute bottom-5 left-5 text-xs font-bold uppercase tracking-[0.2em] text-white">03 · The space</p>
                        </div>

                        <div class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-stone-300">
                            <img src="https://images.pexels.com/photos/3998426/pexels-photo-3998426.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Black barber working carefully with clippers" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <p class="absolute bottom-5 left-5 text-xs font-bold uppercase tracking-[0.2em] text-white">04 · The ritual</p>
                        </div>

                        <div class="group relative min-h-[260px] overflow-hidden rounded-2xl bg-stone-300">
                            <img src="https://images.pexels.com/photos/3764014/pexels-photo-3764014.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Black client receiving a beard and haircut finish" class="h-full w-full object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                            <p class="absolute bottom-5 left-5 text-xs font-bold uppercase tracking-[0.2em] text-white">05 · The finish</p>
                        </div>
                    </div>

                    <p class="mt-6 text-xs leading-6 text-stone-500">
                        Sample African barbershop photography for demonstration purposes. Replace with your own Ghana-based images.
                    </p>
                </div>
            </section>

            <section id="reviews" class="bg-[#191713] py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">
                        <div>
                            <p class="mb-5 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#d6a354]">
                                <span class="h-px w-10 bg-[#d6a354]"></span>
                                The word on the street
                            </p>
                            <h2 class="font-serif text-4xl font-bold leading-tight text-white sm:text-5xl">
                                Good work gets <span class="text-[#d6a354]">noticed.</span>
                            </h2>
                        </div>
                        <p class="max-w-md text-lg leading-8 text-stone-400 sm:text-right">
                            A few words from our fictional demo guests about the experience at THE GENT'S CRAFT.
                        </p>
                    </div>

                    <div class="mt-14 grid gap-5 lg:grid-cols-3">
                        <article class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354]/50">
                            <div class="flex gap-1 text-[#d6a354]" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
                            <blockquote class="mt-8 font-serif text-2xl leading-9 text-stone-100">
                                “The attention to detail is different. I showed my barber one photo and he understood exactly what I wanted.”
                            </blockquote>
                            <div class="mt-8 flex items-center gap-3 border-t border-white/10 pt-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#d6a354] font-serif font-bold text-[#191713]">K</span>
                                <div>
                                    <p class="font-bold text-white">Kwame A.</p>
                                    <p class="text-sm text-stone-500">Demo guest · Accra</p>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354]/50">
                            <div class="flex gap-1 text-[#d6a354]" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
                            <blockquote class="mt-8 font-serif text-2xl leading-9 text-stone-100">
                                “It feels premium without feeling intimidating. Great music, a calm space, and the cleanest fade I have had in a long time.”
                            </blockquote>
                            <div class="mt-8 flex items-center gap-3 border-t border-white/10 pt-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#d6a354] font-serif font-bold text-[#191713]">N</span>
                                <div>
                                    <p class="font-bold text-white">Nana E.</p>
                                    <p class="text-sm text-stone-500">Demo guest · Accra</p>
                                </div>
                            </div>
                        </article>

                        <article class="rounded-2xl border border-white/10 bg-white/[0.04] p-7 transition duration-300 hover:-translate-y-1 hover:border-[#d6a354]/50">
                            <div class="flex gap-1 text-[#d6a354]" aria-label="5 out of 5 stars">★ ★ ★ ★ ★</div>
                            <blockquote class="mt-8 font-serif text-2xl leading-9 text-stone-100">
                                “My son actually enjoyed his haircut. The team was patient, professional, and the finish was spot on.”
                            </blockquote>
                            <div class="mt-8 flex items-center gap-3 border-t border-white/10 pt-5">
                                <span class="flex h-10 w-10 items-center justify-center rounded-full bg-[#d6a354] font-serif font-bold text-[#191713]">Y</span>
                                <div>
                                    <p class="font-bold text-white">Yaw T.</p>
                                    <p class="text-sm text-stone-500">Demo guest · Accra</p>
                                </div>
                            </div>
                        </article>
                    </div>

                    <p class="mt-8 text-center text-xs uppercase tracking-[0.2em] text-stone-600">
                        Fictional sample testimonials for demonstration purposes
                    </p>
                </div>
            </section>

            <section id="contact" class="bg-[#f3eee6] py-24 text-[#191713] sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-12 px-6 lg:grid-cols-[1fr_0.9fr] lg:px-8">
                    <div>
                        <p class="mb-5 flex items-center gap-3 text-xs font-bold uppercase tracking-[0.28em] text-[#9a6d2f]">
                            <span class="h-px w-10 bg-[#9a6d2f]"></span>
                            Find your way to us
                        </p>
                        <h2 class="max-w-xl font-serif text-4xl font-bold leading-tight sm:text-5xl">
                            Your next great cut is in <span class="text-[#a87935]">Accra.</span>
                        </h2>
                        <p class="mt-7 max-w-xl text-lg leading-8 text-stone-600">
                            Drop by the chair, take a seat, and let us take care of the rest. This is a demo location and contact block ready for a real barbershop's details.
                        </p>

                        <div class="mt-10 grid gap-8 sm:grid-cols-2">
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.2em] text-stone-500">Location</p>
                                <p class="mt-3 text-lg font-bold">Accra, Ghana</p>
                                <p class="mt-1 text-stone-600">Demo address · Replace with your address</p>
                            </div>
                            <div>
                                <p class="text-xs font-bold uppercase tracking-[0.2em] text-stone-500">Opening hours</p>
                                <div class="mt-3 space-y-1 text-stone-600">
                                    <p><span class="font-bold text-[#191713]">Mon – Sat:</span> 9:00 AM – 8:00 PM</p>
                                    <p><span class="font-bold text-[#191713]">Sunday:</span> 12:00 PM – 6:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative min-h-[360px] overflow-hidden rounded-[2rem] bg-[#d9c5a4]">
                        <div class="absolute inset-0 bg-[linear-gradient(135deg,rgba(48,40,29,0.9),rgba(164,122,62,0.55)),radial-gradient(circle_at_75%_30%,rgba(255,242,205,0.3),transparent_26%)]"></div>
                        <div class="absolute inset-6 rounded-[1.5rem] border border-white/20"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-center text-white">
                            <div>
                                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full border border-[#e4bb76] text-3xl text-[#e4bb76]">⌖</div>
                                <p class="mt-5 font-serif text-3xl font-bold">Accra, Ghana</p>
                                <p class="mt-2 text-sm text-stone-200">Map placeholder for the demo</p>
                            </div>
                        </div>
                        <span class="absolute bottom-7 left-7 text-xs font-bold uppercase tracking-[0.2em] text-[#e4bb76]">Location preview</span>
                    </div>
                </div>
            </section>

            <section id="booking" class="bg-[#d6a354] py-20 text-[#191713] sm:py-24">
                <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 sm:flex-row sm:items-center sm:justify-between lg:px-8">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.28em] text-[#5f431d]">Ready when you are</p>
                        <h2 class="mt-3 max-w-2xl font-serif text-4xl font-bold leading-tight sm:text-5xl">Leave the chair looking your best.</h2>
                        <p class="mt-4 max-w-xl text-lg text-[#5f431d]">Message us on WhatsApp to book your next appointment. This is a demo link for presentation purposes.</p>
                    </div>
                    <div class="flex flex-col gap-3 sm:min-w-[210px]">
                        <a href="https://wa.me/233000000000?text=Hello%20THE%20GENT%27S%20CRAFT%2C%20I%27d%20like%20to%20book%20a%20chair." target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center rounded-full bg-[#191713] px-7 py-4 font-bold text-white transition hover:bg-[#302a22]">
                            WhatsApp us <span class="ml-3 text-lg">↗</span>
                        </a>
                        <a href="tel:+233000000000" class="inline-flex items-center justify-center rounded-full border border-[#6f4d20] px-7 py-4 font-bold text-[#191713] transition hover:bg-[#e4bb76]">
                            Call +233 00 000 0000
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-[#11110f] py-12 text-stone-400">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="flex flex-col justify-between gap-10 border-b border-white/10 pb-10 md:flex-row">
                    <div class="max-w-xs">
                        <a href="#home" class="font-serif text-xl font-bold tracking-[0.18em] text-white">THE GENT'S <span class="text-[#d6a354]">CRAFT</span></a>
                        <p class="mt-4 leading-7">Sharp cuts. Clean finish. Every time.</p>
                        <p class="mt-2 text-sm text-stone-600">A fictional demo barbershop in Accra, Ghana.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-x-14 gap-y-8 text-sm sm:grid-cols-3">
                        <div>
                            <p class="font-bold uppercase tracking-[0.15em] text-stone-300">Explore</p>
                            <div class="mt-4 space-y-3">
                                <a href="#services" class="block transition hover:text-[#d6a354]">Services</a>
                                <a href="#about" class="block transition hover:text-[#d6a354]">About</a>
                                <a href="#gallery" class="block transition hover:text-[#d6a354]">Gallery</a>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold uppercase tracking-[0.15em] text-stone-300">Visit</p>
                            <div class="mt-4 space-y-3">
                                <a href="#contact" class="block transition hover:text-[#d6a354]">Location</a>
                                <a href="#reviews" class="block transition hover:text-[#d6a354]">Reviews</a>
                                <a href="#booking" class="block transition hover:text-[#d6a354]">Book a chair</a>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold uppercase tracking-[0.15em] text-stone-300">Social</p>
                            <div class="mt-4 space-y-3">
                                <a href="#contact" class="block transition hover:text-[#d6a354]">Instagram</a>
                                <a href="#contact" class="block transition hover:text-[#d6a354]">TikTok</a>
                                <a href="#contact" class="block transition hover:text-[#d6a354]">Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between gap-3 pt-6 text-xs text-stone-600 sm:flex-row">
                    <p>© {{ date('Y') }} THE GENT'S CRAFT. Demo website.</p>
                    <p>Built to showcase what your barbershop could look like online.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
