<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="<?php echo url_to('contact.store'); ?>" method="post">
    <input type="text" placeholder="Your name">
        <?php echo csrf_field(); ?>
    <button type="submit">Send</button>

</form>
</body>
</html>