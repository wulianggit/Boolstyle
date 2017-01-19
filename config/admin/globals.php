<?php
return [
	// 自定义用户登录字段
	'loginField' => 'username',

	// 图片上传
    'uploads' => [
        'extension' => ['jpg', 'png', 'gif'],
    ],

    // 分页默认开始以及每页显示条数
    'page' => [
        'start' => 1,
        'limit' => 10,
    ],

    // 七牛上传图片路径
    'imagePath' => 'boolStyle/images/'
];
