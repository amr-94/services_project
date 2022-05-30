<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;


class servesadded extends Notification
{
    use Queueable;
    private $Service;

   /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Service $Service)
    {
        //
        $this->Service = $Service;

    }

    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable)
    {
        return [
            'id' => $this->Service->id,
            'slug' => $this->Service->slug,

            'title' => 'تم اضافة منتج جديد بواسطة ' ,
             'user' => Auth::user()->name,
        ];
    }
}
