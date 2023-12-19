     <?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "mail@zeno-ruefenacht.com";
    $subject = "Feedback von $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Ihre Nachricht wurde gesendet!";
    
    header("Location:https://zeno-ruefenacht.com/feedback/");
    
    ?>

<!-- 
     <script>
     /*var interval = setInterval(myURL, 1);

    function myURL() {
        document.location.href = 'https://zeno-ruefenacht.com/feedback/';
        clearInterval(interval);
    }*/
     </script>


 </body> -->

 <?php
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];
    // $to = "mail@zeno-ruefenacht.com";
    // $subject = "Feedback von $name";
    // $headers = "From: $email";

    // mail($to, $subject, $message, $headers);

    // echo "Ihre Nachricht wurde gesendet!";
    ?>