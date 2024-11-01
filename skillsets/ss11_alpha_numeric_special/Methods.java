import java.util.Scanner;

public class Methods {

    // nonvalue-returning method (static requires no object)
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram determines whether user-entered value is alpha, numeric, or special character.\n"
        + "\nReferences:"
        + "\nASCII Background: https://en.wikipedia.org/wiki/ASCII"
        + "\nASCII Character Table: https://www.ascii-code.com/"
        + "\nLookup Tables: https://www.lookuptables.com/\n");
    }

    public static void determineChar() {
        Scanner sc = new Scanner(System.in);

        System.out.print("Enter character: ");
        char ch = sc.next().charAt(0); // capture first character from first token

        // test for alpha characters
        if((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z')) {
            System.out.println(ch + " is alpha. ASCII value: " + (int)ch); // cast char to int
        } 
        // test for numeric characters
        else if (ch >= '0' && ch <= '9') {
            System.out.println(ch + " is numeric. ASCII value: " + (int)ch);
        }
        // otherwise, must be a special character
        else {
            System.out.println(ch + " is a special character. ASCII value: " + (int)ch);
        }
    }
}