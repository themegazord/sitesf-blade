<div>
  <main>
    <div class="container-solucoes-supermerc">
      <div class="container-solucoes-supermerc-left">
        <h3>Para <b>Supermercados e Mercearias</b></h3>
        <p>
          Com o SAFI, seus caixas podem escanear os produtos rapidamente e com precisão usando
          leitores de código de barras. Isso significa filas mais rápidas e clientes mais felizes.
        </p>
        <p>
          O sistema fornece relatórios detalhados sobre as vendas, os produtos mais vendidos e o
          estoque. Com esses dados, você pode tomar decisões estratégicas para impulsionar o
          crescimento do seu negócio. Através dos relatório, você poderá acompanhar o nível de
          estoque de cada produto em tempo real e saberá quando os produtos estiverem próximos de
          vencer ou precisar de reposição. Isso garante que você nunca fique sem estoque dos
          produtos mais procurados pelos seus clientes.
        </p>
        <p>
          Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
          familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
          começar a usar o sistema rapidamente, após o treinamento.
        </p>
        <button onclick="envioSupermercadoMercearia()">
          Clique aqui e fale com nosso time
        </button>
      </div>
      <div class="container-solucoes-supermerc-right">
        <img src="{{ asset('imagens/Servicos/SuperMercImagem.png') }}" alt=""/>
        <div class="chips">
          <div class="chips-top">
            <span>Mercearias</span>
            <span>Supermercados</span>
            <span>Bolichos</span>
          </div>
          <div class="chips-down">
            <span>Sacolão de Frutas e Verduras</span>
            <span>Mercadinhos</span>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script></script>
  <style>
    main {
      height: 87vh;
      background-color: #fff;
    }

    .container-solucoes-supermerc {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-solucoes-supermerc-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-solucoes-supermerc-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-solucoes-supermerc-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-solucoes-supermerc-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-solucoes-supermerc-left button {
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
    }

    .container-solucoes-supermerc-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-solucoes-supermerc-right::after {
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

    .container-solucoes-supermerc-right img {
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

    .chips-top > span,
    .chips-down > span {
      border: 1px solid #e3e3e3;
      background-color: white;
      padding: .2rem .6rem;
      border-radius: 50px;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(600px * 2560 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(200px * 2560 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 2560 / 1920);
        bottom: calc(150px * 2560 / 1920);
        right: calc(70px * 2560 / 1920);
        z-index: 1;
      }

      .chips-top {
        gap: calc(0.5rem * 2560 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 2560 / 1920);
      }

      .chips-top > span,
      .chips-down > span {
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(730px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: 70%;
        top: calc(120px * 1920 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(600px * 1920 / 1920);
        position: absolute;
        right: 0;
        bottom: 200px;
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1920 / 1920);
        bottom: calc(120px * 1920 / 1920);
        right: calc(80px * 1920 / 1920);
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(830px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(600px * 1600 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(180px * 1600 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1600 / 1920);
        bottom: calc(120px * 1600 / 1920);
        right: calc(80px * 1600 / 1920);
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(830px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(600px * 1440 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(250px * 1440 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1440 / 1920);
        bottom: calc(180px * 1440 / 1920);
        right: calc(80px * 1440 / 1920);
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(635px * 1366 / 1920);
        width: calc(690px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(500px * 1366 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(200px * 1366 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1366 / 1920);
        bottom: calc(140px * 1366 / 1920);
        right: calc(60px * 1366 / 1920);
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(635px * 1280 / 1920);
        width: calc(690px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(500px * 1280 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(320px * 1280 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1280 / 1920);
        bottom: calc(250px * 1280 / 1920);
        right: calc(70px * 1280 / 1920);
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

      .container-solucoes-supermerc {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-supermerc-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-solucoes-supermerc-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-supermerc-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-solucoes-supermerc-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-solucoes-supermerc-right::after {
        content: '';
        height: calc(835px * 1024 / 1920);
        width: calc(890px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-solucoes-supermerc-right img {
        height: calc(500px * 1024 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(420px * 1024 / 1920);
        z-index: 1;
      }

      .chips {
        gap: calc(0.5rem * 1024 / 1920);
        bottom: calc(250px * 1024 / 1920);
        right: calc(70px * 1024 / 1920);
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
        border: 1px solid #e3e3e3;
        background-color: white;
        padding: .2rem .6rem;
        border-radius: 50px;
      }
    }

    @media screen and (max-width: 820px) {

      main {
        height: 100%;
        background-color: #fff;
        overflow-y: hidden;
      }

      .container-solucoes-supermerc {
        display: flex;
        flex-direction: column;
        gap: 3rem;
      }

      .container-solucoes-supermerc-left {
        display: flex;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-solucoes-supermerc-left h3 {
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-supermerc-left p {
        margin: 0 auto;
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-solucoes-supermerc-left button {
        font-size: 1rem;
        border: none;
        border-radius: 10px;
        height: 3rem;
        width: 60%;
        margin: 0 auto;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-solucoes-supermerc-left button:hover {
        background-color: #1383b5;
        cursor: pointer;
      }

      .container-solucoes-supermerc-right {
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
      }

      .container-solucoes-supermerc-right::after {
        display: none;
      }

      .container-solucoes-supermerc-right img {
        position: relative;
        right: 0;
        bottom: 0;
        height: 400px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 450px) {

      main {
        height: 100%;
        background-color: #fff;
        overflow-y: hidden;
      }

      .container-solucoes-supermerc {
        display: flex;
        flex-direction: column;
        gap: 3rem;
      }

      .container-solucoes-supermerc-left {
        display: flex;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-solucoes-supermerc-left h3 {
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-supermerc-left p {
        margin: 0 auto;
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-solucoes-supermerc-left button {
        font-size: 1rem;
        border: none;
        border-radius: 10px;
        height: 3rem;
        width: 60%;
        margin: 0 auto;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-solucoes-supermerc-left button:hover {
        background-color: #1383b5;
        cursor: pointer;
      }

      .container-solucoes-supermerc-right {
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
      }

      .container-solucoes-supermerc-right::after {
        display: none;
      }

      .container-solucoes-supermerc-right img {
        position: relative;
        right: 0;
        bottom: 0;
        height: 300px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
    @media screen and (max-width: 350px) {

      main {
        height: 100%;
        background-color: #fff;
        overflow-y: hidden;
      }

      .container-solucoes-supermerc {
        display: flex;
        flex-direction: column;
        gap: 3rem;
      }

      .container-solucoes-supermerc-left {
        display: flex;
        flex-direction: column;
        margin: 3rem auto;
        gap: 2rem;
      }

      .container-solucoes-supermerc-left h3 {
        text-align: center;
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-supermerc-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-supermerc-left p {
        margin: 0 auto;
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-solucoes-supermerc-left button {
        font-size: .7rem;
        border: none;
        border-radius: 10px;
        height: 1.5rem;
        width: 60%;
        margin: 0 auto;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-solucoes-supermerc-left button:hover {
        background-color: #1383b5;
        cursor: pointer;
      }

      .container-solucoes-supermerc-right {
        display: flex;
        flex-direction: column;
        align-items: end;
        justify-content: center;
      }

      .container-solucoes-supermerc-right::after {
        display: none;
      }

      .container-solucoes-supermerc-right img {
        position: relative;
        right: 0;
        bottom: 0;
        height: 250px;
        z-index: 1;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
