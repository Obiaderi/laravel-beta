import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.jsx",
    ],

    theme: {
        screens: {
            sm: "480px",
            md: "768px",
            lg: "1020px",
            xl: "1440px",
        },
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    violet: "#9667e0",
                    violet100: "#d4bbfc",
                    violet200: "#ebd9fc",
                    violet300: "#f2ebfb",
                    violet400: "#fbfaff",
                },
                grayishBlue: "hsl(229, 8%, 60%)",
                softRed: "hsl(0, 94%, 66%)",
            },
        },
    },

    plugins: [forms],
};
