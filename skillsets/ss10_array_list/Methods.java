import java.util.Scanner;
import java.util.ArrayList; // need for ArrayList

public class Methods {

    // nonvalue-returning method (static requires no object)
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\nProgram populates ArrayList of strings with user-entered animal type values."
        + "\nExamples: Polar bear, Guinea pig, dog, cat, bird."
        + "\nProgram continues to collect user-entered values until user types \"n\"."
        + "\nProgram displays ArrayList values after each iteration, as well as size.\n");
    }

    public static void createArrayList() {
        // create program variables/objects
        // create Scanner object
        Scanner sc = new Scanner(System.in);
        ArrayList<String> obj = new ArrayList<String>(); // create String type ArrayList
        String myStr = "";
        String choice = "y";
        int num = 0;

        while (choice.equals("y")) {
            System.out.print("Enter animal type: ");
            myStr = sc.nextLine();
            obj.add(myStr); // add string object
            num = obj.size(); // returns ArrayList size

            System.out.println("ArrayList elements:" + obj + "\nArrayList Size = " + num);
            System.out.print("\nContinue? Enter y or n: "); // Note: could type *any* character other than y
            choice = sc.next().toLowerCase(); // permits y or Y
            sc.nextLine();
        }
    }
}
