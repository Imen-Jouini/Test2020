'use strict'

/////////////////////////////////
// Fonctions
/////////////////////////////////

function getHTML(event) {
	event.preventDefault()
	//Le paramètre data représente les données reçues en réponse
	$.get('ajax.php' , function(response) {
		$('#section').append(response)
	})
}

function handleJsonData(response) {
	//console.log(response)	
	$('#section').text(response.prenom + ' ' + response.nom + ' ' + response.age)
}

function getJson() {
	$.getJSON('json.php', handleJsonData)
	//Peut être remplacé par: 
	//$.get('json.php', handleJsonData, 'json')
}

/////////////////////////////////
// Code principal
/////////////////////////////////

$('button').on('click', getHTML)
