<?php

namespace AsyncTaskLib\Async;

use AsyncTaskLib\Models\Scripts;

class ProcessRequest
{
    public function processar($param1, $param2)
    {
        // Instancia a classe Scripts que contém a lógica de envio do POST
        $scripts = new Scripts();
        $scripts->enviarPostAssincrono($param1, $param2);
    }
}

// Recebe os parâmetros passados via exec()
$param1 = $argv[1];
$param2 = $argv[2];

// Chama o método processar
$processRequest = new ProcessRequest();
$processRequest->processar($param1, $param2);

echo "Processamento assíncrono iniciado.\n";
