/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'sansita': 'Sansita One',
            'satoshi': 'Satoshi'

        },
      extend: {
        colors: {
            'almond': '#EFDFCA',
            'azure-white': '#EFDFCA',
            'crayola': '#FFA720',
            'palecyan': '#8BD7FDF7',
            'neonblue': '#12069B',
            'vampireblack':'#0B0A0A',
            'azureish_white':'#DDEFF8F4',
            'argent':'#BFBFBF',

        },
        boxShadow: {
            'shadow_card': ' rgba(0, 0, 0, 0.1) 0px 4px 12px;',
        }
      },
    },
    plugins: [],
  }


