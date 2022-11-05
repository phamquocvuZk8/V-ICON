var express = require('express');
var app = express();
var Account2Model = require('./Mongoose/model')
app.get('/',(req, res, next)=>{
    Account2Model.find({})
    .then((data)=>{
        res.json(data)
    })
    .catch((err)=>{
        res.status(400).json('lỗi')
    })
})
app.listen(3000, (req, res , next)=>{
    console.log('sever running')
})