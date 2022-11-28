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

    xhttp.open("POST", "/App/Classes/NumberCheck.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhttp.send("number=" + numberjson);
}