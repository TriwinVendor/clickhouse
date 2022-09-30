<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/common/criteria.proto

namespace Google\Ads\GoogleAds\V10\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A location criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v10.common.LocationInfo</code>
 */
class LocationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2;</code>
     */
    protected $geo_target_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $geo_target_constant
     *           The geo target constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V10\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2;</code>
     * @return string
     */
    public function getGeoTargetConstant()
    {
        return isset($this->geo_target_constant) ? $this->geo_target_constant : '';
    }

    public function hasGeoTargetConstant()
    {
        return isset($this->geo_target_constant);
    }

    public function clearGeoTargetConstant()
    {
        unset($this->geo_target_constant);
    }

    /**
     * The geo target constant resource name.
     *
     * Generated from protobuf field <code>optional string geo_target_constant = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkString($var, True);
        $this->geo_target_constant = $var;

        return $this;
    }

}
