var 
 express = require('express'),
 router = express.Router(),
 bodyParser = require('body-parser'),
 app = express(),
 Account2Model = require('./Mongoose/model')



app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json())

app.post('/register',(req, res, next)=>{
    var username = req.body.username;
    var password = req.body.password;

    Account2Model.findOne({
        username:username,
        password:password
    })
    .then((data)=>{
        if(data){
            res.status(200).json('user da ton tai')
        }else{
            Account2Model.create({
                username:username,
                password:password
            })
            .then((data)=>{
                res.json('Successfully')
            })
            
            .catch((err)=>{
                res.status(200).json('error')
            })
        }
    })


})

app.post('/Login',(req, res, next)=>{
    var username = req.body.username;
    var password = req.body.password;

    Account2Model.findOne({
        username:username,
        password:password
    })
    .then((data)=>{
        if(data){
            res.json('successfully')
        }else{
            res.status(200).json('ban chua tao tai khoan')
        }
        
    })
   
    
})
 

app.listen(8000, (req, res, next)=>{
    console.log('Sever running.............')
})
