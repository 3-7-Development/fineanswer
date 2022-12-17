using System;
using fineanswerMobile.Views;
using CommunityToolkit.Mvvm.Input;

namespace fineanswerMobile.ViewModels
{
	public partial class MainPageViewModel : ViewModelBase
	{
		string diagram;
		public string Diagram { get => diagram; set => SetProperty(ref diagram, value); }

        string image2;
        public string Image2 { get => image2; set => SetProperty(ref image2, value); }

        string image3;
        public string Image3 { get => image3; set => SetProperty(ref image3, value); }

        public MainPageViewModel()
		{
			Title = "Zestawienie finansowe";
            Diagram = "diagram6.png";
        }

		[RelayCommand]
		void Appearing()
		{
			//var rng = new Random();
			//var index = rng.Next(1, 5);
			//Image = $"diagram{index}.png";
			
   //         Image2 = "diagram4.png";
			//Image3 = "diagram5.png";
        }

		[RelayCommand]
		async Task GoToCostsPage()
		{
			await Shell.Current.GoToAsync($"{nameof(CostsPage)}");
		}

		[RelayCommand]
		async Task GoToEarningsPage()
		{
			await Shell.Current.GoToAsync($"{nameof(EarningsPage)}");
		}
	}
}

