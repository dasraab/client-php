<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;

/**
 *The settings for the Role
 */
class RoleSettings implements JsonSerializable
{
    /**
     * The default visibility level of the Deals for the Role
     * @maps deal_default_visibility
     * @var double|null $dealDefaultVisibility public property
     */
    public $dealDefaultVisibility;

    /**
     * The default visibility level of the Organizations for the Role
     * @maps org_default_visibility
     * @var double|null $orgDefaultVisibility public property
     */
    public $orgDefaultVisibility;

    /**
     * The default visibility level of the People for the Role
     * @maps person_default_visibility
     * @var double|null $personDefaultVisibility public property
     */
    public $personDefaultVisibility;

    /**
     * The default visibility level of the Products for the Role
     * @maps product_default_visibility
     * @var double|null $productDefaultVisibility public property
     */
    public $productDefaultVisibility;

    /**
     * The access level of the Deals for the Role (only for default Role)
     * @maps deal_access_level
     * @var double|null $dealAccessLevel public property
     */
    public $dealAccessLevel;

    /**
     * The access level of the Organizations for the Role (only for default Role)
     * @maps org_access_level
     * @var double|null $orgAccessLevel public property
     */
    public $orgAccessLevel;

    /**
     * The access level of the People for the Role (only for default Role)
     * @maps person_access_level
     * @var double|null $personAccessLevel public property
     */
    public $personAccessLevel;

    /**
     * The access level of the Products for the Role (only for default Role)
     * @maps product_access_level
     * @var double|null $productAccessLevel public property
     */
    public $productAccessLevel;

    /**
     * Constructor to set initial or default values of member properties
     * @param double $dealDefaultVisibility    Initialization value for $this->dealDefaultVisibility
     * @param double $orgDefaultVisibility     Initialization value for $this->orgDefaultVisibility
     * @param double $personDefaultVisibility  Initialization value for $this->personDefaultVisibility
     * @param double $productDefaultVisibility Initialization value for $this->productDefaultVisibility
     * @param double $dealAccessLevel          Initialization value for $this->dealAccessLevel
     * @param double $orgAccessLevel           Initialization value for $this->orgAccessLevel
     * @param double $personAccessLevel        Initialization value for $this->personAccessLevel
     * @param double $productAccessLevel       Initialization value for $this->productAccessLevel
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->dealDefaultVisibility    = func_get_arg(0);
            $this->orgDefaultVisibility     = func_get_arg(1);
            $this->personDefaultVisibility  = func_get_arg(2);
            $this->productDefaultVisibility = func_get_arg(3);
            $this->dealAccessLevel          = func_get_arg(4);
            $this->orgAccessLevel           = func_get_arg(5);
            $this->personAccessLevel        = func_get_arg(6);
            $this->productAccessLevel       = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['deal_default_visibility']    = $this->dealDefaultVisibility;
        $json['org_default_visibility']     = $this->orgDefaultVisibility;
        $json['person_default_visibility']  = $this->personDefaultVisibility;
        $json['product_default_visibility'] = $this->productDefaultVisibility;
        $json['deal_access_level']          = $this->dealAccessLevel;
        $json['org_access_level']           = $this->orgAccessLevel;
        $json['person_access_level']        = $this->personAccessLevel;
        $json['product_access_level']       = $this->productAccessLevel;

        return $json;
    }
}