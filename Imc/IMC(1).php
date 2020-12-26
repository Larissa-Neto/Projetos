<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>IMC - Indice de Massa Corporal</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col align-self-center">
        <form method="POST">
          <div class="col align-self-center">
            <h1> IMC - Indice de massa corporal </h1>
            <h2> Adicione as informações nescessárias </h2>
          </div>

          <div class="form-group">
           <label>Nome: </label>
           <input type="text" name="nome">
          </div>
          <div class="form-group">
            <label>Peso..: </label>
            <input type="number" name="peso" required placeholder="Digite seu peso KG ">
          </div>
          <div class="form-group">
           <label>Altura: </label>
            <input type="number" name="altura" required placeholder="Digite sua altura M " step="0.1">
          </div>
          <div class="form-group">
           <label>Sexo: </label>
           <select name="sexo">
             <option value="1">Feminino</option>
             <option value="2">Masculino</option>
           </select>
          </div>
          <br/>  
          <input type="submit" name="btncalc" value="Calcular">

        </form>
    
     <?php
        $dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);
        
        if(isset($dados["btncalc"])){
            
            $resultado = $dados["peso"]/(pow($dados["altura"], 2));
            echo "<hr/>";
            $resultado = number_format($resultado, 2, ",", ".");
            echo $dados["nome"];
            echo "<br/>";
            echo "<br/>";
            echo $resultado;

          if($dados["sexo"] == 2){ 
            if ($resultado <= 18) {
             echo "<br/>" ;
            echo "Muito abaixo do peso";
            }elseif ($resultado <= 20) {
              echo "<br/>";
              echo "Abaixo do peso";
            } elseif ($resultado <= 22.5) {
              echo "<br/>";
              echo "Peso normal"; 
            } elseif ($resultado <= 24 ) {
              echo "<br/>";
              echo "Acima do peso";
            } elseif ($resultado <= 32) {
              echo "<br/>";
              echo "Obesidade I";
            } elseif ($resultado <= 35) {
              echo "<br/>";
              echo "Obesidade II(severa)";
            } else{
              echo "<br/>";
              echo "Obsidade III(mórbida)";
            } 
          } else {
            if ($resultado <= 21) {
             echo "<br/>" ;
            echo "Muito abaixo do peso";
            } elseif ($resultado <= 23.5) {
              echo "<br/>";
              echo "Abaixo do peso";
            } elseif ($resultado <= 24.5) {
              echo "<br/>";
              echo "Peso normal"; 
            } elseif ($resultado <= 26.5) {
              echo "<br/>";
              echo "Acima do peso";
            } elseif ($resultado <= 31.5) {
              echo "<br/>";
              echo "Obesidade I";
            } elseif ($resultado <= 37) {
              echo "<br/>";
              echo "Obesidade II(severa)";
            } else{
              echo "<br/>";
              echo "Obsidade III(mórbida)";
            } 
          }
        }
     ?>
      </div>
     </div>
   </div>
  </body>
</html>