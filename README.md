ModularHTML
===========

Tendo como base o [Pattern-Primer](https://github.com/adactio/Pattern-Primer), o ModularHTML é um repositório de código para agilizar, aperfeiçoar e padronizar a produção de páginas web. 

A Estrutura
-----------

###demo.php

Lista todos os módulos existentes seguindo algumas categorias:

* 1. Estrutura
* 2. Navegação
* 3. Texto
* 4. Imagem
* 5. Widget
* 6. Listas
* 7. Modal
* 8. Formulário

Veja a lista completa de módulos na [Wiki](https://github.com/a2comunicacao/ModularHTML/wiki/Lista-de-m%C3%B3dulos)

###/modulos
Pasta contendo todos os módulos existentes. Com o objetivo de manter a organização e o correto funcionamento da listagem dos módulos, alguns padrões precisam ser seguidos:

#####Regras de Nomenclatura

* Nomenclatura da pasta: (número da categoria do módulo).(número do módulo).(título-do-modulo-sem-espacos) --> 1.04.exemplo-de-modulo
* Sempre usar letras minúsculas e sem acentos;
* Ao invés de espaços, usar hífens.


###global.css

Arquivo que contém as declarações de estilo de todos os módulos. Do mesmo modo que a nomenclatura das pastas de módulos, o CSS precisa seguir alguns padrões.

#####Padrões

* O bloco de código com as declarações de estilo referentes ao módulo, deve ser envolvido por comentários CSS contendo o mesmo nome atribuído à pasta do módulo referente. Segue exemplo.

``` css
/*@1.04.exemplo-de-modulo*/
.classe { border:solid 1px blue; }
/*@1.04.exemplo-de-modulo*/
```

###global.js.php

Arquivo que contém as chamadas da biblioteca jQuery e dos scripts usados em alguns dos Módulos.

#####Padrões

* Caso haja algum arquivo JS a ser chamado, ele deve ser colocado dentro da pasta 'modulos' que fica dentro da pasta '*js*' na raiz do projeto ('*/js/modulos*').
* As chamadas dos scripts referentes ao módulo, devem ser envolvidas por comentários HTML contendo o mesmo nome atribuído à pasta do módulo referente. Segue exemplo.

``` html
<!--@1.04.exemplo-de-modulo-->
<script src="/js/modulos/arquivo-javascript.js"></script>
<script>
$(document).ready(function() {
	//script
});
</script>
<!--@1.04.exemplo-de-modulo-->
```


Contribua
---------

Caso tenha idéia de algum módulo novo ou sugestões de melhorias para algum existente, *fique a vontade para contribuir*.

* Copie a pasta *0.0.exemplo-modulo* (que está na raiz do projeto) dentro da pasta Módulos e renomeie-a seguindo as regras de nomenclatura.
* Dentro da pasta de cada Módulo, existem três arquivos: 

>'*index.php*': que é onde você deve escrever o HTML do Módulo; 

>'*demo.php*': arquivo onde ficam as chamadas dos arquivos globais ('*CSS e JS*');

> '*dependencias.txt*': onde você deverá escrever o nome dos scripts e dependências do Módulo (aqui você deve escrever exatamente como está escrito na pasta '*modulos*' dentro da pasta '*js*' na raiz do projeto. Fazendo isso, automaticamente os arquivos escritos nesse .'*.txt*'aparecem como opções de download na área de dependências do Módulo). 
Caso precise, como padrão para essa versão, utilizamos as bibliotecas Modernizr 2.0.6 ('*modernizr-2.0.6.min.js*') e jQuery 1.7.1 ('*jquery-1.7.1.js*'), essa última que já vem chamada no arquivo de dependências dentro da pasta de exemplo de módulo (0.0.exemplo-de-modulo).

* Resumindo: o código renderizado na página do ModularHTML (tanto na visualização do código no lado direito, como do Módulo em si no lado esquerdo) é o que você escreve dentro do arquivo '*index.php*'; já o arquivo '*demo.php*' é o arquivo que é chamado na página de exemplo de cada Módulo.
* Abra o arquivo 'global.css' localizado na raiz do projeto e, dentro da categoria marcada no CSS coloque as declarações de estilo do Módulo seguindo os padrões escritos acima.
* Caso haja algum script, coloque-o na pasta 'modulos' dentro da pasta '*js*' ('*/js/modulos*') e faça as chamadas no arquivo '*global.js.php*', que está na raiz do projeto, seguindo os padrões escritos acima.


Erros
-----
Encontrou algum bug? Crie um 'issue' [aqui](https://github.com/a2comunicacao/ModularHTML/issues)


Créditos
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

Copyright (c) 2012 A2 Comunicação - Distribuído sob licença [MIT](http://opensource.org/licenses/mit-license.php).