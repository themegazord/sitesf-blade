<div class="bg-linear-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20 px-6 lg:px-16 relative overflow-hidden">
  <!-- Círculo decorativo de fundo -->
  <div class="absolute top-1/2 right-0 w-[800px] h-[800px] bg-cyan-500/20 rounded-full blur-3xl translate-x-1/2"></div>

  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Conteúdo de texto -->
      <div class="space-y-8">
        <h2 class="text-5xl font-bold text-white mb-6">
          Serviços e Soluções
        </h2>

        <p class="text-gray-300 leading-relaxed mb-8">
          No dinamismo do mercado atual, a personalização é o <span class="font-semibold text-white">diferencial que impulsiona o sucesso</span>. Nossas soluções são cuidadosamente desenhadas para se alinhar com as necessidades específicas de cada segmento. Clique sobre o segmento para conhecer mais:
        </p>

        <!-- Lista de Serviços -->
        <div class="space-y-4">
          @foreach($servicos as $index => $servico)
          <a
            href="{{ route($servico['route']) }}"
            class="flex items-center gap-4 p-4 bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-lg hover:bg-gray-800 hover:border-gray-600 transition-all duration-300 cursor-pointer group"
            wire:key="servico-{{ $index }}">
            <div class="w-12 h-12 bg-linear-to-br from-cyan-400 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-cyan-400/30 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <div class="flex-1">
              <p class="text-gray-300 font-medium group-hover:text-white transition-colors">
                Para <span class="font-bold text-white">{{ $servico['nome'] }}</span>
              </p>
            </div>
            <div class="opacity-0 group-hover:opacity-100 transition-opacity">
              <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </div>
          </a>
          @endforeach
        </div>
      </div>

      <!-- Área da imagem com badges -->
      <div class="relative">
        <!-- Imagem principal -->
        <div class="relative z-10 transform hover:scale-105 transition-transform duration-500">
          <img
            src="{{ asset('imagens/Servicos/ImagemSolucaoRight.png') }}"
            alt="Equipe em reunião"
            class="w-full h-auto rounded-2xl shadow-2xl" />
        </div>

        <!-- Badge superior direita -->
        <div class="absolute top-4 -right-4 bg-gray-800 border border-gray-700 rounded-2xl shadow-2xl p-4 flex items-center gap-3 z-20 animate-bounce-slow">
          <div class="w-10 h-10 bg-linear-to-br from-green-400 to-green-500 rounded-full flex items-center justify-center shadow-lg shadow-green-400/30">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <p class="text-white font-semibold text-sm pr-2">
            O diferencial que leva ao <span class="text-green-400">sucesso!</span>
          </p>
        </div>

        <!-- Badge inferior esquerda -->
        <div class="absolute -bottom-4 -left-4 bg-gray-800 border border-gray-700 rounded-2xl shadow-2xl p-4 flex items-center gap-3 z-20">
          <div class="w-10 h-10 bg-linear-to-br from-cyan-400 to-cyan-500 rounded-full flex items-center justify-center shadow-lg shadow-cyan-400/30">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <p class="text-white font-semibold text-sm pr-2">
            Solução certa para o <span class="text-cyan-400">seu negócio!</span>
          </p>
        </div>

        <!-- Emojis flutuantes -->
        <div class="absolute -top-6 left-1/4 text-4xl animate-float z-20">
          💡
        </div>
        <div class="absolute bottom-1/4 -right-8 text-4xl animate-float-delayed z-20">
          🎯
        </div>

        <!-- Efeito de brilho/glow atrás da imagem -->
        <div class="absolute inset-0 bg-cyan-400 blur-3xl opacity-20 -z-10"></div>
      </div>
    </div>
  </div>

  <!-- Copyright -->
  <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400">
    <p>Copyright © 2024 Todos os direitos reservados</p>
    <p>Criado por: <span class="text-cyan-400">SF Sistemas</span></p>
  </div>
  <style>
    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    @keyframes float-delayed {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-15px);
      }
    }

    .animate-float {
      animation: float 3s ease-in-out infinite;
    }

    .animate-float-delayed {
      animation: float-delayed 3s ease-in-out infinite 1.5s;
    }

    .animate-bounce-slow {
      animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }
    }
  </style>
</div>
