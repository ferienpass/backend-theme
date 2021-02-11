const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    presets: [
        require('@contao/backend/tailwind-preset')
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    50: 'var(--color-primary-50, #d7edf5)',
                    100: 'var(--color-primary-100, #C7E7F2)',
                    200: 'var(--color-primary-200, #9AC8D9)',
                    300: 'var(--color-primary-300, #22A6D6)',
                    400: 'var(--color-primary-400, #1C89B0)',
                    500: 'var(--color-primary-500, #1D8DB9)',
                    600: 'var(--color-primary-600, #1c6b9c)',
                    700: 'var(--color-primary-700, #185A85)',
                    800: 'var(--color-primary-800, #084F69)',
                    900: 'var(--color-primary-900, #0C394A)',
                },
            }
        },
    },
};
