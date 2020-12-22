<?php

namespace App\Http\Controllers;

use App\Notifications\FileUploaded;
use App\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Notification;

class NotificationController extends BaseController
{
    use ValidatesRequests;


    public function fileUploadedToNotification(Request $request) {
        //dump($requestd)
        $users = User::whereIn('username', $request->usernames)->get();
        Notification::send($users, new FileUploaded($request->info));
    }

    public function getUnreadNotifications(Request $request) {
        $user = User::where('username', $request->username)->first();

        return $user->unreadNotifications;
    }

    public function getReadNotifications(Request $request) {
        $user = User::where('username', $request->username)->first();

        return $user->notifications->filter(function($notification) {
            return $notification->read_at != null;
        });
    }

    public function getAllNotifications(Request $request) {
        $user = User::where('username', $request->username)->first();

        return $user->notifications;
    }

    public function markAsRead(Request $request) {
        $user = User::where('username', $request->username)->first();

        foreach ($user->unreadNotifications as $notification) {
            if ($notification->id == $request->id) {
                $notification->markAsRead();
            }
        }

        return 'true';
    }

    public function markAllAsRead(Request $request) {
        $user = User::where('username', $request->username)->first();
        $user->unreadNotifications->markAsRead();

        return 'true';
    }

    public function delete(Request $request) {
        $user = User::where('username', $request->username)->first();

        foreach ($user->unreadNotifications as $notification) {
            if ($notification->id == $request->id) {
                $notification->delete();
            }
        }

        return 'true';
    }

}
