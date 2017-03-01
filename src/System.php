<?php

namespace Zazalt\System;

class System
{
    /**
     * Recursive create a directory
     *
     * @param   string  $directory
     * @return  boolean
     */
    public function recursiveCreateDirectory(string $directory): bool
    {
        if(!is_dir($directory)) {
            return (mkdir($directory, 0777, true)) ? true : false;
        } else {
            return true;
        }
    }

    /**
     * Recursive delete files/directories
     *
     * @param type $str
     * @param type $removeParrentDir
     * @return boolean
     */
    public function recursiveDelete(string $str, bool $removeParrentDir = true)
    {
        if(is_file($str)) {
            return @unlink($str);

        } elseif(is_dir($str)) {
            $scan = glob(rtrim($str, '/') . '/*');

            if(is_array($scan) AND count($scan) > 0) {
                foreach($scan as $index => $path) {
                    $this->recursiveDelete($path);
                }
            }

            if($removeParrentDir === true) {
                return @rmdir($str);
            } else {
                return true;
            }
        }
    }
}