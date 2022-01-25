# Bing Chilling - Website

## Cloning

1. Clone the repository in your projects folder (or anywhere you want):

    ```bash
    git clone https://github.com/bing-chilling-alfa/website.git
    ```

2. Navigate into the new directory:

    ```bash
    cd website
    ```

3. Install all the dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file as `.env`:

    ```bash
    cp .env.example .env
    ```

5. Run the following commands:

    ```bash
    php artisan key:generate
    npm install && npm run dev
    php artisan serve
    ```

The application is now served at http://localhost:8000/
