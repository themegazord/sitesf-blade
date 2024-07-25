<div>
  <main id="main-sersol-desktop">
    <div class="container-sersol">
      <div class="container-sersol-left">
        <h3>Serviços e Soluções</h3>
        <p>
          No dinamismo do mercado atual, a personalização é o diferencial que impulsiona o sucesso.
          Nossas soluções são cuidadosamente desenhadas para se alinhar com as necessidades
          específicas de cada segmento. Clique sobre o segmento para conhecer mais:
        </p>
        <div class="lista-servicos">
          <a href="/solucoes/barrestaurante">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Bares e Restaurantes</b></p>
            </span>
          </a>
          <a href="/solucoes/supermercadomercearia">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Supermecados e Mercearias</b></p>
            </span>
          </a>
          <a href="/solucoes/roupacalcado">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Lojas de Roupa e Calçados</b></p>
            </span>
          </a>
          <a href="/solucoes/autoelecoficina">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Auto Elétrica e Oficinas</b></p>
            </span>
          </a>
          <a href="/solucoes/discconv">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Distribuidores e Conveniencias</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Fábricas de Pequeno Porte</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Confecções</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Eventos</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Licitações</b></p>
            </span>
          </a>
        </div>
      </div>
      <div class="container-sersol-right">
        <img src="{{ asset('imagens/Servicos/ImagemSolucaoRight.png') }}" alt=""/>
      </div>
    </div>
  </main>
  <main id="main-sersol-mobile">
    <div class="container-sersol-mobile">
      <h3>Serviços e Soluções</h3>
      <p>
        No dinamismo do mercado atual, a personalização é o <b>diferencial que impulsiona o sucesso</b>. Nossas soluções são
        cuidadosamente desenhadas para se alinhar com as necessidades específicas de cada segmento. Clique sobre o
        segmento para conhecer mais:
      </p>
      <div class="lista-servicos-mobile">
          <a href="/solucoes/barrestaurante">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Bares e Restaurantes</b></p>
            </span>
          </a>
          <a href="/solucoes/supermercadomercearia">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Supermecados e Mercearias</b></p>
            </span>
          </a>
          <a href="/solucoes/roupacalcado">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Lojas de Roupa e Calçados</b></p>
            </span>
          </a>
          <a href="/solucoes/autoelecoficina">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Auto Elétrica e Oficinas</b></p>
            </span>
          </a>
          <a href="/solucoes/discconv">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Distribuidores e Conveniencias</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Fábricas de Pequeno Porte</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Confecções</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Eventos</b></p>
            </span>
          </a>
          <a href="#">
            <span>
              <img src="{{ asset('imagens/Servicos/VerificadoSolucao.png') }}" alt=""/>
              <p>Para <b>Licitações</b></p>
            </span>
          </a>
        </div>
      <div class="container-sersol-mobile-imagem">
        <img src="{{ asset('imagens/Mobile/Servicos/ImagemBottomSerSol.png') }}" alt="">
      </div>
    </div>
  </main>
  <livewire:componentes.footer.footer/>
  <script></script>
  <style>
    main {
      background-color: #fff;
      height: 87vh;
    }

    .container-sersol {
      display: grid;
      grid-template-columns: 60% 40%;
      height: 100%;
    }

    .container-sersol-left {
      margin-left: 10rem;
      margin-top: 3rem;
      display: flex;
      flex-direction: column;
      gap: 2rem;
    }

    .container-sersol-right {
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container-sersol-right img {
      height: 600px;
      z-index: 1;
    }

    .container-sersol-left > p {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 0.9375rem;
      color: #4f4f50;
      text-align: justify;
      width: 61%;
    }

    .container-sersol-left h3 {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 2.1875rem;
      color: #686868;
    }

    .lista-servicos {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .lista-servicos a span img {
      width: 2rem;
      height: 2rem;
    }

    .lista-servicos a span {
      font-size: 1.125rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .lista-servicos a span p b {
      text-decoration: underline;
    }

    .lista-servicos a {
      width: 40%;
      text-decoration: none;
    }

    @media screen and (max-width: 2560px) {
      #main-sersol-desktop {
        display: block;
      }

      #main-sersol-mobile {
        display: none;
      }

      main {
        height: 87vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 2560 / 1920);
        margin-top: calc(3rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 2560 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 2560 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 2560 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 2560 / 1920);
        height: calc(2rem * 2560 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 2560 / 1920);
        gap: calc(1rem * 2560 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1920 / 1920);
        margin-top: calc(3rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1920 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1920 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1920 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1920 / 1920);
        height: calc(2rem * 1920 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1920 / 1920);
        gap: calc(1rem * 1920 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1600px) {
      main {
        height: 86vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1600 / 1920);
        margin-top: calc(3rem * 1600 / 1920);
        gap: calc(2rem * 1600 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1600 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1600 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1600 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1600 / 1920);
        height: calc(2rem * 1600 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1600 / 1920);
        gap: calc(1rem * 1600 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1440px) {
      main {
        height: 87vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1440 / 1920);
        margin-top: calc(3rem * 1440 / 1920);
        gap: calc(2rem * 1440 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1440 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1440 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1440 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1440 / 1920);
        height: calc(2rem * 1440 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1440 / 1920);
        gap: calc(1rem * 1440 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1366px) {
      main {
        height: 85vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1366 / 1920);
        margin-top: calc(3rem * 1366 / 1920);
        gap: calc(2rem * 1366 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1366 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1366 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1366 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1366 / 1920);
        height: calc(2rem * 1366 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1366 / 1920);
        gap: calc(1rem * 1366 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1280px) {
      main {
        height: 85vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1280 / 1920);
        margin-top: calc(3rem * 1280 / 1920);
        gap: calc(2rem * 1280 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1280 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1280 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1280 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1280 / 1920);
        height: calc(2rem * 1280 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1280 / 1920);
        gap: calc(1rem * 1280 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }
    @media screen and (max-width: 1024px) {
      main {
        height: 88vh;
      }

      .container-sersol {
        grid-template-columns: 60% 40%;
        height: 100%;
      }

      .container-sersol-left {
        margin-left: calc(10rem * 1024 / 1920);
        margin-top: calc(3rem * 1024 / 1920);
        gap: calc(2rem * 1024 / 1920);
      }


      .container-sersol-right img {
        height: calc(600px * 1024 / 1920);
      }

      .container-sersol-left > p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 61%;
      }

      .container-sersol-left h3 {
        font-size: calc(2.1875rem * 1024 / 1920);
      }

      .lista-servicos {
        gap: calc(1rem * 1024 / 1920);
      }

      .lista-servicos a span img {
        width: calc(2rem * 1024 / 1920);
        height: calc(2rem * 1024 / 1920);
      }

      .lista-servicos a span {
        font-size: calc(1.125rem * 1024 / 1920);
        gap: calc(1rem * 1024 / 1920);
      }

      .lista-servicos a {
        width: 40%;
      }
    }

    @media screen and (max-width: 820px) {
      #main-sersol-desktop {
        display: none;
      }

      #main-sersol-mobile {
        display: block;
      }

      main {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .container-sersol-mobile {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        gap: 2rem;
        margin: 3rem;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-sersol-mobile > h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto;
        color: #686868;
      }

      .container-sersol-mobile > p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1rem;
        color: #686868;
        width: 75%;
        text-align: justify;
        margin: 0 auto;
      }

      .container-sersol-mobile-imagem {
        z-index: 1;
        position: absolute;
        left: 40%;
        top: 60%;
      }

      .container-sersol-mobile-imagem > img {
        z-index: 1;
        width: 70%;
      }

      .container-sersol-mobile-imagem::after {
        content: '';
        height: 100%;
        width: 70%;
        position: absolute;
        left: 20%;
        z-index: -1;
        border-radius: 100%;
        background-color: #1090CB;
      }

      .lista-servicos-mobile {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .lista-servicos-mobile a span img {
        width: 2rem;
        height: 2rem;
      }

      .lista-servicos-mobile a span {
        font-size: 1.125rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lista-servicos-mobile a span p b {
        text-decoration: underline;
      }

      .lista-servicos-mobile a {
        width: 70%;
        text-decoration: none;
      }
    }
    @media screen and (max-width: 700px) {
      #main-sersol-desktop {
        display: none;
      }

      #main-sersol-mobile {
        display: block;
      }

      main {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .container-sersol-mobile {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        gap: 2rem;
        margin: 3rem;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-sersol-mobile > h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto;
        color: #686868;
      }

      .container-sersol-mobile > p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1rem;
        color: #686868;
        width: 75%;
        text-align: justify;
        margin: 0 auto;
      }

      .container-sersol-mobile-imagem {
        z-index: 1;
        position: absolute;
        left: 40%;
        top: 70%;
      }

      .container-sersol-mobile-imagem > img {
        z-index: 1;
        width: 70%;
      }

      .container-sersol-mobile-imagem::after {
        content: '';
        height: 100%;
        width: 70%;
        position: absolute;
        left: 20%;
        z-index: -1;
        border-radius: 100%;
        background-color: #1090CB;
      }

      .lista-servicos-mobile {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .lista-servicos-mobile a span img {
        width: 2rem;
        height: 2rem;
      }

      .lista-servicos-mobile a span {
        font-size: 1.125rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lista-servicos-mobile a span p b {
        text-decoration: underline;
      }

      .lista-servicos-mobile a {
        width: 100%;
        text-decoration: none;
      }
    }
    @media screen and (max-width: 500px) {
      #main-sersol-desktop {
        display: none;
      }

      #main-sersol-mobile {
        display: block;
      }

      main {
        height: 100%;
        display: flex;
        flex-direction: column;
      }

      .container-sersol-mobile {
        display: flex;
        flex-direction: column;
        justify-content: center;
        height: 100%;
        gap: 2rem;
        margin: 1.5rem;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-sersol-mobile > h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto;
        color: #686868;
      }

      .container-sersol-mobile > p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1rem;
        color: #686868;
        width: 75%;
        text-align: justify;
        margin: 0 auto;
      }

      .container-sersol-mobile-imagem {
        z-index: 1;
        position: absolute;
        left: 40%;
        top: 70%;
      }

      .container-sersol-mobile-imagem > img {
        z-index: 1;
        width: 90%;
      }

      .container-sersol-mobile-imagem::after {
        content: '';
        height: 90%;
        width: 70%;
        position: absolute;
        left: 20%;
        z-index: -1;
        border-radius: 100%;
        background-color: #1090CB;
      }

      .lista-servicos-mobile {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .lista-servicos-mobile a span img {
        width: 2rem;
        height: 2rem;
      }

      .lista-servicos-mobile a span {
        font-size: .8rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lista-servicos-mobile a span p b {
        text-decoration: underline;
      }

      .lista-servicos-mobile a {
        width: 100%;
        text-decoration: none;
      }
    }
    @media screen and (max-width: 350px) {
      #main-sersol-desktop {
        display: none;
      }

      #main-sersol-mobile {
        display: block;
      }

      main {
        height: 107vh;
        display: flex;
        flex-direction: column;
      }

      .container-sersol-mobile {
        display: flex;
        flex-direction: column;
        justify-content: start;
        height: 100%;
        gap: 2rem;
        margin: 1.5rem;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-sersol-mobile > h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0 auto;
        color: #686868;
      }

      .container-sersol-mobile > p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1rem;
        color: #686868;
        width: 75%;
        text-align: justify;
        margin: 0 auto;
      }

      .container-sersol-mobile-imagem {
        z-index: 1;
        position: absolute;
        left: 20%;
        top: 90%;
      }

      .container-sersol-mobile-imagem > img {
        z-index: 1;
        width: 100%;
      }

      .container-sersol-mobile-imagem::after {
        content: '';
        height: 90%;
        width: 70%;
        position: absolute;
        left: 30%;
        z-index: -1;
        border-radius: 100%;
        background-color: #1090CB;
      }

      .lista-servicos-mobile {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .lista-servicos-mobile a span img {
        width: 2rem;
        height: 2rem;
      }

      .lista-servicos-mobile a span {
        font-size: .8rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lista-servicos-mobile a span p b {
        text-decoration: underline;
      }

      .lista-servicos-mobile a {
        width: 100%;
        text-decoration: none;
      }
    }
    @media screen and (max-width: 300px) {
      #main-sersol-desktop {
        display: none;
      }

      #main-sersol-mobile {
        display: block;
      }

      main {
        height: 85vh;
        display: flex;
        flex-direction: column;
      }

      .container-sersol-mobile {
        display: flex;
        flex-direction: column;
        justify-content: start;
        height: 100%;
        gap: 2rem;
        margin: 1rem;
      }

      footer {
        position: fixed;
        z-index: 2;
        bottom: 0;
        right: 0;
      }

      .container-sersol-mobile > h3 {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: 1.3rem;
        font-weight: 700;
        margin: 0 auto;
        color: #686868;
      }

      .container-sersol-mobile > p {
        font-family: Be Vietnam Pro, sans-serif;
        font-size: .8rem;
        color: #686868;
        width: 75%;
        text-align: justify;
        margin: 0 auto;
      }

      .container-sersol-mobile-imagem {
        z-index: 1;
        position: absolute;
        left: 20%;
        top: 70%;
      }

      .container-sersol-mobile-imagem > img {
        z-index: 1;
        width: 100%;
      }

      .container-sersol-mobile-imagem::after {
        content: '';
        height: 90%;
        width: 70%;
        position: absolute;
        left: 30%;
        z-index: -1;
        border-radius: 100%;
        background-color: #1090CB;
      }

      .lista-servicos-mobile {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }

      .lista-servicos-mobile a span img {
        width: 1rem;
        height: 1rem;
      }

      .lista-servicos-mobile a span {
        font-size: .8rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lista-servicos-mobile a span p b {
        text-decoration: underline;
      }

      .lista-servicos-mobile a {
        width: 100%;
        text-decoration: none;
      }
    }
  </style>
</div>
