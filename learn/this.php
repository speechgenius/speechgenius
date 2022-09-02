<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $.get("demo_test.html", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
</script>
</head>
<body>

<button>Send an HTTP GET request to a page and get the result back</button>

</body>

<!-- Mirrored from www.w3schools.com/jquery/tryit.asp?filename=tryjquery_ajax_get by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Oct 2021 07:00:50 GMT -->
</html>
