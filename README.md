GOALS:
1 - Gain experience in building a well-designed in PHP site without the use of a framework.
2 - Learn how to use Git in a team environment.
3 - Test your resourcefulness in solving problems.

PROJECT TASK OUTLINE:

1 - Build your site layout
2 - Generate and render PHP mock data
3 - Design your database
4 - Implement Models
5 - Replace mock data with live data
6 - Implement Ad creation w/ image upload
7 - Implement User Login
8 - Protect your sensitive configuration
9 - Allow bulk Ad import via CSV upload
10 - Implement a Front Controller

 SITE LAYOUT:

 database/
    migration.php
    seeder.php

models/
    Ad.php
    BaseModel.php
    User.php

public/
    css/
        main.css       // site styles
    img/
        logo.png
    js/
        main.js        // site javascript

    ads.create.php     // ad creation form
    ads.edit.php       // ad editing form
    ads.index.php      // listing of all ads
    ads.show.php       // view of individual ad

    auth.login.php     // login form
    auth.logout.php    // logout action

    index.php          // marketing homepage

    users.create.php   // user signup
    users.edit.php     // user editing form
    users.show.php     // user profile

utils/
    Auth.php
    Input.php
    Logger.php

views/
    partials/
        header.php
        footer.php
        navbar.php

bootstrap.php          // site initialization