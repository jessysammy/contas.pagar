# contas.pagar
Teste criação aplicação web
Documentação Contas a Pagar e Receber

Este sistema de controle de contas a pagar e receber foi desenvolvido com o framework Laravel. Ele permite que os usuários façam a gestão de suas contas, classificando-as como "paga" ou "pendente". Além disso, há diferentes níveis de acesso, como Admin, que tem permissão para gerenciar todas as contas, e Usuário comum, que pode gerenciar apenas suas próprias contas.

Instalação

composer create-project laravel/laravel:^10.0 example-app

Laravel Breeze:

composer require laravel/breeze --dev
php artisan breeze:install
php artisan migrate
npm install
npm run dev

Migrações e Seeders

php artisan migrate

php artisan db:seed


Funcionalidades Principais
1. Autenticação
O sistema permite o login de usuários utilizando os recursos nativos de autenticação do Laravel.
Existem dois níveis de acesso:
Admin: Pode visualizar, editar e excluir todas as contas.
Usuário comum: Pode criar, visualizar, editar e excluir apenas suas próprias contas.
2. Contas a Pagar e Receber
Cada usuário pode criar contas com as seguintes informações:

Título: O nome da conta (ex: "Conta de Luz").
Descrição: Uma descrição opcional para a conta.
Valor: O valor da conta.
Data de Vencimento: A data limite para o pagamento.
Status: Indica se a conta está "paga" ou "pendente".


