<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaStkRequest
 *
 * @property int $id
 * @property int $app_id
 * @property string $phone
 * @property float $amount
 * @property string $reference
 * @property string $description
 * @property string $status
 * @property int $successful
 * @property string $MerchantRequestID
 * @property string $CheckoutRequestID
 * @property string $response_code
 * @property string $response_description
 * @property string $customer_message
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Agweria\Mpesa\Models\MpesaStkCallback|null $response
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereCheckoutRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereCustomerMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereMerchantRequestID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereResponseCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereResponseDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereSuccessful($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaStkRequest whereUserId($value)
 * @mixin \Eloquent
 */
class MpesaStkRequest extends Model
{
    protected $guarded = [];

    public function response()
    {
        return $this->hasOne(MpesaStkCallback::class, 'CheckoutRequestID', 'CheckoutRequestID');
    }
}
