const path = require('path');

const INPUT = 'assets/scripts/app.js';
const OUTPUT = 'public/bundle/';

module.exports = {
    entry: path.resolve(__dirname, INPUT),
    output: {
      path: path.resolve(__dirname, OUTPUT),
      filename: 'bundle.js',
    },
};
  