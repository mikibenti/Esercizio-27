<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestione</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $costo = intval($_POST["costo"]);
        $quantita = $_POST["quantita"];
        if(isset($_POST['radio'])) {
            $pagamento = $_POST['radio'];
        } else {
            $pagamento = "Contanti";
        }        
        $totale = $quantita * $costo;
        $usato = "";
        if(isset($_POST['check1'])) {
            $usato = "Oggetto Usato";
            $totale = $totale-(($totale/100)*20);
        } else {
            $usato = "Oggetto Nuovo";
        }
        if($pagamento == "Carta") {
            $totale += 2;
        }
        echo "<ul>
                <li>Nome : $nome</li>
                <li>Costo cd. uno : $costo</li>
                <li>Quantità : $quantita</li>
                <li>$usato</li>
                <li>Metodo di Pagamento : $pagamento</li>
                <li>Totale : $totale €</li>
             </ul>";
        ?>
</body>
</html>