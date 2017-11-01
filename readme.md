# Trip Diary

Trip Diary is a simple web site where you can easy register the trips you want to do or you did.

### Installing

This project use the PHP Laravel FrameWork. So you will need to follow the steps bellow to execute the Web Server and then you will be able to open it on your browser.

1 – Install the Composer (https://getcomposer.org/download/)

2- Install the Laravel using the Compose with the command:


	composer global require "laravel/installer"


Use the terminal (Linux) or the prompt (windows).

3- You need to download the project.
	You can do it github site or using command:
		

	“git clone https://github.com/BrunoLambert/TripDiary.git”


4- With all the files downloaded, open the Prompt(Windows) or the Terminal (Linux) and browse to the folder you donwloaded the project.

5- Now we need to update de Composer at the folder. You must enter the folder and run the command:


	composer install

Wait until it finishes.

6- You will need to configure your DataBase. Open the file “.env” at the main folder. 

If there isn't a file called ".env", search for a file called ".env.example". You can copy it and create a new file called ".env" or just rename it to ".env".

You will need to change these 3 lines to your DB especifications:

	DB_DATABASE=dbName
	DB_USERNAME=dbUser
	DB_PASSWORD=dbPassword

We are using a MySQL DataBase. Make sure you already have created a database to use.

7- Now, we need to build our tables in DataBase. Laravel does everything for us. Just run the command: 

	php artisan migrate:refresh

Make sure that it creates the tables at your DB.

8- Before we start our server, we need to create a key to your system, then the Laravel can run. So, type the command:


	php artisan key:generate

### Running

1- Now we run the server: 

	php artisan serve

2- Open your browser and enter: 
	
	localhost:8000

Then you will be redirected to the main page.

## Author
Bruno Fonseca Lambert

Email: brunofsclambert@gmail.com

## Usefull Links
* [Laravel Docs](https://laravel.com/docs/5.1)

