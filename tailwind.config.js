const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                secondary: "#F4F2ED",
                black: "black",
                white: "white",
            },
            fontFamily: {
                montserrat: ["Montserrat", "sans-serif"],
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundSize: {
                auto: "auto",
                cover: "cover",
                contain: "contain",
                "100%": "100%",
            },
            backgroundImage: {
                underline1: "url('../img/Underline1.svg')",
                underline2: "url('../img/Underline2.svg')",
                underline3: "url('../img/Underline3.svg')",
                underline4: "url('../img/Underline4.svg')",
                highlight3: "url('../img/Highlight3.svg')",
            },
            keyframes: {
                "fade-in-down": {
                    "0%": {
                        opacity: "0",
                        transform: "translateY(-10px)",
                    },
                    "100%": {
                        opacity: "1",
                        transform: "translateY(0)",
                    },
                },
            },
            animation: {
                "fade-in-down": "fade-in-down 0.5s ease-out",
            },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
