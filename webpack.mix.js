let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([

	'public/css/plugin.revslider.min.css',
	'public/css/style.css',
	'public/css/core.animation.min.css',
	'public/css/shortcodes.min.css',
	'public/css/shortcodes.css',
	'public/js/vendor/essential-grid/css/settings.css',
	'public/js/vendor/essential-grid/css/lightbox.css',
	'public/css/tpl-essential-grids.min.css',
	'public/css/skin.css',
	'public/css/responsive.min.css',
	'public/js/vendor/magnific/magnific-popup.min.css',


	


	], 'public/css/alll.css');

