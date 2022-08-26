const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/filament/**/*.blade.php',
        './resources/views/vendor/**/*.blade.php',
        './resources/views/filament/**/*.blade.php'
    ],
    darkMode: 'class',
    corePlugins: {
        fontWeight: false
    },
    theme: {
        letterSpacing: {
            tightest: '0',
            tight: '0',
            normal: '0',
            wide: '0',
            wider: '0',
            widest: '0',
        },
        extend: {
            colors: {
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
            },
            fontFamily: {
                'sans': ['dana']
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}
