public class Main {
    public static void main(String[] args) {

        // create methods instance for non-static methods
        Methods methods = new Methods();

        Methods.getRequirements();

        // call method using instance
        methods.processNumbers();
    }
}
