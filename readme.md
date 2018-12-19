# Simple Laravel API + Vue.js UI

## Installation

* Clone this repository
* Copy .env.example to .env and edit Database Configuration
* Run composer update
* Run npm install && npm update
* Run php artisan serve
* Run npm run watch

## Usage

### UI

http://localhost:8000

### Endpoints

GET /teams
GET /teams/{id}
POST /teams
PUT /teams/{id}

GET /players/{id}

POST /teams/{id}/player
PUT /teams/{id}/player/{pid}
