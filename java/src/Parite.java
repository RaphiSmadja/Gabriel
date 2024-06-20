import java.util.Scanner;

public class Parite {

    public static void main(String[] args) {
        System.out.println("Choisir un nombre");
        Scanner scanner = new Scanner(System.in);
        int pair = scanner.nextInt();
        if (pair % 2 == 0) {
            System.out.println(pair + " est pair");
        } else {
            System.out.println(pair + " est impair");
        }
    }
}
