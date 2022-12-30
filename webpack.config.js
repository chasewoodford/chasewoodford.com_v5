const miniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
	mode: 'development',
	entry: './src/assets/js/main.js',
	plugins: [new miniCssExtractPlugin()],
	output: {
		filename: 'main.js',
		path: path.resolve(__dirname, 'dist')
	},
	module: {
		rules: [
			{
				test: /\.(scss)$/,
				use: [
					{
						loader: miniCssExtractPlugin.loader
					},
					{
						loader: 'css-loader'
					},
					{
						loader: 'postcss-loader',
						options: {
							postcssOptions: {
								plugins: () => [
									require('autoprefixer')
								]
							}
						}
					},
					{
						loader: 'sass-loader'
					}
				]
			},
			{
				// Bootstrap icons processing
				test: /\.woff($|\?)|\.woff2($|\?)|\.ttf($|\?)|\.eot($|\?)|\.svg($|\?)/i,
				type: 'asset/resource',
			},
		]
	}
}