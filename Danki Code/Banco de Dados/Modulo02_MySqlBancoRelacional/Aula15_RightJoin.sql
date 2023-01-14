SELECT * FROM posts
	RIGHT JOIN autores
	ON posts.autor_id = autores.id;
# É IGUAL A
SELECT * FROM autores
    LEFT JOIN posts
    ON posts.autor_id = autores.id;
# Fazer um LEFT JOIN com as tabelas invertidas