<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaBulkPaymentResponse
 *
 * @property-read \Agweria\Mpesa\Models\MpesaB2cResultParameter|null $data
 * @property-read \Agweria\Mpesa\Models\MpesaBulkPaymentRequest $request
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentResponse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentResponse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentResponse query()
 * @mixin \Eloquent
 */
class MpesaBulkPaymentResponse extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->belongsTo(MpesaBulkPaymentRequest::class, 'ConversationID', 'conversation_id');
    }

    public function data()
    {
        return $this->hasOne(MpesaB2cResultParameter::class, 'response_id');
    }
}
