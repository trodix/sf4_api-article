# Symfony 4 + API Platform

## Installation
- Installer les dépendances  
`composer install`
- Créer la base de données  
`php bin/console doctrine:database:create`   
`php bin/console doctrine:migrations:migrate`
- Lancer le serveur de développement  
`php bin/console server:run`

## Configuration
### Base de données
- Fichier **.env**  
`DATABASE_URL=mysql://{db_user}:{db_password}@{hostname}:{port}/{db_name}`

## API
- **Url de l'API**  
http://localhost:8000/api

### Entités
- Book `http://localhost:8000/api/books`
- Review `http://localhost:8000/api/reviews`

## Exemple
**Request URL**  
GET `http://localhost:8000/api/books/1`

**Code**  
200

**Response body**  
```json
{
  "id": 1,
  "isbn": "9781234567897",
  "title": "book1",
  "description": "description book1",
  "author": "Sébastien Vallet",
  "publicationDate": "2019-04-18T09:53:12+00:00",
  "reviews": [
    {
      "id": 1,
      "rating": 5,
      "body": "my good review",
      "author": "John Doe",
      "publicationDate": "2019-04-18T09:55:08+00:00",
      "book": "/api/books/1"
    }
  ]
}
```
