# CSS  Distribution

This repository is automatically synced with the main [Semantic UI](https://github.com/Semantic-Org/Semantic-UI) repository to provide lightweight CSS only version of Semantic UI.

This package **does not support theming** and includes generated CSS files of the default theme only.

You can view more on Semantic UI at [LearnSemantic.com](http://www.learnsemantic.com) and [Semantic-UI.com](http://www.semantic-ui.com)

1. Listar as portas em uso no Windows
Comando: netstat-o -n -a

2. Digite o seguinte comando para saber quais aplicações estão trabalhando numa porta Especifica:
Digite o comando Netstat conforme abaixo , após o findstr deverá informar o penúltimo e o ultimo numero do IP do servidor ao qual quer verificar a porta e após os : (Dois pontos) informar a a porta especifica, conforme exemplo abaixo:

Descobrir quais aplicações estão trabalhando na porta  51671.
netstat -o -n -a | findstr  0.160:51671
.:. 0.160  são os dois números finais do IP 192.168.0.160 e 51671 é a porta

3. Abra o Gerenciador de Tarefas clicando em Iniciar / Executar e digite taskmgr e pressione Enter;

4. Com o Gerenciador aberto clique em Exibir clique em  Selecionar Colunas e marque a coluna Identificador de processo (PID) e clique em OK;

5. Consulte pela coluna PID qual o processo que esta escutando na porta consultada no passo 2.

####### CONECTAR ao BD #######
<?php
    if ($conn = mysqli_connet("db","root","root","appsend") or die(mysqli_error()); ){
        echo ("banco conectado")
    }
    $conn->close();
?> 
###### EXECUTAR COMANDO NO DOCKER  ######
docker-compose exec "nome_imagem" docker-php-ext-install pdo pdo_mysql mysqli 
docker-compose exec app docker-php-ext-install pdo pdo_mysql mysqli