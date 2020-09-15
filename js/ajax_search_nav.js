

(function() {
	
	
	var searchElement = document.getElementById('search'),
	    results = document.getElementById('results'),
	    selectedResult = -1, // Permet de savoir quel résultat est sélectionné : -1 signifie "aucune sélection"
	    previousRequest, // On stocke notre précédente requête dans cette variable
    	previousValue = searchElement.value; // On fait de même avec la précédente valeur
	

	
	function getResults(keywords) { // Effectue une requête et récupère les résultats
		
        // on oit creer un objet XHR pour commencer a preparer notre requete 
        var xhr = new XMLHttpRequest();
        // la preparation de la requete se fait par la methode open( avec 5 parametes)
        // 1. la methode (ici Get)
        // 2. l'URL à laquelle vous souhaitez soumettre votre requête
        // 3. Le troisième argument est un booléen facultatif dont la valeur par défaut est true. À true, la requête sera de type asynchrone, à false elle sera synchrone
        // 4. Les deux derniers arguments sont à spécifier en cas d'identification nécessaire sur le site Web

       // la page 'http://localhost/miiting/controleurs/c_barre_recherche.php? reçoit la requête
	    xhr.open('GET', './controleurs/c_barre_recherche.php?s='+ encodeURIComponent(keywords)); //econdeURIComponent protéger pour conserver les caractères spéciaux et les espaces
    
        // l'objet XHR possède un événement nommé readystatechange auquel il suffit d'attribuer une fonction
    	xhr.addEventListener('readystatechange', function() {
            //L'utilisation de la propriété readyState est nécessaire pour connaître l'état de la requête.
            if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) { // spécifier une fonction de callback afin de savoir quand la requête s'est terminée. grace au done et le 200 permet de savoir que la requete c'est bien passe
	            displayResults(xhr.responseText); //on recupere les resultats sous forme de texte brut
        	}
	    });
	
	    xhr.send(null); // la requete est prete on envois ts 
	
	    return xhr;
	
	}
	
	function displayResults(response) { // Affiche les résultats d'une requête
	

    	results.style.display = response.length ? 'block' : 'none'; // On cache le conteneur si on n'a pas de résultats
	
	    if (response.length) { // On ne modifie les résultats que si on en a obtenu
	
	        response = response.split('|');
	        var responseLen = response.length;
	
	        results.innerHTML = ''; // On vide les résultats
	
	        for (var i = 0, div ; i < responseLen ; i++) {
	
            	div = results.appendChild(document.createElement('div'));
            	div.innerHTML = response[i];
	
            	div.addEventListener('click', function(e) {
                	chooseResult(e.target);
	            });
	
	        }
	
	    }
	
	}
	
	function chooseResult(result) { // Choisi un des résultats d'une requête et gère tout ce qui y est attaché
	
	    searchElement.value = previousValue = result.innerHTML; // On change le contenu du champ de recherche et on enregistre en tant que précédente valeur
	    results.style.display = 'none'; // On cache les résultats
	    result.className = ''; // On supprime l'effet de focus
	    selectedResult = -1; // On remet la sélection à "zéro"
	    searchElement.focus(); // Si le résultat a été choisi par le biais d'un clique alors le focus est perdu, donc on le réattribue
	
	}
	
	
    
    //nous permet lorsque y'a les resultats qui s'afffcihent de pouvoir passer de resultats en resultats
	searchElement.addEventListener('keyup', function(e) {
	
		var divs = results.getElementsByTagName('div');
		
	    if (e.keyCode == 38 && selectedResult > -1) { // Si la touche pressée est la flèche "haut"
	        divs[selectedResult--].className = '';

	        if (selectedResult > -1) { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
				divs[selectedResult].className = 'result_focus';
				
	        }
	
	    }

	    else if (e.keyCode == 40 && selectedResult < divs.length - 1) { // Si la touche pressée est la flèche "bas"

        	results.style.display = 'block'; // On affiche les résultats
	
	        if (selectedResult > -1) { // Cette condition évite une modification de childNodes[-1], qui n'existe pas, bien entendu
            	divs[selectedResult].className = '';
	        }
	
			// n lui donne cette classe pour pouvoir geerer sa couleur et montrer qie c'es le'element selectionner
        	divs[++selectedResult].className = 'result_focus';
	
	    }
	
		else if (e.keyCode == 13 && selectedResult > -1) { // Si la touche pressée est "Entrée"
		
	        chooseResult(divs[selectedResult]);
	
	    }
	
    	else if (searchElement.value != previousValue) { // Si le contenu du champ de recherche a changé
	        previousValue = searchElement.value;
	
	        if (previousRequest && previousRequest.readyState < XMLHttpRequest.DONE) {
	            previousRequest.abort(); // Si on a toujours une requête en cours, on l'arrête
        	}
	
	        previousRequest = getResults(previousValue); // On stocke la nouvelle requête
	
	        selectedResult = -1; // On remet la sélection à "zéro" à chaque caractère écrit
	
    	}
	
	});
	
})();