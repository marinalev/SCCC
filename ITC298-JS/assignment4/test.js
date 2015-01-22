console.log('loading test.js');

//custom object
//function Item(obj) {
//copy obj props to this
function Tea(obj) {

	this.beverage = obj.beverage;
	this.origin = obj.origin;
	this.type=obj.type;
	this.price = obj.price;
	this.weight = obj.weight;
	this.variety = obj.variety;
	this.brand = obj.brand;

	var self = this;
	$.each(obj, function(key, value) {
		self[key] = value;
	}); 

//this.display = function()
	this.display = function() {
		var template = $('#template').html();
		var compiled = Handlebars.compile(template);
		var finishedHtml = compiled(this);
	};
	
	//$('#items').append(myObj.display());
}
//end of custom object

//static object start
var staticObj = {
	//insert: function(item, tag)
	insert: function(obj, tag) {
//   jqSelectedObject.append(obj.display());
		$(tag).append(obj.display());
	},

	//megaParse: function(obj, tag)
	megaParse: function(teaArray, tag) {
		staticObj.sort("origin", teaArray);
		
		$.each(teaArray, function(index, tea){
			var myTea = new Tea(tea);
			staticObj.insert(myTea, tag);
		});
	},
  
//   //---------------------------
//   staticObject.insert(new User(obj));
// }

	//sort: function(prop, arr)
	sort : function(propToSortBy, arrayToSort) {
		arrayToSort.sort(function(a,b) {
			return b[propToSortBy] < a[propToSortBy];
		}) 
	}
}
	
//end of static object

//javascript array of objects

var arr = [
  {
		beverage: "tea",
		origin: "India",
		type: "black",
		price: "$12.95",
		weight : "4 oz",
		variety: "loose leaf",
		brand: "Mighty Leaf"
  },{
		beverage : "coffee",
		origin: "Latin America",
		type : "cafinated",
		price : "$10.95",
		weight : "4 oz",
		variety : "medium dark",
		brand: "Stumptown"
  },{
		beverage : "tea",
		origin: "Afrika",
		type : "red bush",
		price : "$18.95",
		weight : "4 oz",
		variety : "loose leaf",
		brand : "Mighty Leaf"
  },{
		beverage : "tea",
		origin: "China",
		type: "gun powder",
		price : "$7.95",
		weight : "4 oz",
		variety : "loose leaf",
		brand : "Mighty Leaf"
  },{
		beverage : "tea",
		origin: "Tibet",
		type: "white",
		price : "$11.95",
		weight : "4 oz",
		variety : "loose leaf",
		brand : "Pickwick"
  }];

//call megaParse
staticObj.megaParse(arr, '#items');


//put any jQuery animations here
$('#items').click(function() {
	$(this).next().slideToggle();
})