<?php

namespace App\Filament\Resources\SuratMasuks\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SuratMasukForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kategori_id')
                    ->relationship('kategori', 'nama_kategori')
                    ->required(),
                TextInput::make('judul')
                    ->required(),
                TextInput::make('nomor_surat')
                    ->required(),
                DatePicker::make('tanggal_surat')
                    ->required(),
                TextInput::make('asal_surat')
                    ->required(),
                Textarea::make('perihal')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('file_surat')
                    ->label('Upload PDF')
                    ->disk('public')
                    ->directory('pdf')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(5120) // 5 MB
                    ->required(),
                Textarea::make('keterangan')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
