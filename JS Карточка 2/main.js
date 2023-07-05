window.onload = function() {
  setTimeout(function() {
    var links = Array.from(document.getElementsByTagName('a')).map(link => link.href);
    window.alert(links);
  }, 3000);
};

function removeDiv() {
  var div = document.querySelector('.image1');
  div.parentNode.removeChild(div);
}

function changeStyle() {

  var FIO = document.getElementById('FIO');
  FIO.style.color = 'red';

  document.body.style.backgroundColor = 'yellow';

  document.body.style.font = '20pt Arial';

  var photo = document.getElementById('image2');
  photo.style.border = '4px solid green';
}

// Проверка, включены ли cookie в браузере
var areCookiesEnabled = navigator.cookieEnabled;
window.alert("Включены ли cookies-файлы: " + areCookiesEnabled);

// Закрытие текущего окна браузера через 8 секунд
setTimeout(function() {
  window.close();
}, 8000);
