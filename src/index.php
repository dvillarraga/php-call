<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<script>
$( document ).ready(function() {
  $.ajax({
    url: "http://phpservice-service",
    dataType: "json"
  }).done(function(result) {
    $("#result").html(result.message);
  });
});



</script>
  <?php echo '<h1>HELLO AND WELCOME</h1>';?>
  <p> The result is:</p>
  <p id="result"></p>
</body>

</html>