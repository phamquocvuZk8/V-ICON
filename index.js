var express = require('express');
var app = express();
var bodyParser = require('body-Parser')
var Account2Model = require('./Mongoose/model');

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json())

app.post('/Login', (req, res, next)=>{
    var username = req.body.username
    var password = req.body.password
    Account2Model.find({
        username : username,
        password : password
    })
    .then((data)=>{
        if(data){
            res.json('Đăng nhập thành công')
        }else{
            res.status(404).json('bn chưa tạo tài khoản')
        }
    })
    .catch((err)=>{
        res.status(300).json('lỗi sever')
    })
})
app.post('/create', (req, res, next)=>{
    var username = req.body.username
    var password = req.body.password
    Account2Model.find({
        username:username,
        password:password
    })
    .then((data)=>{
        if(data){
            res.status(500).json('tài khoản đã có ')
        }else{
            Account2Model.create({
                username : username,
                password:password
            })
            .then((data)=>{
                res.json('SuccessFully')
            })
            .catch((err)=>{
                res.status(200).json('tạo tài khoản k thành công')
            })
        }
    })
    .catch((err)=>{
        res.json('lỗi')
    })
})
app.listen(8080, (req, res, next)=>{
    console.log('sever running.........')
})