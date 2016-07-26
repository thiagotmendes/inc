<?php
  require_once ('../../../../wp-includes/class-phpmailer.php');
  require_once ('../../../../wp-includes/class-smtp.php');

  $curso_escolhido  = $_POST['curso-escolhido'];
  $cpf              = $_POST['cpf'];
  $identidade       = $_POST['identidade'];
  $orgaoemissor     = $_POST['orgaoemissor'];
  $nome             = $_POST['nome'];
  $sexo             = $_POST['sexo'];
  $data_nascimento  = $_POST['data_nascimento'];
  $naturalidade     = $_POST['naturalidade'];
  $telefone         = $_POST['telefone'];
  $cel              = $_POST['cel'];
  $email            = $_POST['email'];
  $cep              = $_POST['cep'];
  $endereco         = $_POST['endereco'];
  $num              = $_POST['num'];
  $complemento      = $_POST['complemento'];
  $bairro           = $_POST['bairro'];
  $cidade           = $_POST['cidade'];
  $estado           = $_POST['estado'];
  $nome_mae         = $_POST['nome-mae'];
  $nome_pai         = $_POST['nome-pai'];
  $curso_anterior   = $_POST['curso_anterior'];
  $data_conclusao   = $_POST['data_conclusao'];
  $como_conheceu    = $_POST['como_conheceu'];
  $li_aceito        = $_POST['aceito'];
  $data_matricula   = $_POST['data'];
  $parcela          = $_POST['parcela'];

  $mail_body = "<table border='1' cellspacing='0' cellpadding='15' width='100%'>";
    $mail_body .= "<tr>";
      $mail_body .= "<th colspan='3'> <h3>Inscrição via site Graduamais</h3> </th>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Curso: $curso_escolhido </td>";
      $mail_body .= "<td> Data de Pré-matricula: $data_matricula </td>";
      $mail_body .= "<td> Escolha de parcelamento: $parcela </td>";
    $mail_body .= "</tr>";
  $mail_body .= "</table>";

  $mail_body .= "<table border='1' cellspacing='0' cellpadding='15' width='100%'>";
    $mail_body .= "<tr>";
      $mail_body .= "<th colspan='4'> Identificação </th>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> CPF: $cpf </td>";
      $mail_body .= "<td> Identidade: $identidade </td>";
      $mail_body .= "<td colspan='2'> Orgão Emissor: $orgaoemissor </td>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Nome: $nome </td>";
      $mail_body .= "<td> Sexo: $sexo </td>";
      $mail_body .= "<td> Data Nascimento: $data_nascimento </td>";
      $mail_body .= "<td> Naturalidade: $naturalidade </td>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Telefone: $telefone </td>";
      $mail_body .= "<td> Celular: $celular </td>";
      $mail_body .= "<td colspan='2'> Email: $email </td>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> CEP: $cep </td>";
      $mail_body .= "<td> Endereço: $endereco </td>";
      $mail_body .= "<td> Nº: $num </td>";
      $mail_body .= "<td> Complemento: $Complemento </td>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Bairro: $bairro </td>";
      $mail_body .= "<td colspan='2'> Cidade: $cidade </td>";
      $mail_body .= "<td> Estado: $estado </td>";
    $mail_body .= "</tr>";
  $mail_body .= "</table>";

  $mail_body .= "<table border='1' cellspacing='0' cellpadding='15' width='100%'>";
    $mail_body .= "<tr>";
      $mail_body .= "<th colspan='2'> Filiação </th>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Nome da mãe: $nome_mae </td>";
      $mail_body .= "<td> Nome do Pai: $nome_pai </td>";
    $mail_body .= "</tr>";
  $mail_body .= "</table>";

  $mail_body .= "<table border='1' cellspacing='0' cellpadding='15' width='100%'>";
    $mail_body .= "<tr>";
      $mail_body .= "<th colspan='3'> Conclusão de Curso </th>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Curso de Graduação: $curso_anterior </td>";
      $mail_body .= "<td> Data de Conclusão: $data_conclusao </td>";
      $mail_body .= "<td> Como nos conheceu: $como_conheceu </td>";
    $mail_body .= "</tr>";
  $mail_body .= "</table>";

  $mail_body .= $li_aceito;

  // Inicia a classe PHPMailer
  $mail = new PHPMailer();

  // Define os dados do servidor e tipo de conex�o
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->IsSMTP(); // Define que a mensagem ser� SMTP
  $mail->Host = "localhost"; // Endere�o do servidor SMTP
  $mail->SMTPAuth = true; // Usa autentica��o SMTP? (opcional)
  $mail->Username = 'smtp@homeofficemoveis.com'; // Usu�rio do servidor SMTP
  $mail->Password = 'amor2000'; // Senha do servidor SMTP

  // Define o remetente
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->From = "contato@graduamais.fourmedia.com.br"; // Seu e-mail
  $mail->FromName = 'Gradua Mais'; // Seu nome

  // Define os destinat�rio(s)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  //$mail->AddAddress('pierreairam@gmail.com', 'Home Ofiice');
  //$mail->AddAddress('norma@homeofficemoveis.com', 'Home Ofiice');
  $mail->AddAddress('thiago@4media.com.br', 'Gradua Mais');
  //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
  //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta

  // Define os dados técnicos da Mensagem
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
  $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

  // Define a mensagem (Texto e Assunto)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->Subject  = "Envio de Matricula"; // Assunto da mensagem
  $mail->Body = $mail_body;
  //$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n";

  // Define os anexos (opcional)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

  //Obtendo info. dos arquivos
  $f_name = $_FILES['arquivo']['name'];
  $f_tmp = $_FILES['arquivo']['tmp_name'];
  $f_type = $_FILES['arquivo']['type'];

  $mail->AddAttachment($f_tmp, $f_name);  // Insere um anexo

  // Envia o e-mail
  //$enviado = $mail->Send();

  // Limpa os destinat�rios e os anexos
  $mail->ClearAllRecipients();
  $mail->ClearAttachments();

  // Exibe uma mensagem de resultado
  if ($enviado) {
    echo $mail_body;
  } else {
  	echo "Não foi possível enviar o e-mail.<br /><br />";
  	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
  }

?>
