<?php

declare(strict_types=1);

return [
    'columns' => [
        'id' => 'ID',
        'team' => 'Không gian làm việc',
        'account_owner' => 'Chủ tài khoản',
        'creator' => 'Tạo bởi',
        'creation_source' => 'Nguồn tạo',
        'created_at' => 'Tạo lúc',
        'updated_at' => 'Cập nhật lúc',
        'company_name' => 'Tên công ty',
        'people_count' => 'Số lượng người',
        'opportunities_count' => 'Số lượng cơ hội',
        'opportunity_name' => 'Tên cơ hội',
        'company' => 'Công ty',
        'contact_person' => 'Người liên hệ',
        'notes_count' => 'Số lượng ghi chú',
        'tasks_count' => 'Số lượng công việc',
    ],

    'notifications' => [
        'completed' => [
            'company' => [
                'body' => 'Đã hoàn tất xuất dữ liệu công ty và :rows hàng được xuất.',
                'failed' => ':rows hàng không xuất được.',
            ],
            'note' => [
                'body' => 'Đã hoàn tất xuất dữ liệu ghi chú và :rows hàng được xuất.',
                'failed' => ':rows hàng không xuất được.',
            ],
            'opportunity' => [
                'body' => 'Đã hoàn tất xuất dữ liệu cơ hội và :rows hàng được xuất.',
                'failed' => ':rows hàng không xuất được.',
            ],
            'people' => [
                'body' => 'Đã hoàn tất xuất dữ liệu người dùng và :rows hàng được xuất.',
                'failed' => ':rows hàng không xuất được.',
            ],
            'task' => [
                'body' => 'Đã hoàn tất xuất dữ liệu công việc và :rows hàng được xuất.',
                'failed' => ':rows hàng không xuất được.',
            ],
        ],
    ],
];
