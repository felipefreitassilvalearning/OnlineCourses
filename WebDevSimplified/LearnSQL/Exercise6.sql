SELECT
	a.name as 'Name',
    a.release_year as 'Release Year',
	SUM(s.length) as 'Duration'
FROM songs as s
JOIN albums as a
ON s.album_id = a.id
GROUP BY a.id
ORDER BY Duration DESC
LIMIT 1;