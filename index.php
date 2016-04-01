<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <h1>BoardingPass_test</h1>
  <form id="inputForm" method="POST">
    First name: <input type="text" id="fname"><br>
    Last name: <input type="text" id="lname"><br>
    <button type="submit" id ="subutton">Submit</button>
  </form>
  <p id="loading" style="display:none;">Processing...Please Wait</p>
  <p id="error" style="display:none;">Server is not availble right now</p>
  <p id="test"></p>
  <div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $(document).on('submit','#inputForm',function(e){
        e.preventDefault();
        $("#error").hide();
        $("#loading").show();
        $("#test").empty();
        //var formData = $(this).serialize();
        $.ajax({
              type:"POST",
              url: "handler.php",
              data: "fname=" + $('#fname').val() + "&lname=" + $('#lname').val(),
              //data:formData,
              cache:false,
              success: function(data) {
                    $("#test").replaceWith(data);
              },
              error: function() {
                $("#error").show();
              },
              complete: function() {
                $("#loading").hide();
              }
        });
      });
    });
  </script>
</body>
</html>
