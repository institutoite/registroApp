<?php

namespace App\Enums;

enum EstadoCiudad: string
{
    case ACTIVO = 'activo';
    case INACTIVO = 'inactivo';
    case REVISION = 'revision';
    case SUSPENDIDO = 'suspendido';

    public function label(): string
    {
        return match($this) {
            self::ACTIVO => 'Activo',
            self::INACTIVO => 'Inactivo',
            self::REVISION => 'En revision',
            self::SUSPENDIDO => 'Suspendido',
        };
    }

    public function color(): string
    {
        return match($this) {
            self::ACTIVO => 'success',
            self::INACTIVO => 'danger',
            self::REVISION => 'warning',
            self::SUSPENDIDO => 'gray',
        };
    }
}