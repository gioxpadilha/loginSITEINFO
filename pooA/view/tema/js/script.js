
let user_show=document.getElementById("user-show");

let user_info=document.getElementById("user-info");
user_info.style.display="none";

user_show.onclick=function(){
    console.log(user_info.style.display);
    if(user_info.style.display=="none")
        user_info.style.display="block";
    else
     user_info.style.display="none";
}