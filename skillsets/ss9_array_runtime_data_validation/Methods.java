import java.util.Scanner;

public class Methods {

    // initialize scanner as instance variable
    private Scanner scanner;

    // method to display program requirements
    public static void getRequirements() {
        System.out.println("Author: Tanner Morlan"
        + "\n1) Program creates array size at run-time."
        + "\n2) Program displays array size."
        + "\n3) Program rounds sum and average of numbers to two decimal places."
        + "\n4) Numbers *must* be float data type, not double.\n");
    }

    // constructor
    public Methods() {

        // initialize scanner
        this.scanner = new Scanner(System.in);
    }

    // method to get a valid integer from the user
    private int getValidInteger(String prompt) {

        // initialize variable
        int number;

        while (true) {
            System.out.print(prompt);
            if (scanner.hasNextInt()) {
                number = scanner.nextInt();
                break;
            } else {
                System.out.println("Not valid integer!\n");
                System.out.print("Please try again. ");
                scanner.next();
            }
        }
        return number;
    }

    // method to get a valid float from the user
    private float getValidFloat(String prompt) {

        // initialize varaible
        float number;

        while (true) {
            System.out.print(prompt);
            if (scanner.hasNextFloat()) {
                number = scanner.nextFloat();
                break;
            } else {
                System.out.println("Not valid number!\n");
                System.out.print("Please try again. ");
                scanner.next();
            }
        }
        return number;
    }

    // method to handle the entire process
    public void processNumbers() {

        // https://www.javadoc.io/doc/org.owasp.esapi/esapi/2.0.1/org/owasp/esapi/Validator.html#getValidInteger(java.lang.String,%20java.lang.String,%20int,%20int,%20boolean)
        int arraySize = getValidInteger("Please enter array size: ");
        System.out.println();
        
        // create the array and get the numbers from the user
        float[] numbers = new float[arraySize];
        System.out.println("Please enter 3 numbers.");
        for (int i = 0; i < arraySize; i++) {
            numbers[i] = getValidFloat("Enter num " + (i + 1) + ": ");
        }

        // calculate sum and average
        float sum = calculateSum(numbers);
        float average = calculateAverage(sum, arraySize);

        // display the results
        System.out.print("\nNumbers entered: ");
        for (float num : numbers) {
            System.out.print(formatNumberOne(num) + " ");
        }
        System.out.println("\nSum: " + formatNumberTwo(sum));
        System.out.println("Average: " + formatNumberTwo(average));
    }

    // method to calculate the sum of an array of floats
    private float calculateSum(float[] numbers) {

        float sum = 0;
        for (float num : numbers) {
            sum += num;
        }
        return sum;
    }

    // method to calculate the average of an array of floats
    private float calculateAverage(float sum, int size) {

        return sum / size;
    }

    // method to format a float to one decimal places
    private String formatNumberOne(float number) {

        return String.format("%.1f", number);
    }

    // method to format a float to two decimal places
    private String formatNumberTwo(float number) {

        return String.format("%.2f", number);
    }
}
