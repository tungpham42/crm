<?php

declare(strict_types=1);

return [
    // Lowercase singular/plural so Filament's "New :label" button reads naturally.
    'label' => 'người',
    'plural_label' => 'mọi người',
    'navigation_label' => 'Người',

    'fields' => [
        'name' => [
            'label' => 'Người',
        ],
        'company' => [
            'label' => 'Công ty',
        ],
        'company_id' => [
            'label' => 'Công ty',
        ],
        'account_owner_id' => [
            'label' => 'Chủ tài khoản',
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
                    'label' => 'Nhập người',
                ],
                'import_export' => [
                    'label' => 'Nhập / Xuất',
                ],
                'create_company' => [
                    'label' => 'Tạo công ty',
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
                    'avatar' => [
                        'label' => '',
                    ],
                    'name' => [
                        'label' => '',
                    ],
                    'company' => [
                        'label' => 'Công ty',
                    ],
                ],
            ],
        ],
    ],
];
