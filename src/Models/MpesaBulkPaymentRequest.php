<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaBulkPaymentRequest
 *
 * @property-read \Agweria\Mpesa\Models\MpesaBulkPaymentResponse|null $response
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaBulkPaymentRequest query()
 * @mixin \Eloquent
 */
class MpesaBulkPaymentRequest extends Model
{
    protected $guarded = [];

    public function response()
    {
        return $this->hasOne(MpesaBulkPaymentResponse::class, 'ConversationID', 'conversion_id');
    }
}
