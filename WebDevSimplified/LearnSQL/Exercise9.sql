#Getting the ID
SELECT id FROM bands
WHERE name = 'Pentatonix';

DELETE FROM albums
WHERE band_id = 8;

DELETE FROM bands
WHERE id = 8;