import java.util.Scanner;

public class Exercice1 {
    /**
     * TODO créer une fonction appeller isPremier returne boolean true ou false
     */
    public static void main(String[] args) {
        System.out.println("Saisir un nombre");

        Scanner sc = new Scanner(System.in);
        int nb = sc.nextInt();
        boolean resultat = isPremier(nb);
        System.out.println(resultat);

    }

    // mot clé / return ? void / nomdelafonction / (arg(s))
    public static boolean isPremier(int nb) { //nb = 7
        for (int i = 2; i < nb; i++) {  // instanciation; condition; incrementation
            if (nb % i == 0) {
                return false;
            }
        }
        return true;
    }
}
