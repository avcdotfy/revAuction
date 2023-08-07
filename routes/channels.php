<?php

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

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('bidderStatus.{eventId}.{rpuId}.{itemId}', function ($user, $eventId, $rpuId, $itemId) {
    return true;
});
Broadcast::channel('bidStarted.{eventId}.{rpuId}.{itemId}', function ($user, $eventId, $rpuId, $itemId) {
    return true;
});
Broadcast::channel('eventCreated.{vendor_id}', function ($user, $vendor_id) {
    return true;
});
Broadcast::channel('event-time-increament.{event_id}', function ($user, $event_id) {
    return true;
});
