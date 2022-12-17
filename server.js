const path = require('path');
const express = require('express');
const app = express();

const User = require('./js/User.js');
const fs = require('fs');

const http = require('http');
const port = 8080

// app.use(express.static(path.join(__dirname))
app.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, + "../index.html"));
});

app.listen(port);

// fs.readFile("./index.html", function(err, html) {
//     if (err)
//         throw err;

//         const server = http.createServer(function (req, res) {
//             res.writeHead(200, {'Content-Type': 'text/plain'});
//             // res.writeHead(200, {'Content-Type': 'text/html'});
//             // res.writeHead(200, {'Content-Type': 'text/css'});
//             // res.writeHead(200, {'Content-Type': 'text/javascript'});
//             res.write(html);
//             res.end();
//         });
        
//         server.listen(port, function (error) {
//             if (error) {
//                 console.log(error);
//             }
//             else {
//                 run();
//             }
//         })
// });


function run() {
    var john = new User("Wujek", "Macius");
    // console.log(User.toJSON(john));

    // var paprik = JSON.parse('{"firstName": "John", "lastName": "Doe"}');
    var paprik = User.fromJSON("../user.json");
    console.log(paprik);

    // const user = require("../user.json");
    // console.log(user);
}