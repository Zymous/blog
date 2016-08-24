<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'link_name' => '新浪网',
                'link_title' => '国内最好网站门户',
                'link_url' => 'http://www.sina.com',
                'link_order' => 1,
            ],
            [
                'link_name' => '搜狐网',
                'link_title' => '国内次好网站门户',
                'link_url' => 'http://www.sohu.com',
                'link_order' => 2,
            ],
        ];
        DB::table('links')->insert($data);
    }
}
