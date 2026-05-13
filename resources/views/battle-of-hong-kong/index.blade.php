@extends('layouts.app')

@section('title', '香港保衛戰')
@section('meta_description', '回顧1941年香港保衛戰的歷史脈絡，從戰前背景、十八日戰事經過到黑色聖誕投降，以及戰時時間線的完整紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/battle-of-hong-kong/banner.jpg') }}" alt="" class="hero-img" aria-hidden="true" style="object-position: 55% center;">
        <img src="{{ asset('img/home/section_header-香港保衛戰.svg') }}" alt="香港保衛戰" class="hero-title battle-of-hong-kong-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('battle.index', ['tab' => 'before-the-storm']) }}" data-tab-link="before-the-storm">戰前背景</a>
                <a href="{{ route('battle.index', ['tab' => 'eighteen-days-of-battle']) }}" data-tab-link="eighteen-days-of-battle">戰役經過</a>
                <a href="{{ route('battle.index', ['tab' => 'black-christmas']) }}" data-tab-link="black-christmas">黑色聖誕</a>
                <a href="{{ route('battle.index', ['tab' => 'wartime-timeline']) }}" data-tab-link="wartime-timeline">戰時時間線</a>
            </div>
        </div>
    </section>

    {{-- 戰前背景 --}}
    <section class="bg-texture-gray" id="before-the-storm" data-tab-panel="before-the-storm" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰前背景</h3>
                            <h6>Before the Storm</h6>
                            <p class="mt-5">戰火來臨之前，香港已不只是遠東商埠，也是一個連接華南、東南亞與世界航道的重要港口。隨着中國全面抗戰爆發，香港逐漸成為物資、新聞、難民與救亡活動交會的地方。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <h6>風暴來臨前的香港</h6>
                        <p>在第二次世界大戰全面擴大之前，香港已不是遠離戰火的安穩港口。自 1931 年九一八事變後，日本逐步侵佔中國東北；1937 年盧溝橋事變後，中國全面抗戰爆發，戰火從華北、華東一路蔓延至華南。1938 年 10 月，日軍在大亞灣登陸，隨後佔領廣州，華南局勢急劇惡化。從此，香港雖仍由英國管治，卻已被戰爭逐步包圍，成為中國抗戰、英國遠東防務與日本南進戰略交會的一個關鍵地點。</p>
                        <p>廣州失守後，香港的地位更加特殊。一方面，它仍是華南重要的港口、金融與轉運中心，承載著大量物資、人口與情報流動；另一方面，它亦成為許多內地文化人、民主人士、抗日人士和難民暫避戰火的地方。戰前的香港，表面上仍維持著商業都市的日常節奏，但城市背後已暗藏緊張：物資供應、邊境安全、防空準備、軍事部署，以至民間救亡活動，都在戰爭陰影下發生變化。</p>
                        <h6>華南戰局與香港的戰略位置</h6>
                        <p>香港位處中國南海門戶，背靠廣東，面向東南亞航道。對英國而言，它是遠東殖民體系的一部分，也是通往華南和南洋的重要據點；對日本而言，香港則是太平洋戰爭爆發後必須奪取的戰略樞紐。港九大隊相關史料亦指出，香港是日軍在太平洋的轉運樞紐和海軍中繼站，是日軍北上侵略中國內地、南下侵略東南亞的重要據點。</p>
                        <p>這種地理位置，使香港在戰前已承受多重壓力。它既鄰近日軍控制下的華南地區，又是英國在東亞的前哨。若日本要進一步南進，香港的港口、機場、倉庫和通訊設施，都可能成為日軍進攻或佔領後加以利用的資源。因此，香港不是單純的地方戰場，而是一個連接中國戰場、太平洋戰場與東南亞戰場的節點。也正因如此，後來香港一旦淪陷，其影響並不限於本地，而是牽動整個區域的軍事與交通形勢。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-before-the-storm">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="readMoreModal-before-the-storm" tabindex="-1" aria-labelledby="readMoreModalLabel-before-the-storm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-before-the-storm">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <h6>一座被判定「難守」的殖民地</h6>
                    <p>儘管香港具有戰略價值，英國對香港防務的判斷卻相當矛盾。英國必須維持帝國在遠東的聲望，也不願輕易放棄香港；但在軍事資源有限、歐洲戰場吃緊、新加坡防務被視為優先的情況下，香港長期被認為難以持久防守。加拿大退伍軍人事務部的資料指出，到 1941 年末，英國已意識到香港十分脆弱，因此希望增兵香港，以嚇阻日本，或至少延緩日軍推進。</p>
                    <p>這種「明知難守，仍須防守」的處境，構成了香港保衛戰的基本背景。香港守軍並非完全沒有準備，但其防務受制於兵力、裝備、地形和補給。香港與外界的海空交通一旦被切斷，便難以得到即時增援；而新界北部與日軍控制區接壤，意味著日軍可從陸路迅速南下。換言之，香港的防務不是一場兵力對等的戰役，而是一場在戰略孤立中盡力拖延、抵抗和消耗敵軍的戰鬥。</p>

                    <h6>醉酒灣防線與新界防務</h6>
                    <p>為防止日軍由北面入侵，英軍在戰前建設了橫跨新界與九龍山脊的防線，即「醉酒灣防線」。這條防線由多個機槍堡、壕溝、觀察點和陣地組成，依山勢而建，原意是阻止敵軍由新界南下九龍。防線的核心位置之一，是城門水塘附近的城門棱堡。它在戰前被視為香港陸上防務的重要支點。</p>
                    <p>然而，醉酒灣防線存在先天不足。它並非歐洲大型堡壘式防線，而是依靠山地、道路、碉堡和少量兵力組成的防禦系統。官方戰史資料顯示，到 1941 年 12 月 8 日清晨，九龍半島的三個步兵營分別進入防線陣地，包括皇家蘇格蘭團、旁遮普團和拉吉普團；但這條防線所能承受的壓力，仍取決於守軍人數、夜戰能力、通訊和增援速度。</p>

                    <h6>守軍的組成與增援</h6>
                    <p>香港守軍並非單一來源，而是由英軍、印度部隊、加拿大部隊、本地義勇軍及其他輔助單位共同組成。這種多元組成，反映了香港作為英國殖民地和國際港口的性質，也反映了戰前英國遠東防務的拼湊狀態。不同部隊來自不同地區，訓練背景、作戰經驗和對香港地形的熟悉程度各不相同。</p>
                    <p>1941 年 11 月，加拿大派出的「C Force」抵達香港，包括皇家加拿大來福槍團和溫尼伯榴彈兵團。加拿大退伍軍人事務部資料記載，1,975 名加拿大士兵於 1941 年 10 月下旬從溫哥華出發，11 月 16 日抵達香港，加入約 14,000 人的香港防衛部隊。香港海防博物館亦指出，這批加拿大士兵抵港時距離戰事爆發只有數星期，部分士兵年輕且缺乏實戰經驗，對香港地形亦不熟悉。</p>

                    <h6>城市、村落與民間抗戰基礎</h6>
                    <p>戰前香港不只是軍事據點，也是一個人口密集、社會網絡複雜的城市。港島、九龍是政治、商業和交通中心；新界則有大量鄉村、山地、海灣和島嶼。這種地理與社會結構，後來深刻影響了香港的抗戰形態。正式戰事爆發後，日軍雖能迅速佔領主要城鎮和交通線，但新界山區、海島、漁村和鄉村網絡，仍為地下交通、情報傳遞、營救行動和游擊戰提供空間。</p>
                    <p>在日軍進攻前，中共領導的廣東人民抗日游擊隊已密切注意香港局勢，並預先判斷日軍一旦進攻，便應進入香港開闢敵後戰場。《港九大隊志》記載，日軍進攻香港初期，廣東人民抗日游擊隊第三、第五大隊先後派出八支武工隊進入新界，肅清土匪、收集英軍遺留武器、宣傳抗日，並號召村民保衛家鄉。這些準備，為後來港九大隊的成立和香港淪陷期間的持續抵抗，奠下了早期基礎。</p>

                    <h6>戰爭逼近香港</h6>
                    <p>1941 年下半年，東亞局勢急速惡化。日本與英、美之間的外交關係日益緊張，太平洋戰爭已一觸即發。對香港市民而言，戰爭不再只是報紙上的國際新聞，而是逐漸迫近生活的現實：防空演習、軍事調動、物價波動、難民流動、邊境消息，都提醒人們香港可能成為下一個戰場。</p>
                    <p>1941 年 12 月 8 日，日軍進攻香港，戰火正式降臨。香港歷史博物館資料指出，日軍由 1941 年 12 月 8 日至 25 日，經 18 天戰事佔領香港。加拿大退伍軍人事務部亦記載，日軍當天轟炸啟德機場，並由中國邊境越過新界向南推進。從這一刻起，香港由一個戰前緊張的前沿城市，變成真正的戰場；而市民、守軍、鄉村社群和抗日力量，都被捲入一場改變香港命運的戰爭之中。</p>

                    <h6>小結：理解保衛戰的起點</h6>
                    <p>要理解香港保衛戰，不能只從 1941 年 12 月 8 日的槍炮聲開始。它的背景，早已埋藏在日本侵華、廣州失守、華南形勢惡化、英國遠東防務困局，以及香港自身的地理位置之中。香港之所以成為戰場，並非偶然；它的港口、航道、邊境、城市與鄉村，都使它在太平洋戰爭前夕成為兵家必爭之地。</p>
                    <p>這段戰前背景，也幫助我們理解後續歷史：為何香港守軍在孤立中作戰，為何新界與九龍的地形如此重要，為何香港淪陷後仍能出現持續的地下抵抗與游擊活動。戰前香港既是帝國防線上的一個據點，也是中國抗戰大局中的一個前沿。當戰爭終於來臨，這座城市的每一條道路、每一座山嶺、每一個村落，都將被帶入歷史的洪流。</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 戰役經過 --}}
    <section class="bg-texture-gray" id="eighteen-days-of-battle" data-tab-panel="eighteen-days-of-battle" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰役經過</h3>
                            <h6>Eighteen Days of Battle</h6>
                            <p class="mt-5">1941年12月，日軍由北面進攻香港，戰事從新界一路推進至九龍和香港島。短短十八日內，守軍與市民共同經歷了空襲、撤退、巷戰與孤島防守的巨大壓力。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_2_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <h6>戰役總覽：由北而南的十八日</h6>
                        <p>1941 年 12 月 8 日清晨，日軍越過深圳河，香港保衛戰正式爆發。這一天，太平洋戰爭全面展開；日本同時向多個英美據點發動攻勢，香港亦在同一場大規模戰略行動中成為目標。日軍首先轟炸啟德機場，削弱香港有限的空中力量，隨後由新界北部向南推進。香港從戰前的緊張前線，瞬間變成真正的戰場。</p>
                        <p>這場戰役歷時十八日，從新界、九龍一路打到香港島。守軍雖在兵力、火力、制空權和補給上處於劣勢，但仍在多處陣地頑強抵抗。香港保衛戰不是一場單一地點的戰鬥，而是一連串連續退守、陣地防禦、城市作戰和山地攻防的總和。日軍進攻迅速，守軍則在被逐步壓縮的空間內苦戰，直至 12 月 25 日香港總督楊慕琦宣告投降，香港進入三年零八個月的日佔時期。香港歷史博物館和加拿大退伍軍人事務部均記載，香港戰役由 1941 年 12 月 8 日開始，至 12 月 25 日結束。</p>
                        <h6>越過深圳河：戰火由北而來</h6>
                        <p>日軍進攻香港的第一步，是從深圳河以北越境南下。新界北部與日軍控制下的華南地區相連，令香港的陸上防線很快便承受壓力。日軍兵分多路推進，沿元朗、上水、粉嶺、沙頭角、大埔等方向向南壓迫，目標是突破新界，迫近九龍。與此同時，啟德機場遭到轟炸，香港空中防禦力量幾乎在戰事初期便被削弱。</p>
                        <p>守軍在新界北部的任務，主要是延緩日軍推進，爭取時間退守主要防線。由於日軍掌握進攻主動權，又擁有較強的炮兵和空中支援，守軍很難在新界北部長期抵擋。戰事開始後，香港守軍逐步向「醉酒灣防線」撤退。這條防線原本被視為九龍北部的重要屏障，但在日軍迅速推進下，它很快便面臨嚴峻考驗。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-eighteen-days-of-battle">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="readMoreModal-eighteen-days-of-battle" tabindex="-1" aria-labelledby="readMoreModalLabel-eighteen-days-of-battle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-eighteen-days-of-battle">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <h6>醉酒灣防線：九龍門戶的失守</h6>
                    <p>醉酒灣防線橫跨九龍以北山脊，依靠山地、碉堡、壕溝和交通線構成防禦體系。它的戰略意義，在於阻止日軍從新界進入九龍，為香港島防務爭取時間。其中，城門棱堡是防線上的重要據點，也是日軍突破的關鍵目標。</p>
                    <p>然而，戰局發展比守軍預期更快。1941 年 12 月 9 日晚至 10 日凌晨，日軍突襲城門棱堡。這次夜襲令醉酒灣防線的中心支點迅速失守，防線整體難以繼續維持。Juno Beach Centre 的戰史資料指出，日軍在 12 月 9 日攻擊醉酒灣防線，令整條大陸防線變得無法守住，迫使守軍放棄該線。</p>
                    <p>醉酒灣防線的失守，是香港保衛戰的第一個重大轉折。原本希望能拖延日軍多日的防線，實際上很快被突破。這使守軍不得不放棄九龍北部陣地，轉入撤退與再部署。從此，香港戰局不再是守住新界的問題，而是如何在九龍撤退後，依託維多利亞港與香港島繼續抵抗。</p>

                    <h6>九龍撤退：由陸上防線轉向港島防衛</h6>
                    <p>醉酒灣防線失守後，守軍開始從九龍撤往香港島。九龍地區的防守空間有限，若繼續停留，部隊可能被日軍壓迫至海邊而無法撤離。因此，守軍指揮部決定逐步放棄九龍，將防衛重心轉到香港島。</p>
                    <p>撤退本身是一項艱難任務。守軍需要在日軍壓迫下維持秩序，把人員、裝備和部分物資運過維多利亞港。同時，九龍半島的失守也意味著日軍可從北岸炮擊香港島，並觀察島上防線。對市民而言，戰火由新界推至九龍，再逼近港島，恐懼與混亂迅速擴散。原本熟悉的城市空間，被炮火、防空警報、軍事封鎖和難民潮所取代。</p>
                    <p>到 12 月中旬，九龍已落入日軍手中。香港島成為守軍最後的主要陣地。維多利亞港雖一度提供天然屏障，但在日軍取得九龍後，這道水面屏障已不再穩固。日軍開始準備渡海登島，戰役進入第二階段。</p>

                    <h6>維港兩岸：最後屏障的動搖</h6>
                    <p>香港島的防禦，依靠海岸炮台、山地陣地、道路關卡和步兵防線組成。守軍希望利用維多利亞港阻止日軍渡海，並依托港島崎嶇地形進行抵抗。然而，日軍佔領九龍後，能夠從北岸觀察和炮擊港島，對守軍陣地形成持續壓力。</p>
                    <p>日軍在渡海前，先以炮火和空襲削弱港島防禦。守軍則面對補給困難、通訊受阻、醫療壓力加劇和民眾傷亡增加等問題。隨著水源、糧食和彈藥日益緊張，香港島上的軍民都被迫承受越來越沉重的壓力。這時的戰役，已不只是軍事陣地的攻防，更是整座城市在圍困中能夠承受多久的問題。</p>

                    <h6>登陸港島：戰鬥進入最殘酷階段</h6>
                    <p>1941 年 12 月 18 日晚，日軍開始渡海登陸香港島北岸。日軍登島後，守軍與其在北角、鰂魚涌、太古、黃泥涌峽、淺水灣、赤柱等地展開激烈戰鬥。港島地形複雜，道路、山脊、峽谷和海岸線交錯，使戰鬥呈現分散而殘酷的特徵。部隊之間的聯繫時常被切斷，不同防區可能各自苦戰，難以形成完整協同。</p>
                    <p>黃泥涌峽一帶，是港島戰事中最慘烈的地點之一。這裡連接港島南北交通，是日軍分割守軍防線的重要目標。守軍在峽谷、山坡和道路兩側頑強抵抗，但日軍不斷滲透和包抄，使防線逐步被切開。英軍、加拿大軍、印度部隊、香港義勇防衛軍及其他守軍單位，在各處陣地奮戰，許多人戰死、受傷或被俘。Commonwealth War Graves Commission 指出，西灣國殤紀念墳場安葬和紀念大量在香港戰役及其後被囚期間犧牲的英聯邦軍人，反映了港島戰鬥與戰俘經歷的沉重代價。</p>

                    <h6>孤立與分割：港島防線逐步瓦解</h6>
                    <p>日軍登陸後，港島防線逐漸被分割。守軍在多個地點仍然堅持抵抗，但整體指揮和增援愈發困難。日軍奪取高地和交通要道後，可以切斷各防區聯繫，使守軍陷入孤立。醫院、臨時救護站和民居都受到戰火波及，戰爭對平民造成嚴重傷害。</p>
                    <p>戰役後期，守軍已面臨多重困境：部分陣地失守，彈藥和糧水不足，傷員眾多，通訊破壞，且缺乏外部增援。儘管如此，香港島多處戰鬥仍持續到最後階段。赤柱一帶的守軍尤其堅持至接近投降前後，顯示香港保衛戰並非迅速崩潰，而是在極端劣勢下持續苦戰至最後一刻。</p>

                    <h6>聖誕日投降：黑色聖誕的開始</h6>
                    <p>1941 年 12 月 25 日，香港戰局已無法挽回。當日下午，香港總督楊慕琦與守軍司令莫德庇等向日軍投降。這一天後來被稱為「黑色聖誕」。對香港而言，這不只是一次軍事失敗，也是一個時代的斷裂：英國殖民管治被日軍佔領取代，城市進入長達三年零八個月的苦難歲月。</p>
                    <p>香港保衛戰的結束，並不代表香港抵抗的終結。正是在英軍戰敗投降後，香港抵抗日軍侵略的重任，逐步落到中國共產黨領導的抗日游擊隊及本地抗日力量身上。港九大隊相關史料指出，港九大隊是香港淪陷三年零八個月期間，唯一一支成建制、由始至終堅持抵抗的抗日武裝力量。 這也為後續章節——秘密大營救、敵後游擊戰、情報合作、海上作戰和民眾支援——埋下歷史伏線。</p>

                    <h6>小結：一場失守之戰，也是一段抵抗的開端</h6>
                    <p>香港保衛戰以軍事失敗告終，但它在香港歷史中留下深刻印記。十八日之內，香港經歷了從邊境入侵、九龍失守、港島登陸到全城投降的急劇變化。這場戰役暴露了英國遠東防務的脆弱，也顯示出守軍在孤立無援下的艱苦抵抗。</p>
                    <p>更重要的是，香港保衛戰並不是這段歷史的終點，而是日佔時期抗戰歷史的起點。當正規防線崩潰後，香港的山區、村落、海灣與城市街巷，逐漸成為另一種抵抗的空間。從此，香港抗戰的重心由正面戰場轉入敵後：營救、情報、游擊、宣傳、鋤奸、海上交通與民眾支援，將共同構成香港在日佔歲月中不屈不撓的抗戰篇章。</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 黑色聖誕 --}}
    <section class="bg-texture-gray" id="black-christmas" data-tab-panel="black-christmas" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>黑色聖誕</h3>
                            <h6>Black Christmas</h6>
                            <p class="mt-5">1941年12月25日，香港投降，這一天後來被稱為「黑色聖誕」。它標誌着香港保衛戰的結束，也象徵三年零八個月日治歲月的開始。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_3_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月25日，本應是聖誕節，卻成為香港歷史上最沉重的日子之一。經過十八日激戰，香港守軍已面對極端困境。多處防線被日軍突破或切斷，傷兵和平民處境危急，糧食、彈藥、醫療物資和通訊能力都接近極限。</p>
                        <p>當日下午，香港總督楊慕琦代表英國殖民政府向日軍投降，香港保衛戰正式結束。這一天後來被稱為「黑色聖誕」。這個名稱之所以沉重，不只是因為它發生在聖誕節，更因為它象徵着香港原有秩序的崩塌，以及城市從戰場進入佔領時期的轉折。</p>
                        <p>投降對香港來說，是一個巨大的政治和心理震盪。戰前的香港雖然已感受到戰爭壓力，但不少市民仍生活在殖民政府、商業社會和港口秩序之中。12月25日之後，這套秩序被日軍軍政統治取代. 市民很快意識到，熟悉的城市已不再由原有制度運作，而是落入佔領者手中。</p>
                        <p>日軍接管香港後，開始重新安排城市秩序。行政、治安、交通、物資和新聞都被置於軍事控制之下。公共建築、學校、倉庫、碼頭和民居可能被徵用，街道上出現新的命令、檢查和巡邏。香港不再只是被打敗的城市，而是一座被軍事力量全面控制的佔領地。</p>
                        <p>對普通市民而言，投降後的變化很快在生活中出現。宵禁、搜查、拘捕、身份登記、通行限制和新聞控制，使日常行動變得危險。人們需要小心說話，小心出門，小心與誰交往。佔領統治不只是軍隊進駐，也是一種深入生活細節的恐懼。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-black-christmas">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="readMoreModal-black-christmas" tabindex="-1" aria-labelledby="readMoreModalLabel-black-christmas" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-black-christmas">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>糧食與物資短缺亦迅速成為市民面對的最大困難之一。香港戰前依賴外來供應，戰爭和佔領令糧食來源受到嚴重影響。日治時期的配給、軍票、物價波動和人口疏散，將許多家庭推入長期不安。對不少人來說，保衛戰結束後，真正漫長的苦難才剛開始。</p>
                    <p>「黑色聖誕」也改變了香港與中國抗戰之間的關係。戰前，香港是支援抗戰的重要後方；戰後，香港變成敵後戰場。正面防守失敗後，抵抗不再以殖民地守軍為中心，而逐步轉入新界山區、村落、海島、海上交通線和城市地下網絡之中。</p>
                    <p>中國共產黨領導的華南抗日游擊力量，在香港淪陷後進入港九新界，建立據點，聯絡群眾，收集武器，展開營救和情報工作。這些力量後來整編為港九大隊，成為日佔時期香港最重要的敵後抗日武裝之一。它們讓香港抗戰在投降之後仍然延續。</p>
                    <p>因此，12月25日具有雙重意義。它是香港保衛戰的終點，也是日治歲月的起點；它是城市淪陷的標誌，也是敵後抵抗逐步展開的背景。從軍事角度看，香港已經投降；但從人民抗戰的角度看，另一種抵抗才剛開始。</p>
                    <p>這一天的記憶也提醒我們，歷史中的失敗並不等於沉默。香港在1941年聖誕節失去了原有防線，市民也被迫面對殘酷的佔領現實。但在恐懼和壓迫之中，仍有人選擇保護他人、傳遞情報、支援游擊隊、營救被困者，將抗戰的火種保存下去。</p>
                    <p>「黑色聖誕」之所以值得被記住，不只是因為它悲傷，也因為它標示出香港歷史的一個深刻轉折。從這一天起，香港人面對的不只是軍事失敗，而是如何在佔領之下生存、互助和抵抗。這段歷史讓我們看見，城市的淪陷可以發生在一天之內，但人的尊嚴與抵抗，卻能在漫長黑暗中繼續存在。</p>
                    <p>今日回望「黑色聖誕」，我們不只是回望一次投降，而是回望一座城市如何被迫進入苦難，又如何在苦難中保存希望。它連結着前一頁的戰役，也通向後一頁的日治生活與敵後抗戰. 理解這一天，才能理解香港二戰記憶中最沉重、也最值得深思的一部分。</p>
                </div>
            </div>
        </div>
    </div>

    {{-- 戰時時間線 --}}
    <section class="bg-texture-gray" id="wartime-timeline" data-tab-panel="wartime-timeline" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_plane_r.png') }}');">
            <div class="container top-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰時時間線</h3>
                            <h6>Wartime Timeline</h6>
                            <p class="mt-5">從七七事變到香港淪陷，再到敵後抗戰展開，這條時間線串連起香港如何一步步被捲入二戰風暴。它提醒我們，香港保衛戰不只是十八日的戰事，也是香港抗戰記憶的起點。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding-sm">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-5">
                        <article class="history-content h-100 d-flex flex-column justify-content-center" id="historyContent">
                            <h1 class="mb-3" id="historyYear">1937.7.7</h1>
                            <h4 class="mb-3" id="historyTitle">全面抗戰爆發</h4>
                            <p class="history-description mb-0" id="historyDescription1">
                                1937年七七事變後，中國全面抗戰爆發。雖然香港當時仍是英國殖民地，未立即成為戰場，但它與內地戰局已密切相連。大量難民、文化人、報人和政治人士南下香港，使香港成為抗戰新聞、救亡活動、物資轉運和思想交流的重要空間。這一時期的香港，不只是旁觀戰爭的港口城市，也逐漸成為支援中國抗戰的重要後方。
                            </p>
                            <p class="history-description mb-0" id="historyDescription2"></p>
                        </article>
                    </div>

                    <div class="col-lg-2">
                        <nav class="history-timeline h-100 d-flex align-items-center justify-content-center" aria-label="History timeline">
                            <ul class="history-years-list list-unstyled m-0 p-0 d-flex flex-lg-column gap-3 gap-lg-4">
                                <li><button type="button" class="history-year-btn is-active" data-year="1937.7.7">1937.7.7</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1938.10">1938.10</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1941.12.08">1941.12.08</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1941.12.10">1941.12.10</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1941.12.13">1941.12.13</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1941.12.18">1941.12.18</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1941.12.25">1941.12.25</button></li>
                                <li><button type="button" class="history-year-btn" data-year="1942">1942</button></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-lg-5">
                        <div class="history-image-wrap h-100">
                            <img src="{{ asset('img/battle-of-hong-kong/image_4_1.jpg') }}" alt="1937年香港" class="history-image w-100 h-100" id="historyImage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.accordion')
