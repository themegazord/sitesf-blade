<div>
  <main id="home-main-desktop">
    <div class="container-home">
      <div class="container-home-left">
        <h1>
          Facilite o <span>processo de gestão</span> da sua empresa com nossa solução de alto padrão
        </h1>
        <h4>
          A SF Sistemas é uma empresa com soluções sistêmicas para facilitar a gestão da sua empresa
          de forma prática, fácil, com ótima relação custo benefício, aliando sempre a qualidade e
          profissionalismo.
        </h4>
        <div class="botoes">
          <button onclick="envio()">Fale Conosco</button>
          <a href="/solucoes">
            <button>Saiba Mais</button>
          </a>
        </div>
      </div>
      <div class="container-home-right">
        <img src="{{ asset('imagens/HomeImgRight.png') }}" alt="" />
      </div>
    </div>
  </main>
  <div class="footer" id="home-footer-desktop">
    <livewire:componentes.gerais.whatsapp-icon />
    <div class="subfooter">
      <div class="subfooter-left">
        <img src="{{ asset('imagens/LogoAzul.png') }}" alt="">
        <p>Soluções sistêmicas de alto padrão para sua empresa!</p>
      </div>
      <div class="subfooter-right">
        <div class="guias">
          <p>Quem somos</p>
          <a href="/parceiros">Clientes</a>
          <a href="/solucoes">Portfólio</a>
          <p>Politica e Privacidade</p>
        </div>
        <div class="endereco">
          <p>Endereço</p>
          <span><b>R.Mal Candido Mariano, 332</b></span>
          <span><b>1º Andar - Sala 2</b></span>
          <span><b>Campo Grande - MS</b></span>
          <span>(67) 9 9983-2455</span>
        </div>
        <div class="social">
          <button><i class="fa-brands fa-facebook-f"></i></button>
          <button><i class="fa-brands fa-instagram"></i></button>
          <button><i class="fa-brands fa-linkedin"></i></button>
        </div>
      </div>
    </div>
  </div>
  <main class="{{ $isRotaAlternativa ? 'rotaalternativa' : ''}}" id="home-main-mobile">
    <div class="container-home">
      <div class="container-home-top">
        <livewire:componentes.gerais.mobile.cacto-home />
        <livewire:componentes.gerais.mobile.tijolo-home />
        <h1>
          Facilite o <span>processo de gestão</span> da sua empresa com nossa solução de alto
          padrão
        </h1>
        <p id="testealtura"></p>
        <h4>
          A SF Sistemas é uma empresa com soluções sistêmicas para facilitar a gestão da sua
          empresa de forma prática, fácil, com ótima relação custo benefício, aliando sempre a
          qualidade e profissionalismo.
        </h4>
        <div class="botoes">
          <button onclick="envio()">Fale Conosco</button>
          <button wire:click="goSolucoes">Saiba Mais</button>
        </div>
      </div>
      <div class="container-home-down">
        <img src="{{ asset('imagens/Mobile/Homem.png') }}" alt="" class="homem-home" id="homem-home" />
      </div>
    </div>
    <livewire:componentes.footer.footer />
  </main>
  <script>
    window.addEventListener('DOMContentLoaded', function() {
      if (window.innerWidth < 820) {
        document.getElementById('home-main-desktop').style.display = 'none';
        document.getElementById('home-footer-desktop').style.display = 'none';
        // Livewire.dispatch('mobile')
      } else {
        document.getElementById('home-main-mobile').style.display = 'none';
      }
    })
  </script>
  <style>
    main {
      background-color: var(--cinza-principal);
      height: 80vh;
    }

    .container-home {
      display: grid;
      grid-template-columns: 1fr 1fr;
      height: 70vh;
    }

    .container-home-left {
      display: flex;
      flex-direction: column;

      align-items: start;
      padding-left: 10rem;
      gap: 1rem;
    }

    .container-home-left h1 {
      font-size: 2.5rem;
      width: 85%;
      font-family: Be Vietnam Pro, sans-serif;
      font-weight: 700;
      color: white;
    }

    .container-home-left h1 span {
      color: var(--azul-principal);
    }

    .container-home-left h4 {
      font-size: 1rem;
      width: 80%;
      font-family: Be Vietnam Pro, sans-serif;
      color: white;
    }

    .botoes {
      display: flex;
      gap: 1rem;
      width: 57%;
    }

    .botoes button {
      font-family: Nunito, sans-serif;
      font-size: 1rem;
      font-weight: bold;
      text-transform: none;
      color: var(--azul-principal);
      border: 1px solid var(--azul-principal);
      transition: 0.5s ease;
      padding: 0.5rem 2rem;
    }

    .botoes button:hover {
      color: white;
      border: none;
      background-color: var(--azul-principal);
    }

    .container-home-right {
      display: flex;

      align-items: center;
    }

    .container-home-right img {
      height: 500px;
    }

    .footer {
      width: 100vw;
      position: absolute;
      bottom: 0;
      left: 0;
    }

    .whatsapp-icon {
      position: absolute;
      width: 5rem;
      height: 5rem;
      top: -40px;
      right: 50px;
    }

    .subfooter {
      display: grid;
      grid-template-columns: 1fr 1fr;
      padding: 1rem 1rem 1rem 7rem;
      background-color: white;
    }

    .subfooter-right {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      column-gap: 3rem;
    }

    .subfooter-left p {
      width: 25%;
      font-size: 0.875rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: var(--cinza-terceario);
    }

    .guias,
    .endereco {
      display: flex;
      flex-direction: column;

    }

    .guias p,
    .endereco p {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 0.875rem;
      font-weight: 700;
      color: var(--cinza-secundario);
      padding-bottom: 0.5rem;
    }

    .guias a,
    .endereco span {
      font-family: Be Vietnam Pro, sans-serif;
      font-size: 0.8125rem;
      text-decoration: none;
      color: var(--cinza-terceario);
    }

    .social {
      height: 100%;
      display: flex;
      align-items: end;

      gap: 0.5rem;
    }

    .social>button {
      background-color: transparent;
      border: none;
      color: var(--cinza-secundario);
    }

    @media screen and (max-width: 2560px) {

      #home-footer-desktop,
      #home-main-desktop {
        display: block;
      }

      #home-main-mobile {
        display: none;
      }

      .container-home {
        height: 70vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 2560 / 1920);
        gap: calc(1rem * 2560 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 2560 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 2560 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 2560 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 2560 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 2560 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 2560 / 1920) calc(1rem * 2560 / 1920) calc(1rem * 2560 / 1920) calc(7rem * 2560 / 1920);
        border-radius: calc(30px * 2560 / 1920) calc(30px * 2560 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 2560 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 2560 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 2560 / 1920);
        padding-bottom: calc(0.5rem * 2560 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 2560 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      .container-home {
        height: 70vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1920 / 1920);
        gap: calc(1rem * 1920 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1920 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1920 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1920 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1920 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1920 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1920 / 1920) calc(1rem * 1920 / 1920) calc(1rem * 1920 / 1920) calc(7rem * 1920 / 1920);
        border-radius: calc(30px * 1920 / 1920) calc(30px * 1920 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1920 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1920 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1920 / 1920);
        padding-bottom: calc(0.5rem * 1920 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1920 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      .container-home {
        height: 70vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1600 / 1920);
        gap: calc(1rem * 1600 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1600 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1600 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1600 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1600 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1600 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1600 / 1920) calc(1rem * 1600 / 1920) calc(1rem * 1600 / 1920) calc(7rem * 1600 / 1920);
        border-radius: calc(30px * 1600 / 1920) calc(30px * 1600 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1600 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1600 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1600 / 1920);
        padding-bottom: calc(0.5rem * 1600 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1600 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      .container-home {
        height: 70vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1440 / 1920);
        gap: calc(1rem * 1440 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1440 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1440 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1440 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1440 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1440 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1440 / 1920) calc(1rem * 1440 / 1920) calc(1rem * 1440 / 1920) calc(7rem * 1440 / 1920);
        border-radius: calc(30px * 1440 / 1920) calc(30px * 1440 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1440 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1440 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1440 / 1920);
        padding-bottom: calc(0.5rem * 1440 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1440 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      .container-home {
        height: 50vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1366 / 1920);
        gap: calc(1rem * 1366 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1366 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1366 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1366 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1366 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1366 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1366 / 1920) calc(1rem * 1366 / 1920) calc(1rem * 1366 / 1920) calc(7rem * 1366 / 1920);
        border-radius: calc(30px * 1366 / 1920) calc(30px * 1366 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1366 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1366 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1366 / 1920);
        padding-bottom: calc(0.5rem * 1366 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1366 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      .container-home {
        height: 50vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1280 / 1920);
        gap: calc(1rem * 1280 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1280 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1280 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1280 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1280 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1280 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1280 / 1920) calc(1rem * 1280 / 1920) calc(1rem * 1280 / 1920) calc(7rem * 1280 / 1920);
        border-radius: calc(30px * 1280 / 1920) calc(30px * 1280 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1280 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1280 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1280 / 1920);
        padding-bottom: calc(0.5rem * 1280 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1280 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      .container-home {
        height: 70vh;
      }

      .container-home-left {
        padding-left: calc(10rem * 1024 / 1920);
        gap: calc(1rem * 1024 / 1920);
      }

      .container-home-left h1 {
        font-size: calc(2.5rem * 1024 / 1920);
        width: 85%;
      }

      .container-home-left h4 {
        font-size: calc(1rem * 1024 / 1920);
        width: 80%;
      }

      .botoes {
        gap: calc(1rem * 1024 / 1920);
        width: 57%;
      }

      .botoes button {
        font-size: calc(1rem * 1024 / 1920);
        padding: 0.5rem 2rem;
      }

      .container-home-right img {
        height: calc(500px * 1024 / 1920);
      }

      .whatsapp-icon {
        position: absolute;
        top: -40px;
        right: 50px;
      }

      .subfooter {
        padding: calc(1rem * 1024 / 1920) calc(1rem * 1024 / 1920) calc(1rem * 1024 / 1920) calc(7rem * 1024 / 1920);
        border-radius: calc(30px * 1024 / 1920) calc(30px * 1024 / 1920) 0 0;
      }

      .subfooter-right {
        column-gap: calc(3rem * 1024 / 1920);
      }

      .subfooter-left p {
        width: 25%;
        font-size: calc(0.875rem * 1024 / 1920);
      }

      .guias p,
      .endereco p {
        font-size: calc(0.875rem * 1024 / 1920);
        padding-bottom: calc(0.5rem * 1024 / 1920);
      }

      .guias a,
      .endereco span {
        font-size: calc(0.8125rem * 1024 / 1920);
      }

      .social {
        height: 100%;
        gap: calc(0.5rem * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {

      #home-footer-desktop,
      #home-main-desktop {
        display: none;
      }

      #home-main-mobile {
        display: block;
      }

      .footer {
        display: none;
      }

      main {
        height: 94vh;
      }

      .container-home {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 1rem;
        height: 100%;
      }

      .container-home-top {
        padding-top: calc(5rem * 820 / 820);
        padding-left: calc(3rem * 820 / 820);
        width: 85%;
        display: flex;
        flex-direction: column;
        gap: calc(1rem * 820 / 820);
      }

      .container-home-down {
        background-color: #1E1E1E;
        display: flex;
        flex-direction: row-reverse;
      }

      .container-home-top h1 {
        font-size: calc(2rem * 820 / 820);
        font-family: Be Vietnam Pro, sans-serif;
        font-weight: 700;
        color: white;
      }

      .container-home-top h1 span {
        color: var(--azul-principal);
      }

      .container-home-top h4 {
        font-size: calc(0.8rem * 820 / 820);

        line-height: 16px;
        width: 75%;
        font-family: Be Vietnam Pro, sans-serif;
        color: white;
        font-weight: 400;
      }

      .botoes {
        display: flex;
        gap: 1rem;
        width: 100%;
      }

      .botoes button {
        padding: .5rem 1rem;
        font-size: calc(0.8rem * 820 / 820);
        border-radius: 5px;
      }

      .botoes button:first-child {
        background-color: var(--azul-principal);
        color: white;
      }

      .tijolo {
        position: absolute;
        right: 0;
        top: 250px;
      }

      .homem-home {

        height: 400px;
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 600px) {
      main {
        height: 94vh;
      }

      .container-home {
        display: flex;
        flex-direction: column;
      }

      .container-home-top {
        padding-top: calc(5rem * 820 / 820);
        padding-left: calc(3rem * 820 / 820);
        width: 85%;
        display: flex;
        flex-direction: column;
        gap: calc(1rem * 820 / 820);
      }

      .container-home-top h1 {
        font-size: calc(2rem * 820 / 820);
        font-family: Be Vietnam Pro, sans-serif;
        font-weight: 700;
        color: white;
      }

      .container-home-top h1 span {
        color: var(--azul-principal);
      }

      .container-home-top h4 {
        font-size: calc(0.8rem * 820 / 820);

        width: 65%;
        font-family: Be Vietnam Pro, sans-serif;
        color: white;
        font-weight: 400;
      }

      .botoes button {
        font-size: calc(0.8rem * 820 / 820);
        padding: calc(.5rem * 820 / 820) calc(1rem * 820 / 820);
      }

      .tijolo {
        position: absolute;
        right: 0;
        top: 250px;
      }

      .homem-home {

        height: calc(400px * 600 / 820);
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 500px) {
      .container-home-top h4 {
        width: 85%;
      }
    }

    @media screen and (max-width: 450px) {
      .container-home {
        display: flex;
        flex-direction: column;
      }

      .container-home-top {
        padding-top: calc(5rem * 400 / 820);
        padding-left: calc(3rem * 400 / 820);
        display: flex;
        flex-direction: column;
        gap: calc(1rem * 600 / 820);
      }

      .container-home-top h1 {
        font-size: 1.5rem;
        width: 90%;
        font-family: Be Vietnam Pro, sans-serif;
        font-weight: 700;
        color: white;
      }

      .container-home-top h1 span {
        color: var(--azul-principal);
      }

      .container-home-top h4 {
        font-size: 0.5;

        width: 75%;
        font-family: Be Vietnam Pro, sans-serif;
        color: white;
        font-weight: 400;
      }

      .botoes button {
        font-size: 0.8rem;
      }

      .tijolo {
        position: absolute;
        right: 0;
        top: 150px;
      }

      .homem-home {

        height: 280px;
        bottom: 0;
        right: 0;
      }
    }

    @media screen and (max-width: 360px) {
      .homem-home {

        height: 230px;
        bottom: 0;
        right: 0;
      }

      .container-home-top h1 {
        font-size: 1rem;
        width: 90%;
        font-family: Be Vietnam Pro, sans-serif;
        font-weight: 700;
        color: white;
      }

      .container-home-top h4 {
        font-size: 0.5;

        width: 95%;
        font-family: Be Vietnam Pro, sans-serif;
        color: white;
        font-weight: 400;
      }

    }

  </style>
</div>
