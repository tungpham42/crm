<?php

declare(strict_types=1);

return [
    'title' => 'Mã truy cập',

    'sections' => [
        'create' => [
            'title' => 'Tạo mã truy cập',
            'description' => 'Mã truy cập cho phép các dịch vụ của bên thứ ba và trợ lý AI xác thực với ứng dụng của chúng tôi thay mặt cho bạn.',
        ],
        'manage' => [
            'title' => 'Quản lý mã truy cập',
            'description' => 'Bạn có thể xóa bất kỳ mã nào hiện có nếu chúng không còn cần thiết nữa.',
        ],
    ],

    'form' => [
        'name' => 'Tên mã',
        'team' => 'Không gian làm việc',
        'expiration' => 'Hết hạn',
        'expiration_placeholder' => 'Chọn ngày hết hạn...',
        'permissions' => 'Quyền hạn',
        'token' => 'Mã truy cập',
    ],

    'table' => [
        'columns' => [
            'name' => 'Tên',
            'team' => 'Không gian làm việc',
            'abilities' => 'Quyền hạn',
            'expires_at' => 'Hết hạn',
            'last_used_at' => 'Sử dụng lần cuối',
            'created_at' => 'Đã tạo',
        ],
        'placeholders' => [
            'no_team' => '—',
            'never' => 'Không bao giờ',
        ],
    ],

    'actions' => [
        'create' => 'Tạo',
    ],

    'permissions' => [
        'all' => 'Tất cả',
    ],

    'modals' => [
        'show_token' => [
            'title' => 'Mã truy cập',
            'description' => 'Vui lòng sao chép mã truy cập mới của bạn. Vì lý do bảo mật, mã này sẽ không được hiển thị lại.',
            'cancel_label' => 'Đóng',
            'copy_to_clipboard_tooltip' => 'Sao chép vào khay nhớ tạm',
            'copied_tooltip' => 'Đã sao chép!',
        ],
        'permissions' => [
            'title' => 'Quyền của mã truy cập',
            'action_label' => 'Quyền hạn',
        ],
        'delete' => [
            'title' => 'Xóa mã truy cập',
            'description' => 'Bạn có chắc chắn muốn xóa mã truy cập này không?',
        ],
    ],

    'notifications' => [
        'permissions_updated' => 'Đã cập nhật quyền của mã truy cập.',
        'deleted' => 'Đã xóa mã truy cập.',
    ],

    'empty_state' => [
        'heading' => 'Không có mã truy cập',
        'description' => 'Tạo một mã ở trên để bắt đầu.',
    ],

    'integrations' => [
        'heading' => 'Việc cần làm tiếp theo',
        'api_link' => 'REST API',
        'api_description' => 'Quản lý dữ liệu CRM theo cách lập trình.',
        'mcp_link' => 'Máy chủ MCP',
        'mcp_description' => 'Kết nối các trợ lý AI như Claude.',
    ],

    'user_menu' => 'Mã truy cập',
];
