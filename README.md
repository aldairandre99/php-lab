# 🐘 PHP Lab - Ambiente de Desenvolvimento com Docker

Este projeto configura um ambiente completo de desenvolvimento PHP utilizando **Docker**, incluindo:

- PHP 8.2 com Apache
- MySQL
- phpMyAdmin
- Composer

Ideal para estudos, testes e desenvolvimento de aplicações PHP sem depender de XAMPP ou instalações locais.

---

## 📦 Requisitos

Antes de começar, você precisa ter instalado:

- Docker
- Docker Compose

---

## 🚀 Como executar o projeto

### 1. Clonar ou acessar o projeto

```bash
git clone (repo_url)

# Ir para o diretorio do projecto
cd php-lab

# Instalar e Rodar
docker-compose up --build -d

# Acessar container php
docker exec -it php_app bash

# Usar Composer dentro do container:
composer install

# Parar container
docker-compose down

```