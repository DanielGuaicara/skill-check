<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterUser extends Notification
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
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->from('admin@skilltrakker.com', 'SKILLTRAKKER')
            ->line("You have successfully made a SkillTrakker account. Let's get started!")
            ->line('Email : '.$notifiable->email)
            ->line('Temporary password : '.$this->userPassword)
            ->action('Please Click Here to Sign In. We are excited for you to join us!', $this->url)
            ->line('The '.$this->gymname.' Team');
    }
}
