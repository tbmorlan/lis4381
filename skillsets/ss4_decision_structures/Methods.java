import java.util.Scanner;

public class Methods {

    // method for header
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram evaluates user-entered characters."
        + "\nUse following characters: W or w, C or c, H or h, N or n."
        + "\nUse following decision structures: if... else, and switch."
        + "\n\nPhone types: W or w (work), C or c (cell), H or h (home), N or n (none).");
    }

    // method for user input and output
    public static void inputOutput() {

        // initialize scanner
        Scanner scanner = new Scanner(System.in);

        //get user input
        System.out.print("Enter phone type: ");
        char input = scanner.next().charAt(0);

        // using if...else decision structure
        System.out.println("\nif...else:");
        evalIfElse(input);

        // using switch structure
        System.out.println("\nswitch:");
        evalSwitch(input);

    }   

    // method to evaluate if...else structure
    public static void evalIfElse(char input) {

        if (input == 'W' || input == 'w') {
            System.out.println("Phone type: work");
        } else if (input == 'C' || input == 'c') {
            System.out.println("Phone type: cell");
        } else if (input == 'H' || input == 'h') {
            System.out.println("Phone type: home");
        } else if (input == 'N' || input == 'n') {
            System.out.println("Phone type: none");
        } else {
            System.out.println("Incorrect character entry.");
        }
    }

    // method to evaluate switch structure
    public static void evalSwitch(char input) {

        switch (input) {
            case 'W':
            case 'w':
                System.out.println("Phone type: work");
                break;
            case 'C':
            case 'c':
                System.out.println("Phone type: cell");
                break;
            case 'H':
            case 'h':
                System.out.println("Phone type: home");
                break;
            case 'N':
            case 'n':
                System.out.println("Phone type: none");
                break;
            default:
                System.out.println("Incorrect character entry.");
                break;
        }
    }
}
