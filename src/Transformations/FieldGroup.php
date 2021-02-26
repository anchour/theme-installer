<?php
/**
 * Created by PhpStorm.
 * User: robitaille
 * Date: 2/26/21
 * Time: 4:29 PM
 */

namespace Anchour\Theme\Installer\Transformations;


use Anchour\Theme\Installer\Exceptions\InvalidFieldGroupKeyException;

class FieldGroup
{
    /**
     * @var \stdClass;
     */
    private $contents;
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;

        $this->load();
    }

    private function load()
    {
        $this->contents = json_decode(file_get_contents($this->filePath));
    }

    public function __get($name)
    {
        if (isset($this->contents->{$name})) {
            return $this->contents->{$name};
        }

        return '';
//        throw new InvalidFieldGroupKeyException($name);
    }

    /**
     * @return string
     */
    public function getBasename()
    {
        return basename($this->filePath);
    }
}