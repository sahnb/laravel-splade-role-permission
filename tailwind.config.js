/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                gold: {
                    '50': '#fbfaf4',
                    '100': '#f8efbd',
                    '200': '#f1dc83',
                    '300': '#dbb752',
                    '400': '#be8d2d',
                    '500': '#9f6e17',
                    '600': '#82550f',
                    '700': '#64400e',
                    '800': '#452c0c',
                    '900': '#2e1b09',
                },
                beaver: {
                    '50': '#fbfbfa',
                    '100': '#f6f1f1',
                    '200': '#ecdae0',
                    '300': '#d4b3bd',
                    '400': '#bc8793',
                    '500': '#a1626f',
                    '600': '#834751',
                    '700': '#62353c',
                    '800': '#422429',
                    '900': '#271618',
                },
                chestnut: {
                    '50': '#fcfbf9',
                    '100': '#f9f1e5',
                    '200': '#f2d9c6',
                    '300': '#dfb197',
                    '400': '#cc8466',
                    '500': '#b36142',
                    '600': '#95462c',
                    '700': '#553a13',
                    '800': '#4d2419',
                    '900': '#2f160f',
                },
            },
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require("@tailwindcss/aspect-ratio")
    ],
};
