# Biblioteca dos Reis 📚
Projeto de gerenciamento de biblioteca.

## Como rodar em sua máquina local? 🤔
### Requisitos 🚩
Primeiramente é necessário possuir os requisitos listados abaixo:
- PHP 8.0 ou superior
- Composer (preferência a versão 2.5.1)
- Laravel 9.5.1
- npm 8.19.3
- MySQL ou MariaDB

### Passo a passo 🚶
**1. Primeiramente, é necessário realizar o git clone do repositório e entrar na pasta do projeto:**

```
git clone https://github.com/goltaraya/biblioteca-dos-reis.git
cd biblioteca-dos-reis
```

**2. Depois disso, é necessário instalar as dependências do projeto:**
```
composer install
```

**3. Feito isso, é hora de criar um arquivo com as variáveis de ambiente (o famoso .env). Como O laravel já disponibiliza uma .env.example, nós iremos apenas copiar e renomear este arquivo:**
```
cp .env.example .env
```

**4. Mudaremos agora as seguintes variáveis correspondentes ao Banco de Dados:**
<br>Antes:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

Depois: 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=biblioteca-dos-reis
DB_USERNAME=[usuário_admin_do_seu_SQL]
DB_PASSWORD=[senha_do_admin_do_seu_SQL]
```

**5. Com as dependências corretamente instaladas e o arquivo de variáveis configuradas, é hora de "buildar" o Jetstream + Livewire para realizar a autenticação do projeto com npm:**
```
npm install
npm run build
php artisan migrate
```
**6. Com tudo corretamente instalado, é hora de popularmos o Banco de Dados com alguns usuários e livros. Para isso, utilizei o Seeder do Laravel.**
```
php artisan db:seed --class=DBSeeder  
```

**7. Realizado todo o passo a passo, agora é a tão esperada hora de rodas a aplicação! 😄**
```
php artisan serve
```

### Explicando a aplicação 🧠
#### Banco de Dados
O Banco de Dados da biblioteca possui 3 tabelas:
- Usuários (users)
- Livros (books)
- Reservas (reservations)

### Livros
Os livros são ser cadastrados com nome, gênero, autor, número de registro, capa e sinopse.

### Usuários
Os usuários se diferem entre usuários administradores e comuns. <br>
Os usuários comuns possuem a atribuição de realizar a reserva de livros. <br>
Os usuários administradores possuem a atribuição de realizar a reserva de livros e também podem adicionar livros na biblioteca. <br>
Abaixo se encontram as credenciais de cada usuário criado no Seeder.

```
Usuário comum
login: usuario1@teste
senha: 1234
```
```
Usuário administrador
login: admin@teste
senha: 1234
```

### Obrigado pela atenção! Qualquer dúvida/erro/bug entre em contato através do email *goltarayago@gmail.com*
