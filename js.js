
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// close nav bar when clicking on any of tools

document.addEventListener("click",function(e){
    if(e.target.closest(".childs"))
    {
        myFunction();
    }
})