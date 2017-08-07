# Swagger

## What Is OpenAPI?

OpenAPI Specification (formerly Swagger Specification) is an API description format for REST APIs. An OpenAPI file allows you to describe your entire API, including:

- Available endpoints (/users) and operations on each endpoint (GET /users, POST /users)
- Operation parameters Input and output for each operation
- Authentication methods
- Contact information, license, terms of use and other information.

API specifications can be written in YAML or JSON. The format is easy to learn and is both human-redable and machine-readable.

## What Is Swagger?

Swagger is a set of open-source tools built around the OpenAPI Specification that can help you design, build, document and consume REST APIs.

The major Swagger tools include:

- <a href="http://editor.swagger.io/?_ga=2.172176739.1777269719.1502082035-1830072836.1501682703">Swagger Editor</a> – browser-based editor where you can write OpenAPI specs.
- <a href="https://swagger.io/swagger-ui/">Swagger UI</a> – renders OpenAPI specs as interactive API documentation.
- Swagger Codegen – generates server stubs and client libraries from an OpenAPI spec.

## Basic Structure

You can write OpenAPI definitions in YAML or JSON. In this guide, we use only YAML examples, but JSON works equally well.

A sample OpenAPI definition written in YAML looks like:

```js
swagger: '2.0'
info:
  description: This is my app swagger api
  version: 1.0.0
  title: RESTful API V1
  contact:
    name: Nazmul Basher
    url: 'https://nazmulb.wordpress.com'
    email: nazmul.basher@gmail.com
host: localhost
basePath: /swagger/api/v1
schemes:
  - http
consumes:
  - application/json
  - application/x-www-form-urlencoded
  - multipart/form-data
paths:
  /users:
    get:
      tags:
        - user
      summary: Get all users
      description: Get all the users as list
      operationId: getAllUsers
      responses:
        '200':
          description: Success
          schema:
            $ref: '#/definitions/User'
        default:
          description: Unexpected error
          schema:
            $ref: '#/definitions/Error'
  '/users/{id}':
    get:
      tags:
        - user
      summary: Get user by id
      description: Get the user by user id
      operationId: getUserById
      parameters:
        - name: id
          in: path
          type: integer
          description: User ID
          required: true
      responses:
        '200':
          description: Success
          schema:
            $ref: '#/definitions/User'
        default:
          description: Unexpected error
          schema:
            $ref: '#/definitions/Error'
definitions:
  User:
    type: object
    properties:
      _id:
        type: integer
      username:
        type: string
      password:
        type: string
      profession:
        type: string
  ErrorTrace:
    type: object
    properties:
      file:
        type: string
      line:
        type: integer
      function:
        type: string
      class:
        type: string
      object:
        type: object
      type:
        type: string
      args:
        type: array
        items:
          type: object
          properties:
            status_code:
              type: integer
            message:
              type: string
  Error:
    type: object
    properties:
      code:
        type: integer
        format: int32
      message:
        type: string
      trace:
        type: array
        items:
          $ref: '#/definitions/ErrorTrace'
      fields:
        type: string

```

You can learn more from <a href="https://swagger.io/docs/specification/basic-structure/">here</a>

## How to install Swagger Editor on a local machine?

You can run and use the Swagger Editor on your machine.

Please install <a href="https://nodejs.org/en/">NodeJS</a> on your machine before downloading and running the Swagger Editor.

Once NodeJS is installed successfully, please run the following to run the Editor using the http-server module from GitHub. After downloading the latest version from Github, you will need to run these scripts on your terminal.

```js
npm install -g http-server
wget https://github.com/swagger-api/swagger-editor/releases/download/v2.10.4/swagger-editor.zip
unzip swagger-editor.zip
http-server swagger-editor
```

## How to install Swagger UI on a local machine?

#### Download

There is no need to install, build or recompile the Swagger UI. The Swagger UI can be used directly from the GitHub repository. You can use the swagger-ui code as is. Please follow the instructions below to get started with the Swagger UI

- Step 1: Go to the GitHub repository of the Swagger UI project

- Step 2: Clone or download the zip file of the repository


#### Usage

- Step 1: Go to the folder containing the Swagger UI project in your local machine

- Step 2: Open the dist folder

- Step 3: Run the dist/index.html file on a browser or place the dist folder inside your server.

- Step 4: The Swagger UI will now be live in the browser, with the default rendering of the Swagger Petstore. The JSON specifcation of the Swagger Petstore can be found here - http://petstore.swagger.io/v2/swagger.json