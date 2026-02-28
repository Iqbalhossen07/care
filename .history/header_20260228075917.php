<?php
// বর্তমানে কোন ফাইলে আছি সেটা বের করার লজিক
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-white/95 backdrop-blur-sm border-b border-gray-100 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <a href="index.php" class="group inline-flex items-center py-2">
                <div class="w-48 md:w-64 h-auto overflow-hidden">
                    <img src="img/logo.png" alt="Community Careline Services (Medway) Ltd"
                        class="w-full h-full object-contain filter drop-shadow-sm transition-transform duration-300 group-hover:scale-105">
                </div>
            </a>

            <nav class="hidden md:flex space-x-8 items-center">
                <a href="index.php"
                    class="<?php echo ($current_page == 'index.php' ) ? 'text-brand font-bold border-b-2 border-brand' : 'text-gray-700 font-medium hover:text-brand'; ?> transition-all duration-200 py-1">Home</a>

                <a href="about.php"
                    class="<?php echo ($current_page == 'about.php') ? 'text-brand font-bold border-b-2 border-brand' : 'text-gray-700 font-medium hover:text-brand'; ?> transition-all duration-200 py-1">About
                    Us</a>

                <a href="services.php"
                    class="<?php echo ($current_page == 'services.php') ? 'text-brand font-bold border-b-2 border-brand' : 'text-gray-700 font-medium hover:text-brand'; ?> transition-all duration-200 py-1">Services</a>

                <a href="careers.php"
                    class="<?php echo ($current_page == 'careers.php') ? 'text-brand font-bold border-b-2 border-brand' : 'text-gray-700 font-medium hover:text-brand'; ?> transition-all duration-200 py-1">Careers</a>

                <a href="blogs.php"
                    class="<?php echo ($current_page == 'blogs.php' || $current_page == 'blog-details.php') ? 'text-brand font-bold border-b-2 border-brand' : 'text-gray-700 font-medium hover:text-brand'; ?> transition-all duration-200 py-1">Blogs</a>

                <a href="contact.php"
                    class="bg-brand text-white px-6 py-2.5 rounded-md font-bold hover:bg-brandDark shadow-md shadow-black/20 hover:shadow-lg hover:shadow-black/30 transition-all duration-300 transform hover:-translate-y-1">
                    Contact Us
                </a>
            </nav>

            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-brand focus:outline-none p-2">
                    <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 absolute w-full shadow-xl">
        <div class="px-4 pt-2 pb-6 space-y-2">
            <a href="index.php"
                class="block px-3 py-3 text-base font-medium <?php echo ($current_page == 'index.php') ? 'text-brand bg-lightBg font-bold' : 'text-gray-700 hover:text-brand hover:bg-lightBg'; ?> rounded-lg">Home</a>

            <a href="about.php"
                class="block px-3 py-3 text-base font-medium <?php echo ($current_page == 'about.php') ? 'text-brand bg-lightBg font-bold' : 'text-gray-700 hover:text-brand hover:bg-lightBg'; ?> rounded-lg">About
                Us</a>

            <a href="services.php"
                class="block px-3 py-3 text-base font-medium <?php echo ($current_page == 'services.php') ? 'text-brand bg-lightBg font-bold' : 'text-gray-700 hover:text-brand hover:bg-lightBg'; ?> rounded-lg">Services</a>

            <a href="careers.php"
                class="block px-3 py-3 text-base font-medium <?php echo ($current_page == 'careers.php') ? 'text-brand bg-lightBg font-bold' : 'text-gray-700 hover:text-brand hover:bg-lightBg'; ?> rounded-lg">Careers</a>

            <a href="blogs.php"
                class="block px-3 py-3 text-base font-medium <?php echo ($current_page == 'blogs.php' || $current_page == 'blog-details.php') ? 'text-brand bg-lightBg font-bold' : 'text-gray-700 hover:text-brand hover:bg-lightBg'; ?> rounded-lg">Blogs</a>

            <a href="contact.php"
                class="block px-3 py-3 text-base font-bold text-white bg-brand text-center rounded-lg mt-4 shadow-md shadow-black/20">Contact
                Us</a>
        </div>
    </div>
</header>