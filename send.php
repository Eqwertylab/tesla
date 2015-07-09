<?php
  if (isset($_REQUEST["template"]))
  {

    $allowed_templates = array(

      "email" => "79225555735@ya.ru"
    );

    if (!array_key_exists($_REQUEST["template"], $allowed_templates))
      die("Template name not allowed");

    $template_file = "mail-templates/".$_REQUEST["template"].".html";
    $target_mail = $allowed_templates[$_REQUEST["template"]];
    $name = $_POST['name'] ? $_POST['name'] : 'Сайт TeslaWatch';
    $email = $_POST['email'] ? $_POST['email'] : '79225555735@ya.ru';
    $subject = $_POST['subject'] ? $_POST['subject'] : 'Обращение с сайта TeslaWatch';

    $message = file_get_contents($template_file, true);

    foreach($_POST as $key => $value)
      $message = str_replace("[[$key]]", $value, $message);

    if( mail_utf8($target_mail, $name, $email, $_POST['subject'], $message) ) {

      die('<div class="top_form_head">Спасибо за обращение!</div> <p>Вам позвонят в самое ближайшее время.</p>');
    }
    else
    {

      die('<div class="top_form_head">Ошибка отправки сообщения.</div> <p>Пожалуйста обратитесь по телефонам указаным на сайте.</p>');
    }
  }
  else
  {
      die("Template name not received");
  }

  function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '') { 
    $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $headers =  "From: $from_user <$from_email>\r\n". 
                "MIME-Version: 1.0" . "\r\n" . 
                "Content-type: text/html; charset=UTF-8" . "\r\n"; 

    return mail($to, $subject, $message, $headers); 
  }
?>