<!DOCTYPE html>
<html lang="pl">
    <head>
    <meta charset="utf-8">
    <title>Darmowy Ebook o HTML!</title>
    <meta name="description" content="Wysyłanie maili w PHP - funkcja mail(),
    Mailer, SwiftMailer">
    <meta name="keywords" content="php, kurs, PDO, połączenie, MySQL">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
	<link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Test wysyłania e-mailer!</h1>
            </header>
            <main>
                <article>
                    <?php
                        $to='szymon.tarasiewicz@wp.pl';
                        $from='Nauka backendu\'u <no-reply@domena.pl>';
                        $replyTo='Coś tam <szymektarasiewicz@onet.pl>';
                        $subject='Darmowy, świetny ebook - HTML na przykład';
                        $massage='<p>Dzień dobry! '."\r\n\r\n".' Oto link do naszego świetnego ebook\'a: 
                        <a href="https://domena.pl/ebook.pdf">POBIERZ EBOOKA</a></p>';
                        mail($to, $subject, $message, $headers);
                    ?>
                </article>
            </main>
        </div>
    </body>
</html>