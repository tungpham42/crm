<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'công việc',
    'plural_label' => 'các công việc',
    'navigation_label' => 'Công việc',

    'fields' => [
        'assignees' => [
            'label' => 'Người được giao',
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
        'deleted_at' => [
            'label' => 'Xóa lúc',
        ],
    ],

    'filters' => [
        'assigned_to_me' => [
            'label' => 'Giao cho tôi',
        ],
        'creation_source' => [
            'label' => 'Nguồn tạo',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Nhập công việc',
                ],
                'import_export' => [
                    'label' => 'Nhập / Xuất',
                ],
            ],
        ],
    ],
];
