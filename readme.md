cinemaguide

a movie search application based on api.


GET cinema list
http://cinemaguide.test/api/cinemas
get a list of all cinemas

GET movie list
http://cinemaguide.test/api/movies
get a list of all movies

POST add session
http://cinemaguide.test/api/sessions
add new session by post

BODY
cinema_id7
movie_id9
show_time2018-02-08 13:36:22

DELETE http://cinemaguide.test/api/sessions/:id
http://cinemaguide.test/api/sessions/2
delete session by its id

HEADERS
Content-Typeapplication/x-www-form-urlencoded
BODY
cinema_id10
movie_id20

POST add user
http://cinemaguide.test/api/users
add user via api

HEADERS
name
email
password

PATCH update session
http://cinemaguide.test/api/sessions/100
update session by session id

HEADERS
name
email
password
Content-Typeapplication/x-www-form-urlencoded
