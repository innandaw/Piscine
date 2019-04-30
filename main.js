var joueur=1;
var score1=0;
var score2=0;
var nom=['case1','case2','case3','case4','case5','case6','case7','case8','case9'];
var rempli=[0,0,0,0,0,0,0,0,0];

function restart()
{
	for(var i=0; i<10; i++)
	{
		document.getElementById(nom[i]).bgColor = "green";
		rempli[i]=0;
	}
}

function score()
{
	document.write(score1);	
}