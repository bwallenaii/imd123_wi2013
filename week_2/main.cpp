#include <iostream>
using namespace std;

int main()
{
	float a;
	float b;
	float c;

	cout << "Please provide two numbers" << endl;
	cin >> a;
	cin >> b;
	c = a;
	a = b;
	b = c;
	cout << "a is now " << a << " b is now " << b << endl;

	return 0;
}
