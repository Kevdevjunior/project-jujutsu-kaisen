<?php

if (isset($_POST['pseudo']) && isset($_POST['message'])){
       
    $pseudo = trim($_POST['pseudo']);
    $message = trim($_POST['message']);
 
    $size_pseudo = (iconv_strlen($pseudo));
    $size_message = (iconv_strlen($message));
 
    
 
    $error = false;
 
    if (iconv_strlen($size_pseudo < 2 || $size_pseudo > 10)) {
     
     $msg .= '<p class="php";>Le pseudo doit comporter entre 2 et 10 caractères !</p>';
     $error = true;
 }
 
    if (empty($size_message)) {
     $msg .= '<p class="php";>Le message doit comporter au moins 5 caratères !</p>';
     $error = true;
 }
 
 if ($error == false) {
     
    $rec = $pdo->prepare("INSERT INTO commentaire (id_commentaire, pseudo, commentaire, date_enregistrement) VALUE (NULL, :pseudo, :message, NOW())");
    $rec->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $rec->bindParam(':message', $message, PDO::PARAM_STR);
    $rec->execute(); 
 
 
 }
 
 
 }
 
 
 $data_text = $pdo->query("SELECT pseudo, commentaire, DATE_FORMAT(date_enregistrement, '%d/%m/%Y %H:%i:%s') AS date_fr FROM commentaire ORDER BY date_enregistrement DESC");