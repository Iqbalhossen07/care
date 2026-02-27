<?php include('head.php') ?>

<body class="font-body text-gray-600 antialiased bg-white">
    <?php include('header.php') ?>

    <section class="relative h-[250px] flex items-center overflow-hidden bg-darkText">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=1500&q=80"
                class="w-full h-full object-cover opacity-20" alt="Blog Details">
            <div class="absolute inset-0 bg-gradient-to-r from-darkText via-darkText/80 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full">
            <nav class="flex mb-4 text-sm font-medium">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="index.php" class="text-gray-400 hover:text-brand transition-colors">Home</a></li>
                    <li class="text-gray-600">/</li>
                    <li><a href="blogs.php" class="text-gray-400 hover:text-brand transition-colors">Blogs</a></li>
                    <li class="text-gray-600">/</li>
                    <li class="text-brand font-bold uppercase tracking-widest text-[11px] md:text-sm">Mental Wellbeing
                    </li>
                </ol>
            </nav>
            <h1
                class="font-heading text-3xl md:text-5xl font-bold text-white mb-2 tracking-tight max-w-4xl leading-tight">
                How to Maintain Mental Wellbeing in Old Age
            </h1>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">

                <div class="lg:col-span-8">
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden mb-12 shadow-[0_20px_50px_rgba(0,0,0,0.15)] border-8 border-white ring-1 ring-black/5">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?auto=format&fit=crop&w=1200&q=80"
                            alt="Mental Wellbeing" class="w-full h-[450px] object-cover">
                        <span
                            class="absolute top-6 left-6 bg-brand text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg">HEALTH
                            TIPS</span>
                    </div>

                    <div class="flex flex-wrap items-center gap-6 mb-8 pb-8 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-brand/10 flex items-center justify-center text-brand font-bold">
                                C</div>
                            <span class="text-darkText font-bold text-sm">By Careline Editor</span>
                        </div>
                        <div class="text-gray-400 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                            Feb 28, 2026
                        </div>
                        <div class="text-gray-400 text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            5 Min Read
                        </div>
                    </div>

                    <div class="prose prose-lg max-w-none text-gray-600 leading-relaxed space-y-6">
                        <p class="text-xl font-medium text-darkText italic border-l-4 border-brand pl-6">"Mental health
                            is just as important as physical health, especially for seniors living independently. A
                            healthy mind lead to a happier life."</p>

                        <p>Maintaining mental wellbeing in later years is crucial for a high quality of life. As we age,
                            life transitions such as retirement, health changes, or losing loved ones can impact our
                            mental state. However, aging also brings wisdom and the opportunity for new experiences.</p>

                        <h3 class="text-2xl font-bold text-darkText mt-10">1. Stay Socially Active</h3>
                        <p>Isolation is one of the biggest risks to senior mental health. Regularly engaging with
                            friends, family, or community groups can reduce feelings of loneliness and boost mood.</p>

                        <h3 class="text-2xl font-bold text-darkText mt-10">2. Keep Your Mind Engaged</h3>
                        <p>Just like a muscle, the brain needs exercise. Reading, puzzles, learning a new hobby, or even
                            using technology to stay connected helps keep neural pathways active.</p>

                        <div class="bg-lightBg p-8 rounded-3xl border border-gray-100 my-10">
                            <h4 class="font-bold text-darkText mb-4">Did You Know?</h4>
                            <p class="text-sm italic">According to health research, regular social interaction can
                                reduce the risk of cognitive decline by over 20% in seniors.</p>
                        </div>

                        <p>At <span class="text-brand font-bold uppercase">Careline</span>, we don't just provide
                            physical care; our companions are trained to offer mental and emotional support to ensure
                            our clients feel valued and heard every single day.</p>
                    </div>

                    <div
                        class="mt-16 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6">
                        <p class="font-bold text-darkText uppercase tracking-widest text-sm">Share this Article:</p>
                        <div class="flex gap-4">
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-lightBg flex items-center justify-center hover:bg-brand hover:text-white transition-all">FB</a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-lightBg flex items-center justify-center hover:bg-brand hover:text-white transition-all">TW</a>
                            <a href="#"
                                class="w-10 h-10 rounded-full bg-lightBg flex items-center justify-center hover:bg-brand hover:text-white transition-all">LN</a>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 space-y-12">
                    <div class="bg-lightBg p-8 rounded-3xl border border-gray-100">
                        <h4 class="font-heading text-xl font-bold text-darkText mb-6">Search Blogs</h4>
                        <div class="relative">
                            <input type="text" placeholder="Search keywords..."
                                class="w-full pl-4 pr-12 py-3 rounded-xl border border-gray-200 outline-none focus:border-brand transition-all">
                            <button
                                class="absolute right-2 top-2 w-8 h-8 bg-brand text-white rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-xl shadow-black/5">
                        <h4 class="font-heading text-xl font-bold text-darkText mb-6">Recent Posts</h4>
                        <div class="space-y-6">
                            <a href="#" class="group flex gap-4">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1516733725897-1aa73b87c8e8?auto=format&fit=crop&w=150&q=80"
                                        class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h5
                                        class="text-sm font-bold text-darkText group-hover:text-brand transition-colors line-clamp-2">
                                        Top 5 Nutritious Meals for Home Care</h5>
                                    <p class="text-xs text-gray-400 mt-1">Feb 25, 2026</p>
                                </div>
                            </a>
                            <a href="#" class="group flex gap-4">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&w=150&q=80"
                                        class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h5
                                        class="text-sm font-bold text-darkText group-hover:text-brand transition-colors line-clamp-2">
                                        Careline Awarded Best Provider 2026</h5>
                                    <p class="text-xs text-gray-400 mt-1">Feb 20, 2026</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-darkText p-10 rounded-[2.5rem] text-white relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-brand/10 rounded-full blur-3xl"></div>
                        <h4 class="font-heading text-2xl font-bold mb-4 relative z-10">Stay Updated</h4>
                        <p class="text-gray-400 text-sm mb-8 relative z-10">Get the latest care tips and company news
                            delivered to your inbox.</p>
                        <form class="space-y-4 relative z-10">
                            <input type="email" placeholder="Your Email"
                                class="w-full px-5 py-3 rounded-xl bg-white/5 border border-white/10 outline-none focus:border-brand transition-all text-sm">
                            <button
                                class="w-full py-4 bg-brand text-white font-bold rounded-xl shadow-[0_15px_30px_-5px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_40px_-5px_rgba(0,0,0,0.6)] hover:-translate-y-1 transition-all duration-300">
                                Subscribe Now
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include('cta.php') ?>

    <?php include('footer.php') ?>

    <script src="main.js"></script>
</body>

</html>