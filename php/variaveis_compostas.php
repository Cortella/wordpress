<?php
    //se nao tem chave array se comporta de forma normal
    $variavel = array(
        //map
        "nome" => "Bruno",
        "sobrenome" => "Machado",
        "idade" => 23,
        "sexo" => "masculino",
        "masculino",
        "exemplo"
    );
    echo $variavel["nome"];
    $variavel["idade"] = 91;
    echo $variavel["idade"];
    print_r($variavel);
    echo $variavel[0];
    $produtos = array(
        0 => array(
            "nome" => "pc";
            "quantidade" => 50;
            "preco" => 2500.50;
        ),
        1 => array(
            "nome" => "video-game";
            "quantidade" => 10;
            "preco" => 1450;
        )
    );
    $produtos[] = array(
            "nome" => "memoria";
            "quantidade" => 100;
            "preco" => 450;
        );
    print_r($produtos);

?>