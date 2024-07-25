<div>
  <main>
    <div class="container-modulos">
      <div class="container-modulos-data">
        <h1>Conheça todos os <br />Módulos do Sistema SAFI</h1>
        <div class="modulos" id="modulos">
          <div class="card-modulos">
            <div class="cadastro">
              <img src="{{ asset('imagens/Modulos/CadastroImagem.png') }}" alt="" />
            </div>
            <h3>Cadastro</h3>
            <p>
              Módulo de inserção de dados básicos no ERP, como empresas, clientes, fornecedores,
              produtos, centros de custos entre outras informações utilizadas nos demais módulos.
            </p>
          </div>
          <div class="card-modulos">
            <div class="financeiro">
              <img src="{{ asset('imagens/Modulos/FinanceiroImagem.png') }}" alt="" />
            </div>
            <h3>Financeiro</h3>
            <p>
              Contas a pagar, contas a receber, conciliação bancária, cobrança eletrônica, controle
              de cheques e recibos, descontos de títulos entre outros processos da área financeira.
            </p>
          </div>
          <div class="card-modulos">
            <div class="estoque">
              <img src="{{ asset('imagens/Modulos/EstoqueImagem.png') }}" alt="" />
            </div>
            <h3>Estoque</h3>
            <p>
              Gerencie seu estoque com eficiência e precisão. Nosso módulo de controle de estoque
              oferece uma solução completa para otimizar a logística da sua empresa, desde a
              organização dos produtos até a análise de dados.
            </p>
          </div>
          <div class="card-modulos">
            <div class="caixa">
              <img src="{{ asset('imagens/Modulos/CaixaImagem.png') }}" alt="" />
            </div>
            <h3>Caixa</h3>
            <p>
              Permite o recebimento de pré-vendas, vendas direto no caixa, operações inerentes a
              caixa (abertura, sangria, suprimentos, fechamento) procedimentos fiscais (NF-e e
              NFC-e), recebimento de títulos entre outros.
            </p>
          </div>
        </div>
        <div class="modulos" id="modulosMobile">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <div class="card-modulos">
                  <div class="cadastro">
                    <img src="{{ asset('imagens/Modulos/CadastroImagem.png') }}" alt="" />
                  </div>
                  <h3>Cadastro</h3>
                  <p>
                    Módulo de inserção de dados básicos no ERP, como empresas, clientes, fornecedores,
                    produtos, centros de custos entre outras informações utilizadas nos demais módulos.
                  </p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <div class="card-modulos">
                  <div class="financeiro">
                    <img src="{{ asset('imagens/Modulos/FinanceiroImagem.png') }}" alt="" />
                  </div>
                  <h3>Financeiro</h3>
                  <p>
                    Contas a pagar, contas a receber, conciliação bancária, cobrança eletrônica, controle
                    de cheques e recibos, descontos de títulos entre outros processos da área financeira.
                  </p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <div class="card-modulos">
                  <div class="estoque">
                    <img src="{{ asset('imagens/Modulos/EstoqueImagem.png') }}" alt="" />
                  </div>
                  <h3>Estoque</h3>
                  <p>
                    Gerencie seu estoque com eficiência e precisão. Nosso módulo de controle de estoque
                    oferece uma solução completa para otimizar a logística da sua empresa, desde a
                    organização dos produtos até a análise de dados.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <div class="card-modulos">
                <div class="estoque">
                  <img src="{{ asset('imagens/Modulos/EstoqueImagem.png') }}" alt="" />
                </div>
                <h3>Estoque</h3>
                <p>
                  Gerencie seu estoque com eficiência e precisão. Nosso módulo de controle de estoque
                  oferece uma solução completa para otimizar a logística da sua empresa, desde a
                  organização dos produtos até a análise de dados.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <div class="card-modulos">
                <div class="estoque">
                  <img src="{{ asset('imagens/Modulos/EstoqueImagem.png') }}" alt="" />
                </div>
                <h3>Estoque</h3>
                <p>
                  Gerencie seu estoque com eficiência e precisão. Nosso módulo de controle de estoque
                  oferece uma solução completa para otimizar a logística da sua empresa, desde a
                  organização dos produtos até a análise de dados.
                </p>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
              <div class="card-modulos">
                <div class="caixa">
                  <img src="{{ asset('imagens/Modulos/CaixaImagem.png') }}" alt="" />
                </div>
                <h3>Caixa</h3>
                <p>
                  Permite o recebimento de pré-vendas, vendas direto no caixa, operações inerentes a
                  caixa (abertura, sangria, suprimentos, fechamento) procedimentos fiscais (NF-e e
                  NFC-e), recebimento de títulos entre outros.
                </p>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <img src="{{ asset('imagens/Whatsapp.png') }}" alt="" class="whatsapp" onclick="envio()" />
      </div>
    </div>
  </main>
  <livewire:componentes.footer.footer />
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const modulos = document.getElementById('modulos');
      const modulosMobile = document.getElementById('modulosMobile');

      if (window.innerWidth <= 820) {
        modulos.style.display = 'none';
        modulosMobile.style.display = 'block';
      } else {
        modulos.style.display = 'grid';
        modulosMobile.style.display = 'none';
      }
    })

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
      height: 87vh;
    }

    .footer {
      position: absolute;
      bottom: 0;
      right: 0;
    }

    .container-modulos {
      height: 85vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container-modulos-data {
      width: 100%;
      height: 90%;
      background-color: #ededed;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    .container-modulos-data h1 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: center;
    }

    .modulos {
      display: grid;
      grid-template-columns: 25% 25% 25% 25%;
      width: 80%;
      margin: 0 auto;
    }

    .whatsapp {
      width: 4.125rem;
      height: 4.125rem;
      position: absolute;
      bottom: 50px;
      right: 50px;
    }

    .whatsapp:hover {
      cursor: pointer;
      animation: gelatine 0.5s alternate;
    }

    @keyframes gelatine {

      from,
      to {
        transform: scale(1, 1);
      }

      25% {
        transform: scale(0.9, 1.1);
      }

      50% {
        transform: scale(1.1, 0.9);
      }

      75% {
        transform: scale(0.95, 1.05);
      }
    }

    @media screen and (max-width: 2560px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 95%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 2560 / 1920);
        height: calc(4.125rem * 2560 / 1920);
        bottom: calc(50px * 2560 / 1920);
        right: calc(50px * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 90%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1920 / 1920);
        height: calc(4.125rem * 1920 / 1920);
        bottom: calc(50px * 1920 / 1920);
        right: calc(50px * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 85%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1600 / 1920);
        height: calc(4.125rem * 1600 / 1920);
        bottom: calc(50px * 1600 / 1920);
        right: calc(50px * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 88%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1440 / 1920);
        height: calc(4.125rem * 1440 / 1920);
        bottom: calc(50px * 1440 / 1920);
        right: calc(50px * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 78%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1366 / 1920);
        height: calc(4.125rem * 1366 / 1920);
        bottom: calc(50px * 1366 / 1920);
        right: calc(50px * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 85%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1280 / 1920);
        height: calc(4.125rem * 1280 / 1920);
        bottom: calc(50px * 1280 / 1920);
        right: calc(50px * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      .container-modulos {
        height: 85vh;
      }

      .container-modulos-data {
        width: 100%;
        height: 88%;
      }

      .container-modulos-data h1 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .modulos {
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
      }

      .whatsapp {
        width: calc(4.125rem * 1024 / 1920);
        height: calc(4.125rem * 1024 / 1920);
        bottom: calc(50px * 1024 / 1920);
        right: calc(50px * 1024 / 1920);
      }
    }

    /* CSS Card-moduloss */

    .card-modulos {
      display: flex;
      flex-direction: column;
      align-items: start;
      width: 60%;
      gap: 1rem;
      transition: 0.5s ease-in;
      padding: 1rem;
    }

    .card-modulos:hover {
      cursor: pointer;
      background-color: white;
      border-radius: 8px;
      box-shadow: 6px 9px 60px 3px rgba(0, 0, 0, 0.21);
    }

    .card-modulos:hover h3 {
      font-family: DM Sans, sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: #2c2c2c;
    }

    .card-modulos h3 {
      font-family: DM Sans, sans-serif;
      font-size: 1.25rem;
      font-weight: 700;
      color: #034d82;
      transition: 0.5s ease-in;
    }

    .card-modulos p {
      font-family: DM Sans, sans-serif;
      font-size: 0.9375rem;
      color: #4f4f50;
    }

    .cadastro {
      background: linear-gradient(315.55deg, #ef4444 0%, #ff8989 92.87%);
      width: 23%;
      height: 3rem;
    }

    .cadastro img {
      width: 2.125rem;
      height: 1.875rem;
    }

    .estoque {
      background: linear-gradient(315.55deg, #3b82f6 0%, #86b4ff 92.87%);
      width: 23%;
      height: 3rem;
    }

    .estoque img {
      width: 1.625rem;
      height: 1.875rem;
    }

    .financeiro {
      background: linear-gradient(315.55deg, #f59e0b 0%, #ffd285 92.87%);
      width: 23%;
      height: 3rem;
    }

    .financeiro img {
      width: 1.75rem;
      height: 1.1625rem;
    }

    .caixa {
      background: linear-gradient(315.55deg, #14b8a6 0%, #48dfce 92.87%);
      width: 23%;
      height: 3rem;
    }

    .caixa img {
      width: 2.25rem;
      height: 2.125rem;
    }

    .card-modulos div:first-child {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    @media screen and (max-width: 2560px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 2560 / 1920);
        padding: calc(1rem * 2560 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 2560 / 1920) calc(9px * 2560 / 1920) calc(60px * 2560 / 1920) calc(3px * 2560 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 2560 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 2560 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 2560 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 2560 / 1920);
        height: calc(1.875rem * 2560 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 2560 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 2560 / 1920);
        height: calc(1.875rem * 2560 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 2560 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 2560 / 1920);
        height: calc(1.1625rem * 2560 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 2560 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 2560 / 1920);
        height: calc(2.125rem * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1920 / 1920);
        padding: calc(1rem * 1920 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1920 / 1920) calc(9px * 1920 / 1920) calc(60px * 1920 / 1920) calc(3px * 1920 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1920 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1920 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1920 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1920 / 1920);
        height: calc(1.875rem * 1920 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1920 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1920 / 1920);
        height: calc(1.875rem * 1920 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1920 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1920 / 1920);
        height: calc(1.1625rem * 1920 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1920 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1920 / 1920);
        height: calc(2.125rem * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1600 / 1920);
        padding: calc(1rem * 1600 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1600 / 1920) calc(9px * 1600 / 1920) calc(60px * 1600 / 1920) calc(3px * 1600 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1600 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1600 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1600 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1600 / 1920);
        height: calc(1.875rem * 1600 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1600 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1600 / 1920);
        height: calc(1.875rem * 1600 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1600 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1600 / 1920);
        height: calc(1.1625rem * 1600 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1600 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1600 / 1920);
        height: calc(2.125rem * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1440 / 1920);
        padding: calc(1rem * 1440 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1440 / 1920) calc(9px * 1440 / 1920) calc(60px * 1440 / 1920) calc(3px * 1440 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1440 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1440 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1440 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1440 / 1920);
        height: calc(1.875rem * 1440 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1440 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1440 / 1920);
        height: calc(1.875rem * 1440 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1440 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1440 / 1920);
        height: calc(1.1625rem * 1440 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1440 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1440 / 1920);
        height: calc(2.125rem * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1366 / 1920);
        padding: calc(1rem * 1366 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1366 / 1920) calc(9px * 1366 / 1920) calc(60px * 1366 / 1920) calc(3px * 1366 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1366 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1366 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1366 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1366 / 1920);
        height: calc(1.875rem * 1366 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1366 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1366 / 1920);
        height: calc(1.875rem * 1366 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1366 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1366 / 1920);
        height: calc(1.1625rem * 1366 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1366 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1366 / 1920);
        height: calc(2.125rem * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1280 / 1920);
        padding: calc(1rem * 1280 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1280 / 1920) calc(9px * 1280 / 1920) calc(60px * 1280 / 1920) calc(3px * 1280 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1280 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1280 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1280 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1280 / 1920);
        height: calc(1.875rem * 1280 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1280 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1280 / 1920);
        height: calc(1.875rem * 1280 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1280 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1280 / 1920);
        height: calc(1.1625rem * 1280 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1280 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1280 / 1920);
        height: calc(2.125rem * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      .card-modulos {
        width: 60%;
        gap: calc(1rem * 1024 / 1920);
        padding: calc(1rem * 1024 / 1920);
      }

      .card-modulos:hover {
        box-shadow: calc(6px * 1024 / 1920) calc(9px * 1024 / 1920) calc(60px * 1024 / 1920) calc(3px * 1024 / 1920) rgba(0, 0, 0, 0.21);
      }

      .card-modulos h3 {
        font-size: calc(1.25rem * 1024 / 1920);
      }

      .card-modulos p {
        font-size: calc(0.9375rem * 1024 / 1920);
      }

      .cadastro {
        width: 23%;
        height: calc(3rem * 1024 / 1920);
      }

      .cadastro img {
        width: calc(2.125rem * 1024 / 1920);
        height: calc(1.875rem * 1024 / 1920);
      }

      .estoque {
        width: 23%;
        height: calc(3rem * 1024 / 1920);
      }

      .estoque img {
        width: calc(1.625rem * 1024 / 1920);
        height: calc(1.875rem * 1024 / 1920);
      }

      .financeiro {
        width: 23%;
        height: calc(3rem * 1024 / 1920);
      }

      .financeiro img {
        width: calc(1.75rem * 1024 / 1920);
        height: calc(1.1625rem * 1024 / 1920);
      }

      .caixa {
        width: 23%;
        height: calc(3rem * 1024 / 1920);
      }

      .caixa img {
        width: calc(2.25rem * 1024 / 1920);
        height: calc(2.125rem * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {
      main {
        background-color: white;
        height: 100%;
      }

      .container-modulos {
        height: 55vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container-modulos-data {
        width: 100%;
        height: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
      }

      .container-modulos-data h1 {
        font-size: 2rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: center;
      }

      .carousel-inner {
        background-color: var(--cinza-secundario);
        border-radius: 10px;
        padding: 2rem;
      }

      .card-modulos {
        margin: 0 auto;
      }

      .card-modulos h3 {
        font-size: 1.5rem;
      }

      .card-modulos p {
        font-size: 1rem;
        color: white;
      }

      .modulos {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
        margin: 0 auto;
      }

      .whatsapp {
        display: none;
      }
    }

    @media screen and (max-width: 520px) {
      main {
        background-color: white;
        height: 100%;
      }

      .container-modulos {
        height: 55vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container-modulos-data {
        width: 100%;
        height: 100%;
        background-color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
      }

      .container-modulos-data h1 {
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: center;
      }

      .carousel-inner {
        background-color: var(--cinza-secundario);
        border-radius: 10px;
        padding: 2rem;
      }

      .card-modulos {
        margin: 0 auto;
      }

      .card-modulos h3 {
        font-size: 1.3rem;
      }

      .card-modulos p {
        font-size: .7rem;
        color: white;
      }

      .modulos {
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        width: 80%;
        margin: 0 auto;
      }

      .whatsapp {
        display: none;
      }
    }
  </style>
</div>
