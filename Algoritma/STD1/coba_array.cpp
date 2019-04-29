#include <iostream>
using namespace std;
int main()
{
	int a [5][2], b[5][2], c[5][2];
	cout<<"Masukan Nilai Array ke-1:"<<endl;
	for (int i = 0; i < 5; i++)
	{
		for (int x = 0; x < 2; x++)
		{
			cin>>a[i][x];
		}
	}
	
	cout<<"Masukan Nilai Array ke-2:"<<endl;
	for (int i = 0; i < 5; i++)
	{
		for (int x = 0; x < 2; x++)
		{
			cin>>b[i][x];
		}
	}

	//hitungan
	for (int i = 0; i < 5; i++)
	{
		for (int x = 0; x < 2; x++) 
		{
			c[i][x] = a[i][x] + b[i][x];
		}
	}
	
	//keluaran	
	cout<<"Keluaraan:"<<endl;
	for (int i = 0; i < 5; i++)
	{
		for (int x = 0 ; x < 2; x++)
		{
			cout<<c[i][x]<<"|";
		}
	cout<<"\n";
	}
	return 0;
}
