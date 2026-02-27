
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
    


    // Job Filtering Logic
document.addEventListener('DOMContentLoaded', function() {
    const typeFilter = document.getElementById('filter-type');
    const locationFilter = document.getElementById('filter-location');
    const resetButton = document.getElementById('reset-filters');
    const jobCards = document.querySelectorAll('.job-card');
    const noResults = document.getElementById('no-results');

    function filterJobs() {
        const selectedType = typeFilter.value.toLowerCase();
        const selectedLocation = locationFilter.value.toLowerCase();
        let visibleCount = 0;

        jobCards.forEach(card => {
            const cardType = card.getAttribute('data-type').toLowerCase();
            const cardLocation = card.getAttribute('data-location').toLowerCase();

            // Check conditions
            const typeMatch = (selectedType === 'all' || cardType.includes(selectedType));
            const locationMatch = (selectedLocation === 'all' || cardLocation.includes(selectedLocation));

            if (typeMatch && locationMatch) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Toggle No Results Message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    if(typeFilter && locationFilter) {
        typeFilter.addEventListener('change', filterJobs);
        locationFilter.addEventListener('change', filterJobs);
    }
    
    if(resetButton) {
        resetButton.addEventListener('click', () => {
            typeFilter.value = 'all';
            locationFilter.value = 'all';
            filterJobs();
        });
    }
});