const mix = require("laravel-mix");

// Configuración personalizada de Webpack
mix.webpackConfig({
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"],
                        plugins: ["@babel/plugin-transform-modules-commonjs"],
                    },
                },
            },
        ],
    },
});

// Establecer la ruta base de la carpeta de salida
mix.setPublicPath("public/build");

// Opcional: Establecer la ruta base de los assets
mix.setResourceRoot("/build/");

// Definición de tareas de compilación de Laravel Mix
mix.js("resources/js/app.js", "public/js").version();
// .sass(
//     "resources/sass/app.scss",
//     "public/css"
//);
