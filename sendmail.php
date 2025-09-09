<?php
$to = "acecorp@gol.com";
$subject = "お問い合わせ: " . $_POST['subject'];
$message =
  "お名前: " . $_POST['name'] . "\n" .
  "ふりがな: " . $_POST['furigana'] . "\n" .
  "メールアドレス: " . $_POST['email'] . "\n" .
  "確認用メール: " . $_POST['email_confirm'] . "\n" .
  "郵便番号: " . $_POST['postal'] . "\n" .
  "ご住所: " . $_POST['address'] . "\n" .
  "題名: " . $_POST['subject'] . "\n" .
  "メッセージ:\n" . $_POST['message'];

$headers = "From: " . $_POST['email'];

if (mail($to, $subject, $message, $headers)) {
  echo "送信が完了しました。ありがとうございました。";
} else {
  echo "送信に失敗しました。時間をおいて再度お試しください。";
}
?>