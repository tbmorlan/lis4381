import java.util.Random;
import java.util.Scanner;

public class Methods {

    // method for header
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nPrint minimum and maximum integer values."
        + "\nProgram prompts user to enter desired number of pseudorandom-generated integers (min 1)."
        + "\nUse following loop structures: for, enhanced for, while, do...while."
        + "\n\nInteger.MIN_VALUE = " + Integer.MIN_VALUE
        + "\nInteger.MAX_VALUE = " + Integer.MAX_VALUE);
    }

    // method for user input and output
    public static void inputOutput() {

        // initialize scanner
        Scanner scanner = new Scanner(System.in);

        // initialize random 
        Random random = new Random();

        // prompt user
        System.out.print("Enter desired number of pseudorandom-generated integers (min 1):");
        int n = scanner.nextInt();
        if (n < 1) {
            System.out.println("The number must be at least 1.");
            return;
        }

        // generate numbers 
        System.out.println("\nfor loop:");
        generateUsingForLoop(random, n);

        System.out.println("\nEnhanced for loop:");
        generateUsingEnhancedForLoop(random, n);

        System.out.println("\nwhile loop:");
        generateUsingWhileLoop(random, n);

        System.out.println("\ndo...while loop:");
        generateUsingDoWhileLoop(random, n);

        //close scanner
        scanner.close();
    }

    // method for generating random numbers using a for loop
    public static void generateUsingForLoop(Random random, int n) {

        for (int i = 0; i < n; i++) {
            System.out.println(random.nextInt());
        }
    }

    // method for generating random numbers using an enhanced for loop
    public static void generateUsingEnhancedForLoop(Random random, int n) {

        int[] numbers = new int[n];
        for (int i = 0; i < n; i++) {
            numbers[i] = random.nextInt();
        }
        for (int number : numbers) {
            System.out.println(number);
        }
    }

    // method for generating random numbers using a while loop
    public static void generateUsingWhileLoop(Random random, int n) {

        int i = 0;
        while (i < n) {
            System.out.println(random.nextInt());
            i++;
        }
    }

    // method for generating random numbers using a do...while loop
    public static void generateUsingDoWhileLoop(Random random, int n) {

        int i = 0;
        do {
            System.out.println(random.nextInt());
            i++;
        } while (i < n);
    }

}
