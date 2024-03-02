<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ParcalDelivared extends Notification
{
    use Queueable;
    
    protected $track;
    

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($track)
    {
        $this->track=$track;
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

                     ->greeting('Madhur Transport!!!')
                     -> line('Hi' .$this->track->senderName.'')
                     ->line(' Your Courier '.$this->track->referanceNumber.'  is Delivered Succesfully!. Please find the receipt attached.')
                    // ->line('Your Parcel Delivered Succesfully!')
                     ->action('Track Order', url("track/".$this->track->referanceNumber))
                     ->line('plz share your experience when your product is delivered')
                     ->line('Thank you for using our application!');
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
