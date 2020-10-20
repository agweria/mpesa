<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaApp.
 *
 * @property int $id
 * @property string $shortcode
 * @property float $environment
 * @property int $enable_b2c
 * @property int $enable_b2b
 * @property string $consumer_key
 * @property string $consumer_secret
 * @property string|null $passkey
 * @property string|null $initiator_username
 * @property string|null $security_password
 * @property int $enabled
 * @property int $registered
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereConsumerKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereConsumerSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereEnableB2b($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereEnableB2c($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereEnvironment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereInitiatorUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp wherePasskey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereRegistered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereSecurityPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereShortcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaApp whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaApp extends Model
{
}
