<html>
    <head>
        <title>Exemplo Accordion em Jquery</title>

        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        
        <script>  $( function() {
                $( "#accordion" ).accordion();
                    });
        </script>

    </head>

    <body>
    <h2>4 TAGS básicas HTML</h2>
        <div id="accordion">
        <h3>HTML</h3>
            <div>
                <p>
                Usadas para informar ao navegador a estrutura do site e o conteúdo visual da página.
                Ou seja: Quando se escreve um código em HTML, as tags serão interpretadas pelo navegador.
                </p>
            </div>
        <h3>HEAD</h3>
            <div>
                <p>
                Usada como cabeçalho, ou seja, um conjunto de informações de uma página de um site. 
                Ou seja: Cabeçalho é um trecho de um documento que fica no início e fornece informações.
                </p>
            </div>
        <h3>TITLE</h3>
            <div>
                <p>
                Marcação do código HTML que visa representar o título de uma determinada página do seu site.
                Ou seja, o texto incluído nessa tag permite que o usuário identifique o tipo de conteúdo da página.
                </p>
            </div>
        <h3>BODY</h3>
            <div>
                <p>
                Como o próprio nome sugere, a tag body é que vai definir o corpo de um site. 
                Estão dentro da tag as informações visíveis para o usuário, os links e imagens que estão vendo.
                </p>
            </div>

        </div>
    </body>

</html>