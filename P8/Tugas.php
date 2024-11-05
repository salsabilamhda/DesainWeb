<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'tujuan_email@example.com';
  $headers = 'From: ' . $email . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  $mail_sent = mail($to, $subject, $message, $headers);

  if ($mail_sent) {
    echo 'Email berhasil dikirim!';
  } else {
    echo 'Gagal mengirim email!';
  }
?>