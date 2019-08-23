<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[];
        for($i=1;$i<=30;$i++){
            $data[]=[
                'title'=>Str::random(20),
                'keyword'=>Str::random(30),
                'desc'=>Str::random(150),
                'remark'=>Str::random(300),
                'remark'=>Str::random(300),
                'content'=>Str::random(500),
                'created_at'=>date("Y/m/d H:i:s"),
                'updated_at'=>date("Y/m/d H:i:s"),
            ];
        }
        DB::table('articles ')->insert($data);
    }
}
