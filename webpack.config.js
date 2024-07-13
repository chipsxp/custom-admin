const path = require("path");

module.exports = {
  entry: "./admin/src/index.js",
  output: {
    path: path.resolve(__dirname, "admin/build"),
    filename: "admin-bundle.js",
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env", "@babel/preset-react"],
          },
        },
      },
    ],
  },
  devServer: {
    contentBase: path.join(__dirname, "admin/build"),
    compress: true,
    port: 9000,
  },
};
