<?php
/**
 * @package   Molajo
 * @copyright 2013 Amy Stephen. All rights reserved.
 * @license   http://www.opensource.org/licenses/mit-license.html MIT License
 */

$ignore = array();

$ignore[] = '.buildpath' . "\n";
$ignore[] = '.DS_Store' . "\n";
$ignore[] = '.idea' . "\n";
$ignore[] = '.project' . "\n";
$ignore[] = '.settings' . "\n";
$ignore[] = '.gitignore' . "\n";
$ignore[] = '.gitattributes' . "\n";
$ignore[] = 'composer.phar' . "\n";
$ignore[] = 'composer.lock' . "\n";

$current_path = __DIR__;

$objects = new RecursiveIteratorIterator
(new RecursiveDirectoryIterator($current_path),
    RecursiveIteratorIterator::SELF_FIRST);

$dirRead = dir(__DIR__);
$path    = $dirRead->path;
while ($entry = $dirRead->read()) {
    if ($entry == '.' || $entry == '..' || $entry == '.git') {

    } else {
        if (is_dir($path . '/' . $entry)) {
        } else {
            $item     = $path . '/' . $entry;
            $ignore[] = substr($item, strlen($current_path) + 1, 99999) . "\n";
        }
    }
}
$dirRead->close();

foreach ($objects as $name => $object) {

    if ($object->isDir()) {
        if (basename($name) == '.' || basename($name) == '..' || basename($name) == '.git') {
        } else {
            $test = substr(substr($name, strlen($current_path) + 1, 9999), 0, 4);
            if ($test == '.git') {
            } else {
                $dirRead = dir($name);
                $path    = $dirRead->path;
                while ($entry = $dirRead->read()) {
                    if (is_dir($path . '/' . $entry)) {
                    } else {
                        $item     = $path . '/' . $entry;
                        $ignore[] = substr($item, strlen($current_path) + 1, 99999) . "\n";
                    }
                }
                $dirRead->close();
            }
        }
    }
}

file_put_contents('gitignore.txt', $ignore);

