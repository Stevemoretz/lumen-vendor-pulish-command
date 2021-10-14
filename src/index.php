<?php

use Illuminate\Foundation\Console\VendorPublishCommand;
use Illuminate\Foundation\Events\VendorTagPublished;

//region load manually since namespaces are not available via autoloading
if(!class_exists( VendorPublishCommand::class)){
    require_once __DIR__ . '/../src/Laravel/app/Console/Commands/VendorPublishCommand.php';
}

if(!class_exists( VendorTagPublished::class)){
    require_once __DIR__ . '/../src/Illuminate/Foundation/Events/VendorTagPublished.php';
}
//endregion
