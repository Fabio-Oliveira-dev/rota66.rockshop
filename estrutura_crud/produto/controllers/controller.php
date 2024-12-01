<?php
if (isset($_REQUEST["pagina"])) {
    switch ($_REQUEST["pagina"]) {
        case "cadastro":
            require_once("views/cadastro_view.php");
            break;
        
        case "pesquisa":
            require_once("services/pesquisa_service.php");
            require_once("views/pesquisa_view.php");
            break;
    }
}