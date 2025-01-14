<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliv - Redefinindo Luxo</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo"> <img src="img/logoeliv.png" alt="logo eliv"></div>
        <nav>
            <a href="#about">Sobre</a>
            <a href="#collections">Coleções</a>
            <a href="#contact">Contato</a>
        </nav>
    </header>
    
    <section class="hero-background">
        <div class="hero-text">
            <h1>Eliv</h1>
            <p>Redefinindo Luxo e Elegância</p>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about-text">
            <h2>Sobre Nós</h2>
            <p>A Eliv é uma marca de roupas de grife dedicada a redefinir a elegância contemporânea. Inspirada no equilíbrio entre sofisticação e autenticidade, a Eliv traz peças exclusivas que combinam design atemporal com as tendências mais refinadas da moda mundial.</p>

            <p>Cada coleção é desenvolvida com atenção meticulosa aos detalhes, utilizando materiais premium e técnicas artesanais, garantindo qualidade, conforto e um toque de luxo em cada peça. Na Eliv, acreditamos que a moda é uma forma de expressão única, onde estilo e personalidade se encontram.</p>

            <p>Seja para ocasiões especiais ou para o dia a dia de quem busca exclusividade e elegância, a Eliv veste aqueles que valorizam o poder da imagem e a força de um bom design.</p>

            <p>Você pode vivenciar a experiência Eliv em nossa loja física, localizada no 
                <a href="https://maps.app.goo.gl/wXVG7keVGhJmQHGa6" target="_blank">Shopping Diamond Mall</a> em Belo Horizonte. Venha conhecer de perto nossas coleções exclusivas, com atendimento personalizado e um ambiente que reflete toda a sofisticação da nossa marca.
            </p>
        </div>
        <div class="about-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9150319982978!2d-43.94997902389947!3d-19.92798508146003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69760ed721583%3A0x57d9ceae8b8dbb39!2sDiamond%20Mall!5e0!3m2!1spt-BR!2sbr!4v1734455381977!5m2!1spt-BR!2sbr" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="collections" id="collections">
        <h2>Coleções</h2>
        <div class="gallery">
            <!-- Produto 1 -->
            <figure class="item">
                <a href="produto-blusa.html">
                    <img src="img/blusa1.png" alt="Blusa">
                    <figcaption>Camisa Polo por R$ 129,90</figcaption>
                </a>
                <!-- Produtos extras ocultos -->
                <div class="extra-items" style="display: none;">
                    <figure>
                        <a href="produto-blusa.html">
                            <img src="img/blusa2.png" alt="Blusa 2">
                            <figcaption>Camisa Linho por R$ 149,90</figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="produto-blusa.html">
                            <img src="img/blusa3.png" alt="Blusa 3">
                            <figcaption>Camisa por R$ 119,90</figcaption>
                        </a>
                    </figure>
                    <figure>
                        <a href="produto-blusa.html">
                            <img src="img/blusa4.png" alt="Blusa 4">
                            <figcaption>Camiseta por R$ 199,90</figcaption>
                        </a>
                    </figure>
                </div>
                <!-- Botão Mostrar Mais -->
                <button class="show-more-btn">Mais</button>
            </figure>

            <!-- Produto 2 -->
            <figure class="item">
                <img src="img/calca1.png" alt="Calça">
                <figcaption>Calças por R$ 229,90</figcaption>
                <!-- Produtos extras ocultos -->
                <div class="extra-items" style="display: none;">
                    <figure>
                        <img src="img/calca2.png" alt="Calça">
                        <figcaption>Calças por R$ 249,90</figcaption>
                    </figure>
                    <figure>
                        <img src="img/calca3.png" alt="Calça">
                        <figcaption>Calças por R$ 279,90</figcaption>
                    </figure>
                    <figure>
                        <img src="img/calca4.png" alt="Calça">
                        <figcaption>Calças por R$ 299,90</figcaption>
                    </figure>
                </div>
                <!-- Botão Mostrar Mais -->
                <button class="show-more-btn">Mais</button>
            </figure>

            <!-- Produto 3 -->
            <figure class="item">
                <img src="img/terno1.png" alt="Terno">
                <figcaption>Ternos por R$ 1259,90</figcaption>
                <!-- Produtos extras ocultos -->
                <div class="extra-items" style="display: none;">
                    <figure>
                        <img src="img/terno2.png" alt="Terno">
                        <figcaption>Ternos por R$ 1359,90</figcaption>
                    </figure>
                    <figure>
                        <img src="img/terno3.png" alt="Terno">
                        <figcaption>Ternos por R$ 1459,90</figcaption>
                    </figure>
                    <figure>
                        <img src="img/terno4.png" alt="Terno">
                        <figcaption>Ternos por R$ 1559,90</figcaption>
                    </figure>
                </div>
                <!-- Botão Mostrar Mais -->
                <button class="show-more-btn">Mais</button>
            </figure>
        </div>
    </section>

    <script>
        // Seleciona todos os botões de "Mostrar Mais"
        const buttons = document.querySelectorAll('.show-more-btn');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Encontra o contêiner de itens extras correspondente
                const extraItems = this.previousElementSibling;

                // Verifica se o elemento existe e ajusta a exibição
                if (extraItems && extraItems.classList.contains('extra-items')) {
                    extraItems.style.display = "flex";
                }

                // Oculta o botão "Mostrar Mais" após o clique
                this.style.display = "none";
            });
        });
    </script>

    <section class="contact" id="contact">
        <h2>Contato</h2>
        <form method="POST" action="mailto:contato@eliv.com?subject=Mensagem%20de%20Contato">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" placeholder="Seu nome" required>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Seu e-mail" required>

            <label for="message">Mensagem</label>
            <textarea id="message" name="message" rows="5" placeholder="Sua mensagem"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <div class="container">
            <div class="logo"> <img src="img/logoeliv.png" alt="logo eliv"></div>
            <div class="social">
                <nav>
                    <a href="http://facebook.com/eliv">Facebook</a>
                    <a href="http://twitter.com/eliv">Twitter</a>
                    <a href="http://instagram.com/eliv">Instagram</a>
               </nav>
            </div>
        </div>
    </footer>
</body>
</html>