<title>Welcome Page</title>
<?php
    include('header.html');
?>

    </head>

    <body>
        <!--fixed image-->
        <div data-aos="fade-in">
            <img src="/public/guirald.jpg" alt="" class="about-img" data-aos-delay="1000" >
        </div>
        <!--Info Right Side-->
        <div id="aboutDiv" data-aos="fade-in" data-aos-delay="1000" data-aos-once="true">
            <div class="aboutCut" data-aos="fade-in" data-aos-once="false">
                <h2>I'm a second year Information Technology student of Bicol University and an aspiring Business Analyst.</h2>
                <br>
                <h2>I am someone that excels at communicating, planning and handling projects, and understanding key principles an organization needs.</h2>
            </div>
            <!--Educ-->
            <div class="aboutCut" data-aos="fade-up" data-aos-once="false">
                <h2>Education</h2>
                <br>
                <h4 class="desc2">STEM Graduate at Legazpi City Science Highschool | 2019-2021 | </h4>
                <h4 class="desc2">Junior Highschool Graduate at Gubat National Highschool | 2015 - 2019 |</h4>
                <h4 class="desc2">Elementary Graduate at Gubat North Central School | 2009-2015 |</h4>
            </div>
            <!--Expo-->
            <div class="aboutCut" data-aos="fade-up" data-aos-once="false" >
                <h2>Work Experiences</h2>
                <br>
                <h4 class="desc2">President of School For The Environment Club | 2017-2018 |</h4>
                <h4 class="desc2"> Front Desk Clerk And Delivery Man in Donya Elisa Farm | Aug - Dec 2019 |</h4>
            </div>
            <!--Awards-->
            <div class="aboutCut" data-aos="fade-up" data-aos-once="false">
                <h2>Awards And Achievements</h2>
                <br>
                <h4 class="desc2">Best in Technical (Radio Broadcasting)| RSPC 2015 |</h4>
                <h4 class="desc2">1st Place in Applied Science Category (Group) - Division Science And Technology Fair | 2018 |</h4>
            </div>

        </div> <!--End Main Div-->

        <!--Script for transition-->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        
    </body>
</html>

