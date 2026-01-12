# POS API Documentation

**Version:** 1.0  
**Base URL:** `/api`  
**Last Updated:** January 13, 2026

---

## Table of Contents

1. [Authentication](#authentication)
2. [Order API](#order-api)
3. [Response Format](#response-format)
4. [Error Handling](#error-handling)
5. [Status Codes](#status-codes)

---

## Authentication

This API uses **JWT (JSON Web Token)** for authentication.

### Login

Get an access token by providing valid credentials.

**Endpoint:** `POST /api/auth/login`

**Request Body:**

```json
{
    "email": "user@example.com",
    "password": "password123"
}
```

**Response (200 OK):**

```json
{
    "code": 200,
    "status": true,
    "message": "Success",
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
        "refresh_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...",
        "data": {
            "id": 1,
            "name": "John Doe",
            "email": "user@example.com",
            "roles": ["admin"]
        }
    }
}
```

### Using the Token

Include the token in the `Authorization` header for protected endpoints:

```
Authorization: Bearer YOUR_JWT_TOKEN
```

### Other Auth Endpoints

| Method | Endpoint            | Description      | Auth Required |
| ------ | ------------------- | ---------------- | ------------- |
| POST   | `/api/auth/logout`  | Logout user      | ✅            |
| POST   | `/api/auth/refresh` | Refresh token    | ✅            |
| POST   | `/api/auth/me`      | Get current user | ✅            |

---

## Order API

### Endpoints Overview

| Method | Endpoint               | Description          | Auth Required |
| ------ | ---------------------- | -------------------- | ------------- |
| GET    | `/api/orders`          | List all orders      | ✅            |
| POST   | `/api/orders`          | Create new order     | ✅            |
| GET    | `/api/orders/{id}`     | Get order details    | ❌            |
| PUT    | `/api/orders/{id}`     | Update order         | ✅            |
| PUT    | `/api/orders/{id}`     | Update order         | ✅            |
| DELETE | `/api/orders/{id}`     | Delete order         | ✅            |
| GET    | `/api/payment-methods` | List payment methods | ✅            |

---

### 1. List Orders

Retrieve a paginated list of orders with optional filters.

**Endpoint:** `GET /api/orders`

**Authorization:** Required ✅

**Query Parameters:**

| Parameter    | Type    | Required | Description                   |
| ------------ | ------- | -------- | ----------------------------- |
| `page`       | integer | No       | Page number (default: 1)      |
| `per_page`   | integer | No       | Items per page (default: 15)  |
| `status_id`  | integer | No       | Filter by status ID           |
| `start_date` | date    | No       | Filter from date (YYYY-MM-DD) |
| `end_date`   | date    | No       | Filter to date (YYYY-MM-DD)   |

**Example Request:**

```bash
GET /api/orders?page=1&per_page=10&status_id=1&start_date=2026-01-01
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
```

**Response (200 OK):**

```json
{
    "code": 200,
    "status": true,
    "message": "Berhasil mengambil data pesanan",
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGci...",
        "orders": [
            {
                "id": 1,
                "order_number": "260113000000001",
                "status": {
                    "id": 1,
                    "name": "Pending"
                },
                "payment_method": {
                    "id": 1,
                    "name": "Cash"
                },
                "quantity": 3,
                "sub_total_amount": 175000,
                "discount_amount": 5000,
                "total_amount": 170000,
                "customer_name": "John Doe",
                "customer_phone": "08123456789",
                "customer_address": "Jl. Example No. 123",
                "order_details": [
                    {
                        "id": 1,
                        "order_id": 1,
                        "product": {
                            "id": 1,
                            "name": "Product A",
                            "code": "PRD-001"
                        },
                        "quantity": 2,
                        "price": 50000,
                        "total_amount": 100000,
                        "created_at": "2026-01-13 03:00:00",
                        "updated_at": "2026-01-13 03:00:00"
                    }
                ],
                "created_at": "2026-01-13 03:00:00",
                "updated_at": "2026-01-13 03:00:00"
            }
        ],
        "pagination": {
            "current_page": 1,
            "last_page": 5,
            "per_page": 10,
            "total": 50
        }
    }
}
```

---

### 2. Create Order

Create a new order with order details.

**Endpoint:** `POST /api/orders`

**Authorization:** Required ✅

**Request Body:**

| Field                        | Type    | Required | Description                   |
| ---------------------------- | ------- | -------- | ----------------------------- |
| `payment_method_id`          | integer | No       | Payment method ID             |
| `customer_name`              | string  | No       | Customer full name            |
| `customer_phone`             | string  | No       | Customer phone number         |
| `customer_address`           | string  | No       | Customer address              |
| `discount_amount`            | number  | No       | Discount amount (default: 0)  |
| `order_details`              | array   | **Yes**  | Array of order items (min: 1) |
| `order_details[].product_id` | integer | **Yes**  | Product ID                    |
| `order_details[].quantity`   | integer | **Yes**  | Item quantity (min: 1)        |
| `order_details[].price`      | number  | **Yes**  | Price per item                |

**Example Request:**

```bash
POST /api/orders
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
Content-Type: application/json

{
  "payment_method_id": 1,
  "customer_name": "Jane Smith",
  "customer_phone": "08198765432",
  "customer_address": "Jl. Sample No. 456",
  "discount_amount": 10000,
  "order_details": [
    {
      "product_id": 1,
      "quantity": 2,
      "price": 50000
    },
    {
      "product_id": 2,
      "quantity": 1,
      "price": 75000
    }
  ]
}
```

**Response (201 Created):**

```json
{
    "code": 201,
    "status": true,
    "message": "Pesanan berhasil dibuat",
    "data": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGci...",
        "order": {
            "id": 2,
            "order_number": "260113000000002",
            "status": {
                "id": 1,
                "name": "Pending"
            },
            "payment_method": {
                "id": 1,
                "name": "Cash"
            },
            "quantity": 3,
            "sub_total_amount": 175000,
            "discount_amount": 10000,
            "total_amount": 165000,
            "customer_name": "Jane Smith",
            "customer_phone": "08198765432",
            "customer_address": "Jl. Sample No. 456",
            "order_details": [
                {
                    "id": 2,
                    "order_id": 2,
                    "product": {
                        "id": 1,
                        "name": "Product A",
                        "code": "PRD-001"
                    },
                    "quantity": 2,
                    "price": 50000,
                    "total_amount": 100000,
                    "created_at": "2026-01-13 03:15:00",
                    "updated_at": "2026-01-13 03:15:00"
                },
                {
                    "id": 3,
                    "order_id": 2,
                    "product": {
                        "id": 2,
                        "name": "Product B",
                        "code": "PRD-002"
                    },
                    "quantity": 1,
                    "price": 75000,
                    "total_amount": 75000,
                    "created_at": "2026-01-13 03:15:00",
                    "updated_at": "2026-01-13 03:15:00"
                }
            ],
            "created_at": "2026-01-13 03:15:00",
            "updated_at": "2026-01-13 03:15:00"
        }
    }
}
```

**Automatic Calculations:**

-   `order_number`: Auto-generated (format: YYMMDDxxxxxxxx)
-   `quantity`: Sum of all order detail quantities
-   `sub_total_amount`: Sum of (quantity × price) for all items
-   `total_amount`: sub_total_amount - discount_amount
-   `status_id`: Set to 1 (Pending) by default

---

### 3. Get Order Details

Retrieve details of a specific order.

**Endpoint:** `GET /api/orders/{id}`

**Authorization:** Not Required ❌ (Public endpoint)

**Path Parameters:**

| Parameter | Type    | Required | Description |
| --------- | ------- | -------- | ----------- |
| `id`      | integer | **Yes**  | Order ID    |

**Example Request:**

```bash
GET /api/orders/1
```

**Response (200 OK):**

```json
{
  "code": 200,
  "status": true,
  "message": "Berhasil mengambil detail pesanan",
  "data": {
    "id": 1,
    "order_number": "260113000000001",
    "status": {
      "id": 1,
      "name": "Pending"
    },
    "payment_method": {
      "id": 1,
      "name": "Cash"
    },
    "quantity": 3,
    "sub_total_amount": 175000,
    "discount_amount": 5000,
    "total_amount": 170000,
    "customer_name": "John Doe",
    "customer_phone": "08123456789",
    "customer_address": "Jl. Example No. 123",
    "order_details": [...],
    "created_at": "2026-01-13 03:00:00",
    "updated_at": "2026-01-13 03:00:00"
  }
}
```

**Response (404 Not Found):**

```json
{
    "code": 404,
    "status": false,
    "message": "Pesanan tidak ditemukan",
    "data": null
}
```

---

### 4. Update Order

Update an existing order.

**Endpoint:** `PUT /api/orders/{id}`

**Authorization:** Required ✅

**Path Parameters:**

| Parameter | Type    | Required | Description |
| --------- | ------- | -------- | ----------- |
| `id`      | integer | **Yes**  | Order ID    |

**Request Body:** (All fields optional)

| Field               | Type    | Description             |
| ------------------- | ------- | ----------------------- |
| `status_id`         | integer | Update order status     |
| `payment_method_id` | integer | Update payment method   |
| `customer_name`     | string  | Update customer name    |
| `customer_phone`    | string  | Update customer phone   |
| `customer_address`  | string  | Update customer address |
| `discount_amount`   | number  | Update discount amount  |
| `order_details`     | array   | Update order items      |

**Example Request (Update Status):**

```bash
PUT /api/orders/1
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
Content-Type: application/json

{
  "status_id": 2,
  "payment_method_id": 2
}
```

**Example Request (Update Order Details):**

```bash
PUT /api/orders/1
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
Content-Type: application/json

{
  "discount_amount": 15000,
  "order_details": [
    {
      "product_id": 1,
      "quantity": 3,
      "price": 50000
    },
    {
      "product_id": 4,
      "quantity": 2,
      "price": 100000
    }
  ]
}
```

**Response (200 OK):**

```json
{
  "code": 200,
  "status": true,
  "message": "Pesanan berhasil diupdate",
  "data": {
    "id": 1,
    "order_number": "260113000000001",
    "status": {
      "id": 2,
      "name": "Processing"
    },
    "payment_method": {
      "id": 2,
      "name": "Transfer"
    },
    ...
  }
}
```

**Note:** When updating order details, all existing details will be replaced with the new ones.

---

### 5. Delete Order

Soft delete an order (can be recovered).

**Endpoint:** `DELETE /api/orders/{id}`

**Authorization:** Required ✅

**Path Parameters:**

| Parameter | Type    | Required | Description |
| --------- | ------- | -------- | ----------- |
| `id`      | integer | **Yes**  | Order ID    |

**Example Request:**

```bash
DELETE /api/orders/1
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
```

**Response (200 OK):**

```json
{
    "code": 200,
    "status": true,
    "message": "Pesanan berhasil dihapus",
    "data": null
}
```

**Response (500 Error):**

```json
{
    "code": 500,
    "status": false,
    "message": "Gagal menghapus pesanan: [error details]",
    "data": null
}
```

---

### 6. List Payment Methods

Retrieve available payment methods.

**Endpoint:** `GET /api/payment-methods`

**Authorization:** Required ✅

**Example Request:**

```bash
GET /api/payment-methods
Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGci...
```

**Response (200 OK):**

```json
{
    "code": 200,
    "status": true,
    "message": "Berhasil mengambil data metode pembayaran",
    "data": [
        {
            "id": 1,
            "name": "Cash",
            "description": "Pembayaran Tunai",
            "created_at": "2026-01-02 23:38:05",
            "updated_at": "2026-01-02 23:38:05",
            "deleted_at": null
        },
        {
            "id": 2,
            "name": "Transfer",
            "description": "Pembayaran via Transfer Bank",
            "created_at": "2026-01-02 23:38:05",
            "updated_at": "2026-01-02 23:38:05",
            "deleted_at": null
        }
    ]
}
```

---

## Response Format

All API responses follow this consistent format:

```json
{
    "code": 200,
    "status": true,
    "message": "Success message",
    "data": {
        // Response data here
    }
}
```

**Fields:**

-   `code` (integer): HTTP status code
-   `status` (boolean): `true` for success, `false` for error
-   `message` (string): Human-readable message
-   `data` (object|array|null): Response data or null

---

## Error Handling

### Validation Errors (422)

**Example:**

```json
{
    "code": 422,
    "status": false,
    "message": "Validasi gagal",
    "data": {
        "errors": {
            "order_details": ["Detail pesanan harus diisi"],
            "order_details.0.product_id": ["Produk yang dipilih tidak valid"],
            "order_details.1.quantity": ["Jumlah produk minimal 1"]
        }
    }
}
```

### Authentication Errors (401)

**Missing or Invalid Token:**

```json
{
    "message": "Unauthenticated."
}
```

### Not Found Errors (404)

```json
{
    "code": 404,
    "status": false,
    "message": "Pesanan tidak ditemukan",
    "data": null
}
```

### Server Errors (500)

```json
{
    "code": 500,
    "status": false,
    "message": "Gagal membuat pesanan: [error details]",
    "data": null
}
```

---

## Status Codes

| Code | Description                             |
| ---- | --------------------------------------- |
| 200  | Success                                 |
| 201  | Created                                 |
| 401  | Unauthorized (missing or invalid token) |
| 404  | Not Found                               |
| 422  | Validation Error                        |
| 500  | Internal Server Error                   |

---

## Order Number Format

Order numbers are automatically generated with the format:

```
YYMMDDxxxxxxxx
```

-   `YYMMDD`: Date (e.g., 260113 for Jan 13, 2026)
-   `xxxxxxxx`: 8-digit sequential number (resets daily)

**Examples:**

-   `260113000000001` - First order on Jan 13, 2026
-   `260113000000002` - Second order on Jan 13, 2026
-   `260114000000001` - First order on Jan 14, 2026

---

## Complete cURL Examples

### 1. Login

```bash
curl -X POST http://your-domain.com/api/auth/login \
  -H "Content-Type: application/json" \
  -d '{
    "email": "user@example.com",
    "password": "password123"
  }'
```

### 2. List Orders

```bash
curl -X GET "http://your-domain.com/api/orders?page=1&per_page=10" \
  -H "Authorization: Bearer YOUR_JWT_TOKEN"
```

### 3. Create Order

```bash
curl -X POST http://your-domain.com/api/orders \
  -H "Authorization: Bearer YOUR_JWT_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "payment_method_id": 1,
    "customer_name": "John Doe",
    "customer_phone": "08123456789",
    "discount_amount": 5000,
    "order_details": [
      {
        "product_id": 1,
        "quantity": 2,
        "price": 50000
      }
    ]
  }'
```

### 4. Get Order

```bash
curl -X GET http://your-domain.com/api/orders/1
```

### 5. Update Order

```bash
curl -X PUT http://your-domain.com/api/orders/1 \
  -H "Authorization: Bearer YOUR_JWT_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{
    "status_id": 2
  }'
```

### 6. Delete Order

```bash
curl -X DELETE http://your-domain.com/api/orders/1 \
  -H "Authorization: Bearer YOUR_JWT_TOKEN"
```

---

## Notes

-   All timestamps are in format: `YYYY-MM-DD HH:MM:SS`
-   All amounts are in Indonesian Rupiah (IDR)
-   Order deletions are soft deletes (recoverable)
-   When updating order details, existing details are replaced
-   Totals are automatically calculated
-   JWT tokens should be kept secure and not exposed

---

## Support

For issues or questions, please contact the development team.

**Last Updated:** January 13, 2026
