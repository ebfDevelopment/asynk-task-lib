<?php

namespace AsyncTaskLib\Models;

class Scripts {
    public function enviarPostAssincrono($param1, $param2) {
        // Lógica de envio POST via cURL, ou outra tarefa longa
        $data = array('param1' => $param1, 'param2' => $param2);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://exemplo.com/destino.php');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $response = curl_exec($ch);
        curl_close($ch);

        echo "Requisição POST realizada com sucesso!\n";
    }
}