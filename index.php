<html>
<head>

<script src="jquery-1.11.2.min.js"></script>
<script src="jquery-migrate-1.2.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<meta charset="UTF-8">
</head>

<body>
<img id="logo" src="omg/ChoosTransInterlacedHD.png" alt="Logo">
<img id="logo2" src="img/logogroen.png" alt="Logo2">
<div class="message-wrapper" style="margin-top: 15px">
<div id="MyPhp">


<script>
window.onload = function() {
	$("#MyPhp").load('berichten.php');
}
 $(document).ready(function() {
   var refreshId = setInterval(function() {
   document.getElementById('bottom').scrollIntoView();
      $("#MyPhp").load('berichten.php');

   }, 1000);
   $.ajaxSetup({ cache: false });
});
</script>
</div>
</div>
</body>
<div id="bottom"></div>
</html>

