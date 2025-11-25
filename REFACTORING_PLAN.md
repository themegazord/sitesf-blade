# 📋 Plano de Refatoração e Melhorias de UI

## Visão Geral
Refatoração gradual da aplicação SF Sistemas para melhorar manutenibilidade, performance e experiência do usuário. O plano está dividido em **5 fases**, começando com melhorias rápidas e evoluindo para arquitetura mais robusta.

---

## 🎯 Objetivos Gerais

- ✅ Centralizar CSS (eliminar estilos inline)
- ✅ Melhorar responsividade (simplificar media queries)
- ✅ Aumentar acessibilidade (ARIA, contrast, focus states)
- ✅ Reutilizar componentes (DRY principle)
- ✅ Melhorar performance (otimizar assets)
- ✅ Padronizar design (consistência visual)

---

## 📊 Estrutura de Fases

| Fase | Foco | Complexidade | Tempo |
|------|------|--------------|-------|
| **Fase 1** | Preparação e organização | ⭐ | Rápido |
| **Fase 2** | Componentes reutilizáveis | ⭐⭐ | Médio |
| **Fase 3** | Sistema de design e tokens | ⭐⭐⭐ | Médio |
| **Fase 4** | Melhorias de performance | ⭐⭐⭐ | Médio |
| **Fase 5** | Acessibilidade e otimizações finais | ⭐⭐ | Rápido |

---

## 🔷 FASE 1: Instalação e Configuração do Tailwind

### Objetivo
Preparar o projeto para usar Tailwind CSS, removendo estilos inline e adicionando configuração robusta.

### 1.1 - Instalar Tailwind CSS
**Tarefas:**
- [ ] Instalar Tailwind via npm: `npm install -D tailwindcss postcss autoprefixer`
- [ ] Gerar arquivo de configuração: `npx tailwindcss init -p`
- [ ] Gerar `tailwind.config.js` e `postcss.config.js`

### 1.2 - Configurar Tailwind (tailwind.config.js)
**Arquivo:** `tailwind.config.js`

```javascript
/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        // Cores da marca SF Sistemas
        primary: {
          DEFAULT: '#63c7f5',
          dark: '#4a9ec7',
          light: '#8dd8fb',
        },
        gray: {
          50: '#f5f5f5',
          900: '#1e1e1e',
          800: '#2a2a2a',
          700: '#4f4f50',
          600: '#515151',
        },
        dark: '#1e1e1e',
      },
      fontFamily: {
        primary: ['Be Vietnam Pro', 'sans-serif'],
        secondary: ['Nunito', 'sans-serif'],
        tertiary: ['Poppins', 'sans-serif'],
      },
      fontSize: {
        xs: '0.75rem',
        sm: '0.875rem',
        base: '1rem',
        lg: '1.125rem',
        xl: '1.5rem',
        '2xl': '2rem',
      },
      spacing: {
        xs: '0.25rem',
        sm: '0.5rem',
        md: '1rem',
        lg: '1.5rem',
        xl: '2rem',
        '2xl': '3rem',
        '3xl': '4rem',
      },
      screens: {
        sm: '360px',
        md: '500px',
        lg: '820px',
        xl: '1024px',
        '2xl': '1440px',
        '3xl': '1920px',
      },
      boxShadow: {
        sm: '0 1px 2px rgba(0,0,0,0.1)',
        md: '0 4px 6px rgba(0,0,0,0.1)',
        lg: '0 10px 15px rgba(0,0,0,0.1)',
      },
      borderRadius: {
        sm: '4px',
        md: '8px',
        lg: '12px',
      },
      animation: {
        fadeIn: 'fadeIn 0.3s ease-in-out',
        slideUp: 'slideUp 0.3s ease-in-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(10px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [],
}
```

**Tarefas:**
- [ ] Criar `tailwind.config.js` com configurações customizadas
- [ ] Definir cores, fonts e breakpoints da marca
- [ ] Adicionar extensões e plugins necessários

### 1.3 - Atualizar app.css para Tailwind
**Arquivo:** `resources/css/app.css`

```css
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Customizações adicionais */
@layer base {
  html {
    @apply scroll-smooth;
  }

  body {
    @apply font-secondary bg-dark text-gray-50;
  }

  h1, h2, h3, h4, h5, h6 {
    @apply font-primary font-bold;
  }

  a, button {
    @apply transition-all duration-300;
  }
}

@layer components {
  .btn {
    @apply inline-block px-lg py-sm rounded-md font-semibold text-center cursor-pointer border-none transition-all;
  }

  .btn-primary {
    @apply bg-primary text-dark hover:bg-primary-dark hover:-translate-y-0.5 hover:shadow-md;
  }

  .btn-secondary {
    @apply bg-gray-700 text-gray-50 hover:bg-gray-800 hover:-translate-y-0.5 hover:shadow-md;
  }
}
```

**Tarefas:**
- [ ] Remover CSS antigo de app.css
- [ ] Importar as 3 diretivas do Tailwind
- [ ] Adicionar customizações em @layer

### 1.4 - Atualizar Layout Principal
**Arquivo:** `resources/views/components/layouts/app.blade.php`

Remover imports de Bootstrap e adicionar Tailwind:
```blade
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
    {{ $slot }}
    <x-footer />
</body>
</html>
```

**Tarefas:**
- [ ] Remover Bootstrap CDN
- [ ] Manter apenas Vite imports
- [ ] Verificar que Tailwind está sendo buildado

---

## 🔶 FASE 2: Componentes Reutilizáveis com Tailwind

### Objetivo
Criar componentes Blade reutilizáveis usando classes Tailwind, eliminando código duplicado.

### 2.1 - Componente de Botão
**Arquivo:** `resources/views/components/button.blade.php`

