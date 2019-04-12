const mysql = require('mysql');
const connection = mysql.createConnection({
	host:'localhost',
	user:'root',
	password:'best7538',
	database:'kc_crazy_rich_concert'
});
console.log(results);
function result_money(){
	connection.connect((err) =>{
		if (err) throw err;
		console.log("Connected!");
		connection.query('SELECT SUM(money) FROM money',(err,result) => {
			if(err) throw err;
			console.log(result);
			results=result[0]['SUM(money)'];
			console.log(results);
			return results;
		});
	});
}