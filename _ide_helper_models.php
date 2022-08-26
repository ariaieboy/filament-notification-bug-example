<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $title
 * @property int $iran_province_id
 * @property int $iran_city_id
 * @property int $user_id
 * @property string $plaque
 * @property string|null $floor
 * @property string|null $unit
 * @property string $postcode
 * @property string $address
 * @property bool $custom_receiver
 * @property string|null $receiver_first_name
 * @property string|null $receiver_last_name
 * @property \App\Models\Entitys\PhoneEntity|null $receiver_phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\IranCity|null $city
 * @property-read \App\Models\IranProvince|null $province
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\AddressFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCustomReceiver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereIranCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereIranProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePlaque($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereReceiverFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereReceiverLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereReceiverPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUserId($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Attribute
 *
 * @property int $id
 * @property int $group_id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property bool $required
 * @property bool $multiselectable
 * @property bool $customizable
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AttributeDefault[] $defaults
 * @property-read int|null $defaults_count
 * @property-read \App\Models\AttributeGroup $group
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductAttribute[] $productValues
 * @property-read int|null $product_values_count
 * @method static \Database\Factories\AttributeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereCustomizable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereMultiselectable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Attribute whereUpdatedAt($value)
 */
	class Attribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeDefault
 *
 * @property int $id
 * @property int $attribute_id
 * @property string $value
 * @property-read \App\Models\Attribute $attribute
 * @method static \Database\Factories\AttributeDefaultFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeDefault whereValue($value)
 */
	class AttributeDefault extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AttributeGroup
 *
 * @property int $id
 * @property string $title
 * @property bool $status
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Attribute[] $attributes
 * @property-read int|null $attributes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $categories
 * @property-read int|null $categories_count
 * @method static \Database\Factories\AttributeGroupFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AttributeGroup whereUpdatedAt($value)
 */
	class AttributeGroup extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Carrier
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property bool $status
 * @property string $transporter
 * @property array|null $rules
 * @property array|null $pricing
 * @property bool $pay_at_dest
 * @property bool $is_free
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \App\Services\Carrier\Contracts\CarrierType $type
 * @method static \Database\Factories\CarrierFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereIsFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier wherePayAtDest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier wherePricing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereRules($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereTransporter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carrier whereUpdatedAt($value)
 */
	class Carrier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cart
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $address_id
 * @property int|null $carrier_id
 * @property string|null $guest
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $order_id
 * @property-read \App\Models\Address|null $address
 * @property-read \App\Models\Carrier|null $carrier
 * @property-read \App\Models\Order|null $order
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductVar[] $productVars
 * @property-read int|null $product_vars_count
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\CartFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCarrierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereGuest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cart whereUserId($value)
 */
	class Cart extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $title
 * @property bool $status
 * @property int|null $parent_id
 * @property string|null $description
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $breadcrumb
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AttributeGroup[] $attributeGroups
 * @property-read int|null $attribute_groups_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Collection|Category[] $childs
 * @property-read int|null $childs_count
 * @property-read Category|null $parent
 * @property-read Category|null $parents
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\CategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category roots()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Feature
 *
 * @property int $id
 * @property string $title
 * @property \App\Models\Enums\FeatureTypes $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\FeatureValue[] $values
 * @property-read int|null $values_count
 * @method static \Database\Factories\FeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature query()
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Feature whereUpdatedAt($value)
 */
	class Feature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FeatureValue
 *
 * @property int $id
 * @property string $value
 * @property int $feature_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $color
 * @property-read \App\Models\Feature $feature
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductVar[] $productVars
 * @property-read int|null $product_vars_count
 * @method static \Database\Factories\FeatureValueFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeatureValue whereValue($value)
 */
	class FeatureValue extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IranCity
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property int $county_id
 * @property int $sector_id
 * @property string $code
 * @property string $short_code
 * @property bool $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCityDistrict[] $cityDistricts
 * @property-read int|null $city_districts_count
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranCounty $county
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranProvince $province
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranSector $sector
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel active()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel notActive()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity query()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereCountyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereSectorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCity whereStatus($value)
 */
	class IranCity extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IranCounty
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property string $code
 * @property string $short_code
 * @property bool $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCity[] $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCityDistrict[] $cityDistricts
 * @property-read int|null $city_districts_count
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranProvince $province
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranRuralDistrict[] $ruralDistricts
 * @property-read int|null $rural_districts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranSector[] $sectors
 * @property-read int|null $sectors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranVillage[] $villages
 * @property-read int|null $villages_count
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel active()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel notActive()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty query()
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranCounty whereStatus($value)
 */
	class IranCounty extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IranProvince
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $short_code
 * @property bool $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCity[] $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCityDistrict[] $cityDistricts
 * @property-read int|null $city_districts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCounty[] $counties
 * @property-read int|null $counties_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranRuralDistrict[] $ruralDistricts
 * @property-read int|null $rural_districts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranSector[] $sectors
 * @property-read int|null $sectors_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranVillage[] $villages
 * @property-read int|null $villages_count
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel active()
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel notActive()
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince query()
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranProvince whereStatus($value)
 */
	class IranProvince extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\IranSector
 *
 * @property int $id
 * @property string $name
 * @property int $province_id
 * @property int $county_id
 * @property string $code
 * @property string $short_code
 * @property bool $status
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCity[] $cities
 * @property-read int|null $cities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranCityDistrict[] $cityDistricts
 * @property-read int|null $city_districts_count
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranCounty $county
 * @property-read \SaliBhdr\TyphoonIranCities\Models\IranProvince $province
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranRuralDistrict[] $ruralDistricts
 * @property-read int|null $rural_districts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\SaliBhdr\TyphoonIranCities\Models\IranVillage[] $villages
 * @property-read int|null $villages_count
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel active()
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseIranModel notActive()
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector query()
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereCountyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereProvinceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereShortCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|IranSector whereStatus($value)
 */
	class IranSector extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Manufacturer
 *
 * @property int $id
 * @property string $title
 * @property string $brand_name
 * @property string|null $description
 * @property bool $status
 * @property bool $irani
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $full_name
 * @property string $slug
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products
 * @property-read int|null $products_count
 * @method static \Database\Factories\ManufacturerFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereBrandName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereFullName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereIrani($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Manufacturer whereUpdatedAt($value)
 */
	class Manufacturer extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $order_key
 * @property int $total_paid
 * @property int $total_products
 * @property int $total_shipment
 * @property int $total_price
 * @property \App\Models\Enums\OrderStatus $status
 * @property string|null $user_message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cart|null $cart
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductVar[] $productVars
 * @property-read int|null $product_vars_count
 * @property-read \App\Models\Shipment|null $shipment
 * @property-read \App\Models\User|null $user
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalShipment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserMessage($value)
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int|null $cart_id
 * @property int|null $order_id
 * @property \App\Services\Payment\Contracts\PaymentTypes $type
 * @property string $gateway
 * @property int $amount
 * @property string|null $transaction_id
 * @property string|null $reference_id
 * @property string|null $card_number
 * @property int $step
 * @property string|null $pay_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $order
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment paid()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereStep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 */
	class Payment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property string $title_fa
 * @property string|null $title_en
 * @property string|null $short_description
 * @property string|null $description
 * @property int $manufacturer_id
 * @property int $category_id
 * @property int $total_quantity
 * @property int|null $base_price
 * @property \App\Models\Enums\ProductTypes $type
 * @property array|null $package_dimensions
 * @property int|null $package_weight
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $feature_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductAttribute[] $attributesValue
 * @property-read int|null $attributes_value_count
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\Feature|null $feature
 * @property-read \App\Models\Manufacturer $manufacturer
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductVar[] $vars
 * @property-read int|null $vars_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Warranty[] $warranties
 * @property-read int|null $warranties_count
 * @method static \Database\Factories\ProductFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereBasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereFeatureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageDimensions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePackageWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitleEn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTitleFa($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereTotalQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\ProductAttribute
 *
 * @property int $id
 * @property int $attribute_id
 * @property int|null $attribute_default_id
 * @property int $product_id
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Attribute $attribute
 * @property-read \App\Models\AttributeDefault|null $attributeDefault
 * @property-read \App\Models\Product $product
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute customizable()
 * @method static \Database\Factories\ProductAttributeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereAttributeDefaultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereAttributeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductAttribute whereValue($value)
 */
	class ProductAttribute extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductVar
 *
 * @property int $id
 * @property int $warranty_id
 * @property int $product_id
 * @property int $feature_value_id
 * @property string|null $seller_reference
 * @property int $max_per_order
 * @property int $quantity
 * @property int|null $buy_price
 * @property int $sell_price
 * @property int $seller_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cart[] $carts
 * @property-read int|null $carts_count
 * @property-read \App\Models\FeatureValue $featureValue
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Warranty $warranty
 * @method static \Database\Factories\ProductVarFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereBuyPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereFeatureValueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereMaxPerOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereSellPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereSellerReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductVar whereWarrantyId($value)
 */
	class ProductVar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shipment
 *
 * @property int $id
 * @property int $order_id
 * @property int $carrier_id
 * @property int $address_id
 * @property int $total_price
 * @property \App\Models\Address|null $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $referral_code
 * @property-read \App\Models\Carrier|null $carrier
 * @property-read \App\Models\Order|null $order
 * @method static \Database\Factories\ShipmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereAddressId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereCarrierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereReferralCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipment whereUpdatedAt($value)
 */
	class Shipment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property bool $completed
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property \App\Models\Entitys\PhoneEntity $phone
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $birth_date
 * @property \App\Models\Enums\GenderType|null $gender
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activities
 * @property-read int|null $activities_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $addresses
 * @property-read int|null $addresses_count
 * @property-read string $full_name
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Payment[] $payments
 * @property-read int|null $payments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Filament\Models\Contracts\FilamentUser, \Filament\Models\Contracts\HasName, \Filament\Models\Contracts\HasAvatar {}
}

namespace App\Models{
/**
 * App\Models\Warranty
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property bool $status
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductVar[] $productVars
 * @property-read int|null $product_vars_count
 * @method static \Database\Factories\WarrantyFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty query()
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Warranty whereUpdatedAt($value)
 */
	class Warranty extends \Eloquent {}
}