```blade
@props([
    'variant' => 'primary',
    'href' => '#',
    'type' => 'link', // 'link' ou 'button'
])

@if($type === 'link')
  <a
    href="{{ $href }}"
    @class([
      'inline-block px-lg py-sm rounded-md font-semibold text-center cursor-pointer transition-all duration-300',
      'bg-primary text-dark hover:bg-primary-dark hover:-translate-y-0.5 hover:shadow-md' => $variant === 'primary',
      'bg-gray-700 text-gray-50 hover:bg-gray-800 hover:-translate-y-0.5 hover:shadow-md' => $variant === 'secondary',
      'bg-transparent text-primary border-2 border-primary hover:bg-primary hover:text-dark' => $variant === 'outline',
    ])
    {{ $attributes }}
  >
    {{ $slot }}
  </a>
@else
  <button
    type="button"
    @class([
      'inline-block px-lg py-sm rounded-md font-semibold text-center cursor-pointer transition-all duration-300',
      'bg-primary text-dark hover:bg-primary-dark hover:-translate-y-0.5 hover:shadow-md' => $variant === 'primary',
      'bg-gray-700 text-gray-50 hover:bg-gray-800 hover:-translate-y-0.5 hover:shadow-md' => $variant === 'secondary',
      'bg-transparent text-primary border-2 border-primary hover:bg-primary hover:text-dark' => $variant === 'outline',
    ])
    {{ $attributes }}
  >
    {{ $slot }}
  </button>
@endif
```

**Uso:**
```blade
<x-button variant="primary" href="/contact">Contato</x-button>
<x-button variant="secondary" type="button">Enviar</x-button>
<x-button variant="outline">Saiba Mais</x-button>
```

**Tarefas:**
- [ ] Criar `resources/views/components/button.blade.php`
- [ ] Testar em uma página
- [ ] Refatorar botões existentes

### 2.2 - Componente de Card
**Arquivo:** `resources/views/components/card.blade.php`

```blade
@props([
    'title' => null,
    'image' => null,
    'imageAlt' => '',
])

<div {{ $attributes->merge(['class' => 'rounded-lg overflow-hidden bg-gray-800 shadow-md hover:shadow-lg transition-shadow duration-300']) }}>
  @if($image)
    <img
      src="{{ $image }}"
      alt="{{ $imageAlt ?? $title }}"
      class="w-full h-auto object-cover"
      loading="lazy"
    >
  @endif

  <div class="p-lg lg:p-2xl">
    @if($title)
      <h3 class="text-lg lg:text-xl font-primary font-bold text-primary mb-md">
        {{ $title }}
      </h3>
    @endif

    <div class="text-gray-50 space-y-md">
      {{ $slot }}
    </div>
  </div>
</div>
```

**Uso:**
```blade
<x-card
  title="Módulo de Vendas"
  image="/imagens/vendas.jpg"
  imageAlt="Sistema de vendas"
>
  <p>Controle completo de vendas e estoque</p>
</x-card>
```

**Tarefas:**
- [ ] Criar `resources/views/components/card.blade.php`
- [ ] Refatorar páginas para usar card component
- [ ] Testar responsividade

### 2.3 - Componente de Seção Hero
**Arquivo:** `resources/views/components/hero-section.blade.php`

```blade
@props([
    'title',
    'subtitle' => null,
    'backgroundImage' => null,
])

<section
  {{ $attributes->merge(['class' => 'min-h-screen lg:min-h-[80vh] flex items-center justify-center overflow-hidden']) }}
  @if($backgroundImage) style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;" @endif
>
  <div class="absolute inset-0 bg-dark/70"></div>

  <div class="relative z-10 container mx-auto px-md lg:px-3xl">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3xl items-center">
      <div class="space-y-lg">
        <h1 class="text-3xl lg:text-4xl font-primary font-bold text-white leading-tight">
          {{ $title }}
        </h1>

        @if($subtitle)
          <p class="text-lg text-gray-300">
            {{ $subtitle }}
          </p>
        @endif

        <div class="pt-lg">
          {{ $slot }}
        </div>
      </div>
    </div>
  </div>
</section>
```

**Uso:**
```blade
<x-hero-section
  title="Bem-vindo à SF Sistemas"
  subtitle="Seu ERP completo para negócios"
  backgroundImage="/imagens/hero.jpg"
>
  <x-button variant="primary" href="/solucoes">
    Explorar Soluções
  </x-button>
</x-hero-section>
```

**Tarefas:**
- [ ] Criar `resources/views/components/hero-section.blade.php`
- [ ] Reutilizar em home e solucoes
- [ ] Testar em mobile e desktop

### 2.4 - Componente de Grid de Módulos
**Arquivo:** `resources/views/components/modules-grid.blade.php`

```blade
@props([
    'modules' => [],
])

<section {{ $attributes->merge(['class' => 'py-3xl lg:py-4xl bg-dark']) }}>
  <div class="container mx-auto px-md lg:px-3xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg lg:gap-2xl">
      @forelse($modules as $module)
        <x-card
          :title="$module['name']"
          :image="$module['image'] ?? null"
          :imageAlt="$module['name']"
        >
          <p class="text-sm lg:text-base">{{ $module['description'] ?? '' }}</p>

          @if(isset($module['features']))
            <ul class="mt-md space-y-sm list-disc list-inside text-xs lg:text-sm text-gray-300">
              @foreach($module['features'] as $feature)
                <li>{{ $feature }}</li>
              @endforeach
            </ul>
          @endif
        </x-card>
      @empty
        <p class="col-span-full text-center text-gray-400">Nenhum módulo disponível</p>
      @endforelse
    </div>
  </div>
</section>
```

**Uso:**
```blade
<x-modules-grid :modules="$modules" />
```

**Tarefas:**
- [ ] Criar `resources/views/components/modules-grid.blade.php`
- [ ] Refatorar `modulos.blade.php` para usar o componente
- [ ] Testar layout grid em diferentes telas

