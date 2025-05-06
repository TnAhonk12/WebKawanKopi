<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.admin.pages.dashboard';
    protected static ?string $slug = 'dashboard';
    protected static ?string $title = 'Dashboard';
    protected static ?int $navigationSort = -1; // taruh paling atas
}
