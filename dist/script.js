var $body = document.querySelector("body");

document.querySelector(".switch > input").addEventListener('change', function(e){
  if(e.target.checked){
    $body.className = "dark";  
  } else {
    $body.className = "";
  }
});