### 2.5 - Componente de Imagem Responsiva
**Arquivo:** `resources/views/components/image.blade.php`

```blade
@props([
    'src',
    'alt' => '',
    'width' => null,
    'height' => null,
])

<img
  src="{{ $src }}"
  alt="{{ $alt }}"
  @if($width) width="{{ $width }}" @endif
  @if($height) height="{{ $height }}" @endif
  class="w-full h-auto object-cover"
  loading="lazy"
  {{ $attributes }}
/>
```

**Tarefas:**
- [ ] Criar `resources/views/components/image.blade.php`
- [ ] Usar em todos os `<img>` tags existentes

---

## 🟠 FASE 3: Componentes Avançados e Utilidades

### Objetivo
Criar componentes mais complexos e utilitários para melhorar ainda mais a reutilização.

### 3.1 - Componente de Input (Blade)
**Arquivo:** `resources/views/components/input.blade.php`

```blade
@props([
    'label' => null,
    'name',
    'type' => 'text',
    'placeholder' => '',
    'value' => null,
    'error' => null,
    'required' => false,
])

<div class="space-y-sm">
  @if($label)
    <label for="{{ $name }}" class="block text-sm font-semibold text-gray-50">
      {{ $label }}
      @if($required)
        <span class="text-red-500">*</span>
      @endif
    </label>
  @endif

  <input
    id="{{ $name }}"
    type="{{ $type }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ $value ?? old($name) }}"
    @class([
      'w-full px-md py-sm rounded-md border-2 bg-gray-900 text-gray-50 transition-colors duration-300',
      'border-gray-700 focus:border-primary focus:outline-none' => !$error,
      'border-red-500 focus:border-red-600' => $error,
    ])
    @required($required)
    {{ $attributes }}
  />

  @if($error)
    <p class="text-sm text-red-500 mt-xs">{{ $error }}</p>
  @endif
</div>
```

**Tarefas:**
- [ ] Criar `resources/views/components/input.blade.php`
- [ ] Testar com validações
- [ ] Usar em formulários

### 3.2 - Componente de Textarea
**Arquivo:** `resources/views/components/textarea.blade.php`

```blade
@props([
    'label' => null,
    'name',
    'placeholder' => '',
    'value' => null,
    'error' => null,
    'required' => false,
    'rows' => 4,
])

<div class="space-y-sm">
  @if($label)
    <label for="{{ $name }}" class="block text-sm font-semibold text-gray-50">
      {{ $label }}
      @if($required)
        <span class="text-red-500">*</span>
      @endif
    </label>
  @endif

  <textarea
    id="{{ $name }}"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    rows="{{ $rows }}"
    @class([
      'w-full px-md py-sm rounded-md border-2 bg-gray-900 text-gray-50 resize-vertical transition-colors duration-300',
      'border-gray-700 focus:border-primary focus:outline-none' => !$error,
      'border-red-500 focus:border-red-600' => $error,
    ])
    @required($required)
    {{ $attributes }}
  >{{ $value ?? old($name) }}</textarea>

  @if($error)
    <p class="text-sm text-red-500 mt-xs">{{ $error }}</p>
  @endif
</div>
```

**Tarefas:**
- [ ] Criar `resources/views/components/textarea.blade.php`
- [ ] Testar responsividade
- [ ] Usar em formulários de contato

### 3.3 - Componente de Navbar Refatorado com Tailwind
**Arquivo:** `resources/views/components/navbar.blade.php` (refatorado)

```blade
@props([
    'variant' => 'default', // 'default' ou 'light'
])

<nav @class([
    'sticky top-0 z-50 transition-colors duration-300 backdrop-blur-sm',
    'bg-dark/95 border-b border-gray-700' => $variant === 'default',
    'bg-white/95 border-b border-gray-200' => $variant === 'light',
])>
  <div class="container mx-auto px-md lg:px-3xl">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <a href="/" class="flex-shrink-0">
        <span @class([
          'text-xl lg:text-2xl font-primary font-bold',
          'text-white' => $variant === 'default',
          'text-dark' => $variant === 'light',
        ])>SF Sistemas</span>
      </a>

      <!-- Menu Desktop -->
      <ul class="hidden lg:flex items-center space-x-lg">
        <li><a href="/modulos" class="hover:text-primary transition-colors">Módulos</a></li>
        <li><a href="/solucoes" class="hover:text-primary transition-colors">Soluções</a></li>
        <li><a href="/quemsomos" class="hover:text-primary transition-colors">Sobre</a></li>
        <li><a href="/parceiros" class="hover:text-primary transition-colors">Parceiros</a></li>
      </ul>

      <!-- CTA Button -->
      <div class="hidden lg:block">
        <x-button variant="primary" href="/contato">Contato</x-button>
      </div>

      <!-- Menu Mobile Toggle -->
      <button
        class="lg:hidden p-md hover:bg-gray-700 rounded-md transition-colors"
        @click="navOpen = !navOpen"
        aria-label="Menu"
      >
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>

    <!-- Menu Mobile -->
    <div class="lg:hidden overflow-hidden max-h-0 transition-all duration-300" x-show="navOpen" x-transition>
      <ul class="flex flex-col space-y-md p-md border-t border-gray-700">
        <li><a href="/modulos" class="hover:text-primary transition-colors">Módulos</a></li>
        <li><a href="/solucoes" class="hover:text-primary transition-colors">Soluções</a></li>
        <li><a href="/quemsomos" class="hover:text-primary transition-colors">Sobre</a></li>
        <li><a href="/parceiros" class="hover:text-primary transition-colors">Parceiros</a></li>
        <li>
          <x-button variant="primary" href="/contato" class="w-full">
            Contato
          </x-button>
        </li>
      </ul>
    </div>
  </div>
</nav>

@push('scripts')
  <script>
    function navbar() {
      return {
        navOpen: false,
      }
    }
  </script>
@endpush
```

