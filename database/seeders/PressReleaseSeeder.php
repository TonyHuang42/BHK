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
    /** @var array<int, array{name: string, slug: string}> */
    private array $categories = [
        ['name' => '最新消息', 'slug' => 'latest-news'],
        ['name' => '活動通知', 'slug' => 'events'],
        ['name' => '媒體報導', 'slug' => 'media-coverage'],
    ];

    /** @var array<int, array{title: string, summary: string, body: string, date: string, category: string}> */
    private array $pressReleases = [
        [
            'title' => '保衛香港運動舉辦年度紀念晚宴',
            'summary' => '保衛香港運動將於本月底舉辦年度紀念晚宴，邀請社會各界人士共同緬懷先烈，傳承香港抗戰精神，場面預計相當隆重。',
            'body' => '<p>保衛香港運動將於本月底在香港會議展覽中心舉辦年度紀念晚宴，邀請社會各界人士共同出席，緬懷在香港保衛戰中英勇犧牲的先烈。</p><p>是次晚宴以「薪火相傳」為主題，旨在喚起市民對這段珍貴歷史的關注，讓下一代了解先輩的奮鬥與犧牲。晚宴將設有歷史圖片展覽、紀錄片放映及嘉賓分享環節。</p><p>主辦單位表示，保存歷史記憶是每一位香港市民的責任，希望透過是次活動，凝聚社會各界力量，共同為保育本地歷史文化作出貢獻。</p>',
            'date' => '2025-11-20',
            'category' => '活動通知',
        ],
        [
            'title' => '香港保衛戰文獻捐贈儀式圓滿舉行',
            'summary' => '本會成功接收一批珍貴的香港保衛戰原始文獻，包括日記、信件及軍事地圖，將供公眾研究及展覽之用，意義重大。',
            'body' => '<p>保衛香港運動於上周舉行珍貴文獻捐贈儀式，成功接收一批來自英國及加拿大的香港保衛戰原始文獻，包括士兵日記、家書及珍貴軍事地圖。</p><p>捐贈者為已故士兵的後人，他們表示希望藉此機會，讓這批文獻回歸香港，讓更多人了解先人的英勇事蹟。本會主席於儀式上代表接收，並承諾妥善保存及公開展示。</p><p>這批文獻將於下月起在本會設立的歷史陳列室公開展覽，並同步數碼化，供學術研究人員免費查閱，進一步推動本地歷史研究。</p>',
            'date' => '2025-10-05',
            'category' => '最新消息',
        ],
        [
            'title' => '《守護香江》紀錄片正式公映',
            'summary' => '由本會協助製作的歷史紀錄片《守護香江》正式於各大院線公映，全面紀錄香港保衛戰的歷史經過，獲得社會各界好評。',
            'body' => '<p>由保衛香港運動協助製作的歷史紀錄片《守護香江》今日正式於全港各大院線公映，吸引大批市民入場觀看，首映反應熱烈。</p><p>紀錄片歷時三年製作，走訪英國、加拿大、澳洲及香港等地，訪問多位曾親歷香港保衛戰的老兵及其後人，並結合珍貴歷史影像，全面重現一九四一年十二月的歷史事件。</p><p>導演表示，希望透過電影語言，讓年輕一代感受到當年守衛香港的士兵及平民的勇氣與堅毅，並對這段重要歷史有更深刻的認識和反思。</p>',
            'date' => '2025-09-12',
            'category' => '媒體報導',
        ],
        [
            'title' => '本會獲政府撥款資助歷史教育計劃',
            'summary' => '保衛香港運動獲得政府文化體育及旅遊局撥款資助，將於全港多所中學推行香港保衛戰歷史教育計劃，預計惠及逾萬名學生。',
            'body' => '<p>保衛香港運動宣布，成功獲得文化體育及旅遊局撥款資助，金額達港幣一百二十萬元，用於推行「香港保衛戰校園歷史教育計劃」。</p><p>計劃將於下學年起在全港三十所中學推行，內容包括歷史講座、互動工作坊及實地參觀等，預計共有逾一萬名學生受惠。本會將聯同多位歷史學者共同設計課程，確保內容準確嚴謹。</p><p>本會執行總監表示，歷史教育是承傳集體記憶的重要一環，期望透過是次計劃，讓香港年輕一代對本地歷史有更全面的認識，並從中汲取前人的智慧與勇氣。</p>',
            'date' => '2025-08-28',
            'category' => '最新消息',
        ],
        [
            'title' => '赤柱戰俘營遺址修復工程竣工',
            'summary' => '經過逾一年的精心修復，赤柱戰俘營遺址修復工程正式竣工，保衛香港運動感謝各界捐款支持，遺址將開放予公眾參觀。',
            'body' => '<p>保衛香港運動宣布，赤柱戰俘營遺址的修復工程已於本周正式竣工，歷時逾一年，耗資港幣三百萬元，全數由社會各界捐款支持。</p><p>修復工程包括加固現有建築結構、重新整理展覽設施及改善無障礙通道，同時新增多媒體互動展覽，讓參觀者更直觀地了解戰俘營的歷史。遺址將於下月起正式對外開放，免費供公眾參觀。</p><p>本會對所有慷慨捐款的市民及機構表示衷心感謝，並承諾繼續盡力保育香港的戰時歷史遺址，讓後人有機會親身感受這段歷史。</p>',
            'date' => '2025-07-15',
            'category' => '最新消息',
        ],
        [
            'title' => '保衛香港運動舉辦國際歷史研討會',
            'summary' => '本會將聯同英國、加拿大及澳洲等地學術機構，於香港舉辦為期三天的國際歷史研討會，聚焦香港保衛戰的多元視角與全球意義。',
            'body' => '<p>保衛香港運動宣布，將於十一月下旬在香港大學舉辦「香港保衛戰：跨國視野與歷史再探」國際歷史研討會，為期三天，誠邀各地學者共同參與。</p><p>是次研討會將匯聚來自英國、加拿大、澳洲、日本及香港的歷史學者，從多元角度探討香港保衛戰的歷史意義、士兵經歷及戰後影響。研討會設有公開場次，歡迎公眾免費出席聆聽。</p><p>主辦單位表示，透過學術交流，可以豐富對這段歷史的理解，並促進各地保育機構之間的合作，共同守護這段珍貴的歷史記憶。有意參與者可透過本會網站進行登記。</p>',
            'date' => '2025-06-30',
            'category' => '活動通知',
        ],
    ];

    public function run(): void
    {
        Storage::disk('public')->makeDirectory('press-releases/thumbnails');

        $categoryModels = [];
        foreach ($this->categories as $category) {
            $categoryModels[$category['name']] = PressReleaseCategory::firstOrCreate(
                ['slug' => $category['slug']],
                ['name' => $category['name']],
            );
        }

        foreach ($this->pressReleases as $index => $data) {
            $thumbnailPath = $this->downloadImage(
                "https://picsum.photos/seed/bhk-pr-{$index}/800/600",
                "press-releases/thumbnails/seed-{$index}.jpg"
            );

            PressRelease::create([
                'press_release_category_id' => $categoryModels[$data['category']]->id,
                'title' => $data['title'],
                'slug' => Str::slug($data['title']).'-'.($index + 1),
                'summary' => $data['summary'],
                'date' => $data['date'],
                'thumbnail' => $thumbnailPath,
                'body' => $data['body'],
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
