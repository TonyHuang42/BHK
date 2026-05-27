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

        const leftArrowSVGString =
            '<svg aria-hidden="true" class="pswp__icn" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M31 36L19 24L31 12" stroke="#333" stroke-width="2"/></svg>';
        const closeSVG =
            '<svg aria-hidden="true" width="24" height="24" viewBox="0 0 48 48" fill="none"><path d="M8 8L40 40" stroke="#333" stroke-width="4"/><path d="M8 40L40 8" stroke="#333" stroke-width="4"/></svg>';
        const zoomInSVG =
            '<svg aria-hidden="true" class="zoom-in-icon" width="24" height="24" viewBox="0 0 48 48" fill="none"><path d="M21 38C30.3888 38 38 30.3888 38 21C38 11.6112 30.3888 4 21 4C11.6112 4 4 11.6112 4 21C4 30.3888 11.6112 38 21 38Z" fill="none" stroke="#333" stroke-width="4"/><path d="M21 15L21 27" stroke="#333" stroke-width="4"/><path d="M15.0156 21.0156L27 21" stroke="#333" stroke-width="4"/><path d="M33.2216 33.2217L41.7069 41.707" stroke="#333" stroke-width="4"/></svg>';
        const zoomOutSVG =
            '<svg aria-hidden="true" class="zoom-out-icon" width="24" height="24" viewBox="0 0 48 48" fill="none"><path d="M21 38C30.3888 38 38 30.3888 38 21C38 11.6112 30.3888 4 21 4C11.6112 4 4 11.6112 4 21C4 30.3888 11.6112 38 21 38Z" fill="none" stroke="#333" stroke-width="4"/><path d="M15.0156 21.0156L27 21" stroke="#333" stroke-width="4"/><path d="M33.2216 33.2217L41.7069 41.707" stroke="#333" stroke-width="4"/></svg>';

        const lightbox = new PhotoSwipeLightbox({
            bgOpacity: 1,
            dataSource: items,
            pswpModule: () => import("photoswipe"),
            padding: { top: 50, bottom: 200, left: 10, right: 125 },
            arrowPrevSVG: leftArrowSVGString,
            arrowNextSVG: leftArrowSVGString,
            closeSVG: closeSVG,
            zoomSVG: `${zoomInSVG}${zoomOutSVG}`,
        });

        lightbox.on('uiRegister', function () {
            lightbox.pswp.ui.registerElement({
                name: 'caption',
                order: 9,
                isButton: false,
                appendTo: 'root',
                onInit: (el, pswp) => {
                    const inner = document.createElement('div');
                    el.appendChild(inner);

                    const updateCaption = () => {
                        const slide = pswp.currSlide;
                        const w = slide.data.w || slide.data.width;
                        inner.style.maxWidth = (w * slide.currZoomLevel) + 'px';
                        inner.innerHTML = (slide.data.caption || '').replace(/\n/g, '<br>');
                    };

                    pswp.on('change', updateCaption);
                },
            });

            lightbox.pswp.ui.registerElement({
                name: 'thumbs',
                order: 9,
                isButton: false,
                appendTo: 'root',
                onInit: (el, pswp) => {
                    el.addEventListener('wheel', (e) => e.stopPropagation());

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
        const startIndex = parseInt(trigger.dataset.pswpIndex, 10) || 0;
        lightbox.loadAndOpen(startIndex);
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
