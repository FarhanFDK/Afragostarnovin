$(document).ready(function(){
	$('#hamburger').click(function(){
		$(this).toggleClass('open');
	});
});
function open(){
    let con=document.getElementById('menu-content');
	document.con.style.height="200px";
	document.con.style.marginBottom="200px";
}