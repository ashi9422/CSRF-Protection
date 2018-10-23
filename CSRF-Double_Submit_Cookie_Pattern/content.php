<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/styles.css">
        <script src="./public/jquery-3.3.1.min.js"></script>
        <title>Comment</title>
    </head>
    <body style="background: #e5ceea">
        
        <script>
            $(document).ready(function(){
                var cookie = decodeURIComponent(document.cookie);
                var cookieValues = cookie.split(';');
                var csrfCookie = "csrfCookie" + "=";
                var csrf = "";

                for(var i = 0; i < cookieValues.length; i++) 
                {
                    var cv = cookieValues[i];
                    while (cv.charAt(0) == ' ')
                    {
                        cv = cv.substring(1);
                    }

                    if (cv.indexOf(csrfCookie) == 0) {
                        csrf = cv.substring(csrfCookie.length, cv.length);
                        
                        document.getElementById("csrfToken").setAttribute('value',csrf);
                    }
                }
            });
        </script>

    <form style="margin: auto; width:500px;" action="csrfvalidate.php" method="POST">
        <div class="container">
            <input type='hidden' name='csrfToken' id='csrfToken' value=''>                 
            <div style="text-align: right;">
                <input type="text" name="comment" placeholder="Write your comment here..">
                <button style="width:100px; background-color: #0e858c; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer;" type="submit" id="submit" name="submit">POST</button>
                <a href="logout.php">
                <button style="width:100px; background-color:#a54a7f; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer;" id="logout" name="logout" >Logout</button></a>
            </div>              
        </div>    
    </form>
</body>
</html>