**Tarefas:**
- [ ] Refatorar `resources/views/components/navbar.blade.php`
- [ ] Remover CSS inline antigo
- [ ] Testar em diferentes rotas e resoluções

### 3.4 - Componente de Footer Refatorado
**Arquivo:** `resources/views/components/footer.blade.php` (refatorado)

```blade
<footer class="bg-gray-900 border-t border-gray-700 py-3xl lg:py-4xl mt-3xl">
  <div class="container mx-auto px-md lg:px-3xl">
    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-2xl mb-3xl">
      <!-- Company Info -->
      <div class="space-y-md">
        <h4 class="text-lg font-primary font-bold text-primary">SF Sistemas</h4>
        <p class="text-sm text-gray-400">
          Soluções ERP completas para sua empresa.
        </p>
      </div>

      <!-- Links Úteis -->
      <div>
        <h5 class="font-primary font-bold text-white mb-lg">Produtos</h5>
        <ul class="space-y-sm text-sm text-gray-400">
          <li><a href="/solucoes" class="hover:text-primary transition-colors">Soluções</a></li>
          <li><a href="/modulos" class="hover:text-primary transition-colors">Módulos</a></li>
        </ul>
      </div>

      <!-- Empresa -->
      <div>
        <h5 class="font-primary font-bold text-white mb-lg">Empresa</h5>
        <ul class="space-y-sm text-sm text-gray-400">
          <li><a href="/quemsomos" class="hover:text-primary transition-colors">Quem Somos</a></li>
          <li><a href="/parceiros" class="hover:text-primary transition-colors">Parceiros</a></li>
        </ul>
      </div>

      <!-- Contato -->
      <div>
        <h5 class="font-primary font-bold text-white mb-lg">Contato</h5>
        <ul class="space-y-sm text-sm text-gray-400">
          <li><a href="tel:+551199999999" class="hover:text-primary transition-colors">(11) 9999-9999</a></li>
          <li><a href="mailto:contato@sfsistemas.com" class="hover:text-primary transition-colors">contato@sfsistemas.com</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 pt-2xl flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
      <p>&copy; {{ now()->year }} SF Sistemas. Todos os direitos reservados.</p>
      <div class="flex gap-lg mt-md md:mt-0">
        <a href="#" class="hover:text-primary transition-colors">Privacidade</a>
        <a href="#" class="hover:text-primary transition-colors">Termos</a>
      </div>
    </div>
  </div>
</footer>
```

**Tarefas:**
- [ ] Refatorar `resources/views/components/footer.blade.php`
- [ ] Remover posicionamento absoluto
- [ ] Testar responsividade

### 3.5 - Componente de Seção com Decoração
**Arquivo:** `resources/views/components/decorated-section.blade.php`

```blade
@props([
    'title' => null,
    'subtitle' => null,
    'bgColor' => 'dark', // 'dark' ou 'light'
])

<section @class([
    'py-3xl lg:py-4xl relative overflow-hidden',
    'bg-dark text-gray-50' => $bgColor === 'dark',
    'bg-gray-50 text-dark' => $bgColor === 'light',
])>
  <!-- Decoração de fundo -->
  <div class="absolute -top-20 -right-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl"></div>
  <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-primary/5 rounded-full blur-3xl"></div>

  <div class="container mx-auto px-md lg:px-3xl relative z-10">
    @if($title || $subtitle)
      <div class="text-center mb-3xl">
        @if($title)
          <h2 class="text-3xl lg:text-4xl font-primary font-bold mb-lg">
            {{ $title }}
          </h2>
        @endif
        @if($subtitle)
          <p class="text-lg lg:text-xl text-gray-400 max-w-2xl mx-auto">
            {{ $subtitle }}
          </p>
        @endif
      </div>
    @endif

    {{ $slot }}
  </div>
</section>
```

**Tarefas:**
- [ ] Criar `resources/views/components/decorated-section.blade.php`
- [ ] Reutilizar em múltiplas páginas

---

## 🟡 FASE 4: Refatoração de Páginas

### Objetivo
Refatorar cada página removendo estilos inline e usando componentes Tailwind reutilizáveis.

### 4.1 - Refatorar Home Page
**Arquivo:** `resources/views/livewire/home.blade.php`

**Antes:** ~1000 linhas com `<style>` block inline

**Depois:**
```blade
<x-hero-section
  title="Bem-vindo à SF Sistemas"
  subtitle="Sua solução ERP completa"
  backgroundImage="/imagens/hero.jpg"
>
  <x-button variant="primary" href="/solucoes">
    Conheça Nossas Soluções
  </x-button>
</x-hero-section>

<x-decorated-section title="Por que escolher SF Sistemas?" subtitle="Mais de 15 anos de experiência">
  <div class="grid grid-cols-1 md:grid-cols-3 gap-2xl">
    <x-card title="Confiabilidade">
      <p>Sistemas robustos e seguros para seu negócio</p>
    </x-card>
    <x-card title="Suporte">
      <p>Equipe dedicada 24/7 para ajudar</p>
    </x-card>
    <x-card title="Inovação">
      <p>Sempre atualizado com as últimas tecnologias</p>
    </x-card>
  </div>
</x-decorated-section>
```

**Tarefas:**
- [ ] Refatorar home.blade.php
- [ ] Remover todos os `<style>` tags
- [ ] Remover decorações inline (cactus, brick)
- [ ] Usar Tailwind para animações

### 4.2 - Refatorar Modulos Page
**Arquivo:** `resources/views/livewire/modulos.blade.php`

Refatorar usando `<x-modules-grid>` component.

**Tarefas:**
- [ ] Refatorar modulos.blade.php
- [ ] Remover CSS inline
- [ ] Usar accordion do Tailwind ou custom

