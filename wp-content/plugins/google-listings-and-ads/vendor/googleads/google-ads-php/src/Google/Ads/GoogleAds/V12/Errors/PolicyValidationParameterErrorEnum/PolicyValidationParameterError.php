<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/policy_validation_parameter_error.proto

namespace Google\Ads\GoogleAds\V12\Errors\PolicyValidationParameterErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible policy validation parameter errors.
 *
 * Protobuf type <code>google.ads.googleads.v12.errors.PolicyValidationParameterErrorEnum.PolicyValidationParameterError</code>
 */
class PolicyValidationParameterError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Ignorable policy topics are not supported for the ad type.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS = 2;</code>
     */
    const UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS = 2;
    /**
     * Exempt policy violation keys are not supported for the ad type.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS = 3;</code>
     */
    const UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS = 3;
    /**
     * Cannot set ignorable policy topics and exempt policy violation keys in
     * the same policy violation parameter.
     *
     * Generated from protobuf enum <code>CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS = 4;</code>
     */
    const CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS => 'UNSUPPORTED_AD_TYPE_FOR_IGNORABLE_POLICY_TOPICS',
        self::UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS => 'UNSUPPORTED_AD_TYPE_FOR_EXEMPT_POLICY_VIOLATION_KEYS',
        self::CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS => 'CANNOT_SET_BOTH_IGNORABLE_POLICY_TOPICS_AND_EXEMPT_POLICY_VIOLATION_KEYS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PolicyValidationParameterError::class, \Google\Ads\GoogleAds\V12\Errors\PolicyValidationParameterErrorEnum_PolicyValidationParameterError::class);
