<html>
    <head>
        <title>Primeiro Site em PHP! Parabens!</title>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> // chama biblioteca jquery estilos

        <style type="text/css">
            .linha {                 // classe representada por (ponto)
                font weight: bold;   // peso da fonte negrito 
                color: green;        // cor da fonte verde
                padding-left: 10px;  // espaço a esquerda
                line-height: 50px;   // altura das linhas
            }
        </style> 
    </head>

    <body>
        <?php                        // chama o php
        for ($i = 0 ; $i <10 ; $i++){
            print ("<span class=\"linha\">Linha numero " . $i . "</span><br />");
            }
        ?>
    </body>

    <script type="text/javascript">
        $(document).ready(function(){ // informa ao navegador 1º ler documento todo
            alert("parabens!");       // pop-up parabens
        });
        </script>
</html> 


/* acesso ao site: localhost/index2.php */