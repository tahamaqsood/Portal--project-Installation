# Create User/Privileges in MySQL.

1. Go to phpMyAdmin and then select database from sidebar.
2. Click on Privileges from top bar.
3. Go down and Click on Add new user. 
4. Fill the form and click on GO.

Enjoy!


# MySQL Backup in steps

1. Go to folder C:\xampp\mysql\bin
2. Create new file with extension of .bat
3. Open file on notepad 
4. Write code in it along with database, username and password. 

Sample of code: 
mysqldump -usuperadmin -paptech aptechurc_db > "E:\sqlbackup\%mydate%_%mytime%.sql"

Important things to check.
-u is for username and it must be written before the username. Example: (-uDB_USERNAME)
-p is for password and it must be written before the password. Example: (-pDB_PASSWORD)
database will be after username and password without any symbol. 
put > 
after that define the path you want to save the backup .sql file. 


Modifications:

If you want to save file as the current time then follow these steps.

1. Open the .bat file you had saved in bin folder of xampp/mysql
2. Add codeafter @echo 

Code:
For /f "tokens=2-4 delims=/ " %%a in ('date /t') do (set mydate=%%b-%%a-%%c)
For /f "tokens=1-2 delims=/:" %%a in ('time /t') do (set mytime=%%a-%%b)

3. Change name of the file to %mydate%_%mytime%.sql

Enjoy!



# How to run automatically Xampp in background without signing in to pc.

1. Open xampp as Administrator:
 ![image](https://user-images.githubusercontent.com/81623971/192119261-db1a6575-2684-4294-82e1-2b686f96966b.png)


2. Install services Apache and MySQL.
 ![image](https://user-images.githubusercontent.com/81623971/192119266-c68bac68-b124-420b-a0b8-17ed5f2a6941.png)


3. Once both service are installed. 
 ![image](https://user-images.githubusercontent.com/81623971/192119267-6bc37573-5f5c-4441-b0d7-8d830d1c84d0.png)


4. Start service and check Services.msc if both services are running into the system.

5. Click on Config.
 ![image](https://user-images.githubusercontent.com/81623971/192119272-45a5fa07-ba96-428f-b4a2-c1ee24636d0e.png)


6. Then Click on Autostart of module Apache and MySQl. Then save it.
![image](https://user-images.githubusercontent.com/81623971/192119275-28d28e43-e461-485c-8f32-f4c63fb885df.png)

 

7. Then search for Task Scheduler:
 ![image](https://user-images.githubusercontent.com/81623971/192119278-10919e51-f7d3-456a-9eab-4e6da73833c6.png)


8. Click on Task Schedular Library:
 ![image](https://user-images.githubusercontent.com/81623971/192119281-84f05d8f-0f65-4e4a-8362-a394302948ac.png)


9. After that, Select Action from top and Create new Folder. 
![image](https://user-images.githubusercontent.com/81623971/192119282-506eebfd-cf18-4495-97b8-bb86c8e55d61.png)

 

10. Then Select Action and Click on Create task.
 ![image](https://user-images.githubusercontent.com/81623971/192119287-8ba36503-df26-4fdc-8242-df5d6e7b127e.png)


11.  Fill name and Click on the checkbox “RUN WHETHER USER IS LOGGED ON OR NOT” and “RUN WITH HIGHT PRIVILEGES” 
![image](https://user-images.githubusercontent.com/81623971/192119294-0ebd448f-d76c-49f8-bff3-756c3c27f86b.png)


12. Then Select Triggers Tab and Begin the task as “At Startup”
![image](https://user-images.githubusercontent.com/81623971/192119297-cfb37544-246e-4960-ae80-23c83d2c264b.png)

 
13. Then Click on Actions and Select New. And Browse for the xampp and Click on Ok. 
![image](https://user-images.githubusercontent.com/81623971/192119303-7a5f8633-11ea-4f98-93c7-3dd8a0a9e2cd.png)

 

14. Then Save the progress and it will ask you for the password. 
Fill and save it.
 ![image](https://user-images.githubusercontent.com/81623971/192119306-8e2fa36d-59af-4f4b-b71a-137f8592eac7.png)



Enjoy!


# MySQL Database Auto Backup with PHP

CODE: backup.php

1. Configure database in the code. 
2. After configuring. 
3. open Task Scheduler, Create task and on action tab. 
4. C:\xampp\php\php.exe
5. -f C:\xampp\htdocs\aptechurc-fee\backup.php
6. Ok. 
![image](https://user-images.githubusercontent.com/81623971/192122615-8469cbeb-3233-4ec5-af77-0547f1006746.png)

You're Done! Enjoy!
