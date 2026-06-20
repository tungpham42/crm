<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'ghi chú',
    'plural_label' => 'các ghi chú',
    'navigation_label' => 'Ghi chú',

    'fields' => [
        'title' => [
            'label' => 'Tiêu đề',
        ],
        'companies' => [
            'label' => 'Công ty',
        ],
        'people' => [
            'label' => 'Người',
        ],
        'creator' => [
            'label' => 'Tạo bởi',
        ],
        'created_at' => [
            'label' => 'Tạo lúc',
        ],
        'updated_at' => [
            'label' => 'Cập nhật lúc',
        ],
    ],

    'filters' => [
        'creation_source' => [
            'label' => 'Nguồn tạo',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Nhập ghi chú',
                ],
                'import_export' => [
                    'label' => 'Nhập / Xuất',
                ],
            ],
        ],
    ],
];
