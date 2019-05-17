#include<iostream>
#include<string>
#include<sstream>
using namespace std;

	struct Handphone
	{
		string Handphone1;
		int harga;
	}Hp1[3];

void printHp(Handphone Hp);

int main ()
{
     string elektronik;
     int x;
             for(x=0; x<3;x++)
             {
             cout<<"Masukkan Nama Handphone : ";
             getline(cin,Hp1[x].Handphone1);
             cout<<"Masukkan Harga : Rp.";
             
             getline(cin,elektronik);
             stringstream(elektronik)>>Hp1[x].harga;                    }
             
       cout<<"\nHandPhone yang Telah Diinput :\n";
       for(x=0;x<3;x++)
       printHp(Hp1[x]);   
     
return 0;

}

void printHp(Handphone Hp)
{
	cout<<Hp.Handphone1<<"\t";
	cout<<"\tRp. "<<Hp.harga<<",-\n";
}
