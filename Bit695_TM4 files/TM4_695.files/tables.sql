CREATE TABLE players 
	(

	MemberID int (30) NOT NULL,
	Firstname varchar(25) NOT NULL,
	Surname varchar(25) NOT NULL,
	EmailAddress varchar(25) NOT NULL,
	PhoneNumber int(20) NOT NULL,
	Password varchar(25) NOT NULL,	
	PRIMARY KEY ('MemberID'),
	);
	CREATE TABLE board_games
	(
	    MemberID int(30) NOT NULL,
		Boardgame varchar(60) NOT NULL
		Position varchar(10) NOT NULL, 
		Notes text,
		Date date NOT NULL,
		Event varchar NOT NULL(125),
		PRIMARY KEY ('MemberID'),	
		);
	CREATE TABLE available_games
	
	(
	    MemberID int(30) NOT NULL,
		FirstName varchar(25) NOT NULL,
		Boardgame varchar(60) NOT NULL,
		Available varchar(20) NOT NULL,		
		Date date NOT NULL,
		);
		
	CREATE TABLE assigned_games
	
	(
	    MemberID int(30) NOT NULL,
		FirstName varchar(25) NOT NULL,
		Day varchar(30)	NOT NULL,	
		Boardgame varchar(60) NOT NULL,
		Assigned varchar(20) NOT NULL,
		Date date NOT NULL,
        PRIMARY KEY ('MemberID'),		
		);
		CREATE TABLE schedule
	
	(
	    MemberID int(30) NOT NULL,
	    Game int(30) NOT NULL,		
		Boardgame varchar(60) NOT NULL,
		Venue varchar(50) NOT NULL,Position
		Date date NOT NULL,
        PRIMARY KEY ('MemberID'),		
		);
		