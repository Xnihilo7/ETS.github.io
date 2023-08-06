<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
 
</head>
<body>
    <div class="image-overlay">
        <img src="./resources/images/background3.jpg" alt="Home Image" class="home-image">
        <div class="overlay-content">
            <h1 class="special">Welcome to HourHero</h1>
            <p>Keep track of your task time and view your stats!</p>
            <button class="homeBtn" onclick="scrollToTarget(event)">Learn More</button>

        </div>
    </div>

    <div class="content-3">
        <section id="target-section">
            <div class="formatted-paragraph">
                <h1>What is HourHero?</h1>
                <p>
                HourHero is a time tracking system to assist with all of your timecard needs! 
                You can use HourHero to keep track of tasks and to record and store data based on the employees, jobs, 
                and tons of other metrics. The only limit is your imagination!
                </p>
            </div>
        </section>
    </div>

    <div class="content-2">
        <div class="formatted-paragraph">
            <h1>How can HourHero help me?</h1>
            <p>
            One of the biggest challenges companies face is recording employees’ work hours. 
            Whether it be for timecard purposes, budgeting, or resource management, keeping track of many employees 
            can be a challenge! HourHero takes the mystery out of employee timecard management by automating the process. 
            Each employee, job, and timecard will be assigned an ID and using these three values you can record, store, 
            and access all of your company’s data! But don’t take our word for it, give it a try today!
            </p>
        </div>
    </div>

    <div class="content-3">
        <div class="formatted-paragraph">
            <h1>Ready to give HeroHour a try?</h1>
           
                <div class="advert">
                    <button style="border-style: solid; border-width: 2px; border-color: black; margin-top: -30px;" onclick="window.location.href='<?php echo nav_url('login');?>';"> Sign Up</button>
                    <img src="./resources/images/boo.png" alt="Ghost" class="ghost-image-2">
                </div>
            
            
        </div>
    </div>

    <section id="target-section-2"></section>
    <div class="content-2">
        <div class="image-overlay">
            <img src="./resources/images/background4.jpg" alt="Home Image" class="contact-image">
            <div class="overlay-content">
                <h1>Questions, Comments, or Concerns?</h1>
                <p>Click the button get in touch </p>
                <button class="homeBtn" onclick="window.location.href='mailto:jcifonie@liberty.edu';">Contact</button>
            </div>
        </div>
    </div>

    <script src="./resources/script.js"></script>
</body>
</html>