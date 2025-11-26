# 🎨 Guia de Setup Tailwind v4 - SF Sistemas

## ✅ Status Atual

Seu projeto agora está **corretamente configurado com Tailwind v4**!

### O que foi feito:
- ✅ Criado `tailwind.config.js` com cores, fonts e breakpoints da marca
- ✅ Atualizado `resources/css/app.css` com `@import "tailwindcss"`
- ✅ Mantido compatibilidade com daisyUI e maryUI
- ✅ Build testado e passou sem erros

---

## 🚀 Próximos Passos

### 1. Iniciar servidor de desenvolvimento
```bash
npm run dev
```

### 2. Testar Tailwind em uma página
Abra `resources/views/livewire/home.blade.php` e adicione uma classe teste:

```blade
<div class="bg-primary text-white p-lg rounded-md my-3xl">
  Teste do Tailwind - Se esse texto estiver com fundo cyan (#63c7f5), Tailwind está funcionando!
</div>
```

### 3. Se não funcionar
```bash
# Limpar cache
rm -rf node_modules/.vite

# Reinstalar dependências
npm install

# Rodar dev novamente
npm run dev
```

---

## 📚 Classes Tailwind Disponíveis

### Cores Customizadas
```html
<!-- Primary Color -->
<div class="bg-primary">Primary (cyan #63c7f5)</div>
<div class="bg-primary-dark">Primary Dark (#4a9ec7)</div>
<div class="bg-primary-light">Primary Light (#8dd8fb)</div>

<!-- Gray Scale -->
<div class="bg-gray-900">Very Dark (#1e1e1e)</div>
<div class="bg-gray-700">Dark (#4f4f50)</div>
<div class="bg-gray-50">Light (#f5f5f5)</div>
<div class="bg-dark">Dark (#1e1e1e)</div>
```

### Tipografia
```html
<!-- Font Families -->
<h1 class="font-primary">Headline (Be Vietnam Pro)</h1>
<p class="font-secondary">Body (Nunito)</p>
<footer class="font-tertiary">Footer (Poppins)</footer>

<!-- Font Sizes -->
<p class="text-xs">Extra Small (0.75rem)</p>
<p class="text-sm">Small (0.875rem)</p>
<p class="text-base">Base (1rem)</p>
<p class="text-lg">Large (1.125rem)</p>
<p class="text-xl">X-Large (1.5rem)</p>
<p class="text-2xl">2X-Large (2rem)</p>
```

### Espaçamento
```html
<!-- Padding/Margin -->
<div class="p-xs">0.25rem</div>
<div class="p-sm">0.5rem</div>
<div class="p-md">1rem</div>
<div class="p-lg">1.5rem</div>
<div class="p-xl">2rem</div>
<div class="p-2xl">3rem</div>
<div class="p-3xl">4rem</div>
```

### Responsive (Breakpoints)
```html
<!-- Mobile First -->
<div class="block lg:grid">
  <!-- block em mobile, grid em lg (820px+) -->
</div>

<div class="text-sm lg:text-lg">
  <!-- text-sm em mobile, text-lg em lg+ -->
</div>
```

**Breakpoints disponíveis:**
- `sm`: 360px
- `md`: 500px
- `lg`: 820px
- `xl`: 1024px
- `2xl`: 1440px
- `3xl`: 1920px

---

## 🎯 Primeiro Componente - Button

Agora que Tailwind está funcionando, crie seu primeiro componente:

**Arquivo:** `resources/views/components/button.blade.php`

```blade
@props([
    'variant' => 'primary',
    'href' => '#',
    'type' => 'link',
])

@if($type === 'link')
  <a
    href="{{ $href }}"
    @class([
      'inline-block px-lg py-sm rounded-md font-semibold text-center cursor-pointer border-none transition-all duration-300',
      'bg-primary text-dark hover:bg-primary-dark hover:-translate-y-0.5 hover:shadow-md' => $variant === 'primary',
      'bg-gray-700 text-gray-50 hover:bg-gray-800 hover:-translate-y-0.5' => $variant === 'secondary',
    ])
    {{ $attributes }}
  >
    {{ $slot }}
  </a>
@else
  <button
    type="button"
    @class([
      'inline-block px-lg py-sm rounded-md font-semibold text-center cursor-pointer border-none transition-all duration-300',
      'bg-primary text-dark hover:bg-primary-dark hover:-translate-y-0.5 hover:shadow-md' => $variant === 'primary',
      'bg-gray-700 text-gray-50 hover:bg-gray-800 hover:-translate-y-0.5' => $variant === 'secondary',
    ])
    {{ $attributes }}
  >
    {{ $slot }}
  </button>
@endif
```

**Uso:**
```blade
<!-- Link Button -->
<x-button href="/solucoes">Conheça Nossas Soluções</x-button>

<!-- Button Element -->
<x-button type="button">Enviar</x-button>

<!-- Secondary Variant -->
<x-button variant="secondary" href="#">Saiba Mais</x-button>
```

---

## 📝 Próximas Fases

Agora que Tailwind está funcionando, continue com:

1. **Fase 2** - Criar outros componentes (card, hero-section, image)
2. **Fase 3** - Componentes avançados (navbar, footer, input)
3. **Fase 4** - Refatorar páginas existentes
4. **Fase 5** - Performance e acessibilidade

Veja `REFACTORING_PLAN.md` para detalhes completos!

---

## 🐛 Troubleshooting

### Classes Tailwind não estão sendo aplicadas
1. Certifique-se que `npm run dev` está rodando
2. Limpe o cache: `rm -rf node_modules/.vite`
3. Refreshe a página (Ctrl+Shift+R ou Cmd+Shift+R)

### Build quebrado
```bash
npm install
npm run build
```

### Cores customizadas não aparecem
1. Verifique `tailwind.config.js` existe
2. Reinicie `npm run dev`
3. Verifique a ortografia (case-sensitive)

---

## 📞 Dúvidas?

Consulte:
- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [Tailwind v4 Migration](https://tailwindcss.com/docs/upgrade-guide)
- `REFACTORING_PLAN.md` neste projeto

---

**Status:** ✅ Pronto para começar a criar componentes!

**Próximo:** Execute `npm run dev` e comece a refatorar componentes e páginas.
