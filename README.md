# Medical-Call-Centers-4D

Base Url: http://127.0.0.1:8000

Authentication process:

1. Create new user from "New user" in navigation.
2. Login using the new user email and password.

## Get all users:
- url: /allusers
- Request URL:
http://127.0.0.1:8000/allusers
Request Method:
GET
Status Code:
200 OK
Remote Address:
127.0.0.1:8000
Referrer Policy:
strict-origin-when-cross-origin

example response: 
[{"id":1,"name":"Shereen","password":"password123","email":"shereen-test@test.com","dateofbirth":"1996-04-12","created_at":"2023-11-14T17:49:18.000000Z","updated_at":"2023-11-14T17:49:18.000000Z"},{"id":2,"name":"Test","password":"testtest","email":"test@test.com","dateofbirth":"2023-11-08","created_at":"2023-11-14T17:56:10.000000Z","updated_at":"2023-11-14T17:56:10.000000Z"},{"id":3,"name":"Test","password":"testtest","email":"test@example.com","dateofbirth":"2023-11-02","created_at":"2023-11-14T17:57:06.000000Z","updated_at":"2023-11-14T17:57:06.000000Z"}]


## Create new user
- url: /users/create
- Request URL:
http://127.0.0.1:8000/users/create
Request Method:
POST
Status Code:
200 OK
Remote Address:
127.0.0.1:8000
Referrer Policy:
strict-origin-when-cross-origin

example response:
{"message":"User created successfully"}

## Get User By ID
-url: /user/id
- Request URL:
http://127.0.0.1:8000/user/1
Request Method:
GET
Status Code:
200 OK
Remote Address:
127.0.0.1:8000
Referrer Policy:
strict-origin-when-cross-origin

example response: 
{"id":1,"name":"Shereen","password":"password123","email":"shereen-test@test.com","dateofbirth":"1996-04-12","created_at":"2023-11-14T17:49:18.000000Z","updated_at":"2023-11-14T17:49:18.000000Z"}


