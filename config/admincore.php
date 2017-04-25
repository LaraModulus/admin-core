<?php
$menu = [
    /**
     * Admin Core menu
     */
    'menu' => [
        'dashboard' => [
            'title' => 'Dashboard',
            'link' => 'admin',
            'active' => false,
            'icon' => 'fa fa-home',
            'min_level' => 10,
            'children' => []
        ],
    ]
];
if(class_exists(LaraMod\Admin\Blog\AdminBlogServiceProvider::class)){
    $menu['blog'] = [
        'title' => 'Blog',
        'link' => 'admin/blog/posts',
        'active' => false,
        'icon' => 'fa fa-newspaper-o',
        'min_level' => 10,
        'children' => [
            [
                'title' => 'Posts',
                'link' => 'admin/blog/posts',
                'children' => [],
            ],
            [
                'title' => 'Categories',
                'link' => 'admin/blog/categories',
                'children' => [],
            ],
            [
                'title' => 'Comments',
                'link' => 'admin/blog/comments',
                'children' => [],
            ]
        ]
    ];
}
if(class_exists(LaraMod\Admin\Files\AdminFilesServiceProvider::class)) {
    $menu['files'] = [
        'title'     => 'Files',
        'link'      => 'admin/files',
        'active'    => false,
        'icon'      => 'fa fa-files-o',
        'min_level' => 10,
        'children'  => []
    ];
}
if(class_exists(LaraMod\Admin\Users\AdminUsersServiceProvider::class)) {
    $menu['users'] = [
        'title'     => 'Users',
        'link'      => 'admin/users',
        'active'    => false,
        'icon'      => 'fa fa-user',
        'min_level' => 10,
        'children'  => []
    ];
}
return $menu;