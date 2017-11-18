// calandrier
var datepickerDefault = new MtrDatepicker(
	{
	  target: "demo",
	}
);

// shuitcher entre 2 pages
var rajouter = document.getElementById('bouton');
var maincontainer = document.getElementById('maincontainer');
var maincontainer2 = document.getElementById('maincontainer2');
var x = true;
rajouter.addEventListener('click',changeContenu);

function changeContenu() {
if(x == true) {
maincontainer.style.display = 'none';
maincontainer2.style.display = 'flex';
rajouter.style.transform = 'rotate(45deg)';
x = false;
} else {
maincontainer.style.display = 'flex';
maincontainer2.style.display = 'none';
rajouter.style.transform = 'rotate(0deg)';
x = true;
}
}
