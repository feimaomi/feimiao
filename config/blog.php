<?php

return [
    'name' => "肥喵屋",
    'title' => "肥喵日常",
    'subtitle' => 'http://feimiao.xin',
    'description' => 'one:你好！   two:hi!',
    'author' => '肥喵君',
    'beian' => '粤ICP备18135786号',
    'gongxin' => 'www.miitbeian.gov.cn',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'public',
        'webpath' => '/storage/uploads',
    ],
    'contact_email' => env('MAIL_FROM_ADDRESS')
];