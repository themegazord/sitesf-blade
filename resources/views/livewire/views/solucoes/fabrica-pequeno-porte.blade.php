<div>
  <main>
    <div class="container-sersol-fabpeq">
      <div class="container-sersol-fabpeq-left">
        <h3>Para <b>Fábricas de Pequeno Porte</b></h3>
        <p>
          Este módulo foi desenvolvido especialmente para atender às necessidades das
          <b>
            fábricas de pequeno e médio porte, como a sua! Com um processo mais objetivo, simples e
            rápido, você terá controle total da sua produção, otimizando a eficiência, a qualidade e
            a lucratividade do seu negócio.
          </b>
        </p>
        <p>
          Com o <b>SAFI</b>, você terá controle total sobre seus processos, desde a definição das
          etapas de produção até o resultado do produto final.
        </p>
        <p>
          <b>Gere ordens de produção de forma objetiva e eficiente</b>, definindo a quantidade de
          produtos a serem fabricados e os recursos necessários. Monitore o nível de estoque de
          todos os materiais necessários à produção em tempo real. Receba alertas automáticos quando
          os níveis de estoque estiverem baixos, evitando rupturas e garantindo que você sempre
          tenha os materiais certos para produzir seus produtos.
        </p>
        <p>
          Gere relatórios detalhados sobre o desempenho da sua produção, como tempo médio de
          produção, custo de produção por produto e eficiência das etapas de produção. Utilize esses
          dados para tomar decisões estratégicas e otimizar seus processos.
        </p>
        <button onclick="envioFabPeqPorte()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-sersol-fabpeq-right">
        <img src="{{ asset('imagens/Servicos/FabPeqPorteImagem.png') }}" id="FabPeqPorteImagem" alt="" />
        <img src="{{ asset('imagens/Servicos/FabPeqPorteImagemMobile.png') }}" id="FabPeqPorteImagemMobile"
          alt="" />
        <div class="chips">
          <div class="chips-top">
            <span>Confecções</span>
            <span>Lingerie</span>
            <span>Roupas Infantis</span>
          </div>
        </div>
      </div>
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const fabPeqPorteImagem = document.getElementById('FabPeqPorteImagem');
      const fabPeqPorteImagemMobile = document.getElementById('FabPeqPorteImagemMobile');

      if (window.innerWidth <= 820) {
        fabPeqPorteImagem.style.display = 'none';
        fabPeqPorteImagemMobile.style.display = 'block';
      } else {
        fabPeqPorteImagem.style.display = 'block';
        fabPeqPorteImagemMobile.style.display = 'none';
      }
    })

    function envioFabPeqPorte() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no módulo para fábricas de pequeno porte do seu sistema, poderia me contar um pouco mais sobre?`
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

    .container-sersol-fabpeq {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-sersol-fabpeq-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-sersol-fabpeq-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-sersol-fabpeq-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-sersol-fabpeq-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-sersol-fabpeq-left button {
      border: none;
      border-radius: 10px;
      transition: .5s ease;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
    }

    .container-sersol-fabpeq-left button:hover {
      cursor: pointer;
      background-color: #2a90c0;
    }

    .container-sersol-fabpeq-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-sersol-fabpeq-right::after {
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

    .container-sersol-fabpeq-right img {
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

    .chips-top>span {
      border: 1px solid #e3e3e3;
      background-color: white;
      padding: .2rem .6rem;
      border-radius: 50px;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(830px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
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

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(830px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
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

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(830px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .7rem
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

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(635px * 1366 / 1920);
        width: calc(690px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .7rem
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

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(635px * 1280 / 1920);
        width: calc(690px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .5rem
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

      .container-sersol-fabpeq {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-fabpeq-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-sersol-fabpeq-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
      }

      .container-sersol-fabpeq-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-sersol-fabpeq-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-sersol-fabpeq-right::after {
        content: '';
        height: calc(835px * 1024 / 1920);
        width: calc(890px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-sersol-fabpeq-right img {
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

      .chips-top>span {
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
        font-size: .5rem
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

      .container-sersol-fabpeq {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-fabpeq-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-fabpeq-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-fabpeq-left p {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-sersol-fabpeq-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        font-size: 1.5rem;
        height: 3rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-fabpeq-left button:hover {
        cursor: pointer;
        background-color: #2a90c0;
      }

      .container-sersol-fabpeq-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-fabpeq-right::after {
        display: none;
      }

      .container-sersol-fabpeq-right img {
        margin-bottom: 2rem;
        position: sticky;
        height: 300px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }

    @media screen and (max-width: 320px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-fabpeq {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-fabpeq-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        margin-left: 0;
        gap: 2rem;
      }

      .container-sersol-fabpeq-left h3 {
        font-size: 1.25rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-fabpeq-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-fabpeq-left p {
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-sersol-fabpeq-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        font-size: 1rem;
        height: 2rem;
        width: 60%;
        margin-left: 0;
        background-color: #63c7f5;
        color: white;
      }

      .container-sersol-fabpeq-left button:hover {
        cursor: pointer;
        background-color: #2a90c0;
      }

      .container-sersol-fabpeq-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-sersol-fabpeq-right::after {
        display: none;
      }

      .container-sersol-fabpeq-right img {
        margin-bottom: 2rem;
        position: sticky;
        height: 200px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
