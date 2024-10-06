import java.util.Scanner;

public class Methods {

    // method to display program requirements
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram evaluates largest of three integers."
        + "\nNote: Program checks for integers and non-numeric values.\n");
    }

    // method to prompt the user for three numbers and determine the largest
    public static void findLargestOfThreeNumbers() {
        // initialize scanner
        Scanner scanner = new Scanner(System.in);

        // https://www.javadoc.io/doc/org.owasp.esapi/esapi/2.0.1/org/owasp/esapi/Validator.html#getValidInteger(java.lang.String,%20java.lang.String,%20int,%20int,%20boolean)
        int firstNumber = getValidInteger(scanner, "first");
        int secondNumber = getValidInteger(scanner, "second");
        int thirdNumber = getValidInteger(scanner, "third");

        // logic to determine which number is the largest
        int largest = firstNumber;

        if (secondNumber > largest) {
            largest = secondNumber;
        }
        if (thirdNumber > largest) {
            largest = thirdNumber;
        }

        System.out.println("Third number is largest.");
    }

    // method to validate user input
    private static int getValidInteger(Scanner scanner, String position) {

        // initialize variables
        int number = 0;
        boolean validInput = false;

        System.out.print("Please enter " + position + " number: ");
        while (!validInput) {
            if (scanner.hasNextInt()) {
                number = scanner.nextInt();
                validInput = true;
                System.out.println();
            } else {
                System.out.println("Not valid integer!\n");
                System.out.print("Please try again. Enter " + position + " number: ");
                scanner.next(); // clear invalid input
            }
        }
        return number;
    }
}
