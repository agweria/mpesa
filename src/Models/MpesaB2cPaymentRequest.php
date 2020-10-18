<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaB2cPaymentRequest.
 *
 * @property int $id
 * @property int $app_id
 * @property string $conversation_id
 * @property string $originator_conversation_id
 * @property float $amount
 * @property string $phone
 * @property string|null $remarks
 * @property string $CommandID
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Agweria\Mpesa\Models\MpesaB2cPaymentResponse|null $response
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereCommandID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereConversationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereOriginatorConversationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentRequest whereUserId($value)
 * @mixin \Eloquent
 */
class MpesaB2cPaymentRequest extends Model
{
    protected $guarded = [];

    public function response()
    {
        return $this->hasOne(MpesaB2cPaymentResponse::class, 'ConversationID', 'conversion_id');
    }
}
