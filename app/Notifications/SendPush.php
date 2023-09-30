<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendPush extends Notification
{
    use Queueable;
    protected $params;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(array $params)
    {
        //
        $this->params = $params;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title($this->params['title'])
            ->icon('/public/a2it-push-logo.png')
            ->image(public_path('/uploads/notification/').$this->params['image'])
            ->body($this->params['body'])
            //->tag($this->params['url'])
            ->requireInteraction(true)
            ->vibrate([500,250,500,250]);
    }

}
