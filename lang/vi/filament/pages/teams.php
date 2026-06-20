<?php

declare(strict_types=1);

return [
    'create_team' => [
        'label' => 'Tạo Không gian làm việc',
        'steps' => [
            'workspace' => 'Không gian làm việc',
            'attribution' => 'Nguồn gốc',
            'use_case' => 'Mục đích sử dụng',
            'invite' => 'Mời',
        ],
        'actions' => [
            'continue' => 'Tiếp tục',
            'send_invites' => 'Gửi lời mời',
            'get_started' => 'Bắt đầu',
            'copy_invite_link' => 'Sao chép liên kết mời',
            'add_more' => 'Thêm',
        ],
        'form' => [
            'company_name' => [
                'label' => 'Tên công ty',
                'placeholder' => 'Acme Corp',
            ],
            'workspace_handle' => [
                'label' => 'Đường dẫn không gian làm việc',
                'helper_text' => 'Chỉ cho phép chữ cái viết thường, số và dấu gạch ngang.',
            ],
            'use_case_label' => 'Bạn sẽ sử dụng Relaticle cho mục đích gì?',
            'use_case_context_label' => 'Vui lòng cho chúng tôi biết thêm về mục đích sử dụng của bạn.',
            'invite_email_placeholder' => 'dongnghiep@congty.com',
            'invite_role_member' => 'Thành viên',
            'invite_role_admin' => 'Quản trị viên',
            'invite_table_column_email' => 'Email',
            'invite_table_column_role' => 'Vai trò',
        ],
        'notifications' => [
            'workspace_created' => [
                'title' => 'Đã tạo không gian làm việc',
                'body' => 'Không gian làm việc ":name" của bạn đã sẵn sàng.',
            ],
            'invite_link_copied' => [
                'title' => 'Đã sao chép liên kết mời',
                'body' => 'Hãy chia sẻ liên kết này với đồng đội của bạn. Bất kỳ ai có liên kết này đều có thể tham gia nhóm.',
            ],
            'complete_previous_steps' => [
                'title' => 'Vui lòng hoàn thành các bước trước đó',
                'body' => 'Hãy điền thông tin chi tiết về không gian làm việc và mục đích sử dụng của bạn trước khi tạo liên kết mời.',
            ],
            'some_invites_failed' => [
                'title' => 'Một số lời mời không thể gửi đi',
            ],
        ],
    ],
];
