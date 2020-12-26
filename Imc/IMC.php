<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>IMC - Indice de Massa Corporal</title>
</head>
<body>
  <form method="POST">
    <div>
      <h1> IMC - Indice de massa corporal </h1>
      <h2> Adicione as informações nescessárias </h2>
    </div>
    <label>Nome: </label>
    <input type="text" name="nome">
    <br/>
    <br/>
    <label>Peso..: </label>
    <input type="number" name="peso" required placeholder="Digite seu peso em KG">
    <br/>
    <br/>
    <label>Altura: </label>
    <input type="number" name="altura" required placeholder="Digite sua altura em M" step="0.11">
    <br/>
    <br/>  
    <input type="submit" name="btncalc" value="Calcular">
  </form>
    
     <?php
        $dados= filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(isset($dados["btncalc"])):
            
            $resultado = $dados["peso"]/(pow($dados["altura"], 2));
            echo "<hr/>";
            $resultado = number_format($resultado, 2, ",", ".");
            echo $dados["nome"];
            echo "<br/>";
            echo "<br/>";
            echo $resultado;

            if ($resultado < 17) {
             echo "<br/>" ;
            echo "Muito abaixo do peso";
            }elseif (($resultado >=17 ) and ($resultado <= 18.49)) {
              echo "<br/>";
              echo "Abaixo do peso";
            } elseif (($resultado >=18.49 ) and ($resultado <= 24.99)) {
              echo "<br/>";
              echo "Peso normal"; 
              } elseif (($resultado >=25) and ($resultado <= 29.99 )) {
              echo "<br/>";
              echo "Acima do peso";
            } elseif (($resultado >=30 ) and ($resultado <= 34.99)) {
              echo "<br/>";
              echo "Obesidade I";
            } elseif (($resultado >=35 ) and ($resultado <= 39.99)) {
              echo "<br/>";
              echo "Obesidade II(severa)";
            } elseif ($resultado  > 40 )  {
              echo "<br/>";
              echo "Obsidade III(mórbida)";
            } 
            endif; 
     ?>
</body>
</html>