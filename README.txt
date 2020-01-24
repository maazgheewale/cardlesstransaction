TO UNDERSTAND THE PROJECT REFER THE OFFICIAL DOCUMENTATION REPORT.PDF

THE PROJECT IS DIVIDED INTO 4 MODULES
MODULE 1,2,4 RUNS ON JAVA VIRTUAL MACHINE      --THIS MODULES CONTAINTS ARE AS FOLLOWS (RBI MODULE,BANK MODULE,ATM MODULE)
MODULE 3 RUN ON LOCALHOST-SERVER/PHP-MYADMIN   --THIS MODULE CONTAIN (USER MODULE)

BEFORE RUNNING THE PROJECT YOU NEED TO INSTALL SPECFIC SOFTWARE
1) xampp-win32-1.8.3-4-VC11-installer.exe
2) jdk-6u45-windows-x64.exe
3) netbeans-7.0-ml-windows.exe IF YOU WANT DONT WANT TO RUN MODULE 1,2,4 FROM COMMAND PROMPT

STEPS INVOLVED IN PROJECT SETUP
1)AFTER INSTALLING XAAMP OPEN XAAMP AND START APACHE AND MYSQL
2)OPEN A BROWSER AND TYPE URL 127.0.0.1
3)CREATE A DATABASE NAMED money AND GO TO IMPORT TO ADD ALREADY CREATED DATABASE FILE NAMED money.sql
4)NOW ADD ALL THE MODULES TO NETBEANS7.0 
5)FOR MODULE 1,2,4 ADD mysql-connector-java-5.1.13-bin.jar IN LIBRARY FOLDER
6)NOW YOU ARE GOOD TO GO

STEPS FOR TRANSACTION OF MONEY
(SENDER)(IN MODULE 3)
1) The user must register with internet banking in the register form with the following details required make sure you agree the terms and conditions before reading it and click on Register.
2) Then Login with the User-Id and Password in Login form make sure you Enter correct Password because entering wrong password 6 Times will disable your User-Id and to enable it you need to contact your bank branch.
3) Then go to Money Transfer form Enter mobile no of the person you want transfer money and the limit of amount you want to transfer then click Send Request.
4) Then in confirmation form confirm the following details are correct or not.
 If yes Click on Transfer Amount.
(RECIVER)(IN MODULE 4)
1)  After the sender transfers the amount the Reciver. The Reciver recives a text message on his/her mobile number with a onetime password (OTP) as a original (OTP) and a limit of amount up to which he can withdraw money.
2) The Reciver needs to go to the ATM for the withdrawal of money sent by the sender.
3) On the interface of ATM the user needs to select the cardless option.
4) enter his/her mobile number and select continue this generates a onetime password (OTP) on his mobile that is Temporary (OTP).
5) enter the Temporary one time password (OTP) and then select continue.
6) Enter the original (OTP) and then select continue.
7) Then select withdraw and enter the amount you want to withdraw.
8) Then you will be able to take the cash with a receipt containing the details of Transaction. 