module.exports = {
    presets: [ "@babel/preset-env", "@babel/preset-react" ],
    plugins: [ "@babel/plugin-transform-arrow-functions", "@babel/plugin-proposal-class-properties" ]
}

module.exports = {
    test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
    use: [
        {
            loader: 'babel-loader',
        },
        {
            loader: '@svgr/webpack',
            options: {
                babel: false,
                icon: true,
            },
        },
    ],
}
