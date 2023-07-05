document.addEventListener('DOMContentLoaded', function() {
  var dropdownTrigger = document.querySelector('.dropdown-trigger');
  var dropdownMenu = document.querySelector('.dropdown-menu');

  dropdownTrigger.addEventListener('mouseenter', function() {
    dropdownMenu.style.display = 'block';
  });

  dropdownTrigger.addEventListener('mouseleave', function() {
    dropdownMenu.style.display = 'none';
  });
});
window.onload = function(){
  window.setInterval(function(){
       var now = new Date();
        var clock = document.getElementById("clock");
      clock.innerHTML = now.toLocaleTimeString();
  }, 1000);
 };
 function myfunction() {
  alert("Privet");
 }
 const button = document.getElementById("p");

setInterval(function() {
  button.classList.toggle("pulsating-button");
}, 1500);
  