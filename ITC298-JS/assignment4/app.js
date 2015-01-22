console.log('loading app.js');

function Tea(obj) {
  
   this.beverage = obj.beverage;
   this.origin = obj.origin;
   this.type=obj.type;
   this.price = obj.price;
   this.weight = obj.weight;
   this.variety = obj.variety;
   this.brand = obj.brand;
   
   this.display = function() {
   
var self = this;
//   $.each(obj, function(key, value) {
//     self[key] = value;
//   });
   
   var compiledTemplate = Handlebars.compile(htmlTemplate);
	var finished = compiledTemplate(teas);
	$('#teas').append(finished);
	//$('.panel').click(function(ev) {
  //$(this).find('.panel-body').slideToggle();
  };
 }
 $('#teas').append(myObj.display());
 
 name : $('#username').val(),
 
 var userObj = {
    name : $('#username').val(),
    email : $('#email').val(),
    password : $('#password').val(),
    screenName : $('#screenname').val()
  };
 
 
 function insert(obj, jqSelectedObject) {
	jqSelectedObject.append(obj.display());
}
function megaParse(obj) {
	var myObj = new User(obj);
	staticObject.insert(myObj);
}

sort function: function(propertyToSortyBy, arrayToSort)
sort : function(propToSortBy,arrayToSort) {
  arrayToSort.sort(function(a,b) {
    return b[propToSortBy] < a[propToSortBy];
  }); 
  
  

staticObject.insert(new User(obj));



var htmlTemplate = $('#teaTemplate').html();

var teas = [
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

});

$('#item').click(function() {
  //$(this).next().slideToggle();
  $(this).animate({
    margin:'+=12'
  }, 5000);
});


