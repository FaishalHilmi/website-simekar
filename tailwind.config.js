/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                sky: {
                    100: "0247E1",
                    200: "01277B",
                },
            },
            fontFamily: {
                inter: ["Inter", "serif"],
            },
        },
    },
    plugins: [require("daisyui")],
};
