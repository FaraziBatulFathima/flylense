(function() {
    'use strict';
    console.log('[header-include.js] Loading...');

    const currentPage = (() => {
        const path = window.location.pathname;
        const page = path.split('/').pop().replace('.html', '');
        return page || 'index';
    })();
    console.log('[header-include.js] Current page:', currentPage);

    const headerHTML = `<nav class="navbar" id="navbar">
    <div class="navbar-container">
        <a href="index.html" class="nav-logo">
            <img src="img/logo.png" alt="FlyLense Logo" class="logo-icon">
            <img src="img/title.png" alt="FlyLense" class="logo-title">
        </a>
        <ul class="nav-links" id="navLinks">
            <li><a href="index.html" data-page="index">Home</a></li>
            <li><a href="about.html" data-page="about">About</a></li>
            <li class="dropdown">
                <a href="portfolio.html" class="dropdown-toggle" data-page="portfolio">Portfolio</a>
                <div class="dropdown-menu">
                    <a href="education.html" data-page="education">Education</a>
                    <a href="jewellery.html" data-page="jewellery">Jewellery</a>
                    <a href="food.html" data-page="food">Food & Restaurants</a>
                </div>
            </li>
            <li><a href="industry.html" data-page="industry">Industries</a></li>
            <li><a href="events.html" data-page="events">Events</a></li>
            <li><a href="contact.html" data-page="contact">Let's Connect</a></li>
        </ul>
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<!-- Menu Backdrop -->
<div class="menu-backdrop" id="menuBackdrop"></div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <a href="index.html" data-page="index">Home</a>
    <a href="about.html" data-page="about">About</a>
    <div class="mobile-dropdown">
        <button class="mobile-dropdown-toggle">Portfolio <i class="fa-solid fa-chevron-down"></i></button>
        <div class="mobile-dropdown-menu">
            <a href="education.html" data-page="education">Education</a>
            <a href="jewellery.html" data-page="jewellery">Jewellery</a>
            <a href="food.html" data-page="food">Food & Restaurants</a>
        </div>
    </div>
    <a href="industry.html" data-page="industry">Industries</a>
    <a href="events.html" data-page="events">Events</a>
    <a href="contact.html" class="mobile-cta" data-page="contact">Let's Connect</a>
    <div class="menu-divider"></div>
    <div class="menu-footer">
        <span>&copy; 2026 FlyLense Media Partner</span>
        <span>Crafting Cinematic Stories</span>
    </div>
</div>`;

    function loadHeader() {
        console.log('[header-include] loadHeader called');
        const placeholder = document.getElementById('header-placeholder');
        console.log('[header-include] placeholder:', placeholder);
        if (placeholder) {
            placeholder.innerHTML = headerHTML;
        } else {
            document.body.insertAdjacentHTML('afterbegin', headerHTML);
        }
        console.log('[header-include] Header injected, initializing navbar');
        initNavbar();
        setActiveLinks();
    }

    function setActiveLinks() {
        const navLinks = document.querySelectorAll('#navLinks a[data-page]');
        const mobileLinks = document.querySelectorAll('#mobileMenu a[data-page]');
        const dropdownToggle = document.querySelector('.dropdown-toggle[data-page]');
        const mobileDropdownToggle = document.querySelector('.mobile-dropdown-toggle');

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.dataset.page === currentPage) {
                link.classList.add('active');
            }
        });

        mobileLinks.forEach(link => {
            link.classList.remove('active');
            if (link.dataset.page === currentPage) {
                link.classList.add('active');
            }
        });

        const dropdownPages = ['education', 'jewellery', 'food'];
        if (dropdownPages.includes(currentPage) && dropdownToggle) {
            dropdownToggle.classList.add('active');
        }

        if (dropdownPages.includes(currentPage) && mobileDropdownToggle) {
            mobileDropdownToggle.classList.add('active');
        }
    }

    function initNavbar() {
        console.log('[header-include] initNavbar called');
        const navbar = document.getElementById('navbar');
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const menuBackdrop = document.getElementById('menuBackdrop');
        const mobileDropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        console.log('[header-include] Elements found:', { navbar: !!navbar, hamburger: !!hamburger, mobileMenu: !!mobileMenu, menuBackdrop: !!menuBackdrop });

        if (navbar) {
            console.log('[header-include] Navbar found, attaching scroll handler');
            setTimeout(() => navbar.classList.add('loaded'), 100);
            
            const scrollThreshold = 50;

            function handleScroll() {
                const currentScroll = window.pageYOffset;
                console.log('[header-include] Scroll:', currentScroll);
                
                if (currentScroll > scrollThreshold) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
                // Removed: navbar.style.transform = 'translateY(-100%)' on scroll down
            }

            window.addEventListener('scroll', handleScroll, { passive: true });
            // Initial check
            handleScroll();
        }

        if (hamburger && mobileMenu && menuBackdrop) {
            function toggleMenu() {
                const isOpen = mobileMenu.classList.toggle('active');
                menuBackdrop.classList.toggle('active', isOpen);
                hamburger.classList.toggle('active', isOpen);
                hamburger.setAttribute('aria-expanded', isOpen);
                document.body.style.overflow = isOpen ? 'hidden' : '';
            }

            hamburger.addEventListener('click', toggleMenu);
            menuBackdrop.addEventListener('click', toggleMenu);
            mobileMenu.querySelectorAll('a:not(.mobile-dropdown-menu a)').forEach(a => a.addEventListener('click', toggleMenu));

            mobileDropdownToggles.forEach(btn => {
                btn.addEventListener('click', () => {
                    const dropdown = btn.closest('.mobile-dropdown');
                    dropdown.classList.toggle('active');
                });
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu?.classList.contains('active')) {
                const isOpen = mobileMenu.classList.contains('active');
                mobileMenu.classList.remove('active');
                menuBackdrop.classList.remove('active');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';
            }
        });

        const navLinks = document.querySelectorAll('#navLinks a[data-page]');
        navLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                if (link.classList.contains('dropdown-toggle')) return;
                navLinks.forEach(l => l.classList.remove('active'));
                link.classList.add('active');
            });
        });

        const dropdown = document.querySelector('.dropdown');
        if (dropdown) {
            dropdown.addEventListener('mouseleave', () => {
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');
                if (dropdownMenu) {
                    dropdownMenu.style.opacity = '0';
                    dropdownMenu.style.visibility = 'hidden';
                    dropdownMenu.style.transform = 'translateY(10px)';
                }
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', loadHeader);
    } else {
        loadHeader();
    }
})();