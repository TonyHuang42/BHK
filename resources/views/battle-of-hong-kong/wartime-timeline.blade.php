@extends('layouts.app')

@section('title', '戰時時間線｜香港保衛戰')
@section('meta_description', '從全面抗戰、廣州淪陷到香港保衛戰與敵後抗戰，以時間線回顧香港在戰時大局中的關鍵節點。')

@section('content')
<main>
    @include('partials.hero-nav.battle')

    <section class="bg-texture-gray" id="wartime-timeline">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰時時間線</h3>
                            <h6>Wartime Timeline</h6>
                            <p class="mt-5">從七七事變到香港淪陷，再到敵後抗戰展開，這條時間線串連起香港如何一步步被捲入二戰風暴。它提醒我們，香港保衛戰不只是十八日的戰事，也是香港抗戰記憶的起點。</p>
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
                            <h4 class="mb-3" id="historyTitle">全面抗戰爆發</h4>
                            <p class="history-description mb-0" id="historyDescription1">
                                1937年七七事變後，中國全面抗戰爆發。雖然香港當時仍是英國殖民地，未立即成為戰場，但它與內地戰局已密切相連。大量難民、文化人、報人和政治人士南下香港，使香港成為抗戰新聞、救亡活動、物資轉運和思想交流的重要空間。這一時期的香港，不只是旁觀戰爭的港口城市，也逐漸成為支援中國抗戰的重要後方。
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
                            <img
                                src="{{ asset('img/battle-of-hong-kong/image_4_1.png') }}"
                                alt="1937年香港"
                                class="history-image w-100 h-100"
                                id="historyImage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.accordion')
</main>

