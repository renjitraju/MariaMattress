<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;
    public $pdfPath,$order; 

    public function __construct($pdfPath,$order)
    {
        $this->pdfPath = $pdfPath;
        $this->order   = $order;
    }

    public function build()
    {

        return $this->subject('Order Confirmation & Invoice - ' .$this->order->order_id)->view('email.send_mail',['order'=>$this->order])->attach($this->pdfPath, ['as' => 'invoice.pdf','mime' => 'application/pdf', ]);
    }


}
