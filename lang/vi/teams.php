<?php

declare(strict_types=1);

return [
    'form' => [
        'team_name' => [
            'label' => 'Tên không gian làm việc',
        ],
        'team_slug' => [
            'label' => 'Đường dẫn không gian làm việc',
            'helper_text' => 'Chỉ bao gồm chữ cái viết thường, số và dấu gạch ngang. Mục này sẽ xuất hiện trong URL không gian làm việc của bạn.',
        ],
        'email' => [
            'label' => 'Email',
        ],
    ],

    'sections' => [
        'update_team_name' => [
            'title' => 'Tên không gian làm việc',
            'description' => 'Tên không gian làm việc và thông tin chủ sở hữu.',
        ],
        'add_team_member' => [
            'title' => 'Thêm thành viên',
            'description' => 'Thêm một thành viên mới vào không gian làm việc của bạn, cho phép họ cộng tác cùng bạn.',
            'notice' => 'Vui lòng cung cấp địa chỉ email của người bạn muốn thêm vào không gian làm việc này.',
        ],
        'team_members' => [
            'title' => 'Các thành viên',
            'description' => 'Tất cả những người thuộc không gian làm việc này.',
        ],
        'pending_team_invitations' => [
            'title' => 'Lời mời đang chờ',
            'description' => 'Những người này đã được mời vào không gian làm việc của bạn và đã được gửi email mời. Họ có thể tham gia bằng cách chấp nhận email mời.',
        ],
        'delete_team' => [
            'title' => 'Xóa không gian làm việc',
            'description' => 'Lên lịch xóa không gian làm việc này.',
            'notice' => 'Việc xóa không gian làm việc này sẽ lên lịch loại bỏ vĩnh viễn nó sau thời gian gia hạn 30 ngày. Bạn có thể hủy việc xóa bất cứ lúc nào trước thời hạn đó. Sau thời gian gia hạn, tất cả tài nguyên và dữ liệu sẽ bị xóa vĩnh viễn.',
            'scheduled_notice' => 'Không gian làm việc này được lên lịch xóa vào ngày :date.',
        ],
    ],

    'actions' => [
        'save' => 'Lưu',
        'add_team_member' => 'Thêm',
        'update_team_role' => 'Quản lý vai trò',
        'remove_team_member' => 'Gỡ bỏ',
        'leave_team' => 'Rời khỏi',
        'resend_team_invitation' => 'Gửi lại',
        'copy_invite_link' => 'Sao chép liên kết',
        'revoke_team_invitation' => 'Thu hồi',
        'delete_team' => 'Xóa không gian làm việc',
        'cancel_deletion' => 'Hủy xóa',
    ],

    'notifications' => [
        'save' => [
            'success' => 'Đã lưu.',
        ],
        'team_invitation_sent' => [
            'success' => 'Đã gửi lời mời.',
        ],
        'team_invitation_revoked' => [
            'success' => 'Đã thu hồi lời mời.',
        ],
        'invite_link_copied' => [
            'success' => 'Liên kết mời đã được sao chép vào khay nhớ tạm.',
        ],
        'team_member_removed' => [
            'success' => 'Bạn đã gỡ thành viên này.',
        ],
        'leave_team' => [
            'success' => 'Bạn đã rời khỏi không gian làm việc.',
        ],
        'team_deleted' => [
            'success' => 'Đã xóa không gian làm việc!',
        ],
        'permission_denied' => [
            'cannot_update_team_member' => 'Bạn không có quyền cập nhật thành viên này.',
            'cannot_leave_team' => 'Bạn không thể rời khỏi không gian làm việc do chính mình tạo ra.',
            'cannot_remove_team_member' => 'Bạn không có quyền gỡ bỏ thành viên này.',
            'cannot_delete_team' => 'Bạn không có quyền xóa không gian làm việc này.',
            'cannot_cancel_team_deletion' => 'Bạn không có quyền hủy lịch xóa không gian làm việc này.',
        ],
    ],

    'validation' => [
        'email_already_invited' => 'Người dùng này đã được mời vào không gian làm việc.',
    ],

    'modals' => [
        'leave_team' => [
            'notice' => 'Bạn có chắc chắn muốn rời khỏi không gian làm việc này không?',
        ],
        'delete_team' => [
            'notice' => 'Hành động này sẽ lên lịch xóa không gian làm việc. Bạn sẽ có 30 ngày để hủy trước khi tất cả dữ liệu bị xóa vĩnh viễn.',
        ],
        'cancel_deletion' => [
            'heading' => 'Hủy xóa không gian làm việc?',
            'notice' => 'Không gian làm việc và tất cả dữ liệu của nó sẽ được bảo toàn.',
        ],
    ],

    'edit_team' => 'Cài đặt Không gian làm việc',

    'roles' => [
        'admin' => [
            'description' => 'Người dùng Quản trị viên có thể thực hiện mọi hành động.',
        ],
        'editor' => [
            'description' => 'Người dùng Biên tập viên có quyền đọc, tạo và cập nhật.',
        ],
    ],
];
