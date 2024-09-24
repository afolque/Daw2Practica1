<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $hacer_algo = true;

        // Introduïm un bug: Cridem foo() abans que es defineixi
        foo();

    /* No podemos llamar a foo() desde aquí
    ya que no existe aún,
    pero podemos llamar a bar() */

        bar();

        if ($hacer_algo) {
        function foo()
        {
            echo "No existo hasta que la ejecución del programa llegue hasta mí.\n";
        }
        }

    /* Ahora podemos llamar de forma segura a foo()
    ya que $hacer_algo se evaluó como verdadero */

        if ($hacer_algo) foo();

        function bar()
        {
        echo "Existo desde el momento inmediato que comenzó el programa.\n";
        }

    ?>
</body>
</html>