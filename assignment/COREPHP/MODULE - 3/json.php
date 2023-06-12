<!-- types of array  -->

<!--  a) index array or numeric array -->
<!--  b) associative array  -->
<!--  c) multidementional array  -->


<!-- jason string -->

<!DOCTYPE html>
<html>
<body>

<h2>convert into array to json</h2>
<p id="demo"></p>

<script>
const myJSON = '["PHP", "JAVA", "PHYTHON"]';
const myArray = JSON.parse(myJSON);
document.getElementById("demo").innerHTML = myArray;
</script>

</body>
</html>
