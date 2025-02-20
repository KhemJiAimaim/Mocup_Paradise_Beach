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
                prata: ["Prata", "serif"],
                kanit: ["Kanit", "sans-serif"],
            },
            screens: {xx: "400px", xs: "479px", ss: "540px", mmd: "820px", ll: "1440px", llg: "1536px", xll: "1920px", xxl: "1921px" },
        },
    },

    plugins: [],
};
