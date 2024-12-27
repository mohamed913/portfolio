var menubar=document.getElementById('menubar');
var links=document.getElementById('links');
var linksul=document.getElementById('linksul');

menubar.addEventListener('click', () => {
    // links.classList.remove('links');
   // links.classList.add('mylink');
    links.classList.toggle('mylinks');
    linksul.classList.toggle('mylinksul');
});