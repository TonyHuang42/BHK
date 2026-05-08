import './bootstrap';
import Swiper from 'swiper/bundle';

// Initialize Swiper
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.battleSwiper').forEach((el) => {
        new Swiper(el, {
            slidesPerView: 2.2,
            centeredSlides: true,
            spaceBetween: 100,
            loop: true,
            speed: 1000,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1.5,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                992: {
                    slidesPerView: 2.2,
                    spaceBetween: 100,
                },
            }
        });
    });

    // Generic Tab Logic
    const tabLinks = document.querySelectorAll('[data-tab-link]');
    const tabPanels = document.querySelectorAll('[data-tab-panel]');

    if (tabLinks.length > 0 && tabPanels.length > 0) {
        const slugs = Array.from(tabLinks).map(a => a.dataset.tabLink);
        const uniqueSlugs = [...new Set(slugs)];

        function tabFromUrl() {
            const param = new URLSearchParams(window.location.search).get('tab');
            return uniqueSlugs.includes(param) ? param : '';
        }

        function setUrlTab(slug) {
            const url = new URL(window.location.href);
            url.searchParams.set('tab', slug);
            const query = url.searchParams.toString();
            history.replaceState(null, '', query ? `${url.pathname}?${query}` : url.pathname);
        }

        function activate(slug) {
            if (!uniqueSlugs.includes(slug)) slug = uniqueSlugs[0];
            
            tabPanels.forEach(p => {
                p.hidden = (p.dataset.tabPanel !== slug);
            });
            
            tabLinks.forEach(a => {
                const isActive = a.dataset.tabLink === slug;
                if (isActive) {
                    a.setAttribute('aria-current', 'page');
                } else {
                    a.removeAttribute('aria-current');
                }
            });
        }

        tabLinks.forEach(a => {
            a.addEventListener('click', e => {
                e.preventDefault();
                const slug = a.dataset.tabLink;
                setUrlTab(slug);
                activate(slug);
            });
        });

        window.addEventListener('popstate', () => activate(tabFromUrl() || uniqueSlugs[0]));
        activate(tabFromUrl() || uniqueSlugs[0]);
    }
});
