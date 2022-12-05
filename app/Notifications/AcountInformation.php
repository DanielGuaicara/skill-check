<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcountInformation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->gymname = $data['gym_name'];
        $this->userPassword = $data['password'];
        $this->url = $data['url'];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     *
     * @return array
     */
    public function via()
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->from('admin@skilltrakker.com', 'SKILLTRAKKER')
            ->line('You were invited to '.$this->gymname)
            ->line('Email : '.$notifiable->email)
            ->line('Password : '.$this->userPassword)
            ->action('Please click here to start moving', $this->url);
    }
}
