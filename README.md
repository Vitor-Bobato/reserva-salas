<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
</head>
<body>
  <h1>
    Reserva de Salas
  </h1>
  <p>
    <span class="techbadges">
      <img src="https://img.shields.io/badge/Laravel-9.x-FF2D20?style=for-the-badge&logo=laravel" alt="Laravel">
      <img src="https://img.shields.io/badge/Blade-Template-475B63?style=for-the-badge&logo=laravel" alt="Blade">
      <img src="https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql" alt="MySQL">
      <img src="https://img.shields.io/badge/PHP-8.0+-777BB4?style=for-the-badge&logo=php" alt="PHP">
    </span>
  </p>
  <p>
    <strong>Atividade feita para a matéria de Desenvolvimento Web Mobile III - Reserva de Salas</strong>
  </p>

  <h2>📋 Descrição</h2>
  <p>
    Sistema web desenvolvido em <strong>Laravel</strong> utilizando <strong>Blade</strong> para facilitar a <strong>reserva de salas</strong>.<br>
    Permite visualizar salas disponíveis, realizar reservas e cadastrar novas salas de forma simples e ágil.
  </p>

  <h2>🎨 Paleta de Cores</h2>
  <div class="palette">
    <div class="color-box"><span class="color-sample" style="background:#2E2C2F"></span> #2E2C2F</div>
    <div class="color-box"><span class="color-sample" style="background:#475B63"></span> #475B63</div>
    <div class="color-box"><span class="color-sample" style="background:#729B79"></span> #729B79</div>
    <div class="color-box"><span class="color-sample" style="background:#BACDB0"></span> #BACDB0</div>
    <div class="color-box"><span class="color-sample" style="background:#F3E8EE"></span> #F3E8EE</div>
  </div>

  <h2>✨ Funcionalidades</h2>
  <ul>
    <li>Visualizar todas as salas disponíveis para reserva</li>
    <li>Reservar uma sala informando data e horários</li>
    <li>Cadastrar novas salas com capacidade e recursos</li>
    <li>Interface moderna com tema escuro</li>
  </ul>

  <h2>🛠️ Stack Tecnológica</h2>
  <table>
    <tr>
      <th>Camada</th>
      <th>Tecnologias</th>
      <th>Ícones</th>
    </tr>
    <tr>
      <td><strong>Frontend</strong></td>
      <td>Blade, CSS customizado</td>
      <td>🎨🖥️</td>
    </tr>
    <tr>
      <td><strong>Backend</strong></td>
      <td>Laravel 9+, PHP 8+</td>
      <td>🐘🛠️</td>
    </tr>
    <tr>
      <td><strong>Banco</strong></td>
      <td>MySQL 5.7+, Eloquent ORM</td>
      <td>🗄️🔍</td>
    </tr>
  </table>

  <h2>🚀 Guia de Instalação</h2>
  <ol>
    <li><strong>Clone o repositório:</strong>
      <pre><code>git clone https://github.com/Vitor-Bobato/reserva-salas.git
cd reserva-salas</code></pre>
    </li>
    <li><strong>Instale as dependências:</strong>
      <pre><code>composer install</code></pre>
    </li>
    <li><strong>Configure o ambiente:</strong>
      <pre><code>cp .env.example .env
php artisan key:generate</code></pre>
      Edite o <code>.env</code> com as configurações do seu banco de dados.
    </li>
    <li><strong>Rode as migrations:</strong>
      <pre><code>php artisan migrate</code></pre>
    </li>
    <li><strong>Inicie o servidor de desenvolvimento:</strong>
      <pre><code>php artisan serve</code></pre>
      Acesse: <a href="http://localhost:8000" target="_blank">http://localhost:8000</a>
    </li>
  </ol>

  <h2>📂 Estrutura do Projeto</h2>
  <pre>
📦 reserva-salas
├── 📂 app
│   ├── 📂 Models
│   │   ├── Sala.php
│   │   └── Reserva.php
│   ├── 📂 Http
│   │   ├── 📂 Controllers
│   │   │   ├── SalaController.php
│   │   │   └── ReservaController.php
│   │   └── 📂 Requests
├── 📂 database
│   ├── 📂 migrations
│   └── 📂 seeders
└── 📂 resources
    └── 📂 views
        ├── 📂 salas
        ├── 📂 reservas
        └── 📂 layouts
  </pre>

  <h2>🖥️ Telas</h2>
  <ul>
    <li><b>Salas Disponíveis:</b> Lista todas as salas cadastradas.</li>
    <li><b>Reservar Sala:</b> Formulário para reservar uma sala disponível.</li>
    <li><b>Cadastrar Nova Sala:</b> Formulário para adicionar uma nova sala ao sistema.</li>
  </ul>

  <h2>👨‍💻 Desenvolvido por</h2>
  <p>
    Vitor Bobato © 2025
  </p>
  <p class="authorlinks">
    <a href="https://github.com/Vitor-Bobato">
      <img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github" alt="GitHub">
    </a>
    <a href="https://www.linkedin.com/in/vitor-bobato/">
      <img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin" alt="LinkedIn">
    </a>
  </p>
  <div align="center">
    <p>Feito com ❤️ e ☕</p>
  </div>
</body>
</html>
