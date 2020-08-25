<?php

    class Dados{

        private $host;
        private $usuario;
        private $senha;
        private $porta;
        private $destinatario;
        private $nomeDestinatario;
        private $remetente;
        private $nomeRemetente;
        private $assunto;
        private $mensagem;
        private $mensagemAlt;


        function setField($pFieldName,$pValue){
            $this->$pFieldName=$pValue;
        }
     
        function getField($pFieldName){
            return $this->$pFieldName;
        }

        function mensagemLucas(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('LUCAS ALVES'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('LUCAS ALVES - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));            
        }

        function mensagemBreno(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('BRENO DUARTE'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('BRENO DUARTE - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));            
        }
        
    }