</main>

<script>
    (function() {
        const imgBase = "/img/battle-of-hong-kong/";
        const historyData = {
            "1937.7.7": {
                title: "全面抗戰爆發",
                paragraphs: [
                    "1937年七七事變後，中國全面抗戰爆發。雖然香港當時仍是英國殖民地，未立即成為戰場，但它與內地戰局已密切相連。大量難民、文化人、報人和政治人士南下香港，使香港成為抗戰新聞、救亡活動、物資轉運和思想交流的重要空間。這一時期的香港，不只是旁觀戰爭的港口城市，也逐漸成為支援中國抗戰的重要後方。"
                ],
                image: imgBase + "image_4_1.jpg",
                imageAlt: "1937年香港"
            },
            "1938.10": {
                title: "廣州淪陷，戰火壓近香港",
                paragraphs: [
                    "1938年10月，日軍在華南登陸並佔領廣州，香港北面的戰略壓力急速上升。廣州失守後，日軍控制華南多條交通線，也切斷中國經香港、澳門輸入物資的部分通道。香港從此不再只是遠離前線的商埠，而是被日軍直接威脅的邊境城市。日軍若要南進東南亞、控制南中國海航道，香港便成為不能忽視的軍事目標。"
                ],
                image: imgBase + "image_4_2.jpg",
                imageAlt: "1938年香港"
            },
            "1941.12.08": {
                title: "日軍進攻香港",
                paragraphs: [
                    "1941年12月8日，日軍越過深圳河，從北面進攻香港，香港保衛戰正式開始。同日，日軍空襲啟德機場，迅速削弱香港守軍的空中力量。面對兵力、火力和制空權均佔優勢的日軍，守軍沿新界北部展開抵抗，並嘗試利用地形和防線拖延敵軍推進。這一天標誌着香港正式被捲入太平洋戰爭，也揭開十八日苦戰的序幕。"
                ],
                image: imgBase + "image_4_3.jpg",
                imageAlt: "日軍進攻香港"
            },
            "1941.12.10": {
                title: "新界防線被突破",
                paragraphs: [
                    "戰事開始後，日軍推進速度極快。新界地區的防線雖有準備，但面對日軍猛烈攻勢，很快陷入被動。醉酒灣防線原本被視為阻延日軍南下的重要屏障，但其防守未能持久，守軍被迫逐步撤向九龍及香港島。新界失守不只是地理上的後退，也意味香港守軍失去戰略縱深，整場戰役開始急速收縮到九龍與港島一帶。"
                ],
                image: imgBase + "image_4_4.jpg",
                imageAlt: "新界防線被突破"
            },
            "1941.12.13": {
                title: "九龍半島基本失守",
                paragraphs: [
                    "到12月13日前後，九龍半島大致落入日軍控制，守軍撤往香港島，維多利亞港成為雙方之間最後的天然屏障。香港島此後成為保衛戰的最後防線。九龍失守後，城市氣氛更加緊張，大批平民面對炮火、缺糧和逃難壓力。對守軍而言，戰局已由多線防守轉為孤島防禦；對市民而言，香港淪陷的陰影已越來越近。"
                ],
                image: imgBase + "image_4_5.jpg",
                imageAlt: "九龍半島基本失守"
            },
            "1941.12.18": {
                title: "日軍登陸香港島",
                paragraphs: [
                    "1941年12月18日夜，日軍從港島東北岸一帶登陸，戰鬥進入最激烈階段。港島山地、道路和市區很快成為近距離戰場，守軍在黃泥涌峽、灣仔峽、赤柱等地頑強抵抗。日軍登陸後，港島防線被逐步切割，守軍之間的聯絡和補給越來越困難。這一階段的戰鬥十分慘烈，軍人和平民都承受巨大傷亡與恐懼。"
                ],
                image: imgBase + "image_4_6.jpg",
                imageAlt: "日軍登陸港島"
            },
            "1941.12.25": {
                title: "黑色聖誕，香港投降",
                paragraphs: [
                    "1941年12月25日，香港總督楊慕琦代表英國殖民政府向日軍投降。這一天後來被稱為「黑色聖誕」，象徵香港保衛戰的結束，也標誌着日治時期的開始。經過十八日戰鬥，香港從重要港口變成被佔領城市，市民隨即面對宵禁、搜捕、糧食短缺、軍票和強制疏散等壓迫。戰役雖然結束，但香港人的苦難才剛開始。"
                ],
                image: imgBase + "image_4_7.jpg",
                imageAlt: "港府投降"
            },
            "1942": {
                title: "敵後抗戰展開",
                paragraphs: [
                    "香港淪陷後，抗戰並沒有停止。中國共產黨領導的華南抗日游擊力量進入港九新界，建立據點，聯絡鄉民，收集武器，並逐步整編為港九大隊。此後，香港的抗戰由正面戰場轉入敵後：游擊隊展開情報、營救、突襲、爆破和宣傳行動，也協助文化人、戰俘和盟軍人員逃離險境。香港保衛戰因此不只是十八日的軍事事件，更是香港敵後抵抗記憶的起點。"
                ],
                image: imgBase + "image_4_8.jpg",
                imageAlt: "敵後抗戰展開"
            }
        };

        const yearDisplay = document.getElementById("historyYear");
        const titleDisplay = document.getElementById("historyTitle");
        const description1Display = document.getElementById("historyDescription1");
        const description2Display = document.getElementById("historyDescription2");
        const imageDisplay = document.getElementById("historyImage");
        const buttons = document.querySelectorAll(".history-year-btn");

        if (!yearDisplay || !titleDisplay || !description1Display || !description2Display || !imageDisplay || !buttons.length) {
            return;
        }

        const applyHistoryState = (year) => {
            const data = historyData[year];
            if (!data) {
                return;
            }

            yearDisplay.textContent = year;
            titleDisplay.textContent = data.title;
            description1Display.textContent = data.paragraphs[0];
            description2Display.textContent = data.paragraphs[1] ?? "";
            imageDisplay.src = data.image;
            imageDisplay.alt = data.imageAlt;

            buttons.forEach((button) => {
                button.classList.toggle("is-active", button.dataset.year === year);
            });
        };

        buttons.forEach((button) => {
            const year = button.dataset.year;
            button.addEventListener("mouseenter", () => applyHistoryState(year));
        });
    })();
</script>
@endsection
