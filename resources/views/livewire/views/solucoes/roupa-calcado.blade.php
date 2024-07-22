<div>
  <main>
    <div class="container-solucoes-roupacalcado">
      <div class="container-solucoes-roupacalcado-left">
        <h3>Para <b>Lojas de Roupas e Calçados</b></h3>
        <p>
          Imagine enviar peças para seus clientes provarem no conforto de casa, sem precisar que se
          desloquem até a loja. Coleções e tamanhos variados à disposição, sem limites para a
          satisfação do cliente. Ele prova, fica com o que amar e devolve o que não se apaixonar. O
          SAFI registra tudo, desde o que foi enviado até o que retornou, garantindo total controle
          e precisão nas suas vendas.
          <b>
            O sistema calcula automaticamente o valor a ser pago pelo cliente, com base nas peças
            que ele ficou .
          </b>
        </p>
        <p>
          Alcance um público maior e ofereça uma experiência de compra única aos seus clientes.
          Proporcione um atendimento personalizado e descomplicado, que gera satisfação e fideliza
          seus clientes.
        </p>
        <p>
          Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
          familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
          começar a usar o sistema rapidamente, após o treinamento.
        </p>
        <button onclick="envioRoupaCalcado()">Clique aqui e fale com nosso time</button>
      </div>
      <div class="container-solucoes-roupacalcado-right">
        <img src="{{ asset('imagens/Servicos/RoupaCalcadoImagem.png') }}" alt="" />
        <div class="chips">
          <div class="chips-top">
            <span>Confecções</span>
            <span>Lingeries</span>
            <span>Roupas Infantis</span>
          </div>
        </div>
      </div>
    </div>
  </main>
  <livewire:componentes.footer.footer />
  <script>
    function envioRoupaCalcado() {
      const mensagem = encodeURI(
        `Olá 😊.$Fiquei interessado no módulo para lojas de roupas e calçados do seu sistema, poderia me contar um pouco mais sobre?`
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

    .container-solucoes-roupacalcado {
      display: grid;
      grid-template-columns: 60% 40%;
    }

    .container-solucoes-roupacalcado-left {
      display: flex;
      flex-direction: column;
      margin-top: 3rem;
      margin-left: 10rem;
      gap: 2rem;
    }

    .container-solucoes-roupacalcado-left h3 {
      font-size: 2rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
    }

    .container-solucoes-roupacalcado-left h3 b {
      color: #2985b8;
      text-decoration: underline;
    }

    .container-solucoes-roupacalcado-left p {
      font-size: 0.9375rem;
      font-family: Be Vietnam Pro, sans-serif;
      color: #4f4f50;
      text-align: justify;
      width: 70%;
      line-height: 30px;
    }

    .container-solucoes-roupacalcado-left button {
      border: none;
      border-radius: 10px;
      transition: .5s ease;
      width: 40%;
      margin-left: 9rem;
      background-color: #63c7f5;
      color: white;
    }

    .container-solucoes-roupacalcado-left button:hover {
      cursor: pointer;
      background-color: #2b8dba;
    }

    .container-solucoes-roupacalcado-right {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .container-solucoes-roupacalcado-right::after {
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

    .container-solucoes-roupacalcado-right img {
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



    .chips-top>span {
      padding: .2rem .4rem;
      background-color: white;
      border: 1px solid #e3e3e3;
      border-radius: 10px;
      font-size: 1rem;
    }


    .chips-down {
      display: flex;
      gap: 0.5rem;
    }

    @media screen and (max-width: 2560px) {
      main {
        height: 87vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 2560 / 1920);
        margin-left: calc(10rem * 2560 / 1920);
        gap: calc(2rem * 2560 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 2560 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 2560 / 1920);
        width: 70%;
        line-height: calc(30px * 2560 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 2560 / 1920);
        font-size: calc(1rem * 2560 / 1920);
        height: calc(2.5rem * 2560 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(725px * 2560 / 1920);
        width: calc(830px * 2560 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 2560 / 1920);
        top: calc(120px * 2560 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 2560 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 2560 / 1920);
      }
    }

    @media screen and (max-width: 1920px) {
      main {
        height: 87vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1920 / 1920);
        margin-left: calc(10rem * 1920 / 1920);
        gap: calc(2rem * 1920 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1920 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1920 / 1920);
        width: 70%;
        line-height: calc(30px * 1920 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1920 / 1920);
        font-size: calc(1rem * 1920 / 1920);
        height: calc(2.5rem * 1920 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(725px * 1920 / 1920);
        width: calc(830px * 1920 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1920 / 1920);
        top: calc(120px * 1920 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1920 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1920 / 1920);
      }
    }

    @media screen and (max-width: 1600px) {
      main {
        height: 86vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1600 / 1920);
        margin-left: calc(10rem * 1600 / 1920);
        gap: calc(1.5rem * 1600 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1600 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1600 / 1920);
        width: 70%;
        line-height: calc(30px * 1600 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1600 / 1920);
        font-size: calc(1rem * 1600 / 1920);
        height: calc(2.5rem * 1600 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(725px * 1600 / 1920);
        width: calc(830px * 1600 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1600 / 1920);
        top: calc(120px * 1600 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1600 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1600 / 1920);
      }
    }

    @media screen and (max-width: 1440px) {
      main {
        height: 86vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1440 / 1920);
        margin-left: calc(10rem * 1440 / 1920);
        gap: calc(1.5rem * 1440 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1440 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1440 / 1920);
        width: 70%;
        line-height: calc(30px * 1440 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1440 / 1920);
        font-size: calc(1rem * 1440 / 1920);
        height: calc(2.5rem * 1440 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(725px * 1440 / 1920);
        width: calc(830px * 1440 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1250px * 1440 / 1920);
        top: calc(120px * 1440 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1440 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1440 / 1920);
      }
    }

    @media screen and (max-width: 1366px) {
      main {
        height: 85vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1366 / 1920);
        margin-left: calc(10rem * 1366 / 1920);
        gap: calc(1.5rem * 1366 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1366 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1366 / 1920);
        width: 70%;
        line-height: calc(30px * 1366 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1366 / 1920);
        font-size: calc(1rem * 1366 / 1920);
        height: calc(2.5rem * 1366 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(635px * 1366 / 1920);
        width: calc(690px * 1366 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1366 / 1920);
        top: calc(120px * 1366 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1366 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1366 / 1920);
      }
    }

    @media screen and (max-width: 1280px) {
      main {
        height: 82vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1280 / 1920);
        margin-left: calc(10rem * 1280 / 1920);
        gap: calc(1.5rem * 1280 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1280 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1280 / 1920);
        width: 70%;
        line-height: calc(30px * 1280 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1280 / 1920);
        font-size: calc(1rem * 1280 / 1920);
        height: calc(2.5rem * 1280 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(635px * 1280 / 1920);
        width: calc(690px * 1280 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1280 / 1920);
        top: calc(120px * 1280 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1280 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1280 / 1920);
      }
    }

    @media screen and (max-width: 1024px) {
      main {
        height: 93vh;
      }

      .container-solucoes-roupacalcado {
        grid-template-columns: 60% 40%;
      }

      .container-solucoes-roupacalcado-left {
        margin-top: calc(3rem * 1024 / 1920);
        margin-left: calc(10rem * 1024 / 1920);
        gap: calc(1.5rem * 1024 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 {
        font-size: calc(2rem * 1024 / 1920);
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: calc(0.9375rem * 1024 / 1920);
        width: 70%;
        line-height: calc(30px * 1024 / 1920);
      }

      .container-solucoes-roupacalcado-left button {
        width: 40%;
        margin-left: calc(9rem * 1024 / 1920);
        font-size: calc(1rem * 1024 / 1920);
        height: calc(2.5rem * 1024 / 1920);
      }

      .container-solucoes-roupacalcado-right::after {
        content: '';
        height: calc(835px * 1024 / 1920);
        width: calc(890px * 1024 / 1920);
        position: absolute;
        z-index: 0;
        left: calc(1300px * 1024 / 1920);
        top: calc(120px * 1024 / 1920);
      }

      .container-solucoes-roupacalcado-right img {
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

      .chips-top>span {
        padding: .2rem .4rem;
        background-color: white;
        border: 1px solid #e3e3e3;
        border-radius: 10px;
        font-size: calc(1rem * 1024 / 1920);
      }

      .chips-down {
        gap: calc(0.5rem * 1024 / 1920);
      }
    }

    @media screen and (max-width: 820px) {
      main {
        height: 100%;
        background-color: #fff;
        padding-top: 2rem;
      }

      .container-solucoes-roupacalcado {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-solucoes-roupacalcado-left {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
      }

      .container-solucoes-roupacalcado-left h3 {
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 80%;
        line-height: 30px;
      }

      .container-solucoes-roupacalcado-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        font-size: 1rem;
        height: 3rem;
        margin-left: 0;
        width: 60%;
        background-color: #63c7f5;
        color: white;
      }

      .container-solucoes-roupacalcado-left button:hover {
        cursor: pointer;
        background-color: #2b8dba;
      }

      .container-solucoes-roupacalcado-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-solucoes-roupacalcado-right::after {
        display: none;
      }

      .container-solucoes-roupacalcado-right img {
        position: sticky;
        height: 400px;
        z-index: 1;
        margin-bottom: 2rem;
      }

      .chips {
        display: none;
      }
    }

    @media screen and (max-width: 620px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-solucoes-roupacalcado {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-solucoes-roupacalcado-left {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 2rem;
      }

      .container-solucoes-roupacalcado-left h3 {
        text-align: center;
        font-size: 1.5rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: 0.9375rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 80%;
        line-height: 30px;
      }

      .container-solucoes-roupacalcado-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        font-size: 1rem;
        height: 3rem;
        margin-left: 0;
        width: 60%;
        background-color: #63c7f5;
        color: white;
      }

      .container-solucoes-roupacalcado-left button:hover {
        cursor: pointer;
        background-color: #2b8dba;
      }

      .container-solucoes-roupacalcado-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-solucoes-roupacalcado-right::after {
        display: none;
      }

      .container-solucoes-roupacalcado-right img {
        position: sticky;
        height: 350px;
        z-index: 1;
        margin-bottom: 2rem;
      }

      .chips {
        display: none;
      }
    }

    @media screen and (max-width: 350px) {
      main {
        height: 100%;
        background-color: #fff;
      }

      .container-solucoes-roupacalcado {
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }

      .container-solucoes-roupacalcado-left {
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.5rem;
      }

      .container-solucoes-roupacalcado-left h3 {
        text-align: center;
        font-size: 1rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
      }

      .container-solucoes-roupacalcado-left h3 b {
        color: #2985b8;
        text-decoration: underline;
      }

      .container-solucoes-roupacalcado-left p {
        font-size: 0.7rem;
        font-family: Be Vietnam Pro, sans-serif;
        color: #4f4f50;
        text-align: justify;
        width: 80%;
        line-height: 20px;
      }

      .container-solucoes-roupacalcado-left button {
        border: none;
        border-radius: 10px;
        transition: .5s ease;
        font-size: .7rem;
        height: 2rem;
        margin-left: 0;
        width: 70%;
        background-color: #63c7f5;
        color: white;
      }

      .container-solucoes-roupacalcado-left button:hover {
        cursor: pointer;
        background-color: #2b8dba;
      }

      .container-solucoes-roupacalcado-right {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .container-solucoes-roupacalcado-right::after {
        display: none;
      }

      .container-solucoes-roupacalcado-right img {
        position: sticky;
        height: 250px;
        z-index: 1;
        margin-bottom: 2rem;
      }

      .chips {
        display: none;
      }
    }
  </style>
</div>
