<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $category
 * @property string $slug
 * @property string|null $varian
 * @property string|null $color keterangan ini diperlukan terutama untuk gems
 * @property string|null $warna color dalam bahasa indonesia
 * @property string|null $name
 * @property string|null $localname
 * @property string|null $transparency
 * @property string|null $cut
 * @property string|null $clarity
 * @property numeric|null $carat
 * @property numeric|null $size ukuran dalam mm
 * @property numeric|null $weight berat dalam gram
 * @property numeric|null $price_per_gram
 * @property numeric|null $total_price
 * @property string|null $codename
 * @property string|null $description
 * @property string|null $barcode
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereCarat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereClarity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereCodename($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereCut($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereLocalname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory wherePricePerGram($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereTransparency($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereVarian($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereWarna($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory whereWeight($value)
 */
	class Accessory extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property numeric $gold_purity
 * @property string $shortname
 * @property string|null $annotation Keterangan tambahan pada LM, bisa ditulis di dalam kurung tertentu
 * @property string $name Nama LM, lebih panjang dari shortname, disertai detail specs LM tersebut
 * @property int|null $year Untuk menunjukkan tahun produksi perhiasan/LM terkait
 * @property string|null $edition Edisi biasanya menunjukkan tahun produksi perhiasan/LM terkait, tapi bisa saja menunjukkan keterangan lain.
 * @property int $condition 99=>mulus|97=>cacat packing sedikit|96=>cacat packing lumayan|93=>packing rusak|80=>cacat dikit hampir tidak terlihat|70=>cacat lumayan keliatan|50=>rusak
 * @property string|null $brand Merek dari LM terkait
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereEdition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereGoldPurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereShortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldBullion whereYear($value)
 */
	class GoldBullion extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $localname
 * @property string $slug
 * @property string|null $description
 * @property string $codename
 * @property string|null $barcode
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereCodename($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereLocalname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldColor whereSlug($value)
 */
	class GoldColor extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $class
 * @property numeric $purity
 * @property int $carat
 * @property numeric $carat_ratio
 * @property string|null $barcode
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereCarat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereCaratRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard wherePurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GoldStandard whereSlug($value)
 */
	class GoldStandard extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $table_name
 * @property int $record_id
 * @property string $record_slug
 * @property numeric $quantity
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory whereRecordSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory whereTableName($value)
 */
	class Inventory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int|null $ornament_id
 * @property string $ornament_type Slug dari ornament_type->name atau ornament->type
 * @property string $ornament_varian Slug dari ornament->varian
 * @property string $gold_color
 * @property numeric $gold_purity
 * @property string $shortname
 * @property string|null $annotation Keterangan tambahan pada nama perhiasan, bisa ditulis di dalam kurung tertentu
 * @property string $name Nama lengkap perhiasan, lebih panjang dari shortname, disertai detail specs perhiasan tersebut
 * @property int|null $year Untuk menunjukkan tahun produksi perhiasan/LM terkait
 * @property string|null $edition Edisi biasanya menunjukkan tahun produksi perhiasan/LM terkait, tapi bisa saja menunjukkan keterangan lain.
 * @property int $condition 99=>mulus|80=>cacat dikit hampir tidak terlihat|70=>cacat lumayan keliatan|50=>rusak
 * @property string|null $stamp Di setiap perhiasan biasanya terdapat cap yang biasanya menunjukkan informasi tentang persentase emas tersebut.
 * @property string|null $age_range Pilihan usia: bayi, anak, remaja, dewasa, senior
 * @property int|null $size Ukuran perhiasan, misalnya untuk cincin, gelang atau kalung
 * @property string|null $brand Beberapa perhiasan memiliki merek tertentu, misalnya UBS
 * @property int $plates Hanya untuk menunjukkan jumlah pelat yang ada, biasanya ada pada perhiasan gelang
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereAgeRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereEdition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereGoldColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereGoldPurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereOrnamentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereOrnamentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereOrnamentVarian($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry wherePlates($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereShortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereStamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Jewelry whereYear($value)
 */
	class Jewelry extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $type_id
 * @property string $type
 * @property string $varian
 * @property string $slug
 * @property string|null $barcode
 * @property string|null $description
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Ornament whereVarian($value)
 */
	class Ornament extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $category
 * @property int|null $parent_id
 * @property string|null $parent_slug
 * @property string $name
 * @property string|null $localname
 * @property string $slug
 * @property string|null $description
 * @property string|null $barcode
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereLocalname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereParentSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|OrnamentType whereSlug($value)
 */
	class OrnamentType extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $table_name
 * @property int $record_id
 * @property string $record_slug
 * @property numeric|null $weight_fee
 * @property numeric|null $weight_price
 * @property numeric $price
 * @property string $is_actual
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereIsActual($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereRecordId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereRecordSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereTableName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereWeightFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price whereWeightPrice($value)
 */
	class Price extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $category_id
 * @property string $category_slug
 * @property string $shortname
 * @property string $name
 * @property string $slug
 * @property numeric|null $weight
 * @property numeric $weight_fee
 * @property numeric $weight_price
 * @property numeric $price
 * @property string|null $unit
 * @property string|null $tray
 * @property string $status
 * @property string|null $description
 * @property string|null $barcode
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCategorySlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereShortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereTray($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeightFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeightPrice($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $product_id
 * @property int $accessory_id
 * @property int $quantity mata full=>99
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory whereAccessoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory whereQuantity($value)
 */
	class ProductAccessory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $username
 * @property string|null $id_type
 * @property string|null $id_number
 * @property string|null $phone_type
 * @property string|null $phone
 * @property string $role
 * @property string $type
 * @property string|null $rank
 * @property string $is_creditor
 * @property int $clearance_level
 * @property string|null $gender
 * @property string|null $photo
 * @property string|null $birthdate
 * @property string|null $description
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereClearanceLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIdType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereIsCreditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoneType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

