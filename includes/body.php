

<body>
  <main>
    <div class="h1barra">
      <h1 class="h1text">Painel de atendimento médico urgência</h1>
    </div>
    <div>
      <h2>Pacientes em atendimento</h2>
    </div>
    <table class="table">
      <tbody>
        <thead>
          <tr>
            <th>Nível de alerta</th>
            <th>Nome do paciente</th>
            <th>Status / Permanência</th>
            <th><center>Tempo de atendimento</center></th>
          </tr>
        </thead>
      <tfoot>
        <tr>
          <th><i>Nível de alerta</i></th>
          <th><i>Nome do paciente</i></th>
          <th><i>Status / Permanência</i></th>
          <th ><i><center>Tempo de atendimento</center></i></th>
        </tr>
      </tfoot>
      <tbody>
        <?php
        //O foreach exibe todas as informações, sem precisar especificar o que deve ser exibido, 
        //simplificando o seu código, ex. $alert = $patients['alertpac']
        // Obtendo os dados por meio de um loop while
        while ($patients = mysqli_fetch_array($sql)) {
          $alert = $patients['alertpac'];
          $name = $patients['namepac'];
          $status = $patients['status'];
          $time = $patients['time'];
          if ($alert == "VERMELHO") {
            $classalert = "red";
          } elseif ($alert == "AMARELO") {
            $classalert = "yellow";
          } elseif ($alert == "VERDE") {
            $classalert = "green";
          } elseif ($alert == "AZUL") {
            $classalert = "blue";
          } else {
            $classalert = "";
          }
          if ($time < "00:10:00") {
            $classtime = "bluetime";
          } elseif ($time < "00:23:00") {
            $classtime = "greentime";
          } elseif ($time < "00:25:00") {
            $classtime = "yellowtime";
          } else {
            $classtime = "redtime";
          }
          echo "
          <tr>
          <td class='" . $classalert . "'>" . $alert . "</td>
          <td class='" . $classalert . "'>" . $name . "</td>
          <td class='" . $classalert . "'>" . $status . "</td>
          <td class='" . $classtime . "' align='center'>" . $time . "</td>
          </tr>
          ";
        }
        //mysqli_close($sql);
        ?>
      </tbody>
    </table>
    <div class="hiddendiv">
      <h3 class="h3animation">Hospital Jayme da fonte - Nossa especialidade é você</h3>
    </div>
  </main>
</body>