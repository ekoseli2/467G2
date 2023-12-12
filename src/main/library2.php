<?php

function drawTable($rows){

echo "<table class='center' border=2 cellspacing=3 style='width:20%'>";
echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
echo "<tr>";
foreach(array_keys($rows[0]) as $heading){
  echo "<td><strong>$heading<strong></td>";
}
echo "</tr>";
foreach($rows as $row){
  echo "<tr>";
  foreach($row as $col) {
    echo "<td>$col</td>";
  }
  echo"<td><form action='ProductPage.php' method='POST'><button name='AddToCart'>Add to Cart</button></form></td>";
  echo "</tr>";
}
echo " </tr>";
echo "</table>";
}




function drawTable2($rows){

echo "<table class='center' border=2 cellspacing=3 style='width:20%'>";
echo "<colgroup> <col span='20' style='background-color:white'> </colgroup>";
echo "<tr>";
foreach(array_keys($rows[0]) as $heading){
  echo "<td><strong>$heading<strong></td>";
}
echo "</tr>";
foreach($rows as $row){
  echo "<tr>";
  foreach($row as $col) {
    echo "<td>$col</td>";
  }
  echo "</tr>";
}
echo " </tr>";
echo "</table>";
}

?>
</body>

<script>
/*https://www.w3schools.com/howto/howto_js_dropdown.asp*/
function DropDownSort() {
document.getElementById("DropDownSort").classList.toggle("show");
}

function Filter() {
    document.getElementById("Filter").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdownS");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
    if (!event.target.matches('.filterbtn')) {
        var dropdowns = document.getElementsByClassName("dropdownF");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropDown.classList.remove('show');
            }
        }
    }
}
</script>
