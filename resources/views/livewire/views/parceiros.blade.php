<div>
  <main>
    <div class="container-parceiros">
      <div class="container-parceiros-left">
        <h3>Parceiros</h3>
        <p>
          Na <b>SF Sistemas</b>, nossa missão vai além de fornecer softwares de gestão. Acreditamos
          em construir parcerias sólidas e duradouras com nossos clientes, impulsionando o
          crescimento e o sucesso mútuo.
        </p>
        <p>
          Ao longo da nossa jornada, tivemos a honra de atender a empresas de diversos portes e
          segmentos, construindo uma carteira de clientes sólida e diversificada. Mais do que
          simplesmente fornecer um software, buscamos entender as necessidades específicas de cada
          negócio, criando soluções personalizadas que geram resultados concretos.
        </p>
        <p>
          <b>
            Entre em contato conosco hoje mesmo e descubra como podemos impulsionar o seu negócio!
          </b>
        </p>
        <button>Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-parceiros-right">
        <img src="{{ asset('imagens/Parceiros/ParceirosImagem.png') }}" alt="" />
      </div>
    </div>
    <div class="parceiros">
      <img src="{{ asset('imagens/Parceiros/PaxNacional.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/StAntonio.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/Obrativa.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/HeT.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/Mafisa.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/DeckCafeBar.png') }}" alt="" />
      <img src="{{ asset('imagens/Parceiros/Lagoa.png') }}" alt="" />
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script></script>
  <style>
    main {
      height: 87vh;
      background-color: #fff;
      display: flex;
      flex-direction: column;
    }

    .parceiros {
      display: flex;
      width: 100vw;
      justify-content: center;
      align-items: center;
      margin-top: 6rem;
    }

    .parceiros img {
      height: 100px;
    }

    .container-parceiros {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-parceiros-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-parceiros-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-parceiros-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-parceiros-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-parceiros-left button {
      border: none;
      border-radius: 10px;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
      transition: .5s ease;
    }

    .container-parceiros-left button:hover {
      background-color: #188abc;
      cursor: pointer;
    }

    .container-parceiros-right::after {
      content: '';
      height: 625px;
      width: 730px;
      position: absolute;
      z-index: 0;
      left: 1350px;
      top: 120px;
      border-radius: 100%;
      background-color: var(--azul-principal);
    }

    .container-parceiros-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-parceiros-right img {
      height: 400px;
      z-index: 1;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 2560 / 1920);
        width: calc(730px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }


      .container-parceiros-right img {
        height: calc(400px * 2560 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(350px * 2560 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 2560 / 1920);
      }

      .parceiros img {
        height: calc(100px * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1920 / 1920);
        width: calc(730px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1920 / 1920);
        position: absolute;
        right: 0;
        bottom: 300px;
        z-index: 1;
      }

      .parceiros {
        margin-top: 10rem;
      }

      .parceiros img {
        height: 100px;
      }
    }

    @media screen and (max-width: 1600px) {
      main {
        height: 86vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1600 / 1920);
        width: calc(730px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1600 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(300px * 1600 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 1600 / 1920);
      }

      .parceiros img {
        height: calc(100px * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      main {
        height: 86vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1440 / 1920);
        width: calc(730px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1440 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(380px * 1440 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 1440 / 1920);
      }

      .parceiros img {
        height: calc(100px * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      main {
        height: 85vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1366 / 1920);
        width: calc(730px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1366 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(250px * 1366 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 1366 / 1920);
      }

      .parceiros img {
        height: calc(100px * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      main {
        height: 86vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1280 / 1920);
        width: calc(730px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1280 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(350px * 1280 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 1280 / 1920);
      }

      .parceiros img {
        height: calc(100px * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      main {
        height: 89vh;
      }

      .container-parceiros {
        grid-template-columns: 60% 40%;
      }

      .container-parceiros-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-parceiros-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-parceiros-right::after {
        content: '';
        height: calc(625px * 1024 / 1920);
        width: calc(730px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1350px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
        border-radius: 100%;
        background-color: var(--azul-principal);
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
      }

      .container-parceiros-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-parceiros-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }


      .container-parceiros-right img {
        height: calc(400px * 1024 / 1920);
        position: absolute;
        right: 0;
        bottom: calc(550px * 1024 / 1920);
        z-index: 1;
      }

      .parceiros {
        margin-top: calc(10rem * 1024 / 1920);
      }

      .parceiros img {
        height: calc(100px * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {
      main {
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
      }

      .parceiros {
        display: none;
        flex-direction: column;
        width: 100vw;
        justify-content: center;
        align-items: center;
        margin-top: 6rem;
      }

      .parceiros img {
        height: 100px;
      }

      .container-parceiros {
        display: flex;
        flex-direction: column;
      }

      .container-parceiros-left {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        gap: 2rem;
      }

      .container-parceiros-left h3 {
        margin-top: 2rem;
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-parceiros-left p {
        margin: 0 auto;
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-parceiros-left button {
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        width: 40%;
        height: 2rem;
        font-size: 1rem;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-parceiros-left button:hover {
        background-color: #188abc;
        cursor: pointer;
      }

      .container-parceiros-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-parceiros-right>img {
        position: static;
        margin: 2rem 0;
        z-index: 0;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 650px) {
      main {
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
      }

      .parceiros {
        display: none;
        flex-direction: column;
        width: 100vw;
        justify-content: center;
        align-items: center;
        margin-top: 6rem;
      }

      .parceiros img {
        height: 100px;
      }

      .container-parceiros {
        display: flex;
        flex-direction: column;
      }

      .container-parceiros-left {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        gap: 2rem;
      }

      .container-parceiros-left h3 {
        margin-top: 2rem;
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-parceiros-left p {
        margin: 0 auto;
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 30px;
      }

      .container-parceiros-left button {
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        width: 60%;
        height: 2rem;
        font-size: 1rem;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-parceiros-left button:hover {
        background-color: #188abc;
        cursor: pointer;
      }

      .container-parceiros-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-parceiros-right>img {
        position: static;
        margin: 2rem 0;
        z-index: 0;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 450px) {
      main {
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
      }

      .parceiros {
        display: none;
        flex-direction: column;
        width: 100vw;
        justify-content: center;
        align-items: center;
        margin-top: 6rem;
      }

      .parceiros img {
        height: 100px;
      }

      .container-parceiros {
        display: flex;
        flex-direction: column;
      }

      .container-parceiros-left {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        gap: 2rem;
      }

      .container-parceiros-left h3 {
        margin-top: 2rem;
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-parceiros-left p {
        margin: 0 auto;
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-parceiros-left button {
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        width: 60%;
        height: 2rem;
        font-size: .7rem;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-parceiros-left button:hover {
        background-color: #188abc;
        cursor: pointer;
      }

      .container-parceiros-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-parceiros-right>img {
        position: static;
        margin: 2rem 0;
        z-index: 0;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 350px) {
      main {
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
      }

      .parceiros {
        display: none;
        flex-direction: column;
        width: 100vw;
        justify-content: center;
        align-items: center;
        margin-top: 6rem;
      }

      .parceiros img {
        height: 100px;
      }

      .container-parceiros {
        display: flex;
        flex-direction: column;
      }

      .container-parceiros-left {
        display: flex;
        flex-direction: column;
        margin: 0 auto;
        gap: 2rem;
      }

      .container-parceiros-left h3 {
        margin-top: 2rem;
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-parceiros-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-parceiros-left p {
        margin: 0 auto;
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 70%;
        line-height: 20px;
      }

      .container-parceiros-left button {
        margin: 0 auto;
        border: none;
        border-radius: 10px;
        width: 60%;
        height: 2rem;
        font-size: .7rem;
        background-color: #63c7f5;
        color: white;
        transition: .5s ease;
      }

      .container-parceiros-left button:hover {
        background-color: #188abc;
        cursor: pointer;
      }

      .container-parceiros-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-parceiros-right>img {
        position: static;
        scale: .7;
        margin: 2rem 0;
        z-index: 0;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }
    }
  </style>
</div>
