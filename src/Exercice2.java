import java.util.Scanner;

public class Exercice2 {
    /**
     * Calculer la moyenne de 3 notes
     */
    public static void main(String[] arg) {
        Scanner sc = new Scanner(System.in);
        float[] tableau = new float[3];

        for (int i = 0; i < 3; i++) {
            System.out.println("Saisir la note " + i);
            tableau[i] = sc.nextFloat();
        }

        System.out.println("La moyenne est : " + (tableau[0] + tableau[1] + tableau[2]) / 3);


        /*
        System.out.println("Saisir la 1ere note");
        float note1 = sc.nextFloat();

        System.out.println("Saisir la 2eme note");
        float note2 = sc.nextFloat();

        System.out.println("Saisir la 3eme note");
        float note3 = sc.nextFloat();

        float resultat = (note1 + note2 + note3) / 3;
        System.out.println(resultat);
         */
    }
}
