<?php

declare(strict_types=1);

return [
    // Filament title-cases the singular/plural labels for display contexts
    // (navigation menu, page headings) but injects them raw into the
    // "New :label" create button. Keep lowercase here so the button reads
    // "New company" while titles render as "Company"/"Companies".
    'label' => 'công ty',
    'plural_label' => 'các công ty',
    'navigation_label' => 'Công ty',

    'fields' => [
        'name' => [
            'label' => 'Công ty',
        ],
        'account_owner' => [
            'label' => 'Chủ tài khoản',
        ],
        'account_owner_id' => [
            'label' => 'Chủ tài khoản',
        ],
        'created_by' => [
            'label' => 'Tạo bởi',
        ],
        'creator' => [
            'label' => 'Tạo bởi',
        ],
        'creation_source' => [
            'label' => 'Nguồn tạo',
        ],
        'created_at' => [
            'label' => 'Ngày tạo',
        ],
        'updated_at' => [
            'label' => 'Cập nhật lần cuối',
        ],
        'deleted_at' => [
            'label' => 'Ngày xóa',
        ],
    ],

    'pages' => [
        'list' => [
            'actions' => [
                'import' => [
                    'label' => 'Nhập công ty',
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
                    'logo' => [
                        'label' => '',
                    ],
                    'creator' => [
                        'label' => 'Tạo bởi',
                    ],
                    'account_owner' => [
                        'label' => 'Chủ tài khoản',
                    ],
                    'created_at' => [
                        'label' => 'Ngày tạo',
                    ],
                    'updated_at' => [
                        'label' => 'Cập nhật lần cuối',
                    ],
                ],
            ],
        ],
    ],

    'relation_managers' => [
        'people' => [
            'model_label' => 'người',
        ],
        'notes' => [
            'fields' => [
                'people' => [
                    'label' => 'Người',
                ],
            ],
        ],
        'tasks' => [
            'fields' => [
                'assignees' => [
                    'label' => 'Người được giao',
                ],
                'people' => [
                    'label' => 'Người',
                ],
                'created_at' => [
                    'label' => 'Tạo lúc',
                ],
            ],
        ],
    ],
];
