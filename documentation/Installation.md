# Installation
```bash
   git clone https://github.com/yourusername/screensnack.git
   cd screensnack
```

## Backend setup
### Run docker setup
```bash
   docker-compose up --build -d
```

### Install composer dependencies
```bash
   docker-compose exec php composer install
```

### Environment setup
```bash
  cp .env.example .env
  set MOVIES_DATABASE_API_BASE_URL=
  set MOVIES_DATABASE_X_API_HOST=
  set MOVIES_DATABASE_X_API_KEY=
```
Get the credentials from [The Movie Database](https://rapidapi.com/SAdrian/api/moviesdatabase) and set them in the `.env` file.
- Using this api is free to use.

### Set up the database
```bash
   set DB_DATABASE=
   set DB_USERNAME=
   set DB_PASSWORD=
```
These values should be the same as in the docker-compose.yml file.

## Frontend setup

```bash
   nvm use
   yarn && yarn dev
```

## Laravel serve setup
### Prerequisites
- Php 8.3
- Composer
- MySQL setup.

### Setup
- Create a new database.
- Configure the `.env` file with the database credentials.
- Run the following commands:
```bash
   composer install
   php artisan migrate --db:seed
   php artisan serve
```
