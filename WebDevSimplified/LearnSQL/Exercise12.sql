SELECT
	b.name AS 'Band',
    COUNT(s.id) AS 'Number of Songs'
FROM bands AS b
JOIN albums AS a
ON b.id = a.band_id
JOIN songs s
ON a.id = s.album_id
GROUP BY a.band_id;