COMO RODAR O PROJETO BAIXADO
Instalar todas as dependencias indicada pelo package.json
### npm install

Rodar o projeto usando o nodemon
### nodemon app.js


SEQUENCIA PARA CIRAR O PROJETO
Criar o arquivo package
### npm init

Gerenciar as requisições, rotas e URLs, entre outras funcionalidades
### npm install express

Pausar o servidor e iniciar o servidor com a rota estabelecida
### Ctrl + C
### node app.js

Instalar o módulo para iniciar o servidor sempre que houver alteração no código fonte, g significa globalmente
para a primeira vez que estiver usando esta dependencia executar primeiro no terminal do PC e reiniciar
### npm install -g nodemon

Executar o projeto na dependencia NODEMON
### nodemon app.js

No Windows se der pau o comando acima use o seguinte [https://pt.stackoverflow.com/questions/220078/o-que-significa-o-erro-execu%C3%A7%C3%A3o-de-scripts-foi-desabilitada-neste-sistema]
### IN powerShell(ADM)
### 1(Set-ExecutionPolicy -ExecutionPolicy Bypass)
### 2(select "Yes For All (A)")

Instalar o banco de dados MongoDB
### npm install --save mongodb

Instalar o Mongoose - Mongoose traduz os dados do banco de dados para objetos JavaScript para que possam ser utilizados pela aplicação
### npm install --save mongoose

Permitir acesso a API
### npm install --save cors