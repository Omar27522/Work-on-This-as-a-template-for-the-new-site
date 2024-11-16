<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English and Spanish</title>
</head>
<!-- Here What I want to do is build a system that can hold the English and Spanish articles
        and to display one or the other when the language button is pressed -->
<body>
<hr style="border: 3px dashed darkgray; width: 70%;">


<a href="?article=<?php echo $_GET['article'] ?>&lang=es">Spanish</a>
<a href="?article=<?php echo $_GET['article'] ?>&lang=en">English</a>

<div style="padding-top: 50%; text-align: center">
    <nav>
        <a href="?article=1&lang=<?php echo isset($_GET['lang']) ? $_GET['lang'] : 'en'; ?>">Article 1</a>
        <a href="?article=3&lang=<?php echo isset($_GET['lang']) ? $_GET['lang'] : 'en'; ?>">Article 3</a>
    </nav>
</div>

<?php
if (isset($_GET['article']) && isset($_GET['lang'])) {
    $article = $_GET['article'];
    $lang = $_GET['lang'];

    if ($article == 1) {
        if ($lang == 'es') {
            echo "Así que te paso la palabra. Por favor, no me envíes la solución, porque para cuando leas esto, ya la habré encontrado o estaré en un hogar de ancianos. En cualquier caso, no me servirá de nada. Envíala al Director General de Correos o a uno de los Geddes o a Mary Pickford. Querrás quitártelo de la mente.";
        } else {
            echo "So I hand the word over to you. Please do not send the solution to me, for by the time you read this I shall either have found it out or else I shall be in a nursing home. In either case it will be of no use to me. Send it to the Postmaster-General or one of the Geddeses or Mary Pickford. You will want to get it off your mind.";
        }
    } elseif ($article == 3) {
        if ($lang == 'es') {
            echo "Uno, Dos, Tres";
        } else {
            echo "One, Two, Three";
        }
    }
}

/*


This PHP code snippet is used to display a simple bilingual article viewer.

Here's what it does:

1. It displays two links to switch between Spanish and English languages.
2. It displays two article links (Article 1 and Article 3) with the current language as a parameter.
3. If both `article` and `lang` parameters are set in the URL, it displays the corresponding article text in the chosen language.

The article texts are hardcoded in the code snippet.
*/
?>
</body>
</html>