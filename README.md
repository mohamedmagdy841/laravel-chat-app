# Laravel Real-Time Chat App

This is a real-time one-to-one chat application built using Laravel, Laravel Reverb, and broadcasting events. It allows authenticated users to chat, see when others are typing, and track online/offline status.

## Features

- Real-time private messaging using Laravel Reverb
- Typing indicators with event broadcasting
- Online/offline user status using cache
- Message history between users
- Authenticated access using Laravel's built-in authentication

## Technologies Used

- Laravel 12
- Laravel Reverb (WebSocket broadcasting)
- Laravel Echo and Pusher/Socket.IO client (frontend)
- MySQL

## Setup Instructions

1. **Clone the repository**

```
git clone https://github.com/your-username/chat-app.git
cd chat-app
```

2. **Install dependencies**

```
composer install
npm install && npm run build
```

3. **Create a `.env` file**

```
cp .env.example .env
```

Configure your database, Redis, and broadcasting settings in `.env`.

4. **Run migrations**

```
php artisan migrate
```

5. **Start Laravel and Reverb servers**

```
php artisan serve
php artisan reverb:start
```

6. **Visit the app**

Open your browser and go to `http://localhost:8000`
