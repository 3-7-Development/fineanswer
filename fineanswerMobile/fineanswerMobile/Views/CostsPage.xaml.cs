using fineanswerMobile.ViewModels;

namespace fineanswerMobile.Views;

public partial class CostsPage : ContentPage
{
	public CostsPage(CostsPageViewModel vm)
	{
		InitializeComponent();
		BindingContext = vm;
	}
}
