@extends('layouts.app')

@section('title', '港九大隊｜游擊與抵抗')
@section('meta_description', '香港淪陷後華南抗日游擊力量如何在新界整編為港九大隊：西貢、沙頭角、大嶼山等地的敵後抗戰與民間支援。')

@section('content')
<main>
    @include('partials.hero-nav.guerrilla')

    <section id="hk-kowloon-brigade">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>港九大隊</h3>
                            <h6>The Hong Kong–Kowloon Brigade</h6>
                            <p class="mt-5">香港淪陷後，抵抗並沒有停止。港九大隊在新界、西貢、沙頭角、大嶼山和市區等地建立據點，成為日佔時期香港最重要的敵後抗日力量。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>香港在1941年12月淪陷後，正面戰場雖然結束，但抗戰並沒有停止。日軍接管城市，實施軍政統治，試圖把香港完全納入其戰爭機器之中。然而，在新界山區、海灣、村落和市區暗處，另一種形式的抵抗開始展開。這就是由中國共產黨領導的華南抗日游擊力量，在香港建立起來的敵後抗戰。</p>
                        <p>早在日軍進攻香港初期，廣東人民抗日游擊隊已派出多支武工隊進入新界。他們進入沙頭角、西貢、元朗等地，聯絡鄉民，打擊土匪，收集英軍撤退時遺下的武器，並開展抗日宣傳。這些工作看似零散，卻為日後的長期抵抗奠定基礎：有了落腳點，有了地方關係，有了武器來源，也逐漸建立起群眾信任。</p>
                        <p>香港淪陷初期，社會秩序迅速崩壞。日軍忙於接管城市，鄉郊地區則同時面對土匪、偽組織和日軍勢力的威脅。武工隊進入新界後，除了準備抗日，也要處理地方治安問題。他們打擊土匪，保護村民，協助地方建立自衛力量，使不少鄉民逐漸相信這些抗日力量不只是軍事隊伍，也是保護家園的力量。</p>
                        <p>1942年2月3日，活躍於港九新界的游擊力量正式整編為港九大隊。它後來成為日佔時期香港最重要的敵後抗日武裝力量，也是香港抗戰史中不可忽視的一支隊伍。港九大隊並非外來力量簡單進入香港，而是在本地村落、工人、學生、漁民、婦女和原居民支持下逐步成長起來的抗戰組織。</p>
                        <p>港九大隊的成立，代表香港抗戰進入新的階段。正面防守已經失敗，但敵後抵抗開始制度化、組織化。部隊有領導、有分工、有活動區域，也有政治、軍事、情報和後勤安排。這使抵抗不再只是零散個別行動，而逐步形成能夠長期存在的組織力量。</p>
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
                    <p>港九大隊的活動範圍十分廣泛。它在西貢、沙頭角、大嶼山、元朗、海上和市區等地建立不同中隊，因應各地環境採取不同策略。在山區和鄉村，隊員依靠地形與群眾掩護；在海上，他們利用漁船和島嶼活動；在市區，則以情報、宣傳、交通和地下聯絡為主。香港的山、海、村、城，都成為抵抗的一部分。</p>
                    <p>這支隊伍的特點，在於它將香港的地方條件轉化為抗戰力量。新界的山路、村道、祠堂、教堂、岩洞和海灣，不再只是地理空間，而是藏身、轉移、補給和聯絡的節點。許多香港市民雖未必正式加入隊伍，卻在糧食、情報、住宿、醫療和帶路方面提供支援，使港九大隊能在嚴密佔領下堅持多年。</p>
                    <p>港九大隊的成員也反映了香港社會的多元面貌。他們之中有本地青年、工人、農民、漁民、學生，也有從內地抗日隊伍派來的幹部。有人熟悉山路，有人懂得航海，有人能在市區活動，有人負責文書、醫療、宣傳或情報。抗戰需要的不只是槍和勇氣，也需要各種技能、身份和關係網絡。</p>
                    <p>在日軍佔領下，公開抵抗幾乎不可能，港九大隊便以隱蔽、機動和群眾基礎維持行動。隊員可能今天在西貢，明天轉往沙頭角；白天隱蔽，夜間行動；敵人大舉掃蕩時分散，敵人鬆懈時集中出擊。這種靈活性，使他們能在力量懸殊的情況下生存下來，並不斷牽制日軍。</p>
                    <p>港九大隊的歷史也說明，香港抗戰並不是單一戰場、單一政權或單一族群的故事。它既有本地人的參與，也與華南抗日游擊戰、中國全面抗戰和世界反法西斯戰爭相連。香港的敵後工作，既保護本地群眾，也支援盟軍情報和營救行動，具有地方與國際雙重意義。</p>
                    <p>因此，認識港九大隊，就是認識香港抗戰從正面戰場轉入敵後的關鍵。它讓我們看到，香港淪陷並不等於香港沉默；城市被佔領，也不等於人民放棄抵抗。港九大隊的歷史，連接了香港本地經驗與中國整體抗戰，也保存了香港人在民族危亡中守護家園的一段重要記憶。</p>
                    <p>今天回望港九大隊，不只是為了記住一支部隊的名稱，而是為了理解一種歷史選擇。在佔領之下，許多人仍選擇冒險行動、保護同胞、支援抗戰。這些選擇共同構成香港在二戰中的另一條戰線：一條不在正面陣地上，卻深入山野、海灣、村落和人心之中的抵抗戰線。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
