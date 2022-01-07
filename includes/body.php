
<main>
  
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
  <div >
    <h2>Pacientes em atendimento</h2>
  </div>
  
    <table class="table">
      <tbody>
        <thead>
          <tr>
            <th>Nível de alerta</th>
            <th>Nome do paciente</th>
            <th>Status / Permanência</th>
            <th>Tempo de atendimento</th>
          </tr>
        </thead>
      <tfoot>
        <tr>
          <th><i>Nível de alerta</i></th>
          <th><i>Nome do paciente</i></th>
          <th><i>Status / Permanência</i></th>
          <th><i>Tempo de atendimento</i></th>
        </tr>
      </tfoot>
      <tbody>
        
      <?php
        //Exibir valores na tela
        //Esta forma isenta o uso destas tags html em seu código. 
        //O foreach exibe todas as informações, sem precisar especificar o que deve ser exibido, 
        //simplificando o seu código, ex. $alert = $patients['alertpac']

        // Obtendo os dados por meio de um loop while
            while ($patients = mysqli_fetch_array($sql))
        {
          $alert = $patients['alertpac'];
          $name = $patients['namepac'];
          $status = $patients['status'];
          $time = $patients['time'];
          
          if($alert == ""){
            $class="";
          }elseif($alert == "VERMELHO"){
            $class="red";
          }elseif($alert == "AMARELO"){
            $class="yellow";
          }elseif($alert == "VERDE"){
            $class="green";
          }else{
            $class="blue";
          }
          echo "
          <tr class='".$class."'>
          <td>".$alert."</td>
          <td>".$name."</td>
          <td>".$status."</td>
          <td>".$time."</td>
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
  </div>

</main>


