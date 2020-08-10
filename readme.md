### BUILD LARAVEL AUTH APP
mc link:
https://www.udemy.com/course/laravel-framework-build-professional-ecommerce/learn/lecture/18382430#questions/11311324

	> LINKS
	> https://stackoverflow.com/questions/48341078/expected-response-code-250-but-got-code-530-with-message-530-5-7-1-authentic/63327910#63327910
	username: testuser1
	password: testpass123
	rejik63838@ainbz.com
	rejik63838@ainbz.com
	bojonggede
	http://localhost/KAZIARIYAN/lauth/
	http://localhost/KAZIARIYAN/lauth/public/

	-------
	MAIL_DRIVER=smtp
	MAIL_HOST=smtp.gmail.com
	MAIL_PORT=465   
	MAIL_USERNAME=dutaksp@gmail.com
	MAIL_PASSWORD=hxgjbsrnubffrrwv <--- 
	MAIL_ENCRYPTION=ssl

	STEPS TO GET THE 'MAIL_PASSWORD':
	1. go to: https://myaccount.google.com/security
			  or	
		      https://myaccount.google.com/security#connectedapps
	2. Security
	3. 2-Step Verification --> On 
	4. App password
	   follow the instructions

	29. Laravel Default Authentication Change Password Part 1

	> php artisan make:controller Auth/ChangePasswordController
	> git status

		new file:   app/Http/Controllers/Auth/ChangePasswordController.php
        modified:   readme.md
        new file:   resources/views/auth/passwords/change.blade.php
        modified:   resources/views/layouts/app.blade.php
        modified:   routes/web.php

    30. Laravel Default Authentication Change Password Part 2

    > git status
        modified:   app/Http/Controllers/Auth/ChangePasswordController.php

    31. (Part 1/2) Fixing error (30. Laravel Default Authentication Change Password Part 2)
    
    > git status
     	modified:   app/Http/Controllers/Auth/ChangePasswordController.php
        modified:   resources/views/auth/passwords/change.blade.php    

