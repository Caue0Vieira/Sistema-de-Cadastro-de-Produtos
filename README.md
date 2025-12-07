# Sistema de Cadastro de Produtos

Sistema de gestão de produtos e categorias desenvolvido em Laravel 10 com interface web administrativa e API RESTful.

## 🚀 Como Rodar

```bash
# 1. Clone o repositório
git clone <url-do-repositorio>
cd Sistema-de-Cadastro-de-Produtos

# 2. Configure o ambiente
cp src/.env.example src/.env

# 3. Inicie os containers
cd docker
docker-compose up -d --build

# 4. Configure a aplicação
docker exec -it SGP php artisan key:generate
docker exec -it SGP php artisan migrate
docker exec -it SGP php artisan db:seed

# 5. Compile os assets do Vite (IMPORTANTE!)
docker exec -it SGP sh -c "cd /app && npm install && npm run build"
```

## 📍 Acessos

- **Interface Web**: http://localhost:8089
- **API**: http://localhost:8089/api

## 🔧 Comandos Úteis

```bash
# Iniciar containers
cd docker && docker-compose up -d

# Parar containers
cd docker && docker-compose down

# Acessar container
docker exec -it SGP bash

# Compilar assets do Vite
docker exec -it SGP sh -c "cd /app && npm run build"

# Ver logs
cd docker && docker-compose logs -f app
```

## ⚠️ Solução de Problemas

**Erro: "Vite manifest not found"**
```bash
docker exec -it SGP sh -c "cd /app && npm install && npm run build"
```

## 📄 Licença

MIT
