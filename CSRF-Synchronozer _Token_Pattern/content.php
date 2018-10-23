<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <script src="./public/jquery-3.3.1.min.js"></script>
        <title>Comment</title>
    </head>
    <body style="background: #e5ceea">

    <form style="margin: auto; width:500px;" action="csrfvalidate.php" method="POST">
        <div class="container" style="margin-top:100px">
            <input type='hidden' name='csrfToken' id='csrfToken' value=''>                                         
            <div style="text-align: right;">
                <input type="text" name="comment" placeholder="Write your comment here..">
                <button style="width:100px; background-color: #0e858c; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer;" type="submit" id="submit" name="submit">POST</button>

                <a href="logout.php">
                <button style="width:100px; background-color: #a54a7f; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer;" id="logout" name="logout" >Logout</button></a>                
            </div>              
        </div>    
    </form>
     
    <script type="text/javascript">    
        var request = "true";
        $.ajax({
            url:'token.php',
            method:'POST',
            data:{request:"request"},
            dataType:'json',
            success:function(data)
            {
               document.getElementById("csrfToken").value = data.token;
			   
            }
        })
    </script>

</body>
</html>
