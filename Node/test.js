// Address: http://localhost:8080

var http = require('http');

http.createServer(function (req, res) {
res.writeHead(200, {'Content-Type': 'text/html'});
res.write('Test');
res.end();
}).listen(8080);