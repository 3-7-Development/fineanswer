using System;
using CommunityToolkit.Mvvm.Input;
using fineanswerMobile.Models;
using fineanswerMobile.Views;

namespace fineanswerMobile.ViewModels
{
	public partial class EarningsPageViewModel : ViewModelBase
	{
		List<Earning> earnings;
		public List<Earning> Earnings { get => earnings; set => SetProperty(ref earnings, value); }

		public EarningsPageViewModel()
		{
			Title = "Twoje przychody";
		}

		[RelayCommand]
		void Appearing()
		{
			Earnings = new List<Earning>()
			{
				new Earning()
				{
					Title = "Pensja",
					Value = 3700
				},
				new Earning()
				{
					Title = "500+",
					Value = 500
				},
				new Earning()
				{
					Title = "Praca dorywcza",
					Value = 700
				},
				new Earning()
				{
					Title = "Hobby",
					Value = 100
				}
			};
		}

        [RelayCommand]
        async Task GoToMainPage()
        {
            await Shell.Current.GoToAsync($"//{nameof(MainPage)}");
        }

        [RelayCommand]
        async Task GoToCostsPage()
        {
            await Shell.Current.GoToAsync($"//{nameof(CostsPage)}");
        }
    }
}

