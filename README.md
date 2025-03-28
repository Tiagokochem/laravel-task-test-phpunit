# Laravel Todo App with Tests ✅

Projeto Laravel simples de lista de tarefas com:

- CRUD de tarefas (Blade)
- Testes automatizados com PHPUnit
- Validação de campos
- Layout com Bootstrap 5

## 🚀 Funcionalidades
- Criar, editar, excluir e listar tarefas
- Marcar tarefa como concluída
- Testes de criação, edição, deleção e validação

## 🔧 Instalação

```bash
git clone https://github.com/tiagokochem/laravel-todo-tests.git
cd laravel-todo-tests
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
