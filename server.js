const http = require('http');

const server = http.createServer((req, res) => {
    // request ийн url method header зарлаж өгсөн
    const { header, url, method } = req;
    res.setHeader('content-type', 'text/html');
    if (url === '/') {
        res.statusCode = 200;

        res.write('<h1>Lab 11</h1>');
        res.write(`<br><br>Login hiine vv <a href="/login">click here</a> `);
        res.end();
    }
    //login хэсэг
    if (url === '/login') {
        //login Form
        res.write("<h1>Login heseg</h1>");
        res.write(`<form action="/logincheck" method="POST"> `);
        res.write(`<br><input type="text" name="email" /> `);
        res.write(`<br><input type="password" name="password" /> `);
        res.write(`<br><input type="submit" value="Login" /> `);
        res.write(`<form /> `);
        res.end();

    } else if (url === "/logincheck" && method === "POST") {
        // login hiisnii daraa usreh heseg
        res.statusCode = 200;
        res.write("<h1>Login hiij uzlee...</h1>");
        res.write("<br><h1>" + method + "</h1>");
        res.end();
    } else {
        res.statusCode = 404;
        res.write("<h1>404 not found</h1>");
        res.end();

    }



    // серверийн толгой хэсэг
    // console.log(`header =====> ${header}`);
    // url нь
    // console.log(`url =====> ${url}`);
    // GET POST харуулна
    // console.log(`method =====> ${method}`);


});

server.listen(5000, () => {
    console.log("http server aslaa");
});