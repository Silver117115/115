$(document).ready(function(){

    const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toogle = body.querySelector(".toogle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toogle-switch"),
    modeText = body.querySelector(".mode-text");

    toogle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })

    modeSwitch.addEventListener("click", () =>{
        body.classList.toggle("dark");
        if (body.classList.contains("dark")) {
            modeText.innerText = "Modo claro"
        } else {
            modeText.innerText = "Modo oscuro"
        }
    })

    document.getElementById("complaintsForm").addEventListener("submit", function(event) {
        event.preventDefault();
        let formData = new FormData(this);
            
        // Simulate sending the data (replace this with actual backend code)
        setTimeout(function() {
            alert("Sus comentarios fueron recibidos");
            document.getElementById("complaintsForm").reset();
        }, 1000);
    });

   $('.subir').click(function(e){
        e.preventDefault(); 
        $('html, body').animate({scrollTop: 0}, 500);
        return false;
    });

});






