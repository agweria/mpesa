<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaB2cPaymentResponse
 *
 * @property int $id
 * @property int $b2c_request_id
 * @property int $ResultType
 * @property int $ResultCode
 * @property string $ResultDesc
 * @property string $OriginatorConversationID
 * @property string $ConversationID
 * @property string $TransactionID
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Agweria\Mpesa\Models\MpesaB2cResultParameter|null $data
 * @property-read \Agweria\Mpesa\Models\MpesaB2cPaymentRequest $request
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereB2cRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereConversationID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereOriginatorConversationID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereResultCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereResultDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereResultType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereTransactionID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cPaymentResponse whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaB2cPaymentResponse extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->belongsTo(MpesaB2cPaymentRequest::class, 'ConversationID', 'conversation_id');
    }

    public function data()
    {
        return $this->hasOne(MpesaB2cResultParameter::class, 'response_id');
    }
}
