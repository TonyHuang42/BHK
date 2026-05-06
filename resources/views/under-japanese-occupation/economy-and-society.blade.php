@extends('layouts.app')

@section('title', '經濟與社會｜日治下的香港')
@section('meta_description', '軍票、通脹與黑市下的日治香港：貿易停頓、失業蔓延與依靠親鄰網絡的社會應對。')

@section('content')
<main class="under-japanese-occupation">
    @include('partials.hero-nav.occupation')

    <section id="economy-and-society">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_radio_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>經濟與社會</h3>
                            <h6>A City Under Strain</h6>
                            <p class="mt-5">日軍推行軍票、徵用物資，令香港原有經濟秩序崩壞。積蓄貶值、物價波動、黑市交易和生活困頓，使社會關係也在壓力下發生變化。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_radio_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>日治時期，香港的經濟秩序遭到嚴重破壞。戰前香港依靠港口貿易、金融、航運、轉口和工業活動維持繁榮，是華南與世界市場之間的重要連接點。戰爭與佔領卻使這套系統幾乎停頓。海上交通受限，商業網絡中斷，工廠缺乏原料，商店缺貨，失業和貧困迅速蔓延。</p>
                        <p>香港原本的經濟活力，來自開放流通。貨物、人員、資金和資訊能夠在港口中自由運轉，城市才得以繁榮。日軍佔領後，流通被軍事權力所取代。物資不再主要根據市場需要分配，而是優先服務於佔領者和戰爭需求。這使普通市民和小商戶最先受到衝擊。</p>
                        <p>日本軍票是日治經濟中最具代表性的壓迫工具之一。日軍強迫市民使用軍票，逐步取代原有貨幣流通。對佔領者而言，這是一種控制市場、掠奪資源和轉嫁戰爭成本的方法；對市民而言，卻意味着辛苦積累的儲蓄可能迅速失去價值。貨幣不再可靠，生活也失去穩定基礎。</p>
                        <p>軍票制度對社會心理造成很大傷害。人們不確定手上的錢明天還能買到什麼，也不確定物價會否繼續上升。當貨幣信用崩壞，市民便更依賴實物、關係和黑市。糧食、藥品、布料、燃料、香煙和日用品，都可能成為更實在的交換資源。</p>
                        <p>隨着軍票濫發和物資不足，通脹與黑市交易變得普遍。官方價格未必能買到足夠物資，市民只好透過私下交換、黑市買賣或以物易物維持生活。這種經濟狀況令社會變得更加不平等：有門路的人能取得物資，沒有資源的人則更容易陷入飢餓和困境。</p>
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
                    <p>商業活動也受到嚴重打擊。許多店舖缺貨，工廠停工或被徵用，碼頭和倉庫服務於軍事需要，正常貿易難以維持。失業者增加，家庭收入減少，許多人被迫轉做零散工作、販賣家當或依靠親友接濟。昔日繁忙的城市，變成求生壓力沉重的佔領地。</p>
                    <p>佔領經濟還製造了新的社會分化。有些人因與日軍、偽組織或黑市活動關係密切而獲利；另一些人則因拒絕合作、失去工作、被徵用財產或缺乏糧食而陷入困境。戰爭迫使市民不斷在道德、現實和生存之間掙扎。合作、妥協、抵抗和求生，有時並不是容易區分的選項。</p>
                    <p>社會服務亦受到巨大衝擊。教育停頓或被改造，醫療資源短缺，慈善機構和社團難以正常運作。原本支撐城市生活的制度，在佔領下變得脆弱甚至失效。當公共制度無法提供安全感時，家庭、親族、鄰里和同鄉網絡便成為市民的重要依靠。</p>
                    <p>家庭結構也因經濟崩壞受到影響。父母可能失業，孩子可能提早承擔家務或外出找食物，老人和病人則更依賴家人照顧。有些家庭因疏散、死亡、拘禁或逃難而分散。經濟危機不是只反映在市場中，也反映在飯桌、病床、學業和家庭關係之中。</p>
                    <p>在這種壓力下，香港社會同時出現灰暗與光亮的一面。一方面，黑市、告密、投機和協力行為增加，社會信任受到破壞；另一方面，仍有人願意分享物資、照顧鄰里、保護被追捕者或支援抗戰。經濟崩壞沒有完全摧毀人的良知，反而讓一些互助行動顯得更加珍貴。</p>
                    <p>日治下的經濟與社會變化，也為敵後抵抗提供了背景。物資短缺使後勤更困難，但也使群眾更能感受到佔領的壓迫；軍票和徵用使市民生活受損，也加深了對日軍統治的不滿。抗戰不只是政治口號，而是在生活被壓迫、財產被掠奪、社會被撕裂的現實中逐步形成的回應。</p>
                    <p>因此，日治下的經濟與社會並不只是「物價上升」或「貨幣改變」這些表面現象。它是一場由佔領造成的全面生活崩壞：工作不穩、貨幣失信、物資稀缺、人心受壓。理解這一點，才能理解香港人在日治歲月中為何如此重視互助、信任和抵抗，也才能看見普通市民在歷史中的承受與堅持。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
