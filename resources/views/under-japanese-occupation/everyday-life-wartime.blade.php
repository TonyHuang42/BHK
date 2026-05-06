@extends('layouts.app')

@section('title', '戰時日常｜日治下的香港')
@section('meta_description', '宵禁、檢查與家庭應變：日治香港市民如何在限制與恐懼中維持日常，並在縫隙中互助與抵抗。')

@section('content')
<main class="under-japanese-occupation">
    @include('partials.hero-nav.occupation')

    <section class="bg-texture-gray" id="everyday-life-wartime">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_radio_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰時日常</h3>
                            <h6>Everyday Life in Wartime</h6>
                            <p class="mt-5">在佔領之下，普通人的日常充滿不確定：何時外出、向誰求助、如何保護家人，都可能關乎安全。戰時生活中的每個細小選擇，都是香港人努力活下去的見證。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_4.png') }}" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_radio_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>日治時期的香港，日常生活充滿不確定。對普通市民而言，戰爭不只發生在戰場，也發生在每一次出門、排隊、找糧、避查和照顧家人的過程中。過去熟悉的街道、學校、市場、碼頭和鄰里，在佔領下都可能變成危險或受控的地方。生活仍要繼續，但每一步都需要小心。</p>
                        <p>市民每天都要面對各種限制。宵禁、檢查、搜捕和通行管制，使外出變得不再自由。有人為了買米、找藥或探望親人而冒險穿過檢查點；有人為避免被盤問，盡量減少外出；也有人因工作、生計或家庭需要，不得不在危險中奔走。日常行動本身，成為一種風險計算。</p>
                        <p>在日治之前，城市生活雖有殖民地階級和貧富差距，但仍有一定秩序：市場開門、學校上課、交通運行、報紙出版、商店交易。佔領之後，這些秩序被打斷或改變。人們不再能假設明天與今天相似，因為新的命令、搜查、短缺或暴力都可能突然出現。</p>
                        <p>家庭生活也被戰爭深刻改變。食物不足時，一家人要重新安排飲食；收入中斷時，要變賣物品、尋找零工或依靠親友；親人離散時，家中的角色也被迫改變。孩子可能提早承擔家務或外出找食物，婦女往往要同時照顧家庭、尋找物資，甚至秘密支援抗戰工作。</p>
                        <p>在恐懼中，沉默成為許多人保護自己的方式。市民要小心說話，避免議論日軍或透露他人行蹤。鄰里之間既有互助，也有猜疑；有人願意冒險幫忙，也有人因恐懼或利益而告密。佔領統治不只控制城市，也試圖破壞社會信任，使人們在日常生活中感到孤立。</p>
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
                    <p>但沉默不一定代表順從。有時候，沉默是為了保護藏在家中的文件、暫住的逃亡者、剛剛經過的交通員，或村裏知道而不說出的秘密。日治時期的日常生活中，有許多抵抗並不張揚，卻存在於不出賣、不告密、不配合、不洩露之中。這些選擇也需要勇氣。</p>
                    <p>戰時日常中，婦女承擔了大量不易被看見的工作。她們照顧家庭，尋找食物，安排孩子和老人，也常以日常身份作掩護，參與送信、送飯、洗衣、照顧傷病或藏匿物資。由於這些行動看似平凡，更容易避開敵人注意；但一旦被揭發，同樣可能面對嚴重後果。</p>
                    <p>兒童和青年也在戰爭中被迫成長。學校生活受到破壞，有些年輕人失去正常教育，有些人要幫忙家庭求生，也有人受到抗日思想影響，參與交通、宣傳或支援工作。戰爭使許多年輕人提早接觸死亡、飢餓和政治選擇，也改變了他們對香港和國家的理解。</p>
                    <p>市區與鄉郊的日常經驗有所不同。市區受到軍政統治、憲兵、檢查和物資短缺影響更直接；鄉郊則面對掃蕩、土匪、徵糧和日偽勢力威脅。市民可能為求生而往返兩者之間，尋找食物、親友或安全空間。這種流動也使香港的戰時日常不只屬於城市，也屬於山路、村落、渡口和海灣。</p>
                    <p>然而，戰時日常並不只有恐懼和忍耐，也有互助與抵抗。有些人收留逃亡者，有些人照顧傷病者，有些人替游擊隊送信、帶路、藏糧或收藏文件。這些行動未必轟轟烈烈，卻在高壓統治下延續了人與人之間的信任。對許多香港人而言，守護鄰里和家人，本身就是一種不向佔領屈服的方式。</p>
                    <p>日常生活也是記憶最容易被保存的地方。相比重大戰役，許多親歷者更記得飢餓的感覺、排隊的長度、躲避搜查的恐懼、親人離散的痛苦，或某個鄰居在危急時給予的幫助。這些記憶不一定宏大，卻最能呈現戰爭如何進入普通人的生命。</p>
                    <p>因此，理解日治下的香港，不能只看軍政命令和重大事件，也要看普通人的日常經驗. 每一次排隊領糧、每一次藏起消息、每一次分出食物、每一次幫助陌生人，都構成這段歷史的細節. 正是這些細節，讓我們看見香港人在黑暗歲月中如何努力活下去，也如何在生活的縫隙裏保存尊嚴與希望。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
