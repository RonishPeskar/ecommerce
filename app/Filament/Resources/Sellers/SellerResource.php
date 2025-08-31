<?php

namespace App\Filament\Resources\Sellers;

use App\Filament\Resources\Sellers\Pages\CreateSeller;
use App\Filament\Resources\Sellers\Pages\EditSeller;
use App\Filament\Resources\Sellers\Pages\ListSellers;
use App\Filament\Resources\Sellers\Pages\ViewSeller;
use App\Filament\Resources\Sellers\Schemas\SellerForm;
use App\Filament\Resources\Sellers\Schemas\SellerInfolist;
use App\Filament\Resources\Sellers\Tables\SellersTable;
use App\Models\Seller;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SellerResource extends Resource
{
    protected static ?string $model = Seller::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return SellerForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return SellerInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SellersTable::configure($table);
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
            'index' => ListSellers::route('/'),
            'create' => CreateSeller::route('/create'),
            'view' => ViewSeller::route('/{record}'),
            'edit' => EditSeller::route('/{record}/edit'),
        ];
    }
}
