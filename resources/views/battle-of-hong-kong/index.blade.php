@extends('layouts.app')

@section('title', '香港保衛戰')
@section('meta_description', '回顧1941年香港保衛戰的歷史脈絡，從戰前背景、十八日戰事經過到黑色聖誕投降，以及戰時時間線的完整紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner.png') }}" alt="" class="hero-img" aria-hidden="true" style="object-position: 55% center;">
        <img src="{{ asset('img/home/section_header-香港保衛戰.svg') }}" alt="香港保衛戰" class="hero-title battle-of-hong-kong-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('battle.index', ['tab' => 'before-the-storm']) }}" data-tab-link="before-the-storm">戰前背景</a>
                <a href="{{ route('battle.index', ['tab' => 'eighteen-days-of-battle']) }}" data-tab-link="eighteen-days-of-battle">戰役經過</a>
                <a href="{{ route('battle.index', ['tab' => 'black-christmas']) }}" data-tab-link="black-christmas">黑色聖誕</a>
                <a href="{{ route('battle.index', ['tab' => 'wartime-timeline']) }}" data-tab-link="wartime-timeline">戰時時間線</a>
            </div>
        </div>
    </section>

    {{-- 戰前背景 --}}
    <section class="bg-texture-gray" id="before-the-storm" data-tab-panel="before-the-storm" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰前背景</h3>
                            <h6>Before the Storm</h6>
                            <p class="mt-5">戰火來臨之前，香港已不只是遠東商埠，也是一個連接華南、東南亞與世界航道的重要港口。隨着中國全面抗戰爆發，香港逐漸成為物資、新聞、難民與救亡活動交會的地方。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>戰火真正來到香港之前，這座城市早已與中國抗戰和太平洋局勢緊密相連。1937年七七事變後，中國全面抗戰爆發，戰火從華北蔓延至華中、華南。香港當時仍由英國殖民政府管治，表面上與中國內地戰場保持距離，但它的地理位置、港口功能和華人社會網絡，使它很快成為戰時中國不可忽視的一個節點。</p>
                        <p>香港位處南中國海要衝，背靠廣東，面向東南亞，是連接華南、海外華僑社群和國際航道的重要港口。戰前的香港，是一座商業城市，也是一個資訊、資金、人員和物資高度流動的地方。這種開放性，使香港在和平時期成為貿易中心；到了戰爭時期，則使它成為支援中國抗戰的重要後方。</p>
                        <p>中國全面抗戰爆發後，大量難民、文化人、報人、學生和政治人士南下香港。有人來此避難，有人繼續從事出版、演講、籌款和救亡活動，也有人透過香港與海外社群保持聯繫。香港的報館、學校、戲院、社團和工會，逐漸承載起抗日救亡的聲音。這些活動使香港不再只是殖民地港口，也成為中國抗戰輿論和民間動員的一部分。</p>
                        <p>對許多內地文化人而言，香港曾是一個相對安全的暫避之地。這裏既能接觸國際新聞，也能保持與內地、南洋和海外的聯絡。許多文章、刊物、演出和籌款活動，都在戰時香港展開。這一點也解釋了為何日軍佔領香港後，會急於搜捕抗日文化人和民主人士；因為香港早已是抗日輿論與文化力量的重要聚集地。</p>
                        <p>1938年10月，廣州淪陷，香港北面的戰略壓力急速上升。廣州原本是華南重鎮，與香港在交通、貿易和人口流動上關係密切。廣州落入日軍手中後，香港與日軍控制區之間的距離大幅縮短，城市所面對的威脅不再遙遠。香港由抗戰後方逐漸變成戰爭前線邊緣。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-before-the-storm">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 戰役經過 --}}
    <section class="bg-texture-gray" id="eighteen-days-of-battle" data-tab-panel="eighteen-days-of-battle" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰役經過</h3>
                            <h6>Eighteen Days of Battle</h6>
                            <p class="mt-5">1941年12月，日軍由北面進攻香港，戰事從新界一路推進至九龍和香港島。短短十八日內，守軍與市民共同經歷了空襲、撤退、巷戰與孤島防守的巨大壓力。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月8日，太平洋戰爭爆發後不久，日軍由深圳河以北向香港發動進攻，香港保衛戰正式開始。同日，日軍空襲啟德機場，迅速削弱香港守軍的空中力量。這場戰役從一開始便顯示出雙方實力的不平衡：日軍掌握進攻主動，並在兵力、火力、空中支援和戰場準備上佔有明顯優勢。</p>
                        <p>日軍進攻香港的時間，與其對太平洋多地展開攻勢幾乎同步。香港並不是孤立被攻擊，而是日本整體戰略的一部分。日軍希望迅速奪取香港，消除英國在華南沿岸的重要據點，並為其南進東南亞、控制海上交通線創造有利條件。因此，香港保衛戰從一開始便具有區域戰略意義。</p>
                        <p>戰事最初在新界展開。守軍沿新界北部和主要通道部署，希望拖延日軍推進，為後方防線爭取時間。新界地形複雜，山地、道路、村落和海岸線交錯，理論上可以為防守提供一定掩護。然而，新界地域廣闊，防線難以處處兼顧，守軍兵力有限，使防守壓力十分沉重。</p>
                        <p>日軍越過邊境後，迅速向南推進。守軍嘗試破壞道路、橋樑和交通設施，以延緩敵軍速度，但日軍攻勢猛烈，並能利用偵察、火力和機動能力突破防守。新界北部的防線未能長時間阻止日軍，守軍被迫逐步向南撤退。這一階段反映出香港缺乏戰略縱深的弱點：一旦前方防線被突破，後方空間很快收縮。</p>
                        <p>醉酒灣防線原本被視為阻延日軍進入九龍的重要屏障。這條防線橫跨新界南部，依靠山地和工事設置防禦，希望在日軍南下時形成有效阻擋。然而，防線在實戰中未能發揮預期作用。日軍突破關鍵位置後，守軍不得不放棄新界，撤向九龍和香港島。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-eighteen-days-of-battle">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 黑色聖誕 --}}
    <section class="bg-texture-gray" id="black-christmas" data-tab-panel="black-christmas" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>黑色聖誕</h3>
                            <h6>Black Christmas</h6>
                            <p class="mt-5">1941年12月25日，香港投降，這一天後來被稱為「黑色聖誕」。它標誌着香港保衛戰的結束，也象徵三年零八個月日治歲月的開始。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月25日，本應是聖誕節，卻成為香港歷史上最沉重的日子之一。經過十八日激戰，香港守軍已面對極端困境。多處防線被日軍突破或切斷，傷兵和平民處境危急，糧食、彈藥、醫療物資和通訊能力都接近極限。</p>
                        <p>當日下午，香港總督楊慕琦代表英國殖民政府向日軍投降，香港保衛戰正式結束。這一天後來被稱為「黑色聖誕」。這個名稱之所以沉重，不只是因為它發生在聖誕節，更因為它象徵着香港原有秩序的崩塌，以及城市從戰場進入佔領時期的轉折。</p>
                        <p>投降對香港來說，是一個巨大的政治和心理震盪。戰前的香港雖然已感受到戰爭壓力，但不少市民仍生活在殖民政府、商業社會和港口秩序之中。12月25日之後，這套秩序被日軍軍政統治取代. 市民很快意識到，熟悉的城市已不再由原有制度運作，而是落入佔領者手中。</p>
                        <p>日軍接管香港後，開始重新安排城市秩序。行政、治安、交通、物資和新聞都被置於軍事控制之下。公共建築、學校、倉庫、碼頭和民居可能被徵用，街道上出現新的命令、檢查和巡邏。香港不再只是被打敗的城市，而是一座被軍事力量全面控制的佔領地。</p>
                        <p>對普通市民而言，投降後的變化很快在生活中出現。宵禁、搜查、拘捕、身份登記、通行限制和新聞控制，使日常行動變得危險。人們需要小心說話，小心出門，小心與誰交往。佔領統治不只是軍隊進駐，也是一種深入生活細節的恐懼。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-black-christmas">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 戰時時間線 --}}
    <section class="bg-texture-gray" id="wartime-timeline" data-tab-panel="wartime-timeline" hidden>
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

    {{-- Modals --}}
    <div class="modal fade" id="readMoreModal-before-the-storm" tabindex="-1" aria-labelledby="readMoreModalLabel-before-the-storm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-before-the-storm">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>日軍控制廣州後，華南多條交通線受制，中國經香港輸入物資的通道也受到更大壓力。對日本而言，香港不只是英國殖民地，更是一個可能支援中國抗戰、連接海外資源和影響南中國海局勢的據點。若要切斷中國對外聯繫，並推進其南進戰略，香港便成為日軍不能忽視的目標。</p>
                    <p>從更大的國際局勢看，香港也處在帝國競爭和太平洋戰爭爆發前夕的緊張格局之中。日本在中國戰場擴張，同時準備向東南亞推進；英國則同時面對歐洲戰場和亞洲殖民地防務壓力。香港雖然地位重要，但在英國全球戰略中，並不是最優先獲得增援的地區。</p>
                    <p>英國在香港設有守軍、防線 and 軍事設施，但守備條件並不理想。香港面積有限，背靠日軍已控制或威脅的華南地區，缺乏戰略縱深。一旦日軍從北面進攻，守軍必須在新界、九龍和香港島之間逐步收縮防線。香港作為港口有其價值，但作為長期孤立防守的軍事據點，處境十分困難。</p>
                    <p>香港守軍由不同部隊組成，包括英軍、加拿大軍、印度軍、香港義勇防衛軍等。這種多元組成反映了香港作為殖民地和國際港口的特性，也反映了英國在遠東防務上的臨時調配。然而，守軍在空軍、海軍支援、重型武器和後勤補給方面都明顯不足。面對準備已久、戰鬥經驗豐富的日軍，香港守軍從一開始便處於劣勢。</p>
                    <p>戰前香港社會也感受到局勢變化。隨着戰爭逼近，市民對物資供應、家庭安全和未來前景產生憂慮。難民湧入、新聞報道、軍事準備和日軍南下傳聞，都令城市氣氛逐漸緊張。繁忙的港口、市場和街道背後，戰爭陰影日益明顯。</p>
                    <p>因此，香港保衛戰並不是突然從天而降的事件。它是多年戰爭壓力、華南局勢變化、國際戰略角力和香港本身地理位置共同累積的結果。當1941年12月日軍越過深圳河時，香港早已站在歷史風暴的邊緣。</p>
                    <p>理解戰前背景，有助我們看見香港在二戰中的特殊位置。香港既是中國抗戰的支援地，也是英國殖民地；既是商業港口，也是日軍南進戰略中的軍事目標。這種複雜身份，使香港保衛戰不只是地方戰役，而是中國抗戰、殖民防務和太平洋戰爭交會的一個關鍵時刻。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-eighteen-days-of-battle" tabindex="-1" aria-labelledby="readMoreModalLabel-eighteen-days-of-battle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-eighteen-days-of-battle">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>新界失守後，九龍成為下一個戰場。九龍半島與香港島隔海相望，若九龍失守，日軍便可從北岸直接威脅香港島。守軍在九龍的防守時間有限，面對日軍持續推進，很快被迫撤退。到12月13日前後，九龍半島基本落入日軍控制。</p>
                    <p>九龍失守後，維多利亞港成為守軍與日軍之間最後的天然屏障。香港島也從後方基地變成最後防線。這一轉變對守軍和市民都極為沉重。對守軍而言，戰場變成孤島防禦，補給和部署愈加困難；對市民而言，戰爭已從邊境、新界 and 九龍，一步步逼近人口密集的港島。</p>
                    <p>日軍並未因維多利亞港阻隔而停止攻勢。12月18日夜，日軍在香港島東北岸一帶登陸，戰鬥進入最激烈階段。登陸成功後，日軍逐步向港島內陸推進，試圖切割守軍陣地，瓦解防線。港島的山地、峽谷、道路和市區環境，使戰鬥變得殘酷而混難。</p>
                    <p>守軍在黃泥涌峽、灣仔峽、赤柱等地頑強抵抗。這些地方不只是地圖上的軍事位置，也是香港城市記憶中承受戰火的重要空間。許多守軍在孤立、缺乏補給和通訊困難的情況下仍然堅守。不同族裔和背景的士兵，包括英軍、加拿大軍、印度軍、本地義勇軍等，都在戰鬥中付出沉重代價。</p>
                    <p>戰鬥同時波及平民。炮火、空襲、流彈、醫療資源不足和食物短缺，使市民處境迅速惡化。醫院、避難空間和民居都可能受到戰爭影響。對普通香港人而言，保衛戰不是遠方軍隊的事情，而是直接進入街道、家庭和身體記憶的災難。</p>
                    <p>隨着日軍在港島擴大控制，守軍防線逐漸被切割。彈藥、糧食、醫療和通訊都面臨嚴重困難。雖然多處仍有抵抗，但整體戰局已難以逆轉。香港作為孤立據點，缺乏足夠外援和持久防守條件，最終走向投降。</p>
                    <p>香港保衛戰只持續十八日，卻濃縮了邊境戰、新界撤退、九龍失守、港島登陸和城市防禦等多重階段。這場戰役以失敗告終，但它不是簡單的潰敗故事。它記錄了守軍在不利條件下的抵抗，也記錄了香港市民在戰火中所承受的恐懼與苦難。它是理解香港淪陷和日治歲月的必經起點。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-black-christmas" tabindex="-1" aria-labelledby="readMoreModalLabel-black-christmas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-black-christmas">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>糧食與物資短缺亦迅速成為市民面對的最大困難之一。香港戰前依賴外來供應，戰爭和佔領令糧食來源受到嚴重影響。日治時期的配給、軍票、物價波動和人口疏散，將許多家庭推入長期不安。對不少人來說，保衛戰結束後，真正漫長的苦難才剛開始。</p>
                    <p>「黑色聖誕」也改變了香港與中國抗戰之間的關係。戰前，香港是支援抗戰的重要後方；戰後，香港變成敵後戰場。正面防守失敗後，抵抗不再以殖民地守軍為中心，而逐步轉入新界山區、村落、海島、海上交通線和城市地下網絡之中。</p>
                    <p>中國共產黨領導的華南抗日游擊力量，在香港淪陷後進入港九新界，建立據點，聯絡群眾，收集武器，展開營救和情報工作。這些力量後來整編為港九大隊，成為日佔時期香港最重要的敵後抗日武裝之一。它們讓香港抗戰在投降之後仍然延續。</p>
                    <p>因此，12月25日具有雙重意義。它是香港保衛戰的終點，也是日治歲月的起點；它是城市淪陷的標誌，也是敵後抵抗逐步展開的背景。從軍事角度看，香港已經投降；但從人民抗戰的角度看，另一種抵抗才剛開始。</p>
                    <p>這一天的記憶也提醒我們，歷史中的失敗並不等於沉默。香港在1941年聖誕節失去了原有防線，市民也被迫面對殘酷的佔領現實。但在恐懼和壓迫之中，仍有人選擇保護他人、傳遞情報、支援游擊隊、營救被困者，將抗戰的火種保存下去。</p>
                    <p>「黑色聖誕」之所以值得被記住，不只是因為它悲傷，也因為它標示出香港歷史的一個深刻轉折。從這一天起，香港人面對的不只是軍事失敗，而是如何在佔領之下生存、互助和抵抗。這段歷史讓我們看見，城市的淪陷可以發生在一天之內，但人的尊嚴與抵抗，卻能在漫長黑暗中繼續存在。</p>
                    <p>今日回望「黑色聖誕」，我們不只是回望一次投降，而是回望一座城市如何被迫進入苦難，又如何在苦難中保存希望。它連結着前一頁的戰役，也通向後一頁的日治生活與敵後抗戰. 理解這一天，才能理解香港二戰記憶中最沉重、也最值得深思的一部分。</p>
                </div>
            </div>
        </div>
    </div>
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
