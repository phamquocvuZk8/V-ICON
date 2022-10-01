const express = require('express');
const app = express();
const path = require('path');


app.use('/public', express.static(path.join(__dirname, './public')))
app.get('/',(req, res , next)=>{
    res.sendFile(path.join(__dirname, 'duan.html'))
})
app.listen(8000, (req , res , next)=>{
    console.log('Sever running...........')
})