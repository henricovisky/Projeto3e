## Desafio Programador

Como um desenvolvedor em busca de oportunidades de emprego, eu preciso criar um sistema
de gestão de ativos de uma empresa utilizando PHP, Laravel e MySQL do zero, para
demonstrar minhas habilidades técnicas e capacidade de desenvolver soluções robustas e
escaláveis.

Critérios de Aceitação:
1. Criar um banco de dados MySQL para armazenar informações sobre ativos da
empresa, incluindo nome, descrição, categoria, data de aquisição, valor e localização.
2. Desenvolver uma interface web utilizando o framework Laravel que permita aos
usuários realizar operações CRUD (criar, ler, atualizar, excluir) sobre os ativos.
3. Implementar autenticação de usuários para garantir que apenas usuários autorizados
possam acessar o sistema.
4. Criar funcionalidades de pesquisa e filtragem para permitir que os usuários
encontrem rapidamente os ativos desejados com base em diferentes critérios, como
nome, categoria ou data de aquisição.
5. Garantir que o código seja estruturado de forma modular e seguindo as melhores
práticas de desenvolvimento em PHP e Laravel.
6. Adicionar validações de entrada para garantir a integridade dos dados inseridos no
sistema.
7. Testar extensivamente todas as funcionalidades do sistema para garantir que esteja livre de bugs e funcione corretamente em diferentes cenários.
8. Documentar adequadamente o código-fonte e fornecer instruções claras para
configurar e executar o projeto localmente.
9. Enviar o projeto para um repositório público no GitHub e fornecer o link para revisão pelos avaliadores até o dia 15/03/2024 as 17:00h.

Como Desenvolvedor, quero criar este sistema de gestão de ativos do zero, seguindo os critérios de aceitação estabelecidos, para demonstrar minha capacidade de desenvolvimento independente e minhas habilidades técnicas em PHP, Laravel e MySQL.

Realizado:

1. 
- CREATE DATABASE ativos_3e; 
- php artisan make::migration ativos_3e
- Criação da tabela "ativos" dentro do 2024_03_19_024651_ativos_3e.php

2. 
- Criação do Controller: php artisan make: controller Ativo3eController --resource
- Criação do Model: php artisan make:model Ativo
- Configuração das Rotas no web.php
- Escrita das views

8. 
- Conmentários escritos