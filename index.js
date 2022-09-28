const express = require('express')
const app = express();
const path = require('path')
const bodyParser = require('body-parser')
const Account2Model = require("./Mongoose/model");


app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json())
// app.get('/create',(req, res, next)=>{
//     res.sendFile(path.join(__dirname,'duan.html'))
// })
app.post('/create',(req, res, next)=>{
    var username = req.body.username
    var password = req.body.password
    Account2Model.find({
        username: username,
        password : password
    })
    .then((data)=>{
        if(data){
            res.status(404).json('đã có tài khoản')
        }else{
            Account2Model.createOne({
                username :username,
                password :password
            })
            .then((data)=>{
                res.json('thành công')
            })
            .catch((err)=>{
                res.status(404).json('lỗi')
            })
        }
    })
})
app.post('/Login', (req, res, next)=>{
    var username = req.body.username;
    var password = req.body.password;
    Account2Model.findOne({
        username : username,
        password : password
    })
    .then((data)=>{
        res.json('đăng nhập thành công')
    })
    .catch((err)=>{
        res.status(404).json('Lỗi')
    })
})

app.listen(process.env.PORT, (req, res, next)=>{
    console.log('sever running.......')
})