
var githubURL = "https://api.github.com/users/andrewarrow/repos";

var nullHomePageCounter = 0;


$.getJSON(githubURL, function (result) {
        for (i = 0; i < result.length; i++) {
            if (result[i].homepage == null || result[i].homepage == "") {
                nullHomePageCounter++;   
            }   
        }
        
    
    x = i - nullHomePageCounter;

var data = [
    {
        value: nullHomePageCounter,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Null HomePages"
    },
    {
        value: x,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Non-Null HomePages"
    },
];

var ctx = document.getElementById("myChart2").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);




    });






        

      // Get the context of the canvas element we want to select



    