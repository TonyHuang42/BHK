@extends('layouts.app')

@section('title', '戰役經過｜香港保衛戰')
@section('meta_description', '1941年12月8日至25日香港保衛戰的攻防節奏：邊境開戰、新界九龍失守、港島登陸與慘烈巷戰，重溫十八日的戰事經過。')

@section('content')
<main>
    @include('partials.hero-nav.battle')

    <section class="bg-texture-gray" id="eighteen-days-of-battle">
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
                    <p>新界失守後，九龍成為下一個戰場。九龍半島與香港島隔海相望，若九龍失守，日軍便可從北岸直接威脅香港島。守軍在九龍的防守時間有限，面對日軍持續推進，很快被迫撤退。到12月13日前後，九龍半島基本落入日軍控制。</p>
                    <p>九龍失守後，維多利亞港成為守軍與日軍之間最後的天然屏障。香港島也從後方基地變成最後防線。這一轉變對守軍和市民都極為沉重。對守軍而言，戰場變成孤島防禦，補給和部署愈加困難；對市民而言，戰爭已從邊境、新界 and 九龍，一步步逼近人口密集的港島。</p>
                    <p>日軍並未因維多利亞港阻隔而停止攻勢。12月18日夜，日軍在香港島東北岸一帶登陸，戰鬥進入最激烈階段。登陸成功後，日軍逐步向港島內陸推進，試圖切割守軍陣地，瓦解防線。港島的山地、峽谷、道路和市區環境，使戰鬥變得殘酷而混亂。</p>
                    <p>守軍在黃泥涌峽、灣仔峽、赤柱等地頑強抵抗。這些地方不只是地圖上的軍事位置，也是香港城市記憶中承受戰火的重要空間。許多守軍在孤立、缺乏補給和通訊困難的情況下仍然堅守。不同族裔和背景的士兵，包括英軍、加拿大軍、印度軍、本地義勇軍等，都在戰鬥中付出沉重代價。</p>
                    <p>戰鬥同時波及平民。炮火、空襲、流彈、醫療資源不足和食物短缺，使市民處境迅速惡化。醫院、避難空間和民居都可能受到戰爭影響。對普通香港人而言，保衛戰不是遠方軍隊的事情，而是直接進入街道、家庭和身體記憶的災難。</p>
                    <p>隨着日軍在港島擴大控制，守軍防線逐漸被切割。彈藥、糧食、醫療和通訊都面臨嚴重困難。雖然多處仍有抵抗，但整體戰局已難以逆轉。香港作為孤立據點，缺乏足夠外援和持久防守條件，最終走向投降。</p>
                    <p>香港保衛戰只持續十八日，卻濃縮了邊境戰、新界撤退、九龍失守、港島登陸和城市防禦等多重階段。這場戰役以失敗告終，但它不是簡單的潰敗故事。它記錄了守軍在不利條件下的抵抗，也記錄了香港市民在戰火中所承受的恐懼與苦難。它是理解香港淪陷和日治歲月的必經起點。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
