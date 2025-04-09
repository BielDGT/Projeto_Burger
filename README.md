# 📝 Documentação do projeto site lanches Damaju

O site marketplace Lanches Damaju é a ponte entre os clientes e o estabelecimento lanches Damaju, fornecendo variedades de comidas e bebidas, disponivel quando sua barriga roncar!!!Faça o pedido agora.

## 🤝 Colaboradores

Agradecemos às seguintes pessoas que contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="#" title="defina o título do link">
        <img src="" width="100px;" alt="Foto do David Gabriel Tarley"/><br>
        <sub>
          <b>David Gabriel Tarley</b>
        </sub>
      </a>
    </td>
    <td align="center">
      <a href="#" title="defina o título do link">
        <img src="" width="100px;" alt="Foto do Josue Orellana Montenegro"/><br>
        <sub>
          <b>Josue Orellana Montenegro</b>
        </sub>
      </a>
    </td>
        <td align="center">
      <a href="#" title="defina o título do link">
        <img src="" width="100px;" alt="Foto da Marcia Gisseli Mamani Condarco"/><br>
        <sub>
          <b>Marcia Gisseli Mamani Condarco</b>
        </sub>
      </a>
    </td>
  </tr>
</table>

# 1. Pagina Inicial `index.php` 
- **HEADER -> um menu de navegação, com 3 botões: pesquisa(encaminha para pagina pesquisa), home que é a logo no (direciona para pagina inicial), carrinho de compras(encaminha para pagina Carrinho de compra) e pagina do usuario (guia para pagina usuario ou administrador, depende do usuario que for loga )** 
- **banner com carrossel** 
- **cards dos produtos que tem o botão VER MAIS que encaminha para pagina do produto** 
- **FOOTER-> (que tem botões do instagram, facebook, e gmail)**

#  2. Pagina produto `pagina_produto.php` 

-**header** 
- **foto de destaque do produto junto com a descrição dele** 
- **valor** 
- **botão de quantidade de vezes que deseja comprar o produto**
- **2 botões de adicionar ao carrinho(direciona para Pagina Carrinho de compra) e comprar(Direciona para pagina finalizar compra)** - **Seguido de uma seção de cards representando recomendações de outros produtos** 
- **footer**

CASO NÃO ESTEJA LOGADO O USUARIO DIRECIONA PARA PAGINA LOGIN

#  3. Pagina login `usuario-login.php` 

página que o usuario vai fazer o login. 
- **um formulario com campos tipo email e senha** 
- **botão de entrar (se as informações forem validas encaminha para a pagina inicial)**
- **botão de cadastrar(direciona para Página Cadastro)** 
- **dois link para efetuar o login com a conta do facebook e instagram.**
- **link de esquecer senha que direciona para pagina chagepass**
# ✅ Validação 

### Usuario
- **mínimo 5 caracteres**
    - Mensagem de erro
- **máximo 60 caracteres**
    - mensagem de erro
- **campo obrigatório**

### Senha
- **mínimo 8 caracteres**
- **máximo 60 caracteres**
- **campo obrigatório**
- obrigatório números
- obrigatório letra maiúscula
- obrigatório caractere especial

### Esqueci senha
- **validar o usuario e senha já existente com o banco para realizar a troca de senha** 

#   4. Pagina carrinho `pagina_historico_compras.php`

- **header padrão** 
- **seção carrinho de compra anexado produtos já selecionados pelo usuario botões de comprar e remover produto** 
- **footer padrão.**

#  5. Pagina pesquisa `pagina_pesquisa.php`

- **header padrão** 
- **seção composto por opções de filtragem com checkbox(Hamburguer, Pizza, Bebida, Marmitas e todos)** 
- **seção dos produtos pesquisados contido por cards com descrição básica e botão de ver mais(encaminha para pagina do produto).** 
- **footer padrão.** 

#  6. Pagina Cadastro `...` 

 página que o usuário vai efetuar o cadastro do site. 
 - **Um formulario com 4 campos para nome, email, senha e confirmar senha, um botão para cadastrar as informações inseridas nos campos.**

# ✅ Validação 

### Usuario
- **mínimo 5 caracteres**
    - Mensagem de erro
- **máximo 60 caracteres**
    - mensagem de erro
- **campo obrigatório**

### Senha
- **mínimo 8 caracteres**
- **máximo 60 caracteres**
- **campo obrigatório**
- obrigatório números
- obrigatório letra maiúscula
- obrigatório caractere especial

