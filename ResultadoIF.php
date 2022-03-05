<div class="container">
    <?php
        $numeroif = $_POST["numeroif"];
        $mayor = 'El Numero Ingresado Es Mayor A 10';
        $menor = 'El Numero Ingresado Es Menor A 10';

        if($numeroif > 10)
        {
            echo $mayor;
        }
        else
        {
            echo $menor;
        }
    ?>
</div>