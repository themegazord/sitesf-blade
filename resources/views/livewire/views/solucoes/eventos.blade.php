<div>
  <main>
    <div class="container-sersol-eventos">
      <div class="container-sersol-eventos-left">
        <h3>Para <b>Eventos</b></h3>
        <p>
          Com <b>SAFI</b>, você terá controle total sobre a venda de ingressos, a gestão do bar e do
          estoque, garantindo um evento impecável do início ao fim.
        </p>
        <p>
          <b>
            Emita tickets de produtos na bilheteria com rapidez e praticidade, utilizando o sistema
            integrado ao caixa.
          </b>
          Ofereça aos seus clientes a comodidade de comprar seus produtos com antecedência e evitar
          filas.
        </p>
        <p>
          Monitore o nível de estoque de todos os produtos em tempo real, diretamente do sistema.
          Receba alertas automáticos quando os níveis de estoque estiverem baixos, garantindo que
          você sempre tenha produtos disponíveis para atender seus clientes e fazer a festa!
        </p>
        <p>
          Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
          familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
          começar a usar o sistema rapidamente, após o treinamento.
        </p>
        <button onclick="envioEventos()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-sersol-eventos-right">
        <img src="{{ asset('imagens/Servicos/EventosImagem.png') }}" alt="" />
        <div class="chips">
          <div class="chips-top">
            <span>Bares</span>
            <span>Festivais</span>
            <span>Shows</span>
          </div>
          <div class="chips-down">
            <span>Parques</span>
            <span>Festas</span>
            <span>Festas Benificentes</span>
          </div>
        </div>
      </div>
    </div>
  </main>
  <livewire:componentes.footer.footer />
  <script>
    function envioEventos() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no módulo para eventos do seu sistema, poderia me contar um pouco mais sobre?`
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

    .container-sersol-eventos {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-sersol-eventos-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-sersol-eventos-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-sersol-eventos-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-sersol-eventos-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-sersol-eventos-left button {
      border: none;
      border-radius: 10px;
      transition: .5s ease;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
    }

    .container-sersol-eventos-left button:hover {
      cursor: pointer;
      background-color: #2e95c5;
    }

    .container-sersol-eventos-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-sersol-eventos-right::after {
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

    .container-sersol-eventos-right img {
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

    .chips-top>span,
    .chips-down>span {
      background-color: white;
      border: 1px solid #e3e3e3;
      padding: .2rem .6rem;
      border-radius: 50px;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 2560 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(250px * 2560 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 2560 / 1920);
        bottom: calc(200px * 2560 / 1920);
        right: calc(70px * 2560 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 2560 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 2560 / 1920);
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(830px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1920 / 1920);
        position: absolute;
        right: 0;
        bottom: 250px;
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1920 / 1920);
        bottom: calc(170px * 1920 / 1920);
        right: calc(80px * 1920 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
      }

      .chips-top {
        gap: calc(0.5rem * 1920 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      main {
        height: 86vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(830px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1600 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(230px * 1600 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1600 / 1920);
        bottom: calc(170px * 1600 / 1920);
        right: calc(80px * 1600 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
      }

      .chips-top {
        gap: calc(0.5rem * 1600 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      main {
        height: 86vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(830px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1440 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(300px * 1440 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1440 / 1920);
        bottom: calc(230px * 1440 / 1920);
        right: calc(80px * 1440 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .7rem;
      }

      .chips-top {
        gap: calc(0.5rem * 1440 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      main {
        height: 85vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(635px * 1366 / 1920);
        width: calc(690px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1366 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(250px * 1366 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1366 / 1920);
        bottom: calc(190px * 1366 / 1920);
        right: calc(60px * 1366 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .7rem;
      }

      .chips-top {
        gap: calc(0.5rem * 1366 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      main {
        height: 82vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(635px * 1280 / 1920);
        width: calc(690px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1280 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(370px * 1280 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1280 / 1920);
        bottom: calc(300px * 1280 / 1920);
        right: calc(70px * 1280 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .5rem;
      }

      .chips-top {
        gap: calc(0.5rem * 1280 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      main {
        height: 93vh;
      }

      .container-sersol-eventos {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-eventos-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-sersol-eventos-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
      }

      .container-sersol-eventos-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-sersol-eventos-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-sersol-eventos-right::after {
        content: '';
        height: calc(835px * 1024 / 1920);
        width: calc(890px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-sersol-eventos-right img {
        height: calc(500px * 1024 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(470px * 1024 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1024 / 1920);
        bottom: calc(300px * 1024 / 1920);
        right: calc(70px * 1024 / 1920);
        z-index: 1;
      }

      .chips-down>span,
      .chips-top>span {
        background-color: white;
        border: 1px solid #e3e3e3;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .5rem;
      }

      .chips-top {
        gap: calc(0.5rem * 1024 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-eventos {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-eventos-left {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-eventos-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-eventos-left p {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-sersol-eventos-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        height: 3rem;
        font-size: 1.5rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-eventos-left button:hover {
        cursor: pointer;
        background-color: #2e95c5;
      }

      .container-sersol-eventos-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-eventos-right::after {
        display: none;
      }

      .container-sersol-eventos-right img {
        position: sticky;
        margin: 3rem 0;
        height: 300px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }


    @media screen and (max-width: 410px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-eventos {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-eventos-left {
        align-items: center;
        display: flex;
        flex-direction: column;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-eventos-left h3 {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-eventos-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-eventos-left p {
        font-size: 1.25rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-sersol-eventos-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        height: 2rem;
        font-size: 1.25rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-eventos-left button:hover {
        cursor: pointer;
        background-color: #2e95c5;
      }

      .container-sersol-eventos-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-eventos-right::after {
        display: none;
      }

      .container-sersol-eventos-right img {
        position: sticky;
        margin: 3rem 0;
        height: 200px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
