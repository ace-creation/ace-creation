<?php
$to = "acecorp@gol.com";
$subject = "お問い合わせ: " . htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');

$message =
  "お名前: " . htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') . "\n" .
  "ふりがな: " . htmlspecialchars($_POST['furigana'], ENT_QUOTES, 'UTF-8') . "\n" .
  "メールアドレス: " . htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') . "\n" .
  "確認用メール: " . htmlspecialchars($_POST['email_confirm'], ENT_QUOTES, 'UTF-8') . "\n" .
  "郵便番号: " . htmlspecialchars($_POST['postal'], ENT_QUOTES, 'UTF-8') . "\n" .
  "ご住所: " . htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8') . "\n" .
  "題名: " . htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8') . "\n" .
  "メッセージ:\n" . htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$headers = "From: noreply@ace-creation.co.jp\r\n";
$headers .= "Reply-To: " . htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') . "\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "送信が完了しました。ありがとうございました。";
} else {
  echo "送信に失敗しました。時間をおいて再度お試しください。";
}
?>