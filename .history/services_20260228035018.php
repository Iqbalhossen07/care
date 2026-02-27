<?php include('head.php') ?>

<body class="font-body text-gray-600 antialiased bg-white">
    <?php include('header.php') ?>

    <section class="relative h-[250px] flex items-center overflow-hidden bg-darkText">
        <div class="absolute inset-0 z-0">
            <img src="img/s1.jpg" class="w-full h-full object-cover opacity-40" alt="Services Background">
            <div class="absolute inset-0 bg-gradient-to-r from-darkText via-darkText/80 to-transparent"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10 w-full">
            <nav class="flex mb-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3 text-sm font-medium">
                    <li class="inline-flex items-center">
                        <a href="index.php"
                            class="text-gray-300 hover:text-brand transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 md:ml-2 text-brand font-bold uppercase tracking-widest">Our
                                Services</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-white mb-2">Our Specialist Services</h1>
            <p class="text-gray-300 text-lg max-w-2xl">Premium, compassionate care tailored to your everyday life,
                ensuring independence at home.</p>
        </div>
    </section>



    <section class="py-20 bg-brand text-center px-6">
        <div class="max-w-3xl mx-auto">
            <h2 class="font-heading text-3xl md:text-5xl font-bold text-white mb-6">Can't find what you're looking for?
            </h2>
            <p class="text-white/90 text-xl mb-8 font-medium">Our team can craft a bespoke care plan just for you. Get
                in touch today.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:0800123456"
                    class="bg-white text-darkText px-8 py-4 rounded-md font-bold text-lg hover:bg-gray-100 transition-colors shadow-xl shadow-black/10 transform hover:-translate-y-1 duration-300">
                    Call 0800 123 456
                </a>
                <a href="contact.php"
                    class="border-2 border-white text-white px-8 py-4 rounded-md font-bold text-lg hover:bg-white hover:text-brand transition-colors transform hover:-translate-y-1 duration-300">
                    Book Assessment
                </a>
            </div>
        </div>
    </section>

    <?php include('footer.php') ?>

    <script src="main.js"></script>
</body>

</html>