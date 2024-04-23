<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if (isset($title)): ?>
        <?php echo $title; ?>

        <?php else: ?>
        Mon site
        <?php endif; ?>
    </title>
</head>

<body>

    <div class="navbar">
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Accueil</a>
        <a href="contact.php"><i class="fa fa-fw fa-envelope"></i> Nous Contacter</a>
    </div>

</body>

</html>