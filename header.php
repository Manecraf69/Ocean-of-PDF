<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #474747;
            color: #fff;
        }

        /* Estilo do cabeçalho */
        header {
            background-color: #1d1d1d;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        /* Estilo do nome do site */
        .nomeDoSite {
            font-size: 24px;
            font-weight: bold;
        }

        /* Estilo da navegação */
        nav {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilo do input de pesquisa */
        .pesquisa {
            padding: 5px;
            font-size: 16px;
            margin-right: 5px;
        }

        /* Estilos para dispositivos com menos de 800px */
        @media (max-width: 850px) {
            header {
                justify-content: space-between;
            }

            /* Esconder a navegação e mostrar o botão de menu */
            nav {
                display: none;
            }

            .nomeDoSite {
                font-size: 20px;
            }

            .pesquisa {
                padding: 5px;
                font-size: 10px;
            }

            .menu-icon {
                display: block;
                font-size: 24px;
                cursor: pointer;
            }

            /* Mostra a navegação ao clicar no menu */
            .menu-icon.active + nav {
                display: block;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #1d1d1d;
                width: 100%;
            }

            nav ul {
                flex-direction: column;
                gap: 10px;
                padding: 10px;
            }
        }

        /* Estilo para o ícone de menu (hambúrguer) */
        .menu-icon {
            display: none;
        }

        .navegacaoBtn {
            display: none; /* Botão desativado inicialmente */
        }

        /* Esconde a navegação que será exibida pelo botão */
        .navegacao-mobile {
            display: none;
            flex-direction: column;
            background-color: #1d1d1d;
            position: absolute;
            top: 50px; /* Logo abaixo do botão */
            left: 0;
            width: 100%;
        }

        .navegacao-mobile a {
            padding: 10px;
            color: white;
            text-align: center;
            text-decoration: none;
        }

        .navegacao-mobile a:hover {
            background-color: #333;
        }

        /* Quando ativo, mostrar a navegação */
        .navegacao-mobile.active {
            display: flex;
        }
    </style>
</head>
<body>
    <header>
        <button class="navegacaoBtn">☰</button>

        <!-- Nome do site -->
        <div class="nomeDoSite">OceanofPDF</div>

        <!-- Navegação -->
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">New</a></li>
                <li><a href="#">Genres</a></li>
                <li><a href="#">Authors</a></li>
                <li><a href="#">Listopia</a></li>
                <li><a href="#">Request</a></li>
                <li><a href="#">About us</a></li>
            </ul>
        </nav>

        <!-- Nav para dispositivos móveis -->
        <div class="navegacao-mobile">
            <a href="#">Home</a>
            <a href="#">New</a>
            <a href="#">Genres</a>
            <a href="#">Authors</a>
            <a href="#">Listopia</a>
            <a href="#">Request</a>
            <a href="#">About us</a>
        </div>

        <!-- Input de pesquisa -->
        <input class="pesquisa" type="text" placeholder="Search...">
    </header>

    <script>
        function toggleNavegacaoBtn() {
            const navegacaoBtn = document.querySelector('.navegacaoBtn');
            if (window.innerWidth <= 850) {
                navegacaoBtn.style.display = 'block'; // Ativa o botão
            } else {
                navegacaoBtn.style.display = 'none'; // Desativa o botão
            }
        }
    
        // Executa a função quando a página carrega
        window.onload = toggleNavegacaoBtn;
    
        // Executa a função ao redimensionar a janela
        window.onresize = toggleNavegacaoBtn;

        document.querySelector('.navegacaoBtn').addEventListener('click', function() {
            const menu = document.querySelector('.navegacao-mobile');
            menu.classList.toggle('active'); // Exibe/esconde o menu
        });
    </script>
    
</body>
</html>
