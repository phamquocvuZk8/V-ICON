const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost/V-ICN',{
    useNewUrlParser: true,
    useUnifiedTopology: true,
    family: 4
});/// populate('trường'), ref:model

const Schema = mongoose.Schema;

const Account2 = new Schema({
    username:String,
    password:String
},{
    collection:'Account2'
})

const Account2Model = mongoose.model('Account2', Account2)


module.exports = Account2Model