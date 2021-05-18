<?php

namespace App\Mail;

use App\Models\OrderDetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $orderdetails;
    public function __construct($orderdetailsinfo)
    {
        //
        $this->orderdetails=$orderdetailsinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('new_frontend.mail_template.template')->with(['orderdata'=>$this->orderdetails]);
    }
}
