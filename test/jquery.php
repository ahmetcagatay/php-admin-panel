<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#delete").click(function(){
    $("p").hide();
    console.log("ahmet");
  });
});


</script>
</head>
<body>

<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button id="delete">Click me to hide paragraphs</button>

</body>
</html>

