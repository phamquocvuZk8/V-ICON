const express = require('express')
const app = express();
const path = require('path')

app.use('/congkhai', express.static(path.join(__dirname, './public')))
app.use('/img', express.static(path.join(__dirname, './img')))
app.get('/', (req, res ,next)=>{
    res.sendFile(path.join(__dirname, 'hello.html'))
})

app.listen(8000, (req, res, next)=>{
})