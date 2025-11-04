<div>
  <nav class="desktop {{ $isRotaAlternativa ? 'rotaalternativa' : '' }}">
    @if ($isRotaAlternativa)
      <img alt="" class="logo" src="{{ asset('imagens/LogoAzul.png') }}" onclick="goToHome()"/>
    @else
      <img alt="" class="logo" src="{{ asset('imagens/Logo.png') }}"  onclick="goToHome()"/>
    @endif
    <div class="navlinks">
      <a class="{{ $isRotaAtiva === 'home' ? 'linkativo' : '' }}" href="/">Inicio</a>
      <a class="{{ $isRotaAtiva === 'modulos' ? 'linkativo' : '' }}" href="/modulos">Módulos</a>
      <a class="{{ $isRotaAtiva === 'quemsomos' ? 'linkativo' : '' }}" href="/quemsomos">Quem somos</a>
      <a class="{{ $isRotaAtiva === 'solucoes' ? 'linkativo' : '' }}" href="/solucoes">Serviços e Soluções</a>
      <a class="{{ $isRotaAtiva === 'parceiros' ? 'linkativo' : '' }}" href="/parceiros">Parceiros</a>
      <button wire:click="download('apk')" wire:loading.attr="disabled">Baixe nosso app</button>
      <button onclick="envio()">Fale Conosco</button>
    </div>
  </nav>
  <nav class="mobile" style="background-color: {{ $navbarPreta ? '#1a1a1a' : 'white' }}">
    <div class="topo">
      @if ($isRotaAlternativa)
        <img alt="" class="logo" src="{{ asset('imagens/LogoAzul.png') }}" />
      @else
        <img alt="" class="logo" src="{{ asset('imagens/Logo.png') }}" />
      @endif
      @if ($isRotaAlternativa)
        <button onclick="menuShow()"><img alt="" class="hamburguer"
            src="{{ asset('imagens/HamburguerMobileAzul.png') }}" /></button>
      @else
        <button onclick="menuShow()"><img alt="" class="hamburguer"
            src="{{ asset('imagens/HamburguerMobile.png') }}" />
        </button>
      @endif
    </div>
    <div class="mobile-menu">
      <ul>
        <li class="nav-item"><a class="{{ $isRotaAtiva === 'home' ? 'linkativo' : '' }}" href="/">Inicio</a></li>
        <li class="nav-item"><a class="{{ $isRotaAtiva === 'modulos' ? 'linkativo' : '' }}" href="/modulos">Módulos</a>
        </li>
        <li class="nav-item"><a class="{{ $isRotaAtiva === 'quemsomos' ? 'linkativo' : '' }}" href="/quemsomos">Quem
            somos</a></li>
        <li class="nav-item"><a class="{{ $isRotaAtiva === 'solucoes' ? 'linkativo' : '' }}" href="/solucoes">Serviços
            e
            Soluções</a></li>
        <li class="nav-item"><a class="{{ $isRotaAtiva === 'parceiros' ? 'linkativo' : '' }}"
            href="/parceiros">Parceiros</a>
        </li>
      </ul>

      <button wire:click="download('apk')" wire:loading.attr="disabled" class="download-button">Baixe nosso app</button>
      <button class="contato-button" onclick="envio()">Fale Conosco</button>
    </div>
  </nav>
  <script>
    function menuShow() {
      let menuMobile = document.querySelector(`.mobile-menu`);
      if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
      } else {
        menuMobile.classList.add('open');
      }
    }

    function envio() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no seu sistema, poderia me contar um pouco mais sobre?`
      )

      window.open(
        `https://api.whatsapp.com/send?phone=5567999832455&text=${mensagem.replaceAll('$', '%0D')}`
      )
    }

    function goToHome() {
      window.location.href = '/';
    }
  </script>
  <style>
    nav {
      display: flex;
      justify-content: space-between;
      background-color: #1e1e1e;
    }

    .navlinks {
      display: flex;
      align-items: center;
    }

    .navlinks a {
      color: white;
      text-decoration: none;
      font-family: Nunito, sans-serif;
    }

    nav .linkativo {
      text-decoration: underline;
    }

    nav .linkativo::before {
      content: '';
      display: inline-block;
      margin-bottom: 10px;
      margin-right: 5px;
      width: 10px;
      height: 10px;
      background-color: var(--azul-principal);
      border-radius: 50%;
    }

    .logo {
      cursor: pointer;
    }

    .navlinks button {
      color: var(--azul-principal);
      font-family: Nunito, sans-serif;
      font-weight: 700;
    }

    .navlinks button:hover {
      cursor: pointer;
    }

    .navlinks a:hover {
      text-decoration: underline;
    }

    .rotaalternativa {
      background-color: #fff;
    }

    .rotaalternativa .navlinks a {
      color: #4f4f50;
      font-weight: 600;
    }

    .rotaalternativa .navlinks button {
      background-color: var(--azul-principal);
      color: white;
      transition: .5s ease;
      border: none;
      border-radius: 10px;
    }

    .rotaalternativa .navlinks button:hover {
      border: 1px solid var(--azul-principal);
      background-color: white;
      color: var(--azul-principal);
      cursor: pointer;
    }

    .mobile {
      display: none;
    }

    @media screen and (max-width: 2560px) {
      nav {
        padding: calc(1rem * 2560 / 1440) calc(5rem * 2560 / 1440);
      }

      .logo {
        width: calc(4.5rem * 2560 / 1920);
        height: calc(3.5rem * 2560 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 2560 / 1440);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 2560 / 1920);
        margin-right: calc(5px * 2560 / 1920);
        width: calc(10px * 2560 / 1920);
        height: calc(10px * 2560 / 1920);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 2560 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 2560 / 1440);
        height: calc(2.25rem * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      nav {
        padding: calc(1rem * 1920 / 1440) calc(5rem * 1920 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1920 / 1920);
        height: calc(3.5rem * 1920 / 1920);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1920 / 1920);
        margin-right: calc(5px * 1920 / 1920);
        width: calc(10px * 1920 / 1920);
        height: calc(10px * 1920 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1920 / 1440);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1920 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 1920 / 1440);
        height: calc(2.25rem * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      nav {
        padding: calc(1rem * 1600 / 1440) calc(5rem * 1600 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1600 / 1920);
        height: calc(3.5rem * 1600 / 1920);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1600 / 1920);
        margin-right: calc(5px * 1600 / 1920);
        width: calc(10px * 1600 / 1920);
        height: calc(10px * 1600 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1600 / 1440);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1600 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 1600 / 1440);
        height: calc(2.25rem * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      nav {
        padding: calc(1rem * 1440 / 1440) calc(5rem * 1440 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1440 / 1920);
        height: calc(3.5rem * 1440 / 1920);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1440 / 1920);
        margin-right: calc(5px * 1440 / 1920);
        width: calc(10px * 1440 / 1920);
        height: calc(10px * 1440 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1440 / 1440);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1440 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 1440 / 1440);
        height: calc(2.25rem * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      nav {
        padding: calc(1rem * 1366 / 1440) calc(5rem * 1366 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1366 / 1920);
        height: calc(3.5rem * 1366 / 1920);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1366 / 1920);
        margin-right: calc(5px * 1366 / 1920);
        width: calc(10px * 1366 / 1920);
        height: calc(10px * 1366 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1366 / 1440);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1366 / 1920);
      }

      .navlinks button {
        height: calc(2.25rem * 1366 / 1920);
        padding: 0 calc(3rem * 1366 / 1440);
      }
    }

    @media screen and (max-width: 1280px) {
      nav {
        padding: calc(1rem * 1280 / 1440) calc(5rem * 1280 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1280 / 1920);
        height: calc(3.5rem * 1280 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1280 / 1440);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1280 / 1920);
        margin-right: calc(5px * 1280 / 1920);
        width: calc(10px * 1280 / 1920);
        height: calc(10px * 1280 / 1920);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1280 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 1280 / 1440);
        height: calc(2.25rem * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      nav {
        padding: calc(1rem * 1024 / 1440) calc(5rem * 1024 / 1440);
      }

      .logo {
        width: calc(4.5rem * 1024 / 1920);
        height: calc(3.5rem * 1024 / 1920);
      }

      nav .linkativo::before {
        margin-bottom: calc(10px * 1024 / 1920);
        margin-right: calc(5px * 1024 / 1920);
        width: calc(10px * 1024 / 1920);
        height: calc(10px * 1024 / 1920);
      }

      .navlinks {
        gap: calc(2rem * 1024 / 1440);
      }

      .navlinks a,
      .navlinks button {
        font-size: calc(1rem * 1024 / 1920);
      }

      .navlinks button {
        padding: 0 calc(3rem * 1024 / 1440);
        height: calc(2.25rem * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {

      .desktop,
      .mobile-menu {
        display: none;
      }

      .mobile {
        display: block;
      }

      .mobile .topo {
        display: flex;
        padding-inline: 2rem;
        justify-content: space-between;
      }

      .mobile .topo .hamburguer {
        width: 1.5rem;
        height: 1rem;
      }

      .mobile .topo>button {
        background-color: transparent;
        border: none;
        cursor: pointer;
      }

      .mobile-menu {
        background-color: var(--cinza-terceario);
        width: 100vw;
        position: absolute;
        top: 50px;
        right: 0;
        z-index: 5;
      }

      .mobile-menu ul {
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-bottom: 1rem;
      }

      .mobile-menu .nav-item {
        display: block;
        padding-top: 1.2rem;
      }

      .mobile-menu .nav-item>a {
        color: white;
        text-decoration: none;
      }

      .mobile-menu .download-button,
      .mobile-menu .contato-button {
        display: block;
        padding: 1rem 2rem;
        width: 80%;
        color: var(--azul-principal);
        font-family: Nunito, sans-serif;
        font-weight: 700;
        background-color: white;
        border: 1px solid var(--azul-principal);
        border-radius: 10px;
        margin: 1rem auto;
        transition: .5s ease;
      }

      .mobile-menu .download-button:hover,
      .mobile-menu .contato-button:hover {
        cursor: pointer;
        color: white;
        background-color: var(--azul-principal);
        border: 1px solid white;
      }

      .open {
        display: block;
        transition: .5s ease;
      }
    }
  </style>
</div>
