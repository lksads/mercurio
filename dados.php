<?php
    use PHPMailer\PHPMailer\PHPMailer;

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

        function __construct(){
            $this->dadosPadroes();
        }

        private function dadosPadroes(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario','ati.suporte@comunhaoespirita.com');
            $this->setField('nomeDestinatario',utf8_decode('ATI'));
            $this->setField('remetente','ati@comunhaoespirita.com');
            $this->setField('nomeRemetente',utf8_decode('ATI'));
        }

        private function mensagemLucas(){
            $this->setField('nomeDestinatario',utf8_decode('Lucas Alves'));

            $this->setField('assunto',utf8_decode('LUCAS ALVES - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            
            return $this->enviaMensagem();
            $this->dadosPadroes();
        }
        private function mensagemBreno(){
            $this->setField('nomeDestinatario',utf8_decode('BRENO DUARTE'));

            $this->setField('assunto',utf8_decode('BRENO DUARTE - Planejamento diário'));
            $this->setField('mensagem',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI'));   
            
            return $this->enviaMensagem();
            $this->dadosPadroes();
        }
        private function reuniaoATI(){
            $this->setField('assunto',utf8_decode('Reunião ATI'));
            $this->setField('mensagem',utf8_decode('Reunião Geral com o Chefe da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Reunião Geral com o Chefe da ATI')); 
            
            return $this->enviaMensagem();
        }  
        private function coletaDoacaoAlmox(){
            $this->setField('assunto',utf8_decode('Coleta de Doações'));
            $this->setField('mensagem',utf8_decode('Coleta de Doações para a ATI no Almoxarifado'));
            $this->setField('mensagemAlt',utf8_decode('Coleta de Doações para a ATI no Almoxarifado')); 
            
            return $this->enviaMensagem();
        }
        private function bancoDoBrasil(){
            
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Do Brasil'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));    
            
            return $this->enviaMensagem();
        }
        private function arquivosAPD(){
            $this->setField('assunto',utf8_decode('CONFERIR-Arquivos APD - serv-02'));
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos APD'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Arquivos APD - serv-02')); 
            
            return $this->enviaMensagem();
        }
        private function bancoShop9(){

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9'));
            $this->setField('assunto',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));     
            
            return $this->enviaMensagem();
        }
        private function relogioDePonto(){
            $this->setField('mensagem',utf8_decode('BACKUP - Relógio de Ponto'));
            $this->setField('assunto',utf8_decode('CONFERIR-Relógio de Ponto '));
            $this->setField('mensagemAlt',utf8_decode('Relógio de Ponto'));   
            
            return $this->enviaMensagem();
        }
        private function arquivosGerais(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos Gerais'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Arquivos Gerais-Serv00 '));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivos Gerais - serv00'));    
            
            return $this->enviaMensagem();
        }
        private function IntranetCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Código fonte'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05')); 
            
            return $this->enviaMensagem();
        }
        private function IntranetBk(){
            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Banco de Dados - serv05'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));
            
            return $this->enviaMensagem();
        }
        private function serv01(){
            $this->setField('mensagem',utf8_decode('BACKUP - SERV01 - serv01'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));     
            
            return $this->enviaMensagem();
        }
        private function serv07(){
            $this->setField('mensagem',utf8_decode('BACKUP - SERV07 - serv07'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));    
            
            return $this->enviaMensagem();
        }
        private function pomadaCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Código Fonte'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));  
            
            return $this->enviaMensagem();
        }
        private function pomadaBK(){
            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Banco de Dados'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Pomada Banco de Dados - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Pomada Banco de Dados - serv02'));  
            
            return $this->enviaMensagem();
        }
        private function comunhao21CF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Comunhao 21'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Comunhao 21 Código Fonte - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Comunhao 21 - serv05')); 
            
            return $this->enviaMensagem();
        }
        private function comunhao21BK(){
            $this->setField('mensagem',utf8_decode('BACKUP - Comunhao 21'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05')); 
            
            return $this->enviaMensagem();
        }
        private function bancoShop9Bs9(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BS9'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));     
            
            return $this->enviaMensagem();
        }
        private function bancoShop9BAK(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BAK'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));   
            
            return $this->enviaMensagem();
        }
        private function bancoShopIntranet(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 Intranet'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv05'));
            
            return $this->enviaMensagem();            
        }
        private function patrimonioCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Codigo Fonte'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Patrimonio Codigo Fonte'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Patrimonio Codigo Fonte'));  
            
            return $this->enviaMensagem();
        }
        private function patrimonioBD(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Banco de Dados'));
            $this->setField('assunto',utf8_decode('CONFERIR-Patrimonio Banco de Dados'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Patrimonio Banco de Dados'));
            
            return $this->enviaMensagem();
        }
        private function patrimonioApache(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Apache'));
            $this->setField('assunto',utf8_decode('CONFERIR-Patrimonio - Apache'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Apache'));
            
            return $this->enviaMensagem();
        }
        private function arquivosGeraisServ06(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Geral Serv06'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup - Patrimonio Geral Serv06'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup - Patrimonio Geral Serv06'));    
            
            return $this->enviaMensagem();
        }

        function enviaMensagem(){
            $correio = new PHPMailer();
        
            $correio->isSMTP();
            $correio->SMTPAuth = true;
            $correio->Host = $this->getField('host');
            $correio->Username = $this->getField('usuario');
            $correio->Password = $this->getField('senha');
            $correio->Port = $this->getField('porta');
            $correio->setFrom ($this->getField('remetente'), $this->getField('nomeRemetente'));
            $correio->addAddress($this->getField('destinatario'), $this->getField('nomeDestinatario'));
            $correio->isHTML(true);
            $correio->Subject = $this->getField('assunto');
            $correio->Body    = $this->getField('mensagem');
            $correio->AltBody = $this->getField('mensagemAlt');
            // $correio->addReplyTo('no-reply@email.com.br');
            // $correio->addAddress('email@email.com.br', ‘Nome’);
            // $correio->addCC('email@email.com.br', 'Cópia');
            // $correio->addBCC('email@email.com.br', 'Cópia Oculta')
            // $correio->addAttachment('/tmp/image.jpg', 'nome.jpg');
        
            if(!$correio->send()) {
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $correio->ErrorInfo;
            } else {
                echo 'Mensagem enviada.';
            }
        }

        function mensagemPrivada(){
            $this->mensagemBreno();
            $this->mensagemLucas();
        }

        function segunda(){
            $this->arquivosGerais();
            $this->intranetCF();
            $this->intranetBk();
            $this->comunhao21CF();
            $this->comunhao21BK();
            $this->bancoShop9Bs9();
            $this->bancoShop9BAK();
            $this->bancoShopIntranet();
        }

        function terca(){
            $this->patrimonioCF();
            $this->patrimonioBD();
            $this->patrimonioApache();
            $this->arquivosAPD();
            $this->bancoShop9();
            $this->arquivosGeraisServ06();
        }

        function quarta(){
            $this->pomadaCF();
            $this->pomadaBK();
            $this->intranetCF();
            $this->intranetBk();
            $this->arquivosGerais();
            $this->comunhao21CF();
            $this->comunhao21BK();
            $this->bancoShop9Bs9();
            $this->bancoShop9BAK();
            $this->bancoShopIntranet();
            $this->coletaDoacaoAlmox();
        }

        function quinta(){
            $this->bancoDoBrasil();
            $this->arquivosAPD();
            $this->bancoShop9(); 
            $this->relogioDePonto();
        }

        function sexta(){
            $this->reuniaoATI();
            $this->arquivosGerais();
            $this->serv01();
            $this->serv07();
            $this->pomadaCF();
            $this->pomadaBK();
            $this->comunhao21CF();
            $this->comunhao21BK();
            $this->bancoShop9Bs9();
            $this->bancoShop9BAK();
            $this->bancoShopIntranet();
        }

        function sabado(){
        }
        
        function domingo(){
        }

        #Criando Dados dos Meses
        function imgSOServ00(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Ferramenta Windows - serv00'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv00'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv00'));    
            
            return $this->enviaMensagem();
        }
        function imgActiveServ00(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Active Boot - serv00'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv00'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv00'));    
            
            return $this->enviaMensagem();
        }
        function arquivoGTV(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivo GTV - serv02'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Arquivo GTV - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivo GTV - serv02'));    
            
            return $this->enviaMensagem();
        }
        function arquivoATI(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivo ATI - serv02'));
            $this->setField('assunto',utf8_decode('CONFERIR-Arquivo ATI - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivo ATI - serv02'));    
            
            return $this->enviaMensagem();
        }

        function janeiro(){
            $this->imgSOServ00();
            $this->imgActiveServ00();
            $this->arquivoGTV(); 
            $this->arquivoATI();
        }
    }
      