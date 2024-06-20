import java.util.Scanner;

public class Factoriel {

    public static void main(String[] args) {
        System.out.println("Entrez un nombre");
        Scanner scanner = new Scanner(System.in);
        int factoriel = scanner.nextInt(); //5

        for (int i = factoriel - 1; i >= 1; i--) {  // ( pour i = ?; tant que i est > < ?; alors i++ ou i--) >= <= ><
            factoriel = factoriel * i;
        }

        System.out.println(factoriel);

    }
}
