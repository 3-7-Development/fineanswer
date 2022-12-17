using fineanswerMobile.ViewModels;

namespace fineanswerMobile.Views;

public partial class MainPage : ContentPage
{
	public MainPage(MainPageViewModel vm)
	{
		InitializeComponent();
		BindingContext = vm;
	}
}
