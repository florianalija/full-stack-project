var x= document.getElementById("login");
var y= document.getElementById("register");
var z= document.getElementById("btn");

function register(){
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left="110px";
}

function login(){
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left="0px";
}


function validate(number){
    var inputList= document.getElementsByClassName("input-field");

        //login
        if(number==0){
            if(inputList[0].value.length<2 || inputList[1].value.length<8){
                if(inputList[0].value.length<2){
                    alert("Username should contain at least 2 characters!");
                }
                if(inputList[1].value.length<8){
                    alert("Password should contain at least 8 characters!");
                }
            }
            else if(inputList[0].value.length>=2 && inputList[1].value.length>=8){
              alert('Login successful!');
            }
          }


          //register
          else if(number==1){
            if(inputList[2].value.length<2 || validateEmail(inputList[3].value)==false || inputList[4].value.length<8 ){
                if(inputList[2].value.length<2){
                    alert("Username should contain at least 2 characters!");
                }
                if(validateEmail(inputList[3].value)==false){
                    alert("Email is not in the correct form: email@domain.com");
                }
                if(inputList[4].value.length<8){
                    alert("Password should contain at least 8 characters!");
                }
                
            }
            else if(inputList[2].value.length>=2 && validateEmail(inputList[3].value)==true && inputList[4].value.length>=8 ){
                alert("Registered successfully!");
                login();
            }
          }
}


function validateEmail(email){
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

var divElements=document.getElementsByClassName('slider-content');
var sliderIndex=0;
document.getElementsByClassName('slider')[0].addEventListener('click',function(event){
    divElements[sliderIndex].classList.remove('active');
    divElements[sliderIndex].classList.add('not-active');

    sliderIndex++;
    if(sliderIndex==divElements.length) sliderIndex=0;


    divElements[sliderIndex].classList.add('active');
    divElements[sliderIndex].classList.remove('not-active');

})