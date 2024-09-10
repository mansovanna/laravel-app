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
                sans: [
                    "Poppins",
                    "Roboto",
                    "Noto Sans Khmer",
                    "Varela Round",
                    "sans-serif",
                    "system-ui",
                    "-apple-system",
                    '"Segoe UI"',
                    '"Helvetica Neue"',
                    '"Noto Sans"',
                    '"Liberation Sans"',
                    "Arial",
                    "sans-serif",
                    '"Apple Color Emoji"',
                    '"Segoe UI Emoji"',
                    '"Segoe UI Symbol"',
                    '"Noto Color Emoji"',
                ],
                serif: ["Noto Serif Khmer", "serif"],
                mono: [
                    "Roboto Mono",
                    "monospace",
                    "SFMono-Regular",
                    "Menlo",
                    "Monaco",
                    "Consolas",
                    '"Liberation Mono"',
                    '"Courier New"',
                    "monospace",
                ],
                flex: ["Roboto Flex"],
                "roboto-flex": "Roboto Flex",
                "roboto-mono": "Roboto Mono",
                nunito:'Nunito, sans-serif',
                roboto: 'Roboto, sans-serif',
            },

            colors: {
                primary: {
                    light: "#4F9FDC",
                    DEFAULT: "#1D4ED8", // The default primary color
                    dark: "#153E75",
                },
                secondary: {
                    secondary:'#374151',
                    light: "#F39C12",
                    DEFAULT: "#F59E0B",
                    dark: "#B9770E",
                },
                success: {
                    light: "#22C55E",
                    DEFAULT: "#16A34A",
                    dark: "#166534",
                },
                danger: {
                    danger:'#fd3d57',
                    light: "#EF4444",
                    DEFAULT: "#DC2626",
                    dark: "#991B1B",
                },
                warning: {
                    light: "#FDE047",
                    DEFAULT: "#FACC15",
                    dark: "#CA8A04",
                },
                info: {
                    light: "#38BDF8",
                    DEFAULT: "#0EA5E9",
                    dark: "#0369A1",
                },
            },
        },
    },
    plugins: [],
};
