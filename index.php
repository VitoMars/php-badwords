<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
// Creare una variabile con un paragrafo di testo a vostra scelta.
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.";
// Una parola da censurare viene passata dall'utente tramite parametro GET.
$badword = $_GET["key"];
$newText = str_replace($text, "***", $badword);
?>

<!-- Stampare a schermo il paragrafo e la sua lunghezza. -->
<p><?php echo $text ?></p>
<p><?php echo strlen($text) ?></p>
<!-- Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<p><?php echo $newText ?></p>