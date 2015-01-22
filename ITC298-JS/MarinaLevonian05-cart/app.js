//http://jsbin.com/bikovasu/36/edit
//http://jsbin.com/minabodi/12/edit


console.log('loading app.js');

//custom object
//function Item(obj) {
	//copy obj props to this
function Tea(obj) {
	var self = this;
	$.each(obj, function(key, value) {
		self[key] = value;
	});

	//this.display = function()
	this.display = function() {
		var template = $('#template').html();
		var compiled = Handlebars.compile(template);
		var finishedHtml = compiled(this);
		return finishedHtml;
	};
}
//end of custom object

//static object start
var staticObj = {
	//insert: function(item, tag)
	insert: function(obj, tag) {
		var toAppendHtml = obj.display();
		var $appended = $(tag).append(toAppendHtml);
	},

	//load: function(callback)
	load: function(callback) {
		var apiKey = '1WSu0bLINVnI-G6EVBIA9n4VoqBMgF77X_79sTYZF9vI';
		var googleUrl = 'https://spreadsheets.google.com/feeds/list/@apiKey/od6/public/values?alt=json-in-script';
		//loadGoogleData: function(callback) {
	
		$.ajax({
		url : googleUrl.replace('@apiKey', apiKey),
		dataType : 'jsonp',
		success : function(data) {
			$.each(data.feed.entry, function(ix, val) {
			  var tempObj = {};
			  for(var key in val) {
				var matched = key.match(/gsx\$/);
				if(matched) {
				  tempObj[key.slice(4)] = val[key].$t;
				}     
			  }
			  var itemObj = new Tea(tempObj);
			  staticObj.data.push(itemObj);
			});
			
			staticObj.sort('name', staticObj.data);
		
			if(callback)
				callback(data);
			}
		});
	},
	//sort: function(prop, arr)
	sort : function(propToSortBy, arrayToSort) {
		arrayToSort.sort(function(a,b) {
			return b[propToSortBy].toLowerCase() < a[propToSortBy].toLowerCase();
		}) 
	},
	
	//data: []
	data: [],

	//cart: []
	cart: [],

	//display: function()
	//for each element in data
    //insert(obj, '#outlet')
	//add animation
	display: function() {
		$.each (staticObj.data, function (ix, obj){
			staticObj.insert(obj, '#outlet');
		});
		$('.panel-heading').click(function() {
			$(this).next().slideToggle();
		})		
    },

	//displayCart: function()
    //for each element in data
    //check if the id is in StaticObject.cart
    //insert(see above) 
	displayCart: function() {
	  $.each(staticObj.data, function(ix, obj){
		if ($.inArray(obj.id, staticObj.cart) != -1){
			staticObj.insert(obj, '#outlet');
		}
	  });	  
    },	

	//addToCart: function(itemId)
    //check if itemId is in StaticObject.cart
    //can use $.inArray()
    //if it's not, push into StaticObject.cart
	addToCart: function(itemId) {
	  if ($.inArray(itemId, staticObj.cart) == -1){
          staticObj.cart.push(itemId);
      }
    }
};
//end of static object

$('#everything').click(function(){
	$('#outlet').empty();
	staticObj.display();
});

$('#cart').click(function(){
	$('#outlet').empty();
	staticObj.displayCart();
});

//call load with callback
staticObj.load(staticObj.display);