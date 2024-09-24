# Projeto com banco de dados MySQL
_Arquivado_

Este projeto foi desenvolvido em 2022 como parte da disciplina "Banco de Dados" no curso técnico em Informática. O objetivo principal foi implementar a interação entre um site em PHP e um banco de dados MySQL. Para facilitar o desenvolvimento, foi usado um [template gratuito do HTML Codex](https://htmlcodex.com/pet-shop-website-template/) com o tema de pet shop, alinhado ao propósito do projeto.

### Configuração Inicial
Antes de realizar testes com o banco de dados, será necessário configurá-lo. Visto que este projeto foi desenvolvido com o fim didático, não foram implementadas grandes medidas de segurança, então para configurar, basta copiar o código disponível no arquivo _config.sql_ e colá-lo no prompt do MySQL, mantendo as configurações de conexão padrão. 

Mesmo não sendo o objetivo inicial do projeto, se a intenção for aumentar a segurança, é recomendado antes de qualquer coisa alterar as credenciais do banco de dados. O arquivo _php/connect.php_ pode ser editado para modificar as configurações para conectar com as novas credenciais no banco.

### Funcionamento
As interações do site com o banco de dados estão implementadas principalmente em _entrar.php_, onde os usuários podem se registrar e fazer login. Após o login, o nome do usuário é exibido no canto superior direito da página _index.php_, proporcionando uma experiência personalizada.