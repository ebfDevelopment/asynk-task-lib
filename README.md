# Async Task Lib

Esta biblioteca permite executar tarefas assíncronas em segundo plano usando PHP. Ideal para tarefas que exigem execução em paralelo, como chamadas cURL ou processamento de dados demorados.

## Instalação

Instale a biblioteca usando o Composer:

```bash
composer require seunome/async-task-lib
```
 ## Exemplo de uso
 use AsyncTaskLib\Services\AsyncTaskService;
 
 $asyncTaskService = new AsyncTaskService();
 $asyncTaskService->executarProcessoAssincrono('parametro1', 'parametro2');