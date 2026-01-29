/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './header.php',
    './footer.php',
    './functions.php',
    './resources/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        // 必要に応じてカスタムカラーを追加
      },
      fontFamily: {
        'outfit': ['"Outfit"', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
};