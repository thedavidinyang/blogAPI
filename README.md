# BlogAPI

A simple CRUD Blog/Posts API with user interactivity built with Laravel 10.

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL or any other supported database
- Postman (for testing the endpoints)

## Installation

1. Clone the repository:
```bash
   git clone https://github.com/thedavidinyang/blogAPI.git
   cd blogAPI
   ```


2. Install dependencies:

```bash
composer install
```
3. Copy .env.example to .env and configure your database settings:

```bash
cp .env.example .env
Generate the application key:
```

4. Generate the application key:
```bash
php artisan key:generate
```
5. Run  migrations and seed the database:
```bash
php artisan migrate --seed
```

## Running the Project
1. Start the laravel server
```bash
php artisan serve
```



2. The API will be available at http://localhost:8000.
   or you can specify a different port to run the server if 8080 is already in use:
 ```bash
   php artisan serve --port=5000
   ```

# API Endpoints

   ## Blogs
- View All Blogs: GET /api/blogs
- Create Blog: POST /api/blogs
- Show Blog: GET /api/blogs/{blog}
- Update Blog: PUT /api/blogs/{blog}
- Delete Blog: DELETE /api/blogs/{blog}
## Posts
- View All Posts: GET /api/blogs/{blog}/posts
- Create Post: POST /api/blogs/{blog}/posts
- Show Post: GET /api/posts/{post}
- Update Post: PUT /api/posts/{post}
- Delete Post: DELETE /api/posts/{post}
## Interactions
- Like Post: POST /api/posts/{post}/like
- Comment on Post: POST /api/posts/{post}/comment
## Middleware
All API routes are protected by a token middleware. The request must include a token header with the value vg@123.

## Testing
You can import the Postman collection included in the repository to test all the endpoints.

- Open Postman.
- Click on "Import" in the top left corner.
- Select "Upload Files" and choose the postman_collection.json file included in the repository.