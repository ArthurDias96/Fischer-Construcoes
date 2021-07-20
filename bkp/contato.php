<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <link rel="sortcut icon"href="01.png">
    <link rel="stylesheet"href="gallery-css-master/dist/gallery.theme.css">
    <link rel="stylesheet"href="gallery-css-master/dist/gallery.min.css">
    <link rel="stylesheet" href="bulma.min.css">
</head>
<body>
<!--Logo e menu-->
 <nav>
            <div class="Logo">
                <a href="file:///C:/Users/USER/Documents/GitHub/Fischer-Construcoes/index.html"><img src="02.png"></a>
            </div>
            <button>&#9776;</button>
            <ul>
                <li>
                    <a href="#"><p>Home</p></a>
                </li>
                <li>
                   <a href="file:///C:/Users/USER/Documents/GitHub/Fischer-Construcoes/obras.html"><p>Obras</p></a>
                </li>
               <li>
                    <a href="file:///C:/Users/USER/Documents/GitHub/Fischer-Construcoes/contato.php"><p>Contato</p></a>
                </li>
                </ul>
        </nav>
<!--Slides-->
<div class="gallery autoplay items-3">

            <div id="item-1" class="control-operator"></div>
            <div id="item-2" class="control-operator"></div>
            <div id="item-3" class="control-operator"></div>
            <figure class="item">
                    <h1><img src="03.jpg"></h1>
            </figure>

            <figure class="item">
                    <h1><img src="04.jpg"></h1>
            </figure>

            <figure class="item">
                    <h1><img src="05.jpg"></h1>
            </figure>
            <div class="controls">
                <a href="#item-1" class="control-button">.</a>
                <a href="#item-2" class="control-button">.</a>
                <a href="#item-3" class="control-button">.</a>
            </div>
        </div>
<!--Contato--->
<section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-half">
                    <h1 class="title has-text-centered">Entre em contato</h1>
                     <form action="enviar.php" method="POST">
                        <div class="field">
                            <label class="label">Nome</label>
                            <div class="control">
                                <input name="nome" class="input" type="text" placeholder="Seu nome">
                            </div>
                        </div>
                         <div class="field">
                            <label class="label">Email*</label>
                            <div class="control">
                                <input name="email" class="input" type="email" placeholder="Seu email">
                            </div>
                        </div>
                         <div class="field">
                            <label class="label">Assunto</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                            </div>
                            </div>
                        </div>
 
                        <div class="field">
                            <label class="label">Mensagem*</label>
                            <div class="control">
                                <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
                            </div>
                        </div>
 
                        <div class="field is-grouped">
                            <div class="control">
                                <button class="button is-link is-medium">Enviar</button>
                            </div>
                        </div>
                    </form>
 
                </div>
            </div>
        </div>
    </section>
<!--Rodape-->
 <div class="rodape">
    </div>
</body>

</html>