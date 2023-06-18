Do at least ONE of the following tasks: refactor is mandatory. Write tests is optional, will be good bonus to see it. 
Please do not invest more than 2-4 hours on this.
Upload your results to a Github repo, for easier sharing and reviewing.

Thank you and good luck!



Code to refactor
=================
1) app/Http/Controllers/BookingController.php
2) app/Repository/BookingRepository.php

Code to write tests (optional)
=====================
3) App/Helpers/TeHelper.php method willExpireAt
4) App/Repository/UserRepository.php, method createOrUpdate


----------------------------

What I expect in your repo:

X. A readme with:   Your thoughts about the code. What makes it amazing code. Or what makes it ok code. Or what makes it terrible code. How would you have done it. Thoughts on formatting, structure, logic.. The more details that you can provide about the code (what's terrible about it or/and what is good about it) the easier for us to assess your coding style, mentality etc

And 

Y.  Refactor it if you feel it needs refactoring. The more love you put into it. The easier for us to asses your thoughts, code principles etc


IMPORTANT: Make two commits. First commit with original code. Second with your refactor so we can easily trace changes. 


NB: you do not need to set up the code on local and make the web app run. It will not run as its not a complete web app. This is purely to assess you thoughts about code, formatting, logic etc


===== So expected output is a GitHub link with either =====

1. Readme described above (point X above) + refactored code 
OR
2. Readme described above (point X above) + refactored core + a unit test of the code that we have sent

Thank you!




________________________________________________________________________________________________________________________________-


     The code style is ok for small project application but if it is part of medium to enterprise level software as service project
then it needs to a lot of changes to keep the reusable and utilizing the full features which supported by laravel and php. As nowadays people use javascript frameworks for front work and few functions in code stating it is Restful API code but with out the documentation
of API frameworks which help in testing , debugging and reviewing of API's for front end developers and QA's.

     It must need to refactor it by splitting the functions in booking controller by utilizing following features

    1) Request,
    2) Services,
    3) Repositories,
    4) Helpers
    5) Interfaces
    6) Translations

    I am going to do a very minimum refactoring just to differentiate the coding structure.
    Further more following changes can be done to improve the quality and to make code more developer friendly.

    1) Usually we do not call repository functions in controllers. It is good to keep controllers clean by
    calling relevant services. The code has written most of the logic in repositories which is not correct
    the job of repository is to fetch the data. It is not the job of repository to have all business logic.

    2) Services should be used to write most of the business logic part which makes easier for developers to understand
    it.

    3) Logic of the code is also very bad and require a lot of changes I cannot mention all correction, I would like
    to highlight the kind of areas needed to improve logic.
        a. Logic building in terms of return array is bad ,  it should be some kind of generic array to be
           used for all kind conditions to return relevant variables strings
        b. Unnecessary If conditions are used to return or generate relevant strings variables.

    4) Binding of Return type of the functions is missing. It is good to bind the functions
    belongs to repository , service or controllers to avoid any mistakes done by other developers.

    5) Use of core php function should be avoided and preference should be given to framework functions.

    6) If it is a piece of laravel code mail libraries should be used instead of customize functions.

    7) Translations features should be used to return different language user messages.

    8) Unnecessary variables are created. It can be avoided.


