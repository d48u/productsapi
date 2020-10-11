# productsapi
Let’s build some simple single endpoint publicly available REST products api.


### API endpoint for create product

*Example Request*
```HTTP
POST /api/products? HTTP/1.1
Host: productsapi.test
Accept: application/json
Content-Type: application/json

{
    "name": "Spam and eggs",
    "price": 19000.34
}
```

*Example Response*
```json
{
    "data": {
        "name": "Spam and eggs",
        "price": 19000.34,
        "updated_at": "2020-10-11T13:01:28.000000Z",
        "created_at": "2020-10-11T13:01:28.000000Z",
        "id": 3
    }
}
```

*Error Response Example*
```json
{
    "code": 422,
    "message": "The price must be at least 0."
}
```
