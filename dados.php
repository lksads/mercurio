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

        function __construct($pAmbiente, $pSenhaDadosPadroes){
            if($pAmbiente == 'Desenvolvimento'){
                $this->email = 'ati@comunhaoespirita.com';
            }else{
                $this->email = 'ati.suporte@comunhaoespirita.com';
            }
            $this->dadosPadroes($pSenhaDadosPadroes);
        }

        private function dadosPadroes($pSenhaDadosPadroes){
            $this->host = 'smtp.comunhaoespirita.com';
            $this->usuario = 'ati@comunhaoespirita.com';
            $this->senha = $pSenhaDadosPadroes;
            $this->porta = 587;
            $this->destinatario = $this->email;
            $this->nomeDestinatario = utf8_decode('ATI - Equipe');
            $this->remetente = 'ati@comunhaoespirita.com';
            $this->nomeRemetente = utf8_decode('Assessoria de Tecnologia da Informação - ATI');
        }

        private function mensagemLucas(){
            $this->nomeDestinatario = utf8_decode('LUCAS ALVES');
            $this->assunto = utf8_decode('LUCAS ALVES - Planejamento diário');
            $this->mensagem = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');
            $this->mensagemAlt = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');
            
            return $this->enviaMensagem();
        }
        private function mensagemBreno(){
            $this->nomeDestinatario = utf8_decode('BRENO DUARTE');
            $this->assunto = utf8_decode('BRENO DUARTE - Planejamento diário');
            $this->mensagem = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');
            $this->mensagemAlt = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');   
            
            return $this->enviaMensagem();
        }
        private function mensagemVinicius(){
            $this->nomeDestinatario = utf8_decode('LUCAS VINÍCIUS COSTA'); 
            $this->assunto = utf8_decode('LUCAS VINÍCIUS COSTA - Planejamento diário');
            $this->mensagem = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');
            $this->mensagemAlt = utf8_decode('Consultar Agenda, Emails, Tickets e Whatsapp da ATI');   

            return $this->enviaMensagem();
        }
        private function reuniaoATI(){
            $this->assunto = utf8_decode('Reunião semanal da ATI');
            $this->mensagem = utf8_decode('Reunião semanal da ATI');
            $this->mensagemAlt = utf8_decode('Reunião semanal da ATI'); 
            
            return $this->enviaMensagem();
        }  
        private function coletaDoacaoAlmox(){
            $this->assunto = utf8_decode('Coleta de equipamentos de informática doados no Almoxarifado');
            $this->mensagem = utf8_decode('Coleta de equipamentos de informática doados no Almoxarifado');
            $this->mensagemAlt = utf8_decode('Coleta de equipamentos de informática doados no Almoxarifado'); 
            
            return $this->enviaMensagem();
        }
        private function bancoDoBrasil(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco do Brasil - (serv00)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco do Brasil - (comunhao-152)<br>
                <b>Origem física:</b> comunhao-152<br>
                <b>Orígem lógica:</b> "C:\bancodobrasil"<br>
                <b>Destino físico:</b> Servidor (serv00)<br>
                <b>Destino lógico:</b> "D:\Rede\DAF\BACKUP-BANCODOBRASIL"<br>
                <b>Tipo:</b> Completo<br>
                <b>Início da rotina:</b> 13h30<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Segunda, Quarta e Sexta)
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco do Brasil - (comunhao-152)');    
            
            return $this->enviaMensagem();
        }

        private function arquivosAPD(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Arquivos APD - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Arquivos APD<br>
                <b>Origem física:</b> Servidor (serv02)<br>
                <b>Orígem lógica:</b> "J:\Rede\Produtora"<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "K:\Backup Produtora - Full"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 23h59<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 5h<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Arquivos APD - (serv02)'); 
            
            return $this->enviaMensagem();
        }

        private function arquivosAPDSalaSom(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Arquivos APD "Sala de Som" - (comunhao-121)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Arquivos APD "Sala de Som" - (comunhao-121)<br>
                <b>Origem física:</b> Servidor (comunhao-121)<br>
                <b>Orígem lógica:</b> "E:\ADR"<br>
                <b>Destino físico:</b> Servidor (comunhao-121)<br>
                <b>Destino lógico:</b> "D:\BACKUP\ADR"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 22h30<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> <12h<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Arquivos APD "Sala de Som" - (comunhao-121)'); 
            
            return $this->enviaMensagem();
        }

        private function bancoShop9(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco Shop 9 - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco Shop 9<br>
                <b>Origem física:</b> Servidor (serv03)<br>
                <b>Orígem lógica:</b> "C:\bkp_shop9"<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "F:\Rede\ATI\BACKUP\Backup - Shop9 Novo"<br>
                <b>Tipo:</b> Incremental<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 23h50<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> <5m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco Shop 9 - (serv02)');     
            
            return $this->enviaMensagem();
        }
        private function relogioDePonto(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Relógio de Ponto - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Relógio de Ponto<br>
                <b>Origem física:</b> Servidor (serv02)<br>
                <b>Orígem lógica:</b> Microsfoft SQL Server - Banco: PontoSecullum4<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "C:\Program Files (x86)\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\MSSQL\Backup\"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Semanalmente (Segunda, Quarta e Sexta)<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Microsoft SQL Server Management Studio<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 1m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Segunda, Quarta e Sexta)
            ');
            $this->mensagemAlt = utf8_decode('Relógio de Ponto');   
            
            return $this->enviaMensagem();
        }
        private function arquivosGerais(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Arquivos Gerais - (serv00)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Arquivos Gerais<br>
                <b>Origem física:</b> Servidor (serv00)<br>
                <b>Orígem lógica:</b> "D:\Rede"<br>
                <b>Destino físico:</b> Servidor (serv00)<br>
                <b>Destino lógico:</b> "E:\bkp_arquivo\backup_rede"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 23h50<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 7h<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Arquivos Gerais - (serv00)');    
            
            return $this->enviaMensagem();
        }
        private function IntranetCF(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Código Fonte "Intranet" - (serv05)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Código Fonte "Intranet"<br>
                <b>Origem física:</b> Servidor (serv05)<br>
                <b>Orígem lógica:</b> C:\comunhaoweb<br>
                <b>Destino físico:</b> Servidor (serv05)<br>
                <b>Destino lógico:</b> E:\backup<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 23h30<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 7<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Código Fonte "Intranet" - (serv05)'); 
            
            return $this->enviaMensagem();
        }
        private function IntranetBk(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco de Dados "Intranet" - (serv05)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Intranet Banco de Dados - (serv05)<br>
                <b>Origem física:</b> Servidor (serv05)<br>
                <b>Orígem lógica:</b> MySQL Server - Banco: Todos os Bancos<br>
                <b>Destino físico:</b> Servidor (serv05)<br>
                <b>Destino lógico:</b> "E:\backup\dump_db_comunhaoweb"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 7h<br>
                <b>Ferramenta:</b> dump_automatico_intranet.bat<br>
                Caminho da <b>Ferramenta:</b> "C:\comunhaoweb\intranet\lib\dump_automatico_intranet.bat"<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 10m<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco de Dados "Intranet" - (serv05)');
            
            return $this->enviaMensagem();
        }
        private function serv01(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Sophos - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Sophos - (serv01)<br>
                <b>Origem física:</b> Servidor (serv01)<br>
                <b>Orígem lógica:</b> https://192.168.1.191:4444/<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> \\serv02\ATI\BACKUP\Backup - Sophos\serv01<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> 7 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Qualquer browser<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 2m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> 7 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Sophos - (serv01)');     
            
            return $this->enviaMensagem();
        }
        private function serv07(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Sophos - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Sophos - (serv07)<br>
                <b>Origem física:</b> Servidor (serv07)<br>
                <b>Orígem lógica:</b> https://192.168.1.193:4444/<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> \\serv02\ATI\BACKUP\Backup - Sophos\serv07<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> 7 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Qualquer browser<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 2m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> 7 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Sophos - (serv07)');    
            
            return $this->enviaMensagem();
        }
        private function pomadaCF(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Pomada Código Fonte - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Pomada Código Fonte<br>
                <b>Origem física:</b> Computador (pomada)<br>
                <b>Orígem lógica:</b> "C:\xampp\htdocs\GED"<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "F:\Rede\ATI\BACKUP\Backup - GED Pomada"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> NÃO DEFINIDO<br>
                <b>Início da rotina:</b> NÃO DEFINIDO<br>
                <b>Ferramenta:</b> Pendrive<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Terça e Quinta)
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Pomada Código Fonte - (serv02)');  
            
            return $this->enviaMensagem();
        }
        private function pomadaBK(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Pomada Banco de Dados - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Pomada Banco de Dados<br>
                <b>Origem física:</b> Computador (pomada)<br>
                <b>Orígem lógica:</b> MySQL Server - Banco: Todos os Bancos<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "F:\Rede\ATI\BACKUP\Backup - GED Pomada"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> NÃO DEFINIDO<br>
                <b>Início da rotina:</b> NÃO DEFINIDO<br>
                <b>Ferramenta:</b> Pendrive e MySQL Workbench<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Semanalmente ( Terça e Quinta )
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Pomada Banco de Dados - (serv02)');  
            
            return $this->enviaMensagem();
        }

        private function comunhao21CF(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Comunhao21 Código Fonte - (serv05)');
            $this->mensagem = utf8_decode('<b>BACKUP:</b> Comunhao21');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Comunhao21 - (serv05)'); 
            
            return $this->enviaMensagem();
        }

        private function comunhao21BK(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Comunhao21 Banco de Dados - (serv05)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Comunhao21<br>
                <b>Origem física:</b> Servidor externo da empresa P21<br>
                <b>Orígem lógica:</b> sftp://@comunhaoweb.com.br<br>
                <b>Destino físico:</b> Servidor (serv05)<br>
                <b>Destino lógico:</b> "C:\comunhaoweb\intranet\DUMP_P21"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 4h<br>
                <b>Ferramenta:</b> pega_dump_serv05.bat<br>
                Caminho da <b>Ferramenta:</b> "C:\comunhaoweb\intranet\DUMP_P21\pega_dump_serv05.bat"<br>
                <b>Método:</b> AutomáticoProcedimentos para cópias de segurança (Backup) <br>
                5 / 14<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 3 (Exclusão Manual)<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Comunhao21 Banco de Dados - (serv05)'); 
            
            return $this->enviaMensagem();
        }

        private function bancoShop9Bs9(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco Shop 9 BS9 - (serv03)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco Shop 9 BS9<br>
                <b>Origem física:</b> Servidor (serv03)<br>
                <b>Orígem lógica:</b> Microsfoft SQL Server 2014 - Banco: S9_Real<br>
                <b>Destino físico:</b> Servidor (serv03)<br>
                <b>Destino lógico:</b> "C:\bkp_shop9"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> DiariamenteProcedimentos para cópias de segurança (Backup)<br>
                9 / 14<br>
                <b>Início da rotina:</b> 22h30<br>
                <b>Ferramenta:</b> Ferramenta de Backup do Shop Control 9<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 10m<br>
                <b>Número de cópias mantidas:</b> 3<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco Shop 9 BS9 - (serv03)');     
            
            return $this->enviaMensagem();
        }
        private function bancoShop9BAK(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco Shop 9 BAK - (serv03)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco Shop 9 BAK<br>
                <b>Origem física:</b> Servidor (serv03)<br>
                <b>Orígem lógica:</b> Microsfoft SQL Server 2014 - Banco: S9_Real<br>
                <b>Destino físico:</b> Servidor (serv03)<br>
                <b>Destino lógico:</b> "C:\bkp_shop9\bkp_s9real_intranet"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 5h<br>
                <b>Ferramenta:</b> Microsoft SQL Server Management Studio<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 5m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco Shop 9 BAK - (serv03)');   
            
            return $this->enviaMensagem();
        }
        private function bancoShopIntranet(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco Shop 9 Intranet - (serv05)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco Shop 9 Intranet<br>
                <b>Origem física:</b> Servidor (serv03)<br>
                <b>Orígem lógica:</b> "C:\bkp_shop9\bkp_s9real_intranet"<br>
                <b>Destino físico:</b> Servidor (serv05)<br>
                <b>Destino lógico:</b> "C:\BD_Shop9_S9Real"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 6h<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b><br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Diariamente<br>
                Obs: O procedimento é feito pelo Servidor "serv05"
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco Shop 9 Intranet - (serv03)');
            
            return $this->enviaMensagem();            
        }
        private function patrimonioCF(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Código Fonte "Patrimônio" - (serv08)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Código Fonte "Patrimônio" - (serv08)<br>
                <b>Origem física:</b> Servidor (serv08)<br>
                <b>Orígem lógica:</b> "C:\Users\administrador\.ativos"<br>
                <b>Destino físico:</b> Servidor (serv08)<br>
                <b>Destino lógico:</b> "D:\bkp_ativos"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 21h00<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 56 seg<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Código Fonte "Patrimônio"');  
            
            return $this->enviaMensagem();
        }
        private function patrimonioBD(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Banco de Dados "Patrimônio" - (serv08)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Banco de Dados "Patrimônio" - (serv08)<br>
                <b>Origem física:</b> Servidor (serv08)<br>
                <b>Orígem lógica:</b> MySQL Workbench banco ATIVOS e SYS<br>
                <b>Destino físico:</b> Servidor (serv08)<br>
                <b>Destino lógico:</b> "D:\dump_ativos"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Semanalmente (Segunda, Quarta e Sexta)<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> MySQL Workbench<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> 1m<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Segunda, Quarta e Sexta)
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Banco de Dados "Patrimônio" - (serv08)');
            
            return $this->enviaMensagem();
        }
        // private function patrimonioApache(){
        //     $this->assunto = utf8_decode('CONFERIR BACKUP - Apache "Patrimônio" - (serv08)');
        //     $this->mensagem = utf8_decode('
        //         <b>BACKUP:</b> Apache "Patrimônio" - (serv08)<br>
        //         <b>Origem física:</b> Servidor (serv08)<br>
        //         <b>Orígem lógica:</b> "C:\Program Files\Apache Software Foundation"<br>
        //         <b>Destino físico:</b> Servidor (serv08)<br>
        //         <b>Destino lógico:</b> "D:\bkp_apache ativos"<br>
        //         <b>Tipo:</b> Completo<br>
        //         <b>Frequência:</b> Diariamente<br>
        //         <b>Início da rotina:</b> 21h00<br>
        //         <b>Ferramenta:</b> Cobian Backup<br>
        //         <b>Método:</b> Automático<br>
        //         <b>Tempo aproximado de duração da rotina:</b> 56 seg<br>
        //         <b>Número de cópias mantidas:</b> 2<br>
        //         <b>Frequência de conferência manual:</b> Diariamente
        //     ');
        //     $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Apache "Patrimônio" - (serv08)');
            
        //     return $this->enviaMensagem();
        // }
        private function arquivosGeraisServ06(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Backup - Arquivos Gerais - (serv06)');
            $this->mensagem = utf8_decode('<b>BACKUP:</b> Arquivos Gerais - (serv06)');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Backup - Arquivos Gerais - (serv06)');    
            
            return $this->enviaMensagem();
        }

        #Criando Dados dos Meses
        private function imgSOServ00(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Ferramenta Windows" - (serv00)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Ferramenta Windows" - (serv00)<br>
                <b>Origem física:</b> Servidor (serv00)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows Server 2016<br>
                <b>Destino físico:</b> Servidor (serv00)<br>
                <b>Destino lógico:</b> "F:\"<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 1h<br>
                <b>Ferramenta:</b> Ferramenta de Backup do Windows Server 2016<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Sexta-Feira)
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Ferramenta Windows" - (serv00)');    
            
            return $this->enviaMensagem();
        }
        private function imgActiveServ00(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Active Boot" (HD na ATI)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Active Boot" - (serv00)<br>
                <b>Origem física:</b> Servidor (serv00)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows Server 2016<br>
                <b>Destino físico:</b> Hard Drive arquivado na sala 208 da ATI<br>
                <b>Destino lógico:</b> Cópia de Imagem do Sistema Operacional<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> 120 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Active Boot<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> 120 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Active Boot" (serv00)');    
            
            return $this->enviaMensagem();
        }
        private function arquivosGTV(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Arquivos GTV - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Arquivos GTV - (serv02)<br>
                <b>Origem física:</b> Servidor (serv02)<br>
                <b>Orígem lógica:</b> "F:\Rede\GTV"<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "G:\Backup GTV - Full"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 4h<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 25m<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Arquivos GTV - (serv02)');    
            
            return $this->enviaMensagem();
        }
        private function arquivosATI(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Arquivos ATI - (serv02)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Arquivos ATI - (serv02)<br>
                <b>Origem física:</b> Servidor (serv02)<br>
                <b>Orígem lógica:</b> "F:\Rede\ATI"<br>
                <b>Destino físico:</b> Servidor (serv02)<br>
                <b>Destino lógico:</b> "G:\Backup ATI - Full"<br>
                <b>Tipo:</b> Completo<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 2h<br>
                <b>Ferramenta:</b> Cobian Backup<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> 1h<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> Diariamente
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Arquivos ATI - (serv02)');    
            
            return $this->enviaMensagem();
        }
        private function imgSOServ06(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Ferramenta Windows" - (serv06)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Ferramenta Windows" - (serv06)<br>
                <b>Origem física:</b> Servidor (serv06)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows Server 2016<br>
                <b>Destino físico:</b> Servidor (serv06)<br>
                <b>Destino lógico:</b> "F:\"<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> Diariamente<br>
                <b>Início da rotina:</b> 1h<br>
                <b>Ferramenta:</b> Ferramenta de Backup do Windows Server 2016<br>
                <b>Método:</b> Automático<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 1<br>
                <b>Frequência de conferência manual:</b> Semanalmente (Sexta-Feira)
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Ferramenta Windows" - (serv06)');    
            
            return $this->enviaMensagem();
        }
        private function imgActiveServ06(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Active Boot" - (HD na ATI)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Active Boot" - (serv06)<br>
                <b>Origem física:</b> Servidor (serv06)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows Server 2016<br>
                <b>Destino físico:</b> Hard Drive arquivado na sala 208 da ATI<br>
                <b>Destino lógico:</b> Cópia de Imagem do Sistema Operacional<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> 120 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Active Boot<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> 120 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Active Boot" - (serv06)');    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ02(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (HD na ATI)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Acronis" - (serv02)<br>
                <b>Origem física:</b> Servidor (serv02)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows 7 Professional<br>
                <b>Destino físico:</b> Hard Drive arquivado na sala 208 da ATI<br>
                <b>Destino lógico:</b> Cópia de Imagem do Sistema Operacional<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> A cada 120 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Acronis True Image<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> 120 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (serv02)');    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ03(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (HD na ATI)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Acronis" - (serv03)<br>
                <b>Origem física:</b> Servidor (serv03)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows7 Enterprise<br>
                <b>Destino físico:</b> Hard Drive arquivado na sala 208 da ATI<br>
                <b>Destino lógico:</b> Cópia de Imagem do Sistema Operacional<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> 120 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Acronis True Image<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> 120 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (serv03)');    
            
            return $this->enviaMensagem();
        }
        private function imgAcronisServ05(){
            $this->assunto = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (HD na ATI)');
            $this->mensagem = utf8_decode('
                <b>BACKUP:</b> Imagem S.O "Acronis" - (serv05)<br>
                <b>Origem física:</b> Servidor (serv05)<br>
                <b>Orígem lógica:</b> Sistema Operacional Windows 7 Enterprise<br>
                <b>Destino físico:</b> Hard Drive arquivado na sala 208 da ATI<br>
                <b>Destino lógico:</b> Cópia de Imagem do Sistema Operacional<br>
                <b>Tipo:</b> Todo o disco do Sistema Operacional<br>
                <b>Frequência:</b> 120 dias<br>
                <b>Início da rotina:</b> 9h<br>
                <b>Ferramenta:</b> Acronis True Image<br>
                <b>Método:</b> Manual<br>
                <b>Tempo aproximado de duração da rotina:</b> NÃO IDENTIFICADO<br>
                <b>Número de cópias mantidas:</b> 2<br>
                <b>Frequência de conferência manual:</b> 120 dias
            ');
            $this->mensagemAlt = utf8_decode('CONFERIR BACKUP - Imagem S.O "Acronis" - (serv05)');    
            
            return $this->enviaMensagem();
        }

        function enviaMensagem(){
            $correio = new PHPMailer();
        
            $correio->isSMTP();
            $correio->SMTPAuth = true;
            $correio->Host = $this->host;
            $correio->Username = $this->usuario;
            $correio->Password = $this->senha;
            $correio->Port = $this->porta;
            $correio->setFrom ($this->remetente, $this->nomeRemetente);
            $correio->addAddress($this->destinatario, $this->nomeDestinatario);
            $correio->isHTML(true);
            $correio->Subject = $this->assunto;
            $correio->Body    = $this->mensagem;
            $correio->AltBody = $this->mensagemAlt;
            // $correio->addReplyTo('no-reply@email.com.br');
            // $correio->addAddress('email@email.com.br', ‘Nome’);
            // $correio->addCC('email@email.com.br', 'Cópia');
            // $correio->addBCC('email@email.com.br', 'Cópia Oculta')
            // $correio->addAttachment('/tmp/image.jpg', 'nome.jpg');
        
            if(!$correio->send()) {
                echo 'Não foi possível enviar a mensagem!<br>';
                echo 'Erro: ' . $correio->ErrorInfo;
            } else {
                echo 'Mensagem enviada!';
            }
        }

        function enviarProgramacaoDia($pTipo){
            if($pTipo == "Escala"){
                $this->gerarEscalaServicoIntervaloATI();
            }elseif($pTipo == "Relatório"){
                $this->gerarRelatorioAtrasoFaltaExtraATI();
            }
        }

        private function gerarEscalaServicoIntervaloATI(){
            $this->assunto = utf8_decode('Gerar ESCALA DE SERVIÇO e ESCALA DE INTERVALO da ATI');
            $this->mensagem = utf8_decode('Gerar ESCALA DE SERVIÇO e ESCALA DE INTERVALO da ATI');
            $this->mensagemAlt = utf8_decode('Gerar ESCALA DE SERVIÇO e ESCALA DE INTERVALO da ATI'); 
            
            return $this->enviaMensagem();
        }

        private function gerarRelatorioAtrasoFaltaExtraATI(){
            $this->assunto = utf8_decode('Gerar relatório de FALTAS, ATRASOS e EXTRAS da ATI');
            $this->mensagem = utf8_decode('Gerar relatório de FALTAS, ATRASOS e EXTRAS da ATI');
            $this->mensagemAlt = utf8_decode('Gerar relatório de FALTAS, ATRASOS e EXTRAS da ATI'); 
            
            return $this->enviaMensagem();
        }

        function mensagemPrivada(){
            $this->mensagemBreno();
            $this->mensagemLucas();
            if(date('j') != 1 && date('j') != 6){
                $this->mensagemVinicius();
            }            
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
            // $this->patrimonioApache();
            $this->arquivosAPD();
            $this->arquivosAPDSalaSom();
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
            $this->arquivosAPD();
            $this->arquivosAPDSalaSom();
            $this->relogioDePonto();
            $this->bancoShop9();
            $this->bancoDoBrasil(); 
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

        function sabado(){
        }
        
        function domingo(){
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
      