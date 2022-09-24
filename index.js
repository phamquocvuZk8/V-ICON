const path = require ('path');
const fs = require('fs');
const os = require('os');
const events = require('events');
var ham = new events.EventEmitter();

///path//
// console.log(path.basename('C:/Users/This PC/Documents/Code/index.js'));/////Xuất ra : index.js
// console.log(path.dirname('C:/Users/This PC/Documents/Code/index.js'));////Xuất ra : C:/Users/This PC/Documents/Code
// console.log(path.parse('C:/Users/This PC/Documents/Code/index.js'));
// console.log(path.join('C:/Users/This PC/Documents/Code/index.js'));////xuất ra : C:/Users/This PC/Documents/Code/index.js


/////fs///////

// console.log(fs.readdirSync('./')); ////liệt kê
// console.log(fs.readdir('@', function(err, err2){
//     console.log('error');
// }));

//////////os/////////

// console.log(os.hostname());
// console.log(os.totalmem());

/////////events
var g = ham.on('error', function(){
        var c = 10;
        var d =10;
        function so(a,b){
            return a + b;
        }
        var f = so(c,d);
        console.log(f);
    });

/////////http