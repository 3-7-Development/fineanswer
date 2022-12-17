using fineanswerMobile.Views;
using fineanswerMobile.ViewModels;
using Microsoft.Extensions.Logging;
using CommunityToolkit.Maui;

namespace fineanswerMobile;
public static class MauiProgram
{
    public static MauiApp CreateMauiApp()
    {
        var builder = MauiApp.CreateBuilder();
        builder.UseMauiApp<App>().UseMauiCommunityToolkit().ConfigureFonts(fonts =>
        {
            fonts.AddFont("OpenSans-Regular.ttf", "OpenSansRegular");
            fonts.AddFont("OpenSans-Semibold.ttf", "OpenSansSemibold");

            fonts.AddFont("fa-brands-400.ttf", "FAB");
            fonts.AddFont("fa-regular-400.ttf", "FAR");
            fonts.AddFont("fa-solid-900.ttf", "FAS");
        }).UseMauiCommunityToolkit();
        builder.Services.AddSingleton<MainPage>();
        builder.Services.AddSingleton<EarningsPage>();
        builder.Services.AddSingleton<CostsPage>();
        builder.Services.AddSingleton<MainPageViewModel>();
        builder.Services.AddSingleton<EarningsPageViewModel>();
        builder.Services.AddSingleton<CostsPageViewModel>();
#if DEBUG
        builder.Logging.AddDebug();
#endif
        return builder.Build();
    }
}