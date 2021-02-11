const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('../src/Resources/public/')
    .setPublicPath('/bundles/ferienpassbackendtheme')
    .setManifestKeyPrefix('bundles/ferienpassbackendtheme')

    .cleanupOutputBeforeBuild()
    .enableSourceMaps(false)
    .enableVersioning(false)
    .disableSingleRuntimeChunk()
    .enablePostCssLoader()

    .addEntry('app', './js/app.js')
    .copyFiles({
        from: './images/',
        to: 'images/[path][name].[ext]',
    })
;

module.exports = Encore.getWebpackConfig();
