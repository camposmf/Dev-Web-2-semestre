<?php
    /*
    Faça o cálculo da média simples de 
    $nota_1 e $nota_2.
    Imprima a média simples.
    Imprima a condição:
        Se a média menor ou igual a 4.9, reprovado.
        Se a média entre 5 e 7, recuperação.
        Se a média acima de 7, aprovado.
    */

    function calculo_media(float $nota_1, float $nota_2):float{
        return ($nota_1 + $nota_2) / 2;
    }

    function definir_situacao(float $mediaSimples):string {
        $mensagem = '';

        if($mediaSimples <= 4.9)
            $mensagem = 'aluno reprovado!';
        else if($mediaSimples >= 5 && $mediaSimples < 7)
            $mensagem = 'aluno em recuperação!!';
        else
            $mensagem = 'aluno aprovado!!!';

        return $mensagem;
    }

    $nota_1 = 9;
    $nota_2 = 4;

    $media = calculo_media($nota_1, $nota_2);

    printf("A média simples é %d", $media);
    echo '</br></br>';

    $situacao = definir_situacao($media);

    printf("Situação: %s", $situacao);
?>