<?php

namespace Teelah\AsyncTask\Services;

class AsyncTaskService {

    public function executarProcessoAssincrono($param1, $param2) {

        // Caminho para o script ou para a classe que executa o processo assíncrono
        $scriptPath = __DIR__ . '/../Async/ProcessRequest.php';

        // Usando exec() para rodar o script em segundo plano
        exec("php $scriptPath '$param1' '$param2' > /dev/null 2>&1 &");

        echo "Tarefa assíncrona foi iniciada.\n";
    }
}
