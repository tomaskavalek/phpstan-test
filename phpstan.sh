#!/bin/bash
vendor/bin/phpstan analyse --level=4 --autoload-file=app/bootstrap.php app
