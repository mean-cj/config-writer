<?php
	
namespace Larapack\ConfigWriter;

use Illuminate\Support\Facades\Config;

class Facade extends Config
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public static function write($config, array $newValues = [], $validate = true, $path='config')
    {
        $config = new Repository($config, $path);
	    
	    foreach ($newValues AS $key => $value)
	    {
		    $config->set($key, $value);
	    }
	    
	    $config->save(null, null, $validate);
    }
}
