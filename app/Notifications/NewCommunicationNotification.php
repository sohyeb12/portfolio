<?php

namespace App\Notifications;

use App\Models\Communication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\DatabaseMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCommunicationNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    protected $communication; 
 
    public function __construct(Communication $communication)
    {
        $this->communication = $communication;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail' , 'database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('New Communication # ' . $this->communication->id)
                    ->greeting('Hello ' .$notifiable->name)
                    ->line('A new Communication has been created.')
                    ->action('View Communication', route('communications.show', $this->communication->id))
                    ->line('Thank you');
    }

    public function toDatabase(object $notifiable) :DatabaseMessage
    {
        return new DatabaseMessage([
            'body' => "A new Communication #{$this->communication->id} has been created",
            'icon' => 'fas fa-envelope',
            'link' => route('communications.show', $this->communication->id),
        ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
