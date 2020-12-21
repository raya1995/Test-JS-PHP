var div= document.createElement("div");

  var id;

  div.setAttribute(id,"madiv")
  div.classList="petit jaune";

  
  div.style.width="300px";
  div.style.height="200px";
  div.style.position="relative";

  div.textContent="hello world";





  
 
  
var footer=document.createElement("footer");

  var id;

  footer.setAttribute(id,"monFooter");


  footer.classList="petit jaune";

  
  footer.style.width="300px";
  footer.style.height="200px";
  footer.style.position="relative";
  footer.style.backgroundColor="black";

  var divGauche =footer.appendChild(document.createElement('div'));

  divGauche.setAttribute(id,"divGauche");
  divGauche.classList="petit jaune";

  divGauche.style.width="100";
  divGauche.style.height="150";
  divGauche.style.position="absolute";
  divGauche.style.backgroundColor="red";
  divGauche.style.left=0;
  divGauche.style.top=0;
 
  var divDroite =footer.appendChild(document.createElement('div'));

  divDroite.setAttribute(id,"divDroite");
  divDroite.classList="petit jaune";

  divDroite.style.width="100";
  divDroite.style.height="150";
  divDroite.style.position="absolute";
  divDroite.style.backgroundColor="blue";
  divDroite.style.left=0;
  divDroite.style.top=0;


  console.log(footer)