SELECT * FROM posts
	LEFT JOIN autores
	ON posts.autor_id = autores.id;
SELECT * FROM posts
	LEFT JOIN autores
	ON posts.autor_id = autores.id
	ORDER BY posts.id DESC;