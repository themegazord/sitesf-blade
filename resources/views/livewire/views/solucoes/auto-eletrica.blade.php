<div>
  <main>
    <div class="container-sersol-autoelec">
      <div class="container-sersol-autoelec-left">
        <h3>Para <b>Auto Elétricas e Oficinas</b></h3>
        <p>
          Com <b>SAFI</b>, você pode criar ordens de serviço detalhadas com todos os dados do
          cliente, veículo, serviços a serem realizados e valores cobrados. Acompanhe o status de
          cada ordem em tempo real e evite confusões ou atrasos.
        </p>
        <p>
          Monitore o nível de estoque de peças e materiais de forma precisa, evitando rupturas e
          garantindo que você sempre tenha tudo o que precisa para atender seus clientes.
        </p>
        <p>
          Baseie suas decisões em dados concretos e relatórios precisos, impulsionando o crescimento
          sustentável do seu negócio.
        </p>
        <p>
          Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
          familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
          começar a usar o sistema rapidamente, após o treinamento.
        </p>
        <button onclick="envioAutoEletrica()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-sersol-autoelec-right">
        <img src="{{ asset('imagens/Servicos/AutoElecOficinaImagem.png') }}" id="imagemAutoEletrica" alt="" />
        <img src="{{ asset('imagens/Servicos/AutoElecOficinaImagemMobile.png') }}" id="imagemAutoEletricaMobile" alt="" />
        <div class="chips">
          <div class="chips-top">
            <span>Oficinas</span>
            <span>Auto Elétricas</span>
          </div>
          <div class="chips-down">
            <span>Garagem</span>
            <span>Martelinho de Ouro</span>
            <span>Estúdio</span>
          </div>
        </div>
      </div>
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script>
    function envioAutoEletrica() {
      const mensagem = encodeURIComponent(
        `Olá 😊. Fiquei interessado no módulo para auto elétricas e oficinas do seu sistema, poderia me contar um pouco mais sobre?`
      );

      window.open(
        `https://api.whatsapp.com/send?phone=5567999832455&text=${mensagem}`
      );
    }

    document.addEventListener('DOMContentLoaded', function () {
      const imagemAutoEletrica = document.getElementById('imagemAutoEletrica');
      const imagemAutoEletricaMobile = document.getElementById('imagemAutoEletricaMobile');

      if (window.innerWidth <= 820) {
        imagemAutoEletrica.style.display = 'none';
        imagemAutoEletricaMobile.style.display = 'block';
      } else {
        imagemAutoEletrica.style.display = 'block';
        imagemAutoEletricaMobile.style.display = 'none';
      }
    })
  </script>
  <style>
    main {
      height: 87vh;
      background-color: #fff;
    }

    .container-sersol-autoelec {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-sersol-autoelec-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-sersol-autoelec-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-sersol-autoelec-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-sersol-autoelec-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-sersol-autoelec-left button {
      border: none;
      border-radius: 10px;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
      transition: .5s ease;
    }

    .container-sersol-autoelec-left button:hover {
      cursor: pointer;
      background-color: #2e91be;
    }

    .container-sersol-autoelec-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-sersol-autoelec-right::after {
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

    .container-sersol-autoelec-right img {
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 2560 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(830px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1920 / 1920);
        position: absolute;
        right: 0;
        bottom: 250px;
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1920 / 1920);
        bottom: calc(180px * 1920 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(830px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1600 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(2300px * 1600 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1600 / 1920);
        bottom: calc(180px * 1600 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(830px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1440 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(635px * 1366 / 1920);
        width: calc(690px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1366 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(635px * 1280 / 1920);
        width: calc(690px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1280 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(380px * 1280 / 1920);
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

      .container-sersol-autoelec {
        grid-template-columns: 60% 40%;
      }

      .container-sersol-autoelec-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-sersol-autoelec-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
      }

      .container-sersol-autoelec-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-sersol-autoelec-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-sersol-autoelec-right::after {
        content: '';
        height: calc(835px * 1024 / 1920);
        width: calc(890px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-sersol-autoelec-right img {
        height: calc(400px * 1024 / 1920);
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

      .container-sersol-autoelec {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-autoelec-left {
        margin-left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        gap: 2rem;
      }

      .container-sersol-autoelec-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-autoelec-left p {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-sersol-autoelec-left button {
        font-size: 1.5rem;
        height: 2rem;
        margin-left: 0;
        border: none;
        border-radius: 10px;
        width: 60%;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-sersol-autoelec-left button:hover {
        cursor: pointer;
        background-color: #2e91be;
      }

      .container-sersol-autoelec-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 2rem 0
      }

      .container-sersol-autoelec-right::after {
        display: none;
      }

      .container-sersol-autoelec-right img {
        position: sticky;
        height: 300px;
        z-index: 0;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 550px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-autoelec {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-autoelec-left {
        margin-left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        gap: 2rem;
      }

      .container-sersol-autoelec-left h3 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-autoelec-left p {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-sersol-autoelec-left button {
        font-size: 1.25rem;
        margin-left: 0;
        border: none;
        border-radius: 10px;
        width: 60%;
        height: 40px;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-sersol-autoelec-left button:hover {
        cursor: pointer;
        background-color: #2e91be;
      }

      .container-sersol-autoelec-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 2rem 0
      }

      .container-sersol-autoelec-right::after {
        display: none;
      }

      .container-sersol-autoelec-right img {
        position: sticky;
        height: 200px;
        z-index: 0;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 370px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-sersol-autoelec {
        display: flex;
        flex-direction: column;
      }

      .container-sersol-autoelec-left {
        margin-left: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3rem;
        gap: 2rem;
      }

      .container-sersol-autoelec-left h3 {
        font-size: 1.25rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-sersol-autoelec-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-sersol-autoelec-left p {
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-sersol-autoelec-left button {
        font-size: 1rem;
        margin-left: 0;
        border: none;
        border-radius: 10px;
        height: 2rem;
        width: 60%;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-sersol-autoelec-left button:hover {
        cursor: pointer;
        background-color: #2e91be;
      }

      .container-sersol-autoelec-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 2rem 0
      }

      .container-sersol-autoelec-right::after {
        display: none;
      }

      .container-sersol-autoelec-right img {
        position: sticky;
        height: 150px;
        z-index: 0;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
