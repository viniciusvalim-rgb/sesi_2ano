<?php
$nome = readline ("digite o seu nome: ");
echo ("ola "), $nome, (" esse é o sistema onde voce poda consultar informacoes do PSI da empresa\n");
do{
    
 echo("=== SISTEMA DE CONSULTA - PSI ===\nescolha a seguir o que deseja consultar\n1 - Objetivos da PSI\n2 - Escopo da Política\n3 - Responsabilidades\n4 - Boas Práticas\n5 - Consequências\n0 - Sair\n");

 $op = readline ("digite sua opcao: ");
 
 switch($op){
    case 1:
        echo("Objetivos da PSI:\n");
        echo("- Garantir confidencialidade das informações\n");
        echo("- Manter a integridade dos dados\n");
        echo("- Assegurar disponibilidade das informações\n");
    break;

    case 2:
        echo("Escopo da Política:\n");
        echo("- Aplicável a todos os funcionários\n");
        echo("- Inclui sistemas, equipamentos e dados\n");
    break;

    case 3:
        echo("Responsabilidades:\n");
        echo("- Funcionários: seguir as regras\n");
        echo("- TI: garantir a segurança\n");
        echo("- Gestão: supervisionar e definir políticas\n");
    break;

    case 4:
        echo("Boas Práticas:\n");
        echo("- Usar senhas fortes\n");
        echo("- Não compartilhar login\n");
        echo("- Evitar e-mails suspeitos\n");
        echo("- Bloquear o computador ao sair\n");
    break;

    case 5:
        echo("Consequências:\n");
        echo("- Advertência\n");
        echo("- Suspensão\n");
        echo("- Demissão\n");
        echo("- Ações legais\n");
    break;
    
    case 0:
        echo("consulta finalizada");
    break;

    default:
        echo("opcao invalida\n");
    break;
    }
    }while($op > 0);


?>