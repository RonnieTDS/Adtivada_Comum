  <!DOCTYPE html>
<html>
    <head>
        <title>Qual combustível abastecer</title>
        
    </head>
    <body>
        <form action="" method="POST">
            <table align="center">
                <tr>
                    <td>Preço Gasolina Adtivada:</td>
                    <td><input type="text" name="preco_gasolina_adtivada"></td>
                </tr>
                <tr>
                    <td>Consumo Gasolina Adtivada:</td>
                    <td><input type="text" name="consumo_gasolina_adtivada"></td>
                </tr>
                <tr>
                    <td>Preço Gasolina Comum:</td>
                    <td><input type="text" name="preco_gasolina_comum"></td>
                </tr>                
                <tr>
                    <td>Consumo Gasolina Comum :</td>
                    <td><input type="text" name="consumo_gasolina_comum"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="enviar" value="Enviar"></td>
                </tr>
            </table>
        </form>
        
    </body>
</html>

<?php

if (isset($_POST["enviar"]))
{    

    $preco_gasolina_adtivada  = $_POST["preco_gasolina_adtivada"];
    $consumo_gasolina_adtivada = $_POST["consumo_gasolina_adtivada"];
    $gasolina_adtivada = $preco_gasolina_adtivada/$consumo_gasolina_adtivada;


    $preco_gasolina_comum  = $_POST["preco_gasolina_comum"];
    $consumo_gasolina_comum = $_POST["consumo_gasolina_comum"];
    $gasolina_comum = $preco_gasolina_comum/$consumo_gasolina_comum;
   


    echo "<br>Preço do Gasolina Adtivada: ". $gasolina_adtivada."<br>";
    echo "<br>Preço do Gasolina Comum: ". $gasolina_comum ."<br>";


    if ($gasolina_adtivada<$gasolina_comum)
    {
        echo "<br>Abasteça Gasolina Adtivada!";
    }
    if ($gasolina_adtivada>$gasolina_comum)
    {
        echo"<br>Abasteça Gasolina Comum!";

    }


   

    echo "<br>";

   
}
?>