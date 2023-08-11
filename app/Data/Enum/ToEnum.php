<?php

namespace App\Data\Enum;

enum ToEnum: string
{
    case oil_filter                                = 'Фільтр масляний';
    case air_filter                                = 'Фільтр повітряний';
    case fuel_filter                               = 'Фільтр паливний';
    case salon_filter                              = 'Фільтр салонний';
    case transmission_filter_power_steering_filter = 'Фільтр трансмісійний, фільтр ГУР';
    case spark_plugs                               = 'Свічки запалювання';
    case the_belt_is_polyclinic                    = 'Ремінь поліклиновий';
    case thermostat                                = 'Термостат';
    case drain_plug                                = 'Пробка зливного отвору';
    case wiper_blades                              = 'Щітки склоочисника';
    case cooling_system_pump                       = 'Насос системи охолодження';
    case brake_pads                                = 'Колодки гальмівні';

    public static function fromName(string $name): string
    {
        foreach (self::cases() as $status) {
            if( $name === $status->name ){
                return $status->value;
            }
        }
        throw new \ValueError("$name is not a valid backing value for enum " . self::class );
    }
}
