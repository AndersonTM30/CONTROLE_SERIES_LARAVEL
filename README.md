# Projeto Controle de Séries
Projeto construído para aprender os conceitos básicos do framework Laravel.

## Requisitos para rodar o Laravel:
- Ter o Php instalado no computador
- Ter o gerenciador de pacotes Composer instalado em seu computador.

## Comandos básicos:
``` composer create-project laravel/laravel nomeDoProjeto ^9 ``` - Cria o projeto na versão 9 do Laravel. <br>
``` php artisan serve ``` - Cria um servidor http local na porta 8000. <br>
``` php artisan make:controller nomeDoController ``` - Cria uma classe controller com seu namespace. <br>
``` php artisan make:controller nomeDoController --resource ``` - Cria uma classe controller com seu namespace e todos os métodos com as actions padrões. <br>
``` php artisan make:component nomeDoComponente ``` - Cria um componente e sua classe de componente para criar alguma lógica em específico.

## Configurando o Mix para processar css:
### Requisitos para instalar o Mix:
- Ter o Node Js instalado
- Ter o NPM instalado (já vem por padrão se caso tenha o Node Js no computador);

### Configuração:
``` npm install ``` - Instala as dependências do Node Js. <br>
``` npm install laravel-mix --save-dev ``` - Instala o pacote do Mix. <br>
Crie o arquivo ``` webpack.mix.js ``` na raiz do projeto e cole o comando ``` const mix = require('laravel-mix'); ``` e por fim execute o comando ``` npm run dev ``` para fazer o build do Mix (detalhe é que caso no package.json esteja configurado para iniciar o build pelo vite, alterar o o mix).