<?php
namespace PW\Interface;

interface I {
    public function hello(): string;
}

interface I2 {
    public function world(): string;
}

namespace PW\Class;

use PW\Interface\{I, I2};
use PW\Trait\C;

class A implements I, I2 {
    use C;

    protected static $name = "A";
    private const CONSTANT_VALUE = "CONSTANT";

    public function hello(): string {
        return "Hello " . self::$name . " ";
    }

    public function world(): string {
        return "World " . self::$name . "!";
    }

    public function getName(): string {
        return "Class A Name: " . $this->name . " | " . self::$name . " | " . static::$name;
    }

    public function arrowFunctionExample($inputString): string {
        $arrowFunction = fn($input) => "Hello " . $input;
        return $arrowFunction($inputString);
    }

    public static function helloMethod(): string {
        return "hello";
    }

    public function countTo10(): \Generator {
        for ($i = 1; $i <= 10; $i++) {
            yield $i;
        }
    }

    public function displayCountTo10() {
        foreach ($this->countTo10() as $number) {
            echo $number . ' ';
        }
    }
}

class B extends A {
    protected static $name = "B";

    public function hello(): string {
        return "Hello " . static::$name . " ";
    }

    public function world(): string {
        return "World " . static::$name . "!";
    }
}

namespace PW\Trait;

trait C {
    protected $name = "C";
}

// Autoloader using REGEX
spl_autoload_register(function($class) {
    $classFile = __DIR__ . '/' . $class . '.php';
    if (file_exists($classFile)) {
        include $classFile;
    }
});

// Use the classes and interfaces
use PW\Class\{A, B};
use PW\Trait\C;
use PW\Interface\{I, I2};

// Anonymous class instance
$result = (new A)->hello()->world();
echo $result . PHP_EOL;

// Dynamic method call
$result = B::helloMethod()();
echo $result . PHP_EOL;

?>
