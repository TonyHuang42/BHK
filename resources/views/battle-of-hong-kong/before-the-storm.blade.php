@extends('layouts.app')

@section('title', '戰前背景｜香港保衛戰')
@section('meta_description', '二十世紀上半葉香港在抗戰大局中的位置：物資與言論空間、日軍南進壓力與英軍防線的限制，回顧香港保衛戰前的危局。')

@section('content')
<main>
    @include('partials.hero-nav.battle')

    <section id="before-the-storm">
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
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_1.png') }}" alt="Image 1" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_2.png') }}" alt="Image 2" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('img/battle-of-hong-kong/image_1_3.png') }}" alt="Image 3" class="w-100">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-right" style="background-image: url('{{ asset('img/bg/bg_plane_l.png') }}');">
            <div class="container top-padding-sm bottom-padding">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 mx-auto">
                        <p>戰火真正來到香港之前，這座城市早已與中國抗戰和太平洋局勢緊密相連。1937年七七事變後，中國全面抗戰爆發，戰火從華北蔓延至華中、華南。香港當時仍由英國殖民政府管治，表面上與中國內地戰場保持距離，但它的地理位置、港口功能和華人社會網絡，使它很快成為戰時中國不可忽視的一個節點。</p>
                        <p>香港位處南中國海要衝，背靠廣東，面向東南亞，是連接華南、海外華僑社群和國際航道的重要港口。戰前的香港，是一座商業城市，也是一個資訊、資金、人員和物資高度流動的地方。這種開放性，使香港在和平時期成為貿易中心；到了戰爭時期，則使它成為支援中國抗戰的重要後方。</p>
                        <p>中國全面抗戰爆發後，大量難民、文化人、報人、學生和政治人士南下香港。有人來此避難，有人繼續從事出版、演講、籌款和救亡活動，也有人透過香港與海外社群保持聯繫。香港的報館、學校、戲院、社團和工會，逐漸承載起抗日救亡的聲音。這些活動使香港不再只是殖民地港口，也成為中國抗戰輿論和民間動員的一部分。</p>
                        <p>對許多內地文化人而言，香港曾是一個相對安全的暫避之地。這裏既能接觸國際新聞，也能保持與內地、南洋和海外的聯絡。許多文章、刊物、演出和籌款活動，都在戰時香港展開。這一點也解釋了為何日軍佔領香港後，會急於搜捕抗日文化人和民主人士；因為香港早已是抗日輿論與文化力量的重要聚集地。</p>
                        <p>1938年10月，廣州淪陷，香港北面的戰略壓力急速上升。廣州原本是華南重鎮，與香港在交通、貿易和人口流動上關係密切。廣州落入日軍手中後，香港與日軍控制區之間的距離大幅縮短，城市所面對的威脅不再遙遠。香港由抗戰後方逐漸變成戰爭前線邊緣。</p>
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
                    <p>日軍控制廣州後，華南多條交通線受制，中國經香港輸入物資的通道也受到更大壓力。對日本而言，香港不只是英國殖民地，更是一個可能支援中國抗戰、連接海外資源和影響南中國海局勢的據點。若要切斷中國對外聯繫，並推進其南進戰略，香港便成為日軍不能忽視的目標。</p>
                    <p>從更大的國際局勢看，香港也處在帝國競爭和太平洋戰爭爆發前夕的緊張格局之中。日本在中國戰場擴張，同時準備向東南亞推進；英國則同時面對歐洲戰場和亞洲殖民地防務壓力。香港雖然地位重要，但在英國全球戰略中，並不是最優先獲得增援的地區。</p>
                    <p>英國在香港設有守軍、防線 and 軍事設施，但守備條件並不理想。香港面積有限，背靠日軍已控制或威脅的華南地區，缺乏戰略縱深。一旦日軍從北面進攻，守軍必須在新界、九龍和香港島之間逐步收縮防線。香港作為港口有其價值，但作為長期孤立防守的軍事據點，處境十分困難。</p>
                    <p>香港守軍由不同部隊組成，包括英軍、加拿大軍、印度軍、香港義勇防衛軍等。這種多元組成反映了香港作為殖民地和國際港口的特性，也反映了英國在遠東防務上的臨時調配。然而，守軍在空軍、海軍支援、重型武器和後勤補給方面都明顯不足。面對準備已久、戰鬥經驗豐富的日軍，香港守軍從一開始便處於劣勢。</p>
                    <p>戰前香港社會也感受到局勢變化。隨着戰爭逼近，市民對物資供應、家庭安全和未來前景產生憂慮。難民湧入、新聞報道、軍事準備和日軍南下傳聞，都令城市氣氛逐漸緊張。繁忙的港口、市場和街道背後，戰爭陰影日益明顯。</p>
                    <p>因此，香港保衛戰並不是突然從天而降的事件。它是多年戰爭壓力、華南局勢變化、國際戰略角力和香港本身地理位置共同累積的結果。當1941年12月日軍越過深圳河時，香港早已站在歷史風暴的邊緣。</p>
                    <p>理解戰前背景，有助我們看見香港在二戰中的特殊位置。香港既是中國抗戰的支援地，也是英國殖民地；既是商業港口，也是日軍南進戰略中的軍事目標。這種複雜身份，使香港保衛戰不只是地方戰役，而是中國抗戰、殖民防務和太平洋戰爭交會的一個關鍵時刻。</p>
                </div>
            </div>
        </div>
    </div>

    @include('partials.accordion')
</main>
@endsection
