var fs = require('fs');

fs.writeFile('newfile3.txt', 'Text replaced', function (err) {
if (err) throw err;
console.log('File replaced');
});