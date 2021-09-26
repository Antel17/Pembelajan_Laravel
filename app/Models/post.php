<?php

namespace App\Models;

class post
{
    private static $blog_post = [
        [
        "artikel"   =>"Judul Post Pertama",
        "slug"      =>"judul-post-pertama",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Kedua",
        "slug"      =>"judul-post-kedua",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
        [
        "artikel"   =>"Judul Post Ketiga",
        "slug"      =>"judul-post-ketiga",
        "author"    =>"Abdul Aziz",
        "body"      =>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, voluptates at nihil possimus ea veritatis inventore recusandae blanditiis mollitia fugit voluptate! Tempora explicabo dolores architecto, nisi iste commodi vel porro ipsum impedit dolorem nihil natus dolore voluptatem, itaque dicta sed veniam tempore magnam deserunt incidunt, quos odit velit mollitia soluta. Omnis, expedita! Sed a voluptas itaque ipsum harum, iusto libero asperiores quisquam quidem maiores, optio eos dolorem, consectetur sunt ipsam quam consequuntur assumenda cumque enim rem provident. Excepturi aliquid, harum possimus ipsum minima itaque, commodi animi voluptas quis, eum recusandae."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post -> firstWhere('slug',$slug);
    }
}
