var mysql = require('mysql');

var con = mysql.createConnection({
host: "magnesium",
user: "a16aroschier",
password: "höpönpöppöö"
});

con.connect(function(err) {
if (err) throw err;
console.log("Yhdistetty!");
});