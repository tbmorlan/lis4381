// Program Does no Data Validation - Bad!
import java.util.Scanner;

public class Methods {

  // method for header
  public static void getRequirements() {
    System.out.println("Author: Tanner Morlan"
        + "\nProgram evaluates largest of two integers."
        + "\nNote: Program does *not* check for non-numeric characters or non-integer values.");
  }

  // method for integer evaluation
  public static void integerEvaluation() {
    // initialize varbiales
    int num1 = 0;
    int num2 = 0;

    // create scanner
    Scanner input = new Scanner(System.in);

    // prompt user for integer input
    System.out.print("Enter first integer: ");
    num1 = input.nextInt();
    System.out.print("Enter second integer: ");
    num2 = input.nextInt();

    // evaluate integers
    if (num1 > num2) {
      System.out.println("\n" + num1 + " is larger than " + num2);
    } else if (num2 > num1) {
      System.out.println("\n" + num2 + " is larger than " + num1);
    } else {
      System.out.println("\nIntegers are equal.");
    }

    // close scanner
    input.close();
  }
}
