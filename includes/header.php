<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel médico</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/script. js"></script>
  <link rel="shortcut icon" type="image/png" href="src/assets/favicon.png" />
</head>
<header>
  <section class="section">
    <div>
      <img class="logo" src="src/assets/Logo Jayme da Fonte.png">
    </div>
    <div id="datahora">
      <script type="text/javascript">
        document.write(new Date().getHours() + ':' + new Date().getMinutes() + ':' + new Date().getSeconds() + ' / ' + new Date().getDate() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getFullYear());
      </script>
    </div>
  </section>
</header>