<?php

namespace App\Filament\Resources;

use App\Enums\EstadoPersona;
use App\Filament\Resources\PersonaResource\Pages;
use App\Filament\Resources\PersonaResource\RelationManagers;
use App\Models\Persona;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;

class PersonaResource extends Resource
{
    protected static ?string $model = Persona::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombrs')
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('apellidos')
                    ->required()
                    ->maxLength(20),
                Forms\Components\DatePicker::make('fnacimiento')
                    ->required()
                    ->maxDate(now()) // No puede ser fecha futura
                    ->displayFormat('d/m/Y')
                    ->native(false)
                    ->closeOnDateSelection(),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(8)
                    ->numeric() // Asegura que solo sean números
                    ->regex('/^[0-9]{8}$/'), // Expresión regular para 8 dígitos
                Forms\Components\Select::make('taller_id')
                    ->label('Taller')
                    ->required()
                    ->relationship('taller', 'taller') // Suponiendo que el modelo de persona tenga la relación 'taller'
                    ->searchable() // Para buscar en la lista
                    ->preload(), // Cargar datos antes para mejor rendimiento
                Forms\Components\Select::make('ciudad_id')
                    ->label('Ciudad')
                    ->required()
                    ->relationship('ciudad', 'ciudad') // Suponiendo que el modelo de persona tenga la relación 'taller'
                    ->searchable() // Para buscar en la lista
                    ->preload(), // Cargar datos antes para mejor rendimiento
                Select::make('estado')
                    ->required()
                    ->options(EstadoPersona::options())
                    ->default(EstadoPersona::IMPAGA->value)
                    ->native(false)
                    ->searchable()
                    ->label('Estado de pago'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombrs')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellidos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fnacimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('taller_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPersonas::route('/'),
            'create' => Pages\CreatePersona::route('/create'),
            'edit' => Pages\EditPersona::route('/{record}/edit'),
        ];
    }
}
