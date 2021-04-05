CREATE table Users (
	u_id 		INT AUTO_INCREMENT NOT NULL PRIMARY KEY ,
    fname 		VARCHAR(20) NOT NULL,
	lname 		VARCHAR(20) NOT NULL,
    email 		VARCHAR(50) NOT NULL,
    u_pid		VARCHAR(10)
    password 	VARCHAR(20) NOT NULL
);

INSERT INTO Users (fname, lname, email, u_pid, password)
	VALUES ('Test', 'User', 'testuser@knights.ucf.edu', '415ghst', 'test123');
	
	
	
$sql = "SELECT * FROM Users WHERE fname = 'test';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo $row['fname'];
			}
		}