var fs = require('fs');

fs.appendFile('newfile1.txt', 'Text', function (err) {
if (err) throw err;
console.log('File updated');
});