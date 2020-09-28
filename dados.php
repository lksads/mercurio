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
        private $email;

        function setField($pFieldName,$pValue){
            $this->$pFieldName=$pValue;
        }
        function getField($pFieldName){
            return $this->$pFieldName;
        }

        function __construct($pAmbiente){
            if($pAmbiente == 'Desenvolvimento'){
                $this->email = 'ati@comunhaoespirita.com';
            }else{
                $this->email = 'ati.suporte@comunhaoespirita.com';
            }
            $this->dadosPadroes();
        }

        private function dadosPadroes(){
            $this->setField('host','smtp.comunhaoespirita.com');
            $this->setField('usuario','ati@comunhaoespirita.com');
            $this->setField('senha','***');
            $this->setField('porta',587);
            $this->setField('destinatario', $this->email);
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
            
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Do Brasil<br>
            Origem física: computador (comunhao-152)<br>
            Orígem lógico: "C:\bancodobrasil"<br>
            Destino físico: Servidor (serv00)<br>
            Destino lógico: "D:\Rede\DAF\BACKUP-BANCODOBRASIL"<br>
            Tipo: Completo<br>
            Horario de início: 13h30<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Semanalmente (Segunda, Quarta e Sexta)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco do Brasil-comunhao-152'));    
            
            return $this->enviaMensagem();
        }
        private function arquivosAPD(){
            $this->setField('assunto',utf8_decode('CONFERIR-Arquivos APD - serv-02'));

            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos APD<br>
            Origem física: Servidor (serv02)<br>
            Orígem lógico: "J:\Rede\Produtora"<br>
            Destino Físico: Servidor (serv02)<br>
            Destino lógico: "K:\Backup Produtora - Full"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de início: 23h59<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 3h<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Arquivos APD - serv-02')); 
            
            return $this->enviaMensagem();
        }
        private function bancoShop9(){

            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9<br>
            Origem física: Servidor (serv03)<br>
            Orígem lógico: "C:\bkp_shop9"<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "F:\Rede\ATI\BACKUP\Backup - Shop9 Novo"<br>
            Tipo: Incremental<br>
            Frequência: Diariamente<br>
            Horario de Início: 23h50<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração:<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Banco Shop 9 - serv-02'));     
            
            return $this->enviaMensagem();
        }
        private function relogioDePonto(){
            $this->setField('mensagem',utf8_decode('BACKUP - Relógio de Ponto<br>
            Origem física: Servidor (serv02)<br>
            Orígem lógico: Microsfoft SQL Server 2005 Express - Banco: MultiBanco<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "C:\Program Files (x86)\Microsoft SQL Server\MSSQL.1\MSSQL\Backup\MultiBanco.bak"<br>
            Tipo: Completo<br>
            Frequência: Semanalmente (Segunda, Quarta e Sexta)<br>
            Horario de Início: 9h<br>
            Ferramenta: Microsoft SQL Server Management Studio<br>
            Método: Manual<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Semanalmente (Segunda, Quarta e Sexta)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Relógio de Ponto '));
            $this->setField('mensagemAlt',utf8_decode('Relógio de Ponto'));   
            
            return $this->enviaMensagem();
        }
        private function arquivosGerais(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos Gerais<br>
            Origem física: Servidor (serv00)<br>
            Orígem lógico: "D:\Rede"<br>
            Destino físico: Servidor (serv00)<br>
            Destino lógico: "E:\bkp_arquivo\backup_rede"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 23h50<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 7h<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Arquivos Gerais-Serv00 '));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivos Gerais - serv00'));    
            
            return $this->enviaMensagem();
        }
        private function IntranetCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Código fonte<br>
            Origem física: Servidor (serv05)<br>
            Orígem lógico: C:\comunhaoweb<br>
            Destino físico: Servidor (serv05)<br>
            Destino lógico: E:\backup<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de início: 23h30<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 7<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Código fonte - serv05')); 
            
            return $this->enviaMensagem();
        }
        private function IntranetBk(){
            $this->setField('mensagem',utf8_decode('BACKUP - Intranet Banco de Dados - serv05<br>
            Origem física: Servidor (serv05)<br>
            Orígem lógico: MySQL Server - Banco: Todos os Bancos<br>
            Destino físico: Servidor (serv05)<br>
            Destino lógico: "E:\backup\dump_db_comunhaoweb"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de início: 7h<br>
            Ferramenta: dump_automatico_intranet.bat<br>
            Caminho da ferramenta: "C:\comunhaoweb\intranet\lib\dump_automatico_intranet.bat"<br>
            Método: Automático<br>
            Tempo médio de duração: 10min<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Intranet Banco de Dados - serv05'));
            
            return $this->enviaMensagem();
        }
        private function serv01(){
            $this->setField('mensagem',utf8_decode('BACKUP - SERV01 - serv01<br>
            Origem física: Servidor (serv01)<br>
            Orígem lógico: https://192.168.1.191:4444/<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: \\serv02\ATI\BACKUP\Backup - Sophos\serv01<br>
            Tipo: Completo<br>
            Frequência: 7 dias<br>
            Horario de início: 9h<br>
            Ferramenta: Qualquer browser<br>
            Método: Manual<br>
            Tempo médio de duração: 2 minutos<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: 7 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv01 - serv01'));     
            
            return $this->enviaMensagem();
        }
        private function serv07(){
            $this->setField('mensagem',utf8_decode('BACKUP - SERV07 - serv07<br>
            Origem física: Servidor (serv07)<br>
            Orígem lógico: https://192.168.1.193:4444/<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: \\serv02\ATI\BACKUP\Backup - Sophos\serv07<br>
            Tipo: Completo<br>
            Frequência: 7 dias<br>
            Horario de início: 9h<br>
            Ferramenta: Qualquer browser<br>
            Método: Manual<br>
            Tempo médio de duração: 2 minutos<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: 7 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Serv07 - serv07'));    
            
            return $this->enviaMensagem();
        }
        private function pomadaCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Código Fonte<br>
            Orígem lógico: "C:\xampp\htdocs\GED"<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "F:\Rede\ATI\BACKUP\Backup - GED Pomada"<br>
            Tipo: Completo<br>
            Frequência: NÃO DEFINIDO<br>
            Horario de Início: NÃO DEFINIDO<br>
            Ferramenta: Pendrive<br>
            Método: Manual<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Semanalmente (Terça e Quinta)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Pomada Código Fonte - serv02'));  
            
            return $this->enviaMensagem();
        }
        private function pomadaBK(){
            $this->setField('mensagem',utf8_decode('BACKUP - Pomada Banco de Dados<br>
            Origem física: Computador (pomada)<br>
            Orígem lógico: MySQL Server - Banco: Todos os Bancos<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "F:\Rede\ATI\BACKUP\Backup - GED Pomada"<br>
            Tipo: Completo<br>
            Frequência: NÃO DEFINIDO<br>
            Horario de Início: NÃO DEFINIDO<br>
            Ferramenta: Pendrive e MySQL Workbench<br>
            Método: Manual<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Semanalmente ( Terça e Quinta )'));
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
            $this->setField('mensagem',utf8_decode('BACKUP - Comunhao 21<br>
            Origem física: Servidor externo da empresa P21<br>
            Orígem lógico: sftp://@comunhaoweb.com.br<br>
            Destino físico: Servidor (serv05)<br>
            Destino lógico: "C:\comunhaoweb\intranet\DUMP_P21"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de início: 4h<br>
            Ferramenta: pega_dump_serv05.bat<br>
            Caminho da Ferramenta: "C:\comunhaoweb\intranet\DUMP_P21\pega_dump_serv05.bat"<br>
            Método: AutomáticoProcedimentos para cópias de segurança (Backup) <br>
            5 / 14<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 3 (Exclusão Manual)<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Comunhao 21 Banco de Dados - serv05')); 
            
            return $this->enviaMensagem();
        }
        private function bancoShop9Bs9(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BS9<br>
            Origem física: Servidor (serv03)<br>
            Orígem lógico: Microsfoft SQL Server 2014 - Banco: S9_Real<br>
            Destino físico: Servidor (serv03)<br>
            Destino lógico: "C:\bkp_shop9"<br>
            Tipo: Completo<br>
            Frequência: DiariamenteProcedimentos para cópias de segurança (Backup)<br>
            9 / 14<br>
            Horario de Início: 22h30<br>
            Ferramenta: Ferramenta de Backup do Shop Control 9<br>
            Método: Automático<br>
            Tempo médio de duração: 10min<br>
            Número de cópias mantidas: 3<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BS9 - serv03'));     
            
            return $this->enviaMensagem();
        }
        private function bancoShop9BAK(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 BAK<br>
            Origem física: Servidor (serv03)<br>
            Orígem lógico: Microsfoft SQL Server 2014 - Banco: S9_Real<br>
            Destino físico: Servidor (serv03)<br>
            Destino lógico: "C:\bkp_shop9\bkp_s9real_intranet"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 5h<br>
            Ferramenta: Microsoft SQL Server Management Studio<br>
            Método: Automático<br>
            Tempo médio de duração: 5min<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 BAK - serv03'));   
            
            return $this->enviaMensagem();
        }
        private function bancoShopIntranet(){
            $this->setField('mensagem',utf8_decode('BACKUP - Banco Shop 9 Intranet<br>
            Origem física: Servidor (serv03)<br>
            Orígem lógico: "C:\bkp_shop9\bkp_s9real_intranet"<br>
            Destino físico: Servidor (serv05)<br>
            Destino lógico: "C:\BD_Shop9_S9Real"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 6h<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração:<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Diariamente<br>
            Obs: O procedimento é feito pelo Servidor "serv05"'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Banco Shop 9 Intranet - serv03'));
            
            return $this->enviaMensagem();            
        }
        private function patrimonioCF(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Codigo Fonte<br>
            Origem física: Servidor (serv08)<br>
            Orígem lógico: "C:\Users\administrador\.ativos"<br>
            Destino físico: Servidor (serv08)<br>
            Destino lógico: "D:\bkp_ativos"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 21h00<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 56 seg<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Patrimonio Codigo Fonte'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Patrimonio Codigo Fonte'));  
            
            return $this->enviaMensagem();
        }
        private function patrimonioBD(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Banco de Dados<br>
            Origem física: Servidor (serv08)<br>
            Orígem lógico: MySQL Workbench banco ATIVOS e SYS<br>
            Destino físico: Servidor (serv08)<br>
            Destino lógico: "D:\dump_ativos"<br>
            Tipo: Completo<br>
            Frequência: Semanalmente (Segunda, Quarta e Sexta)<br>
            Horario de Início: 9h<br>
            Ferramenta: MySQL Workbench<br>
            Método: Manual<br>
            Tempo médio de duração: 1 min<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Semanalmente (Segunda, Quarta e Sexta)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Patrimonio Banco de Dados'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Patrimonio Banco de Dados'));
            
            return $this->enviaMensagem();
        }
        private function patrimonioApache(){
            $this->setField('mensagem',utf8_decode('BACKUP - Patrimonio Apache<br>
            Origem física: Servidor (serv08)<br>
            Orígem lógico: "C:\Program Files\Apache Software Foundation"<br>
            Destino físico: Servidor (serv08)<br>
            Destino lógico: "D:\bkp_apache ativos"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 21h00<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 56 seg<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Patrimonio - Apache'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Apache'));
            
            return $this->enviaMensagem();
        }
        private function arquivosGeraisServ06(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos Gerais Serv06'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup - Arquivos Gerais Serv06'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup - Arquivos Gerais Serv06'));    
            
            return $this->enviaMensagem();
        }

        private function relatorioATI(){
            $this->setField('mensagem',utf8_decode('Relatorio ATI'));
            $this->setField('assunto',utf8_decode('Gerar Relatorio da ATI'));
            $this->setField('mensagemAlt',utf8_decode('Gerar Relatorio da ATI')); 
            
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
            $this->reuniaoATI();
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

        function relatorio(){
            $this->relatorioATI();
        }

        function sabado(){
        }
        
        function domingo(){
        }

        #Criando Dados dos Meses
        private function imgSOServ00(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Ferramenta Windows - serv00<br>
            Origem física: Servidor (serv00)<br>
            Orígem lógico: Sistema Operacional Windows Server 2016<br>
            Destino físico: Servidor (serv00)<br>
            Destino lógico: "F:\"<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: Diariamente<br>
            Horario de início: 1h<br>
            Ferramenta: Ferramenta de Backup do Windows Server 2016<br>
            Método: Automático<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Semanalmente (Sexta-Feira)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv00'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv00'));    
            
            return $this->enviaMensagem();
        }
        private function imgActiveServ00(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Active Boot - serv00<br>
            Origem física: Servidor (serv00)<br>
            Orígem lógico: Sistema Operacional Windows Server 2016<br>
            Destino físico: Hard Drive arquivado na sala 208 da ATI<br>
            Destino lógico: Cópia de Imagem do Sistema Operacional<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: 120 dias<br>
            Horario de início: 9h<br>
            Ferramenta: Active Boot<br>
            Método: Manual<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: 120 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv00'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv00'));    
            
            return $this->enviaMensagem();
        }
        private function arquivosGTV(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos GTV - serv02<br>
            Origem física: Servidor (serv02)<br>
            Orígem lógico: "F:\Rede\GTV"<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "G:\Backup GTV - Full"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de Início: 4h<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 25min<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Arquivos GTV - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivos GTV - serv02'));    
            
            return $this->enviaMensagem();
        }
        private function arquivosATI(){
            $this->setField('mensagem',utf8_decode('BACKUP - Arquivos ATI - serv02<br>
            Origem física: Servidor (serv02)<br>
            Orígem lógico: "F:\Rede\ATI"<br>
            Destino físico: Servidor (serv02)<br>
            Destino lógico: "G:\Backup ATI - Full"<br>
            Tipo: Completo<br>
            Frequência: Diariamente<br>
            Horario de início: 2h<br>
            Ferramenta: Cobian Backup<br>
            Método: Automático<br>
            Tempo médio de duração: 1h<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: Diariamente'));
            $this->setField('assunto',utf8_decode('CONFERIR-Arquivos ATI - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Arquivos ATI - serv02'));    
            
            return $this->enviaMensagem();
        }
        private function imgSOServ06(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Ferramenta Windows - serv06<br>
            Origem física: Servidor (serv00)<br>
            Orígem lógico: Sistema Operacional Windows Server 2016<br>
            Destino físico: Servidor (serv00)<br>
            Destino lógico: "F:\"<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: Diariamente<br>
            Horario de início: 1h<br>
            Ferramenta: Ferramenta de Backup do Windows Server 2016<br>
            Método: Automático<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 1<br>
            Frequência de vistoria: Semanalmente (Sexta-Feira)'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv06'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Ferramenta Windows - serv06'));    
            
            return $this->enviaMensagem();
        }
        private function imgActiveServ06(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Active Boot - serv06<br>
            Origem física: Servidor (serv06)<br>
            Orígem lógico: Sistema Operacional Windows Server 2016<br>
            Destino físico: Hard Drive arquivado na sala 208 da ATI<br>
            Destino lógico: Cópia de Imagem do Sistema Operacional<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: 120 dias<br>
            Horario de início: 9h<br>
            Ferramenta: Active Boot<br>
            Método: Manual<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: 120 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv06'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Active Boot - serv06'));    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ02(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Acronis - serv02<br>
            Origem física: Servidor (serv02)<br>
            Orígem lógico: Sistema Operacional Windows 7 Professional<br>
            Destino físico: Hard Drive arquivado na sala 208 da ATI<br>
            Destino lógico: Cópia de Imagem do Sistema Operacional<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: A cada 120 dias<br>
            Horario de Início: 9h<br>
            Ferramenta: Acronis True Image<br>
            Método: Manual<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: 120 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv02'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv02'));    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ03(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Acronis - serv03<br>
            Origem física: Servidor (serv03)<br>
            Orígem lógico: Sistema Operacional Windows7 Enterprise<br>
            Destino físico: Hard Drive arquivado na sala 208 da ATI<br>
            Destino lógico: Cópia de Imagem do Sistema Operacional<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: 120 dias<br>
            Horario de Início: 9h<br>
            Ferramenta: Acronis True Image<br>
            Método: Manual<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: 120 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv03'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv03'));    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ05(){
            $this->setField('mensagem',utf8_decode('BACKUP - Imagem S.O - Acronis - serv05<br>
            Origem física: Servidor (serv05)<br>
            Orígem lógico: Sistema Operacional Windows 7 Enterprise<br>
            Destino físico: Hard Drive arquivado na sala 208 da ATI<br>
            Destino lógico: Cópia de Imagem do Sistema Operacional<br>
            Tipo: Todo o disco do Sistema Operacional<br>
            Frequência: 120 dias<br>
            Horario de início: 9h<br>
            Ferramenta: Acronis True Image<br>
            Método: Manual<br>
            Tempo médio de duração: NÃO IDENTIFICADO<br>
            Número de cópias mantidas: 2<br>
            Frequência de vistoria: 120 dias'));
            $this->setField('assunto',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv05'));
            $this->setField('mensagemAlt',utf8_decode('CONFERIR-Backup-Imagem S.O - Acronis - serv05'));    
            
            return $this->enviaMensagem();
        }
        
        function janeiro(){
            $this->imgSOServ00();
            $this->imgActiveServ00();
            $this->arquivosGTV(); 
            $this->arquivosATI();
        }
        function fevereiro(){
            $this->imgActiveServ06();
            $this->imgSOServ06();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function marco(){
            $this->imgAcronisServ05();
            $this->imgAcronisServ03();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function abril(){
            $this->imgAcronisServ02();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function maio(){
            $this->imgSOServ00();
            $this->imgActiveServ00();
            $this->arquivosGTV(); 
            $this->arquivosATI();   
        }
        function junho(){
            $this->imgActiveServ06();
            $this->imgSOServ06();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function julho(){
            $this->imgAcronisServ05();
            $this->imgAcronisServ03();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function agosto(){
            $this->imgAcronisServ02();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function setembro(){
            $this->imgSOServ00();
            $this->imgActiveServ00();
            $this->arquivosGTV(); 
            $this->arquivosATI();
        }
        function outubro(){
            $this->imgActiveServ06();
            $this->imgSOServ06();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function novembro(){
            $this->imgAcronisServ05();
            $this->imgAcronisServ03();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
        function dezembro(){
            $this->imgAcronisServ02();
            $this->arquivosGTV();
            $this->arquivosATI();
        }
    }
      