<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaStkCallback
 *
 * @property int $id
 * @property int $mpesa_stk_request_id
 * @property int $ResultCode
 * @property string $ResultDesc
 * @property float|null $Amount
 * @property string|null $MpesaReceiptNumber
 * @property string|null $Balance
 * @property string|null $TransactionDate
 * @property string|null $PhoneNumber
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Agweria\Mpesa\Models\MpesaStkRequest $request
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereMpesaReceiptNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereMpesaStkRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereResultCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereResultDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereTransactionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkCallback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaStkCallback extends Model
{
    protected $guarded = [];

    public function request()
    {
        return $this->belongsTo(MpesaStkRequest::class, 'CheckoutRequestID', 'CheckoutRequestID');
    }
}
