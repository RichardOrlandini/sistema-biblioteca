comandos para rodar o projeto:

Comando para executar o servidor: php artisan serve

http://127.0.0.1:8000/

para rodar as migrations corretamente devemos ter esse conteudo na parte do mysql no arquivo
php.ini:

[Pdo_mysql]
; Default socket name for local MySQL connects.  If empty, uses the built-in
; MySQL defaults.
pdo_mysql.default_socket=
extension=pdo_mysql 
---------------------------
Richard: 
artisan: diversos comandos 

php artisan list -> lista todos os comandos.

criando um controller com artisan: - php artisan make:controller Loan 
criando migrations: criar:
- php artisan make:migration create_loans_table
rodar: 
- php artisan migrate
criando model:
- php artisan make:model Loan 



tebelas:
-php artisan migrate:refresh : da um refresh em todas migrations
php artisan migrate:reset  - reverte todas as migrações
books_gender : $table->string('Aventure',55)->default('Adventure');
books_gender : $table->string('Fantasy',55);


books_situation : $table->string('Emprestado',55);
books_situation : $table->string('Disponivel',55);

books_


boostrap:
mt-5 -> margin top

laravel:
@csrf -> sistema de segurança.