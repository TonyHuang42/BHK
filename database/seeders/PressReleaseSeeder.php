<?php

namespace Database\Seeders;

use App\Models\PressRelease;
use App\Models\PressReleaseCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PressReleaseSeeder extends Seeder
{
    /** @var array<int, array{name: string, name_en: string, slug: string}> */
    private array $categories = [
        ['name' => '最新消息', 'name_en' => 'Latest News', 'slug' => 'latest-news'],
        ['name' => '活動通知', 'name_en' => 'Events', 'slug' => 'events'],
        ['name' => '媒體報導', 'name_en' => 'Media Coverage', 'slug' => 'media-coverage'],
    ];

    /** @var array<int, array{title: string, title_en: string, summary: string, summary_en: string, body: string, body_en: string, date: string, category: string}> */
    private array $pressReleases = [
        [
            'title' => '保衛香港運動舉辦年度紀念晚宴',
            'title_en' => 'Defence of Hong Kong Movement Hosts Annual Commemorative Dinner',
            'summary' => '保衛香港運動將於本月底舉辦年度紀念晚宴，邀請社會各界人士共同緬懷先烈，傳承香港抗戰精神，場面預計相當隆重。',
            'summary_en' => 'The Defence of Hong Kong Movement will host its annual commemorative dinner at the end of this month, inviting people from all walks of life to honour the fallen and carry forward the spirit of Hong Kong\'s wartime resistance.',
            'body' => '<p>保衛香港運動將於本月底在香港會議展覽中心舉辦年度紀念晚宴，邀請社會各界人士共同出席，緬懷在香港保衛戰中英勇犧牲的先烈。</p><p>是次晚宴以「薪火相傳」為主題，旨在喚起市民對這段珍貴歷史的關注，讓下一代了解先輩的奮鬥與犧牲。晚宴將設有歷史圖片展覽、紀錄片放映及嘉賓分享環節。</p><p>主辦單位表示，保存歷史記憶是每一位香港市民的責任，希望透過是次活動，凝聚社會各界力量，共同為保育本地歷史文化作出貢獻。</p>',
            'body_en' => '<p>The Defence of Hong Kong Movement will host its annual commemorative dinner at the Hong Kong Convention and Exhibition Centre at the end of this month, inviting people from all walks of life to attend and honour those who bravely sacrificed their lives in the Battle of Hong Kong.</p><p>Themed "Passing on the Torch," the dinner aims to raise public awareness of this precious history and help the next generation understand the struggles and sacrifices of their forebears. The event will feature a historical photo exhibition, a documentary screening, and a guest sharing session.</p><p>The organisers said that preserving historical memory is the responsibility of every Hong Kong citizen, and they hope this event will unite the community in contributing to the conservation of local history and culture.</p>',
            'date' => '2025-11-20',
            'category' => '活動通知',
        ],
        [
            'title' => '香港保衛戰文獻捐贈儀式圓滿舉行',
            'title_en' => 'Battle of Hong Kong Archive Donation Ceremony Concludes Successfully',
            'summary' => '本會成功接收一批珍貴的香港保衛戰原始文獻，包括日記、信件及軍事地圖，將供公眾研究及展覽之用，意義重大。',
            'summary_en' => 'The association has received a valuable collection of original Battle of Hong Kong documents, including diaries, letters and military maps, which will be made available for public research and exhibition.',
            'body' => '<p>保衛香港運動於上周舉行珍貴文獻捐贈儀式，成功接收一批來自英國及加拿大的香港保衛戰原始文獻，包括士兵日記、家書及珍貴軍事地圖。</p><p>捐贈者為已故士兵的後人，他們表示希望藉此機會，讓這批文獻回歸香港，讓更多人了解先人的英勇事蹟。本會主席於儀式上代表接收，並承諾妥善保存及公開展示。</p><p>這批文獻將於下月起在本會設立的歷史陳列室公開展覽，並同步數碼化，供學術研究人員免費查閱，進一步推動本地歷史研究。</p>',
            'body_en' => '<p>The Defence of Hong Kong Movement held a valuable archive donation ceremony last week, receiving a collection of original Battle of Hong Kong documents from the United Kingdom and Canada, including soldiers\' diaries, family letters and rare military maps.</p><p>The donors, descendants of fallen soldiers, said they hoped to take this opportunity to return the documents to Hong Kong so that more people could learn of their forebears\' courageous deeds. The association\'s chairman accepted the collection on its behalf and pledged to preserve and display it properly.</p><p>The documents will go on public display at the association\'s historical gallery starting next month and will be digitised simultaneously, allowing researchers free access to further advance local historical study.</p>',
            'date' => '2025-10-05',
            'category' => '最新消息',
        ],
        [
            'title' => '《守護香江》紀錄片正式公映',
            'title_en' => 'Documentary "Guarding Hong Kong" Officially Released',
            'summary' => '由本會協助製作的歷史紀錄片《守護香江》正式於各大院線公映，全面紀錄香港保衛戰的歷史經過，獲得社會各界好評。',
            'summary_en' => 'The historical documentary "Guarding Hong Kong," co-produced by the association, has officially opened in major cinemas, comprehensively chronicling the Battle of Hong Kong to widespread acclaim.',
            'body' => '<p>由保衛香港運動協助製作的歷史紀錄片《守護香江》今日正式於全港各大院線公映，吸引大批市民入場觀看，首映反應熱烈。</p><p>紀錄片歷時三年製作，走訪英國、加拿大、澳洲及香港等地，訪問多位曾親歷香港保衛戰的老兵及其後人，並結合珍貴歷史影像，全面重現一九四一年十二月的歷史事件。</p><p>導演表示，希望透過電影語言，讓年輕一代感受到當年守衛香港的士兵及平民的勇氣與堅毅，並對這段重要歷史有更深刻的認識和反思。</p>',
            'body_en' => '<p>The historical documentary "Guarding Hong Kong," co-produced by the Defence of Hong Kong Movement, officially opened in major cinemas across the city today, drawing large audiences and an enthusiastic response at its premiere.</p><p>Three years in the making, the documentary travelled to the United Kingdom, Canada, Australia and Hong Kong, interviewing veterans who lived through the Battle of Hong Kong and their descendants, and combining rare historical footage to fully recreate the events of December 1941.</p><p>The director said he hoped the language of film would let younger generations feel the courage and resilience of the soldiers and civilians who defended Hong Kong, and gain a deeper understanding of and reflection on this important history.</p>',
            'date' => '2025-09-12',
            'category' => '媒體報導',
        ],
        [
            'title' => '本會獲政府撥款資助歷史教育計劃',
            'title_en' => 'Association Receives Government Funding for History Education Programme',
            'summary' => '保衛香港運動獲得政府文化體育及旅遊局撥款資助，將於全港多所中學推行香港保衛戰歷史教育計劃，預計惠及逾萬名學生。',
            'summary_en' => 'The Defence of Hong Kong Movement has received funding from the government\'s Culture, Sports and Tourism Bureau to run a Battle of Hong Kong history education programme in secondary schools across the city, expected to benefit over ten thousand students.',
            'body' => '<p>保衛香港運動宣布，成功獲得文化體育及旅遊局撥款資助，金額達港幣一百二十萬元，用於推行「香港保衛戰校園歷史教育計劃」。</p><p>計劃將於下學年起在全港三十所中學推行，內容包括歷史講座、互動工作坊及實地參觀等，預計共有逾一萬名學生受惠。本會將聯同多位歷史學者共同設計課程，確保內容準確嚴謹。</p><p>本會執行總監表示，歷史教育是承傳集體記憶的重要一環，期望透過是次計劃，讓香港年輕一代對本地歷史有更全面的認識，並從中汲取前人的智慧與勇氣。</p>',
            'body_en' => '<p>The Defence of Hong Kong Movement has announced it successfully secured funding of HK$1.2 million from the Culture, Sports and Tourism Bureau to run the "Battle of Hong Kong School History Education Programme."</p><p>Starting next academic year, the programme will be rolled out at thirty secondary schools across the city, featuring history lectures, interactive workshops and field visits, and is expected to benefit over ten thousand students. The association will design the curriculum together with several historians to ensure accuracy and rigour.</p><p>The association\'s executive director said history education is a vital part of passing on collective memory, and expressed hope that the programme would give Hong Kong\'s younger generation a fuller understanding of local history and draw on the wisdom and courage of those who came before.</p>',
            'date' => '2025-08-28',
            'category' => '最新消息',
        ],
        [
            'title' => '赤柱戰俘營遺址修復工程竣工',
            'title_en' => 'Restoration of the Stanley Prisoner-of-War Camp Site Completed',
            'summary' => '經過逾一年的精心修復，赤柱戰俘營遺址修復工程正式竣工，保衛香港運動感謝各界捐款支持，遺址將開放予公眾參觀。',
            'summary_en' => 'After more than a year of careful restoration, work on the Stanley prisoner-of-war camp site is now complete. The Defence of Hong Kong Movement thanks donors for their support, and the site will be opened to the public.',
            'body' => '<p>保衛香港運動宣布，赤柱戰俘營遺址的修復工程已於本周正式竣工，歷時逾一年，耗資港幣三百萬元，全數由社會各界捐款支持。</p><p>修復工程包括加固現有建築結構、重新整理展覽設施及改善無障礙通道，同時新增多媒體互動展覽，讓參觀者更直觀地了解戰俘營的歷史。遺址將於下月起正式對外開放，免費供公眾參觀。</p><p>本會對所有慷慨捐款的市民及機構表示衷心感謝，並承諾繼續盡力保育香港的戰時歷史遺址，讓後人有機會親身感受這段歷史。</p>',
            'body_en' => '<p>The Defence of Hong Kong Movement has announced that restoration of the Stanley prisoner-of-war camp site was officially completed this week. Spanning more than a year and costing HK$3 million, the project was funded entirely by community donations.</p><p>The restoration included reinforcing the existing building structures, reorganising exhibition facilities and improving barrier-free access, as well as adding a new multimedia interactive exhibition to give visitors a more vivid understanding of the camp\'s history. The site will officially open to the public next month, free of charge.</p><p>The association extended its heartfelt thanks to all the individuals and organisations who donated generously, and pledged to continue its efforts to conserve Hong Kong\'s wartime historical sites so that future generations may experience this history first-hand.</p>',
            'date' => '2025-07-15',
            'category' => '最新消息',
        ],
        [
            'title' => '保衛香港運動舉辦國際歷史研討會',
            'title_en' => 'Defence of Hong Kong Movement Hosts International History Symposium',
            'summary' => '本會將聯同英國、加拿大及澳洲等地學術機構，於香港舉辦為期三天的國際歷史研討會，聚焦香港保衛戰的多元視角與全球意義。',
            'summary_en' => 'In partnership with academic institutions in the United Kingdom, Canada and Australia, the association will host a three-day international history symposium in Hong Kong, focusing on diverse perspectives and the global significance of the Battle of Hong Kong.',
            'body' => '<p>保衛香港運動宣布，將於十一月下旬在香港大學舉辦「香港保衛戰：跨國視野與歷史再探」國際歷史研討會，為期三天，誠邀各地學者共同參與。</p><p>是次研討會將匯聚來自英國、加拿大、澳洲、日本及香港的歷史學者，從多元角度探討香港保衛戰的歷史意義、士兵經歷及戰後影響。研討會設有公開場次，歡迎公眾免費出席聆聽。</p><p>主辦單位表示，透過學術交流，可以豐富對這段歷史的理解，並促進各地保育機構之間的合作，共同守護這段珍貴的歷史記憶。有意參與者可透過本會網站進行登記。</p>',
            'body_en' => '<p>The Defence of Hong Kong Movement has announced it will host a three-day international history symposium, "The Battle of Hong Kong: Transnational Perspectives and Historical Re-examination," at the University of Hong Kong in late November, warmly inviting scholars from around the world to take part.</p><p>The symposium will bring together historians from the United Kingdom, Canada, Australia, Japan and Hong Kong to explore the historical significance of the Battle of Hong Kong, soldiers\' experiences and its postwar impact from multiple perspectives. Public sessions will be held, and members of the public are welcome to attend free of charge.</p><p>The organisers said that academic exchange can enrich understanding of this history and foster cooperation among conservation organisations worldwide to safeguard this precious historical memory. Those interested can register via the association\'s website.</p>',
            'date' => '2025-06-30',
            'category' => '活動通知',
        ],
    ];

    public function run(): void
    {
        Storage::disk('public')->makeDirectory('press-releases/featured-images');

        $categoryModels = [];
        foreach ($this->categories as $category) {
            $categoryModels[$category['name']] = PressReleaseCategory::firstOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name'], 'name_en' => $category['name_en']],
            );
        }

        foreach ($this->pressReleases as $index => $data) {
            $featuredImagePath = $this->downloadImage(
                "https://picsum.photos/seed/bhk-pr-{$index}/800/600",
                "press-releases/featured-images/seed-{$index}.jpg"
            );

            PressRelease::create([
                'press_release_category_id' => $categoryModels[$data['category']]->id,
                'title' => $data['title'],
                'title_en' => $data['title_en'],
                'slug' => Str::slug($data['title_en']).'-'.($index + 1),
                'summary' => $data['summary'],
                'summary_en' => $data['summary_en'],
                'date' => $data['date'],
                'featured_image' => $featuredImagePath,
                'body' => $data['body'],
                'body_en' => $data['body_en'],
                'is_publish' => true,
            ]);
        }
    }

    private function downloadImage(string $url, string $storagePath): string
    {
        $response = Http::timeout(15)->get($url);

        Storage::disk('public')->put($storagePath, $response->body());

        return $storagePath;
    }
}
