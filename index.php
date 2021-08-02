<? 
include "funcao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'seuemail@gmail.com', $_POST['mensagem'], 'Formulário de contato'))
    {
        echo "Sua mensagem foi enviada com sucesso!";
    }
    else
    {
        echo "Ocorreu um erro ao enviar";
    }
    echo "<br><a href='index.php'>Voltar</a>";
    exit();
}
?>

<html lang="pt-br">
<head>
    <title>Fischer Construções</title>
    <meta charset="utf-8">
    <link rel="stylesheet"href="style.css">
    <link rel="sortcut icon"href="01.png">
    <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript.js"></script>
    <link rel="stylesheet" href="components/normalize-css/normalize.css">
    <link rel="stylesheet" href="gallery-css-master/dist/gallery.css">
    <link rel="stylesheet" href="gallery-css-master/dist/gallery.theme.css">
    <script src="components/html5shiv/dist/html5shiv.js"></script>
    <script src="components/prefix-free/prefixfree.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html;">
    <link rel="stylesheet" href="class.css" type="text/css">
</head>
    <!--Logo e menu-->
 <nav>
            <div class="Logo">
                <a href="index.html"><img src="02.png"></a>
            </div>
               <ul>
                <li>
                    <a href="index.html"><p>Home</p></a>
                </li>
                <li>
                   <a href="sobre.html"><p>Sobre</p></a>
                </li>
                <li>
                    <a href="contato.html"><p>Contato</p></a>
                </li>
                </ul>
        </nav>
<!--Slides-->
<div class="gallery autoplay items-3">
            <div id="item-1" class="control-operator"></div>
            <div id="item-2" class="control-operator"></div>
            <div id="item-3" class="control-operator"></div>
            <figure class="item">
                    <img src="03.jpg">
            </figure>
            <figure class="item">
                    <img src="04.jpg">
            </figure>
            <figure class="item">
                    <img src="05.jpg">
            </figure>
            <div class="controls">
                <a href="#item-1" class="control-button">.</a>
                <a href="#item-2" class="control-button">.</a>
                <a href="#item-3" class="control-button">.</a>
            </div>
        </div>
 <!--Obras--->
        <div class="obras">
            <h3>SERVIÇOS</h3>
            <div class="css985">
                <img src="p10.png"></div>
            <div class="obra_1">
                <img src="post.jpg"></div>
            <div class="obra_2">
                <img src="post.jpg"></div>
            <div class="obra_3">
                <img src="post.jpg"></div> 
        </div>       
<!--Sobre a empresa-->
<div class="img_1"></div>
    <div class="somos">
        <h1>Quem somos</h1>
        <h4>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</h4>
    </div>
<!---Todas as informaçoes da empresa---> 
    <div class="ht10">
        <h3>CONTATO</h3>
    </div> 
    <div class="css985">
        <img src="p10.png"></div>
    </div>
    <div class="Endereço">
        <h5>Endereço</h5>
    </div>
    <div class="K10">
        <h6>R. das Hortências, 1232 - St. Comercial,</h6>
    </div>
    <div class="K10">
        <h6>Sinop - MT, 78550-100</h6>
    </div>
    <div class="css66">
        <h5>Carreira</h5>
    </div>
    <div class="K10">
        <h6>Para trabalhar conosco, por favor envie o </h6>
    </div>
    <div class="K10">
        <h6>seu curriculo para: vaga@fischerconstrucoes.com.br</h6>
    </div>
    <div class="red56">
        <h5>Redes Sociais</h5>
    </div>
    <div class="co89">
        <h5>Contato</h5>
    </div>
    <div class="formulario">
    <form method="post" onsubmit="validaForm(); return false;" class="form">
    <p class="name">
        <label for="name">Nome</label>
        <input type="text" placeholder="Seu Nome" />
    </p>
    <p class="email">
        <label for="email">E-mail</label>
        <input type="text" placeholder="mail@exemplo.com.br" />
    </p>
    <p class="text">
        <label for="mensagem">Mensagem</label>
        <textarea placeholder="Escreva sua mensagem" /></textarea>
    </p>
    <p class="submit">
        <input type="submit" value="Enviar" />
    </p>
    </form>
      </div>
      <script type="text/javascript">
        function validaForm()
        {
            erro = false;
            if($('#nome').val() == '')
            {
                alert('Você precisa preencher o campo Nome');erro = true;
            }
            if($('#email').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo E-mail');erro = true;
            }
            if($('#mensagem').val() == '' && !erro)
            {
                alert('Você precisa preencher o campo Mensagem');erro = true;
            }
            
            //se nao tiver erros
            if(!erro)
            {
                $('#formulario_contato').submit();
            }
        }
    </script>
<!--Rodape-->

<script src="script.js"></script>
</body>
</html>

