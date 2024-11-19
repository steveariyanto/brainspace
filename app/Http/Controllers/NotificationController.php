<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Tampilkan daftar notifikasi untuk pengguna tertentu.
     */
    public function index(Request $request)
    {
        // Mengambil notifikasi berdasarkan users_id yang sedang login
        $notifications = Notification::where('users_id', $request->user()->id) // Menggunakan 'users_id'
            ->orderBy('notifications_created_at', 'desc') // Urutkan berdasarkan waktu dibuat
            ->get();

        return view('notifications.index', compact('notifications'));
    }

    /**
     * Tandai notifikasi sebagai dibaca.
     */
    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);

        $notification->notifications_status = 'read'; // Set status menjadi "read"
        $notification->save();

        return redirect()->back()->with('status', 'Notification marked as read.');
    }

    /**
     * Hapus notifikasi.
     */
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);

        $notification->delete();

        return redirect()->back()->with('status', 'Notification deleted successfully.');
    }
}
