
var parentservice = document.getElementById("parentservice")
var cancel = document.getElementById("cancel")
var coockies = document.getElementById("coockies")
var btn = document.getElementById("btnlist")
var navbar = document.getElementById("navbar")


btn.addEventListener("click", function(){
    btn.classList.toggle("active")
    navbar.classList.toggle("active")
})
show =  function(){
    parentservice.classList.add("active");
}
hide = function(){
    coockies.classList.add("disable")
}
cancel.addEventListener("click", function(){
    parentservice.classList.remove("active")
})
