<?php
  error_reporting(0);
  $subject     = 'Заказ с сайта TeslaWatch';      // Тема письма
  $target_mail = '79225555735@ya.ru';             // От кого - Мыло 
  $from_name   = 'Сайт TeslaWatch';               // От кого - Имя отправителя  
  
  $order_name  = $_REQUEST['name'] ? $_REQUEST['name'] : 'Не указано';
  $order_phone = $_REQUEST['phone'] ? $_REQUEST['phone'] : 'Не указано';
  $form_name   = $_REQUEST['form_name'] ? $_REQUEST['form_name'] : 'Не указано';

  $message  = '<p>Имя: ' . $order_name . '</p>';
  $message .= '<p>Телефон: ' . $order_phone . '</p>';
  $message .= '<p>Форма: ' . $form_name . '</p>';

  if( mail_utf8($target_mail, $from_name, $target_mail, $subject, $message) ) {

    echo '<div class="top_form_head">Спасибо за обращение!</div> <p>Вам позвонят в самое ближайшее время.</p>';
  }
  else
  {

    echo '<div class="top_form_head">Ошибка отправки сообщения.</div> <p>Пожалуйста обратитесь по телефонам указаным на сайте.</p>';
  }


  function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '') 
  { 
    $from_user = "=?UTF-8?B?".base64_encode($from_user)."?=";
    $subject = "=?UTF-8?B?".base64_encode($subject)."?=";

    $headers =  "From: $from_user <$from_email>\r\n". 
                "MIME-Version: 1.0" . "\r\n" . 
                "Content-type: text/html; charset=UTF-8" . "\r\n"; 

    return mail($to, $subject, $message, $headers); 
  }
?>