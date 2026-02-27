<?php include('head.php') ?>

<body class="font-body text-gray-600 antialiased bg-white">





    <section id="home" class="relative bg-white pt-12 pb-20 md:pt-16 md:pb-32 overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-20" aria-hidden="true">
            <svg class="absolute top-0 right-0 transform translate-x-1/3 -translate-y-1/3" width="600" height="600"
                fill="none" viewBox="0 0 600 600">
                <circle cx="300" cy="300" r="300" fill="url(#brandGradient1)" />
                <defs>
                    <radialGradient id="brandGradient1" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(300 300) rotate(90) scale(300)">
                        <stop stop-color="#8cd424" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
        </div>

        <div class="absolute inset-0 pointer-events-none opacity-20" aria-hidden="true">
            <svg class="absolute top-0 right-0 transform translate-x-1/2 -translate-y-1/2" width="600" height="600"
                fill="none" viewBox="0 0 600 600">
                <circle cx="300" cy="300" r="300" fill="url(#brandGradient2)" />
                <defs>
                    <radialGradient id="brandGradient2" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(300 300) rotate(90) scale(300)">
                        <stop stop-color="#E9F7CD" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
            <div
                class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgdmlld0JveD0iMCAwIDQwIDQwIj48ZyBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiM4Y2Q0MjQiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTAgMGg0MHY0MEgwVjB6bTIwIDIwaDIwdjIwSDIWMjB6TTAgMjBoMjB2MjBIMFYyMHoyMCAwaDIwdjIwSDIwVjB6Ii8+PC9nPjwvZz48L3N2Zz4=')] opacity-30">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
            <div class="grid md:grid-cols-12 gap-10 md:gap-12 lg:gap-16 items-center">

                <div class="md:col-span-6 text-left space-y-6 md:space-y-8">
                    <div>
                        <span
                            class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-[10px] md:text-xs px-3 py-1.5 md:px-4 md:py-1.5 bg-brand/10 rounded-full mb-4 md:mb-5">
                            <svg class="w-3 h-3 md:w-4 md:h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Trusted UK Care Providers
                        </span>

                        <h1
                            class="font-heading text-4xl sm:text-5xl lg:text-7xl leading-[1.15] font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                            Get the help and
                            <span class="text-brand relative ">home support
                                <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30"
                                    viewBox="0 0 100 10" preserveAspectRatio="none">
                                    <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" />
                                </svg>
                            </span>
                            you need.
                        </h1>

                        <p class="text-base text-justify md:text-lg lg:text-xl text-gray-600 leading-relaxed max-w-xl">
                            We provide premium, compassionate care in the comfort of your own home. Our dedicated
                            professionals ensure your independence and well-being every single day.
                        </p>
                    </div>

                    <div class="flex flex-row flex-wrap justify-center md:justify-start gap-3 sm:gap-4 mt-6 md:mt-0">
                        <a href="#contact"
                            class="inline-flex items-center justify-center px-4 py-2.5 md:px-6 md:py-3 border border-transparent text-sm md:text-lg font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-xl shadow-black/20 hover:shadow-2xl hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                            Book Assessment
                        </a>
                        <a href="#services"
                            class="inline-flex items-center justify-center px-4 py-2.5 md:px-6 md:py-3 border-2 border-darkText text-sm md:text-lg font-bold rounded-md text-darkText bg-white hover:bg-darkText hover:text-white shadow-md shadow-black/10 hover:shadow-xl hover:shadow-black/20 transition-all duration-300 transform hover:-translate-y-1">
                            Our Services
                        </a>
                    </div>
                </div>

                <div class="md:col-span-6 relative mt-8 md:mt-0">
                    <div
                        class="relative rounded-2xl md:rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-[6px] md:border-8 border-white group">
                        <img class="h-[300px] sm:h-[400px] md:h-[500px] w-full object-cover transition-transform duration-700 group-hover:scale-105"
                            src="img/hero1.jpg" alt="Compassionate Caregiver holding hands with senior">

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-[85%] sm:w-[70%] md:w-auto md:translate-x-0 md:-bottom-10 md:-left-10 lg:-left-12 bg-white p-4 md:p-6 rounded-2xl shadow-2xl flex items-center gap-3 md:gap-4 border border-gray-100 group transition-all hover:border-brand/30">
                        <div
                            class="w-12 h-12 md:w-16 md:h-16 rounded-xl bg-brand/10 text-brand flex items-center justify-center font-bold text-2xl md:text-4xl font-heading flex-shrink-0">
                            9.8
                        </div>
                        <div>
                            <p
                                class="font-heading font-bold text-sm sm:text-base md:text-xl text-darkText whitespace-nowrap">
                                Excellent Care</p>
                            <span class="text-brand font-bold text-xs md:text-sm block sm:inline">★★★★★</span>
                            <span
                                class="text-xs md:text-sm text-gray-500 ml-0 sm:ml-1 hidden sm:inline-block">Independent
                                Reviews</span>
                        </div>
                    </div>

                    <div
                        class="hidden lg:block absolute -top-8 -right-8 w-20 h-20 bg-brand/10 rounded-full border-2 border-brand/20 -z-10">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="services" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-xs px-4 py-1.5 bg-brand/10 rounded-full mb-5">
                    What We Offer
                </span>


                <h1 class="font-heading text-2xl  md:text-5xl  font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                    Comprehensive
                    <span class="text-brand relative ">Care
                        <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30" viewBox="0 0 100 10"
                            preserveAspectRatio="none">
                            <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    Solutions
                </h1>
                <p class="text-gray-600 text-lg">Flexible support options designed around your specific requirements and
                    routines.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">

                <div
                    class="bg-white rounded-md  border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col">
                    <div
                        class="relative h-60 rounded-md overflow-hidden border-[6px] border-white shadow-sm ring-1 ring-black/5 ">
                        <img src="img/s1.jpg" alt="Respite Care Services"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-5">
                        <h3
                            class="font-heading text-xl md:text-2xl font-bold text-darkText mb-3 uppercase tracking-tight">
                            Respite Care Services</h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">Temporary, high-quality
                            care to provide family caregivers a much-needed break, ensuring your loved ones remain safe
                            and comfortable.</p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                            Learn more
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-md  border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col">
                    <div
                        class="relative h-60 rounded-md overflow-hidden border-[6px] border-white shadow-sm ring-1 ring-black/5 ">
                        <img src="img/s2.jpg" alt="Respite Care Services"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-5">
                        <h3
                            class="font-heading text-xl md:text-2xl font-bold text-darkText mb-3 uppercase tracking-tight">
                            Home Care Services</h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">Compassionate daily
                            assistance tailored to your specific needs, enabling you to live happily and independently
                            in your own home.</p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                            Learn more
                        </a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-md  border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col">
                    <div
                        class="relative h-60 rounded-md overflow-hidden border-[6px] border-white shadow-sm ring-1 ring-black/5 ">
                        <img src="img/s3.jpg" alt="Respite Care Services"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-5">
                        <h3
                            class="font-heading text-xl md:text-2xl font-bold text-darkText mb-3 uppercase tracking-tight">
                            Safer Recruitment</h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">Rigorous vetting and
                            comprehensive training processes to ensure only the most qualified and trustworthy
                            professionals enter your home.</p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                            Learn more
                        </a>
                    </div>
                </div>







            </div>

            <div class="mt-16 text-center">
                <a href="#"
                    class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base md:text-lg font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-xl shadow-black/20 hover:shadow-2xl hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                    View All Services
                </a>
            </div>

        </div>
    </section>




    <section id="why-us" class="py-20 bg-darkText text-white relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-20 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-brand via-darkText to-transparent">
        </div>
        <div
            class="absolute top-0 right-0 w-1/2 h-full opacity-5 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-white to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <div>
                    <span
                        class="inline-flex items-center gap-2 text-brand font-bold tracking-widest uppercase text-xs mb-4">
                        <span class="w-8 h-[2px] bg-brand block"></span>
                        The Careline Difference
                    </span>

                    <h2 class="font-heading text-2xl md:text-5xl font-bold mb-6 leading-tight">
                        Why families across the UK <span class="text-brand italic">trust</span> Careline.
                    </h2>

                    <p class="text-gray-300 text-lg mb-10 leading-relaxed max-w-lg">
                        We don't just provide care; we build meaningful relationships. Our rigorous standards ensure
                        safety, while our genuine empathy ensures happiness.
                    </p>

                    <div class="space-y-4">
                        <div
                            class="flex items-start gap-5 p-4 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300 group cursor-default">
                            <div
                                class="w-14 h-14 rounded-xl bg-brand/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand transition-colors duration-300">
                                <svg class="w-6 h-6 text-brand group-hover:text-white transition-colors duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading text-2xl font-bold mb-2 text-white">Tailored Care Plans</h4>
                                <p class="text-gray-400 leading-relaxed text-sm md:text-base">Services specifically
                                    designed to adapt as your health or lifestyle needs change over time.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-5 p-4 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300 group cursor-default">
                            <div
                                class="w-14 h-14 rounded-xl bg-brand/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand transition-colors duration-300">
                                <svg class="w-6 h-6 text-brand group-hover:text-white transition-colors duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading text-2xl font-bold mb-2 text-white">24/7 On-Call Support</h4>
                                <p class="text-gray-400 leading-relaxed text-sm md:text-base">Our dedicated management
                                    team is always available, day or night, ensuring peace of mind.</p>
                            </div>
                        </div>

                        <div
                            class="flex items-start gap-5 p-4 rounded-2xl hover:bg-white/5 border border-transparent hover:border-white/10 transition-all duration-300 group cursor-default">
                            <div
                                class="w-14 h-14 rounded-xl bg-brand/20 flex items-center justify-center flex-shrink-0 group-hover:bg-brand transition-colors duration-300">
                                <svg class="w-6 h-6 text-brand group-hover:text-white transition-colors duration-300"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-heading text-2xl font-bold mb-2 text-white">Compassionate Staff</h4>
                                <p class="text-gray-400 leading-relaxed text-sm md:text-base">Handpicked professionals
                                    chosen not just for their skills, but for their genuine empathy and warmth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative mt-10 lg:mt-0 px-4 sm:px-0 lg:pl-10">
                    <div
                        class="absolute inset-0 bg-transparent border-2 border-brand/30 rounded-3xl transform translate-x-4 translate-y-4 -z-10">
                    </div>

                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1516841273335-e39b37888115?auto=format&fit=crop&w=800&q=80"
                            alt="Happy senior woman with caregiver"
                            class="w-full h-[400px] md:h-[550px] object-cover transition-transform duration-700 hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/80 via-transparent to-transparent opacity-60">
                        </div>
                    </div>

                    <div
                        class="absolute -bottom-8 -left-2 sm:-left-8 bg-white p-5 md:p-6 rounded-2xl shadow-2xl border-4 border-darkText flex items-center gap-4 z-20 transform hover:-translate-y-2 transition-transform duration-300 w-[90%] sm:w-auto">
                        <div class="flex -space-x-4">
                            <img class="w-12 h-12 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80"
                                alt="Client">
                            <img class="w-12 h-12 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80"
                                alt="Client">
                            <img class="w-12 h-12 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80"
                                alt="Client">
                            <div
                                class="w-12 h-12 rounded-full border-2 border-white bg-brand text-white flex items-center justify-center font-bold text-xs">
                                500+
                            </div>
                        </div>
                        <div>
                            <p class="font-heading font-bold text-lg text-darkText leading-tight">Trusted by Families
                            </p>
                            <p class="text-brand font-bold text-sm flex items-center gap-1">
                                Across the UK <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section id="about" class="py-20 md:py-32 bg-lightBg overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">

                <div class="order-2 md:order-1 relative mt-10 md:mt-0 px-4 sm:px-0">
                    <div
                        class="absolute -top-6 -left-6 w-32 h-32 bg-brand/10 rounded-full border-2 border-brand/20 -z-10">
                    </div>

                    <div class="relative pb-16 pr-10 sm:pr-16">
                        <img src="https://images.unsplash.com/photo-1576765608866-5b51046452be?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Caregiver smiling with senior woman"
                            class="w-[85%] sm:w-4/5 rounded-3xl shadow-lg border-4 md:border-8 border-white object-cover h-[250px] sm:h-[350px] md:h-[400px] relative z-10 transition-transform duration-500 hover:scale-[1.02]">

                        <img src="img/about1.jpg" alt="Caregiver holding hands with senior"
                            class="absolute bottom-0 right-0 w-[60%] sm:w-[55%] rounded-3xl shadow-2xl border-4 md:border-8 border-lightBg object-cover h-[180px] sm:h-[250px] z-20 transition-transform duration-500 hover:scale-[1.05]">

                        <div
                            class="absolute top-1/2 -left-4 sm:-left-8 -translate-y-1/2 bg-brand text-white p-4 sm:p-6 rounded-2xl shadow-xl z-30 border-4 border-white flex flex-col items-center justify-center transform hover:-translate-y-2 transition-transform duration-300">
                            <span class="font-heading text-3xl sm:text-4xl font-bold block leading-none mb-1">15+</span>
                            <span class="font-medium text-xs sm:text-sm text-center">Years of<br>Trust</span>
                        </div>
                    </div>
                </div>

                <div class="order-1 md:order-2">
                    <span
                        class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-xs px-4 py-1.5 bg-brand/10 rounded-full mb-5">
                        Who We Are
                    </span>



                    <h1
                        class="font-heading text-2xl  md:text-5xl  font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                        Caring with compassion,
                        <span class="text-brand relative ">crafted to suit
                            <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30"
                                viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                        your everyday life.
                    </h1>

                    <p class="text-gray-600 mb-6 text-base md:text-lg leading-relaxed">
                        At Careline, we understand that nothing feels quite like home. That's why our mission is to
                        provide industry-leading, fully compliant home care across the UK, allowing your loved ones to
                        retain their dignity, comfort, and independence.
                    </p>

                    <ul class="space-y-4 mb-10">
                        <li class="flex items-start gap-3 text-darkText font-medium text-base md:text-lg">
                            <div
                                class="w-6 h-6 rounded-full bg-brand/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            Fully Vetted & Trained Professionals
                        </li>
                        <li class="flex items-start gap-3 text-darkText font-medium text-base md:text-lg">
                            <div
                                class="w-6 h-6 rounded-full bg-brand/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-brand" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            CQC Regulated Services
                        </li>
                    </ul>

                    <a href="#contact"
                        class="inline-flex items-center justify-center px-4 py-2.5 md:px-6 md:py-3 border border-transparent text-sm md:text-lg font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-xl shadow-black/20 hover:shadow-2xl hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                        Read More
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="careers" class="py-20 bg-white relative overflow-hidden border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 items-center">

                <div class="lg:col-span-5 flex flex-col h-full justify-center">

                    <div class="max-w-xl">
                        <span
                            class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-xs max-w-2xl px-4 py-1.5 bg-brand/10 rounded-full mb-5">
                            Join Our Family
                        </span>

                    </div>






                    <h1
                        class="font-heading text-2xl  md:text-5xl  font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                        Build a rewarding
                        <span class="text-brand relative ">career
                            <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30"
                                viewBox="0 0 100 10" preserveAspectRatio="none">
                                <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </span>
                        with us.
                    </h1>

                    <p class="text-gray-600 text-lg mb-8 leading-relaxed">
                        We are always looking for compassionate and dedicated individuals. Enjoy comprehensive training,
                        flexible hours, and the opportunity to make a genuine difference in people's lives every single
                        day.
                    </p>

                    <div
                        class="relative rounded-md overflow-hidden border-[6px] border-white shadow-lg ring-1 ring-black/5 group hidden md:block">
                        <img src="https://images.unsplash.com/photo-1576765608866-5b51046452be?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Caregiver team"
                            class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 flex flex-col gap-5">

                    <a href="#"
                        class="group block bg-lightBg rounded-md p-6 md:p-8 border border-gray-100 shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:bg-white hover:border-brand/30 hover:shadow-xl hover:shadow-black/10 relative overflow-hidden">
                        <div
                            class="absolute top-0 left-0 w-1 h-full bg-brand transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                        </div>

                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                            <div class="flex-1">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">Full-Time
                                        / Part-Time</span>
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">Multiple
                                        Locations</span>
                                </div>
                                <h3
                                    class="font-heading text-2xl font-bold text-darkText group-hover:text-brand transition-colors uppercase tracking-tight mb-2">
                                    Care Worker
                                </h3>
                                <p class="text-gray-500 text-sm">Provide frontline compassionate care and daily support
                                    to our clients in their own homes.</p>
                            </div>

                            <div class="shrink-0 mt-4 sm:mt-0">
                                <div
                                    class="inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand group-hover:bg-brandDark shadow-md shadow-black/20 group-hover:shadow-lg group-hover:shadow-black/30 transition-all duration-300 transform group-hover:-translate-y-0.5">
                                    Apply Now
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-lightBg rounded-md p-6 md:p-8 border border-gray-100 shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:bg-white hover:border-brand/30 hover:shadow-xl hover:shadow-black/10 relative overflow-hidden">
                        <div
                            class="absolute top-0 left-0 w-1 h-full bg-brand transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                        </div>

                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                            <div class="flex-1">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">Full-Time</span>
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">London
                                        Region</span>
                                </div>
                                <h3
                                    class="font-heading text-2xl font-bold text-darkText group-hover:text-brand transition-colors uppercase tracking-tight mb-2">
                                    Senior Care Supervisor
                                </h3>
                                <p class="text-gray-500 text-sm">Lead, mentor, and support our team of care workers
                                    while ensuring the highest standards of compliance.</p>
                            </div>
                            <div class="shrink-0 mt-4 sm:mt-0">
                                <div
                                    class="inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand group-hover:bg-brandDark shadow-md shadow-black/20 group-hover:shadow-lg group-hover:shadow-black/30 transition-all duration-300 transform group-hover:-translate-y-0.5">
                                    Apply Now
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#"
                        class="group block bg-lightBg rounded-md p-6 md:p-8 border border-gray-100 shadow-sm transition-all duration-300 transform hover:-translate-y-1 hover:bg-white hover:border-brand/30 hover:shadow-xl hover:shadow-black/10 relative overflow-hidden">
                        <div
                            class="absolute top-0 left-0 w-1 h-full bg-brand transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300">
                        </div>

                        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-6">
                            <div class="flex-1">
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">Part-Time</span>
                                    <span
                                        class="bg-white border border-gray-200 text-darkText px-3 py-1 rounded-full text-xs font-bold group-hover:border-brand/30 transition-colors">Head
                                        Office</span>
                                </div>
                                <h3
                                    class="font-heading text-2xl font-bold text-darkText group-hover:text-brand transition-colors uppercase tracking-tight mb-2">
                                    Office Support
                                </h3>
                                <p class="text-gray-500 text-sm">Manage daily administrative tasks, scheduling, and
                                    coordinate communication between clients and carers.</p>
                            </div>
                            <div class="shrink-0 mt-4 sm:mt-0">
                                <div
                                    class="inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand group-hover:bg-brandDark shadow-md shadow-black/20 group-hover:shadow-lg group-hover:shadow-black/30 transition-all duration-300 transform group-hover:-translate-y-0.5">
                                    Apply Now
                                    <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="mt-4">
                        <a href="#"
                            class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                            All Jobs
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>





    <section id="blog" class="py-20 bg-lightBg">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <div class="text-center max-w-3xl mx-auto mb-8">
                <span
                    class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-xs max-w-2xl px-4 py-1.5 bg-brand/10 rounded-full mb-2">
                    Our Blog
                </span>




                <h1 class="font-heading text-2xl  md:text-5xl  font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                    Latest
                    <span class="text-brand relative ">News
                        <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30" viewBox="0 0 100 10"
                            preserveAspectRatio="none">
                            <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    & Insights
                </h1>
                <p class="text-gray-600 text-lg">Helpful resources, expert care tips, and updates from the Careline UK
                    team.</p>
            </div>





            <div class="grid md:grid-cols-3 gap-8">

                <article
                    class="bg-white rounded-md border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col overflow-hidden transform hover:-translate-y-1">
                    <div class="relative h-56 w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Senior safety at home"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-md text-xs font-bold text-darkText uppercase tracking-wider shadow-sm">
                            Health Tips
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-6 md:p-8">
                        <div class="flex items-center gap-2 text-sm text-gray-400 mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>February 24, 2026</span>
                        </div>
                        <h3
                            class="font-heading text-xl font-bold text-darkText mb-3 group-hover:text-brand transition-colors line-clamp-2">
                            How to Create a Safe Home Environment for Seniors
                        </h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">
                            Simple modifications can make a massive difference in preventing falls and ensuring your
                            loved ones remain safe while living independently.
                        </p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            Read Article
                            <span
                                class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-md border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col overflow-hidden transform hover:-translate-y-1">
                    <div class="relative h-56 w-full overflow-hidden bg-gray-200">
                        <img src="img/b1.jpg" alt="Mental health and companionship"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-md text-xs font-bold text-darkText uppercase tracking-wider shadow-sm">
                            Wellbeing
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-6 md:p-8">
                        <div class="flex items-center gap-2 text-sm text-gray-400 mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>February 18, 2026</span>
                        </div>
                        <h3
                            class="font-heading text-xl font-bold text-darkText mb-3 group-hover:text-brand transition-colors line-clamp-2">
                            The Importance of Companionship for Mental Health
                        </h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">
                            Loneliness can have severe physical effects. Discover why regular social interaction and
                            professional companionship are vital for the elderly.
                        </p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            Read Article
                            <span
                                class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </article>

                <article
                    class="bg-white rounded-md border border-gray-100 shadow-md shadow-black/5 hover:shadow-xl hover:shadow-black/10 transition-all duration-300 group flex flex-col overflow-hidden transform hover:-translate-y-1">
                    <div class="relative h-56 w-full overflow-hidden bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                            alt="Caregiver training"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-darkText/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute top-4 left-4 bg-white/95 backdrop-blur-sm px-3 py-1.5 rounded-md text-xs font-bold text-darkText uppercase tracking-wider shadow-sm">
                            Company News
                        </div>
                    </div>
                    <div class="flex-1 flex flex-col p-6 md:p-8">
                        <div class="flex items-center gap-2 text-sm text-gray-400 mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>February 10, 2026</span>
                        </div>
                        <h3
                            class="font-heading text-xl font-bold text-darkText mb-3 group-hover:text-brand transition-colors line-clamp-2">
                            How We Maintain a CQC "Outstanding" Rating
                        </h3>
                        <p class="text-gray-600 mb-6 text-sm md:text-base line-clamp-3 flex-1">
                            A behind-the-scenes look at our rigorous recruitment process, continuous training programs,
                            and dedication to excellence in caregiving.
                        </p>
                        <a href="#"
                            class="mt-auto self-start inline-flex items-center justify-center px-5 py-2.5 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1 group/btn">
                            Read Article
                            <span
                                class="ml-2 transform group-hover/btn:translate-x-1 transition-transform">&rarr;</span>
                        </a>
                    </div>
                </article>

            </div>

            <div class="mt-16 text-center">
                <a href="#"
                    class="inline-flex items-center justify-center px-8 py-3.5 border border-transparent text-base md:text-lg font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-xl shadow-black/20 hover:shadow-2xl hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                    View All Posts
                </a>
            </div>

        </div>
    </section>




    <section class="py-20 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">


                <span
                    class="inline-flex items-center gap-2 text-brandDark font-bold tracking-widest uppercase text-xs max-w-2xl px-4 py-1.5 bg-brand/10 rounded-full mb-2">
                    Testimonials
                </span>




                <h1 class="font-heading text-2xl  md:text-5xl  font-bold text-darkText mb-4 md:mb-6 tracking-[-0.03em]">
                    Trusted
                    <span class="text-brand relative ">by UK
                        <svg class="absolute -bottom-1.5 left-0 w-full h-1.5 md:h-2 text-brand/30" viewBox="0 0 100 10"
                            preserveAspectRatio="none">
                            <path d="M0 5 L100 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </span>
                    Families
                </h1>
            </div>
        </div>

        <div class="relative w-full overflow-hidden pb-8">

            <div
                class="absolute top-0 left-0 w-20 md:w-40 h-full bg-gradient-to-r from-white to-transparent z-20 pointer-events-none">
            </div>

            <div
                class="absolute top-0 right-0 w-20 md:w-40 h-full bg-gradient-to-l from-white to-transparent z-20 pointer-events-none">
            </div>

            <div class="animate-marquee gap-6 px-4">

                <div class="flex gap-6">
                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"The carers are incredibly punctual,
                            polite, and treat my mother with such dignity. Careline has taken a huge weight off our
                            family's shoulders."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                SJ</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Sarah Jenkins</h4>
                                <span class="text-sm text-gray-500">London, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Professional from the very first phone
                            call. The bespoke care plan perfectly matched my husband's complex needs. Highly
                            recommended."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                DT</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">David T.</h4>
                                <span class="text-sm text-gray-500">Manchester, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Careline provided live-in care for my
                            father, and the peace of mind it gave us was invaluable. The staff truly care about what
                            they do."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                EW</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Emma W.</h4>
                                <span class="text-sm text-gray-500">Birmingham, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Such a compassionate team. They go above
                            and beyond what is expected every single day. We couldn't have asked for better support."
                        </p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                JL</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">James L.</h4>
                                <span class="text-sm text-gray-500">Bristol, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"The level of detail in their care plans
                            is outstanding. Truly a premium service that treats clients like family."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                OH</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Olivia H.</h4>
                                <span class="text-sm text-gray-500">Leeds, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Finding reliable care was stressful until
                            we found Careline. The caregivers are brilliant. I couldn't recommend them more highly."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                MD</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Mark D.</h4>
                                <span class="text-sm text-gray-500">Surrey, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Our carer feels like part of the family
                            now. The companionship she provides to my mum is beautiful to witness."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                CB</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Chloe B.</h4>
                                <span class="text-sm text-gray-500">Kent, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Exceptional service from day one. They
                            made sure my uncle was completely comfortable and safe during his recovery at home."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                RM</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Richard M.</h4>
                                <span class="text-sm text-gray-500">Essex, UK</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex gap-6">
                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"The carers are incredibly punctual,
                            polite, and treat my mother with such dignity. Careline has taken a huge weight off our
                            family's shoulders."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                SJ</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Sarah Jenkins</h4>
                                <span class="text-sm text-gray-500">London, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Professional from the very first phone
                            call. The bespoke care plan perfectly matched my husband's complex needs. Highly
                            recommended."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                DT</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">David T.</h4>
                                <span class="text-sm text-gray-500">Manchester, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Careline provided live-in care for my
                            father, and the peace of mind it gave us was invaluable. The staff truly care about what
                            they do."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                EW</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Emma W.</h4>
                                <span class="text-sm text-gray-500">Birmingham, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Such a compassionate team. They go above
                            and beyond what is expected every single day. We couldn't have asked for better support."
                        </p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                JL</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">James L.</h4>
                                <span class="text-sm text-gray-500">Bristol, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"The level of detail in their care plans
                            is outstanding. Truly a premium service that treats clients like family."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                OH</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Olivia H.</h4>
                                <span class="text-sm text-gray-500">Leeds, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Finding reliable care was stressful until
                            we found Careline. The caregivers are brilliant. I couldn't recommend them more highly."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                MD</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Mark D.</h4>
                                <span class="text-sm text-gray-500">Surrey, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Our carer feels like part of the family
                            now. The companionship she provides to my mum is beautiful to witness."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                CB</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Chloe B.</h4>
                                <span class="text-sm text-gray-500">Kent, UK</span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="w-[350px] md:w-[400px] bg-white p-8 rounded-2xl shadow-lg shadow-black/5 border border-gray-100 relative flex flex-col transition-transform hover:-translate-y-1 duration-300 cursor-default flex-shrink-0">
                        <svg class="absolute top-6 right-6 w-10 h-10 text-brand/10" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                        <div class="flex gap-1 text-brand mb-4 text-sm">★★★★★</div>
                        <p class="text-gray-600 text-base italic mb-8 flex-1">"Exceptional service from day one. They
                            made sure my uncle was completely comfortable and safe during his recovery at home."</p>
                        <div class="flex items-center gap-4 mt-auto">
                            <div
                                class="w-12 h-12 rounded-full bg-brand/20 flex items-center justify-center text-brand font-bold text-lg">
                                RM</div>
                            <div>
                                <h4 class="font-bold text-darkText font-heading leading-tight">Richard M.</h4>
                                <span class="text-sm text-gray-500">Essex, UK</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="py-20 bg-white relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-30 bg-[radial-gradient(circle_at_bottom_right,_var(--tw-gradient-stops))] from-brand/20 via-transparent to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <div class="grid lg:grid-cols-2 gap-10 lg:gap-16 items-stretch">

                <div
                    class="relative rounded-3xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-8 border-white min-h-[400px] lg:min-h-[550px] group">

                    <video autoplay loop muted playsinline
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                        <source src="img/form.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                    <div
                        class="absolute inset-0 bg-gradient-to-t from-darkText/90 via-darkText/20 to-transparent z-10 pointer-events-none">
                    </div>

                    <div class="absolute bottom-0 left-0 p-8 md:p-10 w-full z-20 pointer-events-none">
                        <div
                            class="bg-white/20 backdrop-blur-md text-white px-4 py-2 rounded-md inline-flex items-center gap-2 font-bold text-sm uppercase tracking-widest mb-4 border border-white/30">
                            <span class="w-2 h-2 rounded-full bg-brand animate-pulse"></span>
                            Available 24/7
                        </div>
                        <h3 class="font-heading text-3xl md:text-4xl font-bold text-white leading-tight mb-3">
                            Ready to get the <span class="text-brand italic">support</span> you deserve?
                        </h3>
                        <p class="text-gray-300 text-lg">We are here to help your loved ones live comfortably at home.
                        </p>
                    </div>
                </div>

                <div class="bg-lightBg p-6 md:p-8 rounded-3xl shadow-xl border border-gray-100 relative self-center">
                    <div
                        class="absolute -top-6 -right-6 w-20 h-20 bg-brand/10 rounded-full border border-brand/20 -z-10 hidden md:block">
                    </div>

                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-darkText mb-2">Book a Free Assessment
                    </h2>
                    <p class="text-gray-500 mb-5 text-base">Fill out the form below and our UK advisory team will call
                        you back within 24 hours.</p>

                    <form class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-darkText mb-1.5">First Name</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 placeholder-gray-400"
                                    placeholder="e.g. John">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-darkText mb-1.5">Last Name</label>
                                <input type="text"
                                    class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 placeholder-gray-400"
                                    placeholder="e.g. Smith">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-darkText mb-1.5">Phone Number</label>
                                <input type="tel"
                                    class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 placeholder-gray-400"
                                    placeholder="0800 123 456">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-darkText mb-1.5">Email Address</label>
                                <input type="email"
                                    class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 placeholder-gray-400"
                                    placeholder="john@example.com">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-darkText mb-1.5">Type of Care Required</label>
                            <div class="relative">
                                <select
                                    class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 appearance-none cursor-pointer">
                                    <option value="" disabled selected>Select a service...</option>
                                    <option value="personal">Personal Care</option>
                                    <option value="live-in">Live-in Care</option>
                                    <option value="respite">Respite Care</option>
                                    <option value="companionship">Companionship</option>
                                    <option value="other">Not Sure / Other</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-bold text-darkText mb-1.5">How can we help?
                                (Optional)</label>
                            <textarea rows="2"
                                class="w-full px-4 py-2.5 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white text-gray-700 placeholder-gray-400 resize-none"
                                placeholder="Briefly describe your needs..."></textarea>
                        </div>

                        <div class="pt-1">
                            <button type="submit"
                                class="w-full inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-xl shadow-black/20 hover:shadow-2xl hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                                Request Callback
                            </button>
                        </div>

                        <p class="text-[11px] text-center text-gray-400 mt-2">
                            By submitting this form, you agree to our <a href="#"
                                class="text-brand hover:underline">Privacy Policy</a>.
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </section>



    <footer class="bg-[#111827] text-gray-300 py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-gray-800 pb-12 mb-8">
                <div class="col-span-1 md:col-span-1">
                    <a href="#" class="font-heading font-bold text-3xl text-white flex items-center gap-2 mb-4">
                        <span class="w-6 h-6 rounded-full bg-brand inline-block"></span>
                        Careline
                    </a>
                    <p class="text-sm text-gray-400 mb-6">Premium home support helping families across the United
                        Kingdom maintain independence and joy.</p>
                </div>

                <div>
                    <h4 class="text-white font-bold font-heading mb-4 text-lg">Quick Links</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#about" class="hover:text-brand transition-colors">About Us</a></li>
                        <li><a href="#services" class="hover:text-brand transition-colors">Our Services</a></li>
                        <li><a href="#" class="hover:text-brand transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-brand transition-colors">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold font-heading mb-4 text-lg">Services</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="hover:text-brand transition-colors">Personal Care</a></li>
                        <li><a href="#" class="hover:text-brand transition-colors">Dementia Care</a></li>
                        <li><a href="#" class="hover:text-brand transition-colors">Live-in Care</a></li>
                        <li><a href="#" class="hover:text-brand transition-colors">Respite Care</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold font-heading mb-4 text-lg">Contact Us</h4>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg> 0800 123 456</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg> hello@careline.co.uk</li>
                        <li class="flex items-center gap-2"><svg class="w-4 h-4 text-brand" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg> London, United Kingdom</li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-500">
                <p>&copy; 2026 Careline UK. All rights reserved.</p>
                <div class="flex space-x-4 mt-4 md:mt-0">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
                <p class="text-xs text-gray-600 mt-4 md:mt-0">Crafted with care by Sets Tech</p>
            </div>
        </div>
    </footer>

    <script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('menu-icon');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
        // Toggle hamburger / close icon
        if (menu.classList.contains('hidden')) {
            icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
        } else {
            icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
        }
    });

    // Close mobile menu when a link is clicked
    const mobileLinks = menu.querySelectorAll('a');
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
        });
    });
    </script>
</body>

</html>