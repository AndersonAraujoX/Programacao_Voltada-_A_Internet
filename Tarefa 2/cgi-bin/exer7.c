#include <stdio.h>
#include <string.h>
#include <stdlib.h>
int main(int argc, char *argv[]) {
    int a, b; 
    /** Print the CGI response header, required for all HTML output. **/
    a=atoi(argv[1]);
    b=atoi(argv[2]);
    printf("%d",a+b) ;
    return 0;
}