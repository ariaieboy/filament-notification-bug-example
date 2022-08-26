/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    darkMode: 'class',
    content: [
        './resources/views/**/app/**/*.blade.php',
        './resources/js/app/**/*.js'
    ],
    theme: {
        screens: {
            'xs': '475px',
            ...defaultTheme.screens,
        },
        extend: {
            fontFamily: {
                'sans': ['dana']
            },
            container: {
                screens: {
                    '2xl': '1440px'
                },
                center: true
            }
        }
    },
    daisyui: {
        themes: [{
            light: {
                ...require("daisyui/src/colors/themes")["[data-theme=light]"],
                primary: "#156EF4",
            },
            dark: {
                ...require("daisyui/src/colors/themes")["[data-theme=dark]"],
                primary: "#156EF4",
            },
        }],
        rtl: true
    },
    plugins: [
        require('@tailwindcss/typography'),
        require('daisyui')
    ]
}
