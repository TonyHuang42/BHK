@extends('layouts.app')

@section('title', '生存與配給｜日治下的香港')
@section('meta_description', '日治時期糧食短缺、配給證與人口疏散：普通家庭如何在飢餓與離散中求存。')

@section('content')
<main class="under-japanese-occupation">
    @include('partials.hero-nav.occupation')

    <section class="bg-texture-gray" id="survival-and-rationing">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_radio_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>生存與配給</h3>
                            <h6>Hunger and Survival</h6>
                            <p class="mt-5">日治時期，糧食和日用品嚴重短缺，配給制度成為市民生活的一部分。飢餓、排隊、疏散和尋找食物，成為許多香港人每日必須面對的現實。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_2_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_radio_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>日治時期香港市民最直接面對的困難，是糧食和日用品的嚴重短缺。香港戰前高度依賴外來糧食與貿易供應，城市本身並沒有足夠農地和產量支撐龐大人口。戰爭爆發後，海運受阻，交通受控，供應線斷裂，原本依靠市場流通維持的城市生活迅速陷入危機。</p>
                        <p>對普通家庭而言，戰爭最先進入生活的方式，往往不是軍事命令，而是米缸見底、菜價上升和排隊等糧。過去可以用錢購買的食物，突然變得稀少；過去習以為常的日用品，也逐漸難以取得。飢餓不再是個別貧困家庭的問題，而成為整座城市共同面對的現實。</p>
                        <p>日軍政府推行配給制度，試圖管理有限的糧食和物資。市民需要憑證購買米糧、燃料或其他生活必需品。然而，配給量往往不足，品質也不穩定。即使遵守制度，也不一定能得到足夠食物。對許多人來說，配給不是保障，而只是勉強延續生命的一條脆弱渠道。</p>
                        <p>在糧食不足下，家庭不得不改變飲食方式。米飯可能要混入番薯、雜糧、野菜或其他替代品；一餐分成幾餐吃，一家人輪流忍耐。孩子、老人和病人最容易受到影響。營養不足使疾病更容易蔓延，而醫療資源短缺又令病情更難得到治療。飢餓與疾病彼此加重，成為日治生活中最沉重的壓力之一。</p>
                        <p>食物短缺也迫使市民尋找各種求生方法。有人到鄉郊交換物資，有人依靠親戚朋友接濟，有人變賣家中物品，有人參與黑市交易，也有人收集野菜、樹根、剩飯或任何可食用之物。生存成為一種日常計算：今天吃什麼，明天去哪裏找糧，家中還有什麼可以換。</p>
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
                    <p>在這種環境下，城市與鄉村之間的關係變得更加重要。新界村落、農地、水路和漁村，成為部分市民尋找食物和支援的依靠。有些人從市區前往鄉郊求糧，有些人透過親戚或同鄉關係取得幫助。這些民間網絡在官方配給不足時，成為許多人活下去的重要補充。</p>
                    <p>日軍為減輕城市糧食壓力，推行人口疏散和所謂「歸鄉」政策，迫使或誘導大量居民離開香港前往內地。表面上，這是為了減少城市人口；實際上，許多人是在缺乏保障的情況下被推向流離失所。離港並不代表安全，路途本身充滿飢餓、疾病、搶掠和不確定。</p>
                    <p>對許多家庭而言，是否離開香港是一個痛苦決定。留下來可能面對飢餓和搜查，離開則可能失去住所、工作和親人聯繫。老人、孩子、病人和行動不便者更難遷移，家庭常常因此被迫分散。有些人留港照顧親人，有些人離城尋找生路，有些人則在香港與內地之間反覆奔走。</p>
                    <p>配給制度也改變了市民的時間感。日子不再以工作、節日或家庭安排為中心，而是以排隊、領糧、找食物和避開檢查為節奏。每一次領到食物，都只是暫時解決問題；下一次短缺仍然會來。這種長期匱乏，使人們生活在持續的焦慮之中。</p>
                    <p>在飢餓中，人的關係也經受考驗。有些人因物資不足而彼此猜疑，有些人則在困境中分享僅有的糧食。鄰里、親族、同鄉和村落網絡的重要性因此更加突出。當官方制度不足以保護市民時，民間互助往往成為最後依靠。</p>
                    <p>生存與配給也讓我們看到戰爭對普通人的傷害. 軍事史常記錄戰役、將領和戰略，但對大多數市民而言，戰爭的記憶可能是一碗稀粥、一張配給證、一段逃難路，或一次為家人找糧的奔走。這些經歷雖然不一定出現在戰報中，卻構成日治歲月最真切的生活記憶。</p>
                    <p>因此，理解日治下的香港，必須理解飢餓. 飢餓使城市秩序崩壞，使家庭承受壓力，也使民間互助和地下抵抗顯得更加重要. 當人們在最艱難的條件下仍願意分享食物、保護他人、支援抗戰，那些微小的行動便成為黑暗時期中最值得記住的光。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
