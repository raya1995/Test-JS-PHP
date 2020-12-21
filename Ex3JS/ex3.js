for(let i=0;i<10;i++){

   var lien=document.createElement("lien");
   
   lien.innerHTML="lien".concat(i);

   console.log(lien)

   lien.addEventListener("click",function(){
   
    alert(i)

  })
}