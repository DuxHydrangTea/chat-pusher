<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory;
    //
    protected $table = 'messages';

    protected $fillable = [
        'user_id',
        'receiver_id',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeBetween($query, $userId, $receiverId)
    {
        return $query->where(function ($query) use ($userId, $receiverId) {
            $query->where('user_id', $userId)
                ->where('recive_id', $receiverId);
        })->orWhere(function ($query) use ($userId, $receiverId) {
            $query->where('user_id', $receiverId)
                ->where('recive_id', $userId);
        });
    }
}
