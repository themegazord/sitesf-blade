<footer>
  <img src="{{ asset('imagens/Mobile/WhatsappIcon.png') }}" alt="" class="whatsapp-icon-footer"/>
  <span>Copyright ® 2024 Todos os direitos reservados</span>
  <span>Criado por SF Sistemas & UX Bayo</span>
  <style>
    footer {
      width: 100vw;
      background-color: white;
      display: flex;
      justify-content: space-around;
      font-family: Poppins, sans-serif;
      position: absolute;
      bottom: 0;
    }

    @media screen and (max-width: 2560px) {
      footer {
        font-size: calc(0.5rem * 2560 / 1440);
        padding: calc(0.1rem * 2560 / 1440);
      }

      .whatsapp-icon-footer {
        display: none;
      }
    }

    @media screen and (max-width: 1920px) {
      footer {
        font-size: calc(0.5rem * 1920 / 1440);
        padding: calc(0.1rem * 1920 / 1440);
      }
    }

    @media screen and (max-width: 1600px) {
      footer {
        font-size: calc(0.5rem * 1600 / 1440);
        padding: calc(0.1rem * 1600 / 1440);
      }
    }

    @media screen and (max-width: 1440px) {
      footer {
        font-size: calc(0.5rem * 1440 / 1440);
        padding: calc(0.1rem * 1440 / 1440);
      }
    }

    @media screen and (max-width: 1366px) {
      footer {
        font-size: calc(0.5rem * 1366 / 1440);
        padding: calc(0.1rem * 1366 / 1440);
      }
    }

    @media screen and (max-width: 1280px) {
      footer {
        font-size: calc(0.5rem * 1280 / 1440);
        padding: calc(0.1rem * 1280 / 1440);
      }
    }

    @media screen and (max-width: 1024px) {
      footer {
        font-size: calc(0.5rem * 1024 / 1440);
        padding: calc(0.1rem * 1024 / 1440);
      }
    }

    @media screen and (max-width: 820px) {
      footer {
        font-size: 0.5rem;
        padding: 0;
        justify-content: center;
        align-items: center;
        position: absolute;
        height: 3vh;
        bottom: 0;
      }

      .whatsapp-icon-footer {
        scale: 0.5;
        position: absolute;
        left: 10px;
        bottom: -20px;
      }
    }

    @media screen and (max-width: 600px) {
      footer {
        font-size: calc(0.5rem * 600 / 820);
      }

      .whatsapp-icon-footer {
        left: calc(10px * 600 / 820);
        bottom: -20px;
      }
    }

    @media screen and (max-width: 400px) {
      footer {
        font-size: calc(0.5rem * 400 / 820);
      }

      .whatsapp-icon-footer {
        left: calc(10px * 400 / 820);
        bottom: -20px;
      }
    }

    @media screen and (max-width: 300px) {
      footer {
        font-size: calc(0.5rem * 300 / 820);
      }

      .whatsapp-icon-footer {
        left: calc(10px * 300 / 820);
        bottom: -20px;
      }
    }
  </style>
</footer>
