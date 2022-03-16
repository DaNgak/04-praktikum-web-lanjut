<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "title" => "Judul Blog Satu 111",
                "image" => "tm-img-310x180-1.jpg",
                "slug" => "judul-blog-satu",
                "author" => "Aldi Dwi Kusuma",
                "content_cover" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius laborum dicta adipisci porro consectetur.",
                "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ducimus. Corporis delectus ullam voluptate? Nisi, temporibus odio est at odit repudiandae recusandae ipsam similique animi</p><p>Aliquam voluptas ipsum sint aliquid officiis autem reprehenderit, provident adipisci porro aspernatur, earum ullam iste. </p><p>Voluptatem commodi architecto ratione magni reprehenderit perspiciatis laudantium eius blanditiis qui veritatis non repellendus delectus officiis voluptates quibusdam, eligendi voluptatum ipsam vel quas ab labore esse.</p><p>At deserunt sint eum inventore vel magni earum autem modi. Ducimus nam laborum cupiditate nisi inventore blanditiis laudantium, </p><p>amet ipsam nesciunt commodi quia enim doloribus veritatis beatae quibusdam incidunt voluptates expedita quod dolorem recusandae?</p>",
                "category_id" => mt_rand(1, 4)
            ],
            [
                "title" => "Judul Blog Dua 222",
                "image" => "tm-img-310x180-2.jpg",
                "slug" => "judul-blog-dua",
                "author" => "Aria Pratama E",
                "content_cover" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius laborum dicta adipisci porro consectetur.",
                "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ducimus. Corporis delectus ullam voluptate? Nisi, temporibus odio est at odit repudiandae recusandae ipsam similique animi</p><p>Aliquam voluptas ipsum sint aliquid officiis autem reprehenderit, provident adipisci porro aspernatur, earum ullam iste. </p><p>Voluptatem commodi architecto ratione magni reprehenderit perspiciatis laudantium eius blanditiis qui veritatis non repellendus delectus officiis voluptates quibusdam, eligendi voluptatum ipsam vel quas ab labore esse.</p><p>At deserunt sint eum inventore vel magni earum autem modi. Ducimus nam laborum cupiditate nisi inventore blanditiis laudantium, </p><p>amet ipsam nesciunt commodi quia enim doloribus veritatis beatae quibusdam incidunt voluptates expedita quod dolorem recusandae?</p>",
                "category_id" => mt_rand(1, 4)
            ],
            [
                "title" => "Judul Blog Tiga 333",
                "image" => "tm-img-310x180-3.jpg",
                "slug" => "judul-blog-tiga",
                "author" => "Aripin",
                "content_cover" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius laborum dicta adipisci porro consectetur.",
                "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ducimus. Corporis delectus ullam voluptate? Nisi, temporibus odio est at odit repudiandae recusandae ipsam similique animi</p><p>Aliquam voluptas ipsum sint aliquid officiis autem reprehenderit, provident adipisci porro aspernatur, earum ullam iste. </p><p>Voluptatem commodi architecto ratione magni reprehenderit perspiciatis laudantium eius blanditiis qui veritatis non repellendus delectus officiis voluptates quibusdam, eligendi voluptatum ipsam vel quas ab labore esse.</p><p>At deserunt sint eum inventore vel magni earum autem modi. Ducimus nam laborum cupiditate nisi inventore blanditiis laudantium, </p><p>amet ipsam nesciunt commodi quia enim doloribus veritatis beatae quibusdam incidunt voluptates expedita quod dolorem recusandae?</p>",
                "category_id" => mt_rand(1, 4)
            ],
            [
                "title" => "Judul Blog Empat 444",
                "image" => "tm-img-310x180-4.jpg",
                "slug" => "judul-blog-empat",
                "author" => "Bengak",
                "content_cover" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius laborum dicta adipisci porro consectetur.",
                "content" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, ducimus. Corporis delectus ullam voluptate? Nisi, temporibus odio est at odit repudiandae recusandae ipsam similique animi</p><p>Aliquam voluptas ipsum sint aliquid officiis autem reprehenderit, provident adipisci porro aspernatur, earum ullam iste. </p><p>Voluptatem commodi architecto ratione magni reprehenderit perspiciatis laudantium eius blanditiis qui veritatis non repellendus delectus officiis voluptates quibusdam, eligendi voluptatum ipsam vel quas ab labore esse.</p><p>At deserunt sint eum inventore vel magni earum autem modi. Ducimus nam laborum cupiditate nisi inventore blanditiis laudantium, </p><p>amet ipsam nesciunt commodi quia enim doloribus veritatis beatae quibusdam incidunt voluptates expedita quod dolorem recusandae?</p>",
                "category_id" => mt_rand(1, 4)
            ]
        ]);
    }
}
