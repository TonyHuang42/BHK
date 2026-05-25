import './bootstrap';
import Swiper from 'swiper/bundle';
import PhotoSwipeLightbox from 'photoswipe/lightbox';

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

    document.addEventListener('click', (event) => {
        const trigger = event.target.closest('.gallery-card-trigger');
        if (!trigger) {
            return;
        }

        let items;
        try {
            items = JSON.parse(trigger.dataset.pswpItems || '[]');
        } catch (e) {
            items = [];
        }

        if (!items.length) {
            return;
        }

        const lightbox = new PhotoSwipeLightbox({
            bgOpacity: 1,
            dataSource: items,
            pswpModule: () => import("photoswipe"),
            padding: { top: 50, bottom: 200, right: 110 },
        });

        lightbox.on('uiRegister', function () {
            lightbox.pswp.ui.registerElement({
                name: 'caption',
                order: 9,
                isButton: false,
                appendTo: 'root',
                onInit: (el, pswp) => {
                    pswp.on('change', () => {
                        el.innerHTML = pswp.currSlide.data.caption || '';
                    });
                },
            });

            lightbox.pswp.ui.registerElement({
                name: 'thumbs',
                order: 9,
                isButton: false,
                appendTo: 'root',
                onInit: (el, pswp) => {
                    items.forEach((item, index) => {
                        const btn = document.createElement('button');
                        btn.type = 'button';
                        btn.className = 'pswp__thumb-btn';
                        const img = document.createElement('img');
                        img.src = item.msrc || item.src;
                        img.alt = '';
                        btn.appendChild(img);
                        btn.addEventListener('click', () => pswp.goTo(index));
                        el.appendChild(btn);
                    });

                    const btns = el.querySelectorAll('.pswp__thumb-btn');

                    const updateActive = () => {
                        btns.forEach((btn, i) => btn.classList.toggle('is-active', i === pswp.currIndex));
                        btns[pswp.currIndex]?.scrollIntoView({ block: 'nearest', behavior: 'smooth' });
                    };

                    pswp.on('change', updateActive);
                    updateActive();
                },
            });
        });

        lightbox.init();
        lightbox.loadAndOpen(0);
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
