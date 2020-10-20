<?php

namespace Agweria\Mpesa\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Agweria\Mpesa\Models\MpesaB2cResultParameter.
 *
 * @property int $id
 * @property int $response_id
 * @property string $TransactionAmount
 * @property string $TransactionReceipt
 * @property string $B2CRecipientIsRegisteredCustomer
 * @property int $B2CChargesPaidAccountAvailableFunds
 * @property string $ReceiverPartyPublicName
 * @property string $TransactionCompletedDateTime
 * @property string $B2CUtilityAccountAvailableFunds
 * @property string $B2CWorkingAccountAvailableFunds
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereB2CChargesPaidAccountAvailableFunds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereB2CRecipientIsRegisteredCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereB2CUtilityAccountAvailableFunds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereB2CWorkingAccountAvailableFunds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereReceiverPartyPublicName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereResponseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereTransactionAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereTransactionCompletedDateTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereTransactionReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MpesaB2cResultParameter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MpesaB2cResultParameter extends Model
{
    protected $guarded = [];
}
