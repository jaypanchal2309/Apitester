# Apitester
The name of this package it self describes the usage of the package. You can test APIs using this laravel package.

First, we will see the Installation part and after that, we will move on: "How to use" part.

## Installation

- run below command in your project root directory to install the package.

```bash
  composer require jaypanchal/apitester
```

- After that, include below line into providers array of config/app.php file 

```
Jaypanchal\Apitester\ApiTesterServiceProvider::class,
```  
- in your laravel app, you can use apitester using this code:

```laravel
use Jaypanchal\Apitester\ApiTester; //include this line in top of your class file.

//add below code in any function of class.
$apitester = ApiTester::loadTester();
echo $apitester;

```



## Output
- in output, you will get this UI:

![App Screenshot](https://i.imgur.com/CKYHwSd.png)

## Usage
- You need to enter your api in Url field.
- Select method of that api (GET, POST, DELETE, PUT, PATCH)
- You can also pass Headers for that API in Headers Fields. Initially, there will be 2 fields: "Key" and "Value".
- You can pass header key and header value in it.
- Example: I want to pass Bearer Token for my API. So, I will Enter Key as: "Authorization", and value as: "Bearer [BEARER_TOKEN]".
- You can also pass multiple headers using "Add new Header" button.
- You can pass parameter for that API same way we are passing headers.
- When you done with your headers and parameters, then you need to click "Call API" button to see your api output in "API Output" box.

```laravel
use Jaypanchal\Apitester\ApiTester;

$apitester = ApiTester::loadTester();
echo $apitester;

```


## Authors

- [@jaypanchal](https://www.linkedin.com/in/jay-panchal-51324a165)