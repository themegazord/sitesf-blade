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
    },
  },
  plugins: [require('daisyui')],
  daisyui: {
    themes: ['dark', 'light'],
  },
}
