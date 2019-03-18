var express = require('express');
var path = require('path');
var app = express();
var bodyParser = require('body-parser');
app.use(bodyParser());

//compileX
var compiler = require('compilex');
var option = {stats : true};
compiler.init(option);

app.get('/' , function (req , res ) {

	res.sendfile( __dirname + "/navbar.html");

});


app.post('/compilecode' , function (req , res ) {
	  var code = req.body.code;	
	  var input = req.body.input;
    var inputRadio = req.body.inputRadio;
    var lang = req.body.lang;
    if( lang === "Python")
    {
        if(inputRadio === "true")
        {
            var envData = { OS : "windows"};
            compiler.compilePythonWithInput(envData , code , input , function(data){
                res.send(data["output"]);
            });            
        }
        else
        {
            var envData = { OS : "windows"};
            compiler.compilePython(envData , code , function(data){
                res.send(data["output"]);
            });
        }
    }

});

app.get('/fullStat' , function(req , res ){
    compiler.fullStat(function(data){
        res.send(data["output"]);
    });
});

app.listen(8080);