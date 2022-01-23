<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\RawMessage;
use Symfony\Component\Mailer\Envelope;
use DateTime;
use Symfony\Component\Mime\Address;

class MailSender
{
    //O nome do utilizador
    private string $nome_remetente;

    //O endereço do utilizador
    private string $endereco_remetente;

    //"Administrador" por default
    private string $nome_destinatario;

    //O meu endereço por default
    private string $endereco_destinatario;

    //Array associativo com o(s) contacto(s) passados pelo utilizador
    private array $contactos;

    //A mensagem que o utilizador introduziu no formulário
    private string $mensagem;

    //Eventuais anexos que o utilizador tenha incluído
    private $anexos;

    //Data do contacto
    private DateTime $data_contacto;

    public function criarEmail(MailerInterface $mailer)
    {
        $template = new TemplatedEmail();
        $template->from(new Address($this->endereco_remetente, $this->nome_remetente));
        $template->to(new Address($this->endereco_destinatario, $this->nome_destinatario));
        $template->subject(sprintf("Novo contacto de %s no site HortaBio XPTO", $this->nome_remetente));
        $template->htmlTemplate('email.html');
        $template->context([
            'nome' => $this->nome_remetente,
            'contactos' => $this->contactos,
            'mensagem' => $this->mensagem,
            'data' => $this->data_contacto,
        ]);
        $template->embedFromPath('images/ic_launcher_foreground.png', 'logo');
        $mailer->send($template);
    }

    public function __construct(
        string $nome_proprio,
        string $nome_apelido,
        array $contactos,
        string $mensagem,
        DateTime $data_contacto,
        string $endereco_remetente = null,
        string $nome_destinatario = 'Administrador',
        string $endereco_destinatario = 'jp_ramos_jr@sapo.pt',
        File $anexo = null,
        )
    {
        //Defino o nome e endereço do destinatário
        $this->nome_destinatario = $nome_destinatario;
        $this->endereco_destinatario = $endereco_destinatario;
        //Defino o nome do remetente unido o nome próprio ao apelido
        $nome_remetente = implode(' ', [$nome_proprio, $nome_apelido]);
        $this->nome_remetente = $nome_remetente;
        //Defino a mensagem
        $this->mensagem = $mensagem;
        $endereco_remetente ? $this->endereco_remetente = $endereco_remetente : $this->endereco_remetente = $endereco_destinatario;
        $this->anexos = $anexo;
        $this->data_contacto = $data_contacto;
        $this->contactos = $contactos;
    }

    public function setEnderecoRemetente($endereco_remetente): self
    {
        $this->endereco_remetente = $endereco_remetente;
        return $this;
    }

    public function getEnderecoRemetente(): string
    {
        return $this->endereco_remetente;
    }

    public function setNomeRemetente($nome, $apelido): self
    {
        $this->nome_remetente = implode(' ', [$nome, $apelido]);
        return $this;
    }

    public function getNomeRemetente(): string
    {
        return $this->nome_remetente;
    }

    public function setContactos($contactos): self
    {
        $this->contactos = $contactos;
        return $this;
    }

    public function getContactos(): array
    {
        return $this->contactos;
    }

    public function setMensagem($mensagem): self
    {
        $this->mensagem = $mensagem;
        return $this;
    }

    public function getMensagem(): string
    {
        return $this->mensagem;
    }

    public function setNomeDestinatario($nome_destinatario): self
    {
        $this->nome_destinatario = $nome_destinatario;
        return $this;
    }

    public function getNomeDestinatario(): string
    {
        return $this->nome_destinatario;
    }

    public function setEnderecoDestinatario($endereco_destinatario): self
    {
        $this->endereco_destinatario = $endereco_destinatario;
        return $this;
    }

    public function getEnderecoDestinatario(): string
    {
        return $this->endereco_destinatario;
    }

    public function setDataContacto($data_envio): self
    {
        $this->data_contacto = $data_envio;
        return $this;
    }

    public function getDataContacto(): DateTime
    {
        return $this->data_contacto;
    }
}