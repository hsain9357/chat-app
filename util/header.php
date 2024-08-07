<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="/resources/logo.svg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/resources/logo.svg" />
    <link rel="stylesheet" href="/css/header.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <?php if (isset($styleMain)) { ?>
    <link rel="stylesheet" href="/css/style.css" />
    <?php } ?> <?php if (!isset($nofooter)) { echo '
    <link rel="stylesheet" href="/css/footer.css" />
    '; } ?>
    <script src="/util/header.js" async="async"></script>

    <title>ChatMe | Hussein Ahmed</title>
  </head>
</html>
