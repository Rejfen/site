function pNumberCheckRequest()
{   
    let number = document.getElementById("number").value;
    let numberjson = JSON.stringify({"number":number});
    
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let fetchedData = JSON.parse(this.responseText);
        document.getElementById("result").innerHTML = fetchedData.result;
        }
    };

    xhttp.open("POST", "/RequestHandlers/pNumberRequestHandler.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhttp.send("number=" + numberjson);
}

function dateGenRequest()
{   
    let number = document.getElementById("number").value;
    let leapyear = document.getElementById("leapyear").checked;

    const inputdata = {
        'number':number,
        'leapyear':leapyear
    }
    
    let json = JSON.stringify(inputdata);

    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            let fetchedData = JSON.parse(this.responseText);
            let str = "";
            console.log(fetchedData);
            fetchedData.forEach((element) => {
                str += "<li>" + element + "</li>";
            });
            document.getElementById("result").innerHTML = str ;
        }
    };

    xhttp.open("POST", "/RequestHandlers/dataGenRequestHandler.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhttp.send("inputdata=" + json);
}
