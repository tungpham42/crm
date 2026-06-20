<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'cơ hội',
    'plural_label' => 'các cơ hội',
    'navigation_label' => 'Cơ hội',

    'fields' => [
        'name' => [
            'label' => 'Cơ hội',
            'placeholder' => 'Nhập tiêu đề cơ hội',
        ],
        'company_id' => [
            'label' => 'Công ty',
        ],
        'contact_id' => [
            'label' => 'Đầu mối liên hệ',
        ],
        'creator' => [
            'label' => 'Tạo bởi',
        ],
        'creation_source' => [
            'label' => 'Nguồn tạo',
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

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Nhập cơ hội',
                ],
                'import_export' => [
                    'label' => 'Nhập / Xuất',
                ],
            ],
        ],
        'view' => [
            'actions' => [
                'edit' => [
                    'label' => 'Chỉnh sửa',
                ],
                'copy_page_url' => [
                    'label' => 'Sao chép URL trang',
                ],
                'copy_record_id' => [
                    'label' => 'Sao chép ID bản ghi',
                ],
            ],
            'infolist' => [
                'fields' => [
                    'name' => [
                        'label' => '',
                    ],
                    'company' => [
                        'label' => 'Công ty',
                    ],
                    'contact' => [
                        'label' => 'Đầu mối liên hệ',
                    ],
                ],
            ],
        ],
    ],
];
