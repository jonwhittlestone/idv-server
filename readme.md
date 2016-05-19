Laravel ID&V Test Server communicating with json-api

[ ] Replicate limoncello-collins by following commit from vanilla laravel
	https://github.com/neomerx/limoncello-collins/commit/f1f914880717b403986594b6218d855b9d93ece3

	O app/Exceptions/Handler.php
	- app/Http/Kernel.php
	- app/Http/Middleware/Authenticate.php
	- app/Http/routes.php
	- app/Providers/AuthServiceProvider.php
	- app/Providers/EventServiceProvider.php
	- app/Providers/RouteServiceProvider.php
	- bootstrap/app.php
	O composer.json
	- config/app.php
	- config/auth.php
	- config/cors-illuminate.php
	- config/limoncello.php
	- database/factories/ModelFactory.php
	- database/migrations/0000_01_01_000000_Initial.php
	- remove database/migrations/create_users_table.php
	- remove password resets table
	- database/seeds/DatabaseSeeder.php

 [ ] Remove reliance on limoncello-collins for confluence article
-----------------------------------------------------------------
Packages added in composer.json

- neomerx/limoncello - integration package between json-api package and Laravel

- neomerx/limoncello-illuminate - JSON API support for Laravel and Lumen
	-	neomerx/cors-illuminate - CORS support for Laravel and Lumen 
	-	neomerx/json-api
	-	neomerx/limoncello



