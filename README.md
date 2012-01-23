ModularHTML
===========
Tendo como base o Pattern-Primer (https://github.com/adactio/Pattern-Primer), o ModularHTML é um repositório de código para agilizar, aperfeiçoar e padronizar a produção de páginas web. 

Conheça --> https://github.com/a2comunicacao/ModularHTML


A Estrutura
-----------

**index.php**
Lista todos os módulos existentes seguindo algumas categorias:

* 1. Estrutura
* 2. Navegação
* 3. Texto
* 4. Imagem
* 5. Widget
* 6. Listas
* 7. Modal
* 8. Formulário

**/modulos**
Pasta contendo todos os módulos existentes. Com o objetivo de manter a organização e o correto funcionamento da listagem dos módulos, alguns padrões precisam ser seguidos:

* Nomenclatura da pasta: (número da categoria do módulo).(número do módulo).(título-do-modulo-sem-espacos) --> 1.4.exemplo-de-modulo
* Sempre usar letras minúsculas e sem acentos;
* Ao invés de espaços, usar hífens.


**global.css**
Arquivo que contém as declarações de estilo de todos os módulos. Do mesmo modo que a nomenclatura das pastas de módulos, o CSS precisa seguir alguns padrões.

* O bloco de código com as declarações de estilo referentes ao módulo, deve ser envolvido por comentários contendo o mesmo nome atribuído à pasta do módulo referente. Segue exemplo.

``` css
/*@1.4.exemplo-de-modulo*/
.classe { border:solid 1px blue; }
/*@1.4.exemplo-de-modulo*/
```

Contribua
---------

Caso tenha idéia de algum módulo novo fique a vontade para contribuir.

* Copie uma das pastas de módulos existentes e renomeie-a seguindo as regras de nomenclatura.
* Dentro da pasta de cada Módulo, existem dois arquivos: 'index.php' que é onde você deve escrever o HTML do Módulo, e 'demo.php' onde ficam as chamadas do CSS ('global.css'), da biblioteca jQuery e do JS (caso o Módulo necessite). Note que o arquivo 'index.php' é chamado através de um 'include'.
* Resumindo: o código renderizado na página inicial do ModularHTML (tanto na visualização do código como do Módulo em si) é o que você escreve dentro do arquivo 'index.php'; já o arquivo 'demo.php' é o que é chamado na página de exemplo de cada Módulo.
* Abra o arquivo 'global.css' localizado na raiz do projeto e, dentro da categoria marcada no CSS coloque as declarações de estilo do Módulo seguindo os padrões acima.

Erros
-----
Encontrou algum bug? Crie um 'issue' aqui: https://github.com/a2comunicacao/ModularHTML/issues


Colaboradores
-------------

**Adriano Ribeiro**

+ http://twitter.com/adriano

**Airton Vancin**

+ http://twitter.com/airtonvancin

**Raphael Fabeni**

+ http://twitter.com/raphaelfabeni

**Rodrigo Teixeira**

+ http://twitter.com/drigoteixeira

**Sandra Segato**

+ http://twitter.com/sansegato

**Vivian Oliveira**

+ http://twitter.com/viiholiveira