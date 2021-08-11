<!DOCTYPE html>
<html>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#btnVote").click(function() {
        $.ajax({
          url: "ajaxserverpage.aspx?answer=5",
          success: function(data) {
            alert(data)
          }
        });

      });
    });
  </script>
</head>

<body>

<input type='button' id='btnVote' value='Vote' />

</body>

</html>