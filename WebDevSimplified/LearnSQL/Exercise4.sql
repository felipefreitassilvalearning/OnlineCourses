SELECT DISTINCT
b.name as 'Band Name'
FROM bands as b
JOIN albums as a
ON b.id = a.band_id;