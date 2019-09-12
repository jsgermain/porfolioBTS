#menu ul li:first-child > a:after 
{
	content: '';
	position: absolute; /* chargé de la position du pointeur (généralement) */
	left: 40px; /* reglage du pointeur de la liste déroulante (horizontale vers la gauche)*/
	top: -10px; /* Reglage du pointeur de la liste déroulante (vertical vers le haut) */
	border-left: 6px solid transparent; /* affiche la moitié gauche du pointeur*/
	border-right: 6px solid transparent; /* affiche la moitié droite du pointeur*/
	border-bottom: 6px solid #444; /* chargé d'afficher le pointeur (générale) */
}


/* la liaison des deux listes déroulantes*/
#menu ul ul li:first-child a:after 
{
	left: -6px;
	
	top: 50%;
	margin-top: -6px;
	border-left: 0;

	border-bottom: 6px solid transparent;
	border-top: 6px solid transparent;

	border-right: 6px solid #3b3b3b;
}
