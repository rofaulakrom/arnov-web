/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/views/**/*.blade.php", // <--- Baris ini KRUSIAL
  ],
  theme: {
    extend: {
      colors: {
        'gold': {
          light: '#FCE9B5',
          DEFAULT: '#D4AF37',
          dark: '#8C7323',
        },
        'dark': {
          900: '#050505',
          800: '#121212',
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        serif: ['Playfair Display', 'serif'],
      }
    },
  },
  plugins: [],
}