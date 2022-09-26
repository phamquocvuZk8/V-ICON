const express = require('express')
const app = express();
const path = require('path')
const bodyParser = require('body-parser')
const Account2Model = require("./Mongoose/model")

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json())
app.get('/create',(req, res, next)=>{
    res.sendFile(path.join(__dirname,'duan.html'))
})
app.post('/create',(req, res, next)=>{
    var username = req.body.username
    var password = req.body.password
    Account2Model.findOne({
        username:username,
        password : password
    })
    .then((data)=>{
        if(data){
            res.sendFile(path.join(__dirname, 'hello.html'))
        }else{
            Account2Model.create({
                username :username,
                password :password
            })
            .then((data)=>{
                res.sendFile
            })
        }
    })
})

app.listen(process.env.PORT, (req, res, next)=>{
})