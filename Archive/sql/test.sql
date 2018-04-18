// get bookmark
SELECT * FROM post where post_id IN (SELECT post_id FROM bookmark WHERE user_id = .....);
// add bookmark ()
INSERT INTO bookmark

INSERT INTO `bookmark` (`user_id`, `post_id`) VALUES (1, 2);
