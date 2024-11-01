import java.util.Scanner;

public class Methods {

    // nonvalue-returning method (static requires no object)
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nTemperature Conversion Program\n"
        + "\nProgram converts user-entered temperatures into Fahrenheit or Celsius scales."
        + "\nProgram continues to prompt for user entry until no longer requested."
        + "\nNote: upper or lower case letters permitted. Though, incorrect entries are not permitted."
        + "\nNote: Program does not validate numeric data (optional requirement).\n");
    }

    public static void convertTemp() {
        Scanner sc = new Scanner(System.in);
        double temperature = 0.0;
        char choice = ' '; // initialize to space character
        char type = ' ';

        // Note: do...while will *always* execute at least *once*!
        do
        {
            System.out.print("Fahrenheit or Celsius? Type \"f\", or Celsius to Fahrenheit? Type \"c\": ");
            type = sc.next().charAt(0);
            type = Character.toLowerCase(type);

            if (type == 'f') {
                System.out.print("Enter temperature in Fahrenheit: ");
                temperature = sc.nextDouble();
                temperature = ((temperature - 32) * 5) / 9;
                System.out.println("Temperature in Celsius = " + temperature);
            }
            else if (type == 'c') {
                System.out.print("Enter temperature in Celsius: ");
                temperature = sc.nextDouble();
                temperature = (temperature * 9 / 5) + 32;
                System.out.println("Temperature in Fahrenheit = " + temperature);
            }
            else {
                System.out.println("Incorrect entry. Please try again.");
            }

            System.out.print("\nDo you want to convert a temperature (y or n)? ");
            choice = sc.next().charAt(0);
            choice = Character.toLowerCase(choice);
            System.out.println();
        }
        while (choice == 'y');

        System.out.println("\nThank you for using our Temperature Conversion Program!");
    }
}