$( document ).ready(function() {

var menu = $('#cssmenu');
var menuList = menu.find('ul:first');
var listItems = menu.find('li').not('#responsive-tab');





menu.on('click', '#responsive-tab', function(){
	//event.preventDefault();
	$("#cssmenu > ul").toggleClass("is-visible");
	listItems.slideToggle("fast");
	listItems.toggleClass('collapsed');
});

});