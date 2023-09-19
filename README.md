# Akaunting

This app is a demo API app that will give you an idea of the working of APIS in Laravel.

## Installation

```
Clone the repository: git clone https://github.com/1urvashi/Akaunting.git
Install dependencies: composer install ; npm install ; npm run dev
cp .env.example .env
php artisan key:generate

Change Database name on .env file 
DB_DATABASE=akaunting
```

### **Database setup**

Install Akaunting:
```
php artisan install --db-name="akaunting" --db-username="root" --db-password="pass" --admin-email="admin@company.com" --admin-password="123456"

Create sample data
php artisan sample-data:seed

```

### **Register the Module**
```
Log in to your Akaunting admin panel.

Go to the "Settings" section and select "Modules."

Find your "CustomAPI" module and click the "Activate" button.
```

### **List of APIs**

PN: My local server was http://localhost/akaunting/api/users You may change the settings as per you laravel environment.Available endpoints are-
```
1. Create users:

Endpoint: /api/users
Method: POST
Request body example:

{
  "users": [
    {
      "name": "User1",
      "email": "user1@example.com"
    },
    {
      "name": "User2",
      "email": "user2@example.com"
    }
  ]
}


2. Create transactions:

Endpoint: /api/transactions
Method: POST
Request body example:

{
  "transactions": [
    {
      "amount": 100.0,
      "description": "Payment for service"
    },
    {
      "amount": 50.0,
      "description": "Purchase of goods"
    }
  ]
}


3. Create invoices:

Endpoint: http://your-akaunting-domain/api/invoice
Method: POST
Request body example:

{
  "invoice": {
    "user_id": 1,
    "amount": 200.0
  }
}

```


Feel free to email me, if you have any question.
