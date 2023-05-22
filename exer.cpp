#include <iostream>
#include<iomanip>
using namespace std;
float findPerimeter(float width, float length);
float findCost(float perimeter, float costpUni);
int main()
{
	float length, width, perimeter,cost,costpUni;
	cout << "Enter the length :";
	cin >> length;
	cout << "Enter the width :";
	cin >> width;
	perimeter = findPerimeter(width, length);
	cout << "Perimeter is :" << setiosflags(ios::fixed)<<setprecision(2)<<perimeter << endl;
	cout<<"cost per unit :";
  	cin>>costpUni;
	cost = findCost(perimeter, costpUni);
	cout << "cost  : " << setiosflags(ios::fixed) << setprecision(2) << cost << endl;
	
	return 0;
}
float findPerimeter(float width, float length)
{
	return 2 * width + 2 * length;
}
float findCost(float perimeter, float costpUni)
{
  float cost ;
  cost=perimeter * costpUni;
  return cost;
}
