# Biblioteca virtual feita com Laravel.

## Instalações e configurações para rodar o projeto:

- Instalar o php versão 8.2.6 Thread Safe:
  https://windows.php.net/downloads/releases/php-8.2.6-Win32-vs16-x64.zip
- Clonar o projeto.
    1° Clone no link do github acima.
    2° Extrair o arquivo.
    3° entrar na pasta do arquivo e abrir seu editor de texto com terminal.
    4° abrir um servidor como xampp ou MySQL Workbench e criar a database do projeto, comando para criar:
    5° create database db_book;
    6º:
    - renomear o arquivo .env.example para : .env
- Configurações do mysql no arquivo .env: - (A senha deve ser a que você colocou no seu servidor, a minha no caso é 123).
- 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_book
DB_USERNAME=root
DB_PASSWORD=123
------------------------------------------------------------------------
- Comandos para rodar o projeto (abra o terminal na raiz da pasta do projeto):
- - composer install
- php artisan key:generate
- php artisan config:cache
- php artisan cache:clear
- php artisan migrate:fresh
- php artisan serve
- Abrir o projeto na web com o end-point gerado: http://127.0.0.1:8000/

-------------------------------------------------------------------------------

- obs: Script para criação de massa: https://github.com/RichardOrlandini/sistema-biblioteca/blob/main/massas.txt

## Funcionalidades:

### - Tela Home (Funcionalidades) 
- navegação para as demais paginas.
![Tela home](https://github.com/RichardOrlandini/sistema-biblioteca/blob/main/imgs/home.png))

### - Tela Livros (Funcionalidades) 
CRUD completo de Livros.
![Tela home](https://github.com/RichardOrlandini/sistema-biblioteca/blob/main/imgs/livros.png)
### - Tela Usúarios (Funcionalidades) 
CRUD completo de Usúarios.
![Tela home](https://github.com/RichardOrlandini/sistema-biblioteca/blob/main/imgs/usuarios.png)
### - Tela Empréstimos (Funcionalidades) 
CRUD completo de Empréstimos.
- Funcionalidade de mudar a data de devolução.
- Funcionalidade de marcar o emprestimo como Atrasado, Devolvido ou manter como A prazo.
- ![Tela home](https://github.com/RichardOrlandini/sistema-biblioteca/blob/main/imgs/emprestimos.png)
