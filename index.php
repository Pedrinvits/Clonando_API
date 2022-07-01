<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Rick and Mory API</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <div class="header">
        <h1>The Rick and Mory API</h1>
    </div>
    <section>
        <div class="container">
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js">
</script>
<script>
    $.ajax({
        method: "GET",
        url: 'https://rickandmortyapi.com/api/character',

        success: function(json) {
            console.log(json.results)
            json.results.forEach(result => {
                console.log(result);
                //criando os elementos
                const div_container = document.querySelector(".container"); //chamdando a div pai
                const div = document.createElement('div')
                const div_imagem = document.createElement('div')
                const div_informacoes = document.createElement('div')
                const imagem = document.createElement('img'); //cria a tag <img>
                const nome = document.createElement('p');
                const status = document.createElement('span')
                
               
                

                //inserindo atributos nas tags
                
                nome.classList.add('nome_personagem');
                imagem.classList.add('imagem') //criando uma class="imagem" na tag
                imagem.src = result.image; //cria o atributo src='#' na tag
                nome.classList.add('nome_personagem');
                nome.innerHTML = result.name;
                div.classList.add('personagem');
                div_imagem.classList.add('imagem_dentro')
                div_informacoes.classList.add('informacoes')
                
                status.classList.add('status_personagem');
                status.innerHTML = result.status;
                
                
                

                //inserindo elementos dentro da div
                // div.appendChild(div_container); //inserindo a div dos personagens dentro do container
                div_container.appendChild(div);
                div.appendChild(div_imagem)
                div.appendChild(div_informacoes)
                div_imagem.appendChild(imagem);
                div_informacoes.appendChild(nome);
                div_informacoes.appendChild(status);

            })




        }
    })
</script>

</html>

<div class="card"><img>
    <h2></h2><span><span><a></a><span><a></a>
</div>