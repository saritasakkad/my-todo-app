// calandrier
var datepickerDefault = new MtrDatepicker(
	{
	  target: "demo",
	}
);

var datepickerDefault2 = new MtrDatepicker(
	{
	  target: "demo2",
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

// ajax js php

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
	  let data = JSON.parse (this.responseText)
	  setTask(data);
    }
  };
  xhttp.open("POST", "./core/request.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("getAllTask=hello");
}
loadDoc()

// Afficher les taches a faire dqns

function setTask(tasks){
	// Boucle dans chaque taches
	for (let task of tasks) {
		//Pour chacune des taches
		var div = document.createElement('div'); // Crée une div
		div.id="content"+task.task_id; // Donne un id à cette div
		div.innerHTML = "<h1>"+task.task_title+"</h1>"; // Lui donne un contenu

		document.getElementById('maincontainer').appendChild(div); // Ajoute cette div à #maincontainer
	}
}
