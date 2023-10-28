const mode     = 'development';
const main     = 'assets/scripts/main.js';
const output   = 'public';
const filename = 'bundle.js';

const path     = require('path');

// ---------------

module.exports = {
  mode: mode,
  entry: path.resolve(__dirname, main),
  output: {
    path: path.resolve(__dirname, output),
    filename: filename,
  },

  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader"],
      },
    ],
  }
};