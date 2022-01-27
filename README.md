# webhorta


## Sinopse

Este projeto é uma página web construída em ***PHP*** com a framework ***symfony***. Trata-se de um site representativo de uma empresa de agricultura biológica com uma loja online de produtos agrícolas e foi desenvolvida a par com um colega de turma.

Foi realizado no âmbito do projeto final da cadeira de progração web no curso de Tecnologias e programação de sistemas de informação em 2022 e tem uma aplicação correspondente para Android que foi desenvolvida a par com o mesmo colega de grupo no âmbito da cadeira de "Programação para dispositivos móveis".

É possível registar utilizadores, que após autenticação podem efetuar compras no site criando um carrinho que é gravado na sessão e posteriormente pode ser gravado na base de dados ***MySQL*** se o utilizador confirmar a encomenda.

A parte do administrador foi feita hardcoded na criação de um utilizador atribuindo-lhe o *role* de **ROLE_ADMIN** enquanto que qualquer outro utilizador que se registe no site é sempre considerado um utilizador com *role* **ROLE_USER**.

Este comportamento pode ser alterado no ficheiro **Controller.php** que executa a função de registo.


## Estrutura do projeto

- **src/**:
Onde se encontram as entidades, os controladores, formulários e demais serviços.
- **templates/**:
Onde se encontram os templates html
- **public/**:
Onde se encontram os ficheiros de ***CSS*** e ***Javascript***


## Instalação do projeto

### Dependências

As dependências deste projeto encontram-se no ficheiro **composer.json** e para que as possa instalar, deverá começar por instalar o ***composer*** como gestor de pacotes ***PHP*** que poderá obter e instalar [neste site](https://getcomposer.org/). Depois de instalado, é necessário correr o comando ***composer install*** na raíz do projeto para que o ***composer*** instale automaticamente as bibliotecas necessárias ao projeto.   
Foi também instalado o ***webpack encore*** mas acabou por não ser explorado. Esta biblioteca visa criar um *webpack* para os assets *Javascript* e *CSS* serem compilados num só ficheiro de entrada. Neste campo utilizamos apenas 3 bibliotecas:
- Bootstrap
- Leaflet
- Sweetalert

Para que as possa instalar também deverá ter instalado um gestor de pacotes *Javascript* - [yarn](https://yarnpkg.com/) ou [npm](https://www.npmjs.com/) - e depois de instalado, na raíz do projeto correr o comando **yarn** ou **npm install** para que as dependências que se encontram listadas no ficheiro ***package.json*** sejam instaladas.

### Base de dados

A base de dados deverá ser configurada para encontrar no servidor ***MySQL*** uma base de dados de nome **xpto_project** e esta configuração é feita no ficheiro **.env** ou alternativamente num ficheiro **.env.local** que será utilizado para uma configuração local que se sobrepõe às configurações no ficheiro **.env**. Neste ficheiro deverá ser editada a linha:   
DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"   
Que deverá conter os dados necessários à ligação com a base de dados.   
Depois de criada a base de dados, é necessário correr as migrações com o comandos ***symfony console make:migrations*** e ***symfony console doctrine:migrate*** para que a estrutura seja criada.


### Servidor de e-mail

Deverá ser também configurado o serviço de e-mail porque a aplicação faz uso do envio de e-mails, no nosso caso foi utilizado o serviço **Mailtrap** mas consoante o servidor de e-mail que pretender utilizar, deverá também configurá-lo neste ficheiro. No caso do Mailtrap, a nossa configuração foi:   
MAILER_DSN=smtp://username:password@smtp.mailtrap.io:2525/?encryption=ssl&auth_mode=login   
Se pretender utilizar uma outra configuração, consulte a documentação [symfony](https://symfony.com/doc/current/mailer.html).   


### Servidor
Chegados aqui, para correr o servidor, basta correr o comando: ***symfony serve*** ou ***symfony console server:start***.
