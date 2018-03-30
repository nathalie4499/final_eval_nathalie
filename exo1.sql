# insert USE name of the table first.

SELECT * FROM articles 
	JOIN users ON articles.id_user = users.id
	WHERE articles.id =1;