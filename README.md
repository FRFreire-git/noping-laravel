

## Sobre o Projeto

Projeto de API RESTful realizado para a NOPING. Feito em Laravel 8 com a adição de algumas bibliotecas como: Sanctum, Migration, Reliese, iSeed e PHPUnit:

Tabelas: 
    - Supplier;
    - Client;
    - Product;
    - Sale;

Visando aumentar a estrutura e legitimidade do código, testes foram implementados (PHPUnit).

- [Sanctum](https://laravel.com/docs/8.x/sanctum).
- [Migration](https://github.com/oscarafdev/migrations-generator).
- [Reliese](https://github.com/reliese/laravel).
- [iSeed](https://github.com/orangehill/iseed).
- [PHPUnit](https://phpunit.de).

## Instalando o Projeto

1. git clone --linkdorepositorio;
2. composer install;
3. php artisan migrate;
4. php artisan migrate:refresh --seed;
5. php artisan serve;

## Realizando os testes

1. php artisan test;
2. php artisan migrate:refresh --seed (para restaurar os dados excluídos durante os testes);

OBS: o teste de criação de registros não pude concluir a tempo mas me esforcei pra colocar o máximo que sei sobre teste unitário nesse projeto.


## Licença

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
