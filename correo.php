<?php
    $destinatario = 'info@octaviobikes.com';
    if(isset($_POST['enviar'])){
        if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['email']) && !empty($_POST['asunto']) &&
        !empty($_POST['mensaje'])){
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];


            $header = "From: noreply@example.com" . "\r\n";
            $header = "Reply-To: noreply@example.com" . "\r\n";
            $header = "X-Mailer: PHP/" . phpversion();
            $mail = @media($destinatario, $email, $asunto,$mensaje,$header);
            if($mail){
                echo "<h4> ¡Correp enviado con éxito!</h4>";
            }

            echo "<script>alert('correo enviado exitosamente')</script>";
            echo "<script> setTimeout(\"location.href='index.html'\", 1000</script>;
        }
    }

?>




