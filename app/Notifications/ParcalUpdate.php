<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ParcalUpdate extends Notification
{
    use Queueable;
    protected $parcel;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($par)
    {
        $this->parcel=$par;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting('Greetings from Madhur Transport!!!')
                    ->line('Your Courier order is successfully placed!')
                    ->line(' Your Referance number is '.$this->parcel->referanceNumber.'')
                    
                    ->action('Track Parcel', url("track/".$this->parcel->referanceNumber))
                    ->line('plz share your experience when your product is delivered')
                    ->line('Thank you for choosing us!!!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
