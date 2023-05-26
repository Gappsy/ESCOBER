<?php
    include('header.html');
?>
<title>Welcome Page</title>
        <script>
            $(document).ready(function(){
                $("#textbtn").click(function(){
                    $("#textbtn").fadeOut("3000");
                    $("#WelcomeText").delay(1000).fadeIn("6000");
                    $("#WelcomeText").delay(2000).fadeOut("8000").promise().done(
                        function()
                        {window.location.href = '/about.php';});  
                });
            });
        </script>

    </head>

    <body>

    <div style="display: flex;">
        <!--MAIN TEXT-->
        <div class= "content">
            <button type="button" id="textbtn"class="btn text-white" onclick="discover()" id="btn-disc" >
                <a href="#" id="btntext" class="text-reset text-decoration-none">
                DISCOVER
                </a>  
            </button>
            <h1 id="WelcomeText" style="display: none;">Welcome To My Portfolio</h1>
        </div>
    </div>
    </body>
</html>