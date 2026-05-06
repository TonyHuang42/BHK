@extends('layouts.app')

@section('title', '村落記憶｜人物與故事')
@section('meta_description', '西貢、沙頭角、大嶼山等新界村落在日治時期如何成為游擊隊據點與記憶載體，以及鄉民支援與日軍報復下的沉重歷史。')

@section('content')
<main class="people-and-stories">
    @include('partials.hero-nav.people')

    <section class="bg-texture-gray" id="village-memories">
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

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/people-and-stories/image_2.png') }}" alt="Image 1" class="w-100">
                    </div>
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

    @include('partials.accordion')
</main>
@endsection
