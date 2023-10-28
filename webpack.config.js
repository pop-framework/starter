const path = require('path');

const INPUT = 'assets/scripts/main.js';

// Output
const OUTPUT_DIRECTORY = 'public/';
const OUTPUT_FILE = 'bundle.js';



module.exports = {
  mode: 'development',
  entry: path.resolve(__dirname, INPUT),
  output: {
    path: path.resolve(__dirname, OUTPUT_DIRECTORY),
    filename: OUTPUT_FILE,
  },

  module: {
    rules: [
      {
        test: /\.css$/i,
        use: ["style-loader", "css-loader"],
      },
    ],
  },

};
  