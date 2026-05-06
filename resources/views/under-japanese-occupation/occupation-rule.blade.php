@extends('layouts.app')

@section('title', '佔領統治｜日治下的香港')
@section('meta_description', '香港淪陷後日軍軍政統治、宵禁搜查、宣傳控制與協力網絡：三年零八個月高壓秩序的輪廓。')

@section('content')
<main class="under-japanese-occupation">
    @include('partials.hero-nav.occupation')

    <section id="occupation-rule">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_radio_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>佔領統治</h3>
                            <h6>Rule by Force</h6>
                            <p class="mt-5">香港淪陷後，日軍以軍政方式控制城市，透過宵禁、搜查、登記、宣傳和徵用改寫市民生活。佔領統治不只改變了政府，也深入街道、家庭和日常秩序之中。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_radio_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月25日香港投降後，城市正式進入日治時期。對香港人而言，這不只是一次政權更替，而是一整套生活秩序的崩塌。日軍接管香港後，以軍事佔領者的姿態控制城市，把行政、警務、交通、新聞、經濟和物資供應納入軍政體系之下。原本熟悉的街道、機構和公共空間，迅速被新的命令、標語、巡邏和禁令覆蓋。</p>
                        <p>日軍統治香港的首要目標，是確保這座城市服務於其戰爭需要。香港位處南中國海要衝，擁有深水港、碼頭、倉庫、機場和通往華南的交通位置，對日軍而言具有軍事與物流價值。因此，佔領後的香港不再主要作為商業港口運作，而被重新安排為軍事據點、轉運中心和控制華南沿岸的支點。</p>
                        <p>公共建築、學校、倉庫、工廠、碼頭和民居都可能被日軍徵用。城市空間被軍事權力重新分配，有些地方成為軍營，有些成為倉庫，有些成為審訊、關押或行政辦公場所。市民原本依靠的生活空間被壓縮，許多人失去住所、工作地點或熟悉的社區環境。戰爭不再只是遠方炮火，而是進入了日常活動的每一個角落。</p>
                        <p>佔領統治的另一個特徵，是以恐懼維持秩序。日軍透過宵禁、搜查、身份登記、通行限制和街頭巡邏，控制市民活動。普通人出門買糧、探親、工作或尋找物資，都可能遇上盤問。過去可以自由穿梭的街道，變成需要小心通過的空間。市民不只要面對飢餓和貧困，也要長期面對被懷疑、被搜查和被牽連的恐懼。</p>
                        <p>憲兵隊、密探和協力者在佔領統治中扮演重要角色。他們負責搜捕抗日人士、追查地下組織、監視可疑市民，也協助日軍掌握地方情況。由於香港社會語言和地區關係複雜，日軍常依靠本地翻譯、偽組織和告密者協助統治。這種制度使社會信任受到破壞，因為人們不知道身邊誰可能向日軍提供消息。</p>
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
                    <p>新聞與言論也受到嚴格控制。日軍試圖以宣傳塑造新的政治秩序，要求市民接受所謂「大東亞共榮圈」的說法，將侵略包裝成解放。但對生活在香港的市民來說，現實並不是「共榮」，而是物資缺乏、軍票貶值、家庭離散和生命受威脅。宣傳與現實之間的落差，使佔領統治的暴力本質更加明顯。</p>
                    <p>日軍亦嘗試改造城市的象徵和文化空間。地名、標語、學校教育、官方語言和公共儀式，都可能被賦予新的政治意義。這些做法不只是行政管理，也是心理控制：它們試圖讓市民習慣佔領者的存在，接受新的權力秩序。對香港人而言，這種改造意味着城市記憶和身份被迫受到衝擊。</p>
                    <p>然而，佔領統治並不代表日軍能完全掌控香港。市區表面上被軍政機構控制，但在山區、村落、海灣和地下交通線中，仍有抵抗力量活動。日軍可以張貼命令、設立檢查站、派出巡邏隊，卻難以完全控制每一條山路、每一艘漁船、每一個村落和每一段人際關係。這也是敵後抗戰能夠存在的重要原因。</p>
                    <p>佔領統治對市民心理造成深遠影響。人們要學會在沉默中保護自己，在恐懼中判斷形勢，在不確定中維持生活。什麼話可以說、哪些人可以信、何時可以出門、怎樣避開搜查，都成為日常生存的一部分。這種心理壓力，比單次戰鬥更漫長，也更難被記錄。</p>
                    <p>不同群體在佔領下的處境也不完全相同。前政府人員、抗日人士、文化人、地下工作者、戰俘和外籍居民，可能成為特別監視或拘禁對象。普通市民則更多面對糧食短缺、失業、徵用、軍票和治安問題。每個人的苦難形式不同，但都被同一套軍事統治所塑造。</p>
                    <p>因此，日治下的「佔領統治」並不是單一政策，而是一張由軍事暴力、行政控制、經濟榨取、宣傳改造和心理恐懼組成的網。它改變了城市運作，也改變了人與人之間的關係。香港人在這段時期所面對的，不只是外來軍隊的佔領，更是一種深入生活各層面的全面壓迫。</p>
                    <p>理解這一點，才能理解後續的生存、配給、經濟崩壞與民間互助。日治歲月中的苦難不是孤立事件，而是佔領統治的結果。也正因如此，市民的每一次互助、每一次守口如瓶、每一次暗中支援抵抗，都不只是個人善意，而是在壓迫秩序下保存尊嚴和希望的行動。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
