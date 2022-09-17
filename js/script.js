let menu = document.querySelector('#menu');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

 function myFunction() {
    let dots= document.getElementById('dots');
    let more= document.getElementById('contd');
    let btn= document.getElementById('btn');

    if(dots.style.display==='none'){
        dots.style.display='inline';
        btn.innerHTML='read more!';
        more.style.display='none';
    }
    else{
        dots.style.display='none';
        btn.innerHTML='read less!';
        more.style.display='inline';
    }
 }

//  function myFunction(){
//     alert('Congratulations! You have successfully submitted your form')
//  }