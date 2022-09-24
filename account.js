var express = require('express');
var app = express();
var bodyParser = require('body-parser');
var Account2Model = require('./Mongoose/model');

var router = express.Router();

app.use(bodyParser.urlencoded({extended:true}));
app.use(bodyParser.json());

////lấy dữ liệu từ DB/////////////

router.get('/Login',(req, res, next)=>{
    var username = req.body.username;
    var password = req.body.password;
    Account2Model.findOne({
        username:username,
        password:password
    })
    .then((data)=>{
        if(data){
            res.json('thành công')
        }else{
            res.status(404).json('không thành công')
        }
    })
})
////////thêm dữ liệu vào trong DB
router.post('/create', (req, res, next)=>{
    var username = req.body.username;
    var password = req.body.password;
    Account2Model.findOne({
        username:username,
        password:password
    })
    .then((data)=>{
        if(data){
            res.status(404).json('tai khoan da co trong sever')
        }else{
            Account2Model.create({
                username:username,
                password:password
            })
            .then((data)=>{
                res.json('SuccessFully')
            })
            .catch((err)=>{
                res.status(404).json('Error')
            })
        }
    })
})
/////thay đổi dữ liệu
router.put('/:id',(req, res, next)=>{
    var id  = req.params.id
    var Newusername = req.body.username;
    Account2Model.findByIdAndUpdate(id,{
        username: Newusername
    })
    .then((data)=>{
        res.json('thay đổi thành công')
    })
    .catch((err)=>{
        res.status(404).json('thay đổi không thành công')
    })
})
/////xóa dữ liệu
router.delete('/:id',(req, res, next)=>{
    var id = req.params.id
    var delete1 = req.body.delete1;
    Account2Model.findByIdAndDelete(id,{
        delete1:delete1
    })
    .then((data)=>{
        res.json('xóa tài khoản thành công')
    })
    .catch((err)=>{
        res.status(404).json('không thể xóa tài khoản ')
    })

})


app.use('/api/',router)

app.listen(8000, (req, res, next)=>{
    console.log('Sever running...........')
})