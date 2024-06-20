import java.util.Scanner;

public class TableauMultiplication {

    public static void main(String[] args) {
        /**
         * Demandez à l'utilisateur un nombre et d'afficher sa table de multiplication
         *  7
         *  7 * 1 = 7
         *  7 * 2 = 14
         *  7 * 3 = 21
         *  7 * 4 = 28
         *  7 * 5 = 35
         *  ...
         *
         */
        System.out.println("Pour quel nombre voulez vous afficher sa table");
        Scanner sc = new Scanner(System.in);
        int nbUser = sc.nextInt();
        for (int i = 1; i <= 10; i++) {
            System.out.println(nbUser + " * " + i + " = " + nbUser * i);
        }
    }
}
