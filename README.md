# Biblioteca dos Reis 
Projeto de gerenciamento de biblioteca.

## Como rodar em sua máquina local?
Primeiramente é necessário possuir alguns requisitos mínimos listados abaixo:
- PHP 8.0 ou superior
- Composer (preferência a versão 2.5.1)
- Laravel 9.5.1
- npm 8.19.3
- MySQL ou MariaDB

## Passo a passo
1. Primeiramente, é necessário realizar o git clone do repositório e entrar na pasta do projeto:

```
git clone https://github.com/goltaraya/biblioteca-dos-reis.git
cd biblioteca-dos-reis
```

2. Depois disso, é necessário instalar as dependências do projeto:
```
composer install
```

3. Feito isso, é hora de criar um arquivo com as variáveis de ambiente (o famoso .env). Como O laravel já disponibiliza uma .env.example, nós iremos apenas copiar e renomear este arquivo:
```
cp .env.example .env
```

4. Mudaremos agora as seguintes variáveis correspondentes ao Banco de Dados:
Antes:
>DB_CONNECTION=mysql
>DB_HOST=127.0.0.1
>DB_PORT=3306
>DB_DATABASE=laravel
>DB_USERNAME=root
>DB_PASSWORD=

Depois: 
>DB_CONNECTION=mysql<B>
>DB_HOST=127.0.0.1
>DB_PORT=3306
>DB_DATABASE=biblioteca-dos-reis
>DB_USERNAME=**usuário_admin_do_seu_SQL**
>DB_PASSWORD=**senha_do_admin_do_seu_SQL**

5. Com as dependências corretamente instaladas e o arquivo de variáveis configuradas, é hora de "buildar" o Jetstream + Livewire para realizar a autenticação do projeto com npm:
```
npm install
npm run build
php artisna migrate
```

