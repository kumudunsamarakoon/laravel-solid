<?php

namespace App\Http\Controllers;

use App\Libraries\Contracts\NotifiableInterface;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function send(NotifiableInterface $subscriber, $message)
    {
        Mail::to($subscriber->getNotifyByEmail())
            ->queue($message);
    }
}
