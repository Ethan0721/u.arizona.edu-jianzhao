var http = require('http');
http.createServer(function (request, response){
	response.write(200);
	response.write("hello, this ");
	response.end();
}).listen(8080);
console.log("listen on 8080");