# Apitester
You can call APIs using this laravel package

## Installation

- run below command to install package

```bash
  composer require jaypanchal/apitester
```

- After that, include below line into providers array of config/app.php file 

```
Jaypanchal\Apitester\ApiTesterServiceProvider::class,
```  
## Usage
- in your laravel app, you can use apitester using this:

```laravel
use Jaypanchal\Apitester\ApiTester;

$apitester = ApiTester::loadTester();
echo $apitester;

```


## Authors

- [@jaypanchal](https://www.linkedin.com/in/jay-panchal-51324a165)