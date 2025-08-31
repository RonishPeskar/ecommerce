<?php

namespace App\Filament\Seller\Resources\Products\Schemas;

use Dom\Text;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Product Details')
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('description')
                            ->required(),
                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('Rs'),
                        TextInput::make('discount')
                            ->suffix('%')
                            ->required()
                            ->numeric()
                            ->default(0),
                        FileUpload::make('image')
                            ->required()
                            ->image()
                            ->disk('public')
                            ->multiple(),
                        // Select::make('seller_id')
                        //     ->relationship('seller', 'name')
                        //     ->default(Auth::user()->id)
                        //     ->disabled()
                        //     ->required(),
                        Repeater::make('Product Information')
                            ->relationship('product_infos')
                            ->columnSpanFull()
                            ->schema([
                                TextInput::make('title')
                                    ->required(),
                                RichEditor::make('description')
                                    ->required(),
                            ])
                    ])
            ]);
    }
}
