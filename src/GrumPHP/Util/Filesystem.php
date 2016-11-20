<?php

namespace GrumPHP\Util;

use SplFileInfo;
use Symfony\Component\Filesystem\Filesystem as SymfonyFilesystem;

/**
 * Class Filesystem
 *
 * @package GrumPHP\Util
 */
class Filesystem extends SymfonyFilesystem
{
    /**
     * @param SplFileInfo $file
     * @return string
     */
    public function readFromFileInfo(SplFileInfo $file)
    {
        $handle = $file->openFile('r');

        return $handle->fread($handle->getSize());
    }
}
