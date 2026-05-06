@extends('layouts.app')

@section('title', '游擊戰｜游擊與抵抗')
@section('meta_description', '港九大隊在新界與港九的機動戰術：地形利用、伏擊突襲、紙彈宣傳與以小搏大的敵後作戰方式。')

@section('content')
<main>
    @include('partials.hero-nav.guerrilla')

    <section class="bg-texture-gray" id="guerrilla-warfare">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>游擊戰</h3>
                            <h6>Guerrilla Warfare</h6>
                            <p class="mt-5">面對兵力和武器都佔優勢的日軍，游擊隊以山林、村落、海灣和街巷作為戰場。他們透過突襲、爆破、伏擊和宣傳，打擊敵人，也鼓舞民心。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_2_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>港九大隊面對的敵人，是擁有軍事、警察、情報和行政力量的佔領者。日軍控制主要道路、港口、城市設施和軍事據點，在兵力與裝備上都遠勝游擊隊。因此，港九大隊不能以正面決戰的方式與敵人硬碰，而必須採取靈活機動的游擊戰術。這種戰術的核心，是以小股力量尋找敵人的弱點，在適當時間突然出擊，再迅速撤離。</p>
                        <p>香港的游擊戰，有其獨特的地理條件。新界和離島有山嶺、叢林、海灣、村落和曲折小路，既便於隱蔽，也便於轉移。西貢、大嶼山、沙頭角、元朗等地，都成為游擊隊活動的重要區域。隊員熟悉本地地形，並得到村民、漁民和交通員協助，能夠在日軍難以掌握的路線中穿梭行動。</p>
                        <p>游擊戰並不只是一種軍事打法，也是一種生存方式。隊員往往白天分散隱蔽，夜間行動；敵人掃蕩時化整為零，敵人鬆懈時集中突擊。面對日軍大規模搜捕，游擊隊會利用山洞、密林、祠堂、寺院或民居藏身；當需要出擊時，又會以伏擊、突襲、爆破和短槍行動打擊敵人據點。</p>
                        <p>這種作戰方式要求隊員有高度紀律和判斷力。游擊隊不能長時間暴露，也不能讓一次行動牽連村民或破壞交通線。每一次出擊前，都需要偵察敵情、掌握路線、安排撤退和確保內外接應。表面上看，游擊行動迅速而突然；實際上，背後往往有長時間的準備和地方網絡配合。</p>
                        <p>港九大隊的作戰目標包括日軍哨所、偽警察局、交通設施、軍事據點和重要物資。這些行動未必每次規模龐大，但往往能造成很大的心理和戰略效果。例如襲擊啟德機場、爆破九龍窩打老道火車橋、突襲日偽軍哨所和警察局等，都不只是軍事行動，也是在告訴敵人：香港雖已淪陷，但抵抗仍在發生。</p>
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
                    <p>在西貢和沙田一帶，短槍隊以靈活方式活動，突襲敵人、處理密探、破壞日軍部署。在大嶼山，游擊隊則依靠山地、海岸和村落網絡與日偽軍周旋。沙頭角和元朗一帶的行動，則常與地方自衛、交通線和情報工作結合。不同地區的游擊戰有不同形式，但共同核心都是「避強擊弱、出其不意」。</p>
                    <p>除了陸上作戰，海上行動也是香港游擊戰的重要特色。香港島嶼眾多，水道複雜，漁民熟悉潮汐和航線。海上中隊利用小船、漁船和島嶼作掩護，進行運輸、營救、襲擊和物資轉移。海上游擊戰不只打擊敵人，也維持香港與外圍抗日力量之間的聯繫。</p>
                    <p>游擊隊也常以行動回應日軍掃蕩。日軍若集中兵力在某地搜捕，游擊隊可能在另一地發動襲擊，迫使敵人分散力量。這種牽制使日軍即使佔領香港，也難以完全穩定後方。對佔領者而言，看不見、抓不住、打不盡的游擊力量，是長期的威脅。</p>
                    <p>除了武裝襲擊，港九大隊也重視政治和心理層面的戰鬥。「紙彈戰」便是其中一種形式。透過傳單、標語和宣傳品，游擊隊揭露日軍暴行，鼓勵市民保持抗戰信心，也向敵偽人員施加心理壓力。在佔領者嚴控新聞和言論的環境下，一張傳單有時也能成為打破沉默的武器。</p>
                    <p>游擊戰的成功，離不開群眾支持。村民提供情報，漁民提供船隻，婦女和交通員送信，地下工作者安排接應。沒有這些支援，游擊隊很難知道敵人動向，也很難在行動後安全撤退。因此，香港的游擊戰從來不只是隊員與日軍之間的軍事較量，也是佔領者與民間社會之間的信任爭奪。</p>
                    <p>這種戰鬥方式也有沉重代價. 每次行動都有失敗、被捕或犧牲的風險；每個據點都有可能被敵人發現；每名支援者都可能遭到報復。游擊戰看似機動靈活，實際上是在高度危險中求生存、求延續。正因如此，每一次成功出擊和安全撤退，都凝聚了許多人的勇氣與謹慎。</p>
                    <p>因此，香港的游擊戰不是單純的山林戰，也不是零散的襲擊故事。它是一種結合地形、群眾、情報、宣傳和機動作戰的敵後抵抗方式。游擊隊以有限力量牽制敵人，以熟悉的地方對抗強大的佔領機器，也讓香港在淪陷歲月中保留了一條持續抵抗的線索。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
