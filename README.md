ModularHTML
===========

ModularHTML é um repositório de código para agilizar, aperfeiçoar e padronizar a produção de páginas web.

Para contribuir --> https://github.com/a2comunicacao/ModularHTML


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