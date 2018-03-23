var fs = require('fs');

fs.writeFile('newfile3.txt', 'Text', function (err) {
if (err) throw err;
console.log('File saved');
});