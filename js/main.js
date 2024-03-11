// let menu =document.queryselector('#menu-icon');
// let navbar =document.queryselector('.navbar');

// menu.onclick= () =>{
//     menu.classList.toggle('bx-x');
//     navbar.classList.toggle('active');
// }

// window.onscroll= ()=>{
//     menu.classList.remove('bx-x');
//     menu.classList.remove('active');
// }


// const sr =scrollReveal({
//     distance:'60px',
//     duration:2500,
//     delay:400,
//     reset:true
// })

// sr.reveal('.text',{delay:200,origin:'top'})
// sr.reveal('.form-container form',{delay:800,origin:'left'})
// sr.reveal('.heading',{delay:800,origin:'top'})
// sr.reveal('.ride-container .box',{delay:600,origin:'top'})
// sr.reveal('.services-container .box',{delay:600,origin:'top'})
// sr.reveal('.about-container .box',{delay:600,origin:'top'})
// sr.reveal('.reviews-container .box',{delay:600,origin:'top'})
// sr.reveal('.newsletter .box',{delay:400,origin:'top'})


// let eyeicon = document.getElementById("eyeicon")
// let password = document.getElementById("password")

// eyeicon.onclick = function(){
//     if(password.type == "password"){
//         password.type == "text"
//     }
//     else{
//         password.type == "password"
//     }
// }

var state = false;
function toggle(){
    if(state){
        document.getElementById("signuppassword").setAttribute("type", "password")
        document.getElementById("eyeicon").style.color = 'white'
        document.getElementById("eyeicon").classList.add("fa-eye-slash")
        document.getElementById("eyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("signuppassword").setAttribute("type", "text")
        document.getElementById("eyeicon").style.color = 'gold'
        document.getElementById("eyeicon").classList.add("fa-eye")
        document.getElementById("eyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

function ctoggle(){
    if(state){
        document.getElementById("csignuppassword").setAttribute("type", "password")
        document.getElementById("ceyeicon").style.color = 'white'
        document.getElementById("ceyeicon").classList.add("fa-eye-slash")
        document.getElementById("ceyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("csignuppassword").setAttribute("type", "text")
        document.getElementById("ceyeicon").style.color = 'gold'
        document.getElementById("ceyeicon").classList.add("fa-eye")
        document.getElementById("ceyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

function logintoggle(){
    if(state){
        document.getElementById("loginpassword").setAttribute("type", "password")
        document.getElementById("logineyeicon").style.color = 'white'
        document.getElementById("logineyeicon").classList.add("fa-eye-slash")
        document.getElementById("logineyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("loginpassword").setAttribute("type", "text")
        document.getElementById("logineyeicon").style.color = 'gold'
        document.getElementById("logineyeicon").classList.add("fa-eye")
        document.getElementById("logineyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

function adminlogintoggle(){
    if(state){
        document.getElementById("adminloginpassword").setAttribute("type", "password")
        document.getElementById("adminlogineyeicon").style.color = 'black'
        document.getElementById("adminlogineyeicon").classList.add("fa-eye-slash")
        document.getElementById("adminlogineyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("adminloginpassword").setAttribute("type", "text")
        document.getElementById("adminlogineyeicon").style.color = 'blue'
        document.getElementById("adminlogineyeicon").classList.add("fa-eye")
        document.getElementById("adminlogineyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

function updatetoggle(){
    if(state){
        document.getElementById("updatepassword").setAttribute("type", "password")
        document.getElementById("updateeyeicon").style.color = 'black'
        document.getElementById("updateeyeicon").classList.add("fa-eye-slash")
        document.getElementById("updateeyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("updatepassword").setAttribute("type", "text")
        document.getElementById("updateeyeicon").style.color = 'blue'
        document.getElementById("updateeyeicon").classList.add("fa-eye")
        document.getElementById("updateeyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

function cupdatetoggle(){
    if(state){
        document.getElementById("cupdatepassword").setAttribute("type", "password")
        document.getElementById("cupdateeyeicon").style.color = 'black'
        document.getElementById("cupdateeyeicon").classList.add("fa-eye-slash")
        document.getElementById("cupdateeyeicon").classList.remove("fa-eye")
        state = false;
    }
    else{
        document.getElementById("cupdatepassword").setAttribute("type", "text")
        document.getElementById("cupdateeyeicon").style.color = 'blue'
        document.getElementById("cupdateeyeicon").classList.add("fa-eye")
        document.getElementById("cupdateeyeicon").classList.remove("fa-eye-slash")
        state = true
    }
}

    
const navLinksEls = document.querySelectorAll('.nav')