<div class="container">
    <?php
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if ($numero1 == $numero2) 
        {
            echo "Los Numeros Ingresados Son Iguales";
        } 
        elseif ($numero1 > $numero2) 
        {
            echo "Numero 1 Es Mayor Que Numero 2";
        }
        elseif ($numero1 < $numero2) 
        {
            echo "Numero 2 Es Mayor Que Numero 1";
        }
    ?>
</div>