<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница про компанию</title>
    <meta name="description" content="Страница про компанию">

    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="main">
        <h1 class="text-center">Про компанию</h1>
        <p class="text-center">Здесь просто текст про компанию</p>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias, asperiores error est ex in
            molestiae nesciunt quasi reiciendis. Aliquid dolorum mollitia nesciunt quisquam!
            Deleniti eius fugiat harum sapiente voluptate.</p>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>