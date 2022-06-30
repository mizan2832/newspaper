function myPrint(id=null) {
	// col-md-9 ml-sm-auto col-lg-10 px-4
	var nav = document.getElementsByTagName('nav');
	var tag = document.getElementById('main');
	var nav_div = document.getElementsByClassName('sidebar-sticky')[0];
	tag.className = 'col-md-12 ml-sm-auto col-lg-10 px-4';
	
	i = 0;
	while(nav[i]){
		nav[i].style.display = 'none';
		i++;
	}
	
	nav_div.style.display = 'none'
	window.print();
	myDisplay(nav,tag,nav_div);
}
function myDisplay(nav,tag,nav_div) {
	tag.className = 'col-md-9 ml-sm-auto col-lg-10 px-4';
	
	i = 0;
	while(nav[i]){
		nav[i].style.display = '';
		i++;
	}
	
	nav_div.style.display = ''
}