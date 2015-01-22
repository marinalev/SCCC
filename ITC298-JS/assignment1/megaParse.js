console.log('loading megaParse.js');
 
 //make stringified JSON object here
 var obj = {"beverage" : "tea","origin" : "India","type" : "black","price" : "$12.95","weight" : "4 oz","variety" : "loose leaf","brand" : "Mighty Leaf"}
 var objString = JSON.stringify(obj);
 
 
 //make megaParse() function here
	function megaFunc(stringifiedObj){
		var jsonObj = JSON.parse(stringifiedObj);
		/*
		display number of properties
		var propertyNames = Object.getOwnPropertyNames(jsonObj);
		console.log('number of properties: ' + propertyNames.length);
		*/
		
		//display number of properties
		var count=0;
		
		for(var key in obj){
			console.log('The ' + key + ' has the value of ' + obj[key]);
			count++;
		}
		console.log('number of properties: ' + count);
		return jsonObj;
	};
	
 
 //call megaParse() function with your stringified object here
 megaFunc (objString);
 
 
 //resources: https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/getOwnPropertyNames?redirectlocale=en-US&redirectslug=JavaScript%2FReference%2FGlobal_Objects%2FObject%2FgetOwnPropertyNames
