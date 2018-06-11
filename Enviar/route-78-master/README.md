# route-78
## Ecommerce de bicicletas

* Estes é um projeto das disciplinas Técnicas de Programação e Fundamentos de Estrutura de Dados ministradas no Centro Universitário do Distrito Federal, UDF.
### Membros da equipe:

 * [Lucas Vinícius](https://github.com/MitradirTheLastMexicano)
 * [Thalis Rodrigues](https://github.com/ThalisRodrigues)
 * [Willian Gulgielmin](https://github.com/gulgis)
 
### Professor Orientador

 * [Fernando Xávier](https://github.com/professorxavier)

# Instruções para instalar
 
 1. Certifique-se que possui um ambiente configurado para PHP (XAMPP, LAMP, MAMP, ou outro).
 1. Após clonar o repositório para o diretório referente ao interpretador do PHP, abra o diretório do projeto route-78.
 1. Encontre o diretório "banco", onde se encontram os scripts para o banco de dados da aplicação.
 1. Execute o script "route-78 DDL.sql". Este será responsável pela criação das tabelas e relações do banco de dados.
 1. Crie um arquivo na raiz do projeto com o nome `config.php`.
 1. Edite o arquivo criado inserindo o código abaixo:
 
 ```php
 <?php
    /** O nome do banco de dados*/
    define('DB_NAME', 'route78');
    
    /** Usuário do banco de dados MySQL */
    define('DB_USER', 'root');
    
    /** Senha do banco de dados MySQL */
    define('DB_PASSWORD', 'root');
    
    /** nome do host do MySQL */
    define('DB_HOST', 'localhost');
```
    
*Lembre-se de alterar este código de acordo com as suas informações do banco de dados.*

Após a realização destes passos seu Banco de dados já deverá estar criado e sua aplicação pronta para executar.
 
 
