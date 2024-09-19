/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                rubik: "Rubik, sans-serif",
                "noto-sans-khmer": ["Noto Sans Khmer", "sans-serif"],
                "noto-serif-khmer": ["Noto Serif Khmer", "serif"],
                poppins: ["Poppins", "sans-serif"],
                "roboto-flex": ["Roboto Flex", "sans-serif"],
                "roboto-mono": ["Roboto Mono", "monospace"],
                roboto: ["Roboto", "sans-serif"],
                "varela-round": ["Varela Round", "sans-serif"],
                system : 'Poppins, Roboto, Open Sans, Helvetica Neue, Arial, sans-serif',
            },

            colors: {
                sceondary: "#374151",
                danger: "#fd3d57",
                dangers: "#ffdadf",
                primary: "#fd3d57",
            },
        },
    },
    plugins: [
        require('@tailwindcss/line-clamp'),
    ],
};
