<!doctype html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="favicon.png" type="image/x-icon">
<meta charset="UTF-8">
<span class="bg">

    <head>
        <style>
        body {
            font-family: sans-serif;
            color: white;
            text-align: center;
            overflow: hidden;
            background-color: black;
            margin: 0px;
        }

        h1 {
            padding: auto;
            margin: auto;
        }

        input,
        textarea {
            font-family: sans-serif;
        }

        .Formular {
            z-index: 100;
        }

        img {
            display: block;
            width: 100vw;
            height: 100vh;
            position: absolute;
            margin: 0px;
            padding: 0px;
            filter: opacity(.5);
        }

        p {
            font-family: sans-serif;
            color: gray;
            vertical-align: bottom;
        }

        input{
            border: none;
            border-radius: 5px;
            background-color: #dedede;
            padding: 6px;
        }
        </style>
        <title>Feedback-Formular</title>
    </head>

    <img src="Lichtstreifen 29.1.2021.jpg" style="z-index: -100;">

    <body>
        <br><br>
        <h1>Feedback Formular</h1> <br>
        <h3>Bitte füllen Sie das Formular aus, um mir Ihr Feedback zu schicken:</h3> <br>
        <span class="Formular">
            <form method="POST" action="send_feedback.php">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Namen"><br><br>
                <label for="email">E-Mail-Adresse:</label><br>
                <input type="email" id="email" name="email" placeholder="E-Mail"><br><br>
                <label for="message">Nachricht:</label><br>
                <textarea id="message" name="message" placeholder="Feedback"></textarea><br><br>
                <input type="submit" value="Senden">
            </form>
        </span>
    </body>
</span>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="copyright">
    <p>Copyright &copy; <?php echo date("Y"); ?> Zeno Rüfenacht - all rights reserved</p>
</div>
</body>

<!-- <div class="g-recaptcha" data-sitekey="6LdpNnIjAAAAAP90V6rCGm1-vxNJDJK8r3ynBVlP"></div>
<script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

<head>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LdpNnIjAAAAAP90V6rCGm1-vxNJDJK8r3ynBVlP">
    </script>
    <script>
    grecaptcha.enterprise.ready(async () => {
        const token = await grecaptcha.enterprise.execute('6LdpNnIjAAAAAP90V6rCGm1-vxNJDJK8r3ynBVlP', {
            action: 'homepage'
        });
        // IMPORTANT: The 'token' that results from execute is an encrypted response sent by
        // reCAPTCHA Enterprise to the end user's browser.
        // This token must be validated by creating an assessment.
        // See https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
    });
    </script>
    <script>
    function onSubmit(token) {
        document.getElementById("demo-form").submit();
    }
    </script>

</head>

</html>