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


var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new myChart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6'],
        datasets: [{
            label: 'Tiempo en la página (minutos)',
            data: [5, 10, 15, 20, 25, 30], 
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
})