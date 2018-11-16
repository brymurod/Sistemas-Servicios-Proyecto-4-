var tdh1 = document.getElementById ( "tdh1" );
var tdh2 = document.getElementById ( "tdh2" );
var tdh3 = document.getElementById ( "tdh3" );


var app = angular.module("app", ["xeditable", "ui.bootstrap"]);
	//var app = angular.module("app", ["xeditable"]);
	app.run(function(editableOptions) {
	  editableOptions.theme = 'bs3'; // bootstrap3 theme. Can be also 'bs2', 'default'
	});	

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
});	
	
app.controller('TextareaCtrl', function($scope) {	    
	  $scope.text = {
		h1: tdh1.innerText,
		h2: tdh2.innerText,
		h3: tdh3.innerText
		
	  };
	});