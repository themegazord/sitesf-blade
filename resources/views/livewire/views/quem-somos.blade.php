<div>
  <main id="main-quemsomos-desktop">
    <div class="container-quemsomos">
      <div class="container-quemsomos-left">
        <h3>Quem somos</h3>
        <p>
          Na <b>SF SISTEMAS</b>, desenvolvemos soluções tecnológicas inovadoras para impulsionar o
          crescimento de negócios nos setores de
          <b>Comércio Varejista, Prestação de Serviços e Pequenas Indústrias</b>. Nossa plataforma é
          projetada para ser intuitiva, com uma interface padronizada que facilita a operação e
          reduz significativamente o tempo necessário para treinamento, permitindo que sua equipe
          alcance resultados excepcionais com rapidez.
        </p>
        <p>
          Nosso sistema garante a emissão de documentos eletrônicos com total conformidade, aderindo
          estritamente às normativas das Secretarias de Fazenda e mantendo-se constantemente
          atualizado frente às mudanças legislativas.
        </p>
        <p>
          Equipado com ferramentas avançadas de análise gerencial, o <b>SAFI</b> oferece aos
          gestores uma visão holística do ciclo de atendimento ao cliente. Isso não só facilita a
          tomada de decisões informadas, mas também consolida todas as informações comerciais,
          financeiras e produtivas em um único ponto de acesso,
          <b>otimizando o processo decisório e impulsionando a lucratividade do seu negócio.</b>
        </p>
        <p>
          Escolha o <b>SAFI</b> para elevar a eficiência operacional da sua empresa, ganhando
          agilidade e competitividade no mercado, reduzindo tempos de execução e elevando a
          produtividade do seu time.
        </p>
      </div>
      <div class="container-quemsomos-right">
        <img src="{{ asset('imagens/QuemSomosImgRight.png') }}" alt="" />
        <button onclick="envio()">Clique aqui e fale com nosso time</button>
      </div>
    </div>
  </main>
  <main id="main-quemsomos-mobile">
    <div class="container-quemsomos-mobile">
      <h3>Quem somos</h3>
      <p>
        Na <b>SF SISTEMAS</b>, desenvolvemos soluções tecnológicas inovadoras para impulsionar o
        crescimento de negócios nos setores de
        <b>Comércio Varejista, Prestação de Serviços e Pequenas Indústrias</b>. Nossa plataforma é
        projetada para ser intuitiva, com uma interface padronizada que facilita a operação e
        reduz significativamente o tempo necessário para treinamento, permitindo que sua equipe
        alcance resultados excepcionais com rapidez.
      </p>
      <p>
        Nosso sistema garante a emissão de documentos eletrônicos com total conformidade, aderindo
        estritamente às normativas das Secretarias de Fazenda e mantendo-se constantemente
        atualizado frente às mudanças legislativas.
      </p>
      <div class="container-quemsomos-mobile-imagem">
        <img src="{{ asset('imagens/QuemSomosImgRight.png') }}" alt="" />
        <button onclick="envio()">Clique aqui e fale com nosso time</button>
      </div>
      <p>
        Equipado com ferramentas avançadas de análise gerencial, o <b>SAFI</b> oferece aos
        gestores uma visão holística do ciclo de atendimento ao cliente. Isso não só facilita a
        tomada de decisões informadas, mas também consolida todas as informações comerciais,
        financeiras e produtivas em um único ponto de acesso,
        <b>otimizando o processo decisório e impulsionando a lucratividade do seu negócio.</b>
      </p>
      <p>
        Escolha o <b>SAFI</b> para elevar a eficiência operacional da sua empresa, ganhando
        agilidade e competitividade no mercado, reduzindo tempos de execução e elevando a
        produtividade do seu time.
      </p>
    </div>
  </main>
  <livewire:componentes.footer.footer />
  <script>
    function envio() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no seu sistema, poderia me contar um pouco mais sobre?`
      )

      window.open(
        `https://api.whatsapp.com/send?phone=5567999832455&text=${mensagem.replaceAll('$', '%0D')}`
      )
    }
  </script>
  <style>
    main {
      background-color: var(--cinza-principal);
      height: 89vh;
      overflow-x: hidden;
    }

    footer {
      position: fixed;
      bottom: 0;
      right: 0;
    }

    .container-quemsomos {
      display: flex;
      justify-content: space-between;
      height: 80vh;
    }

    .container-quemsomos-left {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      padding: 10rem;
      gap: 3rem;
    }

    .container-quemsomos-left h3 {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 2.375rem;
      font-weight: 700;
      color: #d2d2d2;
    }

    .container-quemsomos-left p {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 1rem;
      color: #d2d2d2;
      width: 75%;
      text-align: justify;
    }

    .container-quemsomos-right::after {
      content: '';
      height: 700px;
      width: 700px;
      position: absolute;
      z-index: 0;
      left: 1350px;
      top: 120px;
      border-radius: 100%;
      background-color: rgba(237, 237, 237, 0.23);
    }

    .container-quemsomos-right {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container-quemsomos-right img {
      height: 450px;
      z-index: 1;
    }

    .container-quemsomos-right button {
      border: none;
      border-radius: 10px;
      transition: .5s ease;
      font-family: Be Vietnam Pro, sans-serif;
      position: absolute;
      right: 175px;
      bottom: 150px;
      z-index: 1;
      background-color: var(--azul-principal);
      color: white;
      text-decoration: underline;
    }

    .container-quemsomos-right button:hover {
      cursor: pointer;
      background-color: #3593be;
    }

    @media screen and (max-width: 2560px) {
      #main-quemsomos-desktop {
        display: block;
      }

      #main-quemsomos-mobile {
        display: none;
      }

      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 2560 / 1920);
        gap: calc(3rem * 2560 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 2560 / 1920);
        width: calc(700px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 2560 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 2560 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 2560 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
        width: calc(27rem * 2560 / 1920);
        right: calc(175px * 2560 / 1920);
        bottom: calc(150px * 2560 / 1920);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1920px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1920 / 1920);
        gap: calc(3rem * 1920 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1920 / 1920);
        width: calc(700px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1920 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1920 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1920 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1920 / 1920);
        width: calc(27rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
        right: calc(175px * 1920 / 1920);
        bottom: calc(150px * 1920 / 1920);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1600px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1600 / 1920);
        gap: calc(3rem * 1600 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1600 / 1920);
        width: calc(700px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1600 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1600 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1600 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
        width: calc(27rem * 1600 / 1920);
        right: calc(175px * 1600 / 1920);
        bottom: calc(150px * 1600 / 1920);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1440px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1440 / 1920);
        gap: calc(3rem * 1440 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1440 / 1920);
        width: calc(700px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1440 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1440 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1440 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
        width: calc(27rem * 1440 / 1920);
        right: calc(175px * 1440 / 1920);
        bottom: calc(150px * 1440 / 1920);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1366px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1366 / 1920);
        gap: calc(3rem * 1366 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1366 / 1920);
        width: calc(700px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1366 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1366 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1366 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
        width: calc(27rem * 1366 / 1920);
        right: calc(175px * 1366 / 1920);
        bottom: calc(70px * 1366 / 1366);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1280px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1280 / 1920);
        gap: calc(3rem * 1280 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1280 / 1920);
        width: calc(700px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1280 / 1920);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1280 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1280 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
        width: calc(27rem * 1280 / 1920);
        right: calc(175px * 1280 / 1920);
        bottom: calc(150px * 1280 / 1920);
        z-index: 1;
      }
    }

    @media screen and (max-width: 1024px) {
      .container-quemsomos {
        height: 80vh;
      }

      .container-quemsomos-left {
        padding: calc(10rem * 1024 / 1920);
        gap: calc(3rem * 1024 / 1920);
      }

      .container-quemsomos-left h3 {
        font-size: calc(2.375rem * 1024 / 1920);
      }

      .container-quemsomos-right::after {
        content: '';
        height: calc(700px * 1024 / 1920);
        width: calc(700px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-left p {
        font-size: calc(1rem * 1024 / 1920);
        width: 75%;
      }


      .container-quemsomos-right img {
        height: calc(450px * 1024 / 1920);
        z-index: 1;
      }

      .container-quemsomos-right button {
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
        width: calc(27rem * 1024 / 1920);
        right: calc(175px * 1024 / 1920);
        bottom: calc(120px * 1024 / 1024);
        z-index: 1;
      }
    }

    @media screen and (max-width: 820px) {
      #main-quemsomos-desktop {
        display: none;
      }

      #main-quemsomos-mobile {
        display: block;
      }

      main {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .container-quemsomos-mobile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        gap: 2rem;
        margin-bottom: 3rem;
      }

      .container-quemsomos-mobile h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        color: #d2d2d2;
      }

      .container-quemsomos-mobile p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1rem;
        color: #d2d2d2;
        width: 75%;
        text-align: justify;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-quemsomos-mobile-imagem::after {
        content: '';
        height: 600px;
        width: 600px;
        position: absolute;
        right: 5%;
        z-index: 0;
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-mobile-imagem {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 3rem 0;
      }

      .container-quemsomos-mobile-imagem img {
        z-index: 1;
        width: 80%;
      }

      .container-quemsomos-mobile-imagem button {
        z-index: 1;
        font-family: Be Vietnam Pro, sans-serif;
        width: 50%;
        font-size: 1rem;
        padding: 0.5rem 1rem;
        margin-top: 1rem;
        border-radius: 10px;
        background-color: var(--azul-principal);
        color: white;
        text-decoration: underline;
      }
    }

    @media screen and (max-width: 700px) {
      .container-quemsomos-mobile-imagem::after {
        height: calc(600px * 700 / 820);
        width: calc(600px * 700 / 820);
      }

      .container-quemsomos-mobile-imagem {
        margin: calc(3rem * 700 / 820) 0;
      }
    }

    @media screen and (max-width: 600px) {
      .container-quemsomos-mobile-imagem::after {
        content: '';
        height: calc(600px * 600 / 820);
        width: calc(600px * 600 / 820);
        position: absolute;
        right: 5%;
        z-index: 0;
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-mobile-imagem {
        margin: calc(3rem * 600 / 820) 0;
      }
    }

    @media screen and (max-width: 500px) {
      .container-quemsomos-mobile-imagem::after {
        content: '';
        height: calc(600px * 500 / 820);
        width: calc(600px * 500 / 820);
        position: absolute;
        right: 5%;
        z-index: 0;
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-mobile-imagem {
        margin: calc(3rem * 500 / 820) 0;
      }
    }

    @media screen and (max-width: 400px) {
      .container-quemsomos-mobile-imagem::after {
        content: '';
        height: calc(600px * 400 / 820);
        width: calc(600px * 400 / 820);
        position: absolute;
        right: 5%;
        z-index: 0;
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-mobile-imagem {
        margin: calc(3rem * 400 / 820) 0;
      }
    }

    @media screen and (max-width: 300px) {
      .container-quemsomos-mobile-imagem::after {
        content: '';
        height: calc(600px * 300 / 820);
        width: calc(600px * 300 / 820);
        position: absolute;
        right: 5%;
        z-index: 0;
        border-radius: 100%;
        background-color: rgba(237, 237, 237, 0.23);
      }

      .container-quemsomos-mobile-imagem {
        margin: calc(3rem * 300 / 820) 0;
      }

      .container-quemsomos-mobile h3 {
        font-size: 1rem;
      }

      .container-quemsomos-mobile p {
        font-size: 0.7rem;
      }

      .container-quemsomos-mobile-imagem button {
        width: 80%;
        font-size: 0.7rem;
      }
    }
  </style>
</div>
