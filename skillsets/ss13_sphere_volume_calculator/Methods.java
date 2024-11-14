import java.util.Scanner;

public class Methods {
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram calculates sphere volume in liquid U.S. gallons from user-entered diameter value in inches,"
        + "\nand rounds to two decimal places."
        + "\nMust use Java's *built-in* PI and pow() capabilities."
        + "\nProgram checks for non-integers and non-numeric values."
        + "\nProgram continues to prompt for user entry until no longer requested, prompt accpets upper of lower case letters.\n");
    }

    public static void getSphereVolume() {

        // initialize variables and create Scanner object
        int diameter = 0;
        double volume = 0.0;
        double gallons = 0.0;
        char choice = ' '; //initialize to space character
        Scanner sc = new Scanner(System.in);
      
        //Note: do...while will always execute at least once!
        do {
          System.out.print("Please enter diameter in inches: ");
      
          while (!sc.hasNextInt()) {
            System.out.println("Not valid integer!\n");
            sc.next(); //Important! If omitted, will go into infinite loop on invalid input!
            System.out.print("Please try again. Enter diameter in inches: ");
          }
          diameter = sc.nextInt();

          System.out.println(); // print blank line
      
          //Note: *must use floating point values, otherwise, integer division (i.e., incorrect result)!
          volume = ((4.0/3.0) * Math.PI * Math.pow(diameter/2.0, 3)); //returns cubic inches
          gallons = volume/231; //convert cubic inches into gallons
          System.out.println("Sphere volume: " + String.format("%,.2f", gallons) + " liquid U.S. gallons");
      
          System.out.print("\nDo you want to calculate another sphere volume (y or n)? ");
          choice = sc.next().charAt(0);
          choice = Character.toLowerCase(choice);
        } while (choice == 'y');
      
        System.out.println("\nThank you for using our Sphere Volume Calculator!");  
    }
}
