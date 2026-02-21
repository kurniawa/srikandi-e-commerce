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
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Accessory query()
 */
	class Accessory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string|null $data_type Tipe atribut, misalnya string, integer, decimal, boolean, date, dll
 * @property bool $is_filterable Menandakan apakah atribut ini dapat digunakan sebagai filter pada pencarian produk
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeValue> $values
 * @property-read int|null $values_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereDataType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereIsFilterable($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Attribute whereUpdatedAt($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $attribute_id
 * @property string $value
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attribute $attribute
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Product> $products
 * @property-read int|null $products_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValue whereValue($value)
 */
	class AttributeValue extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $product_id
 * @property int $attribute_value_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct whereAttributeValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AttributeValueProduct whereUpdatedAt($value)
 */
	class AttributeValueProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $alias
 * @property string|null $manufacturer
 * @property string|null $country
 * @property string|null $description
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereManufacturer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Brand whereUpdatedAt($value)
 */
	class Brand extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $brand_id
 * @property int $motif_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif whereBrandId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif whereMotifId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BrandMotif whereUpdatedAt($value)
 */
	class BrandMotif extends \Eloquent {}
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
 * @property string $name
 * @property string|null $issuer
 * @property string|null $country
 * @property string|null $edition
 * @property int|null $year
 * @property string|null $description
 * @property string|null $logo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereEdition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereIssuer($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Certification whereYear($value)
 */
	class Certification extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory query()
 */
	class Inventory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $class
 * @property numeric $purity
 * @property numeric $fineness
 * @property int $carat
 * @property numeric $carat_ratio
 * @property string|null $barcode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereCarat($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereCaratRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereFineness($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard wherePurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MetalStandard whereUpdatedAt($value)
 */
	class MetalStandard extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $edition
 * @property int|null $year
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereEdition($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Motif whereYear($value)
 */
	class Motif extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Price query()
 */
	class Price extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $metal_standard_id
 * @property string $slug
 * @property string $shortname
 * @property string $name
 * @property string|null $annotation Keterangan tambahan pada nama perhiasan, bisa ditulis di dalam kurung tertentu
 * @property numeric|null $weight
 * @property numeric $price
 * @property string|null $unit
 * @property string $status
 * @property int|null $year
 * @property string|null $description
 * @property string|null $barcode
 * @property string|null $created_by
 * @property string|null $updated_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\AttributeValue> $attributeValues
 * @property-read int|null $attribute_values_count
 * @property-read mixed $metal_type
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereAnnotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereBarcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereMetalStandardId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereShortname($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereUpdatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Product whereYear($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductAccessory query()
 */
	class ProductAccessory extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property int $product_id
 * @property int $brand_motif_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif whereBrandMotifId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ProductBrandMotif whereUpdatedAt($value)
 */
	class ProductBrandMotif extends \Eloquent {}
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

