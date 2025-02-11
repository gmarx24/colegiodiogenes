// JavaScript Document
$(".submenu").click(function(){
		$(this).children("ul").slideToggle();			
})

$("ul").click(function(m){
		m.stopPropagation();		
})