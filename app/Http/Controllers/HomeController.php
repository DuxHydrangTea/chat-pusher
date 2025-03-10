<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    //
    public function welcome($id)
    {
        $user = Auth::user();
        if (!$user) {
            Auth::loginUsingId(1);
        }

        $userId = $user->id;
        $receiverId = $id;
        $messages = Message::where(function ($query) use ($userId, $receiverId) {
            $query->where('user_id', $userId)
                ->where('receiver_id', $receiverId);
        })->orWhere(function ($query) use ($userId, $receiverId) {
            $query->where('user_id', $receiverId)
                ->where('receiver_id', $userId);
        })->get();
        // dd($messages);

        return view('welcome', compact('user', 'messages'));
    }

    public function login($id)
    {
        Auth::loginUsingId($id);
        return redirect()->back();
    }

    public function sendMessage(Request $request, $id)
    {
        $user = Auth::user();
        $message = Message::create([
            'user_id' => $user->id,
            'receiver_id' => $id,
            'message' => $request->message,
        ]);

        send_pusher($message, $id);

        return true;
    }
}
