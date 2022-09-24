var express = require('express');
var router1 = express.Router();

router1.get('/hello', (req, res, next)=>{
    res.json('hello');
    console.log('xin chào')
    next();
}, (req, res, next)=>{
    console.log('xin chao1');
})

router1.get('/success',(req, res)=>{
    res.json('success');
});

module.exports = router1;
