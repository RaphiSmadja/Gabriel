import java.util.Scanner;

public class Pgcd {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Choisir nb A"); // a = 36
        int a = scanner.nextInt(); // b = 60

        System.out.println("Choisir nb B");
        int b = scanner.nextInt();

        algoDifferences(a, b);
        // algoEuclide
    }

    public static void algoDifferences(int a, int b) {
        while (a != b) {
            if (a < b) {
                int tmp = a;
                a = b;
                b = tmp;
            }
            int res = a - b;
            a = b;
            b = res;
        }
        System.out.println(a);
    }
}
