const path = require('path');
const VueLoaderPlugin = require('vue-loader/lib/plugin');

module.exports = {
    mode: 'development',
    watch: true,
    entry: './resources/js/App.js',
    output: {
        path: path.resolve(__dirname, 'asset/js'),
        filename: 'app.js'
    },
    module: {
        rules: [
        {
            test: /\.s[ac]ss$/i,
            use: [
                'style-loader',
                'css-loader',
                'sass-loader',
            ],
        },
        {
        	test: /\.vue$/,
        	loader: 'vue-loader',
        	options: {
        		hotReload: false
      		}
        },
        {
        	test: /\.js$/,
        	loader: 'babel-loader'
        },
        {
        	test: /\.css$/,
        	use: [
        	  	'vue-style-loader',
        	  	'css-loader'
        	]
        }],
    },
    plugins: [
    new VueLoaderPlugin()
  ]
};