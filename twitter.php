<?php
    htmlHead("Consuming Twitter Webserver","","");
?>

<script>
    window.onload = function() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("twitter").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("GET", "http://1508770-nodeapp.azurewebsites.net/", true);
        xhttp.send();
    }
</script>

<header>
    <h1>Header Div</h1>
</header>
<main>
    <h2> Main content </h2>
</main>
<aside id="twitter" >

</aside>

<?php
htmlFoot();
?>