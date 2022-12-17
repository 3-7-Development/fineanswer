using fineanswerMobile.Views;

namespace fineanswerMobile;

public partial class AppShell : Shell
{
	public AppShell()
	{
		InitializeComponent();

		Routing.RegisterRoute(nameof(MainPage), typeof(MainPage));
        Routing.RegisterRoute(nameof(EarningsPage), typeof(EarningsPage));
        Routing.RegisterRoute(nameof(CostsPage), typeof(CostsPage));
    }
}

