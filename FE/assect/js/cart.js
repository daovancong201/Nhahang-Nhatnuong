const btn = document.querySelectorAll("button")
// console.log(btn)
btn.forEach(function(button,cart){
    button.addEventListener("click",function(event){
        var btnItem = event.target
        var td = btnItem.parenElement
        console.log(td)
    })



})
