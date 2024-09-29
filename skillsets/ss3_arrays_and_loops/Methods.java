// Program Does no Data Validation - Bad!
// import java.util.scanner
// scanner not used; commented out
import java.util.Scanner;

public class Methods {

    // method for header
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram loops through array of strings."
        + "\nUse following values: dog, cat, bird, fish, insect."
        + "\nUse following loop structures: for, enhanced for, while, do...while."
        + "\nNote: Pretest loops: for, enhanced for, while. Posttest loop: do...while.\n");
    }

    // method for looping through strings
    public static void loopThroughStrings() {
        // initialize varbiales and arrays
        String[] animals = {"dog", "cat", "bird", "fish", "insect"};

        // create scanner
        Scanner input = new Scanner(System.in);

        // for loop
        System.out.println("For loop:");
        for (int i = 0; i < animals.length; i++) {
            System.out.println(animals[i]);
        }

        // enhanced for loop
        System.out.println("\nEnhanced for loop:");
        for (String animal : animals) {
            System.out.println(animal);
        }

        // while loop
        System.out.println("\nWhile loop:");
        int i = 0;
        while (i < animals.length) {
            System.out.println(animals[i]);
            i++;
        }

        // do...while loop
        System.out.println("\nDo...while loop:");
        int j = 0;
        do {
            System.out.println(animals[j]);
            j++;
        } while (j < animals.length);
    }
}
