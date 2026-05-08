@extends('layouts.app')

@section('title', '游擊與抵抗')
@section('meta_description', '回顧香港淪陷後的敵後抗戰：港九大隊的整編、游擊戰術、情報與營救行動，以及深植民間的抵抗網絡。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/guerrilla-resistance/banner.png') }}" alt="游擊與抵抗" class="hero-img" style="object-position: 60% 90%;">
        <img src="{{ asset('img/home/section_header-游擊與抵抗.svg') }}" alt="游擊與抵抗" class="hero-title battle-of-hong-kong-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('guerrilla.index', ['tab' => 'hk-kowloon-brigade']) }}" data-tab-link="hk-kowloon-brigade">港九大隊</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'guerrilla-warfare']) }}" data-tab-link="guerrilla-warfare">游擊戰</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'intelligence-and-rescue']) }}" data-tab-link="intelligence-and-rescue">情報與營救</a>
                <a href="{{ route('guerrilla.index', ['tab' => 'underground-resistance']) }}" data-tab-link="underground-resistance">敵後抵抗網絡</a>
            </div>
        </div>
    </section>

    {{-- 港九大隊 --}}
    <section class="bg-texture-gray" id="hk-kowloon-brigade" data-tab-panel="hk-kowloon-brigade" hidden>
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
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-hk-kowloon-brigade">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 游擊戰 --}}
    <section class="bg-texture-gray" id="guerrilla-warfare" data-tab-panel="guerrilla-warfare" hidden>
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
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-guerrilla-warfare">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 情報與營救 --}}
    <section class="bg-texture-gray" id="intelligence-and-rescue" data-tab-panel="intelligence-and-rescue" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>情報與營救</h3>
                            <h6>Spies, Signals, and Rescues</h6>
                            <p class="mt-5">抗戰不只發生在槍聲之中，也發生在秘密交通線、情報站和逃亡路上. 游擊隊與地下工作者合作，營救文化人、戰俘和盟軍人員，並向盟軍提供重要軍事情報。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/guerrilla-resistance/image_3_1.png') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>在香港敵後抗戰中，情報與營救工作佔有非常重要的位置。它們不像戰鬥那樣容易被看見，卻往往更加危險，也更依賴信任、耐心和細密安排。日軍佔領香港後，城市內外布滿檢查站、憲兵、密探和告密者，任何一次送信、帶路或藏人，都可能引來殺身之禍。</p>
                        <p>香港淪陷初期，大批抗日文化人、民主人士和政治工作者被困城中。他們許多人原本從內地來港避難或從事抗戰宣傳，日軍入城後便成為搜捕目標。地下組織和游擊隊迅速展開秘密營救，開闢東線、西線和海上路線，將被困人士從港島、九龍和新界一步步護送到內地安全地區。</p>
                        <p>這場營救之所以困難，是因為香港在淪陷後迅速變成封鎖城市。日軍設置檢查站，控制交通，搜捕可疑人士；同時，山區和鄉郊仍有土匪、密探和偽組織活動。被營救者許多不熟悉本地語言和地形，更容易暴露身份。要把他們安全送出香港，需要極細密的路線安排和人員配合。</p>
                        <p>這些營救行動需要高度組織能力。有人負責在市區接頭，有人準備衣物和身份掩護，有人安排山路嚮導，有人提供中途住宿，有人負責渡海。被營救者往往要化裝成難民、香客、商人或普通鄉民，在日軍崗哨與土匪勢力之間穿行。每一段路線，都靠許多無名者共同維持。</p>
                        <p>秘密營救不只是文化和政治上的搶救。許多被困香港的文化人和民主人士，是當時中國抗戰輿論、出版、文藝和社會動員的重要力量。把他們救出香港，等於保存一批仍能繼續服務抗戰和國家未來的人才。這也使香港在中國抗戰中的角色，不只體現在戰場，也體現在保護文化力量之上。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-intelligence-and-rescue">閱讀更多</button>
                        <img src="{{ asset('img/guerrilla-resistance/image_3_2.png') }}" alt="Image 2" class="w-100 mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 敵後抵抗網絡 --}}
    <section class="bg-texture-gray" id="underground-resistance" data-tab-panel="underground-resistance" hidden>
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

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/guerrilla-resistance/image_4_1.png') }}" alt="Image 1" class="w-100">
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
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-underground-resistance">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.accordion')

    {{-- Modals --}}
    <div class="modal fade" id="readMoreModal-hk-kowloon-brigade" tabindex="-1" aria-labelledby="readMoreModalLabel-hk-kowloon-brigade" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-hk-kowloon-brigade">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>港九大隊的活動範圍十分廣泛。它在西貢、沙頭角、大嶼山、元朗、海上和市區等地建立不同中隊，因應各地環境採取不同策略。在山區和鄉村，隊員依靠地形與群眾掩護；在海上，他們利用漁船和島嶼活動；在市區，則以情報、宣傳、交通和地下聯絡為主。香港的山、海、村、城，都成為抵抗的一部分。</p>
                    <p>這支隊伍的特點，在於它將香港的地方條件轉化為抗戰力量。新界的山路、村道、祠堂、教堂、岩洞和海灣，不再只是地理空間，而是藏身、轉移、補給和聯絡的節點。許多香港市民雖未必正式加入隊伍，卻在糧食、情報、住宿、醫療和帶路方面提供支援，使港九大隊能在嚴密佔領下堅持多年。</p>
                    <p>港九大隊的成員也反映了香港社會的多元面貌。他們之中有本地青年、工人、農民、漁民、學生，也有從內地抗日隊伍派來的幹部。有人熟悉山路，有人懂得航海，有人能在市區活動，有人負責文書、醫療、宣傳或情報。抗戰需要的不只是槍和勇氣，也需要各種技能、身份和關係網絡。</p>
                    <p>在日軍佔領下，公開抵抗幾乎不可能，港九大隊便以隱蔽、機動和群眾基礎維持行動。隊員可能今天在西貢，明天轉往沙頭角；白天隱蔽，夜間行動；敵人大舉掃蕩時分散，敵人鬆懈時集中出擊。這種靈活性，使他們能在力量懸殊的情況下生存下來，並不斷牽制日軍。</p>
                    <p>港九大隊的歷史也說明，香港抗戰並不是單一戰場、單一政權或單一族群的故事。它既有本地人的參與，也與華南抗日游擊戰、中國全面抗戰和世界反法西斯戰爭相連. 香港的敵後工作，既保護本地群眾，也支援盟軍情報和營救行動，具有地方與國際雙重意義。</p>
                    <p>因此，認識港九大隊，就是認識香港抗戰從正面戰場轉入敵後的關鍵。它讓我們看到，香港淪陷並不等於香港沉默；城市被佔領，也不等於人民放棄抵抗。港九大隊的歷史，連接了香港本地經驗與中國整體抗戰，也保存了香港人在民族危亡中守護家園的一段重要記憶。</p>
                    <p>今天回望港九大隊，不只是為了記住一支部隊的名稱，而是為了理解一種歷史選擇。在佔領之下，許多人仍選擇冒險行動、保護同胞、支援抗戰。這些選擇共同構成香港在二戰中的另一條戰線：一條不在正面陣地上，卻深入山野、海灣、村落和人心之中的抵抗戰線。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-guerrilla-warfare" tabindex="-1" aria-labelledby="readMoreModalLabel-guerrilla-warfare" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-guerrilla-warfare">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>在西貢和沙田一帶，短槍隊以靈活方式活動，突襲敵人、處理密探、破壞日軍部署。在大嶼山，游擊隊則依靠山地、海岸 and 村落網絡與日偽軍周旋。沙頭角和元朗一帶的行動，則常與地方自衛、交通線和情報工作結合。不同地區的游擊戰有不同形式，但共同核心都是「避強擊弱、出其不意」。</p>
                    <p>除了陸上作戰，海上行動也是香港游擊戰的重要特色。香港島嶼眾多，水道複雜，漁民熟悉潮汐和航線。海上中隊利用小船、漁船和島嶼作掩護，進行運輸、營救、襲擊和物資轉移. 海上游擊戰不只打擊敵人，也維持香港與外圍抗日力量之間的聯繫。</p>
                    <p>游擊隊也常以行動回應日軍掃蕩。日軍若集中兵力在某地搜捕，游擊隊可能在另一地發動襲擊，迫使敵人分散力量。這種牽制使日軍即使佔領香港，也難以完全穩定後方。對佔領者而言，看不見、抓不住、打不盡的游擊力量，是長期的威脅。</p>
                    <p>除了武裝襲擊，港九大隊也重視政治和心理層面的戰鬥。「紙彈戰」便是其中一種形式。透過傳單、標語和宣傳品，游擊隊揭露日軍暴行，鼓勵市民保持抗戰信心，也向敵偽人員施加心理壓力。在佔領者嚴控新聞和言論的環境下，一張傳單有時也能成為打破沉默的武器。</p>
                    <p>游擊戰的成功，離不開群眾支持。村民提供情報，漁民提供船隻，婦女和交通員送信，地下工作者安排接應。沒有這些支援，游擊隊很難知道敵人動向，也很難在行動後安全撤退。因此，香港的游擊戰從來不只是隊員與日軍之間的軍事較量，也是佔領者與民間社會之間的信任爭奪。</p>
                    <p>這種戰鬥方式也有沉重代價. 每次行動都有失敗、被捕或犧牲的風險；每個據點都有可能被敵人發現；每名支援者都可能遭到報復。游擊戰看似機動靈活，實際上是在高度危險中求生存、求延續。正因如此，每一次成功出擊和安全撤退，都凝聚了許多人的勇氣與謹慎。</p>
                    <p>因此，香港的游擊戰不是單純的山林戰，也不是零散的襲擊故事。它是一種結合地形、群眾、情報、宣傳和機動作戰的敵後抵抗方式。游擊隊以有限力量牽制敵人，以熟悉的地方對抗強大的佔領機器，也讓香港在淪陷歲月中保留了一條持續抵抗的線索。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-intelligence-and-rescue" tabindex="-1" aria-labelledby="readMoreModalLabel-intelligence-and-rescue" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-intelligence-and-rescue">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>除了文化人和民主人士，港九大隊也參與營救英軍戰俘、港府人員和盟軍飛行員。這些行動體現了抗戰中的國際合作，也顯示香港敵後力量在世界反法西斯戰爭中的作用。營救不只是把人送離危險，更是保存同盟力量、維繫情報合作、打擊日軍控制的一種方式。</p>
                    <p>營救盟軍人員常常需要更複雜的安排。逃出的戰俘或墜機飛行員未必懂中文，也不熟悉香港地形，更容易被日軍發現。游擊隊和村民要替他們尋找藏身處、提供食物和衣物，再安排轉移路線。有時候，為了分散敵人注意，還需要在其他地點發動行動或製造聲勢。</p>
                    <p>情報工作同樣關鍵。港九大隊與英軍服務團等盟軍機構合作，收集日軍在香港的軍事設施、機場、油庫、船塢、兵營、艦船和交通部署等資料。有些情報員需要進入敵方控制區，有些人則透過市區工作、漁民交通、村落網絡和地下交通站傳遞消息。這些情報後來被用於支援盟軍作戰和轟炸目標判斷。</p>
                    <p>情報工作表面上安靜，實際上極其危險. 情報員可能要觀察日軍設施、記錄船隻出入、繪製地圖、拍攝或傳送資料；交通員則要把消息送到指定地點. 任何一個環節出錯，都可能令整條交通線暴露. These 工作要求參與者冷靜、機警，也需要對同伴有高度信任。</p>
                    <p>在日治環境下，情報與營救常常互相連接. 要營救一個人，必須知道檢查站、巡邏路線、船期和安全屋；要傳遞情報，也可能需要營救交通員或保護線人。山路、海路、雜貨店、村屋、教堂、祠堂和碼頭，都可能同時是藏身處、接頭點和情報節點。</p>
                    <p>情報與營救提醒我們，抵抗並不只存在於槍聲之中。它也存在於一條山路、一封密信、一艘小船、一間雜貨店、一個暗號之中。許多參與者沒有留下響亮的名字，卻在最危險的環境下守住生命與信任。正因為有這些秘密工作，香港的敵後抗戰才能與中國抗戰和盟軍作戰保持連接。</p>
                    <p>今天回望這些故事，最值得記住的不只是成功救出了多少人、傳遞了多少情報，而是在日軍嚴密控制下仍有人願意承擔風險. 情報和營救工作的背後，是對生命的守護，也是對勝利的信念. 它們讓香港抗戰在看不見的地方延續，也讓這座城市在淪陷中仍與外部戰場保持呼吸。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-underground-resistance" tabindex="-1" aria-labelledby="readMoreModalLabel-underground-resistance" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-underground-resistance">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>這張抵抗網絡中，婦女和家庭的角色尤其重要。她們常以照顧、洗衣、送飯、探親、買賣等日常身份作掩護，傳送情報或支援隊員。有些母親、姐妹和妻子冒險收留游擊隊員，有些人在家中藏起文件、武器或傷病者。她們未必被寫在戰鬥報告最前面，卻是敵後工作能夠持續的重要力量。</p>
                    <p>學生、工人和市區居民也在網絡中扮演不同角色。有人負責派發傳單，有人觀察敵方機構，有人協助轉送文件或接應人員. 城市中的抵抗比鄉村更隱蔽，也更容易受到密探和憲兵威脅. 正因如此，市區工作的每一步都需要格外小心。</p>
                    <p>海上網絡同樣不可或缺。香港四面環海，漁民熟悉水道、潮汐、島嶼和日軍巡邏規律，能協助運送人員、物資和情報. 海上交通既可用於營救，也可用於作戰與補給. 小船、漁港和離島，在日治時期成為連接香港、內地和盟軍情報網的隱蔽通道。</p>
                    <p>宗教場所和地方公共空間，有時也成為抵抗網絡的一部分。教堂、寺院、古廟、祠堂和學校，既是地方社群熟悉的場所，也可能在特定時刻成為藏身、醫療、交通或會議地點. 這些地方的平凡外貌，正好提供了掩護，也使抗戰記憶深深嵌入香港的地方景觀之中。</p>
                    <p>敵後抵抗網絡不是由單一命令維持，而是由信任維持. 游擊隊要相信村民不會出賣路線，村民要相信游擊隊能保護地方，交通員要相信接頭人可靠，藏身者要相信屋主願意承擔風險. 在佔領統治試圖製造恐懼和猜疑的情況下，這種信任本身就是一種抵抗。</p>
                    <p>這張網絡也讓「抗戰」不再只是少數武裝人員的行動，而成為許多普通人的共同承擔. 不是每個人都拿起槍，但許多人都以自己的方式站在抵抗一邊. 有人守口如瓶，有人分享糧食，有人帶路，有人傳信，有人照顧傷者. 這些行動加起來，才使敵後抗戰能夠延續。</p>
                    <p>因此，敵後抵抗網絡最重要的意義，在於它保存了香港社會在淪陷中的互助和不屈. 日軍可以佔領城市，可以控制道路和機構，卻難以完全摧毀人與人之間的信任. 正是這些微小而勇敢的選擇，使香港在黑暗歲月中仍保有抵抗的力量，也使這段歷史值得被一再記住。</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
