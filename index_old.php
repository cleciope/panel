<?php 
include("DB\Sql.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" type="image/png" href="src/assets/favicon.png" />


  <title>Painel médico</title>
</head>

<body>

  <div>
    <img class="logo" src="src/assets/Logo Jayme da Fonte.png">
  </div>
  <div id="datahora">
    <script type="text/javascript">
      document.write(new Date().getHours() + ':' + new Date().getMinutes() + ':' + new Date().getSeconds() + ' / ' + new Date().getDate() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getFullYear());
    </script>
  </div>
  <div class="h1barra">
    <h1 class="h1text">Painel de atendimento médico urgência</h1>
  </div>
  <div class="h2barra">
    <h2>Pacientes em atendimento</h2>
  </div>
  <div>
    <table id="">
      <tbody>
        <thead>
          <tr>
            <th>
              Tempo de atendimento
            </th>
            <th>
              Status / Permanência
            </th>
            <th>
              Sexo
            </th>
            <th>
              Nome do paciente
            </th>
            <th>
              Nível de alerta
            </th>
          </tr>
        </thead>
      <tfoot>
        <tr>
          <th>
            <i>Tempo de atendimento</i>
          </th>
          <th>
            <i>Status / Permanência</i>
          </th>
          <th>
            <i>Sexo</i>
          </th>
          <th>
            <i>Nome do paciente</i>
          </th>
          <th>
            <i>Nível de alerta</i>
          </th>
        </tr>
      </tfoot>
      <tbody>
        {loop="$pacientes"}
        <tr>
          <td>{$value.idpac}</td>
          <td>{$value.nomepac}</td>
          <td>{$value.despac}</td>
          <td>{$value.idpac}</td>
          <td>{$value.idpac}</td>
        </tr>
        {/loop}
      </tbody>
    </table>
  </div>
  <div class="hiddendiv">
    <h3 class="h3animation">Hospital Jayme da fonte - Nossa especialidade é você</h3>
  </div>
  </div>
</body>

</html>