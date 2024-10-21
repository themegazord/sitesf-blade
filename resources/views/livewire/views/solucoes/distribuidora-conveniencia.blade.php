<div>
  <main>
    <div class="container-sersol-distconv">
      <div class="container-sersol-distconv-left">
        <h3>Para <b>Distribuidoras e Conveniências</b></h3>
        <p>
          Com <b>SAFI</b>, você terá controle total sobre seus produtos e nunca mais precisará se
          preocupar com falta de itens nas prateleiras ou perdas inexplicáveis.
        </p>
        <p>
          Monitore o nível de estoque de todos os seus produtos em tempo real, desde a entrada no
          depósito até a venda no balcão. Receba alertas automáticos quando os níveis de estoque
          estiverem baixos, evitando rupturas e garantindo que você sempre tenha produtos
          disponíveis para seus clientes.
        </p>
        <p>
          Gere relatórios detalhados sobre o desempenho do seu estoque, como rotatividade de
          produtos, lucratividade por categoria e giro de estoque. Utilize esses dados para tomar
          decisões estratégicas e otimizar suas compras. Baseie suas decisões em dados concretos e
          relatórios precisos, impulsionando o crescimento sustentável do seu negócio.
        </p>
        <button onclick="envioDistConv()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-sersol-distconv-right">
        <img src="{{ asset('imagens/Servicos/DistConvImagem.png') }}" id="imagemDistConv" alt="" />
        <img src="{{ asset('imagens/Servicos/DistConvImagemMobile.png') }}" id="imagemDistConvMobile" alt="" />
        <div class="chips">
          <div class="chips-top">
            <span>Conveniência</span>
            <span>Mini-Mercado</span>
            <span>Armazém</span>
          </div>
          <div class="chips-down">
            <span>Distribuidora de Água e Gás</span>
          </div>
        </div>
      </div>
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      let imagemDistConv = document.getElementById('imagemDistConv');
      let imagemDistConvMobile = document.getElementById('imagemDistConvMobile');

      if (window.innerWidth <= 820) {
        imagemDistConvMobile.style.display = 'block';
        imagemDistConv.style.display = 'none'
      } else {
        imagemDistConvMobile.style.display = 'none';
        imagemDistConv.style.display = 'block'
      }
    })

    function envioDistConv() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no módulo para distribuidoras e conveniências do seu sistema, poderia me contar um pouco mais sobre?`
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

    .container-sersol-distconv {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-sersol-distconv-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-sersol-distconv-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-sersol-distconv-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-sersol-distconv-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-sersol-distconv-left button {
      border: none;
      transition: .5s ease;
      border-radius: 10px;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
    }

    .container-sersol-distconv-left button:hover {
      cursor: pointer;
      background-color: #3186ad;
    }

    .container-sersol-distconv-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-sersol-distconv-right::after {
      content: '';
      height: 825px;
      width: 830px;
      position: absolute;
      z-index: 0;
      left: 1250px;
      top: 120px;
      border-radius: 100%;
      background-color: var(--azul-principal);
    }

    .container-sersol-distconv-right img {
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
      border: 1px solid #e3e3e3;
      background-color: white;
      padding: .2rem .6rem;
      border-radius: 50px;
    }


    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(730px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: 1rem;
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(730px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: 1rem;
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

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(730px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: calc(1rem * 1600 / 1920);
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

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(730px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: calc(1rem * 1440 / 1920);
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

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(735px * 1366 / 1920);
        width: calc(790px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: calc(1rem * 1366 / 1920);
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

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(735px * 1280 / 1920);
        width: calc(790px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: calc(1rem * 1280 / 1920);
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

      .container-sersol-distconv {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-distconv-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-sersol-distconv-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
      }

      .container-sersol-distconv-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-sersol-distconv-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-sersol-distconv-right::after {
        content: '';
        height: calc(735px * 1024 / 1920);
        width: calc(790px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-sersol-distconv-right img {
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

      .chips-top>span,
      .chips-down>span {
        font-size: calc(1rem * 1024 / 1920);
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

      .container-sersol-distconv {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-distconv-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-distconv-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-distconv-left p {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-sersol-distconv-left button {
        font-size: 1.5rem;
        height: 3rem;
        border: none;
        transition: .5s ease;
        border-radius: 10px;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-distconv-left button:hover {
        cursor: pointer;
        background-color: #3186ad;
      }

      .container-sersol-distconv-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-distconv-right::after {
        display: none;
      }

      .container-sersol-distconv-right img {
        margin-bottom: 2rem;
        position: sticky;
        height: 300px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }

    @media screen and (max-width: 435px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-distconv {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-distconv-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-distconv-left h3 {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-distconv-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-distconv-left p {
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-sersol-distconv-left button {
        font-size: 1rem;
        height: 2rem;
        border: none;
        transition: .5s ease;
        border-radius: 10px;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-distconv-left button:hover {
        cursor: pointer;
        background-color: #3186ad;
      }

      .container-sersol-distconv-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-distconv-right::after {
        display: none;
      }

      .container-sersol-distconv-right img {
        margin-bottom: 2rem;
        position: sticky;
        height: 250px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }

  </style>
</div>
