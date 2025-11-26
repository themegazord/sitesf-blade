<nav x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-slate-900 border-b border-slate-800">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      {{-- Logo --}}
      <a href="/" class="shrink-0">
        <img
          alt="Logo SF Sistemas"
          class="h-10 w-auto"
          src='https://sitesf.br-se1.magaluobjects.com/Logo.png'
        />
      </a>

      {{-- Desktop Navigation --}}
      <div class="hidden md:flex items-center gap-8">
        @foreach([
          ['route' => 'home', 'label' => 'Início', 'href' => '/'],
          ['route' => 'modulos', 'label' => 'Módulos', 'href' => '/modulos'],
          ['route' => 'quemsomos', 'label' => 'Quem somos', 'href' => '/quemsomos'],
          ['route' => 'solucoes', 'label' => 'Serviços e Soluções', 'href' => '/solucoes'],
          ['route' => 'parceiros', 'label' => 'Parceiros', 'href' => '/parceiros'],
        ] as $link)
          <a
            href="{{ $link['href'] }}"
            @class([
              'text-white hover:text-primary transition-colors duration-200',
              'text-primary font-semibold' => $isRotaAtiva === $link['route']
            ])
          >
            {{ $link['label'] }}
          </a>
        @endforeach
      </div>

      {{-- Desktop Action Buttons --}}
      <div class="hidden md:flex items-center gap-3">
        <x-button
          wire:click="download('apk')"
          wire:loading.attr="disabled"
          label="Baixe nosso app"
          icon="o-arrow-down-tray"
          class="btn-primary"
          spinner
        />

        <x-button
          x-on:click="envio()"
          label="Fale Conosco"
          icon="o-chat-bubble-left-right"
          class="btn-outline"
        />
      </div>

      {{-- Mobile Menu Toggle --}}
      <button
        x-on:click="mobileMenuOpen = !mobileMenuOpen"
        class="md:hidden p-2 text-white hover:text-primary transition-colors"
        aria-label="Toggle menu"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path
            x-show="!mobileMenuOpen"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
          <path
            x-show="mobileMenuOpen"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12"
          />
        </svg>
      </button>
    </div>
  </div>

  {{-- Mobile Menu --}}
  <div
    x-show="mobileMenuOpen"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-1"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-1"
    x-on:click.outside="mobileMenuOpen = false"
    class="md:hidden bg-slate-800 border-t border-slate-700"
  >
    <div class="px-2 pt-2 pb-3 space-y-1">
      @foreach([
        ['route' => 'home', 'label' => 'Início', 'href' => '/'],
        ['route' => 'modulos', 'label' => 'Módulos', 'href' => '/modulos'],
        ['route' => 'quemsomos', 'label' => 'Quem somos', 'href' => '/quemsomos'],
        ['route' => 'solucoes', 'label' => 'Serviços e Soluções', 'href' => '/solucoes'],
        ['route' => 'parceiros', 'label' => 'Parceiros', 'href' => '/parceiros'],
      ] as $link)
        <a
          href="{{ $link['href'] }}"
          x-on:click="mobileMenuOpen = false"
          @class([
            'block px-3 py-2 rounded-md text-base font-medium transition-colors',
            'bg-primary text-slate-900' => $isRotaAtiva === $link['route'],
            'text-white hover:bg-slate-700' => $isRotaAtiva !== $link['route']
          ])
        >
          {{ $link['label'] }}
        </a>
      @endforeach

      {{-- Mobile Action Buttons --}}
      <div class="border-t border-slate-700 pt-2 mt-2 space-y-2">
        <x-button
          wire:click="download('apk')"
          wire:loading.attr="disabled"
          x-on:click="mobileMenuOpen = false"
          label="Baixe nosso app"
          icon="o-arrow-down-tray"
          class="btn-primary w-full"
          spinner
        />

        <x-button
          x-on:click="envio(); mobileMenuOpen = false"
          label="Fale Conosco"
          icon="o-chat-bubble-left-right"
          class="btn-outline w-full"
        />
      </div>
    </div>
  </div>
</nav>

@push('scripts')
<script>
  function envio() {
    const mensagem = encodeURI(
      'Olá 😊. Fiquei interessado no seu sistema, poderia me contar um pouco mais sobre?'
    );

    window.open(
      `https://api.whatsapp.com/send?phone=5567999832455&text=${mensagem}`,
      '_blank'
    );
  }
</script>
@endpush
