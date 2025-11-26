<div class="bg-linear-to-br from-gray-900 via-gray-800 to-gray-90 min-h-screen py-20 px-6 lg:px-16 relative overflow-hidden">
  <!-- Forma decorativa azul -->
  <div class="absolute top-0 right-0 w-[800px] h-[800px] bg-gray-700 rounded-full opacity-20 translate-x-1/3 -translate-y-1/4"></div>

  <div class="max-w-7xl mx-auto relative z-10">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <!-- Conteúdo de texto -->
      <div class="space-y-6">
        <h1 class="text-5xl lg:text-6xl font-bold mb-8 text-white">
          Parceiros
        </h1>

        <p class="text-white leading-relaxed text-lg">
          Na <span class="font-semibold text-white">SF Sistemas</span>, nossa missão vai além de fornecer softwares de gestão.
          Acreditamos em construir parcerias sólidas e duradouras com nossos clientes,
          impulsionando o crescimento e o sucesso mútuo.
        </p>

        <p class="text-white leading-relaxed text-lg">
          Ao longo da nossa jornada, tivemos a honra de atender a empresas de diversos portes
          e segmentos, construindo uma carteira de clientes sólida e diversificada. Mais do que
          simplesmente fornecer um software, buscamos entender as necessidades específicas
          de cada negócio, criando soluções personalizadas que geram <span class="font-bold text-white">resultados concretos</span>.
        </p>

        <p class="text-white leading-relaxed text-lg">
          Entre em contato conosco hoje mesmo e descubra como podemos impulsionar o seu
          negócio!
        </p>

        <div class="pt-6">
          <x-button
            label="Clique Aqui E Fale Com Nosso Time"
            class="bg-cyan-400 hover:bg-cyan-500 text-gray-900 font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105"
            link="https://wa.me/5567999832455"
            external />

        </div>
      </div>

      <!-- Mockup da Home -->
      <div class="relative">
        <!-- Browser mockup -->
        <div class="relative bg-gray-900 rounded-2xl shadow-2xl overflow-hidden">
          <!-- Browser header -->
          <div class="bg-gray-800 px-4 py-3 flex items-center gap-2 border-b border-gray-700">
            <div class="flex gap-2">
              <div class="w-3 h-3 rounded-full bg-red-500"></div>
              <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
              <div class="w-3 h-3 rounded-full bg-green-500"></div>
            </div>
            <div class="flex-1 mx-4">
              <div class="bg-gray-700 rounded px-3 py-1 text-xs text-gray-400">
                sfsistemas.com.br
              </div>
            </div>
          </div>

          <!-- Iframe que mostra a home -->
          <div class="relative bg-gray-900 aspect-4/3 overflow-hidden">
            <iframe
              src="{{ route('home') }}"
              class="w-full h-full scale-50 origin-top-left"
              style="width: 200%; height: 200%;"
              scrolling="no"
              frameborder="0"></iframe>

            <!-- Overlay para bloquear cliques -->
            <div class="absolute inset-0 bg-transparent cursor-default"></div>
          </div>

          <!-- Brilho decorativo -->
          <div class="absolute inset-0 bg-linear-to-tr from-cyan-400/20 to-transparent pointer-events-none opacity-20 -z-10"></div>
        </div>
      </div>
    </div>

    <!-- Logo dos Parceiros -->
    <div class="mt-20">
      <div class="flex flex-wrap items-center justify-center gap-8 lg:gap-12 opacity-60">
        @foreach($parceiros as $parceiro)
        <div class="grayscale hover:grayscale-0 transition-all duration-300">
          <img
            src="{{ asset($parceiro['logo']) }}"
            alt="{{ $parceiro['nome'] }}"
            class="h-12 lg:h-16 w-auto object-contain" />
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <x-button link="https://wa.me/5567999832455" external target="_blank" class="btn-link fixed bottom-8 right-8 z-50 w-16 h-16 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-110 animate-pulse">
    <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
    </svg>
  </x-button>

  <!-- Footer -->
  <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400">
    <p>Copyright © 2024 Todos os direitos reservados</p>
    <p>Criado por: <span class="text-cyan-400">SF Sistemas</span></p>
  </div>
</div>
