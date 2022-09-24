var express  = require('express');
var app = express();
var router1 = require('./hola.js');
var router2 = require('./middle.js')

app.use('/api/', router1);

app.use('/wibu', router2);

app.get('/', (req, res)=>{
  res.json('hello');
});

app.listen(8000, (req, res)=>{
  console.log('sever running .........');
})
