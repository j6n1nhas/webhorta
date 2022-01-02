<?php
namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Response;

class MailSender
{
    private $dados;
    private $remetente;
    private $destinatario;
    private $data_envio;
    private $msg_email;
    private $meio_contacto;

    public function __construct($dados)
    {
        $this->msg_email = new Email();
        $this->dados = $dados;
        //$this->mailer = new MailerInterface();
    }

    public function getRemetente()
    {
        return $this->remetente;
    }

    public function setRemetente($remetente)
    {
        $this->remetente = $remetente;
        return $this;
    }

    public function setDataEnvio($data)
    {
        $this->data_envio = strftime('%Y/%m/%d', $data);
        echo $this->data_envio;
    }

    public function setMeioContacto($contacto)
    {
        
    }
}