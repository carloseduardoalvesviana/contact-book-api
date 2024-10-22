# 📒 Agenda de Contatos

Este projeto é uma aplicação de agenda de contatos que permite aos usuários gerenciar suas informações pessoais, como telefones e e-mails de maneira prática e organizada.

---

## 🌐 Endpoints da API

### 🔍 Listar todos os contatos

**GET** `/contacts`  
Retorna uma lista de todos os contatos cadastrados, incluindo seus telefones e e-mails.

---

### 🔍 Consultar um contato específico

**GET** `/contacts/{id}`  
Retorna os detalhes do contato associado ao ID fornecido.

-   **Exemplo:** `GET /contacts/10`
-   Caso o ID não exista, a API retornará um erro 404.

---

### 🔍 Buscar contatos por nome

**GET** `/contacts/{nome}`  
Retorna uma lista de contatos que contenham a string especificada no nome.

-   **Exemplo:** `GET /contacts/paulo` retorna todos os contatos que contenham "paulo" no nome.

---

### ➕ Adicionar um novo contato

**POST** `/contacts`  
Permite cadastrar um novo contato. Os dados devem ser enviados no corpo da requisição em formato JSON.

---

### ✏️ Atualizar um contato existente

**PUT** `/contacts/{id}`  
Atualiza os dados do contato associado ao ID fornecido. Os dados devem ser enviados no corpo da requisição em formato JSON.

-   **Exemplo:** `PUT /contacts/10` atualiza o contato com ID 10.

---

### 🗑️ Excluir um contato

**DELETE** `/contacts/{id}`  
Remove o contato correspondente ao ID fornecido.

-   **Exemplo:** `DELETE /contacts/10` exclui o contato com ID 10.

---

## 📧 Gerenciamento de E-mails

### ➕ Adicionar um novo e-mail

**POST** `/contacts/{id}/email`  
Adiciona um novo e-mail ao contato correspondente ao ID fornecido.

---

### 🗑️ Excluir um e-mail

**DELETE** `/contacts/{id}/email/{emailId}`  
Remove o e-mail associado ao ID fornecido.

-   **Exemplo:** `DELETE /contacts/10/email/1` exclui o e-mail com ID 1 do contato com ID 10.

---

## 📞 Gerenciamento de Telefones

### ➕ Adicionar um novo telefone

**POST** `/contacts/{id}/phone`  
Adiciona um novo telefone ao contato correspondente ao ID fornecido.

---

### 🗑️ Excluir um telefone

**DELETE** `/contacts/{id}/phone/{phoneId}`  
Remove o telefone associado ao ID fornecido.

-   **Exemplo:** `DELETE /contacts/10/phone/1` exclui o telefone com ID 1 do contato com ID 10.
