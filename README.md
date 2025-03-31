# 📝 Lista do que deve ser feito no projeto damaju

#  [X]  1. Pagina login `usuario-login.php` 

página que o usuario vai fazer o login. Vai ter um formulario com campos tipo email e senha e dois botões de entrar (se as informações forem validas encaminha para a pagina inicial)e cadastrar(direciona para Página Cadastro)e mais dois link para efetuar o login com a conta do facebook e instagram.
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



#  [X]  2. Pagina Cadastro `...` 

 página que o usuário vai efetuar o cadastro do site. Um formulario com 4 campos para nome, email, senha e confirmar senha, um botão para cadastrar as informações inseridas nos campos.

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

#  [X]  3. Pagina Inicial `index.php` 

  Composto por um header com um menu de navegação, com 3 botões de pesquisa, home (direciona para pagina inicial), carrinho de compras(encaminha para pagina Pagina Carrinho de compra) e pagina do usuario (guia para pagina usuario), banner com carrossel, cards dos produtos, footer com redes sociais.

#  [X]  4. Pagina produto `pagina_produto.php` 

header, foto de destaque do produto junto com a descrição dele, valor, botão de quantidade de vezes que deseja comprar o produto, e 2 botões de adicionar ao carrinho(direciona para Pagina Carrinho de compra) e comprar. Seguido de uma seção de cards representando recomendações de outros produtos e o footer

#  [X]  5. Pagina pesquisa `pagina_pesquisa.php`

header padrão, menu simples das categorias, uma seção composto por opções de filtragem com checkbox(Hamburguer, Pizza, Bebida, Marmitas e todos), seção dos produtos pesquisados contido por cards com descrição básica e botão de ver mais. E footer padrão. 

#  [X]  6. Pagina carrinho `pagina_historico_compras.php`

header padrão, seção carrinho de compra anexado produtos já selecionados pelo usuario, com botões de comprar e remover produto, e footer padrão.

#  [X]  7. Pagina usuário `pagina_usuario.php`

header padrão, seção das informação do usuário contendo foto e nome, botão de editar(encaminha para Pagina editar usuário) as informações, foto, campos com nome, email, senha, cpf e cep. Footer padrão.

#  [X]  8. Pagina admin `pagina_admin.php`

header padrão, seção das informação do usuário administrador contendo foto e nome, 3 botões de editar os dados(encaminha para Pagina editar administrador), cadastrar produto(conduz para Pagina cadastrar produto), e lista de produtos(guia Pagina listar produtos), e campos com nome, email, senha, cpf e endereço. 
Footer padrão.

#  [X]  9. Pagina editar usuário/admin `pagina_usuario-editar.php`

header padrao, campos com nome, email, senha, cpf e cep do usuario e um botao de confirmar apos o usuario terminar as alterações(encaminha para a Pagina usuário).

#  [X]  10. Pagina cadastrar produto `pagina_cadastrar_produto.php`

Pagina editar produtos -> header padrão, formulário com campos de nome do produto, descrição e valor. Em seguida, com checkbox (Hamburguer, Pizza, Bebidas, Doces, Msrmitas, Espetinhos  e massas) e botão de finalizar(direciona para Pagina Produto), footer padrão.

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

#  [X]  11. Pagina listar produtos `pagina_lista_produtos.php`

header padrão, barra de busca, espaço onde estará os registro dos produtos com foto, nome e ingredientes e dois botões de editar(encaminha para pagina de editar produtos) e excluir.

#  [X]  12. Pagina editar produto `pagina_editar_produto.php`

header padrao, campos com nome, descrição, categoria, valor do produto junto com um input de escolher arquivo tipo imagem e um botao de enviar.




