<div class="bg-linear-to-br from-gray-900 via-gray-800 to-gray-900 text-white min-h-screen py-20 px-6 lg:px-16 relative overflow-hidden">
    <!-- Círculo decorativo de fundo -->
    <div class="absolute top-1/2 right-0 w-[800px] h-[800px] bg-cyan-500/20 rounded-full blur-3xl translate-x-1/2"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-start">
            <!-- Conteúdo de texto -->
            <div class="space-y-6 pt-8">
                <h1 class="text-5xl lg:text-6xl font-bold text-white mb-8 leading-tight">
                    Para <span class="text-cyan-400">Fábricas de Pequeno Porte</span>
                </h1>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Este módulo foi desenvolvido especialmente para atender às necessidades das <span class="font-semibold text-white">fábricas de
                    pequeno e médio porte</span>, como a sua! <span class="font-bold text-white">Com um processo mais objetivo, simples e rápido,
                    você terá controle total da sua produção, otimizando a eficiência, a qualidade e a
                    lucratividade do seu negócio</span>.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Com o SAFI, você terá controle total sobre seus processos, desde a definição das etapas de
                    produção até o resultado do produto final.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Gere ordens de produção de forma objetiva e eficiente, definindo a quantidade de produtos
                    a serem fabricados e os recursos necessários. Monitore o nível de estoque de todos os
                    materiais necessários à produção em tempo real. Receba alertas automáticos quando os
                    níveis de estoque estiverem baixos, evitando rupturas e garantindo que você sempre tenha
                    os materiais certos para produzir seus produtos.
                </p>

                <p class="text-gray-300 leading-relaxed text-lg">
                    Gere relatórios detalhados sobre o desempenho da sua produção, como tempo médio de
                    produção, custo de produção por produto e eficiência das etapas de produção. Utilize esses
                    dados para tomar decisões estratégicas e otimizar seus processos.
                </p>

                <div class="pt-8">
                    <x-button
                        label="Clique Aqui E Fale Com Nosso Time"
                        class="bg-cyan-400 hover:bg-cyan-500 text-gray-900 font-semibold px-8 py-4 rounded-lg transition-all duration-300 transform hover:scale-105"
                        link="https://wa.me/5567999832455"
                        external />
                </div>
            </div>

            <!-- Área da imagem com tags -->
            <div class="relative pt-8">
                <!-- Imagem principal -->
                <div class="relative z-10 mb-8">
                    <img
                        src="https://sitesf.br-se1.magaluobjects.com/FabPeqPorteImagem.png"
                        alt="Fábricas de Pequeno Porte"
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

        <!-- Footer -->
        <div class="max-w-7xl mx-auto mt-20 pt-8 border-t border-gray-700 flex justify-between items-center text-sm text-gray-400">
            <p>Copyright © 2024 Todos os direitos reservados</p>
            <p>Criado por: <span class="text-cyan-400">SF Sistemas</span></p>
        </div>
    </div>
</div>
