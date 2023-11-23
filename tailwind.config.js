module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors:{
                greenLight: '#c8e4b2',
                greenDark: '#82af97',
                orangeLight: '#F6D365',
                orangeDark: '#FDA085',
            }
        },
    },

    variants: {
        extend: {
            
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require("daisyui")
    ],

    daisyui: {
        themes: ["light"]
    }
};
