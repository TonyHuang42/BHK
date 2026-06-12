{{-- 戰時時間線 --}}
<section class="bg-texture-gray" id="wartime-timeline" data-tab-panel="wartime-timeline" hidden>
    <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
        <div class="container top-padding">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <div class="text-center">
                        <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                        <h3>{{ __('battle.before_storm.wartime_timeline_title') }}</h3>
                        @if (app()->getLocale() === 'zh')
                            <h6 class="content-subtitle">{{ __('battle.before_storm.wartime_timeline_subtitle') }}</h6>
                        @endif
                        <p class="mt-5">{{ __('battle.before_storm.wartime_timeline_intro') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding-sm">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <article class="history-content h-100 d-flex flex-column justify-content-center" id="historyContent">
                        <h1 class="mb-3" id="historyYear">1937.7.7</h1>
                        <h4 class="mb-3" id="historyTitle">{{ __('battle.before_storm.wartime_timeline_1937_title') }}</h4>
                        <p class="history-description mb-0" id="historyDescription1">
                            {{ __('battle.before_storm.wartime_timeline_1937_desc') }}
                        </p>
                        <p class="history-description mb-0" id="historyDescription2"></p>
                    </article>
                </div>

                <div class="col-lg-2">
                    <nav class="history-timeline h-100 d-flex align-items-center justify-content-center" aria-label="History timeline">
                        <ul class="history-years-list list-unstyled m-0 p-0 d-flex flex-lg-column gap-3 gap-lg-4">
                            <li><button type="button" class="history-year-btn is-active" data-year="1937.7.7">1937.7.7</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1938.10">1938.10</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1941.12.08">1941.12.08</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1941.12.10">1941.12.10</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1941.12.13">1941.12.13</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1941.12.18">1941.12.18</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1941.12.25">1941.12.25</button></li>
                            <li><button type="button" class="history-year-btn" data-year="1942">1942</button></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-5">
                    <div class="history-image-wrap h-100">
                        <img src="{{ asset('img/battle-of-hong-kong/image_4_1.jpg') }}" alt="1937年香港" class="history-image w-100 h-100" id="historyImage">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
(function () {

    const imgBase = "/img/battle-of-hong-kong/";

    const historyData = {
        "1937.7.7": {
            title: "{!! __('battle.before_storm.wartime_timeline_1937_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1937_desc') !!}"
            ],
            image: imgBase + "image_4_1.jpg",
            imageAlt: "1937"
        },

        "1938.10": {
            title: "{!! __('battle.before_storm.wartime_timeline_1938_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1938_desc') !!}"
            ],
            image: imgBase + "image_4_2.jpg",
            imageAlt: "1938"
        },

        "1941.12.08": {
            title: "{!! __('battle.before_storm.wartime_timeline_1941_1208_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1941_1208_desc') !!}"
            ],
            image: imgBase + "image_4_3.jpg",
            imageAlt: "1941"
        },

        "1941.12.10": {
            title: "{!! __('battle.before_storm.wartime_timeline_1941_1210_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1941_1210_desc') !!}"
            ],
            image: imgBase + "image_4_4.jpg",
            imageAlt: "1941"
        },

        "1941.12.13": {
            title: "{!! __('battle.before_storm.wartime_timeline_1941_1213_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1941_1213_desc') !!}"
            ],
            image: imgBase + "image_4_5.jpg",
            imageAlt: "1941"
        },

        "1941.12.18": {
            title: "{!! __('battle.before_storm.wartime_timeline_1941_1218_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1941_1218_desc') !!}"
            ],
            image: imgBase + "image_4_6.jpg",
            imageAlt: "1941"
        },

        "1941.12.25": {
            title: "{!! __('battle.before_storm.wartime_timeline_1941_1225_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1941_1225_desc') !!}"
            ],
            image: imgBase + "image_4_7.jpg",
            imageAlt: "1941"
        },

        "1942": {
            title: "{!! __('battle.before_storm.wartime_timeline_1942_title') !!}",
            paragraphs: [
                "{!! __('battle.before_storm.wartime_timeline_1942_desc') !!}"
            ],
            image: imgBase + "image_4_8.jpg",
            imageAlt: "1942"
        }
    };

    const yearDisplay = document.getElementById("historyYear");
    const titleDisplay = document.getElementById("historyTitle");
    const description1Display = document.getElementById("historyDescription1");
    const description2Display = document.getElementById("historyDescription2");
    const imageDisplay = document.getElementById("historyImage");
    const buttons = document.querySelectorAll(".history-year-btn");

    if (!yearDisplay || !titleDisplay || !description1Display || !imageDisplay || !buttons.length) return;

    const applyHistoryState = (year) => {
        const data = historyData[year];
        if (!data) return;

        yearDisplay.textContent = year;
        titleDisplay.textContent = data.title;
        description1Display.textContent = data.paragraphs[0] || "";
        description2Display.textContent = data.paragraphs[1] || "";
        imageDisplay.src = data.image;
        imageDisplay.alt = data.imageAlt;

        buttons.forEach(btn => {
            btn.classList.toggle("is-active", btn.dataset.year === year);
        });
    };

    buttons.forEach(btn => {
        btn.addEventListener("mouseenter", () => applyHistoryState(btn.dataset.year));
    });

})();
</script>
