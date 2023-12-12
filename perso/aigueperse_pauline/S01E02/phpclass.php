<?php
class phpclass extends AnotherClass implements SomeInterface
{
    const CLASS_CONSTANT = 'PHP_CLASS';

    private $classVariable;

    public function __construct($classVariable)
    {
        $this->classVariable = $classVariable;
    }

    public function getClassVariable()
    {
        return $this->classVariable;
    }

    // Inherited abstract method
    public function abstractMethod()
    {
        // Implementation
    }

    // Implemented interface method
    public function interfaceMethod()
    {
        // Implementation
    }

    /**
     * Sorts a table using the S01E01 algorithm.
     *
     * @param array $table
     * @return array
     */
    public function sortTable(array $table): array
    {
        // Sorting logic
        // ...

        return $sortedTable;
    }

    /**
     * Connects to the database, creates a table, inserts data, and retrieves it.
     *
     * @return array
     */
    public function dbOperation(): array
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');

        $pdo->exec("CREATE TABLE IF NOT EXISTS mytable (id INT PRIMARY KEY, data VARCHAR(255))");

        $pdo->exec("INSERT INTO mytable (id, data) VALUES (1, 'Some Data')");

        $stmt = $pdo->query("SELECT * FROM mytable");
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
    public function createImage()
    {
        imagejpeg($image, 'output.jpg');
    }

    public function writeGoogleContentToFile()
    {
        $googleContent = file_get_contents('http://www.google.com');
        file_put_contents('google_content.txt', $googleContent);
    }
    public function redirectToScript()
    {
        header('Location: another_script.php', true, 302);
        exit();
    }

    /**
     * Returns the type of an untyped parameter.
     *
     * @param mixed $parameter
     * @return string
     */
    public function getParameterType($parameter): string
    {
        return gettype($parameter);
    }

    /**
     * Returns information about the current HTTP request.
     *
     * @return array
     */
    public function getRequestInfo(): array
    {
        return [
            'host' => $_SERVER['HTTP_HOST'],
            'server_ip' => $_SERVER['SERVER_ADDR'],
            'client_ip' => $_SERVER['REMOTE_ADDR'],
            'method' => $_SERVER['REQUEST_METHOD']
        ];
    }

    // Other methods...

    /**
     * Uses a switch or match construct to identify if a letter is a vowel or consonant.
     *
     * @param string $letter
     * @return string
     */
    public function identifyLetterType(string $letter): string
    {
        switch (strtolower($letter)) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                return 'Vowel';
            default:
                return 'Consonant';
        }
    }

    /**
     * Uses a while construct interrupted by a break at a certain input number.
     *
     * @param int $limit
     */
    public function whileLoopWithBreak(int $limit)
    {
        $i = 0;
        while ($i < $limit) {
            echo $i . "\n";
            $i++;
        }
    }

    /**
     * Uses a do-while construct with a continue statement to print odd values from an array.
     *
     * @param array $numbers
     */
    public function doWhileWithContinue(array $numbers)
    {
        $index = 0;
        do {
            if ($numbers[$index] % 2 === 0) {
                continue;
            }
            echo $numbers[$index] . "\n";
            $index++;
        } while ($index < count($numbers));
    }
}
