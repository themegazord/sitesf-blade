<div class="bg-linear-to-br from-gray-900 via-gray-800 to-gray-900 text-white py-20 px-6 lg:px-16 relative overflow-hidden">
    <!-- Círculo decorativo de fundo -->
    <div class="absolute bottom-0 left-0 w-[800px] h-[800px] bg-gray-700 rounded-full opacity-20 -translate-x-1/3 translate-y-1/4"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <!-- Título -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-2">
                Conheça todos os
            </h2>
            <h3 class="text-4xl lg:text-5xl font-bold text-gray-300">
                Módulos do Sistema SAFI
            </h3>
        </div>

        <!-- Grid de Módulos -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($modulos as $modulo)
                <div class="bg-gray-800/50 backdrop-blur-sm border border-gray-700 rounded-lg hover:bg-gray-800 hover:border-gray-600 transition-all duration-300 p-8 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Ícone -->
                    <div class="mb-6">
                        @if($modulo['color'] === 'red')
                            <div class="w-16 h-16 bg-linear-to-br from-red-400 to-red-500 rounded-xl flex items-center justify-center shadow-lg shadow-red-500/30">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                            </div>
                        @elseif($modulo['color'] === 'blue')
                            <div class="w-16 h-16 bg-linear-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            </div>
                        @elseif($modulo['color'] === 'yellow')
                            <div class="w-16 h-16 bg-linear-to-br from-yellow-400 to-yellow-500 rounded-xl flex items-center justify-center shadow-lg shadow-yellow-500/30">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        @else
                            <div class="w-16 h-16 bg-linear-to-br from-cyan-400 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg shadow-cyan-500/30">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Título -->
                    <h4 class="text-xl font-bold text-white mb-4">
                        {{ $modulo['titulo'] }}
                    </h4>

                    <!-- Descrição -->
                    <p class="text-gray-300 leading-relaxed text-sm">
                        {{ $modulo['descricao'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Botão WhatsApp Flutuante -->
    <a
        href="https://wa.me/5567999999999"
        target="_blank"
        class="fixed bottom-8 right-8 bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-2xl hover:shadow-green-500/50 transition-all duration-300 transform hover:scale-110 z-50 group"
        aria-label="Fale conosco no WhatsApp"
    >
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
        </svg>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-2 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
            Fale Conosco
        </span>
    </a>
</div>
