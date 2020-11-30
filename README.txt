Step1: Extract the file (14_17bce1124_1153_1305_1323.zip)
Step2: Move(cut & paste) all 5 folders(fashion, food, iwp voting project, lifestyle & voting)
to C:\xampp\htdocs (*make sure all 5 files are in the location C:\xampp\htdocs
       The location of all 5 folders must look like
C:\xampp\htdocs\Voting
C:\xampp\htdocs\lifestyle
C:\xampp\htdocs\iwp voting project
C:\xampp\htdocs\fashion
C:\xampp\htdocs\food
Step3: Now start xampp server.
Step4:Open http://localhost/phpmyadmin/sql.php in the terminal
Step5:Create a new database with name "opinions"
Step6:Create 6 tables in it 
Table 1 "fashion" having columns id(A_I),Q1(varchar 100),Q2(varchar 100),Q3(varchar 100),....,upto Q10(varchar 100)
Table 2 "food" having coolumns id(A_I),Q1(varchar 100),Q2(varchar 100),Q3(varchar 100),....,upto Q10(varchar 100)
Table 3 "lifestyle" having columns id(A_I),Q1(varchar 100),Q2(varchar 100),Q3(varchar 100),....,upto Q6(varchar 100)
Table 4 "org" having columns id(A_I), name (varchar 25), cont(10),address(varchar 100), password(tinytext)
Table 5 "sports_indoor" having columns id(A_I),Q1(varchar 100),Q2(varchar 100),Q3(varchar 100),....,upto Q6(varchar 100)
Table 6 "votesignup" having columns id(A_I), name(tinytext), email(tinyint), contactno (int 10), password (tinytext)
(* BE CAREFUL ABOUT THE CASE WHILE NAMING THE DATABASE,TABLE AND COLUMN*)
Step7: Now everything is ready. Type http://localhost/Voting/home.html in the browser.
DONE!!!!! 
