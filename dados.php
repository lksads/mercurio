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
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('Lucas Alves'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('ATI - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));            
        }
        function mensagemBreno(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('BRENO DUARTE'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('BRENO DUARTE - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));            
        }
        function reuniaoATI(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('Reunião ATI'));
            $this->setField('mensagem',utf8_decode('Reunião Geral com o Chefe da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Reunião Geral com o Chefe da ATI'));            
        }  
        function coletaDoacaoAlmox(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('assunto',utf8_decode('Coleta de Doações'));
            $this->setField('mensagem',utf8_decode('Coleta de Doações para a ATI no Almoxarifado'));
            $this->setField('mensagemAlt',utf8_decode('Coleta de Doações para a ATI no Almoxarifado'));            
        }
        function bancoDoBrasil(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Do Brasil'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));            
        }
        function arquivosAPD(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));
            
            $this->setField('assunto',utf8_decode('CONFERIR-Arquivos APD - serv-02'));
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos APD'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Arquivos APD - serv-02'));            
        }
        function bancoShop9(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9'));
            $this->setField('assunto',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));            
        }
        function relogioDePonto(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Relógio de Ponto'));
            $this->setField('assunto',utf8_decode('CONFERIR-Relógio de Ponto '));
            $this->setField('mensagemAlt',utf8_decode('Relógio de Ponto'));            
        }
        function arquivosGerais(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos Gerais'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Arquivos Gerais-Serv00 '));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivos Gerais - slerv00'));            
        }
        function IntranetCF(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Código fonte'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05'));            
        }
        function IntranetBk(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Banco de Dados - serv05'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));            
        }
        function serv01(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - SERV01 - serv01'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));            
        }
        function serv07(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - SERV07 - serv07'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));            
        }
        function pomadaCF(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Código Fonte'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));            
        }
        function pomadaBK(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Banco de Dados'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Pomada Banco de Dados - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Pomada Banco de Dados - serv02'));            
        }
        function comunhao21CF(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Comunhao 21'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Comunhao 21 Código Fonte - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Comunhao 21 - serv05'));            
        }
        function comunhao21BK(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Comunhao 21'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05'));            
        }
        function bancoShop9Bs9(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BS9'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));            
        }
        function bancoShop9BAK(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BAK'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));            
        }
        function bancoShopIntranet(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 Intranet'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv05'));            
        }
    }