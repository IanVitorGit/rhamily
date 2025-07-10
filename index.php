<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Rhamily</title>
    <style>
        /* Estilos principais */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #1e1e1e;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('image.jpg'); /* Imagem de fundo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.7); /* Sobreposição mais escura */
            padding: 90px 80px;  /* Muito mais espaço no conteúdo central */
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 90%; /* Largura mais flexível */
            max-width: 800px; /* Aumenta ainda mais a largura máxima */
            height: auto;
        }

        /* Wrapper para a imagem do perfil */
        .profile-pic-wrapper {
            width: 250px;  /* Tamanho ainda maior */
            height: 250px;  /* Tamanho ainda maior */
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #fff;
            margin-bottom: 40px;  /* Maior espaçamento */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.8); /* Sombra mais forte */
            transition: transform 0.3s ease-in-out; /* Efeito de zoom suave */
        }

        .profile-pic-wrapper:hover {
            transform: scale(1.15); /* Aumenta mais quando o mouse passa */
        }

        .profile-pic {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Preenche o círculo sem distorcer */
        }

        h1 {
            font-size: 60px;  /* Tamanho ainda maior para o título */
            font-weight: bold;
            color: #fff;
            margin: 20px 0;
            letter-spacing: 2px;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8); /* Sombra mais pronunciada no texto */
        }

        p {
            font-size: 26px;  /* Fonte ainda maior para a descrição */
            color: #ccc;
            margin-bottom: 40px;
            font-style: italic;
        }

        /* Estilos para o botão */
        .btn {
            padding: 50px 120px;  /* Botão bem maior */
            background-color: rgb(0, 0, 0);
            color: white;
            border: none;
            border-radius: 40px;
            font-size: 40px;  /* Fonte do botão bem maior */
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
        }

        .btn:hover {
            background-color: rgb(5, 0, 4);
            transform: translateY(-7px); /* Efeito de elevação mais forte */
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6); /* Sombra mais intensa no hover */
        }

        /* Estilos responsivos */
        @media screen and (max-width: 600px) {
            .overlay {
                padding: 40px 20px; /* Menos espaço nas telas menores */
                width: 95%; /* Ajustando a largura para telas menores */
            }

            .profile-pic-wrapper {
                width: 180px;
                height: 180px;
            }

            h1 {
                font-size: 40px; /* Ajustando o tamanho do título */
            }

            .btn {
                padding: 30px 80px;
                font-size: 30px; /* Fonte do botão um pouco menor em celulares */
            }

            p {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="overlay">
        <!-- Div com a imagem de perfil dentro de um círculo -->
        <div class="profile-pic-wrapper">
            <img src="perfil.png" alt="Rhamily Maria" class="profile-pic">
        </div>
        <h1>Rhamily Maria</h1>
        <p>EXTENSÃO DE CÍLIOS E DESIGN DE SOBRANCELHAS✨</p>
        <!-- Link para WhatsApp -->
        <a href="https://wa.me/message/DFSQEECFIDJUE1" target="_blank">
            <button class="btn">AGENDE AQUI</button>
        </a>
    </div>
</body>
</html>
