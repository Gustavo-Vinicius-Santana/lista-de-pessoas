# Sistema de Gerenciamento de Usuários e Salários

## Funcionalidades
- Cadastro de Usuários
- Edição de Usuários
- Deleção de Usuários
- Listagem de Usuários

## Pré-requisitos
- [XAMPP](https://www.apachefriends.org/index.html) instalado
- Navegador Web

## Passo a Passo para Rodar o Sistema Localmente

1. **Clonar o Repositório**
   - Clone o repositório do projeto para o seu ambiente local:
     ```bash
     git clone https://github.com/Gustavo-Vinicius-Santana/lista-de-pessoas
     cd lista-de-pessoas
     ```

2. **Configurar o Banco de Dados**
   - Abra o painel de controle do XAMPP e inicie os serviços Apache e MySQL.
   - Acesse o phpMyAdmin no navegador através de [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

3. **Importar o Banco de Dados**
   - No phpMyAdmin, importe o arquivo SQL localizado na raiz do projeto (`bd_lista_usuarios.sql`) para criar as tabelas necessárias.

4. **Configurar o Projeto**
   - Ajuste as configurações de conexão com o banco de dados no código do projeto:
     ```php
     <?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "bd_lista_usuarios";
        $con = mysqli_connect($host, $usuario, $senha, $bd);
        if(!$con){
            die("Connection Failed: " . mysqli_connect_error());
        }
     ?>
     ```

5. **Executar o Projeto**
   - Coloque todos os arquivos do projeto na pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs`).
   - Acesse o sistema no navegador através de [http://localhost/lista-de-pessoas](http://localhost/lista-de-pessoas).

6. **Usar o Sistema**
   - Utilize a interface web para cadastrar, editar e deletar usuários e salários.
   - Navegue pelas diferentes funcionalidades através dos links disponíveis na página inicial.
