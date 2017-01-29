
var githubURL = "https://api.github.com/users/andrewarrow/repos";

var trueForkCounter = 0;


$.getJSON(githubURL, function (result) {
        for (i = 0; i < result.length; i++) {
            if (result[i].fork == true) {
                trueForkCounter++;   
            }   
        }
        
    
    x = i - trueForkCounter;

var data = [
    {
        value: trueForkCounter,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "True Forks"
    },
    {
        value: x,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Non-True Forks"
    },
];

var ctx = document.getElementById("myChart3").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);




    });






        

      // Get the context of the canvas element we want to select



    