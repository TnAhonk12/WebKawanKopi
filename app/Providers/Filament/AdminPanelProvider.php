<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use App\Models\Category;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use App\Filament\Pages\Auth\LoginUser;
use App\Filament\Admin\Pages\Dashboard;
use Filament\Navigation\NavigationItem;
use App\Filament\Resources\MenuResource;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationGroup;
use App\Filament\Resources\PromoResource;
use App\Filament\Resources\BeritaResource;
use App\Filament\Resources\CeritaResource;
use App\Filament\Resources\FindUsResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Navigation\NavigationBuilder;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\RoasteryResource;
use App\Filament\Resources\MerchandiseResource;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use App\Filament\Resources\RoasteryCategoryResource;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->brandLogo(fn () => asset('storage/Kawan.png'))
            ->brandName('Kawan Kopi')
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(LoginUser::class)
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->navigation(function (NavigationBuilder $builder) {
                return $builder
                ->items([
                    NavigationItem::make('Dashboard')
                    ->url(fn () => route('filament.admin.pages.dashboard'))
                    ->icon('heroicon-o-home')
                    ->sort(-1), // opsional: bikin paling atas
                ])
                ->groups([
                    NavigationGroup::make('Lini Produk')->items([
                        NavigationItem::make('Promo')
                            ->url(PromoResource::getUrl('index'))
                            ->icon(PromoResource::getNavigationIcon()),
        
                        NavigationItem::make('Menu')
                            ->url(MenuResource::getUrl('index'))
                            ->icon(MenuResource::getNavigationIcon()),
        
                        NavigationItem::make('Kategori Menu')
                            ->url(CategoryResource::getUrl('index'))
                            ->icon('heroicon-o-rectangle-group'),
                    ]),
        
                    NavigationGroup::make('Konten Website')->items([
                        NavigationItem::make('Berita')
                            ->url(BeritaResource::getUrl('index'))
                            ->icon(BeritaResource::getNavigationIcon()),
        
                        NavigationItem::make('Cerita')
                            ->url(CeritaResource::getUrl('index'))
                            ->icon(CeritaResource::getNavigationIcon()),
                    ]),
        
                    NavigationGroup::make('Roastery & Merchandise')->items([
                        NavigationItem::make('Roastery')
                            ->url(RoasteryResource::getUrl('index'))
                            ->icon(RoasteryResource::getNavigationIcon()),

                        NavigationItem::make('Kategori Roastery')
                            ->url(RoasteryCategoryResource::getUrl('index'))
                            ->icon('heroicon-o-rectangle-group'),

                        NavigationItem::make('Merchandise')
                            ->url(MerchandiseResource::getUrl('index'))
                            ->icon(MerchandiseResource::getNavigationIcon()),
                    ]),
        
                    NavigationGroup::make('Find Us & User')->items([
                        NavigationItem::make('Find Us')
                            ->url(FindUsResource::getUrl('index'))
                            ->icon(FindUsResource::getNavigationIcon()),
        
                        NavigationItem::make('User')
                            ->url(UserResource::getUrl('index'))
                            ->icon(UserResource::getNavigationIcon()),
                    ]),
                ]);
            })
            ->homeUrl(fn () => route('filament.admin.pages.dashboard'))
            // ->plugins([
            //     FilamentShieldPlugin::make(),
            // ])
            ->authMiddleware([
                Authenticate::class,
            ]);            
    }
}
