# Laravel Todo App with Tests ✅

Projeto Laravel simples de lista de tarefas com:

- CRUD de tarefas (Blade)
- Testes automatizados com PHPUnit
- Validação de campos
- Layout com Bootstrap 5

## 📸 Preview do projeto

![Tela inicial da aplicação](https://github.com/user-attachments/assets/5f2c1d3e-1149-45fa-b30b-7228979d499a)

## 🚀 Funcionalidades
- Criar, editar, excluir e listar tarefas
- Marcar tarefa como concluída
- Testes de criação, edição, deleção e validação

## 🔧 Instalação

```bash
git clone https://github.com/tiagokochem/laravel-task-test-phpunit.git
cd laravel-task-test-phpunit
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
