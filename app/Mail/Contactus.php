<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactus extends Mailable
{
    use Queueable, SerializesModels;
    /* protected $asunto = "Mensaje Formulario"
    protected $contactenos; */
    public  $asunto = "Mensaje Formulario";
    public $contactenos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactenos)
    {
         $this->contactenos =  $contactenos;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('contactus.contact');    
                   
    }
}