### 4.3 - Refatorar Solucoes (Index)
**Arquivo:** `resources/views/livewire/ser-sol.blade.php`

```blade
<x-hero-section
  title="Soluções Especializadas"
  subtitle="Para cada segmento de negócio"
/>

<x-decorated-section :bgColor="'light'">
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-3xl">
    <div class="space-y-lg">
      @foreach($solutions as $solution)
        <div class="flex items-start space-x-md p-lg rounded-lg hover:bg-gray-100 transition-colors cursor-pointer">
          <svg class="w-6 h-6 text-primary flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 24 24">
            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/>
          </svg>
          <div>
            <h3 class="font-primary font-bold text-lg text-dark">{{ $solution['name'] }}</h3>
            <p class="text-gray-600 text-sm">{{ $solution['description'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="hidden lg:block">
      <img src="/imagens/solucoes.jpg" alt="Soluções" class="rounded-lg w-full h-auto object-cover">
    </div>
  </div>
</x-decorated-section>
```

**Tarefas:**
- [ ] Refatorar ser-sol.blade.php
- [ ] Criar grid responsivo
- [ ] Remover CSS inline

### 4.4 - Refatorar Páginas de Solução (Detalhe)
**Padrão para:** bar-restaurante.blade.php, supermercadomercearia.blade.php, etc.

```blade
<x-hero-section
  title="{{ $solution['title'] }}"
  subtitle="{{ $solution['subtitle'] }}"
/>

<section class="py-3xl lg:py-4xl">
  <div class="container mx-auto px-md lg:px-3xl">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3xl items-center">
      <div class="space-y-lg">
        <h2 class="text-3xl font-primary font-bold text-white">
          {{ $solution['title'] }}
        </h2>
        <p class="text-gray-300 text-lg">
          {{ $solution['description'] }}
        </p>
        <x-button variant="primary" href="javascript:envio()">
          Solicitar Demonstração
        </x-button>
      </div>
      <img src="{{ $solution['image'] }}" alt="{{ $solution['title'] }}" class="rounded-lg w-full h-auto object-cover">
    </div>
  </div>
</section>

<x-decorated-section title="Funcionalidades">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2xl">
    @foreach($solution['features'] as $feature)
      <x-card :title="$feature['name']">
        <p>{{ $feature['description'] }}</p>
      </x-card>
    @endforeach
  </div>
</x-decorated-section>
```

**Tarefas:**
- [ ] Refatorar todas as 8 páginas de solução
- [ ] Remover duplicação de CSS
- [ ] Usar template pattern

### 4.5 - Refatorar Quem Somos
**Arquivo:** `resources/views/livewire/quem-somos.blade.php`

**Tarefas:**
- [ ] Refatorar quem-somos.blade.php
- [ ] Remover decorações inline
- [ ] Usar componentes Tailwind

### 4.6 - Refatorar Parceiros
**Arquivo:** `resources/views/livewire/parceiros.blade.php`

```blade
<x-hero-section
  title="Nossos Parceiros"
  subtitle="Empresas que confiam em SF Sistemas"
/>

<section class="py-3xl lg:py-4xl bg-dark">
  <div class="container mx-auto px-md lg:px-3xl">
    <div class="flex flex-wrap justify-center items-center gap-2xl lg:gap-3xl">
      @foreach($partners as $partner)
        <div class="flex-shrink-0 h-20 lg:h-24 flex items-center">
          <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" class="max-h-full max-w-xs object-contain filter grayscale hover:grayscale-0 transition-all duration-300">
        </div>
      @endforeach
    </div>
  </div>
</section>
```

**Tarefas:**
- [ ] Refatorar parceiros.blade.php
- [ ] Criar scroll responsivo de logos

---

## 🟢 FASE 5: Performance, Acessibilidade e Finalizações

### Objetivo
Otimizar performance, melhorar acessibilidade e garantir qualidade final do projeto.

### 5.1 - Otimizar Imagens
**Tarefas:**
- [ ] Converter imagens para WebP (com fallback PNG/JPG)
- [ ] Comprimir imagens usando TinyPNG ou ImageOptim
- [ ] Implementar lazy loading com `loading="lazy"`
- [ ] Criar variantes de imagem para diferentes resoluções
- [ ] Documentar diretório de imagens otimizadas

### 5.2 - Otimizar JavaScript e Fonts
**Tarefas:**
- [ ] Centralizar scripts em `resources/js/main.js`
- [ ] Remover código jQuery duplicado
- [ ] Configurar fonts localmente (otimizar woff2)
- [ ] Implementar `font-display: swap` para fonts web
- [ ] Testar Lighthouse performance

### 5.3 - Acessibilidade ARIA
**Tarefas:**
- [ ] Adicionar `aria-label` em ícones (navbar, botões)
- [ ] Adicionar `aria-expanded` em menus mobile
- [ ] Adicionar `role="navigation"` em navbars
- [ ] Adicionar `aria-hidden="true"` em decorações visuais
- [ ] Melhorar `alt` em todas as imagens (descritivo, não vago)
- [ ] Adicionar `aria-live="polite"` em mensagens dinâmicas

**Exemplo:**
```blade
<!-- Antes -->
<img src="/icon.svg" alt="">

<!-- Depois -->
<img src="/icon.svg" alt="Ícone de menu para navegação">

<!-- Com aria-label -->
<button aria-label="Abrir menu de navegação" @click="navOpen = !navOpen">
  <svg aria-hidden="true"><!-- ... --></svg>
</button>
```

**Tarefas:**
- [ ] Auditar todas as páginas para ARIA
- [ ] Validar com acessibilidade checker

### 5.4 - Focus States e Interatividade
Tailwind já fornece focus states, mas precisamos garantir visibilidade:

