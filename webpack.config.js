const MiniCssExtractPlugin  = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');
const path = require('path');

module.exports = {
	mode: process.env.NODE_ENV === 'production' ? 'production' : 'development',
	entry: './src/assets/js/main.js',
	plugins: [new MiniCssExtractPlugin ()],
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
						loader: MiniCssExtractPlugin.loader
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
	},
	optimization: {
		minimizer: [
			// '...' keeps webpack's default JS minifier alongside the CSS one
			'...',
			new CssMinimizerPlugin(),
		],
	},
}