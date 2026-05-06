@extends('layouts.app')

@section('title', '黑色聖誕｜香港保衛戰')
@section('meta_description', '1941年12月25日香港總督投降與「黑色聖誕」的歷史意義：十八日激戰落幕、日治時期開始與敵後抗戰的銜接。')

@section('content')
<main>
    @include('partials.hero-nav.battle')

    <section id="black-christmas">
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
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="readMoreModal" tabindex="-1" aria-labelledby="readMoreModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>糧食與物資短缺亦迅速成為市民面對的最大困難之一。香港戰前依賴外來供應，戰爭和佔領令糧食來源受到嚴重影響。日治時期的配給、軍票、物價波動和人口疏散，將許多家庭推入長期不安。對不少人來說，保衛戰結束後，真正漫長的苦難才剛開始。</p>
                    <p>「黑色聖誕」也改變了香港與中國抗戰之間的關係。戰前，香港是支援抗戰的重要後方；戰後，香港變成敵後戰場。正面防守失敗後，抵抗不再以殖民地守軍為中心，而逐步轉入新界山區、村落、海島、海上交通線和城市地下網絡之中。</p>
                    <p>中國共產黨領導的華南抗日游擊力量，在香港淪陷後進入港九新界，建立據點，聯絡群眾，收集武器，展開營救和情報工作。這些力量後來整編為港九大隊，成為日佔時期香港最重要的敵後抗日武裝之一。它們讓香港抗戰在投降之後仍然延續。</p>
                    <p>因此，12月25日具有雙重意義。它是香港保衛戰的終點，也是日治歲月的起點；它是城市淪陷的標誌，也是敵後抵抗逐步展開的背景。從軍事角度看，香港已經投降；但從人民抗戰的角度看，另一種抵抗才剛開始。</p>
                    <p>這一天的記憶也提醒我們，歷史中的失敗並不等於沉默。香港在1941年聖誕節失去了原有防線，市民也被迫面對殘酷的佔領現實。但在恐懼和壓迫之中，仍有人選擇保護他人、傳遞情報、支援游擊隊、營救被困者，將抗戰的火種保存下去。</p>
                    <p>「黑色聖誕」之所以值得被記住，不只是因為它悲傷，也因為它標示出香港歷史的一個深刻轉折。從這一天起，香港人面對的不只是軍事失敗，而是如何在佔領之下生存、互助和抵抗。這段歷史讓我們看見，城市的淪陷可以發生在一天之內，但人的尊嚴與抵抗，卻能在漫長黑暗中繼續存在。</p>
                    <p>今日回望「黑色聖誕」，我們不只是回望一次投降，而是回望一座城市如何被迫進入苦難，又如何在苦難中保存希望。它連結着前一頁的戰役，也通向後一頁的日治生活與敵後抗戰。理解這一天，才能理解香港二戰記憶中最沉重、也最值得深思的一部分。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