```blade
<!-- Em app.css -->
@layer base {
  /* Focus visível para teclado */
  :focus-visible {
    @apply outline-2 outline-offset-2 outline-primary;
  }
}
```

**Tarefas:**
- [ ] Adicionar focus states em botões e links
- [ ] Testar navegação com Tab/Shift+Tab
- [ ] Garantir ordem lógica de tab (tabindex)
- [ ] Testar com teclado apenas

### 5.5 - Contrast e Validação de Cores
**Tarefas:**
- [ ] Testar contrast ratio com WCAG AAA (4.5:1 para texto)
- [ ] Usar [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/)
- [ ] Documentar decisões de paleta
- [ ] Testar modo dark (já implementado)

**Paleta Current:**
- Texto em dark: `#f5f5f5` em `#1e1e1e` ✅ Ratio: 18:1
- Primary accent: `#63c7f5` em `#1e1e1e` ✅ Ratio: 7.5:1

### 5.6 - Mobile Accessibility
**Tarefas:**
- [ ] Garantir target size mínimo de 44x44px (iOS) / 48x48dp (Android)
- [ ] Verificar espaçamento adequado entre elementos
- [ ] Testar em leitores de tela mobile (VoiceOver, TalkBack)
- [ ] Validar landmarks HTML5 (`<nav>`, `<main>`, `<footer>`, etc)
- [ ] Testar viewport e zoom

