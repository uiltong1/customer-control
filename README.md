# Customer Control
Projeto que tem o intuito de realizar o controle de clientes de uma empresa, contando com todas as ações necessárias para um ótimo gerenciamento.
# Resumo da Arquitetura
![Arquitetura do sistema](https://github.com/uiltong1/customer-control/blob/master/Arquitetura.png?raw=true)
# Clone
```shell
git clone https://github.com/uiltong1/customer-control.git
````
# ou faça o download 

https://github.com/uiltong1/customer-control/archive/master.zip

ou 
```shell
wget https://github.com/uiltong1/customer-control/archive/master.zip
```
# Dependecias utilizadas
 - Monolog: Biblioteca muito conhecida utilizada para geração de logs.
  [Documentação](https://github.com/Seldaek/monolog/blob/master/doc/01-usage.md)
 
 
# Instalando Dependências 
```shel
composer install 
```
# Configurando DB

No arquivo App/Class/Connection.php altere as váriaveis a baixo:

```shel
 const HOST = 'Nome do sevidor de banco de dados.';
 const DBNAME = 'Nome do banco de dados.';
 const USER = 'Usuário de acesso ao banco de dados.';
 const PASSWORD = 'Senha de acessso ao  banco de dados.';
```
Execute o script no MySQL:
```shel
create table cliente(
cod int unsigned auto_increment primary key,
nome varchar(256),
email varchar(256),
telefone varchar(16),
cpf varchar(14)
);
```
# Acessando

http:localhost/customer-control/

ou através do seu link personalizado.
