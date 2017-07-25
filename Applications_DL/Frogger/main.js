$(document).ready(function() {
	var frog = $("#frog");	

	// Positionnement de la grenouille 
	

	var idVoiture = 1;
	var BooleanVoiture = false;
	var temps = "";
	var axe = "-";
	var largeurEcran = $(window).width();
	var positionLeft = $(window).width() / 4;
	var vitesse = 3000;
	var vitesseToString = 'Normale';
	var niveau = 3;
	var mv = 30; 
	var score = 0;
	var hdcp = 0;

	attribuerNiveau();
	afficherInfoJoueur();
	afficherInfoVoiture();	
	trouverVitesseToString();
	creerPartie();	

	function setHdcp(){	
		switch(mv){
		case 10: hdcp = 7
		break;
		case 20: hdcp = 3
		break;
		case 30: hdcp = 0
		}	
	}

	function gainScore(){
		switch(niveau){
			case 1:
				score = score + 1 + hdcp;
				break;
			case 2:
				score = score + 2 + hdcp;
				break;
			case 3:
				score = score + 6 + hdcp;
				break;
			case 4:
				score = score + 12 + hdcp;
				break;
			case 5:
				score = score + 20 + hdcp;
				break;
		}
	}

	function creerPartie(){
		$('.main-route').append('<div id="frog" class="personnage"></div>');
		$('.main-route').append('<div id="poussifeu" class="personnage"></div>');
		frog = $('#frog');
		poussifeu = $('#poussifeu');
		positionFrog();
		positionPoussifeu();
		currentFrogTop();
		vitesse = 3000;
		vitesseToString = 'Normale';
		niveau = 3;
		mv = 30; 
		score = 0;
		hdcp = 0;

	}

	// function positionJoueur(joueur){
	// 	if (joueur == 'poussifeu'){
	// 		$("#poussifeu").css({
	// 		left: ($(window).width() - $(window).width() / 4)	
	// 	});
	// 	} else {
	// 		$("#frog").css({
	// 		left: ($(window).width() / 4)	
	// 	});
	// 	}
	// }

	function changerTitleOption(){
		$('#option-title').html(vitesseToString);
	}	

	// function replacerJoueur(joueur){
	// 	$('#'+joueur).remove();
	// 	$('.main-route').append('<div id="'+joueur+'" class="personnage"></div>');
	// 	joueur = $('#'+joueur);
	// 	positionJoueur(joueur)
	// }

	function replacerFrog(){
		$('#frog').remove();
		$('.main-route').append('<div id="frog" class="personnage"></div>');
		frog = $('#frog');
		positionFrog();
	}

	function replacerPoussifeu(){
		$('#poussifeu').remove();
		$('.main-route').append('<div id="poussifeu" class="personnage"></div>');
		poussifeu = $('#poussifeu');
		positionPoussifeu();
	}

	function positionFrog(){
		$("#frog").css({
			left: ($(window).width() / 4)
		});
	}

	function positionPoussifeu(){
		$("#poussifeu").css({
			left: ($(window).width() - $(window).width() / 4)	
		});
	}

	function attribuerVitesse(){
		var Choix = document.getElementById('vitesseform').options.selectedIndex;	
		vitesse = Choix * 1000;
		trouverVitesseToString();		
		actualiserInfoVoiture();
		switch(vitesseToString){
		case 'Très rapide': niveau = 5
		break;
		case 'Rapide': niveau = 4
		break;
		case 'Normale': niveau = 3
		break;
		case 'Lente': niveau = 2
		break;
		case 'Très lente': niveau = 1
		}
		actualiserInfoJoueur();
	}

	function RemoveVoiture(){
		// not developped yet
	}

	document.getElementById("vitesseform").onchange = function(){
		attribuerVitesse();
	};

	function afficherInfoJoueur(){
	$('#info-joueur').append( '<span id="score"> Score : ' + score + "</span></br>");
	$('#info-joueur').append( '<span id="niveau"> Niveau : ' + niveau + "</span></br>");	
	var mvAttribut = 'Rapide';
	switch(mv){
		case 10: mvAttribut = 'Lent'
		break;
		case 20: mvAttribut = 'Normal'
		break;
		case 30: mvAttribut = 'Rapide'
		}
	$('#info-joueur').append( '<span id="mvAttribut"> Déplacement : ' + mvAttribut + "</span>");	
	}

	function trouverVitesseToString(){
		switch(vitesse){
		case 1000: vitesseToString = 'Très rapide'
		break;
		case 2000: vitesseToString = 'Rapide'
		break;
		case 3000: vitesseToString = 'Normale'
		break;
		case 4000: vitesseToString = 'Lente'
		break;
		case 5000: vitesseToString = 'Très lente'
		}
	}

	function afficherInfoVoiture(){
	$('#info-voiture').append('<span id="voiture"> Vitesse des voitures : ' + vitesseToString + '</span></br>');
	$('#info-voiture').append('<span id="handicape"> Bonus handicape : ' + hdcp + "</span></br>");	
	}

	function actualiserInfoVoiture(){
	trouverVitesseToString();	
		if (vitesseToString == 'Très rapide'){					
			$('#voiture').html('<span> Vitesse des voitures : ' + vitesseToString + ' ' + '<img src="img/rabbit.png" </span>');
		} else if (vitesseToString == 'Très lente'){
			$('#voiture').html('<span> Vitesse des voitures : ' + vitesseToString + ' ' + '<img src="img/turtle.png" </span>');
		} else {
			$('#voiture').html('Vitesse des voitures : ' + vitesseToString);
		}
	$('#handicape').html("Bonus handicape : " + hdcp);
	}

	function actualiserInfoJoueur(){		
	$('#score').html("Score : " + score + " (" + hdcp + " + " + (score-hdcp) + ")" );
	$('#niveau').html("Niveau : " + niveau);			
		switch(mv){
		case 10: mvAttribut = 'Lent'
		break;
		case 20: mvAttribut = 'Normal'
		break;
		case 30: mvAttribut = 'Rapide'
		}
		$('#mvAttribut').html("Déplacement : " + mvAttribut);
	}

	function killAllVoiture(){
		$('*').remove();
		$('*').remove();

	}

	var currentLeft = '';

	function voitureGaucheMove(y, x){
		if (x == "left"){
			axe = "-"
		} else {
			axe = "+"
		}	
		var idVoitureTemporaire = x+"-" + idVoiture;
		$('body').append('<img src="img/voiture_vers_'+x+'.png" class="voiture voiture_vers_'+x+'-'+y+'" id='+idVoitureTemporaire+'>');		
		$('#'+idVoitureTemporaire).css(x, $(window).width() - 150 + "px");			
		idVoiture++;
		temps = Math.floor(Math.random() * (vitesse - (vitesse - (vitesse/3)) + 1)) + vitesse - vitesse/3;
		if (x == 'left' && y == 'top')
		{	
			//vers la left-1
			$('#'+idVoitureTemporaire).animate(
				{				
				"left": "0", 				
				},{
				duration : temps,
				step:function(currentLeft)
				{				
						var currentLeftVoiture = currentLeft;
						collisionRightTop(currentLeft);		                                                                      
                },
				complete:function()
				{
				$('#'+idVoitureTemporaire).remove();			
				voitureGaucheMove(y, x);
			    }
			});			
		}
		else if (x == 'left' && y == 'bot')
		{	
			//vers la left-1
			$('#'+idVoitureTemporaire).animate(
				{				
				"left": "0", 				
				},{
				duration : temps,
				step:function(currentLeft)
				{				
						var currentLeftVoiture = currentLeft;
						collisionRightBot(currentLeft);		                                                                      
                },
				complete:function()
				{
				$('#'+idVoitureTemporaire).remove();			
				voitureGaucheMove(y, x);
			    }
			});			
		} else if (x == 'right' && y == 'top') {
			//vers la right-1
			$('#'+idVoitureTemporaire).animate(
				{				
				"left":"+" + $(window).width() - 150, 
				},
				{
				duration : temps,
				step:function(currentLeft)
				{           
						var currentLeftVoiture = currentLeft;
						collisionLeftTop(currentLeft);															                                                   
                },
				complete:function()
				{
				$('#'+idVoitureTemporaire).remove();			
				voitureGaucheMove(y, x);
				}
			});							
		}
		else { // x = right et y = top
			//vers la right-1
			$('#'+idVoitureTemporaire).animate(
				{				
				"left":"+" + $(window).width() - 150, 
				},
				{
				duration : temps,
				step:function(currentLeft)
				{           
						var currentLeftVoiture = currentLeft;
						collisionLeftBot(currentLeft);															                                                   
                },
				complete:function()
				{
				$('#'+idVoitureTemporaire).remove();			
				voitureGaucheMove(y, x);
				}
			});							
		}
	}	
	
	var varcurrentFrogTop = '';

	var CollisionLeftBot = [500, 530, 560];
	var CollisionLeftTop = [290, 320, 350];
	var CollisionRightBot = [410, 440];
	var CollisionRightTop = [110, 140];

	function collisionLeftBot(currentLeftVoiture){
		currentFrogLeft();
		currentFrogTop();		
		if (varcurrentFrogTop > 469 && varcurrentFrogTop < 531)
		{
			if ((varcurrentFrogLeft - currentLeftVoiture + 150) < 200 && (varcurrentFrogLeft - currentLeftVoiture + 150) > 0)
			{
			replacerFrog();						
	
			}
		}
	}

	function collisionLeftTop(currentLeftVoiture){
		currentFrogLeft();
		currentFrogTop();		
		if (varcurrentFrogTop > 169 && varcurrentFrogTop < 231)
		{
			if ((varcurrentFrogLeft - currentLeftVoiture + 150) < 200 && (varcurrentFrogLeft - currentLeftVoiture + 150) > 0)
			{
			replacerFrog();						
	
			}
		}
	}

	function collisionRightBot(currentLeftVoiture){
		currentFrogLeft();
		currentFrogTop();		
		if (varcurrentFrogTop > 319 && varcurrentFrogTop < 391)
		{
			if ((currentLeftVoiture - varcurrentFrogLeft + 75) > 0 && (currentLeftVoiture - varcurrentFrogLeft + 75) < 100)
			{
			replacerFrog();						
	
			}
		}
	}

	function collisionRightTop(currentLeftVoiture){
		currentFrogLeft();
		currentFrogTop();		
		if (varcurrentFrogTop > 50 && varcurrentFrogTop < 111)
		{
			if ((currentLeftVoiture - varcurrentFrogLeft + 75) > 0 && (currentLeftVoiture - varcurrentFrogLeft + 75) < 100)
			{
			replacerFrog();						
	
			}
		}
	}

	function currentFrogLeft(){
		return varcurrentFrogLeft = $('#frog').position().left;		
	}

	function currentFrogTop(){
		varcurrentFrogTop = $('#frog').offset().top;


	}

	function DemarrerVoiture(){
		voitureGaucheMove("top", "left");
		voitureGaucheMove("top", "right");
		voitureGaucheMove("bot", "left");
		voitureGaucheMove("bot", "right");
		BooleanVoiture = true;		
	}

	$('#launch-cars').click(function(event) {
		if (BooleanVoiture == false)
		{
			DemarrerVoiture();
			BooleanVoiture = true;
			$(this).fadeOut('400')
			$('#stop-cars').css({
					marginLeft : "15px"
			});
			changerTitleOption();

		}	
	});

	$('#stop-cars').click(function(event) {						
		$('#launch-cars').fadeIn('400');
		BooleanVoiture = false;
		attribuerNiveau(); // Mouvement du joueur
		actualiserInfoVoiture();
		actualiserInfoJoueur();
		killAllVoiture();
	});
	
	function attribuerNiveau(){
		switch(niveau)
		{
			case 3:
				mv = 30;
				break;
			case 4:
				mv = 20;
				break;
			case 5:
				mv = 10;
				break;
		}
	}
	
	$(document).keydown(function(e){
		switch (e.which)
		{
			case 37: // fleche gauche
			$('#frog').animate({left:'-=' + mv}, 1);
			currentFrogLeft();		
			if (frog.offset().left <= 0)
			{
				$('#frog').animate({left:'+=' + mv}, 1);
			}		     	   
			break;
			case 38: // fleche haut

			if (BooleanVoiture == false){
				$('#frog').animate({top:'-=' + mv}, 1);
				DemarrerVoiture();
				currentFrogTop();
				changerTitleOption();
				BooleanVoiture = true;								
				$('#launch-cars').fadeOut('200');
				$('#stop-cars').css({
					marginLeft : "15px"
				});
			} else {
				$('#frog').animate({top:'-=' + mv}, 1, currentFrogTop());
																
			}

			// Si le joueur gagne, le niveau augmente, donc la vitesse du personne diminue.
			
			if (frog.offset().top <= 0)
			{
				$('#frog').animate({top:'+=' + mv}, 1);
				gainScore();				
				if (niveau < 5){niveau++;}
				attribuerNiveau();								
				if (vitesse > 1000){
					vitesse = vitesse - 1000;
				}
				setHdcp();				
				actualiserInfoJoueur();
				actualiserInfoVoiture();
				replacerFrog();
				changerTitleOption();							
			}	

			break; 
			case 39: // fleche droite
			$('#frog').animate({left:'+=' + mv}, 1);
			currentFrogLeft();
			if (frog.offset().left >= ($(window).width() - 100))
			{
				$('#frog').animate({left:'-=' + mv}, 1);
			}
			break;
			case 40: // fleche bas
			$('#frog').animate({top:'+=' + mv}, 1);
			currentFrogTop();
			if (frog.offset().top >= 620)
			{
				$('#frog').animate({top:'-=' + mv}, 1);
				currentFrogTop();
			}			      
			break;
		}
	});

	$(document).keydown(function(e){
		switch (e.which)
		{
			case 81: // fleche gauche
			$('#poussifeu').animate({left:'-=' + mv}, 1);			
			if (poussifeu.offset().left <= 0)
			{
				$('#poussifeu').animate({left:'+=' + mv}, 1);
			}		     	   
			break;
			case 90: // fleche haut

			if (BooleanVoiture == false){
				$('#poussifeu').animate({top:'-=' + mv}, 1);
				DemarrerVoiture();
				BooleanVoiture = true;								
				$('#launch-cars').fadeOut('200');
				$('#stop-cars').css({
					marginLeft : "15px"
				});
			} else {
				$('#poussifeu').animate({top:'-=' + mv}, 1);												
			}

			// Si le joueur gagne, le niveau augmente, donc la vitesse du personne diminue.
			
			if (poussifeu.offset().top <= 0)
			{
				$('#poussifeu').animate({top:'+=' + mv}, 1);
				gainScore();				
				if (niveau < 5){niveau++;}
				attribuerNiveau();								
				if (vitesse > 1000){
					vitesse = vitesse - 1000;
				}
				setHdcp();				
				actualiserInfoJoueur();
				actualiserInfoVoiture();
				replacerPoussifeu();
				changerTitleOption();						
			}	

			break; 
			case 68: // fleche droite
			$('#poussifeu').animate({left:'+=' + mv}, 1);			
			if (poussifeu.offset().left >= ($(window).width() - 100))
			{
				$('#poussifeu').animate({left:'-=' + mv}, 1);
			}
			break;
			case 83: // fleche bas
			$('#poussifeu').animate({top:'+=' + mv}, 1);			
			if (poussifeu.offset().top >= ($(window).height() - 100))
			{
				$('#poussifeu').animate({top:'-=' + mv}, 1);
			}			      
			break;
		}
	});
});




