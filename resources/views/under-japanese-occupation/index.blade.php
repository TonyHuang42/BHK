@extends('layouts.app')

@section('title', '日治下的香港')
@section('meta_description', '回顧三年零八個月的日治歲月：佔領統治的建立、市民的生存與配給、經濟與社會的變遷，以及戰時的日常生活紀錄。')

@section('content')
<main>
    <section class="hero">
        <img src="{{ asset('img/under-japanese-occupation/banner.jpg') }}" alt="日治下的香港" class="hero-img under-japanese-occupation-hero-img">
        <img src="{{ asset('img/home/section_header-日治下的香港.svg') }}" alt="日治下的香港" class="hero-title under-japanese-occupation-hero-title">
    </section>

    <section class="border-bottom hero-subnav">
        <div class="container py-4">
            <div class="d-flex justify-content-evenly gap-2 gap-sm-0 flex-wrap">
                <a href="{{ route('occupation.index', ['tab' => 'occupation-rule']) }}" data-tab-link="occupation-rule">佔領統治</a>
                <a href="{{ route('occupation.index', ['tab' => 'survival-and-rationing']) }}" data-tab-link="survival-and-rationing">生存與配給</a>
                <a href="{{ route('occupation.index', ['tab' => 'economy-and-society']) }}" data-tab-link="economy-and-society">經濟與社會</a>
                <a href="{{ route('occupation.index', ['tab' => 'everyday-life-wartime']) }}" data-tab-link="everyday-life-wartime">戰時日常</a>
            </div>
        </div>
    </section>

    {{-- 佔領統治 --}}
    <section class="bg-texture-gray" id="occupation-rule" data-tab-panel="occupation-rule" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>佔領統治</h3>
                            <h6>The Japanese Occupation</h6>
                            <p class="mt-5">1941年12月25日香港投降後，日軍隨即建立軍政統治。這套制度徹底改變了香港的法律、行政和社會秩序，將整座城市納入大東亞共榮圈的戰爭體系之中。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/under-japanese-occupation/image_1_1.jpg') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>1941年12月25日，香港正式進入日治時期。日軍佔領香港後，隨即成立「香港占領地總督部」，實施嚴密的軍事統治。這套統治體系的核心，是將香港轉化為支援日本南進戰略的補給基地和軍事據點。對香港市民而言，這意味着原本熟悉的社會秩序被徹底打破，取而代之的是一套以軍事命令、恐懼和壓迫為基礎的新規則。</p>
                        <p>日治初期的統治重點是恢復秩序和確立權威。日軍在市區各處設立憲兵隊、哨所和檢查站，實施宵禁和通行證制度。街道上出現了新的命令、新的旗幟和新的語言要求。市民在街上遇到日軍必須鞠躬，否則可能遭到毆打甚至拘捕。這種日常細節中的壓迫，是佔領統治最直接的體現。</p>
                        <p>行政上，日軍保留了部分原有的基層組織，但將其納入「區役所」等新體系中。日軍也利用部分本地華人領袖成立「華民代表會」和「華民各界協議會」，試圖透過這些組織來管理華人社會。然而，這些組織實際上只是日軍傳達命令、徵集資源和控制輿論的工具。真正的權力始終掌握在日軍總督部和憲兵隊手中。</p>
                        <p>佔領統治也體現在對空間的重新安排。許多公共建築、學校、酒店、倉庫和民居被日軍徵用為辦公室、軍營、慰安所或監獄。原本的街道名稱被改為日式名稱，例如「皇后大道」改為「明治通」，「德輔道」改為「昭和通」。這些改變不只是符號上的更替，也是佔領者試圖抹去香港原有身份、確立殖民權威的手段。</p>
                        <p>憲兵隊（Kempeitai）是佔領統治中最令人恐懼的部分。他們擁有極大的權力，可以隨意搜捕、審訊和處決可疑人士。在日治時期，許多市民因為被懷疑從事抗日活動、私藏武器或與盟軍聯繫而遭到憲兵隊的殘酷對待。這種恐怖氣氛滲透到社會的每一個角落，使人們生活在持續的焦慮和猜疑之中。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-occupation-rule">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 生存與配給 --}}
    <section class="bg-texture-gray" id="survival-and-rationing" data-tab-panel="survival-and-rationing" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>生存與配給</h3>
                            <h6>Survival and Rationing</h6>
                            <p class="mt-5">糧食短缺是日治時期市民面對的最大威脅。在嚴格的配給制度和物價飛漲下，尋找下一餐成為每個家庭最迫切的日常挑戰。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/under-japanese-occupation/image_2_1.jpg') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>在「三年零八個月」的記憶中，飢餓是最深刻的烙印。香港戰前高度依賴外來糧食供應，戰爭和佔領切斷了正常的貿易和運輸線。日軍接管香港後，優先將糧食供應給軍隊，平民則被迫面對極端嚴重的糧食短缺。對大多數香港市民而言，日治時期的生活就是一場關於生存的漫長鬥爭。</p>
                        <p>為了管理有限的資源，日軍實施了嚴格的配給制度。市民必須持有「配給證」才能領取定量的食米、食油、食糖和食鹽。然而，配給的數量往往遠不足以維持基本生存，而且供應極不穩定。排長龍領米成為當時街頭最常見的景象，人們往往要天未亮就去排隊，甚至排了一整天也領不到糧食。</p>
                        <p>隨着戰爭持續，糧食供應日益枯竭。米中摻雜沙石、發霉甚至有蟲是常有的事。為了充飢，人們不得不尋找各種替代品，如木薯、番薯、花生麩，甚至是樹皮和草根。在極端飢餓的情況下，社會秩序進一步崩壞，偷竊、搶劫糧食的事件頻發，甚至出現了令人心碎的人間慘劇。</p>
                        <p>物價飛漲和貨幣貶值加劇了生存危機。日軍強制推行「軍票」，並宣佈港幣無效。軍票的價值隨着日軍戰局的惡化而急速下跌，導致嚴重的通貨膨脹。市民手中的積蓄在一夜之間變成廢紙，許多家庭因此陷入赤貧。為了換取一點點糧食，人們不得不變賣衣物、家具甚至祖傳的珠寶首飾。</p>
                        <p>除了糧食，燃料、食水和醫療物資也極度匱乏。由於缺乏燃料，人們拆掉木門、窗框甚至家具來燒火煮食。衛生條件惡化和營養不良導致各種疾病流行，如腳氣病、痢疾和霍亂。在藥物短缺的情況下，許多人只能在絕望中等待死亡。這段時期的死亡率極高，街頭常可見到無人認領的屍體。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-survival-and-rationing">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 經濟與社會 --}}
    <section class="bg-texture-gray" id="economy-and-society" data-tab-panel="economy-and-society" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>經濟與社會</h3>
                            <h6>Economy and Society</h6>
                            <p class="mt-5">佔領下的香港，經濟活動幾乎停滯。日軍透過軍票制度、資源掠奪和人口疏散政策，試圖重塑香港的社會結構以服務其戰爭目標。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-section overflow-hidden">
            <div class="swiper battleSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_1.jpg') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_2.jpg') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/under-japanese-occupation/image_3_3.jpg') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>日治時期的香港，原本繁榮的轉口貿易和商業活動幾乎完全停擺。日軍將香港的經濟體系納入其戰時體制，實施嚴格的管制和掠奪。對日本而言，香港的價值在於其港口設施、工業設備和戰略物資。對香港市民而言，這意味着生計的斷絕和社會結構的劇烈動盪。</p>
                        <p>軍票制度是日軍控制香港經濟的主要手段。1942年起，日軍宣佈軍票為法定貨幣，並強制市民將手頭的港幣兌換成軍票。隨着日軍在戰場上的失利，軍票不斷貶值，最終在1945年日本投降後變為廢紙。這場貨幣掠奪導致無數市民傾家蕩產，也徹底摧毀了香港的金融信用和商業基礎。</p>
                        <p>為了減輕糧食供應壓力，日軍實施了殘酷的「歸鄉政策」或人口疏散政策。日軍認為香港人口過多，超出了其供應能力，因此採取各種手段強迫市民離開香港，返回內地農村。許多人被強行趕上船隻或火車，甚至被遺棄在荒野。在疏散過程中，無數人死於飢餓、疾病或日軍的暴力。香港的人口從戰前的約160萬急劇下降到戰後的約60萬。</p>
                        <p>社會結構也發生了顯著變化。原本的商業精英階層在佔領下失去了影響力，而一些願意與日軍合作的人則獲得了短暫的權力和利益。然而，大多數市民不分階層都陷入了貧困和恐懼。在這種極端環境下，原本的社會網絡被削弱，但同時也催生了新的民間互助形式。鄰里之間、同鄉之間甚至陌生人之間，往往在生死關頭展現出感人的互助精神。</p>
                        <p>教育和文化活動也受到嚴格控制。學校被要求教授日語，推行皇民化教育。報紙和廣播成為日軍宣傳的工具，任何不符合日軍立場的言論都會遭到嚴厲打擊。儘管如此，仍有一些文化人和教育工作者在暗中堅持，試圖在黑暗中保存香港的文化火種和民族氣節。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-economy-and-society">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 戰時日常 --}}
    <section class="bg-texture-gray" id="everyday-life-wartime" data-tab-panel="everyday-life-wartime" hidden>
        <div class="bg-left" style="background-image: url('{{ asset('img/bg/bg_rifle_r.png') }}');">
            <div class="container top-padding bottom-padding-sm">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <div class="text-center">
                            <img src="{{ asset('img/home/icon_ornament.svg') }}" alt="icon" class="icon-image">
                            <h3>戰時日常</h3>
                            <h6>Everyday Life in Wartime</h6>
                            <p class="mt-5">在佔領的陰影下，生活仍在繼續。從學習日語到應對空襲，從黑市交易到尋找娛樂，香港人在壓迫中展現出頑強的生命力與適應力。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 mx-auto">
                    <img src="{{ asset('img/under-japanese-occupation/image_4.jpg') }}" alt="Image 1" class="w-100">
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_rifle_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>儘管生活在恐懼和飢餓之中，香港市民仍展現出驚人的韌性，在佔領的縫隙中尋求生存之道。戰時的日常生活是一場關於適應、冒險和微小希望的複雜編織。人們在極端環境下發展出一套獨特的生存智慧，在黑暗歲月中守護着家庭和尊嚴。</p>
                        <p>日語學習成為了一種生存技能。日軍強制推行日語教育，在學校、職場甚至街頭都要求使用日語。為了保住工作或在與日軍交涉時減少麻煩，許多市民不得不參加日語班。雖然這是一種皇民化政策，但對普通人而言，這更多是為了在佔領下生存下去的無奈選擇。</p>
                        <p>黑市貿易是戰時經濟的另一面。由於配給制度無法滿足基本需求，私下的糧食和物資交易在暗處蓬勃發展。人們在小巷、深夜或偏遠地區進行交換。雖然黑市交易風險極大，一旦被日軍發現會遭到嚴厲懲罰，但它卻是許多家庭賴以生存的唯一途徑。這種「非法」的經濟活動，實際上支撐了當時社會的底線。</p>
                        <p>隨着盟軍開始反攻，空襲成為戰時日常的一部分。警報聲響起時，市民必須迅速躲入防空洞或堅固的建築物中。空襲雖然帶來了危險和破壞，但也給市民帶來了勝利的希望。人們在防空洞中低聲交談，分享着關於戰局的傳聞，這種共同的經歷在某種程度上增強了社會的凝聚力。</p>
                        <p>娛樂活動雖然大幅減少，但並未完全消失。戲院播放着日本的宣傳電影，但也偶爾有粵劇演出。人們在私下裡聚會、講故事、玩牌，試圖在壓抑的環境中尋找一點點心靈的慰藉。這些微小的、看似平凡的活動，在戰時卻具有重要的心理支撐作用，提醒着人們：生活不應只有恐懼和飢餓。</p>
                        <button type="button" class="read-more" data-bs-toggle="modal" data-bs-target="#readMoreModal-everyday-life-wartime">閱讀更多</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.accordion')

    {{-- Modals --}}
    <div class="modal fade" id="readMoreModal-occupation-rule" tabindex="-1" aria-labelledby="readMoreModalLabel-occupation-rule" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-occupation-rule">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>日軍在香港的統治不僅是軍事上的佔領，更是對社會結構的全面重塑。除了行政和法律的變更，日軍還試圖控制市民的思想和文化生活。媒體被嚴格審查，報刊只能發表親日言論。學校課程被修改，加入大量關於日本歷史、文化和語言的內容，旨在培養對日本帝國的忠誠。</p>
                    <p>然而，這種皇民化教育在香港並未取得預期效果。大多數市民對佔領者保持着深刻的懷疑和抵觸情緒。雖然表面上不得不服從日軍的命令，但在私下裡，人們依然保留着原本的文化身份和民族情感。這種無聲的抵抗，是佔領統治下香港社會的一種重要底色。</p>
                    <p>日軍的統治也帶來了嚴重的社會問題。由於經濟崩潰和資源匱乏，社會治安惡化，盜竊和搶劫頻發。憲兵隊的嚴酷執法雖然在表面上維持了秩序，但卻製造了更深層的恐懼和不信任。人與人之間的關係變得緊張，告密和猜疑在一定程度上破壞了社會的互助網絡。</p>
                    <p>儘管如此，在極端壓迫下，香港社會也展現出了頑強的生命力。一些民間組織、宗教團體和慈善機構在艱難環境下繼續運作，為貧困市民提供有限的救助。這些微弱的亮光，在黑暗的日治歲月中為人們提供了一絲慰藉和希望。理解佔領統治，不僅要看見佔領者的強權，更要看見被佔領者在強權下的生存與堅持。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-survival-and-rationing" tabindex="-1" aria-labelledby="readMoreModalLabel-survival-and-rationing" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-survival-and-rationing">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>飢餓不僅影響了市民的身體健康，也深刻地改變了社會的道德和心理景觀。在極端匱乏的環境下，原本的社會規範受到巨大衝擊。為了生存，人們不得不做出許多在和平時期難以想像的選擇。這種生存壓力對每個人的心理都造成了長久的創傷。</p>
                    <p>然而，在飢餓的陰影下，也湧現出許多感人的互助故事。有些家庭會分享僅有的糧食給更貧困的鄰居；有些慈善機構在極度困難的情況下堅持開設粥廠，為瀕臨餓死的人提供一線生機。這些微小的善舉，在殘酷的戰爭年代顯得尤為珍貴，體現了人性的光輝。</p>
                    <p>醫療資源的匱乏也是一個巨大的挑戰。由於缺乏藥物和營養，許多原本可以治癒的疾病變得致命。中醫和民間草藥在當時發揮了重要作用，成為許多人最後的希望。醫護人員在設備簡陋、物資短缺的情況下，依然盡力救治病人，這種職業操守和奉獻精神值得被後人銘記。</p>
                    <p>生存與配給的歷史，是香港二戰記憶中最沉重的一部分。它提醒我們，戰爭的代價不僅體現在戰場上的傷亡，更體現在對普通人日常生活的摧毀。這段歷史讓我們更加珍惜和平與物資充裕的時代，也讓我們看見香港人在極端困境下展現出的頑強適應力。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-economy-and-society" tabindex="-1" aria-labelledby="readMoreModalLabel-economy-and-society" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-economy-and-society">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>日治時期的經濟掠奪不僅限於貨幣和糧食，還包括對基礎設施和工業設備的拆除。許多工廠的機器被拆卸運往日本，甚至連街道上的鐵欄杆、井蓋等金屬製品也被徵收用於製造武器。這種徹底的資源掠奪，使香港的工業基礎在戰後多年才得以恢復。</p>
                    <p>人口疏散政策對香港的社會結構造成了長遠的影響。大量市民的離開導致了原本社會網絡的斷裂，許多家庭因此妻離子散。疏散過程中的苦難和死亡，成為了那一代香港人心中揮之不去的陰影。戰後人口的重新回流和社會的重建，是一個漫長而艱辛的過程。</p>
                    <p>在社會層面，日治時期也見證了一些傳統習俗和關係的改變。由於生活艱難，原本繁瑣的婚喪嫁娶儀式被簡化。同時，共同的苦難在某種程度上打破了階層和族群的隔閡，人們在生存壓力下展現出更多的包容和互助。這種在逆境中形成的社會凝聚力，對戰後香港的重建起到了一定的推動作用。</p>
                    <p>經濟與社會的變遷，讓我們看見一座城市在佔領下是如何被系統性地削弱和改造的。這段歷史不僅是關於經濟數據的下降，更是關於無數個人命運的轉折。理解這段歷史，有助於我們更全面地認識香港在二戰中的位置，以及這座城市在災難後重生的韌性。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="readMoreModal-everyday-life-wartime" tabindex="-1" aria-labelledby="readMoreModalLabel-everyday-life-wartime" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="readMoreModalLabel-everyday-life-wartime">閱讀更多</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="關閉"></button>
                </div>
                <div class="modal-body">
                    <p>戰時的日常生活也包含了一些意想不到的細節。例如，由於電力供應不穩，蠟燭和油燈重新成為主要的照明工具。人們學會了如何修理舊物、如何節省每一滴食水。這些生活技能的重拾，反映了人們在資源匱乏時的適應力。</p>
                    <p>傳聞和消息在戰時生活中扮演了重要角色。在新聞被嚴格審查的情況下，人們通過口耳相傳來獲取關於戰局的真實情況。雖然其中夾雜着許多謠言，但這種非正式的信息網絡是市民保持希望的重要來源。人們在茶餘飯後低聲討論着盟軍的進展，這種對勝利的期待支撐着他們度過最黑暗的時刻。</p>
                    <p>儘管環境壓抑，一些微小的節慶活動依然在私下裡進行。農曆新年、中秋節等傳統節日，人們會盡力湊出一點點食物慶祝。這些活動不只是為了延續傳統，更是為了在佔領下宣示：我們的生活和文化依然存在，佔領者無法奪走我們內心的節奏。</p>
                    <p>戰時日常的歷史提醒我們，宏大的歷史敘事背後是無數真實、具體的生活。正是這些在壓迫下的生活細節，構成了一座城市最真實的抗戰記憶。香港人在這三年零八個月中所展現出的頑強與智慧，是這段歷史中最動人的篇章之一。</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
