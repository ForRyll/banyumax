/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./app/Http/Livewire/**/*.php",
    ],

    theme: {
        extend: {
            colors: {
                banyumax: {
                    50: '#ecfeff',
                    100: '#cffafe',
                    200: '#a5f3fc',
                    300: '#67e8f9',
                    400: '#22d3ee',
                    500: '#06b6d4',
                    600: '#0891b2',
                    700: '#0e7490',
                    800: '#155e75',
                    900: '#164e63',
                    950: '#083344',
                },
            },
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
            boxShadow: {
                'glass': '0 8px 32px 0 rgba(6, 182, 212, 0.08)',
                'glass-nav': '0 10px 30px -10px rgba(0, 0, 0, 0.07)',
            }
        },
    },

    plugins: [],
}
