<?php

use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
Broadcast::routes(['middleware' => ['web', 'auth']]);

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


Broadcast::channel('shop.{shopId}', function ($user, $shopId) {
    // Your logic to authorize the user for the channel
    // For example, check if the user is associated with the specified shop
    $shop = Shop::find($shopId);
    return $user->id == $shop->user_id;
});


// Add other broadcasting channels if needed

