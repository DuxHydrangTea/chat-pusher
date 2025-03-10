<?php

use Pusher\Pusher;

if (!function_exists('send_pusher')) {
    function send_pusher($data, $user_get)
    {
        $options = array(
            'cluster' => 'ap1',
            'encrypted' => true
        );

        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );

        return $pusher->trigger('my-box-' . $user_get, 'messages', $data);
    };
}
