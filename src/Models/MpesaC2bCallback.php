<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaC2bCallback
 *
 * @property int $id
 * @property int|null $app_id
 * @property string $TransactionType
 * @property string $TransID
 * @property string $TransTime
 * @property float $TransAmount
 * @property int $BusinessShortCode
 * @property string $BillRefNumber
 * @property string|null $InvoiceNumber
 * @property string|null $ThirdPartyTransID
 * @property float $OrgAccountBalance
 * @property string $MSISDN
 * @property string|null $FirstName
 * @property string|null $MiddleName
 * @property string|null $LastName
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $name
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereAppId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereBillRefNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereBusinessShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereMSISDN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereOrgAccountBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereThirdPartyTransID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereTransAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereTransID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereTransTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereTransactionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaC2bCallback whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaC2bCallback extends Model
{
    protected $guarded = [];

    public function getNameAttribute()
    {
        return $this->FirstName . ' ' . $this->MiddleName . ' ' . $this->LastName;
    }
}
