$(document).ready(function() {
  $('p').each(function(index){
  	console.log(index);
  	alert($(this).text());
  });
});