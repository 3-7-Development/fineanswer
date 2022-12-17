using System;
using CommunityToolkit.Mvvm.Input;
using fineanswerMobile.Models;
using fineanswerMobile.Views;

namespace fineanswerMobile.ViewModels
{
	public partial class CostsPageViewModel : ViewModelBase
	{
		List<Cost> costs;
		public List<Cost> Costs { get => costs; set => SetProperty(ref costs, value); }

		public CostsPageViewModel()
		{
			Title = "Twoje wydatki";
		}

		[RelayCommand]
		void Appearing()
		{
			Costs = new List<Cost>()
			{
				new Cost()
				{
					Title = "Czynsz mieszkanie",
					Value = 1500
				},
				new Cost()
				{
					Title = "Subskrypcje",
					Value = 200
				},
				new Cost()
				{
					Title = "Starbucks",
					Value = 230
				},
				new Cost()
				{
					Title = "Samochód - paliwo",
					Value = 400
				}
			};
		}

        [RelayCommand]
        async Task GoToMainPage()
        {
            await Shell.Current.GoToAsync($"//{nameof(MainPage)}");
        }

        [RelayCommand]
        async Task GoToEarningsPage()
        {
            await Shell.Current.GoToAsync($"//{nameof(EarningsPage)}");
        }
    }
}

