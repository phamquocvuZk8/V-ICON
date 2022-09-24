var express = require('express');
var app = express();
var bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({extended: true}));
app.use(bodyParser.json());

app.post('/create', (req, res, next)=>{
    
});

app.post('/login', (req, res, next)=>{
})

app.listen(8000, (req, res)=>{
    console.log('Sever running..........')
})