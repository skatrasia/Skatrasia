<?php
    $validpalsu = rand(1000000,9999999);
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $pesan = "Terimakasih telah melakukan request, pastikan data diri anda benar.. Nama: ".$nama.", Email: ".$email.", Jika sudah benar silahkan transfer uang ke ATM BRI Norek 3388-01-028216-53-6 A/N Skatrasia Indonesia";
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.mainapi.net/smsnotification/1.0.0/messages");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=".$nomor."&content=".$pesan."");
    curl_setopt($ch, CURLOPT_POST, 1);

    $headers = array();
    $headers[] = "Content-Type: application/x-www-form-urlencoded";
    $headers[] = "Accept: application/json";
    $headers[] = "Authorization: Bearer 7c40faec76865cf1f60b5cc97162b2bc";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    header('location:index.php');
 ?>
