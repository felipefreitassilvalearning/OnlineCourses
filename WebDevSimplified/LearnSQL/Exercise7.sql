UPDATE albums
SET release_year = 1986
WHERE albums.id = (4);

# Getting the id
SELECT a.id
FROM albums as a
WHERE a.release_year IS NULL;