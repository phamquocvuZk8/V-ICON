const express = require('express');
const app = express();
const path = require('path');



app.use('/public', express.static(path.join(__dirname, './public')))
app.use('/img', express.static(path.join(__dirname, './img')))
app.get('/',(req, res, next)=>{
    res.sendFile(path.join(__dirname,'./hello.html'))
})
app.listen(process.env.PORT,(req, res, next)=>{
    console.log('sever running..........')
})