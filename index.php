<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            box-sizing: border-box;
        }

        .livros-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .livro {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 15%;
            margin: 5px;
            padding: 10px;
            text-align: center;
        }

        .livro img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .livro h3 {
            font-size: 16px;
            color: #000000;
        }

        .livro p {
            font-size: 14px;
            color: #555;
        }

        .livro span {
            display: block;
            font-size: 12px;
            color: #888;
        }

        /* Responsividade para telas menores */
        @media (max-width: 1200px) {
            .livro {
                width: 30%;
            }
        }

        @media (max-width: 768px) {
            .livro {
                width: 45%;
            }
        }

        @media (max-width: 576px) {
            .livro {
                width: 45%;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Conteúdo da página de livros -->
    <div class="livros-container">
        <!-- Livro 1 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 1</h3>
            <p>Autor: João da Silva</p>
            <span>Data de Publicação: 2020</span>
            <span>Linguagem: Português</span>
            <span>Gêneros: Aventura, Ficção</span>
        </div>

        <!-- Livro 2 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 2</h3>
            <p>Autor: Maria Souza</p>
            <span>Data de Publicação: 2019</span>
            <span>Linguagem: Inglês</span>
            <span>Gêneros: Romance, Drama</span>
        </div>

        <!-- Livro 3 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 3</h3>
            <p>Autor: Carlos Pereira</p>
            <span>Data de Publicação: 2021</span>
            <span>Linguagem: Espanhol</span>
            <span>Gêneros: Mistério, Suspense</span>
        </div>

        <!-- Livro 4 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 4</h3>
            <p>Autor: Ana Clara</p>
            <span>Data de Publicação: 2018</span>
            <span>Linguagem: Português</span>
            <span>Gêneros: Fantasia, Aventura</span>
        </div>

        <!-- Livro 5 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 5</h3>
            <p>Autor: Lucas Gomes</p>
            <span>Data de Publicação: 2017</span>
            <span>Linguagem: Inglês</span>
            <span>Gêneros: Ficção Científica</span>
        </div>

        <!-- Livro 6 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 6</h3>
            <p>Autor: Beatriz Martins</p>
            <span>Data de Publicação: 2022</span>
            <span>Linguagem: Francês</span>
            <span>Gêneros: Terror, Suspense</span>
        </div>

        <!-- Livro 1 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 1</h3>
            <p>Autor: João da Silva</p>
            <span>Data de Publicação: 2020</span>
            <span>Linguagem: Português</span>
            <span>Gêneros: Aventura, Ficção</span>
        </div>

        <!-- Livro 2 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 2</h3>
            <p>Autor: Maria Souza</p>
            <span>Data de Publicação: 2019</span>
            <span>Linguagem: Inglês</span>
            <span>Gêneros: Romance, Drama</span>
        </div>

        <!-- Livro 3 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 3</h3>
            <p>Autor: Carlos Pereira</p>
            <span>Data de Publicação: 2021</span>
            <span>Linguagem: Espanhol</span>
            <span>Gêneros: Mistério, Suspense</span>
        </div>

        <!-- Livro 4 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 4</h3>
            <p>Autor: Ana Clara</p>
            <span>Data de Publicação: 2018</span>
            <span>Linguagem: Português</span>
            <span>Gêneros: Fantasia, Aventura</span>
        </div>

        <!-- Livro 5 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 5</h3>
            <p>Autor: Lucas Gomes</p>
            <span>Data de Publicação: 2017</span>
            <span>Linguagem: Inglês</span>
            <span>Gêneros: Ficção Científica</span>
        </div>

        <!-- Livro 6 -->
        <div class="livro">
            <img src="https://via.placeholder.com/150" alt="Capa do livro">
            <h3>Título do Livro 6</h3>
            <p>Autor: Beatriz Martins</p>
            <span>Data de Publicação: 2022</span>
            <span>Linguagem: Francês</span>
            <span>Gêneros: Terror, Suspense</span>
        </div>
    </div>
</body>
</html>