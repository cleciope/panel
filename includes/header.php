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

    <div id="data-hora" class="datahora"></div>
    <script>
      const zeroFill = n => {
        return ('0' + n).slice(-2);
      }
      const interval = setInterval(() => {
        const now = new Date();
        const dataHora = zeroFill(now.getUTCDate()) + '/' + zeroFill((now.getMonth() + 1)) + '/' + now.getFullYear() + ' ' + zeroFill(now.getHours()) + ':' + zeroFill(now.getMinutes()) + ':' + zeroFill(now.getSeconds());
        document.getElementById('data-hora').innerHTML = dataHora;
      }, 1000);
    </script>



  </section>
</header>