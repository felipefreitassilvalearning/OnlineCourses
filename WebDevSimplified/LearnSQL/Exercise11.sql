SELECT
	a.name AS 'Album',
    a.release_year AS 'Release Year',
    MAX(s.length) AS 'Duration'
FROM albums AS a
JOIN songs AS s
ON a.id = s.album_id
GROUP BY s.album_id;