@extends('layouts.app')

@section('title', '敵後抵抗網絡｜游擊與抵抗')
@section('meta_description', '村落、漁民、婦女與地下交通如何構成港九大隊背後的民間支援網絡，在日佔壓迫下延續抵抗。')

@section('content')
<main>
    @include('partials.hero-nav.guerrilla')

    <section class="bg-texture-gray" id="underground-resistance">
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>敵後抵抗網絡</h3>
                            <h6>The Underground Resistance</h6>
                            <p class="mt-5">港九大隊能長期堅持抗戰，背後依靠的是一張由村民、漁民、婦女、交通員和地下工作者組成的民間網絡。許多人未必拿起武器，卻用帶路、藏身、送信和供糧守住抵抗。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/guerrilla-resistance/image_4_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>港九大隊能在香港日佔時期堅持多年，並不只是因為有武裝隊員，更因為背後存在一張深植民間的敵後抵抗網絡。這張網絡由村民、漁民、婦女、學生、工人、交通員、商戶、宗教人士和地下工作者共同組成。每個人的角色不同，但都在某個位置上支撐着抵抗。</p>
                        <p>敵後抵抗網絡的力量，在於它把抗戰融入日常生活。有人提供一晚住宿，有人帶一段山路，有人轉交一封信，有人留意日軍巡邏時間，有人把糧食放在約定地點。這些行動看似細小，卻能讓游擊隊保持流動，讓情報得以傳遞，讓被追捕的人有機會逃生。</p>
                        <p>在新界和離島，村落是這張網絡的重要基礎。許多村民為游擊隊提供糧食、住宿、情報和帶路協助。有些村莊成為交通站，有些民居成為臨時藏身處，有些祠堂、教堂、寺院和岩洞則成為開會、醫療、儲藏或避難的地方。這些地方共同構成敵後抗戰的生活空間。</p>
                        <p>村落網絡之所以重要，是因為日軍雖能控制主要道路和市區據點，卻難以完全掌握每一條山路、每一個海灣、每一處村落關係。地方知識，是敵後抵抗最珍貴的資源之一。</p>
                        <p>民間支援往往伴隨巨大風險。日軍知道游擊隊依靠群眾，因此經常透過掃蕩、拷問、焚燒、恐嚇和收買來切斷這種聯繫。村民若被懷疑支援游擊隊，可能遭受酷刑甚至被殺害。即使如此，許多人仍選擇保護隊員、隱瞞路線、收藏物資或傳遞消息，因為他們明白這不只是軍隊的戰鬥，也是守護家園的戰鬥。</p>
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
                    <p>這張抵抗網絡中，婦女和家庭的角色尤其重要。她們常以照顧、洗衣、送飯、探親、買賣等日常身份作掩護，傳送情報或支援隊員。有些母親、姐妹和妻子冒險收留游擊隊員，有些人在家中藏起文件、武器或傷病者。她們未必被寫在戰鬥報告最前面，卻是敵後工作能夠持續的重要力量。</p>
                    <p>學生、工人和市區居民也在網絡中扮演不同角色。有人負責派發傳單，有人觀察敵方機構，有人協助轉送文件或接應人員. 城市中的抵抗比鄉村更隱蔽，也更容易受到密探和憲兵威脅。正因如此，市區工作的每一步都需要格外小心。</p>
                    <p>海上網絡同樣不可或缺。香港四面環海，漁民熟悉水道、潮汐、島嶼和日軍巡邏規律，能協助運送人員、物資和情報. 海上交通既可用於營救，也可用於作戰與補給. 小船、漁港和離島，在日治時期成為連接香港、內地和盟軍情報網的隱蔽通道。</p>
                    <p>宗教場所和地方公共空間，有時也成為抵抗網絡的一部分。教堂、寺院、古廟、祠堂和學校，既是地方社群熟悉的場所，也可能在特定時刻成為藏身、醫療、交通或會議地點. 這些地方的平凡外貌，正好提供了掩護，也使抗戰記憶深深嵌入香港的地方景觀之中。</p>
                    <p>敵後抵抗網絡不是由單一命令維持，而是由信任維持. 游擊隊要相信村民不會出賣路線，村民要相信游擊隊能保護地方，交通員要相信接頭人可靠，藏身者要相信屋主願意承擔風險. 在佔領統治試圖製造恐懼和猜疑的情況下，這種信任本身就是一種抵抗。</p>
                    <p>這張網絡也讓「抗戰」不再只是少數武裝人員的行動，而成為許多普通人的共同承擔. 不是每個人都拿起槍，但許多人都以自己的方式站在抵抗一邊. 有人守口如瓶，有人分享糧食，有人帶路，有人傳信，有人照顧傷者. 這些行動加起來，才使敵後抗戰能夠延續。</p>
                    <p>因此，敵後抵抗網絡最重要的意義，在於它保存了香港社會在淪陷中的互助和不屈. 日軍可以佔領城市，可以控制道路和機構，卻難以完全摧毀人與人之間的信任. 正是這些微小而勇敢的選擇，使香港在黑暗歲月中仍保有抵抗的力量，也使這段歷史值得被一再記住。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
