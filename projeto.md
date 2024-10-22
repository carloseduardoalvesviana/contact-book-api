# Agenda de Contatos

Este projeto consiste em uma aplicação de agenda de contatos, permitindo que os usuários gerenciem seus contatos pessoais.

## Endpoints

### Listar todos os contatos

**GET** `http://localhost:8000/contacts`  
Retorna uma lista contendo todos os contatos cadastrados com telefones e emails.

### Consultar um contato específico

**GET** `http://localhost:8000/contacts/{id}`  
Retorna os detalhes do contato com o ID especificado.

- Exemplo: `http://localhost:8000/contacts/10`
- Caso o contato com o ID fornecido não exista, retorna um erro 404.

### Buscar contatos por nome

**GET** `http://localhost:8000/contacts/{nome}`  
Retorna uma lista de contatos que contêm a string especificada no nome.

- Exemplo: `http://localhost:8000/contacts/paulo` retorna todos os contatos que possuam "paulo" no nome.

### Adicionar um novo contato

**POST** `http://localhost:8000/contacts`  
Cadastra um novo contato. Os dados devem ser enviados no corpo da requisição em formato JSON.

### Atualizar um contato existente

**PUT** `http://localhost:8000/contacts/{id}`  
Atualiza os dados do contato com o ID especificado. Os dados de atualização devem ser enviados no corpo da requisição em formato JSON.

- Exemplo: `http://localhost:8000/contacts/10` atualiza o contato com ID 10.

### Excluir um contato

**DELETE** `http://localhost:8000/contacts/{id}`  
Remove o contato com o ID fornecido.

- Exemplo: `http://localhost:8000/contacts/10` exclui o contato com ID 10.
