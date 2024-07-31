## inicia o xampp (apache e o MySQL)!!

## Para criar um projeto:
  1.1 - composer create-project laravel/laravel (nomeArquivo ou . [caso ja esteja em uma pasta]) 
  1.2 - composer install

  2 -  php artisan serve(iniciar o projeto)

## Para rodar um projeto:
  1 - abrir a pasta com o laravel
  2 - php artisan serve

## Para criar um layout - por comando:
  php artisan make:view layouts/nome

## Para criar um controller - por coamndo:
  php artisan make:controller nome

## Migrete:
  1 - Para criar um migrate: php artisan make:migration (nome)
  2 - Enviar os arquivos ao bd (banco de dados): php artisan migrate
  3 - Excluir e reenviar os arquivos: php artisan migrate:fresh
  4 - Status do migrate: php migrate:status