<?php

function mostrarDiaPT ($data) {
    $dateVar = date('N', strtotime($data));
    switch ($dateVar) {
        case 1:
            echo date('d/m/Y', strtotime($data)). "<br/>Segunda-feira";
            break;
        case 2:
            echo date('d/m/Y', strtotime($data)). "<br/>Terça-feira";
            break;
        case 3:
            echo date('d/m/Y', strtotime($data)). "<br/>Quarta-feira";
            break;
        case 4:
            echo date('d/m/Y', strtotime($data)). "<br/>Quinta-feira";
            break;
        case 5:
            echo date('d/m/Y', strtotime($data)). "<br/>Sexta-feira";
            break;
        case 6:
            echo date('d/m/Y', strtotime($data)). "<br/>Sábado";
            break;
        case 7:
            echo date('d/m/Y', strtotime($data)). "<br/>Domingo";
            break;
    };
};
mostrarDiaPT(date('Y/m/d'));

?>