<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
        />
        <title>PHP - WHOAMI</title>
    </head>
    <body>
        <div class="container" style="text-align: center; margin-top: 5vh">
            <h1>PHP - WHOAMI</h1>
            <p>
                <?php
                    echo "Hello, I'm a PHP script running on " . gethostname();
                ?>
            </p>
        </div>
    </body>
</html>