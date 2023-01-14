SELECT * FROM autores;
INSERT INTO autores VALUES (
	null,
	'João'
	);
SELECT * FROM autores;
UPDATE autores
	SET nome = 'Guilherme'
	WHERE id = 2;
SELECT * FROM autores;