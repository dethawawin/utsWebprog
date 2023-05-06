<?php

namespace Database\Seeders;

use App\Models\Coffee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class CoffeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('coffees')->insert([
            //1. Espresso
            [
                'category_id' => 1,
                'coffee_name' => 'Caramel Macchiato',
                'coffee_price' => 62000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177837.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' => 'Cappucino',
                'coffee_price' => 49000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177603.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' =>'Caffè Americano',
                'coffee_price' => 37000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177928.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' => '‘Caffè Latte',
                'coffee_price' => 49000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648472503.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' =>'Flat White',
                'coffee_price' => 44000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648178389.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' => '‘Ristretto Bianco',
                'coffee_price' => 48000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648472253.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' => 'Caffè Mocha',
                'coffee_price' => 45000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648177734.jpg'
            ],
            [
                'category_id' => 1,
                'coffee_name' => 'Espresso Macchiato',
                'coffee_price' => 55000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648178152.jpg'
            ],

            //3. BREWED
            [
                'category_id' => 3,
                'coffee_name' => 'Freshly Brewed Coffee',
                'coffee_price' => 25000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648178862.jpg'

            ],
            [
                'category_id' => 3,
                'coffee_name' => 'Misto',
                'coffee_price' => 40000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648179267-Oq5iD5.jpg'
            ],
            [
                'category_id' => 3,
                'coffee_name' => 'Cold Brew',
                'coffee_price' => 45000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648179352-Yk4kf9.jpg'
            ],
            [
                'category_id' => 3,
                'coffee_name' => 'Vanilla Sweet Cream Cold Brew',
                'coffee_price' => 51000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648179505-K7epS0.jpg'
            ],
            [
                'category_id' => 3,
                'coffee_name' => 'Pistachio Cream Cold Brew',
                'coffee_price' => 55000,
                'coffee_img' => 'https://globalassets.starbucks.com/assets/00fc85c070d945f6a9ec2da22b68f50d.jpg?impolicy=1by1_wide_topcrop_630'
            ],
            [
                'category_id' => 3,
                'coffee_name' => 'Nitro Cold Brew',
                'coffee_price' => 51000,
                'coffee_img' => 'https://globalassets.starbucks.com/assets/8c5dcfa053504f85b3e7af2fa451346d.jpg?impolicy=1by1_wide_topcrop_630'
            ],

            // BLENDED
            [
                'category_id' => 2,
                'coffee_name' => 'Coffee Frappuccino',
                'coffee_price' => 43000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648475442-4BnsyW.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Caramel Frappuccino',
                'coffee_price' => 58000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648475765-7lUETw.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Java Chip Frappuccino',
                'coffee_price' => 58000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648476037-Y7jB1q.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Asian Dolce Frappuccino',
                'coffee_price' => 53000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648475951-WSeCLv.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Hazelnut Frappuccino',
                'coffee_price' => 43000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648475864-ckzfgC.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Dark Mocha Frappuccino',
                'coffee_price' => 58000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648477559-9hm3Tp.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Vanilla Cream Frappuccino',
                'coffee_price' => 58000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648478885-eRQupz.jpg'
            ],
            [
                'category_id' => 2,
                'coffee_name' => 'Caramel Cream Frappuccino',
                'coffee_price' => 53000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648478962-Ca1dfS.jpg'
            ],

            //OTHERS
            [
                'category_id' => 4,
                'coffee_name' => 'Green Tea Latte',
                'coffee_price' => 60000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648608925-JvAY3G.jpg'
            ],
            [
                'category_id' => 4,
                'coffee_name' => 'Earl Grey Tea Latte',
                'coffee_price' => 46000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648609130-BhvIDa.jpg'
            ],
            [
                'category_id' => 4,
                'coffee_name' => 'Chai Tea Latte',
                'coffee_price' => 44000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648609020-cJVeev.jpg'
            ],
            [
                'category_id' => 4,
                'coffee_name' => 'Black Tea Latte',
                'coffee_price' => 46000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648609224-STqtOv.jpg'
            ],
            [
                'category_id' => 4,
                'coffee_name' => 'Ice Shaken Lemonade Tea',
                'coffee_price' => 44000,
                'coffee_img' => 'https://starbucks-web-prod.oss-ap-southeast-5.aliyuncs.com/temporary/gallery/1648610879-3gFfdU.jpg'
            ],
            [
                'category_id' => 4,
                'coffee_name' => 'Signature Chocolate',
                'coffee_price' => 56000,
                'coffee_img' => 'https://www.starbucks.co.id/storage/image/temporary/summernote_image_1648480637.jpg'
            ],
        ]);

    }
}
