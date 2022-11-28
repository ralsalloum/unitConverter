# Unit Conversion System
## 1. About 

Unit Converter System is a software application created by Laravel framework in order to provide several services, just like:


- Insert types (e.g. types of measurements like Distance, Length, Quantity, etc.)
- Insert multiple units, either main units or sub-units, and related to specific type.
- Insert Products related to specific type.
- Convert value from one unit into another.
- Get sum of the quantity of a product in specific unit.

## 2. What used

- Laravel framework version 9.41.0 (PHP v8.0.15) 
- MySQL version 8

## 3. Prepare the application

### Migrate schema into the database
```
php artisan migrate
```

### Start Laravel server
```
php artisan serve
```

### Seed the database
```
php artisan db:seed
```

## 4. Use Guide
We can interact with the application via RESTfull APIs

### 4.1 APIs
#### - Type
Represent different types that both products and units belong to (e.g. Volume, Area, Mass, etc.).
```
Route: /api/type
Method: POST
```
```
Route: /api/types
Method: GET
```

#### - Product
```
Route: /api/product
Method: POST
```
```
Route: /api/products
Method: GET
```

#### - Unit
```
Route: /api/unit
Method: POST
```
```
Route: /api/units
Method: GET
```

#### - Unit Conversion
Convert value from one unit to another.
```
Route: /api/convertunit
Method: GET
Request: 
    {
        "convertFrom":1, "convertTo":2, "fromValue": 9
    }
```

#### - Product details
```
Route: /api/productdetails
Method: POST
```
```
Route: /api/productsdetails
Method: GET
```
Get the sum of the quantity of a product in a specific unit
```
Route: /api//productdetailsquantity/{productId}/{unitId}
Method: GET
```
_Note: unitId is the id of the unit which we want to convert the sum into_
