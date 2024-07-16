<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class DemoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;
    public $pdfData;
    public $pdfFilename;
    /**
     * Create a new message instance.
     */
    public function __construct($mailData, $pdfData, $pdfFilename)
    {
        $this->mailData = $mailData;
        $this->pdfData = $pdfData;
        $this->pdfFilename = $pdfFilename;
    }

    public function build()
    {
        return $this->view('emails.demoMail')
                    ->with('mailData', $this->mailData)
                    ->attachData($this->pdfData, $this->pdfFilename, [
                        'mime' => 'application/pdf',
                    ]);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Demo Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.demoMail',
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