<script>
    (function() {
        const imgBase = "/img/battle-of-hong-kong/";
        const historyData = {
            "1937.7.7": {
                title: "全面抗戰爆發",
                paragraphs: [
                    "1937年七七事變後，中國全面抗戰爆發。雖然香港當時仍是英國殖民地，未立即成為戰場，但它與內地戰局已密切相連。大量難民、文化人、報人和政治人士南下香港，使香港成為抗戰新聞、救亡活動、物資轉運和思想交流的重要空間。這一時期的香港，不只是旁觀戰爭的港口城市，也逐漸成為支援中國抗戰的重要後方。"
                ],
                image: imgBase + "image_4_1.png",
                imageAlt: "1937年香港"
            },
            "1938.10": {
                title: "廣州淪陷，戰火壓近香港",
                paragraphs: [
                    "1938年10月，日軍在華南登陸並佔領廣州，香港北面的戰略壓力急速上升。廣州失守後，日軍控制華南多條交通線，也切斷中國經香港、澳門輸入物資的部分通道。香港從此不再只是遠離前線的商埠，而是被日軍直接威脅的邊境城市。日軍若要南進東南亞、控制南中國海航道，香港便成為不能忽視的軍事目標。"
                ],
                image: imgBase + "image_4_2.png",
                imageAlt: "1938年香港"
            },
            "1941.12.08": {
                title: "日軍進攻香港",
                paragraphs: [
                    "1941年12月8日，日軍越過深圳河，從北面進攻香港，香港保衛戰正式開始。同日，日軍空襲啟德機場，迅速削弱香港守軍的空中力量。面對兵力、火力和制空權均佔優勢的日軍，守軍沿新界北部展開抵抗，並嘗試利用地形和防線拖延敵軍推進。這一天標誌着香港正式被捲入太平洋戰爭，也揭開十八日苦戰的序幕。"
                ],
                image: imgBase + "image_4_3.png",
                imageAlt: "日軍進攻香港"
            },
            "1941.12.10": {
                title: "新界防線被突破",
                paragraphs: [
                    "戰事開始後，日軍推進速度極快。新界地區的防線雖有準備，但面對日軍猛烈攻勢，很快陷入被動。醉酒灣防線原本被視為阻延日軍南下的重要屏障，但其防守未能持久，守軍被迫逐步撤向九龍及香港島。新界失守不只是地理上的後退，也意味香港守軍失去戰略縱深，整場戰役開始急速收縮到九龍與港島一帶。"
                ],
                image: imgBase + "image_4_4.png",
                imageAlt: "新界防線被突破"
            },
            "1941.12.13": {
                title: "九龍半島基本失守",
                paragraphs: [
                    "到12月13日前後，九龍半島大致落入日軍控制，守軍撤往香港島，維多利亞港成為雙方之間最後的天然屏障。香港島此後成為保衛戰的最後防線。九龍失守後，城市氣氛更加緊張，大批平民面對炮火、缺糧和逃難壓力。對守軍而言，戰局已由多線防守轉為孤島防禦；對市民而言，香港淪陷的陰影已越來越近。"
                ],
                image: imgBase + "image_4_5.png",
                imageAlt: "九龍半島基本失守"
            },
            "1941.12.18": {
                title: "日軍登陸香港島",
                paragraphs: [
                    "1941年12月18日夜，日軍從港島東北岸一帶登陸，戰鬥進入最激烈階段。港島山地、道路和市區很快成為近距離戰場，守軍在黃泥涌峽、灣仔峽、赤柱等地頑強抵抗。日軍登陸後，港島防線被逐步切割，守軍之間的聯絡和補給越來越困難。這一階段的戰鬥十分慘烈，軍人和平民都承受巨大傷亡與恐懼。"
                ],
                image: imgBase + "image_4_6.png",
                imageAlt: "日軍登陸港島"
            },
            "1941.12.25": {
                title: "黑色聖誕，香港投降",
                paragraphs: [
                    "1941年12月25日，香港總督楊慕琦代表英國殖民政府向日軍投降。這一天後來被稱為「黑色聖誕」，象徵香港保衛戰的結束，也標誌着日治時期的開始。經過十八日戰鬥，香港從重要港口變成被佔領城市，市民隨即面對宵禁、搜捕、糧食短缺、軍票和強制疏散等壓迫。戰役雖然結束，但香港人的苦難才剛開始。"
                ],
                image: imgBase + "image_4_7.png",
                imageAlt: "港府投降"
            },
            "1942": {
                title: "敵後抗戰展開",
                paragraphs: [
                    "香港淪陷後，抗戰並沒有停止。中國共產黨領導的華南抗日游擊力量進入港九新界，建立據點，聯絡鄉民，收集武器，並逐步整編為港九大隊。此後，香港的抗戰由正面戰場轉入敵後：游擊隊展開情報、營救、突襲、爆破和宣傳行動，也協助文化人、戰俘和盟軍人員逃離險境。香港保衛戰因此不只是十八日的軍事事件，更是香港敵後抵抗記憶的起點。"
                ],
                image: imgBase + "image_4_8.png",
                imageAlt: "敵後抗戰展開"
            }
        };

        const yearDisplay = document.getElementById("historyYear");
        const titleDisplay = document.getElementById("historyTitle");
        const description1Display = document.getElementById("historyDescription1");
        const description2Display = document.getElementById("historyDescription2");
        const imageDisplay = document.getElementById("historyImage");
        const buttons = document.querySelectorAll(".history-year-btn");

        if (!yearDisplay || !titleDisplay || !description1Display || !description2Display || !imageDisplay || !buttons.length) {
            return;
        }

        const applyHistoryState = (year) => {
            const data = historyData[year];
            if (!data) {
                return;
            }

            yearDisplay.textContent = year;
            titleDisplay.textContent = data.title;
            description1Display.textContent = data.paragraphs[0];
            description2Display.textContent = data.paragraphs[1] ?? "";
            imageDisplay.src = data.image;
            imageDisplay.alt = data.imageAlt;

            buttons.forEach((button) => {
                button.classList.toggle("is-active", button.dataset.year === year);
            });
        };

        buttons.forEach((button) => {
            const year = button.dataset.year;
            button.addEventListener("mouseenter", () => applyHistoryState(year));
        });
    })();
</script>
@endsection
