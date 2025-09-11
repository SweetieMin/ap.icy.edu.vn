<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;
    public string $title;
    public string $message;
    public string $actionUrl;
    public string $actionText;

    /**
     * Create a new message instance.
     */
    public function __construct(
        User $user,
        string $title,
        string $message,
        string $actionUrl = null,
        string $actionText = null
    ) {
        $this->user = $user;
        $this->title = $title;
        $this->message = $message;
        $this->actionUrl = $actionUrl ?? config('app.url');
        $this->actionText = $actionText ?? 'Xem chi tiết';
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->title . ' - ' . config('app.name'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notification',
            with: [
                'user' => $this->user,
                'title' => $this->title,
                'message' => $this->message,
                'actionUrl' => $this->actionUrl,
                'actionText' => $this->actionText,
                'appName' => config('app.name'),
                'appUrl' => config('app.url'),
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
