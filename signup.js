var nav; 
window.onload = () => {
    nav=window.innerWidth;
    console.log(nav);

}
const removeit = () =>{
    var x=document.getElementsByTagName("body");
    x[0].style.backgroundColor='#0B090A';
    document.getElementById("alertContainer").style.width='0vw';
    document.getElementById("alertContainer").style.height='0vh';
    document.getElementById("signupBody").style.opacity='1';
}
const focuson = (n) =>{
    /*if(n.name=='dateofbirth'){
        n.type='date';
    }*/
    n.previousElementSibling.style.transform='translateY(10px)' ;
    n.previousElementSibling.style.fontSize='15px' 
}
const outon = (n) =>{
    
    if(n.value==''){
        n.previousElementSibling.style.transform='translateY(60px)' ;
        n.previousElementSibling.style.fontSize='20px'  
        if(n.name=='dateofbirth'){
            n.type='text';
        }
        if(nav<600){
            n.previousElementSibling.style.transform='translateY(40px)'
        }
    }
    
    console.log(n.value);
}
