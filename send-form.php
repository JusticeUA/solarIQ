<?php
$phone_number = $_POST['phone_number'];
$name = $_POST['name'];

$phone_number = htmlspecialchars($phone_number);
$phone_number = urldecode($phone_number);
$phone_number = trim($phone_number);

$name = htmlspecialchars($name);
$name = urldecode($name);
$name = trim($name);

mail("vasya.ganec@gmail.com", "Заявка з сайту", " Ім'я: ".$name, " Телефон: ".$phone_number, "From:info@iqsolar.com.ua");

if (mail("vasya.ganec@gmail.com", "Заявка з сайту", " Ім'я: ".$name, " Телефон: ".$phone_number, "From:info@iqsolar.com.ua"))
{
    echo "Ваш лист успішно відравлено";
} else {
    echo "При відправці сталася помилка";
}
?>