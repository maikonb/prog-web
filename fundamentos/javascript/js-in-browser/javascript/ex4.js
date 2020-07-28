const http = require('http')
const { parse } = require('querystring');
const port = 3000

const requestHandler = (req, res) => {

  console.log(req.url)
  console.log(req.method)

  if (req.url==="/" && req.method==="POST") {
    var body = "";
    req.on('data', (chunk) => {
      body += chunk;
    });
    req.on('end', () => {
      let obj = parse(body);
      //res.writeHead(200, { 'Content-Type': 'application/json' });
      //res.end(JSON.stringify(obj));

      //res.writeHead(200, { 'Content-Type': 'text/plain' });
      //res.end(JSON.stringify(obj));
      
      res.writeHead(200, { 'Content-Type': 'text/html' });
      res.end(`
        <p> <strong>Nome</strong>: ${obj.name_nome}</p>
        <p> <strong>Idade</strong>: ${obj.name_idade}</p>
      `);

    });
  }
}

const server = http.createServer(requestHandler)

server.listen(port, (err) => {
  if (err) {
    return console.log('something bad happened', err)
  }

  console.log(`server is listening on ${port}`)
})