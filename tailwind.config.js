/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%': { transform: 'translateY(-5px)' },
                },
                'slide-in-right': {
                    '0%':   { transform: 'translateX(100%)', opacity: '0' },
                    '100%': { transform: 'translateX(0%)', opacity: '1' },
                },
                'slide-out-right': {
                    '0%':   { transform: 'translateX(0%)', opacity: '1' },
                    '100%': { transform: 'translateX(100%)', opacity: '0' },
                }
            },
            animation: {
                float: 'float 3s ease-in-out infinite',
                'slide-in-right': 'slide-in-right 0.3s cubic-bezier(.4,0,.2,1) forwards',
                'slide-out-right': 'slide-out-right 0.3s cubic-bezier(.4,0,.2,1) forwards',
            },
            aspectRatio: {
                '3/4': '3/4',
            },
            container: {
                center: true, // Zorgt ervoor dat de container gecentreerd is
                padding: {
                    DEFAULT: "1rem",
                    xl: "2rem",
                },
            },
            screens: {
                "xl": "1280px", // Pas de 2xl breakpoint aan
                "2xl": "1280px", // Pas de 2xl breakpoint aan
            },

            fontFamily: {
                serif: ['Roboto', 'sans-serif'],  // Montserrat voor de koppen en buttons
                sans: ['Roboto', 'sans-serif'], // SourceSans3 voor de body tekst
            },
            fontSize: {
                "xs": ["0.875rem", "1.3rem"],  // 14px met ~1.5 line-height
                "sm": ["1rem", "1.5rem"],      // 16px met 1.5 line-height
                "base": ["1.125rem", "1.6875rem"], // 18px met 1.5 line-height
                "lg": ["1.25rem", "1.875rem"], // 20px met 1.5 line-height
                "xl": ["1.5rem", "2.25rem"],   // 24px met 1.5 line-height
                "2xl": ["1.75rem", "2.625rem"], // 28px met 1.5 line-height
                "xs-heading-1": ["2rem", "2.75rem"],
                "xs-heading-2": ["1.5rem", "2.04rem"],
                "xs-heading-3": ["1.25rem", "1.7rem"],
                "xs-heading-4": ["1.125rem", "1.53rem"],
                "xs-heading-5": ["1rem", "1.36rem"],
                "xs-heading-6": ["0.875rem", "1.3rem"],

                "heading-1": ["2rem", "3rem"],
                "heading-2": ["2rem", "2.75rem"],
                "heading-3": ["1.5rem", "2.04rem"],
                "heading-4": ["1.25rem", "1.7rem"],
                "heading-5": ["1.125rem", "1.53rem"],
                "heading-6": ["1rem", "1.36rem"]
            },
            boxShadow: {
                'none': '0',
                'small': '0px 8px 16px 0px rgba(17, 17, 17, 0.04)',
            },
            colors: {
                "theme-primary": {
                    lighter: "#1b1b1e",
                    DEFAULT: '#18181b',
                    darker: "#101012"
                },
                "theme-secondary": {
                    lighter: "#5cc4e3",
                    DEFAULT: '#5bc0de',
                    darker: "#52aeca"
                },
                "theme-success": {
                    lighter: '#1eb326',
                    DEFAULT: '#1ca924',
                    darker: '#178a1d'
                },
                "theme-light": {
                    lighter: '#f7fdfc',
                    DEFAULT: '#eef4f3',
                    darker: '#cacdd3'
                },
                "theme-danger": {
                    lighter: '#e43434',
                    DEFAULT: '#dc3232',
                    darker: '#c12b2b',
                },
                "theme-gray": {
                    "lightest": "#f7f9f8",
                    "lighter": "#727478",
                    "DEFAULT": "#535357",
                    "darker": "#333"
                }
            }
        },
    },
    plugins: [],
}

