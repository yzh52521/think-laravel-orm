<?php
return [
    'default'     => env( 'database.driver','mysql' ),
    'connections' => [
        'mysql' => [
            // 数据库类型
            'driver'      => env( 'database.type','mysql' ),
            // 服务器地址
            'host'        => env( 'database.hostname','127.0.0.1' ),
            // 端口
            'port'        => env( 'database.port','3306' ),
            // 数据库名
            'database'    => env( 'database.database','' ),
            // 用户名
            'username'    => env( 'database.username','root' ),
            // 密码
            'password'    => env( 'database.password','' ),

            'unix_socket' => env( 'database.unix_socket','' ),
            // 数据库编码默认采用utf8mb4
            'charset'     => env( 'database.charset','utf8' ),
            // 数据库排序的规则默认采用utf8mb4_unicode_ci
            'collation'   => env( 'database.collation','utf8_unicode_ci' ),
            // 数据库表前缀
            'prefix'      => env( 'database.prefix','' ),
        ],
    ]
];