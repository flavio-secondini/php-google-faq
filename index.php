<?php
  $faq_database = [
    "<h1>Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?</h1>" =>
      [
        "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>",
        "<p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>",
        "<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/'>Centro Google per la sicurezza online</a>.</p>",
        "<p><a href='https://privacy.google.com'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
      ],
    "<h2>Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?</h2>" =>
      [
        "<p>Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.</p>",
        "<p>Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.</p>",
        "<p>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel <a href='https://www.google.com/safetycenter/'>Centro Google per la sicurezza online</a>.</p>",
        "<p><a href='https://privacy.google.com'>Scopri</a> quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.</p>"
      ],
    "<h2>Perché il mio account è associato a un paese?</h2>" =>
      [
        "<p>Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:</p>",
        "<ol><li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:<ol type='a'><li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda, Liechtenstein e Norvegia) o in Svizzera.</li><li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li></ol></li><li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li></ol>",
        "<p>Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account.</p>"
      ],
    "<h3>Stabilire il paese associato al tuo account</h3>" =>
      [
        "<p>Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa, usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.</p>",
        "<p>Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un confine territoriale. <a href='country-association-contact-us'>Contattaci</a> se ritieni che il paese associato al tuo account sia sbagliato.</p>"
      ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Google faq</title>
  <link rel="stylesheet" href="./dist/master.css">
</head>
<body>
  <header>

  </header>

  <main>
    <?php
      foreach ($faq_database as $k => $content) {
        echo $k;

        foreach ($content as $paragraph) {
          echo $paragraph;
        }
      }
    ?>
  </main>

  <footer>

  </footer>
</body>
</html>
