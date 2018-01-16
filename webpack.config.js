var Encore = require('@symfony/webpack-encore');

Encore
	// the project directory where all compiled assets will be stored
	.setOutputPath('web/assets/')

	// the public path used by the web server to access the previous directory
	.setPublicPath('/assets')

	// empty the outputPath dir before each build
	.cleanupOutputBeforeBuild()

	 // allow legacy applications to use $/jQuery as a global variable
	.autoProvidejQuery()

	// make automatically variables available everywhere
	.autoProvideVariables({
		'window.jQuery': 'jquery'
	})

	 // allow sass/scss files to be processed
	.enableSassLoader()

	// create hashed filenames (e.g. app.abc123.css)
	.enableVersioning(false)

	.createSharedEntry('js/common', ['jquery'])
	.addEntry('js/app', './assets/js/app.js')
	.addStyleEntry('css/app', './assets/scss/app.scss')
;

module.exports = Encore.getWebpackConfig();
