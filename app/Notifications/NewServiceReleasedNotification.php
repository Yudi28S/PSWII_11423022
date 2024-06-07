<?php

namespace App\Notifications;

use App\Models\Service;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewServiceReleasedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(
        public Service $service,
    ) {
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject($this->service->name . ' now available at badminton Bliss!')
            ->from('info@gamalielfield.com')
            ->greeting('Hello ' . $notifiable->name . '!')
            ->line('Big News! 🎉')
            ->line('Introducing ' . $this->service->name . ' - our latest service!')
            ->line('✨ Priced at LKR ' .  number_format($this->service->price, 2, '.', ',') . ' ✨')
            ->line('💆‍♀️ The benefits: ' . $this->service->benefits)
            ->action('Book Now', url('/services/' . $this->service->slug))
            ->line('Thank you');
    }

    public function toArray($notifiable): array
    {
        return [];
    }
}
