<?php
interface INotificador{
    public function enviar($destinatario,$mensagem);
}




// <!-- implementar : email-->

class NotificadorEmail implements INotificador{
    public  function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";

    }
}

//Implementar: SMS

class NotificadorSMS implements INotificador{
    public function enviar ($destinatario,$mensagem){
        echo"SMS enviado para {$destinatario}. Mensagem:{$mensagem}.";
    }
}


//Implementar: WhatsApp

class NotificadorWhatsapp implements INotificador{
    public function enviar($destinatario, $mensagem)
    {
        echo"WhatsApp enviado para {$destinatario}. Mensagem:{$mensagem}";
    }
}

//classe  que usa a interface

class SistemaDeNotificacoes{
    private $notificador;
    public function __construct(INotificador $notificador)
    {
        $this->notificador=$notificador;
    }

    public function notificarUsuario($destinatario,$mensagem){

        $this->notificador->enviar($destinatario,$mensagem);
    }
}

$sistemaEmail= new SistemaDeNotificacoes(new NotificadorEmail());
$sistemaSMS= new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp= new SistemaDeNotificacoes(new NotificadorWhatsapp());


$sistemaEmail->notificarUsuario("joao@email.com", "Seu pedido foi confirmado");
$sistemaSMS->notificarUsuario("17997651234","seu pedido foi confirmado");
$sistemaWhatsapp->notificarUsuario("17990028922", "Seu pedido foi confirmado");