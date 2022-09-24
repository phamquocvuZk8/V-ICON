const { ObjectId } = require('mongodb');
const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/V-ICON',{
    useNewUrlParser: true,
    useUnifiedTopology: true,
    family: 4
});/// populate('trường'), ref:model

const Schema = mongoose.Schema

const Account = new Schema({
    username:String,
    password:String,
    information1:{
        type:String,
        ref:'Card'
    },
    information2:{
        type:String,
        ref:'Card2'
    }
},{
    collection:'Account'
})
const Card = new Schema({
    address:{
        type:String,
        ref:'Card2'
    },
    numberHouse: Number
},{
    collection:'Card'
})
const Card2 = new Schema({
    age:Number,
    numberphone:Number,
    salary:{},
    CMND : Number,
    
},{
    collection:'Card2'
})

const AccountModel = mongoose.model('Account', Account)
const CardModel = mongoose.model('Card', Card)
const Card2Model = mongoose.model('Card2', Card2)


AccountModel.find({
    username:'Pham Quoc Vu'
})
.populate('information2')
.populate('information1')
.populate({
    path:'information1',
    populate:{path:'address'}
})


.then((data)=>{
    console.log('data', data)
})
.catch((err)=>{
    console.log('error',err)
})