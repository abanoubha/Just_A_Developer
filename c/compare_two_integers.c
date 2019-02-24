#include <stdio.h>

int main() {
   int a, b;

   a = 11;
   b = 99;

   // to take values from user input uncomment the below lines −
   // printf("Enter value for A :");
   // scanf("%d", &a);
   // printf("Enter value for B :");
   // scanf("%d", &b);

   if(a > b)
      printf("a is greater than b");
   else
      printf("a is not greater than b");

   return 0;
}