### 5.7 - Validação W3C e Lighthouse
**Tarefas:**
- [ ] Validar HTML5 com [W3C Validator](https://validator.w3.org/)
- [ ] Validar CSS com [W3C CSS Validator](https://jigsaw.w3.org/css-validator/)
- [ ] Rodar Lighthouse audit no DevTools
- [ ] Almejar:
  - Performance: 90+
  - Accessibility: 95+
  - Best Practices: 95+
  - SEO: 95+

**Comando:**
```bash
npm run build
# Lighthouse audit via Chrome DevTools
```

### 5.8 - Testes Cross-browser
**Tarefas:**
- [ ] Chrome/Chromium (versões atuais)
- [ ] Firefox (versões atuais)
- [ ] Safari (Mac, iOS)
- [ ] Edge (Windows)
- [ ] Testar em 360px, 768px, 1024px, 1440px, 1920px resoluções

### 5.9 - Testes com Ferramentas
**Tarefas:**
- [ ] [axe DevTools](https://www.deque.com/axe/devtools/) - Acessibilidade
- [ ] [Wave](https://wave.webaim.org/) - Acessibilidade avançada
- [ ] [Lighthouse](https://developers.google.com/web/tools/lighthouse) - Performance
- [ ] [PageSpeed Insights](https://pagespeed.web.dev/) - Performance campo
- [ ] [GTmetrix](https://gtmetrix.com/) - Performance detalhado

### 5.10 - Documentação Final
**Criar arquivo:** `DESIGN_SYSTEM.md`

```markdown
# SF Sistemas - Design System

## Cores
- Primary: #63c7f5
- Dark: #1e1e1e
- Gray scale: 50, 600, 700, 800, 900
- Estados: success, warning, danger

## Tipografia
- Headlines: Be Vietnam Pro (700)
- Body: Nunito
- Footer: Poppins

## Espaçamento
Usar variáveis Tailwind: xs, sm, md, lg, xl, 2xl, 3xl

## Breakpoints
- sm: 360px
- md: 500px
- lg: 820px
- xl: 1024px
- 2xl: 1440px
- 3xl: 1920px

## Componentes Disponíveis
- x-button (variants: primary, secondary, outline)
- x-card (com título, imagem, conteúdo)
- x-hero-section
- x-input
- x-textarea
- x-decorated-section
- x-modules-grid
- x-navbar
- x-footer
```

**Tarefas:**
- [ ] Criar DESIGN_SYSTEM.md
- [ ] Documentar padrões de uso
- [ ] Criar guia para novos desenvolvedores

### 5.11 - Deploy e Monitoramento
**Tarefas:**
- [ ] Testar build em produção: `npm run build`
- [ ] Verificar file sizes com `du -h`
- [ ] Monitorar performance com Web Vitals
- [ ] Configurar alertas no Vercel/Netlify
- [ ] Backup do código versão anterior

---

## 📝 Exemplos de Refatoração com Tailwind

### Home Page - Antes vs Depois

**ANTES:** ~1000+ linhas
```blade
<div class="container-home">
  <style>
    .container-home {
      background: #1e1e1e;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: calc(3rem * 1920 / 1280);
      min-height: 80vh;
      padding: calc(2rem * 1920 / 1280);
    }
    .container-home h1 {
      font-size: calc(2rem * 1920 / 1280);
      font-family: 'Be Vietnam Pro';
      font-weight: 700;
      color: #ffffff;
    }
    @media (max-width: 820px) {
      .container-home {
        grid-template-columns: 1fr;
        min-height: 94vh;
      }
    }
  </style>
  <div>
    <h1>{{ $titulo }}</h1>
    <p>{{ $subtitulo }}</p>
  </div>
</div>
```

**DEPOIS:** ~20 linhas
```blade
<x-hero-section
  title="SF Sistemas"
  subtitle="Sua solução ERP completa"
  backgroundImage="/imagens/hero-home.jpg"
>
  <x-button variant="primary" href="/solucoes">
    Conheça Nossas Soluções
  </x-button>
</x-hero-section>
```

**Benefícios:**
- ✅ 95% menos código
- ✅ Sem CSS inline duplicado
- ✅ Totalmente responsivo (automático)
- ✅ Reutilizável em outras páginas

### Módulos Page - Antes vs Depois

**ANTES:** Bootstrap accordion + CSS inline
```blade
<div class="container">
  <style>
    .modulos-grid { /* ... 200+ linhas ... */ }
    .modulo-card { /* ... */ }
  </style>
  <div class="accordion" id="accordionExample">
    @foreach($modulos as $key => $modulo)
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button">
            {{ $modulo['nome'] }}
          </button>
        </h2>
        <div class="accordion-collapse">
          <div class="accordion-body">
            {{ $modulo['descricao'] }}
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
```

**DEPOIS:** Componente Tailwind simples
```blade
<x-modules-grid :modules="$modules" />

<!-- Component interno usa grid responsivo puro -->
```

### Solução Detalhe - Antes vs Depois

**ANTES:** ~800 linhas com várias `<style>` blocks
```blade
<!-- HTML complexo com classes inconsistentes -->
<!-- CSS duplicado com cálculos estranhos -->
```

**DEPOIS:** ~50 linhas total
```blade
<x-hero-section :title="$solucao->title" :subtitle="$solucao->subtitle" />

<section class="py-3xl lg:py-4xl">
  <div class="container mx-auto px-md lg:px-3xl">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3xl items-center">
      <div class="space-y-lg">
        <h2 class="text-3xl font-primary font-bold">{{ $solucao->title }}</h2>
        <p class="text-lg text-gray-300">{{ $solucao->description }}</p>
        <x-button variant="primary" onclick="whatsappContact()">
          Solicitar Demo
        </x-button>
      </div>
      <x-image :src="$solucao->image" :alt="$solucao->title" />
    </div>
  </div>
</section>

<x-decorated-section title="Funcionalidades" subtitle="Tudo que você precisa">
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2xl">
    @foreach($solucao->features as $feature)
      <x-card :title="$feature->name">
        <p>{{ $feature->description }}</p>
      </x-card>
    @endforeach
  </div>
</x-decorated-section>
```

---

## 🚀 Cronograma Recomendado

### Semana 1: Fase 1 - Setup Tailwind
**Objetivo:** Instalar e configurar Tailwind CSS
- Day 1-2: Instalar Tailwind, gerar config
- Day 3: Configurar tailwind.config.js com cores/fonts/breakpoints
- Day 4: Atualizar app.css com diretivas Tailwind
- Day 5: Testar build e verificar que Tailwind funciona

**Output:** Projeto pronto para componentes

### Semana 2: Fase 2 - Componentes Base
**Objetivo:** Criar componentes reutilizáveis
- Day 1-2: Criar button, card, image components
- Day 3: Criar hero-section, decorated-section
- Day 4: Criar modules-grid, input, textarea
- Day 5: Testar componentes em múltiplas páginas

**Output:** Biblioteca de 8+ componentes funcional

### Semana 3: Fase 3 - Componentes Avançados
**Objetivo:** Componentes complexos (navbar, footer, etc)
- Day 1-2: Refatorar navbar com menu mobile
- Day 3-4: Refatorar footer com links dinâmicos
- Day 5: Testar em todas as páginas

**Output:** Componentes de layout refatorados

### Semana 4-5: Fase 4 - Refatoração de Páginas
**Objetivo:** Converter todas as páginas para Tailwind
- Day 1: Home page
- Day 2: Modulos page
- Day 3: Solucoes index
- Day 4-5: 4x solution detail pages
- Week 5: Quem Somos + Parceiros

**Output:** Todas as páginas usando componentes

### Semana 6: Fase 5 - Otimizações
**Objetivo:** Performance e acessibilidade
- Day 1-2: Otimizar imagens, fonts, JS
- Day 3-4: Adicionar ARIA, focus states
- Day 5: Testes Lighthouse e cross-browser

**Output:** Aplicação otimizada pronta para produção

**Total: ~6 semanas** (pode ser paralelo em alguns dias)

---

## 📚 Checklist Completo de Conclusão

### FASE 1 - Instalação Tailwind
- [ ] Tailwind CSS instalado via npm
- [ ] tailwind.config.js criado e configurado
- [ ] postcss.config.js gerado
- [ ] app.css atualizado com @tailwind directives
- [ ] Layout principal (app.blade.php) limpo de Bootstrap
- [ ] Build em Vite funcionando corretamente
- [ ] `npm run build` compila sem erros

### FASE 2 - Componentes Base
- [ ] `resources/views/components/button.blade.php` criado
- [ ] `resources/views/components/card.blade.php` criado
- [ ] `resources/views/components/hero-section.blade.php` criado
- [ ] `resources/views/components/modules-grid.blade.php` criado
- [ ] `resources/views/components/image.blade.php` criado
- [ ] Todos os componentes testados individualmente
- [ ] Botão com 3 variantes funcionando (primary, secondary, outline)
- [ ] Card responsivo em mobile/desktop

### FASE 3 - Componentes Avançados
- [ ] `resources/views/components/input.blade.php` criado
- [ ] `resources/views/components/textarea.blade.php` criado
- [ ] `resources/views/components/decorated-section.blade.php` criado
- [ ] Navbar refatorado com menu mobile funcional
- [ ] Footer refatorado com links dinâmicos
- [ ] Menu mobile testado em dispositivos
- [ ] Componentes avançados documentados

### FASE 4 - Páginas Refatoradas
- [ ] home.blade.php refatorado (sem CSS inline)
- [ ] modulos.blade.php refatorado
- [ ] ser-sol.blade.php refatorado
- [ ] 8x solution detail pages refatoradas
- [ ] quem-somos.blade.php refatorado
- [ ] parceiros.blade.php refatorado
- [ ] Todas as páginas responsivas (360px até 1920px)
- [ ] Todas as páginas testadas em navegadores

### FASE 5 - Performance e Acessibilidade
- [ ] Imagens otimizadas (WebP + fallback)
- [ ] Lazy loading implementado em imagens
- [ ] Scripts centralizados em resources/js
- [ ] Fonts otimizadas e configuradas localmente
- [ ] ARIA labels adicionados (botões, ícones, menus)
- [ ] Focus states implementados (Tab navigation)
- [ ] Contrast ratio validado (WCAG AAA)
- [ ] Lighthouse score 90+ em todas as métricas
- [ ] axe DevTools: 0 erros encontrados
- [ ] Testado em Chrome, Firefox, Safari, Edge
- [ ] Testado em iOS e Android
- [ ] DESIGN_SYSTEM.md criado
- [ ] Documentação completa para próximos devs

### Final
- [ ] Deploy teste em staging realizado
- [ ] Backup da versão anterior salvo
- [ ] Deploy em produção realizado
- [ ] Monitoramento ativo (Web Vitals, alertas)
- [ ] Time treinado na nova arquitetura

---

## 📞 Referências Úteis

### Tailwind CSS
- [Tailwind CSS Documentation](https://tailwindcss.com/docs)
- [Tailwind Config Documentation](https://tailwindcss.com/docs/configuration)
- [Tailwind UI Components](https://tailwindui.com/)
- [Custom Properties (Extending)](https://tailwindcss.com/docs/adding-custom-styles)
- [Responsive Design](https://tailwindcss.com/docs/responsive-design)

### Laravel Blade Components
- [Blade Components](https://laravel.com/docs/11.x/blade#components)
- [Component Props](https://laravel.com/docs/11.x/blade#component-props)
- [Livewire Components](https://livewire.laravel.com/docs/quickstart)

### Performance & Otimização
- [Web Vitals](https://web.dev/vitals/)
- [Lighthouse](https://developers.google.com/web/tools/lighthouse)
- [PageSpeed Insights](https://pagespeed.web.dev/)
- [GTmetrix](https://gtmetrix.com/)

### Acessibilidade
- [WCAG 2.1 Guidelines](https://www.w3.org/WAI/WCAG21/quickref/)
- [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/)
- [axe DevTools](https://www.deque.com/axe/devtools/)
- [Wave Accessibility Tool](https://wave.webaim.org/)
- [ARIA Authoring Practices](https://www.w3.org/WAI/ARIA/apg/)

### Ferramentas Recomendadas
- [npm](https://www.npmjs.com/) - Gerenciar pacotes
- [Vite](https://vitejs.dev/) - Build tool
- [PostCSS](https://postcss.org/) - CSS processing
- [Tailwind CLI](https://tailwindcss.com/docs/installation)

### Otimização de Imagens
- [TinyPNG](https://tinypng.com/) - Compressor de imagens
- [ImageOptim](https://imageoptim.com/) - Compressor para Mac
- [Squoosh](https://squoosh.app/) - WebP converter online
- [Sharp](https://sharp.pixelplumbing.com/) - Node image library

---

## 🎓 Notas Importantes

### Desenvolvimento
1. **Não quebrar produção:** Testar cada fase em branch antes de merge
2. **Compatibilidade:** Manter suporte para navegadores atuais
3. **Performance:** Monitorar Lighthouse depois de cada fase
4. **Documentação:** Documentar padrões ao longo do processo
5. **Testes:** Testar em mobile, tablet e desktop após cada mudança

### Tailwind Específico
1. **Purge CSS:** Tailwind remove CSS não usado automaticamente (configurado em tailwind.config.js)
2. **@layer:** Use `@layer` para customizações sem afetar specificity
3. **Dark mode:** Já suportado via `dark:` prefix do Tailwind
4. **Arbitrary values:** Suporte para `[value]` para valores customizados
5. **Debugging:** Use `tailwindcss.config.js` para debug

### Durante Refatoração
1. **Teste incrementalmente:** Refatore página por página, não tudo de uma vez
2. **Mantenha URLs iguais:** Não mude rotas durante refatoração
3. **Backup de commits:** Commit após cada seção refatorada
4. **Rollback fácil:** Git tags para versões estáveis
5. **Comunicação:** Avise time sobre downtime se necessário

### Pós-Conclusão
1. **Treinar time:** Documente como usar novos componentes
2. **Code review:** Revise todas as pages refatoradas
3. **Monitorar:** Watch Web Vitals por 2-4 semanas
4. **Feedback:** Coletar feedback de usuários
5. **Iterações:** Plan melhorias futuras com base em feedback

---

## ⚡ Quick Start - Primeiros Passos

Se você quer começar **hoje**:

### 1. Instalação Rápida (30 min)
```bash
# No seu projeto Laravel
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

# Configure tailwind.config.js (use exemplo acima)
# Atualize resources/css/app.css (use exemplo acima)
npm run dev
```

### 2. Teste (15 min)
Abra app.blade.php e tente usar classes Tailwind:
```blade
<div class="bg-dark text-white p-lg rounded-md">
  Teste do Tailwind!
</div>
```

### 3. Crie primeiro componente (30 min)
Crie `resources/views/components/button.blade.php` usando exemplo na Fase 2.

### 4. Integre em uma página (30 min)
Use o novo componente em uma página existente.

**Total: ~2 horas para setup inicial**

---

## 🎯 Objetivos Finais

Ao completar este plano, você terá:

✅ **Código mais limpo:** -80% CSS duplicado, -95% estilos inline
✅ **Componentes reutilizáveis:** 10+ componentes Blade prontos
✅ **Mantível:** Fácil de adicionar novas funcionalidades
✅ **Responsivo:** Funciona em 360px até 1920px sem problemas
✅ **Rápido:** Lighthouse 90+ em todas as métricas
✅ **Acessível:** WCAG AAA compliant
✅ **Documentado:** Design system completo documentado
✅ **Moderno:** Stack atual (Tailwind + Livewire + Laravel 11)

---

**Última atualização:** 2025-11-25
**Versão:** 2.0 (Tailwind CSS)
**Status:** Pronto para implementação

**Próximos passos:** Começar pela Fase 1 - Setup Tailwind (Semana 1)
