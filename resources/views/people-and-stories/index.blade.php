@extends('layouts.app')

@section('title', '人物與故事')
@section('meta_description', '回顧香港抗戰人物、村落記憶、民間互助與救援故事，看見普通人在危難中的選擇與抵抗。')

@section('content')
<main class="people-and-stories">
    <section class="hero">
        <img src="{{ asset('img/people-and-stories/banner.jpg') }}" alt="人物與故事" class="hero-img" style="object-position: 35% center;">
        <img src="{{ asset('img/home/section_header-人物與故事.svg') }}" alt="人物與故事" class="hero-title under-japanese-occupation-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('people.index', ['tab' => 'resistance-figures']) }}" data-tab-link="resistance-figures">抗戰人物</a>
                <a href="{{ route('people.index', ['tab' => 'village-memories']) }}" data-tab-link="village-memories">村落記憶</a>
                <a href="{{ route('people.index', ['tab' => 'mutual-aid']) }}" data-tab-link="mutual-aid">民間互助</a>
                <a href="{{ route('people.index', ['tab' => 'rescue-stories']) }}" data-tab-link="rescue-stories">救援故事</a>
            </div>
        </div>
    </section>

    {{-- 抗戰人物 --}}
    <section class="bg-texture-gray" id="resistance-figures" data-tab-panel="resistance-figures" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_binocular_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>抗戰人物</h3>
                            <h6>Those Who Stood Up</h6>
                            <p class="mt-5">香港抗戰由許多不同身份的人共同書寫：工人、學生、農民、漁民、婦女、交通員和游擊隊員。有人走上前線，有人在暗處工作，他們的選擇共同留下了香港的抗戰記憶。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_1_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_binocular_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>香港抗戰的歷史，不只是軍隊、戰役和政治局勢的歷史，也是一個個普通人在危難中作出選擇的歷史。當香港被戰火吞沒、城市進入日治之後，許多人被迫重新思考自己與家園、民族和時代的關係。有人走上前線，有人進入敵後，有人留在城市暗處工作，也有人以家庭、村落和職業身份作掩護，默默支援抵抗。</p>
                        <p>港九大隊的成員來自不同背景，包括工人、學生、農民、漁民、原居民和愛國青年。他們並非一開始就是歷史書中的「英雄」，很多人原本只是香港日常社會中的普通一員。戰爭改變了他們的人生方向，也迫使他們面對艱難選擇：是沉默自保，還是冒險參與抗戰；是等待局勢改變，還是主動守護家園。</p>
                        <p>這些抗戰人物之所以值得被記住，正因為他們的出身和經歷如此貼近香港社會。有些人在工廠、學校、漁村和鄉郊長大，有些人本來只是普通青年，卻在戰爭中成為交通員、情報員、游擊隊員或後勤人員。抗戰不是一個遙遠的抽象概念，而是進入了他們的生活，改變了他們的家庭，也改變了他們對自身責任的理解。</p>
                        <p>港九大隊中的許多幹部和隊員，早在全面抗戰爆發後便受到救亡運動影響。他們透過讀書會、青年組織、工會、同鄉會和地下黨組織接觸抗日思想。香港淪陷後，這些過去的組織經驗和人際網絡，成為敵後抗戰的重要基礎。換言之，抗戰人物並不是突然出現的，他們是在長期社會動員和民族危機中逐步形成的。</p>
                        <p>這些人物的工作形式十分多樣。有人參與武裝行動，突襲日軍哨所、破壞交通設施、打擊漢奸和偽警；有人負責情報、交通、翻譯、宣傳、後勤和醫療；也有人在市區中以「不帶槍的游擊隊」身份活動，依靠機智、關係和日常身份在敵人眼皮底下工作。抗戰因此不只屬於拿槍的人，也屬於每一個在危險中承擔任務的人。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-resistance-figures">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 村落記憶 --}}
    <section class="bg-texture-gray" id="village-memories" data-tab-panel="village-memories" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_binocular_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>村落記憶</h3>
                            <h6>Villages That Remember</h6>
                            <p class="mt-5">新界村落在抗戰中扮演了重要角色，既是游擊隊的據點，也是糧食、情報和庇護的來源。許多村民面對威嚇與酷刑，仍選擇保護抗日力量。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/people-and-stories/image_2.jpg') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_binocular_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>在香港抗戰史中，新界村落並不是單純的背景，而是敵後抵抗得以延續的重要根基。西貢、沙頭角、烏蛟騰、赤徑、黃毛應、大嶼山和元朗等地，都曾在日治時期留下抗戰足跡。這些地方有山路、海灣、祠堂、教堂、岩洞和民居，既是村民生活的空間，也是游擊隊藏身、轉移、補給和聯絡的據點。</p>
                        <p>村落之所以重要，是因為游擊戰離不開地方知識。熟悉山路的人能帶隊避開日軍巡邏；熟悉水道的人能安排船隻轉移；熟悉鄉里關係的人能判斷誰可信、哪裏安全、什麼時候可以行動。這些知識不是地圖上能完全看見的，而是世代生活在當地的人才能掌握的經驗。</p>
                        <p>對港九大隊而言，村落不只是地理據點，更是信任網絡. 游擊隊要在敵後生存，不能只靠武器，還要靠村民提供食物、消息、藏身處和掩護. 村民是否願意幫助，往往決定一支隊伍能否在某地站穩. 這種信任不是一天建立的，而是透過保護地方、打擊土匪、嚴守紀律和共同面對敵人逐步形成。</p>
                        <p>許多村民在抗戰中提供了重要支援. 他們為游擊隊提供糧食、衣物、藥物、住宿和情報，也協助照顧傷病隊員. 有些村民把食物放在山中約定地點，讓隊員夜間取走；有些人以耕作、砍柴、探親或買賣作掩護，傳遞消息和觀察敵情. 看似平凡的生活行動，在佔領時期往往具有抗戰意義。</p>
                        <p>西貢一帶的村落，在港九大隊歷史中佔有重要位置. 黃毛應、赤徑、山寮、深涌等地，都曾經與部隊活動、交通路線、秘密營救和後勤安排有關. 山海交錯的地形，使西貢既可連接九龍市區，也可通往大鵬灣和東江游擊根據地. 這種位置，使西貢村落成為敵後抗戰的重要支點。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-village-memories">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 民間互助 --}}
    <section class="bg-texture-gray" id="mutual-aid" data-tab-panel="mutual-aid" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_binocular_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>民間互助</h3>
                            <h6>Acts of Courage and Care</h6>
                            <p class="mt-5">在飢餓、搜捕和壓迫之中，民間互助成為支撐社會的重要力量。有人借出房屋，有人提供食物，有人照顧傷病，有人冒險傳遞消息，讓抵抗得以延續。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/people-and-stories/image_3.jpg') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_binocular_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>戰爭時期的互助，很多時候並不驚天動地，卻往往關乎生死。日治下的香港缺糧、缺藥、缺安全感，市民在壓迫中努力維持家庭和社群生活。當官方制度無法保護普通人，民間之間的照應、信任和支援，就成為許多人活下去的重要依靠。</p>
                        <p>這種互助有時表現在最基本的生活層面. 有人分享糧食，有人照顧鄰居，有人收留無處可去的親友，有人幫忙照看老人和孩子. 當物資稀缺時，一碗飯、一點鹽、一小包藥，都可能十分珍貴. These微小的分享，在戰時並不只是善意，也是維持社會不致完全崩散的力量。</p>
                        <p>民間互助的可貴，在於它常常發生在恐懼之中. 日治時期，幫助別人不一定安全. 收留可疑人士、傳遞消息、提供糧食或隱瞞行蹤，都可能被日軍或密探視為支援抗日. 許多人並非不知道風險，卻仍在有限能力內伸出援手. 這種選擇，使互助本身帶有抵抗意味。</p>
                        <p>在敵後抗戰中，民間互助更成為抵抗網絡的一部分. 有人借出房屋作臨時藏身處，有人幫忙收藏文件或物資，有人替游擊隊送飯、送藥、洗衣、帶路或傳信. 許多人沒有正式身份，也不一定被記錄在名單之中，但他們的支援使地下工作和游擊行動得以持續。</p>
                        <p>互助往往依靠既有的社會關係. 親族、同鄉、街坊、工友、同學、漁民網絡和村落關係，都可以在危急時成為求助渠道. 戰時官方制度失效後，這些民間關係變得更加重要. 它們既能幫助普通家庭求生，也能支撐地下交通、情報傳遞和營救行動。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-mutual-aid">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 救援故事 --}}
    <section class="bg-texture-gray" id="rescue-stories" data-tab-panel="rescue-stories" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_binocular_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>救援故事</h3>
                            <h6>Stories of Rescue</h6>
                            <p class="mt-5">香港淪陷後，許多文化人、戰俘和盟軍人員被困城中。游擊隊、地下工作者、漁民和鄉民合作開闢逃生路線，將一個個生命從危險中帶出去。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_4_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_binocular_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>香港淪陷後，許多人被困在危險之中。抗日文化人、民主人士、地下工作者、英軍戰俘、盟軍飛行員，以及被日軍追捕的人員，都需要秘密撤離或藏身。救援工作因此成為香港抗戰中極具人道意義的一部分。它不只關乎軍事，也關乎生命、信任和希望。</p>
                        <p>日軍入城後，大批曾在香港從事抗日宣傳和文化工作的知識分子面臨搜捕威脅。這些人中，有作家、記者、學者、藝術家、社會活動者和民主人士。他們過去用文字、出版和公共活動支援抗戰，一旦落入日軍手中，可能面臨威逼、利用甚至殺害。因此，營救他們不只是保護個人生命，也是保存抗戰文化力量。</p>
                        <p>地下組織和游擊力量迅速展開秘密營救，開闢多條逃生路線，把被困者從港島、九龍、新界和離島一步步送往內地。這些行動往往需要穿越日軍崗哨、避開密探和土匪，也要克服語言、身份和物資不足等困難。一次成功撤離，背後可能需要數十人分段接應。</p>
                        <p>每一次救援，背後都有細密安排. 有人負責接頭，有人準備掩護身份，有人安排住宿，有人熟悉山路，有人掌握水道，有人提供船隻. 被救者可能化裝成難民、商人、香客或普通鄉民，在交通員和游擊隊保護下分段轉移. 安全抵達目的地的那一刻，往往凝聚了許多無名者的努力。</p>
                        <p>秘密營救路線常常結合城市、山地和海路. 市區地下工作者先安排接頭和轉移，再由交通員帶往新界，經山路或村落中轉，最後由船隻或陸路送往內地. 每一段路都可能出現變數：檢查站加強、日軍搜捕、天氣轉壞、船隻不足，或有人臨時生病. 救援因此需要靈活應變，也需要參與者有高度信任。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-rescue-stories">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.accordion')

    {{-- Modals --}}
    <div class="modal fade" id="readMoreModal-resistance-figures" tabindex="-1" aria-labelledby="readMoreModalLabel-resistance-figures" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-resistance-figures">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>有些人物以戰鬥行動被後人記住。短槍隊員、海上隊員和各中隊骨幹，曾在西貢、沙頭角、大嶼山、九龍和海面上執行突襲、爆破、伏擊與護送任務。他們面對的是裝備、兵力和情報力量都遠勝自己的敵人，因此每一次行動都需要勇氣，也需要冷靜判斷。這些戰鬥人物的故事，是香港敵後抗戰中最直接、最激烈的一面。</p>
                    <p>也有些人物的貢獻並不在槍聲之中，而在沉默和隱蔽之中。交通員要穿過檢查站，情報員要觀察敵軍部署，地下工作者要維持接頭和聯絡，醫療與後勤人員則要照顧傷病、籌措藥物和安排物資。這些工作看似不如戰鬥轟烈，卻同樣危險。一旦暴露，不只自己可能被捕，整條交通線和身邊同伴都可能受到牽連。</p>
                    <p>不少人物的故事帶有沉重代價。有些人在戰鬥中犧牲，有些人在被捕後遭受酷刑，仍然保守秘密；有些人因掩護隊友、保護情報或支援游擊隊而失去生命。這些犧牲並不只是個人悲劇，也反映出日治時期香港敵後工作的危險程度。每一次行動背後，都可能牽連家庭、村落和整個地下網絡。</p>
                    <p>女性抗戰人物尤其值得被看見。她們有的擔任交通員，有的照顧隊員，有的傳送情報，有的掩護地下工作者，也有的動員家人和鄉親支援抗戰。她們往往利用日常身份作掩護，以探親、買菜、洗衣、送飯等方式完成危險任務。她們的抗戰不一定出現在正面戰場，卻深入家庭、街巷和村落之中。</p>
                    <p>同時，抗戰人物也不應只被理解為孤立的英雄。他們之所以能夠行動，往往依靠家人、鄉親、同學、工友和地下組織的支援。許多人物背後都有一張人際網絡：有人提供情報，有人安排住宿，有人送信，有人照顧傷員。個人的勇氣，常常是在集體互助中被支撐起來的。</p>
                    <p>這些人物在戰後也留下不同軌跡。有人繼續從事政治、軍事、外交、教育或地方工作，有人回到普通生活，有人則因犧牲而永遠停留在年輕時的形象。無論後來人生如何，他們在日治歲月中的選擇，都已成為香港抗戰記憶的一部分。記住他們，是記住香港人在民族危亡中曾經作出的承擔。</p>
                    <p>今天回望這些人物，不只是為了紀念他們的名字，更是為了理解他們所代表的精神。他們在香港最黑暗的歲月中作出選擇，把個人的安危放在家園與民族大義之後。正因為有這些人的行動，香港抗戰才不只是宏大的歷史敘述，而成為有血有肉、有面孔、有聲音的記憶。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-village-memories" tabindex="-1" aria-labelledby="readMoreModalLabel-village-memories" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-village-memories">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>沙頭角和烏蛟騰一帶，則留下許多關於堅守與犧牲的記憶。日軍多次掃蕩村落，試圖逼迫村民交出游擊隊消息。然而，不少村民在威嚇和酷刑面前仍選擇保護抗日力量。這些故事之所以動人，並不只是因為受難本身，而是因為在極端恐懼中仍有人守住信義。</p>
                    <p>大嶼山的村落和宗教場所，也在抗戰中發揮重要作用。山地、海岸、寺院、岩洞和村屋，為游擊隊提供了隱蔽和轉移條件。當日軍掃蕩大嶼山時，許多隊員得以依靠地形和地方支援避過追捕。村民、僧侶和地方人士的幫助，使大嶼山不只是被佔領的地方，也成為抵抗得以延續的空間。</p>
                    <p>然而，村落支援也伴隨巨大風險。日軍知道游擊隊依靠民眾，因此經常對村莊進行掃蕩、搜查、拷問和恐嚇。有些村民因不肯供出游擊隊行蹤而遭受酷刑，甚至犧牲生命。這些故事使村落記憶帶有沉重色彩：村莊不只是保護抗戰力量的地方，也常常是承受報復和苦難的地方。</p>
                    <p>村落記憶還保存在具體的地點之中。祠堂、舊屋、教堂、山洞、古廟、碼頭和紀念碑，都可能曾經見證秘密會議、物資收藏、傷員照護、交通接應或敵人搜捕。這些地方今天看似平靜，但一旦放回歷史脈絡，便能看見它們曾經承載的危險與勇氣。</p>
                    <p>對後人而言，村落記憶也有特殊價值。許多戰時故事未必完整記錄在官方文件中，而是透過村民口述、家族回憶、地方紀念碑和舊址流傳下來。這些記憶有時零散，有時帶有不同版本，但正因如此，更需要被整理、保存和尊重。它們讓歷史不只屬於大事年表，也屬於地方社群。</p>
                    <p>村落記憶也提醒我們，香港的抗戰不是只有城市中心的故事。很多關鍵行動發生在山路、村屋、漁港、渡口和田野之間。這些地方看似遠離政治中心，卻在戰時成為連接人員、物資和情報的重要節點。沒有村落，敵後抗戰很難在香港長期存在。</p>
                    <p>因此，記錄村落記憶，就是記錄香港抗戰最貼近土地的一面。它提醒我們，歷史不只發生在政府大樓、軍事據點和城市中心，也發生在山村小路、漁港碼頭和鄉民家中。正是這些村落和居民，使香港在淪陷歲月中仍保有支援抗戰、守護同胞的力量。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-mutual-aid" tabindex="-1" aria-labelledby="readMoreModalLabel-mutual-aid" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-mutual-aid">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>婦女和家庭在其中扮演了特別重要的角色。她們常常利用日常身份作掩護，以探親、買菜、洗衣、送飯、照顧病人等方式完成危險任務。有些母親和姐妹收留隊員，有些妻子協助隱藏情報，有些婦女冒險穿過檢查站傳遞消息。她們的勇氣不一定以戰鬥形式出現，卻同樣支撐了抗戰。</p>
                    <p>照護也是民間互助的重要部分. 傷病隊員需要食物、藥物、藏身處和照顧；逃亡者需要休息、衣物和指引；被迫離散的家庭需要臨時安置. 這些工作大多發生在家中、村屋、寺院、教堂或山邊小屋，不一定被外界看見，卻是抵抗網絡能延續的基礎。</p>
                    <p>民間互助也連接了游擊隊與市民. 游擊隊打擊土匪、日偽哨所和欺壓百姓的敵人，保護村民利益；村民則以糧食、情報、住宿和人脈回應. 這種關係不是單向的命令，而是在共同危難中建立的信任. 正因如此，港九大隊才能在日軍嚴密控制下長期活動。</p>
                    <p>在日治社會中，互助也有維持尊嚴的意義. 佔領統治試圖透過飢餓、恐懼和監視使人孤立，令市民只顧自保. 但互助讓人們記得彼此仍有責任，社群仍有力量. 即使只是一餐飯、一句提醒、一晚藏身，也能在黑暗中保存人與人之間的信任。</p>
                    <p>當然，民間互助並不意味社會沒有矛盾. 戰時也有告密、投機、黑市和自保行為，人們面對的選擇常常艱難而複雜. 正因如此，那些願意冒險幫助他人的行動，更顯得不容易. 它們不是理所當然，而是在危險和匱乏中作出的道德選擇。</p>
                    <p>今天談民間互助，是為了看見抗戰中那些不容易被寫進戰報的力量. 它們不一定有響亮的口號，也不一定留下清楚姓名，卻構成了香港人在黑暗中彼此扶持的證明. 當一個社會面對壓迫時，願意幫助他人、守住信任，本身就是一種珍貴的抵抗。</p>
                    <p>因此，民間互助是人物與故事中最能連接個人與集體的一環. 它讓我們看到，抗戰不只屬於前線人物，也屬於每一個願意在危難中照顧他人、保護秘密、守住良知的人. 這些微小行動共同構成香港抗戰記憶中最溫暖、也最堅韌的部分。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-rescue-stories" tabindex="-1" aria-labelledby="readMoreModalLabel-rescue-stories" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-rescue-stories">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>這些救援故事也揭示了香港地理的特殊性。香港有城市，有山，有海，有邊境，也有與內地相連的人脈。正是這種地理和社會條件，使秘密營救成為可能。日軍可以控制主要道路和港口，卻難以完全掌握每條山路、每個海灣和每一個村落網絡。</p>
                    <p>除了文化人，港九大隊也參與營救盟軍人員. 英軍戰俘、港府人員和美國飛行員在逃亡或墜機後，都曾得到游擊隊和村民協助. 這些救援行動顯示香港敵後抗戰不只是地方性的抵抗，也與世界反法西斯戰爭相連. 透過營救與情報合作，香港的山村、海灣和地下交通線，成為盟軍戰爭網絡的一部分。</p>
                    <p>營救盟軍人員往往更加困難. 逃亡者可能不懂本地語言，也不熟悉環境，外貌更容易引起注意. 游擊隊和村民要為他們安排藏身處、食物、衣物和轉移路線，有時還要避開日軍大規模搜捕. 每一次成功營救，都需要勇氣，也需要精密的地方協調。</p>
                    <p>救援故事最動人的地方，在於它們常常由許多普通人共同完成. 有人只提供一晚住宿，有人只帶過一段山路，有人只遞出一碗飯或一件衣服；但少了任何一環，整個行動都可能失敗. 這些人未必知道被救者日後的身份和成就，卻仍在危險中伸出援手。</p>
                    <p>營救也反映了抗戰中的信任. 被救者必須相信帶路的人，交通員必須相信接頭點，村民必須相信自己保護的人不會暴露整個網絡. 這種信任在佔領環境中尤其珍貴，因為日軍統治正是依靠恐懼和猜疑來瓦解人際關係. 救援行動能成功，本身就是對這種恐懼政治的突破。</p>
                    <p>從更深層看，救援不只是把人從危險中帶出去，也是保存未來. 文化人被救出後，可以繼續寫作、出版、教育和參與國家建設；盟軍人員被救出後，可以提供情報和戰爭經驗；普通逃亡者被救出後，也保住了家庭與生命的延續. 每一次救援，都讓戰爭中的破壞少一分，讓未來多一分可能。</p>
                    <p>因此，救援故事不只是「成功逃生」的故事，也是香港人在佔領下守護生命的故事. 它讓我們看到，抗戰的意義不只在於消滅敵人，也在於保護同胞、保存文化、維持希望. 當城市陷入黑暗，願意帶別人走向安全的人，本身就是歷史中最值得被記住的光。</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
