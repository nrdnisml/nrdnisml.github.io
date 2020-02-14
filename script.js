//DOM PADA INDEX
const penulis = document.querySelector('div.penulis');
const artikel = document.querySelector('div.artikel');

penulis.addEventListener('mouseenter',function(){
    penulis.style.backgroundColor = 'lightgreen';
});

penulis.addEventListener('mouseleave',function(){
    penulis.style.backgroundColor = 'white';
});

artikel.addEventListener('mouseenter',function(){
    artikel.style.backgroundColor = 'lightgreen';
});

artikel.addEventListener('mouseleave',function(){
    artikel.style.backgroundColor = 'white';
});

//DOM pada contact us

function getValue(){
    var firstname = document.getElementById('fname').value;
    var lastname = document.getElementById('lname').value;
    alert("Hello "+firstname+" "+lastname+" pesan yang kamu sampikan sudah terkirim");
}
