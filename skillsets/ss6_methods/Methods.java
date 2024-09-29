import java.util.Scanner;

public class Methods {
    
    // method to display program requirements
    public static void getRequirements() {

        System.out.println("Author: Tanner Morlan"
        + "\nProgram prompts user for first name and age, then prints results."
        + "\nCreate four methods from the following requirements:"
        + "\n1) getRequirements(): Void method displays program requirements."
        + "\n2) getUserInput(): Void method prompts for user input,\n\tthen calls two methods: myVoidMethod() and myValueReturningMethod()."
        + "\n3) myVoidMethod():\n\ta. Accepts two arguments: String and int\n\tb. Prints user's first name and age."
        + "\n4) myValueReturningMethod():\n\ta. Accepts two arguments: String and int\n\tb. Returns String containing first name and age.");
    }

    // method to get user input and call other methods
    public static void getUserInput() {

        // initialize scanner
        Scanner scanner = new Scanner(System.in);

        // prompt user
        System.out.print("\nEnter first name: ");
        String firstName = scanner.nextLine();

        System.out.print("Enter age: ");
        int age = scanner.nextInt();

        // call the void method
        System.out.print("\nvoid method call: ");
        myVoidMethod(firstName, age);

        // call the value-returning method
        System.out.print("value-returning method call: ");
        String result = myValueReturningMethod(firstName, age);
        System.out.println(result);

        // close scanner
        scanner.close();
    }

    // void method that accepts two arguments and prints the user's first name and age
    public static void myVoidMethod(String firstName, int age) {
        System.out.println(firstName + " is " + age);
    }

    // value-returning method that accepts two arguments and returns a string containing the first name and age
    public static String myValueReturningMethod(String firstName, int age) {
        return firstName + " is " + age;
    }
}
