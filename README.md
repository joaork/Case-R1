# 🥤 Case R1 - E-commerce de Produtos Personalizados

![Project Status](https://img.shields.io/badge/status-concluido-brightgreen) ![Project Type](https://img.shields.io/badge/type-freelance-blue) ![Platform](https://img.shields.io/badge/platform-WordPress%20%2B%20WooCommerce-21759B) ![Custom](https://img.shields.io/badge/custom-personalizador%20em%20tempo%20real-ffcc00)

> **Nota:** Este repositório contém uma demonstração do projeto **Case R1**, um e-commerce desenvolvido para venda de copos e garrafas térmicas personalizadas. Por questões de confidencialidade e propriedade intelectual do cliente, informações sensíveis, chaves de API, dados reais de pedidos, credenciais, integrações privadas e arquivos internos de produção não estão incluídos neste repositório público.

---

## 📖 Sobre o Projeto

O **Case R1** é uma loja virtual voltada para produtos personalizados, com foco em uma experiência moderna, visual e intuitiva para o cliente.

O principal diferencial do projeto é o sistema de **personalização em tempo real**, onde o usuário digita o nome desejado e visualiza automaticamente a aplicação do texto no produto antes de adicionar ao carrinho.

Além da interface do cliente, o projeto também conta com uma área administrativa personalizada, permitindo configurar campos de personalização, fontes, cores, tamanhos, posições no preview e posições no arquivo de produção.

---

## 📸 Demonstração

<!-- 
Substitua os links abaixo pelas imagens enviadas no GitHub.
Para adicionar imagens: abra uma Issue ou edite o README no GitHub, arraste as imagens e copie os links gerados.
-->

<img width="2559" alt="Home Case R1" src="COLE_AQUI_O_LINK_DA_IMAGEM_DA_HOME" />
<img width="2559" alt="Página do produto com personalização" src="COLE_AQUI_O_LINK_DA_PAGINA_DO_PRODUTO" />
<img width="2559" alt="Preview personalizado no produto" src="COLE_AQUI_O_LINK_DO_PREVIEW_PERSONALIZADO" />
<img width="2559" alt="Painel de personalização no WordPress" src="COLE_AQUI_O_LINK_DO_ADMIN_PERSONALIZACAO" />
<img width="2559" alt="Minha conta do cliente" src="COLE_AQUI_O_LINK_DA_MINHA_CONTA" />

---

## 🚀 Funcionalidades Principais

### 🛒 Loja Virtual

* **Página inicial personalizada:** Hero banner, chamadas comerciais, categorias, destaques e seções de produtos.
* **Vitrine de produtos:** Cards modernos com imagem, preço, avaliação, selo de produto personalizável e botão de compra.
* **Categorias e coleções:** Organização dos produtos por linhas, coleções e subcategorias, como copos, garrafas e coleções especiais.
* **Página de produto completa:** Galeria, preço, categorias, seletor de quantidade e botão de adicionar ao carrinho.
* **Área do cliente:** Página de conta com pedidos, downloads, endereços, métodos de pagamento e dados do usuário.
* **Checkout integrado ao WooCommerce:** Fluxo de compra estruturado com carrinho, pedido e acompanhamento pelo cliente.

### ✨ Personalização em Tempo Real

* **Campo personalizado obrigatório:** O cliente precisa preencher o nome antes de comprar o produto.
* **Preview automático:** O texto digitado aparece diretamente sobre a imagem do produto.
* **Contador de caracteres:** Exibição do limite máximo permitido para evitar nomes fora do padrão.
* **Transformação do texto:** Possibilidade de manter como digitado, aplicar maiúsculas ou outros formatos.
* **Fonte personalizada:** Suporte para fontes `.ttf` e `.otf`, garantindo fidelidade entre o preview do site e o arquivo final.
* **Controle visual do texto:** Cor, contorno, espessura, espaçamento, rotação, sombra e tamanho.
* **Posicionamento por imagem:** Cada imagem da galeria pode ter uma posição própria para o texto, evitando desalinhamento quando o cliente troca a foto.
* **Prévia fiel ao produto:** Sistema pensado para mostrar ao cliente exatamente onde o nome será aplicado.

### 🖨️ Produção e Arquivo TIFF

* **Referência de produção:** Configuração separada entre posição do preview e posição no arquivo final.
* **Exportação para produção:** Após a confirmação do pagamento, o sistema gera o arquivo final.
* **Download do TIFF:** O arquivo de produção fica disponível no item do pedido para o administrador baixar.
* **Padronização de impressão:** Tamanho, posição e fonte são configurados para manter qualidade no processo de produção.
* **Separação por pedido:** Cada personalização é salva de forma organizada, reduzindo erros na produção.

### 🎨 Produtos Variáveis

* **Variações por cor:** Possibilidade de cadastrar o mesmo produto com opções como preto, branco, azul, rosa, entre outras.
* **Imagens por variação:** Cada cor pode ter imagem própria para melhorar a visualização do cliente.
* **Estoque por variação:** Controle individual de estoque, preço e disponibilidade.
* **Experiência mais clara:** O cliente seleciona a cor desejada antes de adicionar ao carrinho.

---

## 🧩 Painel Administrativo Personalizado

O projeto possui campos administrativos específicos para controlar a personalização dos produtos, incluindo:

* Ativar ou desativar personalização obrigatória.
* Definir título do campo e placeholder.
* Configurar limite máximo de caracteres.
* Definir transformação do texto.
* Selecionar cor do texto e cor de contorno.
* Enviar arquivo de fonte personalizada.
* Ajustar tamanho no preview e no TIFF.
* Definir peso, estilo, traçado, sombra e rotação.
* Criar múltiplas camadas de texto.
* Duplicar configurações e criar presets.
* Posicionar visualmente o texto em cada imagem do produto.
* Posicionar o texto no arquivo TIFF de produção.

---

## 🏗️ Fluxo do Sistema

O funcionamento do projeto segue o seguinte fluxo:

1. O administrador cadastra o produto no WordPress/WooCommerce.
2. O produto recebe imagens, preço, categoria, coleção e configurações de personalização.
3. No painel personalizado, o administrador ativa a personalização obrigatória.
4. São configurados fonte, limite de caracteres, cor, tamanho e posição do texto.
5. O cliente acessa a página do produto e digita o nome desejado.
6. O site renderiza a personalização em tempo real no preview.
7. O cliente adiciona o produto ao carrinho e finaliza o pedido.
8. Após a confirmação do pagamento, o sistema gera o arquivo TIFF de produção.
9. O administrador acessa o pedido e baixa o arquivo final para produção.

---

## 🛠️ Tecnologias Utilizadas

O projeto foi desenvolvido utilizando tecnologias web e recursos personalizados sobre WordPress:

* **WordPress**
* **WooCommerce**
* **PHP**
* **MySQL**
* **HTML5**
* **CSS3**
* **JavaScript**
* **jQuery**
* **AJAX**
* **Canvas / Renderização visual**
* **Fontes personalizadas `.ttf` e `.otf`**
* **Sistema de geração de arquivo TIFF**
* **Customização de tema e painel administrativo**

---

## 🎯 Destaques Técnicos

* Desenvolvimento de interface alinhada à identidade visual da marca.
* Customização avançada do WooCommerce.
* Criação de campos personalizados por produto.
* Sistema de preview em tempo real.
* Organização de produtos por categoria, subcategoria e coleção.
* Configuração individual para imagens de galeria.
* Integração entre compra, pedido e produção.
* Geração de arquivo final para produção.
* Área do cliente personalizada e responsiva.
* Layout adaptado para desktop, tablet e mobile.

---

## 📂 Estrutura Geral do Projeto

A estrutura pode variar conforme a versão publicada, mas o projeto segue uma organização semelhante a:

```bash
case-r1/
│
├── wp-content/
│   ├── themes/
│   │   └── case-r1/
│   │       ├── assets/
│   │       │   ├── css/
│   │       │   ├── js/
│   │       │   └── images/
│   │       ├── functions.php
│   │       ├── header.php
│   │       ├── footer.php
│   │       └── woocommerce/
│   │
│   └── plugins/
│       └── case-r1-personalizacao/
│           ├── assets/
│           ├── includes/
│           └── case-r1-personalizacao.php
│
└── README.md
```

---

## ⚙️ Como Executar Localmente

> Este projeto depende de um ambiente WordPress com WooCommerce instalado.

1. Clone o repositório:

```bash
git clone https://github.com/joaork/case-r1.git
```

2. Copie os arquivos do tema/plugin para a pasta `wp-content`.

3. Crie ou importe um banco de dados WordPress.

4. Configure o arquivo `wp-config.php` com os dados do banco.

5. Ative o tema e os plugins necessários pelo painel administrativo.

6. Instale e ative o WooCommerce.

7. Cadastre os produtos e configure as personalizações.

---

## 🧪 Guia Rápido de Uso

### Criar um produto

1. Acesse o painel do WordPress.
2. Vá em **Produtos > Adicionar novo**.
3. Informe nome, descrição, preço e imagem principal.
4. Selecione categoria e subcategoria.
5. Publique o produto.

### Criar produto variável com cores

1. Em **Dados do produto**, selecione **Produto variável**.
2. Crie um atributo, como `Cor`.
3. Marque a opção **Usado para variações**.
4. Gere as variações.
5. Configure preço, estoque e imagem de cada cor.

### Ativar personalização

1. Abra a edição do produto.
2. Localize a área **Personalização Case R1**.
3. Ative a personalização obrigatória.
4. Defina título, placeholder e limite de caracteres.
5. Configure fonte, cor, tamanho e posição.
6. Salve o produto.

### Baixar TIFF de produção

1. Aguarde a confirmação do pagamento.
2. Acesse o pedido no painel do WooCommerce.
3. Abra os itens do pedido.
4. Clique em **Baixar TIFF de produção**.
5. Envie o arquivo para o processo de impressão/personalização.

---

## 📐 Recomendações de Imagens

Para manter qualidade visual no site, recomenda-se:

* **Imagem principal do produto:** 1200x1200 px ou superior.
* **Cards de produto:** proporção quadrada, preferencialmente 1:1.
* **Banners desktop:** 1920x700 px ou superior.
* **Banners mobile:** versão vertical ou adaptada para telas menores.
* **Imagens de variações:** mesma posição e enquadramento para todas as cores.
* **Arquivos de produção:** usar imagens em alta resolução e sem compressão excessiva.

---

## 🔒 Observação Sobre o Repositório Público

Este repositório tem finalidade demonstrativa e profissional. Algumas partes podem ter sido removidas ou adaptadas para proteger:

* Dados reais do cliente.
* Informações de pagamento.
* Credenciais e chaves privadas.
* Arquivos de produção.
* Lógicas internas específicas.
* Integrações privadas.
* Configurações do servidor.

---

## 👨‍💻 Desenvolvedor

Desenvolvido por **João Lima**.

* GitHub: [joaork](https://github.com/joaork)
* LinkedIn: [jl-profile](https://linkedin.com/in/jl-profile)
* E-mail: joaovictorscr1@gmail.com

---

## 📌 Status do Projeto

✅ Projeto concluído  
✅ Interface responsiva  
✅ Personalização em tempo real  
✅ Integração com WooCommerce  
✅ Painel administrativo customizado  
✅ Geração de arquivo para produção  
