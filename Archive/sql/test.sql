// get bookmark
SELECT * FROM post where post_id = (SELECT post_id FROM bookmark WHERE user_id = .....);
// add bookmark ()
INSERT INTO bookmark
