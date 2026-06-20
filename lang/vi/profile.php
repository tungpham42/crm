<?php

declare(strict_types=1);

return [
    'form' => [
        'name' => [
            'label' => 'Tên',
        ],
        'email' => [
            'label' => 'Email',
        ],
        'profile_photo' => [
            'label' => 'Ảnh đại diện',
        ],
        'current_password' => [
            'label' => 'Mật khẩu hiện tại',
        ],
        'new_password' => [
            'label' => 'Mật khẩu mới',
        ],
        'confirm_password' => [
            'label' => 'Xác nhận mật khẩu',
        ],
        'password' => [
            'label' => 'Mật khẩu',
        ],
    ],

    'sections' => [
        'update_profile_information' => [
            'title' => 'Thông tin hồ sơ',
            'description' => 'Cập nhật thông tin hồ sơ và địa chỉ email tài khoản của bạn.',
        ],
        'update_password' => [
            'title' => 'Cập nhật mật khẩu',
            'description' => 'Đảm bảo tài khoản của bạn đang sử dụng một mật khẩu dài, ngẫu nhiên để duy trì tính bảo mật.',
        ],
        'set_password' => [
            'title' => 'Thiết lập mật khẩu',
            'description' => 'Thêm mật khẩu vào tài khoản của bạn để bạn cũng có thể đăng nhập bằng email và mật khẩu.',
        ],
        'browser_sessions' => [
            'title' => 'Các phiên duyệt web',
            'description' => 'Quản lý và đăng xuất các phiên hoạt động của bạn trên các trình duyệt và thiết bị khác.',
            'notice' => 'Nếu cần, bạn có thể đăng xuất khỏi tất cả các phiên duyệt web khác trên tất cả thiết bị của mình. Một số phiên gần đây của bạn được liệt kê bên dưới; tuy nhiên, danh sách này có thể chưa đầy đủ. Nếu bạn cảm thấy tài khoản của mình đã bị xâm phạm, bạn cũng nên cập nhật mật khẩu của mình.',
            'labels' => [
                'current_device' => 'Thiết bị này',
                'last_active' => 'Hoạt động lần cuối',
                'unknown_device' => 'Không xác định',
            ],
        ],
        'delete_account' => [
            'title' => 'Xóa tài khoản',
            'description' => 'Lên lịch xóa tài khoản của bạn.',
            'notice' => 'Xóa tài khoản của bạn sẽ lên lịch loại bỏ vĩnh viễn sau thời gian gia hạn 30 ngày. Bạn có thể hủy việc xóa bằng cách đăng nhập lại bất cứ lúc nào trước thời hạn đó. Sau thời gian gia hạn, tất cả dữ liệu của bạn sẽ bị xóa vĩnh viễn.',
        ],
    ],

    'actions' => [
        'save' => 'Lưu',
        'remove_photo' => 'Gỡ ảnh',
        'delete_account' => 'Xóa tài khoản',
        'log_out_other_browsers' => 'Đăng xuất khỏi các phiên duyệt web khác',
    ],

    'notifications' => [
        'save' => [
            'success' => 'Đã lưu.',
        ],
        'photo_removed' => 'Đã gỡ ảnh đại diện.',
        'photo_remove_failed' => 'Không thể gỡ ảnh đại diện của bạn. Vui lòng thử lại.',
        'logged_out_other_sessions' => [
            'success' => 'Tất cả các phiên duyệt web khác đã được đăng xuất thành công.',
        ],
        'delete_account_blocked' => [
            'title' => 'Việc xóa tài khoản đã bị chặn',
        ],
    ],

    'modals' => [
        'delete_account' => [
            'notice' => 'Hành động này sẽ lên lịch xóa tài khoản của bạn. Bạn sẽ có 30 ngày để hủy bằng cách đăng nhập lại. Sau đó, tất cả dữ liệu sẽ bị xóa vĩnh viễn. Vui lòng nhập mật khẩu của bạn để xác nhận.',
            'notice_no_password' => 'Hành động này sẽ lên lịch xóa tài khoản của bạn. Bạn sẽ có 30 ngày để hủy bằng cách đăng nhập lại. Sau đó, tất cả dữ liệu sẽ bị xóa vĩnh viễn.',
        ],
        'log_out_other_browsers' => [
            'title' => 'Đăng xuất khỏi các phiên duyệt web khác',
            'description' => 'Nhập mật khẩu của bạn để xác nhận bạn muốn đăng xuất khỏi các phiên duyệt web khác trên tất cả thiết bị của mình.',
            'description_no_password' => 'Bạn có chắc chắn muốn đăng xuất khỏi các phiên duyệt web khác trên tất cả thiết bị của mình không?',
        ],
    ],

    'edit_profile' => 'Chỉnh sửa hồ sơ',

    'scheduled_deletion_interstitial' => [
        'actions' => [
            'cancel_deletion' => [
                'label' => 'Giữ lại tài khoản của tôi',
                'modal_heading' => 'Giữ lại tài khoản của bạn?',
                'modal_description' => 'Lịch xóa tài khoản của bạn sẽ bị hủy và tất cả dữ liệu của bạn sẽ được bảo toàn.',
                'modal_submit_label' => 'Có, giữ lại tài khoản của tôi',
            ],
            'logout' => [
                'label' => 'Đăng xuất',
            ],
        ],
    ],
];
