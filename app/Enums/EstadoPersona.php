<?php

namespace App\Enums;

enum EstadoPersona: string
{
    case IMPAGA = 'impaga';
    case PAGADA = 'pagada';
    case PENDIENTE = 'pendiente';
    case ANULADA = 'anulada';
    case MOROSA = 'morosa';

    public function label(): string
    {
        return match($this) {
            self::IMPAGA => 'Impaga',
            self::PAGADA => 'Pagada',
            self::PENDIENTE => 'Pendiente',
            self::ANULADA => 'Anulada',
            self::MOROSA => 'Morosa',
        };
    }

    public function color(): string
    {
        return match($this) {
            self::IMPAGA => 'danger',
            self::PAGADA => 'success',
            self::PENDIENTE => 'warning',
            self::ANULADA => 'gray',
            self::MOROSA => 'orange',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($case) => [$case->value => $case->label()])
            ->toArray();
    }
}