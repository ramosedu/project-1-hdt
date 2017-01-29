
var githubURL = "https://api.github.com/users/andrewarrow/repos";

var nullDescriptionCounter = 0;


$.getJSON(githubURL, function (result) {
        for (i = 0; i < result.length; i++) {
            if (result[i].description == null) {
                nullDescriptionCounter++;   
            }   
        }
        
    
    x = i - nullDescriptionCounter;

var data = [
    {
        value: nullDescriptionCounter,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Null Descriptions"
    },
    {
        value: x,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Non-Null Descriptions"
    },
];

var ctx = document.getElementById("myChart").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);




    });






        

      // Get the context of the canvas element we want to select



    