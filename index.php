<!DOCTYPE html>

<html lang="cs-cz">
    <head>
            <meta charset="utf-8" />
            <title>Galerie obrázků</title>
    </head>

    <body>
        <h1>Galerie obrázků</h1>
        <?php
        require_once('tridy/Galerie.php');

        $galerie = new Galerie('obrazky', 5);
        $galerie->nacti();
        $galerie->vypis();

        ?>
    </body>
</html>
