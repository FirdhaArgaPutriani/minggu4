<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('article')->insert([
            'title'     =>'Pengertian Web',
            'image'     =>'https://via.placeholder.com/640x480.png/00ff77?text=Pengertian',
            'content'   =>'Website adalah sebuah kumpulan halaman yang berisi informasi tertentu dan dapat diakses oleh banyak orang melalui internet. Website dapat dibuka dengan menuliskan URL atau alamat website di browser.'
        ]);

        DB::table('article')->insert([
            'title'     =>'Jenis Web',
            'image'     =>'https://via.placeholder.com/640x480.png/00ff77?text=Jenis',
            'content'   =>'Jenis website yang hanya bisa menampilkan informasi tetap alias bersifat tidak berubah disebut <b>website statis</b>. Sementara, kalau website menampilkan informasi yang berubah-ubah disebut dengan <b>website dinamis</b>.'
        ]); */

        \App\Models\Article::factory()->count(10)->create();
    }
}
