<?php

use Illuminate\Routing\Router;
use Neomerx\JsonApi\Contracts\Document\DocumentInterface;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\BoardsController;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\CommentsController;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\Controller;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\PostsController;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\RolesController;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Api\UsersController;
use Neomerx\LimoncelloIlluminate\Http\Controllers\Web\HomeController;
use Neomerx\LimoncelloIlluminate\Schemas\BoardSchema;
use Neomerx\LimoncelloIlluminate\Schemas\CommentSchema;
use Neomerx\LimoncelloIlluminate\Schemas\PostSchema;
use Neomerx\LimoncelloIlluminate\Schemas\RoleSchema;
use Neomerx\LimoncelloIlluminate\Schemas\UserSchema;

Route::get('/', HomeController::class . '@index');
Route::post('authenticate', HomeController::class . '@authenticate');

Route::group([
'middleware' => ['auth'],
'prefix'     => Controller::API_URL_PREFIX,
], function (Router $router) {

$regResource = function ($type, $controllerClass) use ($router) {
$router->get("$type", $controllerClass . '@index');
$router->get("$type/{idx}", $controllerClass . '@show');
$router->post("$type", $controllerClass . '@store');
$router->patch("$type/{idx}", $controllerClass . '@update');
$router->delete("$type/{idx}", $controllerClass . '@destroy');
};

$regGetRelationship = function ($type, $relationship, $handler) use ($router) {
$router->get($type . '/{idx}/' . DocumentInterface::KEYWORD_RELATIONSHIPS . '/' . $relationship, $handler);
};

$regResource(BoardSchema::TYPE, BoardsController::class);
$regGetRelationship(BoardSchema::TYPE, BoardSchema::REL_POSTS, BoardsController::class . '@indexPosts');

$regResource(CommentSchema::TYPE, CommentsController::class);

$regResource(PostSchema::TYPE, PostsController::class);
$regGetRelationship(PostSchema::TYPE, PostSchema::REL_COMMENTS, PostsController::class . '@indexComments');

$regResource(RoleSchema::TYPE, RolesController::class);

$regResource(UserSchema::TYPE, UsersController::class);
$regGetRelationship(UserSchema::TYPE, UserSchema::REL_POSTS, UsersController::class . '@indexPosts');
$regGetRelationship(UserSchema::TYPE, UserSchema::REL_COMMENTS, UsersController::class . '@indexComments');

});
