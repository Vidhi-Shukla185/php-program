#include <stdio.h>

int main() {
    int i;

    // Using for loop
    printf("Using for loop:\n");
    for(i = 1; i <= 20; i++) {
        printf("%d ", i);
    }

    printf("\n\nUsing while loop:\n");
    // Using while loop
    i = 1;
    while(i <= 20) {
        printf("%d ", i);
        i++;
    }

    printf("\n\nUsing do-while loop:\n");
    // Using do-while loop
    i = 1;
    do {
        printf("%d ", i);
        i++;
    } while(i <= 20);

    return 0;
}