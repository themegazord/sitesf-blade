<div>
  <main>
    <div class="container">
      <div class="container-left">
        <h3>Para <b>Bares e Restaurantes</b></h3>
        <p>
          Chega de pedidos anotados em papel amassado, pedidos perdidos e clientes insatisfeitos.
          Com o SAFI Mobile, seus garçons e atendentes anotam pedidos diretamente no celular, com
          rapidez e precisão. Personalizações, acompanhamentos, observações e até o couvert são
          registrados em um piscar de olhos, eliminando o risco de erros e garantindo que cada
          pedido seja preparado exatamente como o cliente deseja.
        </p>
        <p>
          Com o SAFI Mobile, seus garçons e atendentes passam menos tempo anotando pedidos e mais
          tempo interagindo com os clientes, oferecendo um atendimento impecável e criando
          experiências memoráveis. Clientes satisfeitos voltam sempre e recomendam seu bar ou
          restaurante para os amigos, impulsionando seu negócio e aumentando seus lucros.
        </p>
        <p>
          Além da versão mobile disponível para Android, o SAFI oferece uma versão desktop completa
          para ser utilizada no balcão e caixa do seu estabelecimento.
        </p>
        <p>
          Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
          familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
          começar a usar o sistema rapidamente, após o treinamento.
        </p>
        <button onclick="envioBarRestaurante()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-right">
        <img src="{{ asset('imagens/Servicos/BarRestauranteImagem.png') }}" alt=""/>
        <div class="chips">
          <div class="chips-top">
            <span>Bares</span>
            <span>Lanchonetes</span>
            <span>Pizzarias</span>
          </div>
          <div class="chips-down">
            <span>Marmitarias</span>
            <span>Sobarias</span>
            <span>Restaurantes em Geral</span>
          </div>
        </div>
      </div>
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script>
    function envioBarRestaurante() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no módulo para bares e restaurantes do seu sistema, poderia me contar um pouco mais sobre?`
      )

      window.open(
        `https://api.whatsapp.com/send?phone=5567999832455&text=${mensagem.replaceAll('$', '%0D')}`
      )
    }
  </script>
  <style>
    main {
      height: 87vh;
      background-color: #fff;
    }

    .container {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }
    footer {
      position: fixed;
      z-index: 2;
      bottom: 0;
      right: 0;
    }

    .container-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-left button {
      border: none;
      border-radius: 10px;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
      transition: .5s ease;
    }

    .container-left button:hover {
      border: none;
      background-color: #128bbc;
      cursor: pointer;
    }

    .container-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-right::after {
      content: '';
      height: 725px;
      width: 830px;
      position: absolute;
      z-index: 0;
      left: 1250px;
      top: 120px;
      border-radius: 100%;
      background-color: var(--azul-principal);
    }

    .container-right img {
      height: 400px;
      z-index: 1;
    }

    .chips {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
      position: absolute;
      bottom: 180px;
      right: 120px;
      z-index: 1;
    }

    .chips-top {
      display: flex;
      justify-content: center;
      gap: 0.5rem;
    }

    .chips-down {
      display: flex;
      gap: 0.5rem;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: 55%;
        top: calc(120px * 2560 / 1920);
      }

      .container-right img {
        height: calc(400px * 2560 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 2560 / 1920);
        bottom: calc(180px * 2560 / 1920);
        right: calc(120px * 2560 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 2560 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(750px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1920 / 1920);
      }

      .container-right img {
        height: calc(400px * 1920 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1920 / 1920);
        bottom: calc(180px * 1920 / 1920);
        right: calc(180px * 1920 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1920 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1920 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }

    }

    @media screen and (max-width: 1600px) {
      main {
        height: 86vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-right img {
        height: calc(400px * 1600 / 1920);
        z-index: 1;
      }

      .container-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(750px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1600 / 1920);
      }

      .chips {
        gap: calc(0.5rem * 1600 / 1920);
        bottom: calc(180px * 1600 / 1920);
        right: calc(180px * 1600 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1600 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1600 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1440px) {
      main {
        height: 86vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-right img {
        height: calc(400px * 1440 / 1920);
        z-index: 1;
      }

      .container-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(750px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1440 / 1920);
      }

      .chips {
        gap: calc(0.5rem * 1440 / 1920);
        bottom: calc(180px * 1440 / 1920);
        right: calc(180px * 1440 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1440 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1440 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1366px) {
      main {
        height: 85vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-right img {
        height: calc(400px * 1366 / 1920);
        z-index: 1;
      }


      .container-right::after {
        content: '';
        height: calc(725px * 1366 / 1920);
        width: calc(750px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1366 / 1920);
      }

      .chips {
        gap: calc(0.5rem * 1366 / 1920);
        bottom: calc(180px * 1366 / 1920);
        right: calc(180px * 1366 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1366 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1366 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1280px) {
      main {
        height: 82vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-right img {
        height: calc(400px * 1280 / 1920);
        z-index: 1;
      }

      .container-right::after {
        content: '';
        height: calc(725px * 1280 / 1920);
        width: calc(750px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1280 / 1920);
      }

      .chips {
        gap: calc(0.5rem * 1280 / 1920);
        bottom: calc(180px * 1280 / 1920);
        right: calc(180px * 1280 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1280 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1280 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1024px) {
      main {
        height: 82vh;
      }

      .container {
        grid-template-columns: 60% 40%;
      }

      .container-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-left h3 b {
        color: #2985b8;
      }

      .container-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }


      .container-right img {
        height: calc(400px * 1024 / 1920);
        margin-right: 3rem;
        z-index: 1;
      }

      .container-right::after {
        content: '';
        height: calc(725px * 1024 / 1920);
        width: calc(750px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: 60%;
        top: calc(120px * 1024 / 1920);
      }

      .chips {
        gap: calc(0.5rem * 1024 / 1920);
        bottom: calc(180px * 1024 / 1920);
        right: calc(180px * 1024 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 1024 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1024 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
        font-size: .5rem;
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 820px) {
      main {
        height: 87vh;
        background-color: #fff;
      }

      .container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-left {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-left p {
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-left button {
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        height: 2rem;
        margin-left: 0;
        width: 60%;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-left button:hover {
        border: none;
        background-color: #128bbc;
        cursor: pointer;
      }

      .container-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-right::after {
        display: none;
      }

      .container-right img {
        margin-right: 0;
        margin-bottom: 3rem;
        height: 300px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 670px) {
      main {
        height: 87vh;
        background-color: #fff;
      }

      .container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-left {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-left p {
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-left button {
        border: none;
        border-radius: 10px;
        font-size: 1rem;
        height: 2rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-left button:hover {
        border: none;
        background-color: #128bbc;
        cursor: pointer;
      }

      .container-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-right::after {
        display: none;
      }

      .container-right img {
        margin-right: 0;
        margin-bottom: 3rem;
        height: 250px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 420px) {
      main {
        height: 87vh;
        background-color: #fff;
      }

      .container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-left {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-left h3 {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-left p {
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-left button {
        border: none;
        border-radius: 10px;
        font-size: .7rem;
        height: 2rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-left button:hover {
        border: none;
        background-color: #128bbc;
        cursor: pointer;
      }

      .container-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-right::after {
        display: none;
      }

      .container-right img {
        margin-right: 0;
        margin-bottom: 3rem;
        height: 200px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 300px) {
      main {
        height: 87vh;
        background-color: #fff;
      }

      .container {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-left {
        display: flex;
        align-items: center;
        flex-direction: column;
        margin: 1.5rem auto;
        gap: 2rem;
      }

      .container-left h3 {
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-left p {
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-left button {
        border: none;
        border-radius: 10px;
        font-size: .7rem;
        height: 2rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-left button:hover {
        border: none;
        background-color: #128bbc;
        cursor: pointer;
      }

      .container-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-right::after {
        display: none;
      }

      .container-right img {
        margin-right: 0;
        margin-bottom: 3rem;
        height: 150px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
