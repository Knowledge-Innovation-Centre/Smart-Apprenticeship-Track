# Smart-Apprenticeship-Track
Smart Apprenticeship Track project code repository

All source code is released under GPL license

You can access the front-end source code at https://github.com/Knowledge-Innovation-Centre/SAT-frontend

The back-end source code is available at https://github.com/Knowledge-Innovation-Centre/SAT-Backend

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

[Docker](https://www.docker.com)

### Installing

Single command:

```
docker-compose up --build
```

### Optional - be careful

Change credentials in `.env` file. In this case you need to rebuild .war file with new credentials in JdbcConfig.java and `.env`. file in `backend` folder.

### Access

Main application (admin/password):

```
http://localhost:8000/
```

Phpmyadmin:

```
http://localhost:8080/
```

Backend documentation:

```
http://localhost:8888/SAT-backend-1/docs/api.html
```
