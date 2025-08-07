# 🚀 API RESTful Laravel - Sistema de Gestão de Produtos

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-blue.svg)](https://php.net)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-14-green.svg)](https://postgresql.org)
[![Docker](https://img.shields.io/badge/Docker-3.8-blue.svg)](https://docker.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

Um sistema completo de gestão de produtos e categorias desenvolvido em Laravel 10, que oferece **duas interfaces**: uma **interface web administrativa** (com Blade templates) e uma **API RESTful** robusta para integração com aplicações externas.

## 📋 Índice

- [Sobre o Projeto](#-sobre-o-projeto)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Arquitetura](#-arquitetura)
- [Instalação](#-instalação)
- [Configuração](#-configuração)
- [Uso](#-uso)
- [API Endpoints](#-api-endpoints)
- [Estrutura do Projeto](#-estrutura-do-projeto)
- [Contribuição](#-contribuição)
- [Licença](#-licença)

## 🎯 Sobre o Projeto

Este projeto é um **sistema de gestão de produtos e categorias** que oferece **duas formas de interação**:

1. **Interface Web Administrativa** - Sistema completo com Blade templates, formulários, listagens e dashboard
2. **API RESTful** - Endpoints para integração com aplicações móveis, frontends SPA ou outros sistemas

Desenvolvido seguindo as melhores práticas do Laravel e padrões de arquitetura modernos.

### Principais Características

- ✅ **Sistema Web Completo** com Blade templates e AdminLTE
- ✅ **API RESTful** com autenticação Sanctum
- ✅ **CRUD completo** para produtos e categorias
- ✅ **Interface administrativa** moderna e responsiva
- ✅ **Validação robusta** de dados
- ✅ **Padrão Repository** para separação de responsabilidades
- ✅ **Containerização** com Docker
- ✅ **Relacionamentos** bem estruturados
- ✅ **Dados de exemplo** para demonstração

## 🚀 Funcionalidades

### Gestão de Categorias
- Criar, listar, editar e excluir categorias
- Validação de dados de entrada
- Relacionamento com produtos
- Interface intuitiva

### Gestão de Produtos
- CRUD completo de produtos
- Campos: nome, descrição, preço, quantidade, categoria
- Validação de preços e quantidades
- Relacionamento com categorias

### Sistema Web (Blade Templates)
- **Dashboard administrativo** completo com AdminLTE
- **Formulários interativos** para criação e edição
- **Listagens paginadas** de produtos e categorias
- **Navegação intuitiva** com sidebar
- **Mensagens de feedback** para ações do usuário
- **Visualização detalhada** de registros
- **Interface responsiva** para diferentes dispositivos

### API RESTful
- **Endpoints completos** para produtos e categorias
- **Autenticação** com Laravel Sanctum
- **Respostas JSON** padronizadas
- **Documentação automática** das rotas
- **Integração** com aplicações externas

## 🛠 Tecnologias Utilizadas

### Backend
- **Laravel 10** - Framework PHP
- **PHP 8.4** - Linguagem de programação
- **PostgreSQL 14** - Banco de dados
- **Laravel Sanctum** - Autenticação API

### Frontend
- **Blade Templates** - Sistema de templates do Laravel
- **AdminLTE** - Template administrativo responsivo
- **Bootstrap** - Framework CSS
- **JavaScript** - Interatividade da interface

### Desenvolvimento
- **Docker** - Containerização
- **Docker Compose** - Orquestração
- **Composer** - Gerenciador de dependências
- **Laravel Generator** - Scaffolding automático

### Padrões e Arquitetura
- **Repository Pattern** - Separação de responsabilidades
- **Request Validation** - Validação de dados
- **Eloquent ORM** - Mapeamento objeto-relacional
- **MVC** - Padrão arquitetural

## 🏗 Arquitetura

### Padrão Repository
```
app/Repositories/
├── BaseRepository.php      # Classe abstrata com CRUD básico
├── CategoryRepository.php  # Operações específicas de categorias
└── ProductRepository.php   # Operações específicas de produtos
```

### Estrutura de Dados
```
categories
├── id (PK)
├── nome (string)
├── descricao (text, nullable)
└── timestamps

products
├── id (PK)
├── nome (string)
├── descricao (text, nullable)
├── preco (decimal 10,2)
├── quantidade (integer)
├── category_id (FK)
└── timestamps
```

### Relacionamentos
- **Categoria → Produtos** (1:N)
- **Produto → Categoria** (N:1)

## 📦 Instalação

### Pré-requisitos
- Docker e Docker Compose
- Git

### 1. Clone o repositório
```bash
git clone <url-do-repositorio>
cd "Api RESTful"
```

### 2. Configure o ambiente
```bash
# Copie o arquivo de ambiente
cp src/.env.example src/.env

# Inicie os containers
cd docker
docker-compose up -d
```

### 3. Instale as dependências
```bash
# Acesse o container da aplicação
docker exec -it laravel_app bash

# Instale as dependências do Composer
composer install

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados
php artisan migrate
php artisan db:seed
```

### 4. Configure as permissões
```bash
# Configure as permissões de storage
chmod -R 775 storage bootstrap/cache
```

## ⚙ Configuração

### Variáveis de Ambiente
Edite o arquivo `src/.env`:

```env
APP_NAME="API RESTful Laravel"
APP_ENV=local
APP_KEY=base64:sua-chave-aqui
APP_DEBUG=true
APP_URL=http://localhost:8099

DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```

### Configuração do Banco de Dados
O projeto está configurado para usar PostgreSQL. As configurações do Docker já estão definidas no `docker-compose.yml`.

## 🚀 Uso

### Acessando a Aplicação

#### 🌐 Interface Web Administrativa
- **URL**: http://localhost:8099
- **Login**: Sistema de autenticação completo
- **Dashboard**: Visão geral do sistema
- **Gestão**: CRUD completo via interface gráfica

#### 🔌 API RESTful
- **Base URL**: http://localhost:8099/api
- **Autenticação**: Token-based com Sanctum
- **Documentação**: Endpoints JSON padronizados

### Dados de Exemplo
O projeto inclui dados de exemplo:

**Categorias:**
- Eletrônicos
- Roupas
- Casa e Jardim
- Esportes
- Livros

**Produtos:**
- Smartphone Samsung Galaxy S21
- Notebook Dell Inspiron 15
- Camiseta Básica Masculina
- Vaso de Cerâmica Decorativo
- Bola de Futebol Profissional

### Comandos Úteis

```bash
# Acessar o container
docker exec -it laravel_app bash

# Executar migrações
php artisan migrate

# Executar seeders
php artisan db:seed

# Limpar cache
php artisan cache:clear
php artisan config:clear

# Gerar documentação da API
php artisan route:list --path=api
```

## 🔌 API Endpoints

### Autenticação
```
POST /api/auth/login
POST /api/auth/logout
GET  /api/auth/user
```

### Categorias
```
GET    /api/categories          # Listar categorias
POST   /api/categories          # Criar categoria
GET    /api/categories/{id}     # Buscar categoria
PUT    /api/categories/{id}     # Atualizar categoria
DELETE /api/categories/{id}     # Excluir categoria
```

### Produtos
```
GET    /api/products            # Listar produtos
POST   /api/products            # Criar produto
GET    /api/products/{id}       # Buscar produto
PUT    /api/products/{id}       # Atualizar produto
DELETE /api/products/{id}       # Excluir produto
```

### Exemplo de Requisição
```bash
# Listar produtos
curl -X GET http://localhost:8099/api/products \
  -H "Accept: application/json" \
  -H "Authorization: Bearer {token}"
```

## 📁 Estrutura do Projeto

```
src/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Controladores (Web + API)
│   │   ├── Requests/           # Validação de dados
│   │   └── Middleware/         # Middlewares
│   ├── Models/                 # Modelos Eloquent
│   └── Repositories/           # Padrão Repository
├── database/
│   ├── migrations/             # Migrações do banco
│   └── seeders/               # Dados de exemplo
├── resources/
│   ├── views/                 # Views Blade (Interface Web)
│   │   ├── categories/         # Views de categorias
│   │   ├── products/          # Views de produtos
│   │   ├── layouts/           # Layouts base
│   │   └── auth/              # Views de autenticação
│   └── model_schemas/         # Schemas dos modelos
├── routes/
│   ├── api.php               # Rotas da API RESTful
│   └── web.php               # Rotas web (Blade templates)
└── tests/                    # Testes automatizados
```

## 📄 Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo [LICENSE](LICENSE) para detalhes.