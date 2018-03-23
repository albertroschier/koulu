var mysql = require('mysql');
var connection = mysql.createPool({
host: 'magnesium',
user: 'a16aroschier',
password: 'höpönpöppöö',
database: 'ska16aroschier'
});
module.exports = connection;