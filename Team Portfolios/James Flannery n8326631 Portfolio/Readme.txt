add_house: A php form enabling a user to add a house to the SQL database.

add_photo: An extension to the form to add a house. 
	It allows the user to upload a photo, which is added to the server, 
	then adds the address of the photo to the database, for later retrieval.

Test Suite: A suite of acceptance tests for the site, to be used to allow for easy confirmation and testing of user stories.

checklogin: Takes the details from main_login, compares them to the users in the database,
	and if they match, takes them to the add_house page.

filterform: Connects to the database, and creates a checkbox form allowing the user to
	filter the results of a search of the houses.
	NOTE - This is not entirely my work, but a collaboration.



