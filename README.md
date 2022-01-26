# webhorta

Este projeto é uma página web construída em ***PHP*** com a framework ***symfony***. Trata-se de um site representativo de uma empresa de agricultura biológica com uma loja online de produtos agrícolas.   
Foi realizado no âmbito do projeto final da cadeira de progração web no curso de Tecnologias e programação de sistemas de informação em 2022.   
É possível registar utilizadores, que após autenticação podem efetuar compras no site criando um carrinho que é gravado na sessão e posteriormente pode ser gravado na base de dados MySQL se o utilizador confirmar a encomenda.   
A parte do administrador foi feita hardcoded na criação de um utilizador atribuindo-lhe o *role* de **ROLE_ADMIN** enquanto que qualquer outro utilizador que se registe no site é sempre considerado um utilizador com *role* **ROLE_USER**.   
Este comportamento pode ser alterado no ficheiro *controller* que executa a função de registo.
