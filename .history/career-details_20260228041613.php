<?php include('head.php') ?>

<body class="font-body text-gray-600 antialiased bg-white">
    <?php include('header.php') ?>

    <section class="relative h-[250px] flex items-center overflow-hidden bg-darkText">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=1500&q=80"
                class="w-full h-full object-cover opacity-30" alt="Job Details">
            <div class="absolute inset-0 bg-gradient-to-r from-darkText via-darkText/90 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full">
            <nav class="flex mb-4 text-sm font-medium">
                <ol class="inline-flex items-center space-x-2">
                    <li><a href="index.php" class="text-gray-400 hover:text-brand transition-colors">Home</a></li>
                    <li class="text-gray-600">/</li>
                    <li><a href="careers.php" class="text-gray-400 hover:text-brand transition-colors">Careers</a></li>
                    <li class="text-gray-600">/</li>
                    <li class="text-brand font-bold uppercase tracking-widest text-[11px] md:text-sm">Care Worker</li>
                </ol>
            </nav>
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-2 tracking-tight">Care Worker</h1>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16">

                <div class="lg:col-span-7 space-y-12">
                    <div
                        class="relative p-8 rounded-3xl bg-white border border-gray-100 shadow-xl shadow-black/[0.02] overflow-hidden group">
                        <div
                            class="absolute top-0 left-0 w-1.5 h-full bg-brand transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500">
                        </div>

                        <h2 class="font-heading text-3xl font-bold text-darkText mb-6 flex items-center gap-3">
                            Role Overview
                            <span class="w-12 h-[2px] bg-brand/30"></span>
                        </h2>

                        <p class="text-lg leading-relaxed mb-10 text-gray-600 text-justify">
                            As a Care Worker at <span class="text-brand font-bold">Careline</span>, you are the heart of
                            our service. You will provide essential support to our clients in their own homes, helping
                            them maintain their independence and dignity. We are looking for individuals who are
                            naturally kind, patient, and dedicated to providing high-quality care.
                        </p>

                        <div
                            class="grid grid-cols-2 md:grid-cols-3 gap-6 p-6 rounded-2xl bg-lightBg border border-gray-100 shadow-inner">
                            <div class="space-y-1">
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-[0.2em]">Salary</p>
                                <p class="text-darkText font-bold text-lg">£12.50 - £14.00<span
                                        class="text-xs text-gray-400 font-medium">/hr</span></p>
                            </div>
                            <div class="space-y-1">
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-[0.2em]">Location</p>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-brand animate-pulse"></span>
                                    <p class="text-darkText font-bold text-lg">London, UK</p>
                                </div>
                            </div>
                            <div class="space-y-1 col-span-2 md:col-span-1">
                                <p class="text-[10px] uppercase font-bold text-gray-400 tracking-[0.2em]">Job Type</p>
                                <p class="text-darkText font-bold text-lg">Permanent</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h3 class="font-heading text-2xl font-bold text-darkText flex items-center gap-4">
                            Key Responsibilities
                            <div class="h-[1px] flex-1 bg-gray-100"></div>
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php
            $tasks = [
                "Personal care (bathing, dressing)", 
                "Preparing nutritious meals", 
                "Medication administration", 
                "Emotional support", 
                "Light housekeeping", 
                "Accompanying to appointments"
            ];
            foreach ($tasks as $task) {
                echo '
                <div class="flex items-center gap-4 p-4 rounded-xl border border-gray-50 hover:border-brand/20 hover:bg-brand/[0.02] transition-all group">
                    <div class="w-8 h-8 rounded-lg bg-brand/10 flex items-center justify-center text-brand shrink-0 group-hover:bg-brand group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <span class="text-gray-600 font-medium text-sm md:text-base">' . $task . '</span>
                </div>';
            }
            ?>
                        </div>
                    </div>

                    <div
                        class="bg-darkText p-8 md:p-10 rounded-[2.5rem] text-white relative overflow-hidden shadow-2xl shadow-black/20">
                        <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-brand/20 rounded-full blur-[80px]"></div>

                        <h3 class="font-heading text-2xl font-bold mb-8 flex items-center gap-3">
                            What We Are Looking For
                            <span class="w-12 h-[2px] bg-brand"></span>
                        </h3>

                        <div class="space-y-5 relative z-10">
                            <?php
            $requirements = [
                "A genuine desire to help others and make a difference.",
                "Excellent communication and listening skills.",
                "Reliability and a strong work ethic.",
                "Right to work in the UK."
            ];
            foreach ($requirements as $req) {
                echo '
                <div class="flex items-start gap-4 group/item">
                    <div class="mt-1.5 w-2 h-2 rounded-full bg-brand group-hover/item:scale-150 transition-transform"></div>
                    <p class="text-gray-300 font-medium group-hover/item:text-white transition-colors">' . $req . '</p>
                </div>';
            }
            ?>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5">
                    <div
                        class="sticky top-28 bg-lightBg p-8 md:p-10 rounded-3xl shadow-2xl shadow-black/5 border border-gray-100 relative overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-2 bg-brand"></div>

                        <h3 class="font-heading text-2xl font-bold text-darkText mb-2">Apply for this position</h3>
                        <p class="text-gray-500 text-sm mb-8">Please complete the form below to submit your application.
                        </p>

                        <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                            <div class="grid grid-cols-1 gap-5">
                                <input type="text" placeholder="Full Name" required
                                    class="w-full px-4 py-3 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white shadow-sm">
                                <input type="email" placeholder="Email Address" required
                                    class="w-full px-4 py-3 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white shadow-sm">
                                <input type="tel" placeholder="Phone Number" required
                                    class="w-full px-4 py-3 rounded-md border border-gray-200 focus:border-brand focus:ring-4 focus:ring-brand/10 outline-none transition-all bg-white shadow-sm">
                            </div>

                            <div>
                                <label
                                    class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Upload
                                    CV (PDF/DOC)</label>
                                <div class="relative group">
                                    <input type="file" name="cv" required
                                        class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                    <div
                                        class="w-full px-4 py-6 border-2 border-dashed border-gray-200 rounded-lg text-center group-hover:border-brand transition-colors bg-white">
                                        <svg class="w-8 h-8 text-gray-300 mx-auto mb-2 group-hover:text-brand"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                        </svg>
                                        <p class="text-sm text-gray-500">Drag & drop or <span
                                                class="text-brand font-bold">Browse</span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2">
                                <button type="submit"
                                    class="w-full inline-flex items-center justify-center px-6 py-4 border border-transparent text-sm font-bold rounded-md text-white bg-brand hover:bg-brandDark shadow-[0_10px_20px_-5px_rgba(0,0,0,0.3)] hover:shadow-[0_15px_25px_-5px_rgba(0,0,0,0.4)] transition-all duration-300 transform hover:-translate-y-1">
                                    Submit Application
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
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