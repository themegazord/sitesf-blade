<div class="bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white min-h-screen py-20 px-6 lg:px-16 relative overflow-hidden">
    <!-- Círculo decorativo de fundo -->
    <div class="absolute top-1/2 right-0 w-[800px] h-[800px] bg-cyan-500/20 rounded-full blur-3xl translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Conteúdo de texto -->
            <div class="space-y-6 pt-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                    Para <span class="text-cyan-400">Bares e Restaurantes</span>
                </h1>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Chega de pedidos anotados em papel amassado, pedidos perdidos e clientes insatisfeitos.
                    Com o <span class="font-semibold text-white">safi_mobile</span>, seus garçons e atendentes anotam pedidos
                    diretamente no celular, com rapidez e precisão. Personalizações, acompanhamentos,
                    observações e até o couvert são registrados em um piscar de olhos, eliminando o
                    risco de erros e garantindo que cada pedido seja preparado exatamente como o
                    cliente deseja.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Com o <span class="font-semibold text-white">safi_mobile</span>, seus garçons e atendentes passam menos tempo anotando
                    pedidos e mais tempo interagindo com os clientes, oferecendo um atendimento
                    impecável e criando experiências memoráveis. <span class="font-bold text-white">Clientes satisfeitos voltam sempre e
                    recomendam seu bar ou restaurante para os amigos</span>, impulsionando seu negócio e
                    aumentando seus lucros.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Além da versão mobile disponível para Android, o SAFI oferece uma versão desktop
                    completa para ser utilizada no balcão e caixa do seu estabelecimento.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Tudo isso com uma interface intuitiva e fácil de usar, mesmo para quem não tem
                    familiaridade com tecnologia e sistemas. Isso significa que seus funcionários podem
                    começar a usar o sistema rapidamente, após o treinamento.
                </p>

                <div class="pt-8">
                    <x-button
                        label="Clique Aqui Para Saber Mais"
                        link="https://wa.me/5567999832455"
                        external
                        class="bg-cyan-400 hover:bg-cyan-500 text-gray-900 font-bold px-10 py-4 rounded-lg transition-all duration-300 transform hover:scale-105"
                    />
                </div>
            </div>

            <!-- Área da imagem com tags -->
            <div class="relative pt-8">
                <!-- Imagem principal -->
                <div class="relative z-10 mb-8">
                    <img
                        src="{{ asset('imagens/Servicos/BarRestauranteImagem.png') }}"
                        alt="SAFI Mobile e Desktop"
                        class="w-full h-auto drop-shadow-2xl"
                    />

                    <!-- Efeito de brilho/glow atrás da imagem -->
                    <div class="absolute inset-0 bg-cyan-400 blur-3xl opacity-20 -z-10"></div>
                </div>

                <!-- Tags de categorias - abaixo da imagem -->
                <div class="flex flex-wrap gap-3 justify-center">
                    @foreach($tags as $tag)
                        <span class="bg-gray-800/90 backdrop-blur-sm border-2 border-cyan-400 text-cyan-400 font-bold px-6 py-2.5 rounded-full text-sm hover:bg-cyan-400 hover:text-gray-900 transition-all duration-300 cursor-default shadow-xl whitespace-nowrap">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400">
        <p>Copyright © 2024 Todos os direitos reservados</p>
        <p>Criado por: <span class="text-cyan-400">SF Sistemas</span></p>
    </div>
</div>
