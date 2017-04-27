<?php
return [
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
        'blog' => [
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
        ],
        'orders' => [
            'title' => 'Orders',
            'link' => 'admin/orders',
            'active' => false,
            'icon' => 'fa fa-shopping-cart',
            'min_level' => 10,
            'children' => []
        ],
        'products' => [
            'title' => 'Products',
            'link' => 'admin/products',
            'active' => false,
            'icon' => 'fa fa-shopping-cart',
            'min_level' => 10,
            'children' => [
                [
                    'title' => 'Items',
                    'link' => 'admin/products/items',
                    'children' => [],
                ],
                [
                    'title' => 'Categories',
                    'link' => 'admin/products/categories',
                    'children' => [],
                ],
                [
                    'title' => 'Reviews',
                    'link' => 'admin/products/reviews',
                    'children' => [],
                ]
            ]
        ],
        'files' => [
            'title' => 'Files',
            'link' => 'admin/files',
            'active' => false,
            'icon' => 'fa fa-files-o',
            'min_level' => 10,
            'children' => []
        ],
        'users' => [
            'title' => 'Users',
            'link' => 'admin/users',
            'active' => false,
            'icon' => 'fa fa-users',
            'min_level' => 10,
            'children' => [
                [
                    'title' => 'Clients',
                    'link' => 'admin/users',
                    'children' => []
                ],
                [
                    'title' => 'Admins',
                    'link' => 'admin/admins',
                    'children' => []
                ]
            ]
        ]
    ]
];