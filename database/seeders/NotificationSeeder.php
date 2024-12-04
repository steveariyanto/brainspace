<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data notifications yang akan diinsert
        $notifications = [
            [
                'users_id' => 1,
                'notifications_message' => 'Notifikasi pertama untuk user 1',
                'notifications_status' => 'unread',
                'notifications_created_at' => now(),
            ],
            [
                'users_id' => 2,
                'notifications_message' => 'Notifikasi kedua untuk user 2',
                'notifications_status' => 'read',
                'notifications_created_at' => now(),
            ],
            [
                'users_id' => 3,
                'notifications_message' => 'Notifikasi ketiga untuk user 3',
                'notifications_status' => 'unread',
                'notifications_created_at' => now(),
            ],
        ];

        // Masukkan data menggunakan model Notification
        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
