1. Import DB ecomm.sql in phpmyadmin/(XAMPP v8.0.6), older version XAMPP will have some issue like unable to receive verification email.
Use this link to download: https://www.apachefriends.org/xampp-files/8.0.6/xampp-windows-x64-8.0.6-0-VS16-installer.exe

2. Use your own gmail id and password in 'register.php' in following lines below. Else, new user registration function won't work.
	$mail->Username = 'yourmail@gmail.com';     Line 63
	$mail->Password = 'yourpassword';           Line 64 	
	$mail->setFrom('yourmail@gmail.com');       Line 75
  	$mail->addReplyTo('yourmail@gmail.com');    Line 79

3. Go to Gmail > Click Your Profile Picture at Top Right Corner > Manage Your Google Account > 
  Security(https://myaccount.google.com/security?gar=1) > Turn ON Less secure app access (Sroll to bottom)
  & Turn Off 2-step verification/Set App password if you want to remain 2-step verification.

4. Login Information -
 For Admin;
   Admin Email: admin@admin.com
   Admin Password: 123456

 For Customer;
   User Email: ali@yahoo.com
   User Password: 123456
*To register new account, use real email to get verification via email.

5. Payment Info- Paypal (Use during checkout)-*Must have internet connection for payment
   Buyer Account-
    Username: sb-kbzqi3765056@personal.example.com
    Password: 1+>e-NK3

