// Program Does no Data Validation - Bad!
import java.util.Scanner;

public class Methods {

    // method for header
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram evaluates integers as even or odd."
        + "\nNote: Program does *not* check for non-numeric characters.");
    }

    // method to check if even number
    public static void checkIfEven() {

        // initialize variables
        int userNum = 0;

        // create scanner
        Scanner input = new Scanner(System.in);

        // prompt user for integer
        System.out.print("Enter an integer: ");
        userNum = input.nextInt();

        // check if even
        if (userNum % 2 == 0) {
            System.out.println(userNum + " is an even number.");
        } else {
            System.out.println(userNum + " is an odd number.");
        }

        // close scanner
        input.close();
    }
}
