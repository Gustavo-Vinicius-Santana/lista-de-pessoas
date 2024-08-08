- **Sistema de Gerenciamento de Usuários e Salários**
  - **Funcionalidades**
    - Cadastro de Usuários
    - Edição de Usuários
    - Deleção de Usuários
    - Listagem de Usuários

  - **Pré-requisitos**
    - [XAMPP](https://www.apachefriends.org/index.html) instalado
    - Navegador Web

  - **Passo a Passo para Rodar o Sistema Localmente**
    1. **Clonar o Repositório**
       - Clone o repositório do projeto para o seu ambiente local:
         ```bash
         git clone https://github.com/seu-usuario/seu-repositorio.git
         cd seu-repositorio
         ```

    2. **Configurar o Banco de Dados**
       - Abra o painel de controle do XAMPP e inicie os serviços Apache e MySQL.
       - Acesse o phpMyAdmin no navegador através de [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
       - Crie um banco de dados chamado `user_salary_db`.

    3. **Configurar o Projeto**
       - Nos trechos de codigo que estiver utilizando o banco de dados coloque as suas configurações:
         ```php
         <?php
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $bd = "bd_lista_usuarios";
            $con = mysqli_connect($host, $usuario, $senha, $bd);
            if(!$con){
                die("Connection Failed" .mysqli_connect_errno());
            }
         ?>
         ```

    4. **Importar o Banco de Dados**
       - No phpMyAdmin, importe o arquivo SQL que está na raiz do projeto (`database.sql`) para criar as tabelas necessárias.

    5. **Executar o Projeto**
       - Coloque todos os arquivos do projeto na pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs`).
       - Acesse o sistema no navegador através de [http://localhost/nome-do-projeto/public](http://localhost/nome-do-projeto/public).

    6. **Usar o Sistema**
       - Utilize a interface web para cadastrar, editar e deletar usuários e salários.
       - Navegue pelas diferentes funcionalidades através dos links disponíveis na página inicial.
