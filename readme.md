## Trip Diary

This project use the PHP Laravel FrameWork. So you will need to follow the steps bellow to execute the Web Server and then you will be able to open it on your browser.

1 – Install the Composer (https://getcomposer.org/download/)

2- Install the Laravel using the Compose with the command:
	composer global require "laravel/installer"
Use the terminal or the prompt (windows).

3- You need to download the project.
	You can do it github site or using command:
		“git clone https://github.com/BrunoLambert/TripDiary.git”

4- You will need to configure your DataBase. Open the file “.env” at the main folder. You will need to change these 3 lines to your DB especifications:
	DB_DATABASE=tripdaily
	DB_USERNAME=root
	DB_PASSWORD=
We are using a MySQL DataBase. Make sure you already have a created database to use.

4- With all the files downloaded and the DataBase configured, you need to run the Laravel server. Open the Prompt(Windows) or the terminal (Linux) and browse to the folder you donwloaded the project.

5- Now, we need to build our tables in DataBase. Laravel does everythin for us. Just run the command: “php artisan migrate” and Make sure that it creates the tables at your DB.

6- Now we run the server: “php artisan serve”.

7- Open your browser and enter “localhost:8000”. Then you will be redirected to the main page.

