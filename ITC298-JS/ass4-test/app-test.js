function User(obj) {
  
   this.name = obj.name;
   this.age = obj.age;
  
  var self = this;
  $.each(obj, function(key, value) {
    self[key] = value;
   });
  
  
  this.display = function() {
  
  var template = $('#template').html();
	var compiled = Handlebars.compile(template);
	var finishedHtml = compiled(this);
 
  }; 
 }
 


$('#items').append(myObj.display());

