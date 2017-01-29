
var githubURL = "https://api.github.com/users/andrewarrow/repos";

var issuesCounter = 0;


$.getJSON(githubURL, function (result) {
        for (i = 0; i < result.length; i++) {
            if (result[i].has_issues == true) {
                issuesCounter++;   
            }   
        }
        
    
    x = i - issuesCounter;

var data = [
    {
        value: issuesCounter,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Have Issues"
    },
    {
        value: x,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Does Not Have Issues"
    },
];

var ctx = document.getElementById("myChart4").getContext("2d");
var myNewChart = new Chart(ctx).PolarArea(data);




    });






        

      // Get the context of the canvas element we want to select



    