using fineanswerMobile.ViewModels;

namespace fineanswerMobile.Views;

public partial class EarningsPage : ContentPage
{
	public EarningsPage(EarningsPageViewModel vm)
	{
		InitializeComponent();
		BindingContext = vm;
	}
}
