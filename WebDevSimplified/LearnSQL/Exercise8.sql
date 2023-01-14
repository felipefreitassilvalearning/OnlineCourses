INSERT INTO bands (name) VALUES ('Pentatonix');

#Getting the ID
SELECT id FROM bands
WHERE name = 'Pentatonix';

INSERT INTO albums (name, release_year, band_id)
VALUES ('Home', 2020, 8);

SELECT * FROM albums
WHERE band_id = 8;