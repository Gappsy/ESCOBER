<title>Portfolio</title>
    <?php
        include('header.html');?>      
    </head>

    <body>
        <div id="header"></div>
        
        <div class="container-main" data-aos="fade-in">  
            <p id="Welcometo">Welcome To My Portfolio</p>
        </div>
        <!--ISN portfolio-->
        <div class="card-grouper">

            <h2 class="title"data-aos="fade-up" data-aos-once="false">Cover Pages Done During 12th Grade</h2>
                
            <div class="card-group" data-aos="fade-up" data-aos-once="false">

                <div class="card col">
                    <img src="/public/biol.png" alt="">
                </div>

                <div class="card col">
                    <img src="/public/physics.png" alt="">
                </div>
                    
                <div class="card col">
                    <img src="/public/poetry.png" alt="">
                </div>

            </div>
            <!--Scie Tech-->
            <h2 class="title" data-aos="fade-up" data-aos-once="false" >Science And Technology Fair Paper</h2>

            <div class="card-group" style="justify-content:center" data-aos="fade-up" data-aos-once="false">
                <div>
                    <a href="https://docs.google.com/document/d/11LPkhx5xx9_DxfB5_97jlI2DMKyr_Xhb/edit?usp=share_link&ouid=106642303912985980513&rtpof=true&sd=true">
                        <img src="/public/sample.png" alt="" style="margin-top:8vh; height:100vh; width:35vw;">
                    </a>

                </div>
            </div>
            <!--Java-->
            <h2 class="title" data-aos="fade-up" data-aos-once="false">OOP Inventory Management Project</h2>
            <div class="card-group" style="justify-content:center" data-aos="fade-up" data-aos-once="false">
                <div style="flex: auto;">
                    <a href="https://github.com/Gappsy/OOPprojBread"><img src="/public/bread.png" alt="" style="margin-top:8vh; height:100vh; width:70vw;"></a>

                </div>
            </div>
        </div><!-- End Div of main container-->

        <!-- Script For Transitions -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

    </body>

</html>
