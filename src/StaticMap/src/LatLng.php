<?php

namespace Wavelog\StaticMapImage;


/**
 * Wavelog\StaticMapImage\LatLng define latitude and longitude for map, lines, markers...
 *
 * @package Wavelog\StaticMapImage
 * @author Franck Alary
 * @access public
 * @see https://github.com/DantSu/php-osm-static-api Github page of this project
 */
class LatLng
{
    /**
     * @var float Latitude
     */
    private $lat = 0.0;
    /**
     * @var float Longitude
     */
    private $lng = 0.0;


    /**
     * LatLng constructor.
     * @param float $lat Latitude
     * @param float $lng Longitude
     */
    public function __construct(float $lat, float $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    /**
     * Get latitude
     * @return float Latitude
     */
    public function getLat(): float
    {
        return $this->lat;
    }

    /**
     * Get longitude
     * @return float Longitude
     */
    public function getLng(): float
    {
        return $this->lng;
    }

    /**
     * Set latitude
     * @param float $lat Latitude
     * @return $this Fluent interface
     */
    public function setLat(float $lat): LatLng
    {
        $this->lat = $lat;
        return $this;
    }

    /**
     * Set longitude
     * @param float $lng Longitude
     * @return $this Fluent interface
     */
    public function setLng(float $lng): LatLng
    {
        $this->lng = $lng;
        return $this;
    }
}
