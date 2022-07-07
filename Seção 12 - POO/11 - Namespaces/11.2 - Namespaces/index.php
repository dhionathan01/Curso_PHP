<?php 
    require "./bibliotecas/lib1/lib1.php";
    require "./bibliotecas/lib2/lib2.php";

    use A\Cliente; // Por meio dessa chamda a classe cliente do namespace B entra no contexto
    use B\Cliente as NB; // Dando alias(apelido) a um namespace

    // Instanciando Cliente do namespace sem apelido
    $c = new Cliente();
    print_r($c);
    echo "<br>";
    echo $c->__get('nome');

   // instanciando Cliente do namespace com apelido 
    $c = new NB();
    print_r($c);
    echo "<br>";
    echo $c->__get('nome');

?>