<?php
declare(strict_types = 1);

namespace BrowscapPHPTest\Exception;

use BrowscapPHP\Exception\FileNotFoundException;

/**
 * @covers \BrowscapPHP\Exception\FileNotFoundException
 */
final class FileNotFoundExceptionTest extends \PHPUnit\Framework\TestCase
{
    public function testFileNotFound() : void
    {
        $exception = FileNotFoundException::fileNotFound('test.txt');

        self::assertInstanceOf(FileNotFoundException::class, $exception);
        self::assertSame(
            'File "test.txt" does not exist',
            $exception->getMessage()
        );
    }
}
