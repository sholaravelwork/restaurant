<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 8,
                'name' => 'カチョ・エ・ペペ',
                'price' => '830',
                'img' => '20211230_231310_45143200.brand_dish_icon_3190.jpg',
                'expla' => 'チーズと黒胡椒のシンプルなスパゲッティでローマの名物パスタのひとつ。 たっぷりの削りたてチーズを絡めてお召し上がりください。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 21:40:08',
                'updated_at' => '2021-12-30 23:13:10',
            ),
            1 => 
            array (
                'id' => 9,
                'name' => '【生パスタ】ジェノベーゼクリーム',
                'price' => '960',
                'img' => '20211230_222537_55290000.brand_dish_icon_1973.jpg',
                'expla' => '濃厚なクリームソースに生パスタは相性抜群、ジェノベーゼの風味を存分に味わえます。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 21:46:03',
                'updated_at' => '2021-12-30 22:25:37',
            ),
            2 => 
            array (
                'id' => 10,
                'name' => '海老のトマトクリームソース',
                'price' => '830',
                'img' => '20211230_215756_96553100.brand_dish_icon_1980.jpg',
                'expla' => '少し酸味のあるトマトクリームソースに、濃厚で上品な甘さのエビがよく合います。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 21:57:57',
                'updated_at' => '2021-12-30 21:57:57',
            ),
            3 => 
            array (
                'id' => 11,
                'name' => 'ぺぺたま',
                'price' => '760',
                'img' => '20211230_215904_51564600.brand_dish_icon_3182.jpg',
                'expla' => '和風テイストのペペロンチーノに、卵を絡めた生パスタ。 やみつきになること間違いなし!',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 21:59:04',
                'updated_at' => '2021-12-30 21:59:04',
            ),
            4 => 
            array (
                'id' => 12,
                'name' => '旨辛アラビアータ',
                'price' => '660',
                'img' => '20211230_215951_36475400.brand_dish_icon_3183.jpg',
                'expla' => '旨辛～いサクサク食感のシーズニングをたっぷりとトッピング! オリジナルのアラビアータに仕上げています。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 21:59:51',
                'updated_at' => '2021-12-30 21:59:51',
            ),
            5 => 
            array (
                'id' => 13,
                'name' => '濃厚カルボナーラ',
                'price' => '780',
                'img' => '20211230_220123_57388600.brand_dish_icon_3186.jpg',
                'expla' => 'マイルドな卵をベースにした濃厚ソースに、 パルメザンチーズをトッピングしてコク旨!な仕上がりです。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 22:01:23',
                'updated_at' => '2021-12-30 22:01:23',
            ),
            6 => 
            array (
                'id' => 14,
                'name' => 'フォンデュ・チーズミート',
                'price' => '500',
                'img' => '20211230_220200_30329000.brand_dish_icon_3188.jpg',
                'expla' => 'ミートソーススパゲッティにとろーりフォンデュチーズソースをかける至福!',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 22:02:00',
                'updated_at' => '2021-12-30 22:02:00',
            ),
            7 => 
            array (
                'id' => 15,
                'name' => '海老とモッツァレラチーズの明太クリーム',
                'price' => '860',
                'img' => '20211230_222750_46030100.brand_dish_icon_3190.jpg',
                'expla' => 'モッツァレラチーズの濃厚な味わいと海老のプリプリ食感が 明太クリームとベストマッチ',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 22:27:50',
                'updated_at' => '2021-12-30 22:27:50',
            ),
            8 => 
            array (
                'id' => 16,
                'name' => 'ソイミートボロネーゼ',
                'price' => '730',
                'img' => '20211230_222929_44737700.brand_dish_icon_1981.jpg',
                'expla' => '大豆ミートを使用、豚ひき肉比較でカロリー75%カットのヘルシーパスタ。',
                'genre' => 'パスタ',
                'created_at' => '2021-12-30 22:29:29',
                'updated_at' => '2021-12-30 22:29:29',
            ),
            9 => 
            array (
                'id' => 17,
            'name' => 'カジュアルプラン(2時間飲み放題付き)',
                'price' => '2700',
                'img' => '20211231_123412_67914700.brand_dish_icon_1607.jpg',
                'expla' => 'お一人様　3,000円　[税込]
【全7品】
-----------------------------------------------
●前菜4種盛り合わせ
※仕入れ状況により内容は変更となる場合がございます。

●ベーコンと温泉卵のシーザーサラダ
●フライ盛り合わせ
●チーズフォンデュ
●選べるピッツァ(下記よりお一つお選びください)
　・マルゲリータ
　・ベーコンときのこのソース
　・しらすと大葉
　・イタリアンサラミ
　・ツナマヨ&コーン
●若鶏のクリームチーズソース
●選べるパスタ(下記よりお一つお選びください)
　・モッツアレラチーズとバジルのトマトソース
　・濃厚カルボナーラ
　・きのことベーコンの和風バター醤油
　・あさりとルッコラのペペロンチーノ
　・しらすとルッコラのペペロンチーノ
-----------------------------------------------

※写真は4人前です。',
                'genre' => 'コース',
                'created_at' => '2021-12-30 22:52:59',
                'updated_at' => '2021-12-31 12:34:12',
            ),
            10 => 
            array (
                'id' => 18,
                'name' => '【プレミオ／フルコース】',
                'price' => '2200',
                'img' => '20211231_164907_41912900.menu_lunch_1811.png',
                'expla' => '【前菜】
鶏胸肉とオレンジのアグロドルチェ
【スープ】
本日のおすすめスープ
【パスタ】選べるパスタ＜8種より1品お選びください。＞
①カルボナーラ　スパゲッティ
②小海老とブロッコリーのクリーム　スパゲッティ　グラナパダーノ添え
③牛ラグーとモッツアレラチーズのスパゲッティ　他全8種
≫今月のパスタはこちら
【魚料理】
鮮魚のパン粉のせ焼き　トマトのクリームソース
【肉料理】
スモークした豚肩ロースのアロースト　人参のソース
【デザート】
※選べるドルチェ7種類から3品お選びください。
≫今月のドルチェはこちら
【パン】
パーネビアンカ＆本日のフォカッチャ
【お飲み物】
コーヒー or 紅茶 or ハーブティー
　',
                'genre' => 'ランチ',
                'created_at' => '2021-12-31 12:27:57',
                'updated_at' => '2021-12-31 16:49:07',
            ),
            11 => 
            array (
                'id' => 19,
                'name' => '【1月限定】今月のパスタ&リゾット',
                'price' => '2400',
                'img' => '20211231_123007_88801600.menu_lunch_1911.jpg',
                'expla' => '【1月限定】今月のパスタ&リゾット
フェアランチやパスタランチの選べるパスタ、今月のラインナップです。
●【チーズパスタフェア】PASTA　パスタ
・濃厚カルボナーラビアンカ
・小海老とブロッコリーのクリームパスタ　グラナパダーノ添え
・牛ラグーとモッツアレラチーズのスパゲッティ
●【クリスマスパスタフェア】Rissotto　リゾット
・チーズのクリーミーリゾット　チーズのチュイル添え
　
●PASTA　手打ちパスタ
・魚介とブラックオリーブ　アンチョビのタリオリーニ
　
●PASTA　パスタ
・自家製パンチェッタとオニオンのトマトスパゲッティ
・若鶏と白菜のスパゲッティ　柚子風味
・真鱈と寒締め法蓮草のスパゲッティ
　
★パスタ　ハーフ&ハーフ（＋330円）
パスタまたはリゾットからお好きな2種をお選びいただけます。',
                'genre' => 'ランチ',
                'created_at' => '2021-12-31 12:30:07',
                'updated_at' => '2021-12-31 12:30:07',
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'シェフのスペシャリテランチ',
                'price' => '2970',
                'img' => '20211231_123100_29434100.lunch_gastronomia.png',
                'expla' => '[1月のメニュー]
【前菜】
鮮魚とムール貝のトルタ見立て　トマトのドレッシング
【スープ】
本日のおすすめスープ
【選べるパスタ】
8種より1品お選びください。
≫今月のパスタはこちら
【魚料理】
鮮魚の軽い煮込み　こぶみかん風味
【肉料理】
合鴨胸肉のアロースト　バルサミコソース
【ドルチェ】いずれかお選びください。
旬果物を使ったシェフおすすめドルチェ
または、アップルチーズタルトとバニラジェラート
または、選べるドルチェ(3品)
【パン】
パーネビアンカ&本日のフォカッチャ
【お飲み物】
コーヒー or 紅茶 or ハーブティー
　
※上記は当月の一例です。メニュー内容は、ご予約状況や仕入れにあわせて変更になる場合がございます。
※メニュー内容はお気軽にお問い合わせ下さい。',
                'genre' => 'ランチ',
                'created_at' => '2021-12-31 12:31:00',
                'updated_at' => '2021-12-31 12:31:00',
            ),
            13 => 
            array (
                'id' => 21,
            'name' => 'スタンダードプラン(2時間飲み放題付き)',
                'price' => '3000',
                'img' => '20211231_123504_25046700.brand_dish_icon_1608.jpg',
                'expla' => 'お一人様　3,000円　[税込]
【全7品】
-----------------------------------------------
●前菜4種盛り合わせ
※仕入れ状況により内容は変更となる場合がございます。

●ベーコンと温泉卵のシーザーサラダ
●フライ盛り合わせ
●チーズフォンデュ
●選べるピッツァ(下記よりお一つお選びください)
　・マルゲリータ
　・ベーコンときのこのソース
　・しらすと大葉
　・イタリアンサラミ
　・ツナマヨ&コーン
●若鶏のクリームチーズソース
●選べるパスタ(下記よりお一つお選びください)
　・モッツアレラチーズとバジルのトマトソース
　・濃厚カルボナーラ
　・きのことベーコンの和風バター醤油
　・あさりとルッコラのペペロンチーノ
　・しらすとルッコラのペペロンチーノ
-----------------------------------------------

※写真は4人前です。',
                'genre' => 'コース',
                'created_at' => '2021-12-31 12:35:04',
                'updated_at' => '2021-12-31 12:35:04',
            ),
            14 => 
            array (
                'id' => 22,
            'name' => 'プレミアムプラン(2時間飲み放題付き)',
                'price' => '3500',
                'img' => '20211231_123553_64541300.brand_dish_icon_1609.jpg',
                'expla' => 'お一人様　3,500円　[税込]
【全8品】
-----------------------------------------------
●前菜4種盛り合わせ
※仕入れ状況により内容は変更となる場合がございます。

●ベーコンと温泉卵のシーザーサラダ
●フライ盛り合わせ
●チーズフォンデュ
●選べるピッツァ(下記よりお一つお選びください)
　・マルゲリータ
　・ベーコンときのこのソース
　・しらすと大葉
　・イタリアンサラミ
　・ツナマヨ&コーン
●若鶏のクリームチーズソース
●選べるパスタ(下記よりお一つお選びください)
　・モッツアレラチーズとバジルのトマトソース
　・濃厚カルボナーラ
　・きのことベーコンの和風バター醤油
　・あさりとルッコラのペペロンチーノ
　・しらすとルッコラのペペロンチーノ
●ドルチェ2種盛り合わせ
-----------------------------------------------

※写真は4人前です。',
                'genre' => 'コース',
                'created_at' => '2021-12-31 12:35:53',
                'updated_at' => '2021-12-31 12:35:53',
            ),
            15 => 
            array (
                'id' => 23,
                'name' => 'ワイン各種',
                'price' => '990',
                'img' => '20211231_130228_77433600.wine.jpg',
                'expla' => 'ホームページには「990円〜」の表現で説明。',
                'genre' => 'ドリンク',
                'created_at' => '2021-12-31 13:00:04',
                'updated_at' => '2021-12-31 13:02:28',
            ),
            16 => 
            array (
                'id' => 24,
                'name' => 'スパーリングワイン各種',
                'price' => '990',
                'img' => '20211231_130936_69715200.spa.jpg',
                'expla' => 'ホームページには「990円〜」の表現で説明。',
                'genre' => 'ドリンク',
                'created_at' => '2021-12-31 13:01:01',
                'updated_at' => '2021-12-31 13:09:36',
            ),
            17 => 
            array (
                'id' => 25,
                'name' => 'ソフトドリンク各種',
                'price' => '250',
                'img' => '20211231_130431_46978700.soft.jpg',
                'expla' => 'ホームページには「250円〜」の表現で説明。',
                'genre' => 'ドリンク',
                'created_at' => '2021-12-31 13:03:15',
                'updated_at' => '2021-12-31 13:04:31',
            ),
            18 => 
            array (
                'id' => 27,
                'name' => 'サングリア各種',
                'price' => '800',
                'img' => '20211231_130537_19370700.brand_dish_icon_1316.jpg',
                'expla' => 'ホームページには「800円〜」の表現で説明。',
                'genre' => 'ドリンク',
                'created_at' => '2021-12-31 13:05:37',
                'updated_at' => '2021-12-31 13:05:37',
            ),
            19 => 
            array (
                'id' => 28,
                'name' => 'ビール各種',
                'price' => '550',
                'img' => '20211231_130603_47788000.brand_dish_icon_2180.jpg',
                'expla' => 'ホームページには「550円〜」の表現で説明。',
                'genre' => 'ドリンク',
                'created_at' => '2021-12-31 13:06:03',
                'updated_at' => '2021-12-31 13:06:03',
            ),
            20 => 
            array (
                'id' => 29,
                'name' => 'シェフおすすめフルコース1',
                'price' => '5780',
                'img' => '20211231_152934_53521300.menu_dinner_2201.jpg',
                'expla' => '【小前菜】
北あかりと小エビのカプチーノ　
【前菜】
軽く燻した真サバ　レンズ豆とシャンピニオンのサラダ　玉葱のピュレと香草
【前菜】
パテ・クルートと季節野菜のムスクラン　ラ・フランスと紅茶のメランジェを添えて
【スープ】
ポルチーニ茸と和栗のポタージュ　カカオのクランブルと共に
【魚料理】1品お選びください。
①スパイシーな穴子のフリットと根野菜のポトフ仕立て　
②活オマール海老のフランべ　パセリとニンニクの焦がしバターソース(+￥4,400／1尾　※3日前までの要予約)
【肉料理】1品お選びください。
①セニャンにした道産牛のタルタルステーキ　ジュ・ド・ロティ　じゃが芋のガレットと共に
②ハーブ香る道産牛フィレ肉と旬の野菜のココットオーブン焼き(+￥1,100／2名様より)
【アヴァンデセール】
【デザート】
熱々のチョコレートスフレとグラスバニラ
【プティフール】
【パン】
パン2種と自家製ホイップバター
【お飲み物】
コーヒー or 紅茶 or ハーブティー',
                'genre' => 'コース',
                'created_at' => '2021-12-31 15:28:45',
                'updated_at' => '2021-12-31 15:29:34',
            ),
            21 => 
            array (
                'id' => 30,
                'name' => 'シェフおすすめフルコース2',
                'price' => '5720',
                'img' => '20211231_153011_75097000.consa_sdc.jpg',
                'expla' => 'ROSSO NERO MENU
Lunch＆Dinner　スペシャルメニュー
牛フィレ肉のロースト　茄子のミルフィーユ仕立て　赤ワインソース　コンサドーレカラー風
　
ディナーコース　お一人様5,720円（税込）※2日前までの要予約
　
[今ならもれなく！]北海道コンサドーレ札幌の選手カードをプレゼント！
ディナーご利用のお客様に、お好きな選手の直筆サイン入り選手カードを1枚プレゼント！',
                'genre' => 'コース',
                'created_at' => '2021-12-31 15:30:11',
                'updated_at' => '2021-12-31 15:30:11',
            ),
            22 => 
            array (
                'id' => 31,
                'name' => 'シェフおすすめフルコース3',
                'price' => '8800',
                'img' => '20220109_150345_78612700.menu_dinner2_2110.jpg',
                'expla' => '【小前菜】
シェフからの最初の一皿
【冷前菜】
パテ・クルートと季節野菜のムスクラン　ラ・フランスと紅茶のメランジェを添えて
【温前菜】
フォアグラのポワレ　フルーツトマトのコンフィとビーツのピュレ
【スープ】
ポルチーニ茸と和栗のポタージュ　カカオのクランブルと共に
【魚料理】1品お選びください。
①のどぐろと根野菜のポトフ仕立て　シラントロの香りを添えて
②活オマール海老のフランベ　ソースアメリケーヌ(1尾　4,400円／3日前までに予約)
【肉料理】1品お選びください。
①仔羊ロースと香草のカダイフ包み焼き　マスタードソース　
②ハーブ香る道産牛フィレ肉と旬の野菜のココットオーブン焼き(+￥1,100／2名様より)
【アヴァンデセール】
【パティシェ特製デセール】または、【チーズ】どちらかお選びください。
①熱々のチョコレートスフレとグラスバニラ
②フロマージュ3種
【パン】
【お飲み物】
【プティフール】',
                'genre' => 'パスタ',
                'created_at' => '2021-12-31 15:31:01',
                'updated_at' => '2022-01-09 15:03:46',
            ),
        ));
        
        
    }
}