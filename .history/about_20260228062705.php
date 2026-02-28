<?php include('head.php') ?>

<body class="font-body text-gray-600 antialiased bg-white">
    <?php include('header.php') ?>

    <section class="relative h-[250px] flex items-center overflow-hidden bg-darkText">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1516706562779-ad3fd557341b?auto=format&fit=crop&w=1500&q=80"
                class="w-full h-full object-cover opacity-30" alt="About Careline">
            <div class="absolute inset-0 bg-gradient-to-r from-darkText via-darkText/90 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full">
            <nav class="flex mb-4 text-sm font-medium">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="index.php" class="text-gray-400 hover:text-brand transition-colors">Home</a></li>
                    <li class="text-gray-600">/</li>
                    <li class="text-brand font-bold uppercase tracking-widest text-[11px] md:text-sm">About Us</li>
                </ol>
            </nav>
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-2 tracking-tight">Our Mission & Heart
            </h1>
            <p class="text-gray-300 text-lg max-w-2xl">Dedicated to providing compassionate care in the comfort of your
                home.</p>
        </div>
    </section>

    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative group">
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden border-8 border-white shadow-[0_25px_60px_-15px_rgba(0,0,0,0.2)] z-10">
                        <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&w=1000&q=80"
                            alt="Caregiving"
                            class="w-full h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-40 h-40 bg-brand/10 rounded-full blur-3xl -z-0"></div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h2
                            class="font-heading text-3xl md:text-4xl font-bold text-darkText mb-6 uppercase tracking-tight">
                            Caring is not just our job, <br><span class="text-brand italic">it's our passion.</span>
                        </h2>
                        <div class="w-20 h-1.5 bg-brand rounded-full mb-8"></div>
                        <p class="text-lg leading-relaxed text-gray-600 mb-6">
                            Community Careline was founded with a simple yet powerful vision: to treat every client like
                            our own family. We believe that everyone deserves to age with dignity, surrounded by love
                            and professional support.
                        </p>
                        <p class="text-lg leading-relaxed text-gray-600">
                            Based in Kent, we have grown into a trusted home care provider, known for our rigorous staff
                            selection and personalized care plans that meet the unique needs of every individual.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-8">
                        <div>
                            <p class="text-4xl font-bold text-darkText">10+</p>
                            <p class="text-xs font-bold text-brand uppercase tracking-widest mt-1">Years Experience</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-darkText">500+</p>
                            <p class="text-xs font-bold text-brand uppercase tracking-widest mt-1">Happy Families</p>
                        </div>
                        <div>
                            <p class="text-4xl font-bold text-darkText">100%</p>
                            <p class="text-xs font-bold text-brand uppercase tracking-widest mt-1">DBS Checked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-lightBg">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
            <h2 class="font-heading text-3xl md:text-4xl font-bold text-darkText mb-16">The Values We Live By</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-10 rounded-3xl border border-gray-100 shadow-xl shadow-black/[0.02] hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-brand/10 rounded-2xl flex items-center justify-center text-brand mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-darkText mb-4">Compassion</h4>
                    <p class="text-sm leading-relaxed text-gray-500">We care with empathy and heart, ensuring our
                        clients feel loved and respected every day.</p>
                </div>

                <div
                    class="bg-white p-10 rounded-3xl border border-gray-100 shadow-xl shadow-black/[0.02] hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-brand/10 rounded-2xl flex items-center justify-center text-brand mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                            </path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-darkText mb-4">Integrity</h4>
                    <p class="text-sm leading-relaxed text-gray-500">Fully CQC registered and transparent in our
                        operations, providing safety and peace of mind.</p>
                </div>

                <div
                    class="bg-white p-10 rounded-3xl border border-gray-100 shadow-xl shadow-black/[0.02] hover:-translate-y-2 transition-all duration-300">
                    <div
                        class="w-16 h-16 bg-brand/10 rounded-2xl flex items-center justify-center text-brand mx-auto mb-6">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-xl text-darkText mb-4">Excellence</h4>
                    <p class="text-sm leading-relaxed text-gray-500">We constantly train our staff to stay at the
                        forefront of healthcare standards and techniques.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include('cta.php') ?>

    <?php include('footer.php') ?>

    <script src="main.js"></script>
</body>

</html>