<?php

namespace App\Core;

use Illuminate\Database\Eloquent\Factory as MainFactory;
use Symfony\Component\Finder\Finder;

class Factory extends MainFactory
{
    public function load($paths = [])
    {
        $factory = $this;
        foreach ($paths as $path) {
            if (is_dir($path)) {
                foreach (Finder::create()->files()->in($path) as $file) {
                    require $file->getRealPath();
                }
            }
        }
        return $factory;
    }
}