### Nome
- **mínimo 5 caracteres**
    - Mensagem de erro
- **máximo 60 caracteres**
    - mensagem de erro
- **campo obrigatório**
- **campo obrigatório apenas letras**

### E-mail
- **tem que ter @**
- não pode e-mail repetido
- **campo obrigatório**
- **mínimo 5 caracteres**
- **máximo 100 caracteres**

### Telefone
- **campo obrigatório numeroa**
- **mascara de 14 caracteres (xx)xxxxx-xxxx**
- **campo obrigatório**

### CEP
- **minimo 8 caracteres**
- **numero de 0 a 9**
- **mascara de 9 caracteres xxxxx-xxx**
- **dois grupos, 5 digitos no primeiro grupo e 3 digitos no segundo grupo**
- **campo obrigatório**

### CPF
- **minimo 11 digitos**
- **mascara de 14 caracteres xxx.xxx.xxx-xx**
- **campo obrigatório**

### Nascimento
- **não pode ser um ano do futuro**
- **campo obrigatório**

#  7. Pagina usuário `pagina_usuario.php`

- **header padrão** 
- **seção das informação do usuário contendo foto,nome, email, senha, cpf e cep**
- **botão de editar(encaminha para Pagina editar usuário)** 
- **botão de sair para que direciona para pagina login**
- **footer**

#   8. Pagina admin `pagina_admin.php`

- **header padrão** 
- **seção das informação do usuário administrador contendo nome, email, senha, cpf e endereço** 
- **botão de editar(encaminha para Pagina editar administrador)**
- **botão de cadastrar produto(conduz para Pagina cadastrar produto)** 
- **botão de lista de produtos(guia Pagina listar produtos)** 
- **botão de sair que direciona para a pagina de login**
- **Footer padrão**

#  9. Pagina editar usuário/admin `pagina_usuario-editar.php`

- **header padrao** 
- **campos com nome, email, senha, cpf e cep do usuario** 
- **botao de enviar apos o usuario terminar as alterações(encaminha para a Pagina status).**

#  10. Pagina cadastrar produto `pagina_cadastrar_produto.php`

- **header padrão**
- **formulário com campos de nome do produto, descrição e valor**
- **campo categoria (Hamburguer, Pizza, Bebidas, Doces, Msrmitas, Espetinhos  e massas)** 
- **botão de enviar(direciona para Pagina Produto)** 
- **footer padrão.**

# ✅ Validação 

### Campo Nome
- **mínimo 5 caracteres**
    - Mensagem de erro
- **máximo 60 caracteres**
    - mensagem de erro
- **campo obrigatório**
- **campo obrigatório apenas letras**

### Campo Descrição
- **campo obrigatório**
- **mínimo 5 caracteres**
    - Mensagem de erro

### Campo Categoria
- **campo obrigatório**

### campo valor
- **campo obrigatório**
- **apenas numeros**
- **mascara XX,XX**

#  11. Pagina listar produtos `pagina_lista_produtos.php`

- **header padrão-** 
- **cards onde estará os registro dos produtos com foto, nome** 
- **botão de editar(encaminha para pagina de editar produtos)**
- **botão de excluir.**

# 12. Pagina editar produto `pagina_editar_produto.php`

- **header padrao** 
- **campos com nome, descrição, categoria, valor do produto** 
- **escolher arquivo tipo imagem** 
- **botao de enviar.**

# Documentação Csharp Damaju
 
 
# 1. Tela menu principal

botão "Gerenciar Produto": O usuário será direcionado para a tela de Gerenciamento de produtos.
 
botão "Gerenciar Cliente": O usuário será direcionado para a tela de Gerenciamento de clientes.
 

# 4. Tela gerenciamento produtos
 
Botão "Pesquisar Produto": Exibe todos os produtos registrados no banco de dados no DataGridView (DGV).
 
Botão "Remover Produto": Exclui o produto selecionado do banco de dados.
 
Botão "Voltar": vai fechar a tela e voltar para a tela menu principal.

# 4. Tela gerenciamento clientes
 
Botão "Pesquisar Clientes": Exibe todos os clientes registrados no banco de dados no DataGridView (DGV).
 
Botão "Remover Cliente": Exclui o cliente selecionado do banco de dados.
 
Botão "Voltar": vai fechar a tela e voltar para a tela menu principal.